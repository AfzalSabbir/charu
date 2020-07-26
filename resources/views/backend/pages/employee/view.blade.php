<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', __('backend/employee.employee') )

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
		<li class="breadcrumb-item active">{{ __('backend/employee.employee') }}</li>
	</ul>
</div>

<!-- Table Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">

			<div class="card-header">
				<div class="row">
					<div class="col-md-6"><h2><i class="{{ 'fa fa-table' }}"></i> {{ __('backend/employee.employee_view') }}</h2></div>
					{{-- <div class="col-md-6"><a href="{{ route('admin.employee.add') }}" class="float-right btn btn-primary"><i class="fa fa-plus"></i> {{ __('backend/default.add_new') }}</a></div> --}}
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="card-body">

				<!-- Permission for Admin Access -->
				@php
				$permissions = \App\Models\Menu::orderBy('id', 'desc')->where('url', substr(url()->current(), 1+strlen(url('/'))))
				->orWhere('url', substr(url()->current(), strlen(url('/'))))->first();
				if(Auth::guard('admin')->user()->admin_role == 3){
					$bodyMenu = \App\Models\Role::where('admin_id', Auth::guard('admin')->id())->first();
				}
				else{
					$bodyMenu = \App\Models\Role::where('role', Auth::guard()->user()->admin_role)->first();
				}

				@endphp

				
				<div class="table-responsive pt-1">
					<table class="table table-bordered table-hover display">
						<tr>
							<td colspan="2"><img src="{{asset($employee->image)}}" alt="" height="150"></td>
						</tr>
						<tr>
							<td>name:</td>
							<td>{{$employee->name}}</td>
						</tr>
						<tr>
							<td>Designation:</td>
							<td>{{$employee->designation}}</td>
						</tr>
						<tr>
							<td>Phone:</td>
							<td>{{$employee->mobile}}</td>
						</tr>
						<tr>
							<td>Address:</td>
							<td>{{$employee->address}}</td>
						</tr>
						<tr>
							<td>Status:</td>
							<td>{{ ($employee->status == 1)? 'Active':'Deactive' }}</td>
						</tr>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection

<!-- Write Scripts <script fileType="text/javascript">In Here</script> -->
@section('scripts')
@endsection