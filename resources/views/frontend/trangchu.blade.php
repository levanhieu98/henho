 @extends('layouts.home')
 @section('content')
 <style>
   #heart a:hover {
     color:red;
   }
 </style>
 <!-- ======= About Section ======= -->
 <section id="testimonials" class="testimonials section-bg">
  <div class="container">
    <div class="section-title">
      <h2>Gợi ý bạn bè</h2>
    </div>
    <div class="owl-carousel testimonials-carousel">
     <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
      <p>
        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
        <a href="#">Ten ABCs</a>
        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
      </p>
      <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
      <div id="heart"><a href="#"  ><i class="bx bxs-heart" style="font-size:50px"></i></a></div>
    </div>
  </div>
</div>
</section>


<!-- ======= Facts Section ======= -->
<section id="facts" class="facts ">
  <div class="container-fluid">
    <div class="section-title">
      <h2>Bảng tin trong ngày</h2>
      <div class="container-fluid rounded  section-bg">
        @foreach( $trangchu as $index=>$tc)
        <div class="row clearfix border-bottom">
          <div class="media col-lg-10 float-left mt-2"  >
            <div class="media-left">
             @if (strpos($tc->img, 'https://graph.facebook.com') !== false) 
             <img src="{{$tc->img}}" class="media-object" alt="">
             @else
             <img src="{{'frontend/'.$tc->img}}" alt="">
             @endif
             
           </div>
           <div class="media-body">
            <p class="name">{{$tc->name}}</p>
            <p class="email">{{$tc->email}}</p>
          </div>
        </div>
        <div>
          <div class="dropdown  float-right col-lg-2 ">
            <button class="btn btn-link bx bx-dots-horizontal-rounded mt-4"  type="button" data-toggle="dropdown">
            </button>
            <ul class="dropdown-menu" >             
             <li ><a href="/xoabaidang/{{$tc->id_post}}"><i class="bx bx-x-circle" ></i>Xóa bài viết</a></li>
           </ul>
         </div>
       </div>
     </div>  
     <div class="row clearfix bor">
       <p class="mt-2 ml-2 mr-2 mb-2 ">
        {{-- Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
          Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores. --}}
          {{$tc->content}}
        </p>
      </div>  
      <div class="row clearfix pb-2 border-bottom ">
       <img src="{{'frontend/'.$tc->image}}" alt="" class="rounded mx-auto d-block" height="500" >
     </div> 

     <div class="row clearfix text-center mt-2 border-bottom form-inline ">
       <div class="col-lg-6 mb-2 "><i class=" bx bx-like" style="font-size:30px"><button type="submit" class="form-control" >Thích</button></i></div>
       <div class="col-lg-6 mb-2 "><li><i class=" bx bx-message-rounded-dots" style="font-size:30px"><button type="submit" class="form-control binhluan" >Bình luận</button></i> </li></div>
     </div>  
     <div class="row clearfix form-inline d-flex justify-content-center" id="show{{$index}}">

     </div>
     <div class="row bg-white ">
       &emsp;
     </div>
     @endforeach 
   </div>

 </section>
 @endsection
 @section('js')
 <script>

  $(document).ready(function() {
    $('.binhluan').each(function(index, binhluanBtn){
      $(binhluanBtn).click(function(event) {
       var show='<img src="frontend/{{Auth::user()->img}}" alt="" class="media  rounded-circle mr-2  " style="width:50px;height:50px" >'+' <input type="text" name="" class="form-control rounded mb-2 col-lg-8" placeholder="Nhập bình luận" >';
       var show1='#show' + index;
       $(show1).html(show);
     });
    })
  });
  

  // $('button').click(function(){
  //   $('.binhluan').each(function() {
  //     
  // });

  
</script>
@endsection