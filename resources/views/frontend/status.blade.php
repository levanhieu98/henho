 @extends('layouts.home')
 @section('content')
   <!-- ======= Services Section ======= -->
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
@endsection
@section('js')
<script >
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
</script>
@endsection