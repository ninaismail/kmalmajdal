<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_no', 'invoice_date', 'title', 'client_fname', 'client_lname',
        'client_city', 'client_region', 'client_phone', 'note', 'payment_method',
        'tax', 'subtotal', 'grandtotal', 'totalweight'
    ];
public function products()
{
  return $this->hasMany('App\Models\Product');
}
}