 @extends('layouts.home')
 @section('content')
  <style>
   .img-fluid{
    max-height:500px;
   }
 </style>
 <!-- ======= About Section ======= -->
 <section id="about" class="about">
  <div class="container">

    <div class="section-title">
      <h2>Thông tin cá nhân</h2>
    </div>

    <div class="row">
      <div class="col-lg-4" data-aos="fade-right">
        @if (strpos($profile[0]->img, 'img') !== false) 
        <img src="{{'/frontend/'.$profile[0]->img}}" class="img-fluid" alt="" style="width:300px;height:250px">
        @else
        <img src="{{$profile[0]->img}}" class="img-fluid" alt="" style="width:300px;height:250px">
        @endif
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content " data-aos="fade-left">
        <h3>{{$profile[0]->name}}</h3>
        <div class="row">
          <div class="col-lg-6 ">
            <ul>
              <li><i class="icofont-rounded-right"></i> <strong>Sinh nhật:</strong> {{date("d-m-Y", strtotime($profile[0]->dob))}} </li> 
              <li><i class="icofont-rounded-right"></i> <strong>Giới tính: </strong>{{($profile[0]->gender==1)?'Nam':'Nữ'}}</li>
              <li><i class="icofont-rounded-right"></i> <strong>Số điện thoại:</strong> {{$profile[0]->phone}}</li>
              <li><i class="icofont-rounded-right"></i> <strong>Quê quán:</strong> <span id="city"></span><span id="district"></span><span id="ward"></span></li>
              <li class="btkb-{{$profile[0]->id}}">
                @if($friend->where('user_id_2',$profile[0]->id)->where('user_id_1',Auth::id())->count('user_id_2')>0)
                <button class="btn-success mt-1 rounded" onclick="unrequest(event)" id="{{$profile[0]->id}}" type="button">Hủy Yêu Cầu</button>
                @elseif($friends->where('user_id_2',$profile[0]->id)->where('user_id_1',Auth::id())->count('user_id_2')>0||$friends->where('user_id_1',$profile[0]->id)->where('user_id_2',Auth::id())->count('user_id_2')>0)
                <button class="btn-success mt-1 rounded " onclick="unfriend(event)" id="{{$profile[0]->id}}" type="button">Hủy Kết Bạn</button>
                @else
                 <button class="btn-success mt-1 rounded " onclick="friend(event)" id="{{$profile[0]->id}}" type="button"> Kết Bạn</button>
                @endif
              
            </li>
          </ul>
        </div>
        <div class="col-lg-6 ">
          <ul>
            <li><i class="icofont-rounded-right"></i> <strong>Tuổi:</strong> {{date('Y')-date('Y',strtotime($profile[0]->dob))}}</li>
            <li><i class="icofont-rounded-right"></i> <strong>Tôn giáo:</strong>{{($profile[0]->religion==''?'Không':$profile[0]->religion)}}</li>
            <li><i class="icofont-rounded-right"></i> <strong>Nghề nghiệp:</strong> {{$profile[0]->job}}</li>
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
       {{$profile[0]->intro}}

     </p>
   </div>

 </div>
</section><!-- End Facts Section -->

<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
  <div class="container">
    <div class="section-title">
      <h2>Đối tượng tìm kiếm</h2>
      <p> {{$profile[0]->findlove}}</p>
    </div>
  </div>
</section><!-- End Skills Section -->

<section id="facts" class="facts ">
  <div class="container-fluid">
    <div class="section-title">
      <h2>Bảng tin trong ngày</h2>
      <div class="container-fluid rounded  section-bg">
        @foreach( $post as $index=>$tc)
        <input type="hidden" id="id_user" value="{{Auth::id()}}" name="custId">
        <div class="row clearfix border-bottom">
          <div class="media col-lg-10 float-left mt-2"  >
            <div class="media-left">
             @if (strpos($tc->img, 'img') !== false) 
             <a href="/chitietcanhan/{{$tc->id}}"><img src="{{'/frontend/'.$tc->img}}"  alt=""></a>
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
    <div class="row clearfix pb-2 border-bottom {{$tc->img==''?'d-none':''}} ">
     <img src="{{'/frontend/'.$tc->image}}" alt="" class="rounded mx-auto d-block img-fluid" width="666.66px" height="500px" >
   </div> 

   <div class="row clearfix text-center mt-2 border-bottom form-inline ">
    <div class="col-lg-6 mb-3 "><i class=" bx bx-like  " id="thich{{$index}}" style="font-size:30px @foreach($like as $l){{$l->id_user==Auth::id() && $l->id_post==$tc->id_post?";color:blue":""}} @endforeach "></i><button type="submit" class="form-control like " value="{{$tc->id_post}}"  >Thích<p id="count{{$index}}"  style="margin-left:-100px; margin-top: -10px">{{$like->where('id_post',$tc->id_post)->count('id_post')}}</p></button></div>
    <div class="col-lg-6 mb-2 "><li><i class=" bx bx-message-rounded-dots" style="font-size:30px"><button type="submit" class="form-control binhluan" value="{{$tc->id_post}}" >Bình luận<p id="count{{$index}}"  style="margin-left:-120px; margin-top: -10px">{{$comment->where('id_post',$tc->id_post)->count('id_post')}}</p></button></i> </li></div>
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
<script >

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
        // console.log(data);
      });

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
      var vt='.btkb-'+event.target.id;
     $(vt).html('<button class="btn-success mt-1 rounded " onclick="unrequest(event)" id="'+event.target.id+'"  type="button">Hủy Yêu Cầu </button>')
      
    }

  }); 
}

//huy ket ban 
function unfriend(event)
  { 
  $.ajax({
    url:'/huyketban',
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
      var vt='.btkb-'+event.target.id;
     $(vt).html('<button class="btn-success mt-1 rounded " onclick="friend(event)" id="'+event.target.id+'"  type="button">Kết Bạn </button>')
    }
    
  }); 
}

//huy yeu cau 

function unrequest(event)
 {
  $.ajax({
    url:'/huyyeucau',
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
     //  var vt='.bt-'+event.target.id;
     // $(vt).addClass('d-none');
     var vt='.btkb-'+event.target.id;
     $(vt).html('<button class="btn-success mt-1 rounded " onclick="friend(event)" id="'+event.target.id+'"  type="button">Kết Bạn </button>')
    }

  }); 
}



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
                '<input type="text" class="form-control col-lg-10 mb-2 hienthibl" disabled value="'+v.content+'"></div>'+
                '<div class="mr-5"><a href=""  class="mr-2 " id="xbl-'+v.id_comment+'" onclick="tatxbl(event)">Xem bình luận</a>'+
                '<a href=""  class="traloi" id="traloi-'+v.id_comment+'" onclick="tat(event)">Trả lời</a></div>'+
                '<div class="d-none form-inline container-fluid justify-content-center traloibl  " id="otl-'+v.id_comment+'" ><img src="'+img+'" alt="" class="media  rounded-circle mr-2 idPost " id="'+v.id_post+'" style="width:50px;height:50px" ><input type="text"  class="form-control col-lg-8 mb-2 otlbl"  onchange="myFunction(event)" id="'+v.id_comment+'"></div>'+'<div class="d-none form-inline container-fluid justify-content-end   " id="httl-'+v.id_comment+'"  ></div>'+
                '</div>';
                $(httl).html(ht);
              });   
            }
          });

          }


        </script>
        @endsection