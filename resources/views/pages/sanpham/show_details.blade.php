@extends('layout')
@section('content')

@foreach($details_product as $key => $value)
<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{URL('public/uploads/products/'.$value->product_image)}}" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="{{URL('public/uploads/products/similar1.jpg')}}" alt=""></a>
										  <a href=""><img src="{{URL('public/uploads/products/similar2.jpg')}}" alt=""></a>
										  <a href=""><img src="{{URL('public/uploads/products/similar3.jpg')}}" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="{{URL('public/uploads/products/similar1.jpg')}}" alt=""></a>
										  <a href=""><img src="{{URL('public/uploads/products/similar2.jpg')}}" alt=""></a>
										  <a href=""><img src="{{URL('public/uploads/products/similar3.jpg')}}" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="{{URL('public/uploads/products/similar1.jpg')}}" alt=""></a>
										  <a href=""><img src="{{URL('public/uploads/products/similar2.jpg')}}" alt=""></a>
										  <a href=""><img src="{{URL('public/uploads/products/similar3.jpg')}}" alt=""></a>
										</div>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>{{$value->product_name}}</h2>
								<p>Thương hiệu: {{$value->brand_name}}</p>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span>{{number_format($value->product_price)}} VNĐ</span>
								</span>
								<p><b>Danh mục :</b> {{$value->category_name}}</p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->

					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">		
								<li class="active"><a href="#reviews" data-toggle="tab">Chi tiết sản phẩm</a></li>
							</ul>
						</div>
						
							
							
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<p>{!!$value->product_content!!}</p>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
@endforeach
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">sản phẩm gợi ý</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL('public/frontend/images/recommend1.jpg')}}" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL('public/frontend/images/recommend1.jpg')}}" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL('public/frontend/images/recommend1.jpg')}}" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL('public/frontend/images/recommend1.jpg')}}" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL('public/frontend/images/recommend1.jpg')}}" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL('public/frontend/images/recommend1.jpg')}}" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
@endsection