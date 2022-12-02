<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;
    protected $fillable = [
       'client_fname', 'client_lname','client_country', 'client_company',
        'client_city', 'client_region', 'client_phone', 'note', 'payment_methode',
        'tax', 'subtotal', 'grandtotal'
    ];
public function products()
{
  return $this->hasMany('App\Models\Product');
}
}