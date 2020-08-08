 @extends('layouts.home')
 @section('content')
 <!-- ======= Resume Section ======= -->
 <section id="resume" class="resume">
  <div class="container">

    <div class="section-title">
      <h2>Tìm hoài để thấy </h2>
    </div>
  <div class="row">

<!-- Search form -->
 <div class=" container-fluid">
      <form action="" accept-charset="UTF-8" method="get">
        <div class="col-md-12 form-inline mb-2 mr-2 ml-3">
          <input type="text" name="search" id="search" placeholder="Tìm kiếm theo sở thích?" class="form-control col-8 ">
            <button class="btn btn-primary col-2 mt-3 ml-1" disabled><i class='bx bx-search-alt'>  </i></button>
       <!--  </div> -->
      </div>
      </form>
    </div> 
    </div>
  <div class="table-responsive">
    <table class="table table-striped ">
        <thead>
            <tr>               
                <th>Ảnh đại diện</th>
                <th>Tên người dùng</th>
                <th>Nghề nghiệp</th>
                <th>Giới thiệu về bản thân</th>
                <th>Sở thích</th>
                <th>Nhu cầu tìm kiếm</th>
                <th>Action</th>
            </tr>
        </thead>
      <tbody>
        <tr></tr>
      </tbody>
    </table>

  </div>
  

</div>

</div>
</section><!-- End Resume Section -->
@endsection

@section('js')
<script type="text/javascript">
  $('#search').on('keyup',function(){
    $value = $(this).val();
    $.ajax({
      type: 'get',
      url: '/trangtimkiem/search',
      data: {
        'search': $value
      },
      success:function(data){
        $('tbody').html(data);
      }
    });
  })
  $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });


  function test(event)
  {
    // alert(event.target.id);
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
        $kq='#'+event.target.id
          $($kq).html('Đã gửi')
        }

    });
  }

</script>  
@endsection
