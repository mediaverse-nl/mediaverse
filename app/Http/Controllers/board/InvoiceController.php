<?php

namespace App\Http\Controllers\board;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function index()
    {
        Carbon::setLocale('nl');

        $order = [
            'date' => Carbon::now()->formatLocalized('%d %b %Y'),
            'adres' => 'Ouverture 228',
            'postcode' => '5629PX',
            'stad' => 'Eindhoven',
            'name' => 'Rob van Schaik',
            'order_id' => '20161102',
            'business' => 'Primera Blixembosch',
            'email' => '',
            'items' => [
                ['name' => 'Hosting + Service (1 jaar)', 'price' => '200', 'amount' => '1'],
                ['name' => 'Website logo', 'price' => '50', 'amount' => '1'],
                ['name' => 'Extra werk', 'price' => '238', 'amount' => '1'],
            ],
        ];

//        dd(collect($order['items'])->price);

        return view('invoice.mediaverse')->with('order', $order);
    }
}
