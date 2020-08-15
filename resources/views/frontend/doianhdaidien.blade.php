<div class="container">
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header " id="show">
					@if (strpos(Auth::user()->img, 'img') !== false) 
					<img src="{{'/frontend/'.Auth::user()->img}}" id="blah" class="img-fluid rounded-circle" alt="">
					@else
					<img src="{{Auth::user()->img}}" id="blah" class="img-fluid rounded-circle" alt="">
					@endif
				</div>
				<div class="modal-body">
					<form action="/doianhdaidien" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
						@csrf
						<input type="file" name="anhdaidien" class="form-control" onchange="readURL(this)" id="anh"  >

					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-default" >Thay đổi</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

