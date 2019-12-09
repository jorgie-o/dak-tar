
@extends('layouts.app')
@section('page-header')
Nurses
@endsection
@section('content')

<div class="row">
     <div class="col-8 offset-md-2">
        <div class="card-box">
            <h3 class="m-t-0 m-b-30">Create Nurse</h3>

            <form action="{{ route('nurses.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="first_name">First name*</label>
                    <input type="text" name="first_name" parsley-trigger="change" 
                           placeholder="Enter first name" class="form-control" id="first_name" required>
                </div>
                <div class="form-group">
                    <label for="first_name">Last name*</label>
                    <input type="text" name="last_name" parsley-trigger="change" 
                           placeholder="Enter last name" class="form-control" id="last_name" required>
                </div>
                <div class="form-group">
                    <label for="first_name">Gender*</label>
                    <select class="custom-select mt-3" name="gender">
                        <option selected>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="contact" name="contact" parsley-trigger="change"
                           placeholder="Enter contact" class="form-control" id="contact" maxlength="10" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" parsley-trigger="change"
                           placeholder="Enter address" class="form-control" id="address" required>
                </div>
                 <div class="form-group text-left m-b-0">
                    <button  type="submit" class="btn btn-primary waves-effect waves-light">
                        Save nurse
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