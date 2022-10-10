@extends('layouts.simple.master')
@section('title', 'Default Forms')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Default Forms</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Categories</li>
<li class="breadcrumb-item active">Create Category</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		
		<div class="col-sm-12 col-xl-12">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header">
							<h5>Create Category</h5>
                        </div>
                        
                        <form method="POST" action="{{ route('categories.store') }}" class="theme-form mega-form">
                            @csrf
                            <div class="card-body">
							
                            
                            
								<h6>Category Information</h6>
								<div class="mb-3">
									<label class="col-form-label">Name</label>
									<input class="form-control" type="text" name="name" placeholder="your Name">
								</div>
								<div class="mb-3">
									<label class="col-form-label">Display Order</label>
									<input class="form-control" type="text" name="ord" placeholder="record order">
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

@endsection