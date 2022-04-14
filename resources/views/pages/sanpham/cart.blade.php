
<head>
    <title>Giỏ hàng</title>
</head>

@extends('layout')

@section('content')

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area-3 pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb-wrapper-2 text-center">
                        <h3>Giỏ hàng</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="home">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- Cart Area Strat-->
    <section class="cart-area pt-20 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">Hình ảnh</th>
                                    <th class="cart-product-name">Tên</th>
                                    <th class="product-price">Đơn giá</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-subtotal">Tổng</th>
                                    <th class="product-remove">Loại bỏ</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="product-thumbnail"><a href="product-details"><img src="{{URL('public/uploads/products/image_2022-04-11_12525286382.png')}}" alt=""></a></td>
                                    <td class="product-name"><a href="product-details">Fujifilm X-T30 (Màu Đen) (Body), Mới 100% (Chính Hãng)</a></td>
                                    <td class="product-price"><span class="amount">17,490,000 VNĐ</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus"><input type="text" value="1" /></div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">17,490,000 VNĐ</span></td>
                                    <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="coupon-all">
                                    <div class="coupon2">
                                        <button class="s-btn s-btn-2" name="update_cart" type="submit">Cập nhật </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Tổng</h2>
                                    <ul class="mb-20">
                                        <li>Tổng giá: <span> 17,490,000 VNĐ</span></li>
                                    </ul>
                                    <a class="s-btn s-btn-2" href="thanh-toan">Thanh toán</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Area End-->


@endsection

