<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use DB;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
   public function Index(){
        $products = DB::table('tbl_product')->get();
        return view('index', compact('products'));
   }

    public function AddCart(Request $req ,$id){
        $product = DB::table('tbl_product')->where('product_id', $id)->first();
        if($product!=null){
        $oldcart =   Session('Cart') ? Session('Cart') : null;
        $newCart  = new Cart($oldcart);


        $newCart->AddCart($product, $id);
        $req->session()->put('Cart', $newCart);
            // return Redirect('home');
            // dd(Session('Cart'));


    }
    return Redirect('/');
    }

}
