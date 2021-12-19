@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhật tin tức
                        </header>
                        <div class="panel-body">
                            <?php
                                $message = Session::get('message');
                                if($message)
                                {
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                                }
                            ?>
                           		<div class="position-center">
                                @foreach($edit_news as $key => $news)
                                <form role="form" action="{{URL('/update-news/'.$news->news_id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                	<div class="form-group">
                                    	<label for="exampleInputCategory">Tiêu đề tin tức</label>
                                    	<input type="text" name ="news_title" class="form-control" id="exampleInputEmail1" value="{{$news->news_title}}">
                                	</div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCategory">Hình ảnh tin tức</label>
                                    <input type="file" name ="news_image" class="form-control" id="exampleInputEmail1" > 
                                    <img src="{{URL('public/uploads/news/'.$news->news_image)}}"height="70px" witdh="70px">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputDesc">Nội dung tin tức</label>
                                    <textarea style = "resize: none" rows="6" class="form-control" name= "news_content" id="ckeditor3" 
                                    id="exampleInputPassword1">{{$news->news_content}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputStatus">Hiển thị</label>   
                                    <select name ="news_status" class="form-control input-sm m-bot15">
                                        <option value = "0">Ẩn</option>
                                        <option value = "1">Hiển thị</option>
                           			 </select>
                                </div>
                               
                                <button type="submit" name = "add_product" class="btn btn-info">Cập nhật tin tức</button>
                            </form>

                            @endforeach
                            </div>

                        </div>
                    </section>

            </div>
@endsection