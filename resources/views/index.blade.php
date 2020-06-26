@extends('layouts.app')
@section('content')
    <div class="home">  
    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">
            <!-- Slider Item -->
            <div class="owl-item home_slider_item">

                <div class="home_slider_background" style="background-image:url(img/home_slider.jpg)"></div>

                <div class="home_slider_content text-center">
                    <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                        <h1>Bạn muốn</h1>
                        <h1>hẹn hò?</h1>
                        <div class="button home_slider_button"><div class="button_bcg"></div><a href="#" data-toggle="modal" data-target="#myModal">Tham gia ngay<span></span><span></span><span></span></a></div>
                    </div>
                </div>
            </div>
            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background" style="background-image:url(img/home_slider2.jpg)"></div>
                <div class="home_slider_content text-center">
                    <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                        <h1>Tìm người</h1>
                        <h1>trong mộng?</h1>
                        <div class="button home_slider_button"><div class="button_bcg"></div><a href="#" data-toggle="modal" data-target="#myModal">Tham gia ngay<span></span><span></span><span></span></a></div>
                    </div>
                </div>
            </div>
            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background" style="background-image:url(img/home_slider3.jpg)"></div>
                <div class="home_slider_content text-center">
                    <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                        <h1>Đúng người</h1>
                        <h1>đúng thời điểm</h1>
                        <div class="button home_slider_button"><div class="button_bcg"></div><a href="#" data-toggle="modal" data-target="#myModal">Tham gia ngay<span></span><span></span><span></span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Slider Nav - Prev -->
        <div class="home_slider_nav home_slider_prev">
            <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
            <defs>
                <linearGradient id='home_grad_prev'>
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

    <!-- Home Slider Nav - Next -->
    <div class="home_slider_nav home_slider_next">
        <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
        <defs>
            <linearGradient id='home_grad_next'>
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

<!-- Home Slider Dots -->

<div class="home_slider_dots">
    <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
        <li class="home_slider_custom_dot active"><div></div>01.</li>
        <li class="home_slider_custom_dot"><div></div>02.</li>
        <li class="home_slider_custom_dot"><div></div>03.</li>
    </ul>
</div>

</div>

</div>

<!-- Intro -->

<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="intro_title text-center">Xa tận chân trời, gần ngay trước mắt</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="intro_text text-center">
                    <p>Mạng lưới rộng lớn và khả năng kết nối giữa nhiều thành viên, WhoToDate sẵn sàng mang đến một không gian mở cho người Việt có thể giao lưu và kết bạn, hẹn hò dễ dàng. </p>
                </div>
            </div>
        </div>
        <div class="row intro_items">

            <!-- Intro Item -->

            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    
                    <div class="intro_item_background" style="background-image:url(img/intro_1.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date">Trò chuyện</div>
                        <div class="intro_center text-center">
                            <h1>Bốn phương</h1>                             
                        </div>
                    </div>
                </div>
            </div>

            <!-- Intro Item -->

            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>

                    <div class="intro_item_background" style="background-image:url(img/intro_2.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date">Hẹn hò</div>
                        <div class="intro_center text-center">
                            <h1>Nghiêm túc</h1>                         
                        </div>
                    </div>
                </div>
            </div>

            <!-- Intro Item -->

            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <div class="intro_item_background" style="background-image:url(img/intro_3.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date">Kết bạn</div>
                        <div class="intro_center text-center">
                            <h1>Khắp nơi</h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- CTA -->

<div class="cta">
    <!-- Image by https://unsplash.com/@thanni -->
    <div class="cta_background" style="background-image:url(img/cta.jpg)"></div>

    <div class="container">
        <div class="row">
            <div class="col">

                <!-- CTA Slider -->

                <div class="cta_slider_container">
                    <div class="owl-carousel owl-theme cta_slider">

                        <!-- CTA Slider Item -->
                        <div class="owl-item cta_item text-center">
                            <div class="cta_title">Không còn lo ngại về khoảng cách</div>                               
                            <p class="cta_text">Giờ đây việc hẹn hò trở nên đơn giản hơn với WhoToDate.</p>
                            <div class="button cta_button"><div class="button_bcg"></div><a href="#" data-toggle="modal" data-target="#myModal">Dùng thử<span></span><span></span><span></span></a></div>
                        </div>

                        <!-- CTA Slider Item -->
                        <div class="owl-item cta_item text-center">
                            <div class="cta_title">Nhiều ưu đãi cho các cặp đôi</div>
                            <p class="cta_text"> WhoToDate hỗ trợ rất nhiều ưu đãi với các đối tác nhà hàng, chụp ảnh cưới, du lịch,..</p>
                            <div class="button cta_button"><div class="button_bcg"></div><a href="/blog">Xem ngay   <span></span><span></span><span></span></a></div>
                        </div>

                        <!-- CTA Slider Item -->
                        <div class="owl-item cta_item text-center">
                            <div class="cta_title">Nghiêm túc, lịch sự ,văn minh</div>                          
                            <p class="cta_text"> WhoToDate rất mong quý khách hàng sử dụng ứng dụng một cách phù hợp.</p>
                            <div class="button cta_button"><div class="button_bcg"></div><a href="#" data-toggle="modal" data-target="#myModal">Dùng ngay<span></span><span></span><span></span></a></div>
                        </div>

                    </div>

                    <!-- CTA Slider Nav - Prev -->
                    <div class="cta_slider_nav cta_slider_prev">
                        <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                        <defs>
                            <linearGradient id='cta_grad_prev'>
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

                <!-- CTA Slider Nav - Next -->
                <div class="cta_slider_nav cta_slider_next">
                    <svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                    <defs>
                        <linearGradient id='cta_grad_next'>
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

    </div>
</div>
</div>                  
</div>
<!-- Testimonials -->

<div class="testimonials">
    <div class="test_border"></div>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">Khách hàng nói gì về WhoToDate</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <!-- Testimonials Slider -->

                <div class="test_slider_container">
                    <div class="owl-carousel owl-theme test_slider">

                        <!-- Testimonial Item -->
                        @foreach($review as $rv)
                        <div class="owl-item">
                            <div class="test_item">
                                <div class="test_image"><img src="{{$rv->img}}" alt="https://unsplash.com/@anniegray" height="400"></div>
                                <div class="test_icon"><img src="img/3920d71d13c859d49b8f51bdf2675082.jpg" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">{{$rv->name}}</div>
                                            <div class="test_date">{{date('d-m-Y',strtotime($rv->date))}}</div>
                                        </div>
                                        <div class="test_quote_title">" {{$rv->content}} "</div>
                                      {{--   <p class="test_quote_text"></p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Testimonials Slider Nav - Prev -->
                    <div class="test_slider_nav test_slider_prev">
                        <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                        <defs>
                            <linearGradient id='test_grad_prev'>
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

                <!-- Testimonials Slider Nav - Next -->
                <div class="test_slider_nav test_slider_next">
                    <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                    <defs>
                        <linearGradient id='test_grad_next'>
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

    </div>
</div>

</div>
</div>


{{-- 
<div class="contact">
    <div class="contact_background" style="background-image:url(img/contact.png)"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact_image">

                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact_form_container">
                    <div class="contact_title">Bạn có thắc mắc?</div>
                    <form action="#" id="contact_form" class="contact_form">
                        <input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Họ tên" required="required" data-error="Name is required.">
                        <input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
                        <input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Tiêu đề" required="required" data-error="Subject is required.">
                        <textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Nội dung" required="required" data-error="Please, write us a message."></textarea>
                        <button type="submit" id="form_submit_button" class="form_submit_button button">Hãy gửi nó cho chúng tôi<span></span><span></span><span></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection