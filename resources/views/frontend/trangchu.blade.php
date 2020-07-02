 @extends('layouts.home')
 @section('content')
 <!-- ======= About Section ======= -->
  <section id="testimonials" class="testimonials section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Gợi ý bạn bè</h2>
    </div>

    <div class="owl-carousel testimonials-carousel">
     {{--  @foreach($randomUser as $rU) --}}
      <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
        <p>
          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
{{--          {{$rU->intro}} --}}
          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
        </p>
        <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
        <h3> {{-- {{$rU->name}} --}}</h3> <!-- chỗ này join bảng user lấy tên ra -->
        <h4> {{-- {{$rU->job}} --}}</h4>
      </div>

  {{--   @endforeach --}}

    </div>

  </div>
</section>
        
 
<!-- ======= Facts Section ======= -->
<section id="facts" class="facts">
  <div class="container">

    <div class="section-title">
      <h2>Bảng tin trong ngày</h2>
     <p class="mt-2 ml-2">
        Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
        Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
      </p>
    </div>

  </div>
</section>
@endsection