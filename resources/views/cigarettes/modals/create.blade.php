
        <div class="row">
          <div class="col-lg-12 margin-tb">
              <div class="pull-left">
                  <h2>Create New Category</h2></div>
                  <div class="pull-right">
                      <a class=" close-model" data-dismiss="modal" > <i class="fa fa-close"></i></a>
                  </div>
              </div>
          </div>
          @if (count($errors) > 0)
          <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
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

          <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({
                    
                    format: 'YYYY-MM-DD'
                });
            });
        </script>    
   