<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    protected $table = 'invoice_item';

    public $timestamps = true;

    public function invoice()
    {
        return $this->belongsTo('App\Invoice');
    }
}
