<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoice';

    public $timestamps = true;

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function invoiceItem()
    {
        return $this->hasMany('App\InvoiceItem', 'invoice_id', 'id');
    }

    public static function invoiceNumber(){
        $count = \DB::table('invoice')
            ->where('created_at', '>=', \Carbon\Carbon::now()->subMonth())
            ->select('created_at', \DB::raw('count(*) as total'))
            ->groupBy('created_at')
            ->get();

        $count = collect($count)->sum('total') + 1;

        $year =  \Carbon\Carbon::now()->year;
        $month = \Carbon\Carbon::now()->month;
//        $endMonth = \Carbon\Carbon::now()->endOfMonth();

        $count = $count < 10 ? '0'.$count : $count;
        $month = $month < 10 ? '0'.$month : $month;
        $invoice_id = $year.$month.$count;

        return $invoice_id;
    }
}
