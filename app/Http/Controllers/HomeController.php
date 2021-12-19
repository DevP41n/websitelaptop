<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Auth;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect; //Thư viện trả về kết quả
session_start();

use App\Models\Product;
use App\Models\Category_product;

class HomeController extends Controller
{
    public function index(){
        
        $category = Category_product::where('category_status','1')->orderby('category_id','desc')->get();
        $all_product = Product::where('product_status','1')->orderby('product_id','asc')->paginate(6);


        return view('pages.home',compact('category','all_product'));

    	// $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();

    	// $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();  //

		// $all_product = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->paginate(3);

    	// return view('pages.home')->with('category',$cate_product)->with('all_product',$all_product);
    }
    public function search(Request $request)
    {
    	$keywords = $request->keywords_submit;

    	$cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
    	// $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();

    	$search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get(); 
    	return view('pages.sanpham.search')->with('category',$cate_product)->with('search_product',$search_product);
    }
}
