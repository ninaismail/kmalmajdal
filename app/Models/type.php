<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'href'
    ];
    public function products()
    {
      return $this->hasMany('App\Models\Product');
    }
}
