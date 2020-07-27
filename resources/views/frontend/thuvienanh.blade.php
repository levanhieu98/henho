 @extends('layouts.home')
 @section('content')
 <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Thư viện ảnh</h2>
      <form action="/dulieuanh" method="POST" accept-charset="utf-8"  multiple enctype="multipart/form-data">
        @csrf
        <input type="file" multiple id="gallery-photo-add" name="abumanh[]"  class="@error('abumanh') is-invalid @enderror">
        @error('abumanh')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
        <button type="submit" class="btn btn-sm bg-success" >Upload</button>

      </form>
      
    </div>

    <div class="gallery mt-2"></div>

    <div class="row" data-aos="fade-up">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Section -->
@endsection

@section('js')
<script >
  $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

      if (input.files) {
        var filesAmount = input.files.length;

        for (i = 0; i < filesAmount; i++) {
          var reader = new FileReader();

          reader.onload = function(event) {
            $($.parseHTML('<img width=200px height=150px class="mr-2 mb-2">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
          }

          reader.readAsDataURL(input.files[i]);
        }
      }

    };

    $('#gallery-photo-add').on('change', function() {
      imagesPreview(this, 'div.gallery');
      $("div.gallery").html("");
    });
  });  
</script>
@endsection