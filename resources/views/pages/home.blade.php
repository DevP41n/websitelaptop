<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Camera Store</title>
</head>

<body>
@extends('layout')
@section('content')
    <!-- slider area start -->
    <section class="slider-area-rel">
        <div class="slider-active slider-active-6 s-dot-style dot-style dot-style-1 dot-bottom-left-2 ">
            <div class="single-slider single-slider-3 slider-height-4 d-flex align-items-center light-green-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-6 pt-60 pb-10">
                            <div class="slider-content-6">
                                <span class="s-subtitle s-subtitle-3 s-subtitle-6 pb-25"> Sản phẩm mới</span>
                                <h2 class="s-title s-title-2 s-title-6 pb-28">{{$product_banner_newest->product_name}}</h2>
                                <p class="s-desc pb-75 slider-p-6">
                                    Hãng: {{$product_banner_newest->brand_name}}</p>
                                <div class="p-btn p-btn-5 slider-btn-6">
                                    <a href="{{URL('/chi-tiet-san-pham/'.$product_banner_newest->product_id)}}">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-6">
                            <div class="slider-thumb-6">
                                <img src="{{URL('public/uploads/products/'.$product_banner_newest->product_image)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider area end -->
    <!-- category area start -->
    <div id="category-area" class="category__area category__br-tp gray-bg-5">
        <div class="container-fluid">
            <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 gx-0">
{{--                tối đa 5 ô --}}
                <div class="col">
                    <div class="category__item category__br-right fix">
                        <div class="category__thumb">
                            <a href="{{URL('/danh-muc-san-pham/6')}}">
                                <img src="resources/client/img/brand/img.png" alt="">
                            </a>
                        </div>
                        <div class="category__content text-center">
                            <div class="category__tag mb-10">
                                <a href="{{URL('/danh-muc-san-pham/6')}}"></a>
                            </div>
                            <a href="{{URL('/danh-muc-san-pham/6')}}" class="link-btn">Sản phẩm SONY</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- category area end -->
    <div class="top-selling-area pb-100 pt-95 gray-bg-4 ">
        <div class="container ">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="section-title top-selling-title text-center pb-47">
                        <span class="p-subtitle p-subtitle-2">Máy ảnh</span>
                        <h3 class="p-title pb-15 mb-0">Những sản phẩm mới nhất</h3>
                        <p class="p-desc"></p>
                    </div>
                </div>
            </div>
            <div class="single-product-6-wrapper border-none">
                <div class="row pb-20 justify-content-center">
                    @foreach($all_product as $pro)
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 box-shadow-12  wow fadeInUp"
                         style="width: calc(23vw - 10px); background-color: #f6f6f6;; padding: 3px; margin: 8px;">
                        <div class="single-product single-product-6" style="border:none" data-wow-delay=".2s">
                            <div class="product-thumb">
                                <a href="{{URL('/chi-tiet-san-pham/'.$pro->product_id)}}">
                                    <img src="{{URL('public/uploads/products/'.$pro->product_image)}}" style="border-radius:10px " alt="#">
{{--                                    <img src="{{URL('public/uploads/products/'.$pro->product_image)}}" alt="#">--}}
                                </a>
                                <div class="cart-btn cart-btn-1 p-abs">
                                    <a href="#">Thêm vào giỏ</a>
                                </div>
                                <!-- <span class="discount discount-2 p-abs">new</span>
                                <span class="discount discount-3 p-abs">-20%</span>
                                <div class="product-action product-action-1 p-abs">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModal">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div> -->
                            </div>
                            <div class="product-content">
                                <h4 class="pro-title pro-title-1"><a href="{{URL('/chi-tiet-san-pham/'.$pro->product_id)}}">
                                        {{$pro->product_name}}
                                    </a></h4>
                                <div class="pro-price">
                                    <span>{{number_format($pro->product_price)}} VNĐ</span>
{{--                                    <del>3.500.000 VNĐ</del>--}}
                                </div>
                                <div class="rating">
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star"></i>
                                    <i class="fal fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="btn-area mt-30 text-center wow fadeInUp mb-20" data-wow-delay=".5s">
                            <div class="p-btn p-btn-1">
                                <a href="san-pham">Hiển thị tất cả sản phẩm </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- top selling area end -->
        <!-- top selling product area start -->
{{--        <div class="top-selling-product pb-95 gray-bg-4 pt-95">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xxl-12">--}}
{{--                        <div class="section-title text-center pb-47">--}}
{{--                            <span class="p-subtitle p-subtitle-2">Explore The Lookbook</span>--}}
{{--                            <h3 class="p-title pb-15 mb-0">trending Products</h3>--}}
{{--                            <p class="p-desc">Commodo sociosqu venenatis cras dolor sagittis integer luctus sem primis--}}
{{--                                eget--}}
{{--                                maecenas.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xxl-12">--}}
{{--                        <div class="top-selling-active-2 owl-carousel">--}}
{{--                            <div class="single-product mb-15 wow fadeInUp" data-wow-delay=".2s">--}}
{{--                                <div class="product-thumb">--}}
{{--                                    <a href="product-detail">--}}
{{--                                        <img src="resources/client/img/products/product-12.jpg" alt="#">--}}
{{--                                        <img src="resources/client/img/products/product-17.jpg" alt="#"></a>--}}
{{--                                    <div class="cart-btn cart-btn-2 p-abs">--}}
{{--                                        <a href="#">Add to cart</a>--}}
{{--                                    </div>--}}
{{--                                    <span class="discount discount-2 p-abs">New</span>--}}
{{--                                    <span class="discount discount-3 p-abs">-23%</span>--}}
{{--                                    <div class="product-action product-action-1 p-abs">--}}
{{--                                        <a href="#" class="icon-box icon-box-2" data-bs-toggle="modal"--}}
{{--                                           data-bs-target="#productModal">--}}
{{--                                            <i class="fal fa-eye"></i>--}}
{{--                                            <i class="fal fa-eye"></i>--}}
{{--                                        </a>--}}
{{--                                        <a href="#" class="icon-box icon-box-2">--}}
{{--                                            <i class="fal fa-heart"></i>--}}
{{--                                            <i class="fal fa-heart"></i>--}}
{{--                                        </a>--}}
{{--                                        <a href="#" class="icon-box icon-box-2">--}}
{{--                                            <i class="fal fa-layer-group"></i>--}}
{{--                                            <i class="fal fa-layer-group"></i>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="product-content">--}}
{{--                                    <h4 class="pro-title pro-title-2"><a href="product-detail">Simple Stylish Women--}}
{{--                                            Backpack</a></h4>--}}
{{--                                    <div class="pro-price">--}}
{{--                                        <span>£1.296.00</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="rating">--}}
{{--                                        <i class="fal fa-star active"></i>--}}
{{--                                        <i class="fal fa-star active"></i>--}}
{{--                                        <i class="fal fa-star active"></i>--}}
{{--                                        <i class="fal fa-star"></i>--}}
{{--                                        <i class="fal fa-star"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="single-product mb-15 wow fadeInUp" data-wow-delay=".2s">--}}
{{--                                <div class="product-thumb">--}}
{{--                                    <a href="product-detail">--}}
{{--                                        <img src="resources/client/img/products/product-12.jpg" alt="#">--}}
{{--                                        <img src="resources/client/img/products/product-17.jpg" alt="#"></a>--}}
{{--                                    <div class="cart-btn cart-btn-2 p-abs">--}}
{{--                                        <a href="#">Add to cart</a>--}}
{{--                                    </div>--}}
{{--                                    <span class="discount discount-2 p-abs">New</span>--}}
{{--                                    <span class="discount discount-3 p-abs">-23%</span>--}}
{{--                                    <div class="product-action product-action-1 p-abs">--}}
{{--                                        <a href="#" class="icon-box icon-box-2" data-bs-toggle="modal"--}}
{{--                                           data-bs-target="#productModal">--}}
{{--                                            <i class="fal fa-eye"></i>--}}
{{--                                            <i class="fal fa-eye"></i>--}}
{{--                                        </a>--}}
{{--                                        <a href="#" class="icon-box icon-box-2">--}}
{{--                                            <i class="fal fa-heart"></i>--}}
{{--                                            <i class="fal fa-heart"></i>--}}
{{--                                        </a>--}}
{{--                                        <a href="#" class="icon-box icon-box-2">--}}
{{--                                            <i class="fal fa-layer-group"></i>--}}
{{--                                            <i class="fal fa-layer-group"></i>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="product-content">--}}
{{--                                    <h4 class="pro-title pro-title-2"><a href="product-detail">Simple Stylish Women--}}
{{--                                            Backpack</a></h4>--}}
{{--                                    <div class="pro-price">--}}
{{--                                        <span>£1.296.00</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="rating">--}}
{{--                                        <i class="fal fa-star active"></i>--}}
{{--                                        <i class="fal fa-star active"></i>--}}
{{--                                        <i class="fal fa-star active"></i>--}}
{{--                                        <i class="fal fa-star"></i>--}}
{{--                                        <i class="fal fa-star"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- top selling product area end -->
        <!-- border -->
        <div class="hr-border"></div>
        <!-- product modal area start -->
{{--        <div class="product__modal-area modal fade" id="productModal" tabindex="-1" role="dialog"--}}
{{--             aria-labelledby="productModal" aria-hidden="true">--}}
{{--            <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="product__modal-inner position-relative">--}}
{{--                        <div class="product__modal-close">--}}
{{--                            <button data-bs-dismiss="modal" aria-label="Close">--}}
{{--                                <i class="ti-close"></i>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                        <div class="product__modal-left">--}}
{{--                            <div class="tab-content mb-10" id="productModalThumb">--}}
{{--                                <div class="tab-pane fade show active" id="pro-1" role="tabpanel"--}}
{{--                                     aria-labelledby="pro-1-tab">--}}
{{--                                    <div class="product__modal-thumb w-img">--}}
{{--                                        <img src="resources/client/img/products/modal/product-modal-1.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="tab-pane fade" id="pro-2" role="tabpanel" aria-labelledby="pro-2-tab">--}}
{{--                                    <div class="product__modal-thumb w-img">--}}
{{--                                        <img src="resources/client/img/products/modal/product-modal-2.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="tab-pane fade" id="pro-3" role="tabpanel" aria-labelledby="pro-3-tab">--}}
{{--                                    <div class="product__modal-thumb w-img">--}}
{{--                                        <img src="resources/client/img/products/modal/product-modal-3.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="tab-pane fade" id="pro-4" role="tabpanel" aria-labelledby="pro-4-tab">--}}
{{--                                    <div class="product__modal-thumb w-img">--}}
{{--                                        <img src="resources/client/img/products/modal/product-modal-4.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="product__modal-nav">--}}
{{--                                <ul class="nav nav-tabs" id="productModalNav" role="tablist">--}}
{{--                                    <li class="nav-item" role="presentation">--}}
{{--                                        <button class="nav-link active" id="pro-1-tab" data-bs-toggle="tab"--}}
{{--                                                data-bs-target="#pro-1" type="button" role="tab" aria-controls="pro-1"--}}
{{--                                                aria-selected="true">--}}
{{--                                            <img src="resources/client/img/products/modal/product-modal-sm-1.jpg"--}}
{{--                                                 alt="">--}}
{{--                                        </button>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item" role="presentation">--}}
{{--                                        <button class="nav-link" id="pro-2-tab" data-bs-toggle="tab"--}}
{{--                                                data-bs-target="#pro-2" type="button" role="tab" aria-controls="pro-2"--}}
{{--                                                aria-selected="false">--}}
{{--                                            <img src="resources/client/img/products/modal/product-modal-sm-2.jpg"--}}
{{--                                                 alt="">--}}
{{--                                        </button>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item" role="presentation">--}}
{{--                                        <button class="nav-link" id="pro-3-tab" data-bs-toggle="tab"--}}
{{--                                                data-bs-target="#pro-3" type="button" role="tab" aria-controls="pro-3"--}}
{{--                                                aria-selected="false">--}}
{{--                                            <img src="resources/client/img/products/modal/product-modal-sm-3.jpg"--}}
{{--                                                 alt="">--}}
{{--                                        </button>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item" role="presentation">--}}
{{--                                        <button class="nav-link" id="pro-4-tab" data-bs-toggle="tab"--}}
{{--                                                data-bs-target="#pro-4" type="button" role="tab" aria-controls="pro-4"--}}
{{--                                                aria-selected="false">--}}
{{--                                            <img src="resources/client/img/products/modal/product-modal-sm-4.jpg"--}}
{{--                                                 alt="">--}}
{{--                                        </button>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product__modal-right">--}}
{{--                            <h3 class="product__modal-title">--}}
{{--                                <a href="product-details.html">Living Room Lighting</a>--}}
{{--                            </h3>--}}
{{--                            <div class="product__modal-rating d-flex align-items-center">--}}
{{--                                <ul class="mr-10">--}}
{{--                                    <li>--}}
{{--                                        <a href="#"><i class="ti-star"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#"><i class="ti-star"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#"><i class="ti-star"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#"><i class="ti-star"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#"><i class="ti-star"></i></a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <div class="customer-review">--}}
{{--                                    <a href="#">(1 customer review)</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="product__modal-price mb-10">--}}
{{--                                <span class="price new-price">$700.00</span>--}}

{{--                                <span class="price old-price">$899.99</span>--}}
{{--                            </div>--}}
{{--                            <div class="product__modal-available">--}}
{{--                                <p> Availability: <span>In Stock</span> </p>--}}
{{--                            </div>--}}
{{--                            <div class="product__modal-sku">--}}
{{--                                <p> Sku: <span> 0026AG90-1</span> </p>--}}
{{--                            </div>--}}
{{--                            <div class="product__modal-des">--}}
{{--                                <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum--}}
{{--                                    claritatem.--}}
{{--                                    Investigationes demonstraverunt lectores legere me lius quod legunt saepius.…</p>--}}
{{--                            </div>--}}
{{--                            <div class="product__modal-quantity mb-15">--}}
{{--                                <h5>Quantity:</h5>--}}
{{--                                <form action="#">--}}
{{--                                    <div class="pro-quan-area d-sm-flex align-items-center">--}}
{{--                                        <div class="product-quantity mr-20 mb-25">--}}
{{--                                            <div class="cart-plus-minus p-relative"><input type="text" value="1" />--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product__modal-cart mb-25">--}}
{{--                                            <button class="product-modal-cart-btn " type="submit">Add to cart</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                            <div class="product__modal-categories d-sm-flex align-items-center">--}}
{{--                                <span>Categories: </span>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#">Decor, </a></li>--}}
{{--                                    <li><a href="#">Lamp, </a></li>--}}
{{--                                    <li><a href="#">Lighting</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="product__modal-categories d-sm-flex align-items-center">--}}
{{--                                <span>Tags: </span>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#">Furniture, </a></li>--}}
{{--                                    <li><a href="#">Lighting, </a></li>--}}
{{--                                    <li><a href="#">Living Room, </a></li>--}}
{{--                                    <li><a href="#">Table</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <!-- product modal area start -->
@endsection
</body>

</html>
