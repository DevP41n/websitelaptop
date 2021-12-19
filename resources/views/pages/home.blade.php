@extends('layout')

@section('content')
<div class="features_items">
                        <h2 class="title text-center">Các sản phẩm mới</h2>
                        @foreach($all_product as $pro)
                        <a href="{{URL('/chi-tiet-san-pham/'.$pro->product_id)}}">
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{URL('public/uploads/products/'.$pro->product_image)}}" alt="" />
                                            <h2>{{number_format($pro->product_price)}} VNĐ</h2>
                                            <p>{{$pro->product_name}}</p>
                                            <a href="{{URL('/chi-tiet-san-pham/'.$pro->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fas fa-laptop"></i>Xem chi tiết</a>
                                        </div>    
                                </div>      
                            </div>
                        </div>  
                    </a>
                        @endforeach             
                    </div>
@endsection