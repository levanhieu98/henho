@extends('layouts.app')
@section('content')
<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="img/gioithieu.jpg"></div>
	<div class="home_content">
		<div class="home_title">Giới thiệu</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="single_listing">
				<!-- Hotel Info -->
				<div class="hotel_info">
					<!-- Title -->
					<div class="hotel_title_container d-flex flex-lg-row flex-column">
						<div class="hotel_title_content">
							<h1 class="hotel_title">Về ứng dụng WhoToDate</h1>
							<div class="rating_r rating_r_5 hotel_rating">
								<i></i>
								<i></i>
								<i></i>
								<i></i>
								<i></i>
							</div>
						</div>	
					</div>
				</div>
				
				<div class="hotel_info_text">
					<p>Xuất phát từ mong muốn kết nối những mảnh ghép yêu thương. Whotodate là mạng xã hội hẹn hò nghiêm túc đầu tiên tại Việt Nam thu hút hàng ngàn người độc thân tham gia mỗi ngày. Chúng tôi tin rằng, dù bạn chưa nếm thử vị ngọt của một mối tình đầu, hay đã mạnh mẽ trải qua những lần đổ vỡ, bạn đều xứng đáng với tình yêu trọn vẹn .</br>Whotodate ra đời đơn giản và cũng rất thú vị từ một câu chuyện tình yêu có thật. Nếu bạn chưa yêu hoặc gặp trục trặc trong chuyện tình cảm thì website này ra đời là vì bạn. Và Whotodate ra đời cũng chính vì thế!</p>

					<p>Đây là môi trường để bạn gặp gỡ những người thú vị nằm ngoài môi trường truyền thống như trường lớp, công việc, hay qua bạn bè. </p>
					<p> Việc đầu tư công sức và thời gian chăm chút cho hồ sơ (profile) của mình càng tốt mới có thể khai thác tối đa tiềm năng của nền tảng hẹn hò này.</p>

				</div>
				
			</div>
			<section class="cd-h-timeline js-cd-h-timeline margin-bottom-md">
					<div class="cd-h-timeline__container container">
						<div class="cd-h-timeline__dates">
							<div class="cd-h-timeline__line">
								<ol>
									<li><a href="#0" data-date="20/05/2020" class="cd-h-timeline__date cd-h-timeline__date--selected">20 May</a></li>
									<li><a href="#0" data-date="27/05/2020" class="cd-h-timeline__date">27 May</a></li>
									<li><a href="#0" data-date="03/06/2020" class="cd-h-timeline__date">03 Jun</a></li>
									<li><a href="#0" data-date="10/06/2020" class="cd-h-timeline__date">10 Jun</a></li>
									<li><a href="#0" data-date="17/06/2020" class="cd-h-timeline__date">17 Jun</a></li>
									{{-- <li><a href="#0" data-date="30/08/2014" class="cd-h-timeline__date">30 Aug</a></li>
									<li><a href="#0" data-date="15/09/2014" class="cd-h-timeline__date">15 Sep</a></li>
									<li><a href="#0" data-date="01/11/2014" class="cd-h-timeline__date">01 Nov</a></li>
									<li><a href="#0" data-date="10/12/2014" class="cd-h-timeline__date">10 Dec</a></li>
									<li><a href="#0" data-date="19/01/2015" class="cd-h-timeline__date">29 Jan</a></li>
									<li><a href="#0" data-date="03/03/2015" class="cd-h-timeline__date">3 Mar</a></li> --}}
								</ol>

								<span class="cd-h-timeline__filling-line" aria-hidden="true"></span>
							</div> <!-- .cd-h-timeline__line -->
						</div> <!-- .cd-h-timeline__dates -->

						<ul>
							<li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive">Prev</a></li>
							<li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--next">Next</a></li>
						</ul>
					</div> <!-- .cd-h-timeline__container -->

					<div class="cd-h-timeline__events">
						<ol>
							<li class="cd-h-timeline__event cd-h-timeline__event--selected text-component">
								<div class="cd-h-timeline__event-content container">
									<h2 class="cd-h-timeline__event-title">Khảo sát thị trường</h2>
									<em class="cd-h-timeline__event-date">May 20th, 2020</em>
									<p class="cd-h-timeline__event-description color-contrast-medium"> 
										Thực hiện khảo sát thị trường dựa trên ý tưởng mong muốn tạo ra một mạng xã hội kết nối mọi người.
									</p>
								</div>
							</li>

							<li class="cd-h-timeline__event text-component">
								<div class="cd-h-timeline__event-content container">
									<h2 class="cd-h-timeline__event-title">Tiến hành lập kế hoạch xây dựng ứng dụng</h2>
									<em class="cd-h-timeline__event-date">May 27th, 2020</em>
									<p class="cd-h-timeline__event-description color-contrast-medium"> 
										Tiến hành lập các sơ đồ chức năng, tìm hiểu cách thức, mô hình, đối tượng tham gia vào hệ thống.
									</p>
								</div>
							</li>

							<li class="cd-h-timeline__event text-component">
								<div class="cd-h-timeline__event-content container">
									<h2 class="cd-h-timeline__event-title">Xây dựng cấu trúc ứng dụng</h2>
									<em class="cd-h-timeline__event-date">June 03rd, 2020</em>
									<p class="cd-h-timeline__event-description color-contrast-medium"> 
										Đưa các mô hình vào hệ thống và tiến hành xây dựng dựa trên các mô hình đấy.
									</p>
								</div>
							</li>

							<li class="cd-h-timeline__event text-component">
								<div class="cd-h-timeline__event-content container">
									<h2 class="cd-h-timeline__event-title">Khởi dựng demo đầu tiên</h2>
									<em class="cd-h-timeline__event-date">June 10th, 2020</em>
									<p class="cd-h-timeline__event-description color-contrast-medium"> 
										Ra mắt phiên bản demo của hệ thống.
									</p>
								</div>
							</li>

							<li class="cd-h-timeline__event text-component">
								<div class="cd-h-timeline__event-content container">
									<h2 class="cd-h-timeline__event-title">Hoàn tất chức năng user</h2>
									<em class="cd-h-timeline__event-date">June 17th, 2020</em>
									<p class="cd-h-timeline__event-description color-contrast-medium"> 
										Các chức năng cơ bản như đăng nhập, đăng ký, quên mật khẩu, xác nhận đăng ký qua email đã được đưa vào sử dụng.
									</p>
								</div>
							</li>

							{{-- <li class="cd-h-timeline__event text-component">
								<div class="cd-h-timeline__event-content container">
									<h2 class="cd-h-timeline__event-title">Event title here</h2>
									<em class="cd-h-timeline__event-date">August 30th, 2014</em>
									<p class="cd-h-timeline__event-description color-contrast-medium"> 
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
									</p>
								</div>
							</li>

							<li class="cd-h-timeline__event text-component">
								<div class="cd-h-timeline__event-content container">
									<h2 class="cd-h-timeline__event-title">Event title here</h2>
									<em class="cd-h-timeline__event-date">September 15th, 2014</em>
									<p class="cd-h-timeline__event-description color-contrast-medium"> 
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
									</p>
								</div>
							</li>

							<li class="cd-h-timeline__event text-component">
								<div class="cd-h-timeline__event-content container">
									<h2 class="cd-h-timeline__event-title">Event title here</h2>
									<em class="cd-h-timeline__event-date">November 1st, 2014</em>
									<p class="cd-h-timeline__event-description color-contrast-medium"> 
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
									</p>
								</div>
							</li>

							<li class="cd-h-timeline__event text-component">
								<div class="cd-h-timeline__event-content container">
									<h2 class="cd-h-timeline__event-title">Event title here</h2>
									<em class="cd-h-timeline__event-date">December 10th, 2014</em>
									<p class="cd-h-timeline__event-description color-contrast-medium"> 
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
									</p>
								</div>
							</li>

							<li class="cd-h-timeline__event text-component">
								<div class="cd-h-timeline__event-content container">
									<h2 class="cd-h-timeline__event-title">Event title here</h2>
									<em class="cd-h-timeline__event-date">January 29th, 2015</em>
									<p class="cd-h-timeline__event-description color-contrast-medium"> 
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
									</p>
								</div>
							</li>

							<li class="cd-h-timeline__event text-component">
								<div class="cd-h-timeline__event-content container">
									<h2 class="cd-h-timeline__event-title">Event title here</h2>
									<em class="cd-h-timeline__event-date">March 3rd, 2015</em>
									<p class="cd-h-timeline__event-description color-contrast-medium"> 
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
									</p>
								</div>
							</li> --}}
						</ol>
					</div> <!-- .cd-h-timeline__events -->
				</section>
		</div>

		<!-- Reviews -->

		<div class="reviews">
			<div class="reviews_title">Về chúng tôi</div>
			<div class="reviews_container">

				<!-- Review -->
				<div class="review">
					<div class="row">
						<div class="col-lg-1">
							<div class="review_image">
								<img src="img/hieu.jpg" alt="">
							</div>
						</div>
						<div class="col-lg-11">
							<div class="review_content">
								<div class="review_title_container">
									<div class="review_title">Lê Văn Hiểu</div>
									<div class="review_rating">DH51601561</div>
								</div>
								<div class="review_text">
									<p>Đang là sinh viên năm cuối tại Trường ĐẠI HỌC CÔNG NGHỆ SÀI GÒN chuyên nghành Công Nghệ Thông Tin</p>
								</div>
								<div class="review_name">Niên Khóa</div>
								<div class="review_date">2016-2020</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Review -->
				<div class="review">
					<div class="row">
						<div class="col-lg-1">
							<div class="review_image">
								<img src="img/long.jpg" alt="">
							</div>
						</div>
						<div class="col-lg-11">
							<div class="review_content">
								<div class="review_title_container">
									<div class="review_title">Nguyễn Bạch Nhật Long</div>
									<div class="review_rating">DH51603225</div>
								</div>
								<div class="review_text">
									<p>Đang là sinh viên năm cuối tại Trường ĐẠI HỌC CÔNG NGHỆ SÀI GÒN chuyên nghành Công Nghệ Thông Tin</p>
								</div>
								<div class="review_name">Niên Khóa</div>
								<div class="review_date mb-3">2016-2020</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
</div>
</div>		
</div>

@endsection
