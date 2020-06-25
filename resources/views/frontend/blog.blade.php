@extends('layouts.app')
@section('content')
	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="img/images.jpg"></div>
		<div class="home_content">
			<div class="home_title">the blog</div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">

				<!-- Blog Content -->

				<div class="col-lg-8">
					
					<div class="blog_post_container">

						<!-- Blog Post -->
						@foreach($blog as $bl)
						<div class="blog_post">
							<div class="blog_post_image">
								<img src="{{$bl->img}}">
								<div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
									<div class="blog_post_month">{{date("d-m-Y", strtotime($bl->datesubmitted))}}</div>
								</div>
							</div>
							{{-- <div class="blog_post_meta">
								<ul>
									<li class="blog_post_meta_item"><a href="">by Lore Papp</a></li>
									<li class="blog_post_meta_item"><a href="">Uncategorized</a></li>
									<li class="blog_post_meta_item"><a href="">3 Comments</a></li>
								</ul>
							</div> --}}
							<div class="blog_post_title"><a href="/detail_blog/{{$bl->id}}">{{$bl->title}}</a></div>
							<div class="blog_post_text">
								<p>{!!$bl->descriptive!!}</p>
							</div>
						</div>
						@endforeach
						
					</div>
						
					<div class="blog_navigation ">			
							 {{$blog->links()}}					
					</div>
				</div>

				<!-- Blog Sidebar -->

				<div class="col-lg-4 sidebar_col">
					<!-- Sidebar Archives -->
					<div class="sidebar_categories">
						<div class="sidebar_title">Thể loại</div>
						<div class="sidebar_list">
							<ul>
								@foreach($category as $cr)
								<li><a href="/category_blog/{{$cr->Id_category}}">{{$cr->Ten_category}}</a></li>
								@endforeach
							</ul>
						</div>
					</div>

					<!-- Sidebar Latest Posts -->

					<div class="sidebar_latest_posts">
						<div class="sidebar_title">Tin tổng hợp</div>
						<div class="latest_posts_container">
							<ul>

								@foreach($blogrd as $rd)
								<li class="latest_post clearfix">
									<div class="latest_post_image mr-2">
										<img src="{{$rd->img}}" alt="" width="100" height="100">
									</div>
									<div class="latest_post_content">
										<div class="latest_post_title trans_200"><a href="/detail_blog/{{$rd->id}}">{{$rd->title}}</a></div>
										<div class="latest_post_meta">
											<div class="latest_post_author trans_200">{{$rd->author}}</div>
											<div class="latest_post_date trans_200">{{$rd->datesubmitted}}</div>
										</div>
									</div>
								</li>
								@endforeach

							</ul>
						</div>
					</div>

				

				</div>
			</div>
		</div>
	</div>

@endsection
