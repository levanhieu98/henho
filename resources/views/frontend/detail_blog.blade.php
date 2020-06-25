@extends('layouts.app')
@section('content')
<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="img/blog_background.jpg"></div>
	<div class="home_content">
		<div class="home_title">the blog</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="single_listing">
				<!-- Hotel Info -->
				<div class="hotel_info">
					@foreach($blog as $bl)
					<!-- Title -->
					<div class="hotel_title_container d-flex flex-lg-row flex-column">
						<div class="hotel_title_content">
							<h1 class="hotel_title">{{$bl->title}}</h1>
							
							<div class="hotel_location">{{$bl->datesubmitted}}</div>
						</div>
					</div>

					<!-- Listing Image -->

					<div class="hotel_image">
						<img src="{{$bl->img}}" alt="">
						
					</div>
				</div>
				<div class="hotel_gallery">
					<div class="hotel_slider_container">
						
						<div class="owl-carousel owl-theme hotel_slider">

							<!-- Hotel Gallery Slider Item -->
							@foreach($abum as $ab)
							<div class="owl-item">
								<a class="colorbox cboxElement" href="{{$ab->image_blog}}">
									<img src="{{$ab->image_blog}}">
								</a>
								
							</div>
							@endforeach
						
						</div>
					
						<!-- Hotel Slider Nav - Prev -->
						<div class="hotel_slider_nav hotel_slider_prev">
							<svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
							<defs>
								<linearGradient id='hotel_grad_prev'>
									<stop offset='0%' stop-color='#fa9e1b'/>
									<stop offset='100%' stop-color='#8d4fff'/>
								</linearGradient>
							</defs>
							<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
							<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
							11.042,18.219 "/>
						</svg>
					</div>
					
					{{-- Hotel Slider Nav - Next --}}
					<div class="hotel_slider_nav hotel_slider_next">
						<svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
						<defs>
							<linearGradient id='hotel_grad_next'>
								<stop offset='0%' stop-color='#fa9e1b'/>
								<stop offset='100%' stop-color='#8d4fff'/>
							</linearGradient>
						</defs>
						<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
						M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
						C22.545,2,26,5.541,26,9.909V23.091z"/>
						<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
						17.046,15.554 "/>
					</svg>
				</div>
				
			</div>
			<div class="hotel_info_text">
				<p>{!!$bl->content!!}</p>
			</div>
			@endforeach
		</div>
		
		<!-- Rooms -->

		<div class="rooms">

			<!-- Room -->
			<div class="room">

				<!-- Room -->
				@foreach($blognew as $bn)
				<div class="row mb-3">
					<div class="col-lg-2">
						<div class="room_image"><img src="{{$bn->img}}"></div>
					</div>
					<div class="col-lg-7">
						<div class="room_content">
							<div class="room_title">{!!$bn->title!!}</div>
							<div class="room_text">{{$bn->datesubmitted}}</div>
							<div class="room_extra">{{$bn->author}}</div>
						</div>
					</div>
					<div class="col-lg-3 text-lg-right">
						<div class="room_button">
							<div class="button book_button trans_200"><a href="/detail_blog/{{$bn->id}}">Xem<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>	
				@endforeach
			</div>

			

		</div>

		<!-- Reviews -->

		
		<!-- Location on Map -->

	{{-- 	<div class="location_on_map">
			<div class="location_on_map_title">location on map</div>

			<!-- Google Map -->
			
			<div class="travelix_map">
				<div id="google_map" class="google_map">
					<div class="map_container">
						<div id="map"></div>
					</div>
				</div>
			</div>

		</div> --}}
	</div>
</div>
</div>
</div>		
</div>

@endsection
