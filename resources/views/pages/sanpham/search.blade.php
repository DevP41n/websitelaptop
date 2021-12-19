@extends('layout')

@section('content')
<div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Kết quả tìm kiếm</h2>
                        @foreach($search_product as $key=>$product)
                        {{-- <a href="{{URL('/chi-tiet-san-pham/'.$product->product_id)}}"> --}}
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{URL('public/uploads/products/'.$product->product_image)}}" alt="" />
                                            <h2>{{number_format($product->product_price)}} VNĐ</h2>
                                            <p>{{$product->product_name}}</p>
                                            <a href="{{URL('/chi-tiet-san-pham/'.$product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
                                        </div>
                                        {{-- <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div> --}}
                                </div>
                                {{-- <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Thêm yêu thích</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Thêm so sánh</a></li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>  
                        @endforeach
{{--                         <div>{{$all_product->onEachSide(3)->links()}}</div>  --}}                    
                    </div><!--features_items-->

{{-- <div class="category-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="tshirt" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{('public/frontend/images/gallery1.jpg')}}" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>                                
                            </div>                                                    
                        </div>
                    </div><!--/category-tab--> --}}

@endsection