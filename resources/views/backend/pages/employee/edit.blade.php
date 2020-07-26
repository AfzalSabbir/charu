<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', __('backend/employee.edit_employee') )

<!-- Write Styles <style>In Here</style> -->
@section('styles')
@endsection

<!-- This Section Will Shown <body>In Here</body> -->
@section('content')
<!-- Top Management Part -->
<div class="app-title">
	<div>
		<h1><i class="{{ 'fa fa-object-group' }}"></i> {{ __('backend/employee.employee_management') }}</h1>
	</div>
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('backend/default.dashboard') }}</a></li>
		<li class="breadcrumb-item"><a href="{{ route('admin.employee.index') }}">{{ __('backend/employee.employee') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/default.edit') }}</li>
	</ul>
</div>

<!-- Edit Form Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-md-6"><h2><i class="{{ 'fa fa-pencil-square' }}"></i> {{ __('backend/employee.edit_employee') }}</h2></div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="card-body">
				@include('backend.partials.error_message')
				<form class="form-horizontal" id="myform" action="{{ route('admin.employee.update',$row->id) }}" method="post" enctype="multipart/form-data">
					@csrf

					<div class="form-group row">
						<label class="control-label col-md-3 text-right"><strong>
							{{ __('backend/form_field.name') }} <span class="text-danger">*</span>
						</strong></label>
						<div class="col-md-5">
							<input id="name" class="form-control" type="text" name="name" value="{{ $row->name }}" required>
						</div>
					</div>

					<div class="form-group row">
						<label class="control-label col-md-3 text-right"><strong>
							{{ __('backend/default.mobile') }} <span class="text-danger">*</span>
						</strong></label>
						<div class="col-md-5">
							<input id="mobile" class="form-control" type="text" name="mobile" value="{{ $row->mobile }}" required>
						</div>
					</div>

					<div class="form-group row">
						<label class="control-label col-md-3 text-right"><strong>
							{{ __('backend/default.address') }} <span class="text-danger">*</span>
						</strong></label>
						<div class="col-md-5">
							<input id="address" class="form-control" type="text" name="address" value="{{ $row->address }}" required>
						</div>
					</div>

					<div class="form-group row">
						<label class="control-label col-md-3 text-right"><strong>
							{{ __('backend/default.designation') }} <span class="text-danger">*</span>
						</strong></label>
						<div class="col-md-5">
							<input id="designation" class="form-control" type="text" name="designation" value="{{ $row->designation }}" required>
						</div>
					</div>

					<div class="form-group row">
						<label class="control-label col-md-3 text-right"><strong>
							{{ __('backend/default.image') }} &nbsp;
						</strong></label>
						<div class="col-md-5">
							<input id="image" class="form-control" type="file" name="image">
						</div>
					</div>

					<div class="form-group row">
						<label class="control-label col-md-3 text-right" for="status">
							<strong>{{ __('backend/form_field.status') }}</strong>  <span class="text-danger">*</span></label>
							<div class="col-md-5">
								<select name="status" id="status" class="form-control" required>
									<option value="1" {{ ($row->status == 1)? 'selected':'' }}>Active</option>
									<option value="0" {{ ($row->status == 0)? 'selected':'' }}>Deactive</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-8 mt-3">
								<button type="submit" name="save" class="btn btn-primary float-right">{{ __('backend/default.submit') }}</button>
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
@endsection