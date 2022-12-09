@extends('layouts.simple.master')
@section('title', 'Create New')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Default Forms</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item"><a href="{{route('cigarettes.index')}}">Cigarettes Daily Count</a></li>
<li class="breadcrumb-item active">Create Record</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		
		<div class="col-sm-12 col-xl-12">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header">
							<h5>Create New</h5>
                        </div>
                        
                        <form method="POST" action="{{ route('dailycount.store') }}" class="theme-form mega-form">
                            @csrf
                            <div class="card-body">
							
                            
                            
								<h6>Daily Cigarettes Count</h6>
								<div class="mb-3">
									<label class="col-form-label">Date</label>
									<input class="datepicker-here form-control digits" type="text" name="date" data-language="en">
								</div>

								<div class="mb-3">
									<label class="col-form-label">Employee Name</label>
									<input class="form-control" type="text" name="empl_name" placeholder="Employee Name">
								</div>

								@foreach($cigarettes as $cigarette)
								<div class="mb-2">
									<label class="col-form-label">{{$cigarette->name}}</label>
									
									<input class="form-control" type="text" name="cigarette_qty_{{$cigarette->id}}" placeholder="How Many Carton Of {{$cigarette->name}}">
									<input type="hidden" name="cigarette_id_{{$cigarette->id}}" value="{{$cigarette->id}}" >
								</div>

								
								@endforeach

								<div class="mb-3">
									<label class="col-form-label">Name</label>
									<input class="form-control" type="text" name="name" placeholder="Name">
								</div>

								<div class="mb-3">
									<label class="col-form-label">Max Storage Quantity</label>
									<input class="form-control" type="number" name="maxqty" placeholder="Maximum Storage Quantity">
								</div>

								<div class="mb-3">
									<label class="col-form-label">Display Order</label>
									<input class="form-control" type="number" name="ord" placeholder="record order">
								</div>
							
							
							
						</div>
						<div class="card-footer">
							<button class="btn btn-primary" type="submit">Submit</button>
							<button class="btn btn-secondary" type="reset">Cancel</button>
						</div></form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
@endsection