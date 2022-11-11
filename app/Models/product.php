<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'category_id', 'description', 'image', 'image2',
        'image3','image4', 'href', 'price'
      ];
    
      public function category()
      {
        return $this->belongsTo('App\Models\Category');
      }}
