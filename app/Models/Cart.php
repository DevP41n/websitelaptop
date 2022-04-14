<?php

namespace App\Models;

class Cart{
    public $product=null;
    public $totalPrice =0;
    public $totalQuanty = 0;


    public function __constant($cart)
    {
        if($cart)
        {
            $this->product = $cart -> product;
            $this->totalPrice = $cart -> totalPrice;
            $this->totalQuanty = $cart -> totalQuanty;
        }
    }

    public function AddCart($product, $id)
    {
        $newProduct = ['quanty' => 1, 'productInfo' => $product];
        if($this->product)
        {
            if(array_key_exists($id, $product)){
            $newProduct = $product[$id];
            }
        }
        $newProduct['quanty']++;
        $newProduct['price'] = $newProduct['quanty'] * $product->product_price;
        $this->product[$id] = $newProduct;
        $this->totalPrice + $product->product_price;
        $this->totalQuanty++;

    }

}

?>
