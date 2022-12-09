@extends('layouts.simple.master')
@section('title', 'Cigarettes')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatable-extension.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>List Of Cigarettes </h3>
@endsection

@section('breadcrumb-items')

<li class="breadcrumb-item active">Cigarettes</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Configuration Option</h5>
					<span>Here you can ADD,Edit, Delete a record of the listing below.</span>
				</div>
				<div class="card-body">
					<div class="dt-ext table-responsive">
					<a href="{{ URL::route('cigarettes.create') }}" title="Create New" ><button class="btn btn-primary btn-sm mb-5 right-btn" > Create New <i class="fa fa-plus-square" ></i></button></a>
					
					
						<table class="display" id="responsive">
							<thead>
								<tr>
									<th>Name</th>
									<th>Category</th>
									<th>Action</th>
									
									
								</tr>
							</thead>
							<tbody>
								
								@foreach ($cigarettes as $cigarette)
									<tr>
										<td>{{$cigarette->name}}</td>
										<td>{{$cigarette->category->name}}</td>
										<td><a href="{{ URL::route('cigarettes.edit', array('id' => $cigarette->id)) }}" title="Edit Record" ><i class="fa fa-edit text-success" ></i></a>&nbsp; &nbsp; <a href="{{ URL::route('cigarettes.delete', array('id' => $cigarette->id)) }}" title="Delete Record" ><i class="fa fa-trash text-danger" ></i></a></td>
										
									</tr>
									
								@endforeach
								
								
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
		
		
	</div>
</div>

@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/jszip.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.autoFill.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.select.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.colReorder.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.scroller.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/custom.js')}}"></script>
@endsection