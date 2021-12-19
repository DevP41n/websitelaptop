<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HuGEAR</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{('public/frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +84 0818881888</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> Hugear@gamail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.facebook.com/hugear18dtha6/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{URL('/trang-chu')}}"><img src="{{('/websitelaptop/public/frontend/images/hugearlogo.jpg')}}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <form action="{{URL('/tim-kiem')}}" method="POST">
                            {{csrf_field()}}
                        <div class="search_box pull-right">
                            <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm"/>
                            <button type="submit" class="btn btn-success">Tìm kiếm</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL('/trang-chu')}}" class="active">Trang chủ</a></li>
                                <li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        @foreach($category as $key => $cate)
                                        <li><a href="{{URL('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></li> 
                                        @endforeach
                                    </ul>
                                </li> 
                                <li><a href="{{URL('/news')}}">Tin tức</a></li> 
                                <li><a href="{{URL('/contact')}}">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item active">
                                {{-- <div class="col-sm-6">
                                    <h1><span>HU</span>GEAR</h1>
                                    <h2>Laptop Gaming MSI GE66 Raider</h2>
                                    <p>Nhìn phát là biết laptop xịn liền chứ gì nữa :). </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div> --}}
                                <div class="col-sm-11">
                                    <img src="{{('/websitelaptop/public/frontend/images/msi.jpg')}}" class="girl img-responsive" alt="" />
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 style ="color:yellow"><b>MSI</b></h5>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="item">
                                {{-- <div class="col-sm-6">
                                    <h1><span>HU</span>GEAR</h1>
                                    <h2>ASUS ROG STRIX</h2>
                                    <p>Em laptop này cũng đẹp đó, nhưng thua em MSI GE66 Raider. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div> --}}
                                <div class="col-sm-11">
                                    <img src="{{('/websitelaptop/public/frontend/images/acer.jpg')}}" class="girl img-responsive" alt="" />
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 style ="color:yellow"><b>ACER</b></h5>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="item">
                                {{-- <div class="col-sm-6">
                                    <h1><span>HU</span>GEAR</h1>
                                    <h2>Alienware M15 Gaming</h2>
                                    <p>Laptop này cũng xịn như em GE66 Raider :). </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div> --}}
                                <div class="col-sm-11">
                                    <img src="{{('/websitelaptop/public/frontend/images/mac.jpg')}}" class="girl img-responsive" alt="" />
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 style ="color:yellow"><b>MACBOOK</b></h5>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh mục sản phẩm</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            @foreach($category as $key => $cate)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
                                </div>
                            </div>
                            @endforeach

                        </div><!--/category-products-->
                    
                        {{-- <div class="brands_products"><!--brands_products-->
                            <h2>Thương hiệu sản phẩm</h2>
                            <div class="brands-name">
                                @foreach($brand as $key => $brand)
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="{{URL('/thuong-hieu-san-pham/'.$brand->brand_id)}}"> <span class="pull-right"></span>{{$brand->brand_name}}</a></li>
                                </ul>
                                @endforeach
                            </div>
                        </div> --}}<!--/brands_products-->
                        {{-- 
                        <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div><!--/price-range--> --}}
                        
                        {{-- <div class="shipping text-center"><!--shipping-->
                            <img src="images/home/shipping.jpg" alt="" />
                        </div><!--/shipping--> --}}
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="">
                            <a href="{{URL('/trang-chu')}}"><img src="{{('/websitelaptop/public/frontend/images/hugearlogo.jpg')}}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('/websitelaptop/public/frontend/images/tandek.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Nguyễn Huỳnh Thanh Tân</p>
                                <h2>Tham gia khóa học Agile & Scrum của DEK Technologie</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('/websitelaptop/public/frontend/images/tiendek.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Nguyễn Huỳnh Việt Tiến</p>
                                <h2>Tham gia khóa học Agile & Scrum của DEK Technologie</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('/websitelaptop/public/frontend/images/binhdek.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Trương Thanh Bình</p>
                                <h2>Tham gia khóa học Agile & Scrum của DEK Technologie</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3"> 
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.125120810274!2d106.71230301474917!3d10.801727892304356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528a500e8c3d5%3A0xedfca63e47b5afb8!2zNDc1YSDEkGnhu4duIEJpw6puIFBo4bunLCBQaMaw4budbmcgMjUsIELDrG5oIFRo4bqhbmgsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCA3MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1611153683292!5m2!1svi!2s" width="350" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                </div>
            </div>
        </div>
        

        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <h3 class="">HuGear Inc.</h3>
                    <h4 class="">Thiết kế bởi 3 thành viên : <a target="_blank" href="https://www.facebook.com/nguyenhuynhthanhtan1908/">Nguyễn Huỳnh Thanh Tân</a> <a style="color: black"> - </a><a target="_blank" href="https://www.facebook.com/HvNeiTHandSome">Nguyễn Huỳnh Việt Tiến</a> <a style="color: black"> - </a><a target="_blank" href="https://www.facebook.com/profile.php?id=100009086340172"> Trương Thanh Bình</a></h4>
                    
                    
                    {{-- <a target="_blank" href="https://www.facebook.com/HvNeiTHandSome"> Nguyễn Huỳnh Việt Tiến - </a><a target="_blank" href="https://www.facebook.com/profile.php?id=100009086340172"> Trương Thanh Bình</a></span></p>
                    <p class="pull-right"><a target="_blank" href="https://www.facebook.com/HvNeiTHandSome">Nguyễn Huỳnh Việt Tiến</a> --}}
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>