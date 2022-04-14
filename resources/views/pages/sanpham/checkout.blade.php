
<head>
    <title>Thanh toán</title>
</head>

@extends('layout')

@section('content')

    <div class="breadcrumb-area-3 pt-215 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb-wrapper-2 text-center">
                        <h3>Thanh toán</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- coupon-area start -->
    <section class="coupon-area pt-100 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="coupon-accordion">
{{--                        <!-- ACCORDION START -->--}}

{{--                        <div id="checkout-login" class="coupon-content">--}}
{{--                            <div class="coupon-info">--}}
{{--                                <p class="coupon-text"></p>--}}
{{--                                <form action="#">--}}
{{--                                    <p class="form-row-first">--}}
{{--                                        <label>Username or email <span class="required">*</span></label>--}}
{{--                                        <input type="text" />--}}
{{--                                    </p>--}}
{{--                                    <p class="form-row-last">--}}
{{--                                        <label>Password <span class="required">*</span></label>--}}
{{--                                        <input type="text" />--}}
{{--                                    </p>--}}
{{--                                    <p class="form-row">--}}
{{--                                        <button class="s-btn s-btn-2" type="submit">Login</button>--}}
{{--                                        <label>--}}
{{--                                            <input type="checkbox" />--}}
{{--                                           Ghi nhớ--}}
{{--                                        </label>--}}
{{--                                    </p>--}}
{{--                                    <p class="lost-password">--}}
{{--                                        <a href="#">Lost your password?</a>--}}
{{--                                    </p>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- ACCORDION END -->--}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="coupon-accordion">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- coupon-area end -->

    <!-- checkout-area start -->
    <section class="checkout-area pb-70">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkbox-form">
                            <h3>Thông tin mua hàng</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Tên <span class="required">*</span></label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Họ <span class="required">*</span></label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Địa chỉ <span class="required">*</span></label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Thành phố<span class="required">*</span></label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Địa chỉ email <span class="required">*</span></label>
                                        <input type="email" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Điện thoại <span class="required">*</span></label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="your-order mb-30 ">
                            <h3>Your order</h3>
                            <div class="your-order-table table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <th class="product-name">Sản phẩm</th>
                                        <th class="product-total">Tổng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            Fujifilm X-T30 (Màu Đen) (Body), Mới 100% (Chính Hãng)<strong class="product-quantity"> × 1</strong>
                                        </td>
                                        <td class="product-total">
                                            <span class="amount">17,490,000 VNĐ</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr class="shipping">
                                        <th>Giao hàng</th>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Tổng đơn hàng</th>
                                        <td><strong><span class="amount">17,490,000 VNĐ</span></strong>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="payment-method">
                                <div class="accordion" id="checkoutAccordion">

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="paypalThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal">
                                                PayPal, Momo
                                            </button>
                                        </h2>
                                        <div id="paypal" class="accordion-collapse collapse" aria-labelledby="paypalThree" data-bs-parent="#checkoutAccordion">
                                            <div class="accordion-body">
                                                Đang cập nhật
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button-payment mt-20">
                                    <button type="submit" class="s-btn s-btn-2">Đặt hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- checkout-area end -->




@endsection

