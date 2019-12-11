
@extends('layouts.app')
@section('page-header')
Doctor
@endsection
@section('content')

<div class="row">
     <div class="col-8 offset-md-2">
        <div class="card-box">
            <h3 class="m-t-0 m-b-30">Create Department</h3>

            <form action="{{ route('departments.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="first_name">Department name*</label>
                    <input type="text" name="name" parsley-trigger="change" 
                           placeholder="Enter department name" class="form-control" id="name" required>
                </div>
                 <div class="form-group text-left m-b-0">
                    <button  type="submit" class="btn btn-primary waves-effect waves-light">
                        Save department
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf']
            });
        });

</script>
@endsection