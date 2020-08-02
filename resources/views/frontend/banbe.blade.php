 @extends('layouts.home')
 @section('content')
 <!-- ======= Resume Section ======= -->
 <section id="resume" class="resume">
  <div class="container">

    <div class="section-title">
      <h2>Bạn bè</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
      <div class="col-lg-6" data-aos="fade-up">
        <h3 class="resume-title">Yêu cầu kết bạn</h3>
        <h4 id="alert" style="color:#00BFFF"></h4>
        <div class="resume-item  ">
          <h4>Danh sách</h4>
          <ul >
            @foreach($yc as $tc)
            <li> 
             <div class="media col-lg-12 float-left mt-2"  >
              <div class="media-left">
               @if (strpos($tc->img, 'https://graph.facebook.com') !== false) 
               <a href="/chitietcanhan/{{$tc->id}}"><img src="{{$tc->img}}" class="media-object "  alt=""></a>
               @elseif (strpos($tc->img, 'https://lh3.googleusercontent.com') !== false) 
               <a href="/chitietcanhan/{{$tc->id}}"> <img src="{{$tc->img}}" class="media-object " alt=""></a>
               @else
               <a href="/chitietcanhan/{{$tc->id}}"><img src="{{'frontend/'.$tc->img}}"  alt=""></a>
               @endif
             </div>
             <div class="media-body mt-3">
              <p class="name" >{{$tc->name}}</p>
            </div>
            <div id="heart" ><button class="btn-success mt-3 rounded" style="margin-left:-150px" onclick="friend(event)" id="{{$tc->id}}" type="button">Đồng ý</button></div>
          </div>
        </li>
        @endforeach 
      </ul>
    </div>

    <h3 class="resume-title">Danh sách đen - chặn</h3>
    <div class="resume-item">
      <h4>Master of Fine Arts &amp; Graphic Design</h4>
      <h5>2015 - 2016</h5>
      <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
      <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
    </div>
    <div class="resume-item">
      <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
      <h5>2010 - 2014</h5>
      <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
      <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
    </div>
  </div>
  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
    <h3 class="resume-title">Danh sách bạn bè</h3>
    <div class="resume-item">
      <h4>Senior graphic design specialist</h4>
      <h5>2019 - Present</h5>
      <p><em>Experion, New York, NY </em></p>
      <ul>
        <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
        <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
        <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
        <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
      </ul>
    </div>
    <div class="resume-item">
      <h4>Graphic design specialist</h4>
      <h5>2017 - 2018</h5>
      <p><em>Stepping Stone Advertising, New York, NY</em></p>
      <ul>
        <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
        <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
        <li>Recommended and consulted with clients on the most appropriate graphic design</li>
        <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
      </ul>
    </div>
  </div>
</div>

</div>
</section><!-- End Resume Section -->
@endsection
@section('js')
<script>
  function friend(event)
  { $('#alert').html("");
  event.preventDefault();
  $.ajax({
    url:'/ketban',
    type:'POST',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data:{
      'id_user1':{{Auth::id()}},
      'id_user2':event.target.id,
    },
    success: function (data)
    {
      console.log(data);
      $('#alert').html('Đồng ý kết bạn thành công');
    }
    
  }); 
}
</script>
@endsection