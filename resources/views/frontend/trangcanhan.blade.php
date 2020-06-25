 @extends('layouts.home')
 @section('content')
 <!-- ======= About Section ======= -->
 <section id="about" class="about">
  <div class="container">

    <div class="section-title">
      <h2>Thông tin cá nhân</h2>
      <p>Câu nói hay/ yêu thích</p>
    </div>

    <div class="row">
      <div class="col-lg-4" data-aos="fade-right">
        <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content " data-aos="fade-left">
        <h3>{{$profile[0]->name}}</h3>
        <div class="row">
          <div class="col-lg-6 ">
            <ul>
              <li><i class="icofont-rounded-right"></i> <strong>Sinh nhật:</strong> {{date("d-m-Y", strtotime($profile[0]->dob))}} <img src="assets/img/eraser.png" ></li> 
              <li><i class="icofont-rounded-right"></i> <strong>Giới tính: </strong>{{($profile[0]->gender==1)?'Nam':'Nữ'}}</li>
              <li><i class="icofont-rounded-right"></i> <strong>Số điện thoại:</strong> +123 456 7890</li>
              <li><i class="icofont-rounded-right"></i> <strong>Quê quán:</strong> <span id="city"></span><span id="district"></span><span id="ward"></span></li>
            </ul>
          </div>
          <div class="col-lg-6 ">
            <ul>
              <li><i class="icofont-rounded-right"></i> <strong>Tuổi:</strong> {{date('Y')-date('Y',strtotime($profile[0]->dob))}}</li>
              <li><i class="icofont-rounded-right"></i> <strong>Tôn giáo:</strong> Master</li>
              <li><i class="icofont-rounded-right"></i> <strong>Nghề nghiệp:</strong> email@gmail.com</li>
            </ul>
          </div>
        </div>
        
      </div>
      
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Facts Section ======= -->
<section id="facts" class="facts">
  <div class="container">

    <div class="section-title">
      <h2>Giới thiệu về bản thân</h2>
     <p class="mt-2 ml-2">
        Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
        Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
      </p>
    </div>

  </div>
</section><!-- End Facts Section -->

<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Đối tượng tìm kiếm</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row skills-content">

      <div class="col-lg-6" data-aos="fade-up">

        <div class="progress">
          <span class="skill">HTML <i class="val">100%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">CSS <i class="val">90%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">JavaScript <i class="val">75%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

        <div class="progress">
          <span class="skill">PHP <i class="val">80%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">WordPress/CMS <i class="val">90%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">Photoshop <i class="val">55%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

      </div>

    </div>

  </div>
</section><!-- End Skills Section -->
@endsection

@section('js')
<script >
 $(document).ready(function(){
  var city=""
  $.get('/api/city/'+{{$profile[0]->city}},function(data){
    city=data.Title +',';
    $('#city').html(city);
  });
});

 $(document).ready(function(){
  var district=""
  $.get('/api/id_district/'+{{$profile[0]->district}},function(data){
    district=data.Title +',';
    $('#district').html(district);
  });
});

 $(document).ready(function(){
  var ward=""
  $.get('/api/id_ward/'+{{$profile[0]->ward}},function(data){
    ward=data.Title ;
    $('#ward').html(ward);

  });
});
</script>
@endsection