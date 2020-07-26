<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', __('backend/product.edit_product') )

<!-- Write Styles <style>In Here</style> -->
@section('styles')
@endsection

<!-- This Section Will Shown <body>In Here</body> -->
@section('content')
<!-- Top Management Part -->
<div class="app-title">
	<div>
		<h1><i class="{{ 'fa fa-gift' }}"></i> {{ __('backend/product.product_management') }}</h1>
	</div>
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('backend/default.dashboard') }}</a></li>
		<li class="breadcrumb-item"><a href="{{ route('admin.product.index') }}">{{ __('backend/product.product') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/default.edit') }}</li>
	</ul>
</div>

<!-- Edit Form Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-md-6"><h2><i class="{{ 'fa fa-pencil-square' }}"></i> {{ __('backend/product.edit_product') }}</h2></div>
					{{-- <div class="col-md-6"><a href="{{ route('admin.product.index') }}" class="float-right btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('backend/default.list') }}</a></div> --}}
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="card-body">
				@include('backend.partials.error_message')
				<form class="form-horizontal" action="{{-- route('admin.product.update',$row->id) --}}" method="post" enctype="multipart/form-data">
					@csrf

					<div style="display: none;" class="alert_container alert alert-danger">
						<span class="min_width" style="display: none;">Minimum width 300px</span><br class="br_show" style="display: none;">
						<span class="ratio" style="display: none;">Image size 300&times;200 or 600&times;400 ...</span>
					</div>

					<div class="form-group row">
						<label class="control-label col-md-3 text-right">
							<strong>{{ __('backend/form_field.name') }}</strong>
							<span class="text-danger">*</span>
						</label>
						<div class="col-md-5">
							<input type="text" id="name" class="form-control" name="name" value="{{ $row->name }}" required>
						</div>
					</div>

					<div class="form-group row" id="img">
						<label for="image" class="col-md-3 text-right">
							<strong>{{ __('backend/default.photo') }}</strong>
							<span class="text-danger">&nbsp;</span>
							<br>
							<code>3:2 ratio</code>
						</label>
						<div class="col-md-5">
							<span class="block_me" style="height: 100%; width: 100%; top: 0; position: absolute; left: 0; display: none;"></span>
							<input type="file" class="form-control img_" name="image" id="image">
							<img class="image_preview position-absolute img_prv" src="{{ asset($row->image) }}" style="right: 17px;">
						</div>
					</div>

					<div class="form-group row">
						<label class="control-label col-md-3 text-right" for="type">
							<strong>{{ __('backend/default.type') }}</strong>  <span class="text-danger">*</span>
						</label>
						<div class="col-md-5">
							<select name="type" id="type" class="form-control" required>
								<option value="1" {{ ($row->type == 1) ? 'selected' : '' }}>{{ __('backend/default.general') }}</option>
								<option value="2" {{ ($row->type == 2) ? 'selected' : '' }}>{{ __('backend/default.feature') }}</option>
							</select>
							<button type="submit" id="submit_" class="btn btn-primary float-right mt-2">{{ __('backend/default.update') }}</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection

<!-- Write Scripts <script fileType="text/javascript">In Here</script> -->
@section('scripts')
	@include('backend.partials.photo_preview')
	<script type="text/javascript">
		$('#image').on('change', function(){
			var img = new Image();
			img.onload = function() {
				
				//##############Don't Delete##############//

				// if (this.width / this.height == 1.5 && this.width >= 300) {
				// 	$('.alert_container').hide();
				// 	$('.min_width').hide();
				// 	$('.ratio').hide();
				// 	$('#submit_').removeClass('disabled').removeAttr('disabled');

				// }
				// if(this.width < 300) {
				// 	$('.alert_container').show();
				// 	$('.min_width').show();
				// 	$('.br_show').hide();
				// 	$('#submit_').addClass('disabled').attr('disabled', 'disabled');

				// }
				// if(this.width / this.height != 1.5) {
				// 	$('.alert_container').show();
				// 	$('.ratio').show();
				// 	$('.br_show').show();
				// 	$('#submit_').addClass('disabled').attr('disabled', 'disabled');

				// }
			}
			img.src = window.URL.createObjectURL(this.files[0]);
		});

	</script>
@endsection