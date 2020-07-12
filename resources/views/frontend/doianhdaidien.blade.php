<div class="container">
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header   ">
					<img src="{{'/frontend/'.Auth::user()->img}}" width="100" height="150" alt="" >
				</div>
				<div class="modal-body">
					<form action="/doianhdaidien" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
						@csrf
						<input type="file" name="anhdaidien" class="form-control" >

				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-default" >Thay đổi</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>

