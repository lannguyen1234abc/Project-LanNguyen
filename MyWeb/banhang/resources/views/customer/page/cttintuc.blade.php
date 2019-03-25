@extends('customer.layout.master')

@section('content')
	<div class="container">
		<div class="row  mt-5 mb-5">
			<div class="col-md-6 offset-md-3">
				<h4 class="text-center"> 
	                {{$tt->title}}
	            </h4>
				<p> {!!$tt->content!!}</p>
			</div>
		</div>
	</div>

@endsection
