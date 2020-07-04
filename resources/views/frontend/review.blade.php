 @extends('layouts.home')
 @section('content')
   <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        @if(Session::has('alert'))
        <p class="alert alert-success row-md-6">{{Session::get('alert')}}</p>
        @endif
        <div class="section-title">
          <h2>Cảm nhận về Website</h2>
          <p>Bạn có cảm nhận và nhận xét gi sau khi sử dụng website này?</p>
        </div>
        <form action="/dulieudanhgia" method="POST" accept-charset="utf-8">
          @csrf
          <textarea class="form-control"  placeholder="Đây là vùng nhập text" name="text"></textarea>
          <button type="submit" class="btn btn-primary btn-lg mt-2 float-right">Gửi nhận xét</button>
        </form>
      
      </div>
    </section><!-- End Services Section -->
@endsection