<?php

namespace App\Http\Controllers;

use App\Invoice;
use Mollie;
use Illuminate\Http\Request;

use App\Http\Requests;

class MollieController extends Controller
{
    const STATUS_PENDING = 'pending';
    const STATUS_COMPLETED = 'paid';
    const STATUS_CANCELLED = 'cancelled';
    const STATUS_FAILED = 'failed';
    const STATUS_OPEN = 'open';

    protected $invoice;
    protected $mollie;

    public function __construct()
    {
        $this->mollie = Mollie::api();
        $this->invoice = new Invoice();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->input('postcode') && $request->input('order_id')){

            $invoice = $this->invoice
                ->where('postcode', $request->input('postcode'))
                ->where('order_id', $request->input('order_id'));
//                ->where('status', 'open');

            if ($invoice->exists()){
//dd($invoice->first()->status);
                if ($invoice->first()->status != self::STATUS_COMPLETED){

                    $subtotal = 0;

                    foreach ($invoice->first()->invoiceItem as $invoiceItem){
                        $subtotal += $invoiceItem->qty * $invoiceItem->price++;
                    }

                    $total = $subtotal + $subtotal * 0.21;

                    $payment = Mollie::api()->payments()->create([
                        "amount"      => $total,
                        "description" => "Factuur: #". $request->order_id,
                        "redirectUrl" => route('mollie.show', $request->order_id),
                        'metadata'    => array(
                            'order_id' => $request->order_id,
                        )
                    ]);

                    $inv = $invoice->first();

                    $inv->mollie_id = $payment->id;
                    $inv->status = self::STATUS_PENDING;

                    $inv->save();

                    return redirect($payment->getPaymentUrl());
                }else{
                    return redirect()->route('mollie.show', $invoice->first()->order_id);
                }
            }else{
                \Session::flash('error_message','Deze gegevens zijn niet bekend bij ons.');
            }

        }else{
            \Session::flash('error_message','Niet alle velden zijn ingevuld.');
        }

        return view('mollie.index');
    }

    public function show($id)
    {
        $order = $this->invoice->where('order_id', $id)->first();

        $payment =  $this->mollie->payments()->get($order->mollie_id);

        if ($payment->isPaid())
        {
            $order->status = self::STATUS_COMPLETED;
            \Session::flash('succes_message','De betaling is voldaan. Factuur #'.$order->order_id);
        }
        elseif (! $payment->isOpen())
        {
            $order->status = self::STATUS_OPEN;
            \Session::flash('error_message','Er is iets misgegaan, Probeer het nog eens.');
        }
        $order->save();

        return view('mollie.index');
    }
}
