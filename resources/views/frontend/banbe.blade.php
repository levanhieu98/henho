 @extends('layouts.home')
 @section('content')
 <!-- ======= Resume Section ======= -->
 <section id="resume" class="resume">
  <div class="container">

    <div class="section-title">
      <h4 id="alert" style="color:#00BFFF"></h4>
      <h2>Bạn bè</h2>
      <p>Hãy đếm tuổi của bạn bằng số bạn bè chứ không phải số năm. Ai cũng lắng nghe điều bạn phải nói. Bạn bè lắng nghe điều bạn nói. Bạn thân lắng nghe điều bạn không nói.Không ai có thể hạnh phúc mà không có bạn bè, hay chắc chắn về bạn bè mình cho tới khi gặp bất hạnh.</p>
    </div>

    <div class="row">
      <div class="col-lg-6" data-aos="fade-up">
        <h3 class="resume-title">Yêu cầu kết bạn</h3>
        <h4>Danh sách</h4>
        <ul >
          @foreach($yc as $tc)
          <li> 
           <div class="media col-lg-12 float-left mt-2 resume-item "  >
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
  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
    <h3 class="resume-title">Danh sách bạn bè</h3>
    <ul>
      @foreach($fr as $index=>$tc)
      <li> 
       <div class="media col-lg-12 float-left mt-2 resume-item"  >
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
      <div id="heart" class="mt-3 " ><button class="btn-success mt-1 rounded" onclick="friend(event)" id="{{$tc->id}}" type="button">Hủy kết bạn </button></div>
    </div>
  </li>
  @endforeach 
</ul>
</div>
</div>

</div>
</section><!-- End Resume Section -->
@endsection
@section('js')
<script>
  function friend(event)
  { //$('#alert').html("");
  // alert(event.target.id);
  // event.preventDefault();
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
      $('#alert').html('Thao tác thành công');
    }
    
  }); 
}
</script>
@endsection