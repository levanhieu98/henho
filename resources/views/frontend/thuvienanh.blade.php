 @extends('layouts.home')
 @section('content')

 <!-- ======= Portfolio Section ======= -->

 <section id="portfolio" class="portfolio section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Thư viện ảnh</h2>
      <p>Hãy lưu trữ những kỷ niệm tuyệt vời tại WhoToDate.
        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#createAlbum">Tạo Album</button>
      </p>
    </div>
    <!-- Modal -->
    <div  class="modal fade  ml-5" id="createAlbum" tabindex="-1" role="dialog" aria-labelledby="createAlbum" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="AlbumTitle">Tạo album</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/taoAlbum" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="text" name="albumName" placeholder="Nhập tên cho album" class=" @error('albumName') is-invalid @enderror">
              @error('albumName')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
              <textarea class="form-control mt-3  @error('albumDescription') is-invalid @enderror" rows="5" name="albumDescription" placeholder="Mô tả cho album"></textarea>
              @error('albumDescription')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror


              <!-- Dropzone -->

              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">

                      <div class="preview-zone hidden">
                        <div class="box box-solid">
                          <div class="box-header with-border">
                            <div><b>Preview</b></div>
                            <div class="box-tools pull-right">
                              <button type="button" class="btn btn-danger btn-xs remove-preview">
                                <i class="fa fa-times"></i> Reset
                              </button>
                            </div>
                          </div>
                          <div class="box-body d-flex flex-row row">

                          </div>
                        </div>
                      </div>
                      <div class="dropzone-wrapper">
                        <div class="dropzone-desc">
                          <i class="glyphicon glyphicon-download-alt"></i>
                          <p>Click vào đây để chọn hình hoặc kéo thả.</p>
                        </div>
                        <input type="file" name="img_logo[]" class="dropzone @error('img_logo') is-invalid @enderror" multiple  accept="image/*">
                        @error('img_logo')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">     
              <button type="submit" class="btn btn-primary">Tạo album</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy bỏ</button>
            </div>
          </form>
        </div>
      </div>
    </div>




    <div class="gallery mt-2"></div>

    <div class="row" data-aos="fade-up">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">

          @foreach($albums as $a)
          <li id="{{$a->id_album}}"  data-container="body" data-toggle="popover" data-placement="top" onclick="image(event)" title="{{date("d-m-Y", strtotime($a->dateCreated))}}" data-content="{{$a->description}}" >{{$a->name_album}}</li>
          @endforeach
        </ul>
      </div>

    </div>
    <!--  Image By ID -->
    
    <div class="row col-lg-12 portfolio-item  " id="result">
      @foreach($img as $ig)
      <div class="portfolio-wrap mb-2 col-4">
      <img src="{{'frontend/img/ima2/'.$ig->name_image}}" style="width:333px;height:300px" alt="">
      {{-- <div class="portfolio-links">
      <a href="frontend/img/ima2/'+v.name_image+'" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
      </div> --}}
      </div>
      @endforeach
    </div>
    

  </div>

</div>

</section><!-- End Portfolio Section -->


@endsection

@section('js')
<script>
  function readFile(input) {
    if (input.files) { 
      var htmlPreview='';
      var filesAmount = input.files.length;
      for (let i = 0; i < filesAmount; i++) {
        var reader = new FileReader();

        reader.onload = function(e) {
         htmlPreview +=
         '<div class="mt-1  mb-1"><img width=200px height=150px class="mr-2 mb-2" src="' + e.target.result + '" />' +'</div>';
         var wrapperZone = $(input).parent();
         var previewZone = $(input).parent().parent().find('.preview-zone');
         var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');

         wrapperZone.removeClass('dragover');
         previewZone.removeClass('hidden');
         boxZone.empty();
         boxZone.append(htmlPreview);
       };

       reader.readAsDataURL(input.files[i]);
     }

   }
 }

 function reset(e) {
  e.wrap('<form>').closest('form').get(0).reset();
  e.unwrap();
}

$(".dropzone").change(function() {
  readFile(this);
});

$('.dropzone-wrapper').on('dragover', function(e) {
  e.preventDefault();
  e.stopPropagation();
  $(this).addClass('dragover');
});

$('.dropzone-wrapper').on('dragleave', function(e) {
  e.preventDefault();
  e.stopPropagation();
  $(this).removeClass('dragover');
});

$('.remove-preview').on('click', function() {
  var boxZone = $(this).parents('.preview-zone').find('.box-body');
  var previewZone = $(this).parents('.preview-zone');
  var dropzone = $(this).parents('.form-group').find('.dropzone');
  boxZone.empty();
  previewZone.addClass('hidden');
  reset(dropzone);
});


$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});


function image()
{
  $.ajax({
    url:'/hienthiAlbum',
    type:'POST',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data:{

     'id_album':event.target.id,
   }, success: function (data)
   {
    var kq=''
    $.each(data,function(k,v){
      kq+='<div class="portfolio-wrap mb-2 col-4">'+
      '<img src="frontend/img/ima2/'+v.name_image+'" style="width:333px;height:300px" alt="">'+
      '<div class="portfolio-links">'+
      '<a href="frontend/img/ima2/'+v.name_image+'" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>'+
      '</div>'+
      '</div>';
      $("#result").html(kq);
    });

    // console.log(data);
  }

});
}
</script>
@endsection