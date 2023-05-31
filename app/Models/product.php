<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
 protected $table = "products";

 public function  product_type(){
    return $this -> belongsTo ('App\type_product');

 }

 public function bill_detail(){
    return $this -> hasMany ('App\BillDetail');
}

public function comments(){
    return $this -> hasMany ('App\comment');
}

public function wishlist(){
    return  $this -> belongsTo ('App\product');
}
}
