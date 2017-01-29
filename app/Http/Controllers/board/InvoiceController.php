<?php

namespace App\Http\Controllers\board;

use App\Invoice;
use App\InvoiceItem;
use App\Project;
use Illuminate\Http\Request;

use Carbon\Carbon;
use Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    protected $project;
    protected $invoice;
    protected $invoiceItem;

    public function __construct()
    {
        $this->invoice = new Invoice;
        $this->invoiceItem = new InvoiceItem;
        $this->project = new Project;
    }

    public function index()
    {
        return view('admin.board.invoice.index')->with('invoices', $this->invoice->orderBy('status', 'asc')->get());
    }

    public function create()
    {
        return view('admin.board.invoice.create')
            ->with('invoices', $this->invoice->get())
            ->with('projects', $this->project->get());
    }

    public function show($id)
    {
        $invoice = $this->invoice->find($id);

        Carbon::setLocale('nl');

        $items = [];

        foreach ($invoice->invoiceItem as $item){
           $items[] = ['name' => $item->name, 'price' => $item->price, 'amount' => $item->qty];
        }

        $order = [
            'date' => Carbon::createFromFormat('Y-m-d H:i:s', $invoice->updated_at)->formatLocalized('%d %b %Y'),
            'adres' => $invoice->adres,
            'postcode' => $invoice->postcode,
            'stad' => $invoice->stad,
            'name' => $invoice->name,
            'order_id' => $invoice->order_id,
            'business' => $invoice->business_name,
            'email' => $invoice->email,
            'kvk' => $invoice->kvk,
            'btw' => $invoice->btw_nr,
            'items' => $items,
        ];

        return view('admin.board.invoice.show')->with('order', $order);
    }

    public function edit($id)
    {
        return view('admin.board.invoice.edit')
            ->with('invoice', $this->invoice->find($id))
            ->with('projects', $this->project->get());

    }

    public function update(Request $request)
    {
        $rules = [
//            'customer'          => 'required',
//            'price'          => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->route('board.invoice.edit', $request->invoice_id)
                ->withErrors($validator)
                ->withInput();
        }

        $invoice = $this->invoice->find($request->id);

        if($request->add_item == 1){
//            dd($request);
            $this->invoiceItem->insert([
                [
                'name' => $request->name,
                'invoice_id' => $request->invoice_id,
                'qty' => $request->qty,
                'price' => $request->price,
                ],
            ]);
        }else{
            $invoice->adres = $request->adres;
            $invoice->postcode = $request->postcode;
            $invoice->stad = $request->stad;
            $invoice->name = $request->name;
            $invoice->business_name = $request->business_name;
            $invoice->kvk = $request->kvk;
            $invoice->btw_nr = $request->btw_nr;
            $invoice->email = $request->email;

            $invoice->save();
        }


        \Session::flash('succes_message','successfully.');

        return redirect()->route('financial.invoice.edit', $request->id);
    }

    public function store(Request $request)
    {
        $rules = [
//            'customer'          => 'required',
//            'price'          => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->route('financial.invoice.create')
                ->withErrors($validator)
                ->withInput();
        }

//        dd($request['items']);

        $invoice = $this->invoice;

        $invoice->project_id = $request->project_id;
        $invoice->adres = $request->adres;
        $invoice->postcode = $request->postcode;
        $invoice->stad = $request->stad;
        $invoice->order_id = \App\Invoice::invoiceNumber();
        $invoice->name = $request->name;
//        $invoice->order_id = $request->order_id;
        $invoice->business_name = $request->business_name;
        $invoice->kvk = $request->kvk;
        $invoice->btw_nr = $request->btw_nr;
        $invoice->email = $request->email;
        $invoice->status = 'open';

        $invoice->save();

        \Session::flash('succes_message','successfully.');

        return redirect()->route('financial.invoice.store');
    }

    public function destroy(Request $request)
    {
        if($request->invoice_item){
            $invoiceItem = new InvoiceItem;
            $item = $invoiceItem->find($request->invoice_item);
//            $item = ::find($request->invoice_item);
//            dd($item->invoice);
            $item->delete();

            \Session::flash('succes_message','successfully deleted. ');

            return redirect()->route('financial.invoice.edit', $item->invoice->id);
        }else{

        }
//        $request->invoice_item;

//        return redirect()->route('financial.invoice.edit', $request->invoice_id);
    }
}
