@extends('layout')
@section('content')
<div class="col-sm-12">
					<div class="blog-post-area">
						<h2 class="title text-center">TIN TỨC CÔNG NGHỆ</h2>
						
						<div class="single-blog-post">
						@foreach($show_news as $key=>$news)
							@if($news->news_status == '1')
							<h3><b>{{$news->news_title}}</b></h3>
							<a href="">
								<img src="{{URL('public/uploads/news/'.$news->news_image)}}" height="550" alt="">
							</a>
							<p>{!!$news->news_content!!}</p>
							@endif
						@endforeach
						</div>
					</div><!--/blog-post-area-->
@endsection