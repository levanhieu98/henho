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
        <img src="{{'frontend/'.Auth::user()->img}}" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content " data-aos="fade-left">
        <h3>{{$profile[0]->name}}</h3>
        <div class="row">
          <div class="col-lg-6 ">
            <ul>
              <li><i class="icofont-rounded-right"></i> <strong>Sinh nhật:</strong> {{date("d-m-Y", strtotime($profile[0]->dob))}} </li> 
              <li><i class="icofont-rounded-right"></i> <strong>Giới tính: </strong>{{($profile[0]->gender==1)?'Nam':'Nữ'}}</li>
              <li><i class="icofont-rounded-right"></i> <strong>Số điện thoại:</strong> {{$profile1[0]->phone}}</li>
              <li><i class="icofont-rounded-right"></i> <strong>Quê quán:</strong> <span id="city"></span><span id="district"></span><span id="ward"></span></li>
            </ul>
          </div>
          <div class="col-lg-6 ">
            <ul>
              <li><i class="icofont-rounded-right"></i> <strong>Tuổi:</strong> {{date('Y')-date('Y',strtotime($profile[0]->dob))}}</li>
              <li><i class="icofont-rounded-right"></i> <strong>Tôn giáo:</strong>{{$profile1[0]->religion}}</li>
              <li><i class="icofont-rounded-right"></i> <strong>Nghề nghiệp:</strong> {{$profile1[0]->job}}</li>
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
       {{$profile1[0]->intro}}
     </p>
   </div>

 </div>
</section><!-- End Facts Section -->

<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
  <div class="container">
    <div class="section-title">
      <h2>Đối tượng tìm kiếm</h2>
      <p> {{$profile1[0]->findlove}}</p>
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