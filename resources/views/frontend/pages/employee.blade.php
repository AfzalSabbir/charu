@extends('frontend.layouts.master')

@section('fav_title', 'Quality Printing Press in Dhaka Bangladesh | Printing Solution')

@section('metas')

@endsection

@section('styles')
	<style>
		.employee_photo{
			overflow: hidden;
			text-align: center;
		}
		.employee_photo img {
		    height: 345px;
		    width: 327px;
		    box-sizing: inherit;
		}
		.employee_photo:hover img {
			transform: scale(1.2);
		}
		.header3{
			margin: 50px auto;
		}
		.border{
			width: 100px;
			border: 1px solid green;
			margin: 0 auto;
			margin-bottom: 50px;
		}
		.margin-bottom{
			margin-bottom: 50px;
		}
		.employee-text {
		    margin: 18px;
		    font-size: 15px;
		    font-family: sans-serif;
		}
		.employee-text h4{

		}
		.employee-text p {
			font-size: 12px;
			margin-top: 5px;
		}
	</style>
@endsection

@section('content')


<div class="container text-center header3">
	<h3>Our Best Employee</h3>
</div>
<div class="border"></div>

<div class="container">
	<div class="row margin-bottom">
@foreach($employees as $employee)
		<div class="col-md-4">
			<div class="employee_photo">
				<img class="img-thumbnail" src="{{asset($employee->image)}}" alt="">
			</div>
			<div class="employee-text text-center">
				<h4>{{$employee->name}}</h4>
				<p>{{$employee->designation}}</p>
			</div>
		</div>
@endforeach
	</div>
</div>


@endsection

@section('scripts')

@endsection
