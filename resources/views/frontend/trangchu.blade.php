 @extends('layouts.home')
 @section('content')
 <style>
   #heart a:hover {
     color:red;
   }
 </style>


 <!-- ======= About Section ======= -->
 <section id="testimonials" class="testimonials section-bg" >
  <div class="container">
    <h2>Gợi ý bạn bè</h2>

    <div class="section-title" style="position: relative;">
     <!-- Search form -->
     <form class="form-inline d-flex justify-content-center md-form form-sm active-pink active-pink-2 mt-2">
      <i class="fas fa-search" aria-hidden="true"></i>
      <input class="form-control form-control-sm ml-3 w-75 border-success " type="text" placeholder="Tìm kiếm theo tên"
      aria-label="Search" name="Search" id="Search">

    </form>
    <div id="danhsachtimduoc" class="mb-5 d-none result" style="position: absolute; left: 15%; z-index: 88888888; width:100%; height: 224px; overflow: auto" >

    </div>
    <!-- End Search form -->
  </div>
  <div class="owl-carousel testimonials-carousel mt-5 " >
   @foreach($users as $b)
   <div class="testimonial-item tenban tenban-{{$b->name}}"  data-aos="fade-up" data-aos-delay="100">
    <p>
      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
      <a href="#">{{$b->name}}</a>
      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
    </p>
    @if (strpos($b->img, 'img') !== false) 
    <a href="/chitietcanhan/{{$b->id}}"> <img src="{{'frontend/'.$b->img}}" class="testimonial-img" alt=""></a>
    @else
    <a href="/chitietcanhan/{{$b->id}}"><img src="{{$b->img}}" class="testimonial-img" alt=""></a>
    @endif
    {{-- <div id="heart"  ><a href="" ><i onclick="friend(event)" id="{{$b->id}}" class="bx bxs-heart " style="font-size:50px"></i></a></div> --}}
    <div id="heart" ><button class="btn-success mt-1 rounded" onclick="friend(event)" id="{{$b->id}}" type="button"> 
      @if($friend->where('user_id_2',Auth::id())->where('user_id_1',$b->id)->count('user_id_2')>0)
      {{"Đồng ý"}}
      @elseif($friend->where('user_id_2',$b->id)->where('user_id_1',Auth::id())->count('user_id_2')>0)
      {{"Đã gửi"}}
      @else
      {{"Kết Bạn"}}
    @endif</button></div>

      {{-- {{($friend->where('user_id_2',$b->id)->where('user_id_1',Auth::id())->count('user_id_2'))>0?"Đã gửi":"Kết Bạn"}}
      {{($friend->where('user_id_2',Auth::id())->where('user_id_1',$b->id)->count('user_id_2'))>0?"Đồng ý":""}} --}}

    </div>
    @endforeach
  </div>

</div>
</section>


<!-- ======= Facts Section ======= -->
<section id="services" class="services">
  <div class="container">

    <div class="section-title">
      <h2>Bài đăng</h2>
      <p>Chào {{Auth::user()->name}} !!</p>
    </div>
    <form action="/baidang" method="post" accept-charset="utf-8" enctype="multipart/form-data">
      @csrf
      <div class="form-inline mb-2">
       <label>Bảng tin</label>
       <select name="bangtin" class="form-control  col-lg-5 ml-2" >
        <option value="1">Bạn bè</option>
        <option value="0">Chỉ mình tôi</option>
      </select>
    </div>

    <textarea class="form-control  @error('status') is-invalid @enderror" name="status"  placeholder="Hôm nay bạn thấy thế nào?"></textarea>
    @error('status')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
    <div class="row clearfix container-fluid form-inline">
      <input type="file" name="anhstatus"  class="form-control mt-2 mb-2 col-lg-6 @error('anhstatus') is-invalid @enderror"  onchange="readURL(this)" id="anh"  /> <i class="bx bx-image col-lg-6" style="font-size:50px"></i>
      @error('anhstatus')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div class="mb-2 " id='show'>

    </div>
    <div class=" d-flex justify-content-center">
     <button type="submit" class="btn btn-info form-control  ">Đăng</button>
   </div> 
 </form>

</div>
</section><!-- End Services Section -->
<section id="facts" class="facts ">
  <div class="container-fluid">
    <div class="section-title">
      <h2>Bảng tin trong ngày</h2>
      <div class="container-fluid rounded  section-bg">
        @foreach( $trangchu as $index=>$tc)
        <input type="hidden" id="id_user" value="{{Auth::id()}}" name="custId">
        <div class="row clearfix border-bottom">
          <div class="media col-lg-10 float-left mt-2"  >
            <div class="media-left">
             @if (strpos($tc->img, 'img') !== false) 
             <a href="/chitietcanhan/{{$tc->id}}"><img src="{{'frontend/'.$tc->img}}"  alt=""></a>
             @else
             <a href="/chitietcanhan/{{$tc->id}}"> <img src="{{$tc->img}}" class="media-object " alt=""></a>
             @endif
             
           </div>
           <div class="media-body">
            <p class="name" >{{$tc->name}}</p>
            <p class="email" >{{date("d-m-Y", strtotime($tc->date))}}</p>
          </div>
        </div>
        <div>
          <div class="dropdown  float-right col-lg-2 ">
            <button class="btn btn-link bx bx-dots-horizontal-rounded mt-4"  type="button" data-toggle="dropdown">
            </button>
            <ul class="dropdown-menu" > 
             <li ><a href="/suabaidang/{{$tc->id_post}}/{{Auth::id()}}"><i class="bx bx-wrench" ></i>Sữa bài</a></li>            
             <li ><a href="/xoabaidang/{{$tc->id_post}}"><i class="bx bx-x-circle" ></i>Xóa bài viết</a></li>
           </ul>
         </div>
       </div>
     </div>  

     <div class="row clearfix bor">
       <p class="mt-2 ml-2 mr-2 mb-2 ">
        {{$tc->content}}
      </p>
    </div>  
    <div class="row clearfix pb-2 border-bottom ">
     <img src="{{'/frontend/'.$tc->image}}" alt="" class="rounded mx-auto d-block" height="500" >
   </div> 
   
   <div class="row clearfix text-center mt-2 border-bottom form-inline ">
    <div class="col-lg-6 mb-3 "><i class=" bx bx-like  " id="thich{{$index}}" style="font-size:30px @foreach($like as $l){{$l->id_user==Auth::id() && $l->id_post==$tc->id_post?";color:blue":""}} @endforeach "></i><button type="submit" class="form-control like " value="{{$tc->id_post}}"  >Thích<p id="count{{$index}}"  style="margin-left:-100px; margin-top: -10px">{{$like->where('id_post',$tc->id_post)->count('id_post')}}</p></button></div>
    <div class="col-lg-6 mb-3 "><li><i class=" bx bx-message-rounded-dots" style="font-size:30px"><button type="submit" class="form-control binhluan" value="{{$tc->id_post}}" >Bình luận<p id="count{{$index}}"  style="margin-left:-120px; margin-top: -10px">{{$comment->where('id_post',$tc->id_post)->count('id_post')}}</p></button></i> </li></div>

  </div>  
  <div class="row clearfix form-inline d-flex justify-content-center " id="show{{$index}}">

  </div>
  <div class="row clearfix form-inline d-flex justify-content-end  "  id="showbl{{$tc->id_post}}">

  </div>
  <div class="row clearfix form-inline d-none justify-content-center xemthem-{{$tc->id_post}} ">
    <a href="" onclick="xthem(event)" id="{{$tc->id_post}}">Xem thêm</a>
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
//xemthem
function xthem(event)
{
  var idp=event.target.id;
  var binhluan='.dembl-'+idp;
  var count=$(binhluan).length;
  event.preventDefault();
  var str='{{Auth::user()->img}}';
  if(str.indexOf('img')!==-1)
  {
    var img='/frontend/{{Auth::user()->img}}';
  }
  else
  {
    var img='{{Auth::user()->img}}';
          // console.log(img);
        }
       // hien thi tat ca binh luan co id_cha la null
       $.get('/api/binhluan/'+idp+'?kq='+count, function(data) 
       {
        var ht=''
        var show='#showbl'+idp;
        if(data.length==0)
        { 
          $(show).append('<div class="text-warning phanhoi form-inline container-fluid form-inline  justify-content-center">Không còn bình luận</div>');
          setTimeout(function(){

            $('.phanhoi').addClass('d-none');


          },2000);
        }
        $.each(data,function(k,v)
        {

          ht='<div class="form-inline container-fluid form-inline d-flex justify-content-center" style="border-left: 2px solid black"><img src="'+v.images+'" alt="" class="media  rounded-circle mr-2   " style="width:50px;height:50px"  >'+
          '<input type="text" class="form-control col-lg-11 mb-2 hienthibl  dembl-'+v.id_post+'" disabled value="'+v.content+'"></div>'+
          '<div class="mr-5"><a href=""  class="mr-2 " id="xbl-'+v.id_comment+'" onclick="tatxbl(event)">Xem bình luận</a>'+
          '<a href=""  class="traloi" id="traloi-'+v.id_comment+'" onclick="tat(event)">Trả lời</a></div>'+
          '<div class="d-none form-inline container-fluid justify-content-center traloibl  " id="otl-'+v.id_comment+'" ><img src="'+img+'" alt="" class="media  rounded-circle mr-2 idPost " id="'+v.id_post+'" style="width:50px;height:50px" ><input type="text"  class="form-control col-lg-8 mb-2 otlbl"  onchange="myFunction(event)" id="'+v.id_comment+'"></div>'+'<div  class="d-none form-inline container-fluid justify-content-end   " id="httl-'+v.id_comment+'" ></div>'+
          '</div>';
          var show='#showbl'+v.id_post;
          $(show).append(ht);
        });   
        console.log(data);
      });
     }

//xem them phan hoi
function xthemph(event)
{
  var idph=event.target.id;
  var phanhoi='.demph-'+idph;
  var countph=$(phanhoi).length;
  event.preventDefault();
  // alert(countph);
  var str='{{Auth::user()->img}}';
  if(str.indexOf('img')!==-1)
  {
    var img='/frontend/{{Auth::user()->img}}';
  }
  else
  {
    var img='{{Auth::user()->img}}';
          // console.log(img);
        }
        var httl='#httl-'+idph;
        $.get('/api/traloibl/'+idph+'?kq1='+countph, function(data) 
        {
          
          $.each(data,function(k,v)
          {
            ht='<div class="form-inline container-fluid form-inline d-flex justify-content-center" style="border-left: 2px solid blue" ><img src="'+v.images+'" alt="" class="media  rounded-circle mr-2   " style="width:50px;height:50px" >'+
            '<input type="text" class="form-control col-lg-10 mb-2 hienthibl demph-'+idph+'" disabled value="'+v.content+'"></div>'+
            '<div class="mr-5"><a href=""  class="mr-2 " id="xbl-'+v.id_comment+'" onclick="tatxbl(event)">Xem bình luận</a>'+
            '<a href=""  class="traloi" id="traloi-'+v.id_comment+'" onclick="tat(event)">Trả lời</a></div>'+
            '<div class="d-none form-inline container-fluid justify-content-center traloibl  " id="otl-'+v.id_comment+'" ><img src="'+img+'" alt="" class="media  rounded-circle mr-2 idPost " id="'+v.id_post+'" style="width:50px;height:50px" ><input type="text"  class="form-control col-lg-8 mb-2 otlbl"  onchange="myFunction(event)" id="'+v.id_comment+'"></div>'+'<div class="d-none form-inline container-fluid justify-content-end   " id="httl-'+v.id_comment+'"  ></div>'+
            '</div>';
            $(httl).append(ht);
          });   
        });
      }



//search
$('#Search').on('keyup',function(){
  $(".result").addClass('d-inline');
  $value = $(this).val();
  if($value=="")
  {
   $('#danhsachtimduoc').html('');
   return;
 }
 $.ajax({
  type: 'POST',
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
  url: '/searchtrangchu',
  data: {
    'search': $value
  },
  success:function(data){
    $('#danhsachtimduoc').html(data);
    console.log(data);
  }
});
  // alert($value);
})






//hinhanh
$('#anh').change(function(){
  var kq='<img id="blah" src="" alt="your image" style="max-width:180px" />';
  $('#show').html(kq);
});

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#blah')
      .attr('src', e.target.result);
    };
    reader.readAsDataURL(input.files[0]);
  }
}

//ketban
function friend(event)
{
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
      event.target.innerText="Đã gửi";
      
    }

  }); 
}

//like
$(document).ready(function()
  { $('.like').each(function(index,like)
    {      var count='#count'+index;
    var thich='thich'+index;
    $(like).click(function(event)
    {

      $.ajax({
        url:'/api/like',
        type:'POST',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
          'id_user':{{Auth::id()}},
          'id_post':event.target.value,
        },
        success: function (data)
        {
          console.log(data);

          document.getElementById(thich).style.color="blue";

          $.get('/api/like/'+data.id_post,function(kq)
          { 
            $(count).html(kq);
            if(data.id_user=={{Auth::id()}} && data.id_post== event.target.value && data.id==null)
            {
              document.getElementById(thich).style.color="black";
            }
          });
        }
      }); 
    });
  }) 
});



  //Hien thi o nhap binh luan
  $(document).ready(function() {
    $('.binhluan').each(function(index, binhluanBtn){
      $(binhluanBtn).click(function(event) {
        var idPost=event.target.value;
        var str='{{Auth::user()->img}}';
        if(str.indexOf('img')!==-1)
        {
          var img='/frontend/{{Auth::user()->img}}';
        }
        else
        {
          var img='{{Auth::user()->img}}';
          // console.log(img);
        }
        var show='<img src="'+img+'" alt="" class="media  rounded-circle mr-2  " style="width:50px;height:50px" >'+' <input type="text" name="content" id="binhluanpost-'+event.target.value+'" class="form-control rounded mb-2 col-lg-8 bl" placeholder="Nhập bình luận"  >';
        var show1='#show' + index;
        $(show1).html(show); 
        // hien thi tat ca binh luan co id_cha la null
        $.get('/api/binhluan/'+idPost, function(data) 
        {
          var ht=''
          $.each(data,function(k,v)
          {
            ht+='<div class="form-inline container-fluid form-inline d-flex justify-content-center" style="border-left: 2px solid black"><img src="'+v.images+'" alt="" class="media  rounded-circle mr-2   " style="width:50px;height:50px"  >'+
            '<input type="text" class="form-control col-lg-11 mb-2 hienthibl  dembl-'+v.id_post+'" disabled value="'+v.content+'"></div>'+
            '<div class="mr-5"><a href=""  class="mr-2 " id="xbl-'+v.id_comment+'" onclick="tatxbl(event)">Xem bình luận</a>'+
            '<a href=""  class="traloi" id="traloi-'+v.id_comment+'" onclick="tat(event)">Trả lời</a></div>'+
            '<div class="d-none form-inline container-fluid justify-content-center traloibl  " id="otl-'+v.id_comment+'" ><img src="'+img+'" alt="" class="media  rounded-circle mr-2 idPost " id="'+v.id_post+'" style="width:50px;height:50px" ><input type="text"  class="form-control col-lg-8 mb-2 otlbl"  onchange="myFunction(event)" id="'+v.id_comment+'"></div>'+'<div  class="d-none form-inline container-fluid justify-content-end   " id="httl-'+v.id_comment+'" ></div>'+
            '</div>';
            var show='#showbl'+v.id_post;
            $(show).html(ht);
          });   
          var binhluan='.dembl-'+idPost;
          var count=$(binhluan).length;
          var xt='.xemthem-'+idPost;
          if(count>=5)
          {
            $(xt).addClass('d-flex'); 
          }
        });

      });
    })
  });

  // binhluan
  $(document).on('keyup', '.bl', function(event) {
   var message=$(this).val();
   var id_user=$('#id_user').val();
   if(event.keyCode==13 && message !='')
   {  
      // alert(img);
      var img=$('img').attr('src');
      var idPost=event.target.id.split('-').pop();
      $.ajax({
        url:'/api/binhluan',
        type:'POST',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
         ' content':message,
         'id_post':idPost,
         'id_user':id_user,
         'img':img,
       },
       success: function (data)
       {    
        $('.bl').val('');
        var ht='';
        $.each(data,function(k,v)
        {
          ht+='<div class="form-inline container-fluid form-inline d-flex justify-content-center"><img src="'+v.images+'" alt="" class="media  rounded-circle mr-2   " style="width:50px;height:50px" >'+
          '<input type="text" class="form-control col-lg-11 mb-2 hienthibl dembl-'+v.id_post+'" disabled value="'+v.content+'"></div>'+
          '<div class="mr-5"><a href="" class="mr-2" id="xbl-'+v.id_comment+'"  onclick="tatxbl(event)">Xem bình luận</a>'+
          '<a href=""  class="traloi" id="traloi-'+v.id_comment+'" onclick="tat(event)">Trả lời</a></div>'+
          '<div class="d-none form-inline container-fluid justify-content-center traloibl  " id="otl-'+v.id_comment+'" ><img src="'+img+'" alt="" class="media  rounded-circle mr-2 idPost " id="'+v.id_post+'" style="width:50px;height:50px" ><input type="text"  class="form-control col-lg-8 mb-2 otlbl"  onchange="myFunction(event)" id="'+v.id_comment+'"></div>'+'<div  class="d-none form-inline container-fluid justify-content-end   " id="httl-'+v.id_comment+'" ></div>'+
          '</div>';
          var show='#showbl'+v.id_post;
          $(show).html(ht);

        });
        var binhluan='.dembl-'+idPost;
        var count=$(binhluan).length;
        var xt='.xemthem-'+idPost;
        if(count>=5)
        {
          $(xt).addClass('d-flex'); 
        }
      }
    })
    }
  });


//traloi
function tat(event)
{
  event.preventDefault();
  var idcomment=event.target.id.split('-').pop();
  var idotl='#otl-'+idcomment;
  $(idotl).removeClass('d-none');
}

//nhap du lieu tra loi binh luan
function myFunction(event) {
     // alert(event.target.value);
     var content=event.target.value;
     var id_post=event.target.previousSibling.id;//lay then ae o trc
     var img=$('img').attr('src');
     var id_cha=event.target.id;
     // alert(id_post);
     $.ajax({
       url:'/api/traloibl',
       type:'POST',
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data:{
       'content':content,
       'id_post':id_post,
       'id_user':{{Auth::id()}},
       'img':img,
       'id_cha':id_cha,
     }, success: function (data)
     {
      $('.otlbl').val('');
      $('.traloibl').addClass('d-none');
      console.log(data);
        // alert(id_post);
      }

    });
   }

//xem binh luan 

function tatxbl(event)
{
  var str='{{Auth::user()->img}}';
  if(str.indexOf('img')!==-1)
  {
    var img='/frontend/{{Auth::user()->img}}';
  }
  else
  {
    var img='{{Auth::user()->img}}';
          // console.log(img);
        }
        event.preventDefault();
        var idcomment=event.target.id.split('-').pop();
        var httl='#httl-'+idcomment;
        $(httl).removeClass('d-none');
        var id_post=$('.idPost').attr('id');
            // alert(id_post);
            $.get('/api/traloibl/'+idcomment, function(data) 
            {
              var ht=''
              if(data.length=="")
              {
               $(httl).html('<div class="text-warning phanhoi">Không có phản hồi bình luận</div>');
               setTimeout(function(){

                $('.phanhoi').addClass('d-none');

              },2000);
             }
             else
             {
              $.each(data,function(k,v)
              {
                ht+='<div class="form-inline container-fluid form-inline d-flex justify-content-center" style="border-left: 2px solid blue" ><img src="'+v.images+'" alt="" class="media  rounded-circle mr-2   " style="width:50px;height:50px" >'+
                '<input type="text" class="form-control col-lg-10 mb-2 hienthibl demph-'+idcomment+'" disabled value="'+v.content+'"></div>'+
                '<div class="mr-5"><a href=""  class="mr-2 " id="xbl-'+v.id_comment+'" onclick="tatxbl(event)">Xem bình luận</a>'+
                '<a href=""  class="traloi" id="traloi-'+v.id_comment+'" onclick="tat(event)">Trả lời</a></div>'+
                '<div class="d-none form-inline container-fluid justify-content-center traloibl  " id="otl-'+v.id_comment+'" ><img src="'+img+'" alt="" class="media  rounded-circle mr-2 idPost " id="'+v.id_post+'" style="width:50px;height:50px" ><input type="text"  class="form-control col-lg-8 mb-2 otlbl"  onchange="myFunction(event)" id="'+v.id_comment+'"></div>'+'<div class="d-none form-inline container-fluid justify-content-end   " id="httl-'+v.id_comment+'"  ></div>'+
                '</div>';
                $(httl).html(ht+'<div class="col-lg-12 row clearfix d-none justify-content-center test-'+idcomment+'"></div> <div class=" col-lg-12 row clearfix d-none justify-content-center xemthemph-'+idcomment+' "><a href="" onclick="xthemph(event)" id="'+idcomment+'">Xem thêm phản hồi</a></div>');
              });   
            }
            var phoi='.demph-'+idcomment;
            var vitriph='.xemthemph-'+idcomment
            var countph=$(phoi).length;
            // if(countph>=5)
            // {
            //   $(vitriph).addClass('d-flex')
            // }
          });

          }

        </script>


        @endsection