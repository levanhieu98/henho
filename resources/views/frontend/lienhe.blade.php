@extends('layouts.app')
@section('content')

<!-- Home -->

<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="img/lienhe.jpg"></div>
	<div class="home_content">
		<div class="home_title">Liên hệ</div>
	</div>
</div>

<!-- Contact -->

<div class="contact_form_section mb-3">
	<div class="container">
		<div class="row">
			<div class="col">
				{{-- @if(Session::has('alert'))
				<p class="alert alert-success row-md-6">{{Session::get('alert')}}</p>
				@endif --}}
				<!-- Contact Form -->
				<div class="contact_form_container">
					<div class="contact_title text-center">Bạn cần trợ giúp ?</div>
					{{-- <form action="#" id="contact_form" class="contact_form text-center"> --}}

						<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
						<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
						<input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
						<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
						<button  id="form_submit_button" class="form_submit_button button trans_200">send message<span></span><span></span><span></span></button>
					{{-- 	</form> --}}
				</div>

			</div>
		</div>
	</div>
</div>


<!-- Google Map -->

<div class="travelix_map">
	<div id="google_map" class="google_map">
		<div class="map_container">
			<div class="mapouter"><div class="gmap_canvas"><iframe width="1920" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=180%20cao%20l%E1%BB%97&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://google-map-generator.com">location map generator</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:1920px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1920px;}</style></div>
		</div>
	</div>
</div>

@endsection
@section('js')
<script>
	$('#form_submit_button').click(function() {
		$.ajax({
			url:'/thongtinlienhe',
			type:'POST',
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			data:{
				'name':$('#contact_form_name').val(),
				'email':$('#contact_form_email').val(),
				'subject':$('#contact_form_subject').val(),
				'message':$('#contact_form_message').val(),
			},
			success: function (data) {
				console.log(data);
			}

		});
	});
</script>
@endsection
