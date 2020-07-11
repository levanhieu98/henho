 @extends('layouts.home')
 @section('content')
 <style >
       .active {
            background: #eeeeee;
        }
 </style>
 <div class="container-fluid">
   <div class="row">
     <div class="col-md-4">
       {{-- <div class="mb-1"><input type="text" name="search" id="search" value="" placeholder="tìm kiếm"></div> --}}
       <div class="user-wrapper"  id="kq"  >
        <ul class="users"  >
          @foreach($users as $us)
          <li class="user" id="{{$us->id}}">
           @if($us->unread)
           <span class="pending">{{ $us->unread }}</span>
           @endif
           <div class="media" >
            <div class="media-left">
             @if (strpos($us->img, 'https://graph.facebook.com') !== false) 
             <img src="{{$us->img}}" class="media-object" alt="">
             @elseif (strpos($us->img, 'https://lh3.googleusercontent.com') !== false) 
             <img src="{{$us->img}}" class="media-object" alt="">
             @else
             <img src="{{'frontend/'.$us->img}}" class="img-fluid" alt="">
             @endif
            </div>
            <div class="media-body">
              <p class="name">{{$us->name}}</p>
              <p class="email">{{$us->email}}</p>
            </div>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
  <div class="col-md-8" id="messages">

  </div>
</div>

</div>
@endsection
@section('js')
<script src="https://js.pusher.com/6.0/pusher.min.js"></script>

<script >
  var receiver_id='';
  var my_id={{Auth::id()}};
  $(document).ready(function()
  {
     // ajax setup form csrf token
     $.ajaxSetup
     ({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

     //pusher_chat
     Pusher.logToConsole = true;

     var pusher = new Pusher('81c09a11b33c2c271c23',{
      cluster: 'ap1'
    });

     var channel = pusher.subscribe('my-channel');
     channel.bind('my-event', function(data) {
      // alert(JSON.stringify(data));
      if (my_id == data.from) {
        $('#' + data.to).click();
               // alert('sender');
             } 
             else if (my_id == data.to) {
              if (receiver_id == data.from) {
                    // if receiver is selected, reload the selected user ...
                    $('#' + data.from).click();
                  } else {
                    // if receiver is not seleted, add notification for that user
                    var pending = parseInt($('#' + data.from).find('.pending').html());
                    if (pending) {
                      $('#' + data.from).find('.pending').html(pending + 1);
                    } else {
                      $('#' + data.from).append('<span class="pending">1</span>');
                    }
                  }
                }

              });




     //xem tn
     $('.user').click(function()
     { 
      $('.user').removeClass('active');
      $(this).addClass('active');
      $(this).find('.pending').remove();
      receiver_id=$(this).attr('id');
      $.ajax({
        url: '/contentmassage/'+ receiver_id,
        type: 'GET', 
        success: function (data) {
          $('#messages').html(data);
          scrollToBottomFunc();
        }
      })
    });

     //gui tn
     $(document).on('keyup','.input-text input',function(e)
     {
       var message=$(this).val();
       if(e.keyCode==13 && message !='' && receiver_id!='')
       {
        $(this).val('');
        $.ajax({
          type: "post",
          url: "sentmessages", 
          data: {
            "receiver_id":receiver_id,
            "message":message,
          },
          success: function (data)
          {
           $.ajax({
            url: '/contentmassage/'+ receiver_id,
            type: 'GET',  
            success: function (data)
            {
              $('#messages').html(data);
              scrollToBottomFunc();
            }
          })
              // console.log(data);
            }, error: function (jqXHR, status, err) {
            },
            complete: function () {
              scrollToBottomFunc();
            }
          })
      }
    });
   });

  function scrollToBottomFunc() {
    $('.message-wrapper').animate({
      scrollTop: $('.message-wrapper').get(0).scrollHeight
    }, 50);
  }

</script>

<script>
   $('#search').on('keyup',function(){
        $value = $(this).val();
        $.ajax({
            type: 'POST',
            url: '/ketquatimkiem',
            headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
            data: {
                'key': $value,
            },
            success:function(result){
                $('#kq').html(result);     
            }
        });
    })
</script>
@endsection