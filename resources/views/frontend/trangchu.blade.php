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
     @foreach($banbe as $b)
     <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
      <p>
        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
        <a href="#">{{$b->name}}</a>
        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
      </p>
      @if (strpos($b->img, 'https://graph.facebook.com') !== false) 
      <a href="/chitietcanhan/{{$b->id}}">  <img src="{{$b->img}}" class="testimonial-img" alt=""></a>
      @elseif (strpos($b->img, 'https://lh3.googleusercontent.com') !== false) 
      <a href="/chitietcanhan/{{$b->id}}"><img src="{{$b->img}}" class="testimonial-img" alt=""></a>
      @else
      <a href="/chitietcanhan/{{$b->id}}"> <img src="{{'frontend/'.$b->img}}" class="testimonial-img" alt=""></a>
      @endif
      {{-- <div id="heart"  ><a href="" ><i onclick="friend(event)" id="{{$b->id}}" class="bx bxs-heart " style="font-size:50px"></i></a></div> --}}
      <div id="heart" ><button class="btn-success mt-1 rounded" onclick="friend(event)" id="{{$b->id}}" type="button">Kết bạn</button></div>
    </div>
    @endforeach
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
        <input type="hidden" id="id_user" value="{{Auth::id()}}" name="custId">
        <div class="row clearfix border-bottom">
          <div class="media col-lg-10 float-left mt-2"  >
            <div class="media-left">
             @if (strpos($tc->img, 'https://graph.facebook.com') !== false) 
             <a href="/chitietcanhan/{{$tc->id}}"><img src="{{$tc->img}}" class="media-object "  alt=""></a>
             @elseif (strpos($tc->img, 'https://lh3.googleusercontent.com') !== false) 
             <a href="/chitietcanhan/{{$tc->id}}"> <img src="{{$tc->img}}" class="media-object " alt=""></a>
             @else
             <a href="/chitietcanhan/{{$tc->id}}"><img src="{{'frontend/'.$tc->img}}"  alt=""></a>
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
     <img src="{{'frontend/'.$tc->image}}" alt="" class="rounded mx-auto d-block" height="500" >
   </div> 

   <div class="row clearfix text-center mt-2 border-bottom form-inline ">
     <div class="col-lg-6 mb-2 "><i class=" bx bx-like" style="font-size:30px"><button type="submit" class="form-control" >Thích</button></i></div>
     <div class="col-lg-6 mb-2 "><li><i class=" bx bx-message-rounded-dots" style="font-size:30px"><button type="submit" class="form-control binhluan" value="{{$tc->id_post}}" >Bình luận</button></i> </li></div>
   </div>  
   <div class="row clearfix form-inline d-flex justify-content-center " id="show{{$index}}">

   </div>
   <div class="row clearfix form-inline d-flex justify-content-end  "  id="showbl{{$tc->id_post}}">

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
      }

    }); 
  }




  //Hien thi o nhap binh luan
  $(document).ready(function() {
    $('.binhluan').each(function(index, binhluanBtn){
      $(binhluanBtn).click(function(event) {
        var idPost=event.target.value;
        var str='{{Auth::user()->img}}';
        if(str.indexOf('https://graph.facebook.com')!==-1)
        {
          var img='{{Auth::user()->img}}';
        }
        else if(str.indexOf('https://lh3.googleusercontent.com')!==-1)
        {
          var img='{{Auth::user()->img}}';
        }
        else
        {
          var img='/frontend/{{Auth::user()->img}}';
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
            '<input type="text" class="form-control col-lg-11 mb-2 hienthibl" disabled value="'+v.content+'"></div>'+
            '<div class="mr-5"><a href=""  class="mr-2 " id="xbl-'+v.id_comment+'" onclick="tatxbl(event)">Xem bình luận</a>'+
            '<a href=""  class="traloi" id="traloi-'+v.id_comment+'" onclick="tat(event)">Trả lời</a></div>'+
            '<div class="d-none form-inline container-fluid justify-content-center traloibl  " id="otl-'+v.id_comment+'" ><img src="'+img+'" alt="" class="media  rounded-circle mr-2 idPost " id="'+v.id_post+'" style="width:50px;height:50px" ><input type="text"  class="form-control col-lg-8 mb-2 otlbl"  onchange="myFunction(event)" id="'+v.id_comment+'"></div>'+'<div  class="d-none form-inline container-fluid justify-content-end   " id="httl-'+v.id_comment+'" ></div>'+
            '</div>';
            var show='#showbl'+v.id_post;
            $(show).html(ht);
          });   
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
          '<input type="text" class="form-control col-lg-11 mb-2 hienthibl" disabled value="'+v.content+'"></div>'+
          '<div class="mr-5"><a href="" class="mr-2" id="xbl-'+v.id_comment+'"  onclick="tatxbl(event)">Xem bình luận</a>'+
          '<a href=""  class="traloi" id="traloi-'+v.id_comment+'" onclick="tat(event)">Trả lời</a></div>'+
          '<div class="d-none form-inline container-fluid justify-content-center traloibl  " id="otl-'+v.id_comment+'" ><img src="'+img+'" alt="" class="media  rounded-circle mr-2 idPost " id="'+v.id_post+'" style="width:50px;height:50px" ><input type="text"  class="form-control col-lg-8 mb-2 otlbl"  onchange="myFunction(event)" id="'+v.id_comment+'"></div>'+'<div  class="d-none form-inline container-fluid justify-content-end   " id="httl-'+v.id_comment+'" ></div>'+
          '</div>';
          var show='#showbl'+v.id_post;
          $(show).html(ht);

        });
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
        if(str.indexOf('https://graph.facebook.com')!==-1)
        {
          var img='{{Auth::user()->img}}';
        }
        else if(str.indexOf('https://lh3.googleusercontent.com')!==-1)
        {
          var img='{{Auth::user()->img}}';
        }
        else
        {
          var img='/frontend/{{Auth::user()->img}}';
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
              $.each(data,function(k,v)
              {
                ht+='<div class="form-inline container-fluid form-inline d-flex justify-content-center" style="border-left: 2px solid blue" ><img src="'+v.images+'" alt="" class="media  rounded-circle mr-2   " style="width:50px;height:50px" >'+
                '<input type="text" class="form-control col-lg-10 mb-2 hienthibl" disabled value="'+v.content+'"></div>'+
                '<div class="mr-5"><a href=""  class="mr-2 " id="xbl-'+v.id_comment+'" onclick="tatxbl(event)">Xem bình luận</a>'+
                '<a href=""  class="traloi" id="traloi-'+v.id_comment+'" onclick="tat(event)">Trả lời</a></div>'+
                '<div class="d-none form-inline container-fluid justify-content-center traloibl  " id="otl-'+v.id_comment+'" ><img src="'+img+'" alt="" class="media  rounded-circle mr-2 idPost " id="'+v.id_post+'" style="width:50px;height:50px" ><input type="text"  class="form-control col-lg-8 mb-2 otlbl"  onchange="myFunction(event)" id="'+v.id_comment+'"></div>'+'<div class="d-none form-inline container-fluid justify-content-end   " id="httl-'+v.id_comment+'"  ></div>'+
                '</div>';
                $(httl).html(ht);
              });   
            });
      }

 </script>


      @endsection