<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "tbl_product";

    public function category_product()
    {
    	return $this->belongsTo('App\Models\Category_product','category_id','product_id');
    }

    public function brand()
    {
    	return $this->belongsTo('App\Models\Brand','brand_id','product_id');
    }
}
