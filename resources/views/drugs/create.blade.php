
@extends('layouts.app')
@section('page-header')
Drugs
@endsection
@section('content')

<div class="row">
     <div class="col-8 offset-md-2">
        <div class="card-box">
            <h3 class="m-t-0 m-b-30">Create drug</h3>

            <form action="{{ route('drugs.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" parsley-trigger="change" 
                           placeholder="Enter drug name" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="text" name="quantity" parsley-trigger="change" 
                           placeholder="Enter quantity" class="form-control" id="quantity" required>
                </div>
                <div class="form-group">
                    <label for="expiry_date">Expiry date</label>
                    <input type="date" name="expiry_date" parsley-trigger="change"
                           placeholder="Enter expiry date" class="form-control" id="expiry_date" maxlength="10" required>
                </div>
                <div class="form-group">
                    <label for="unit">Unit</label>
                    <input type="text" name="unit" parsley-trigger="change"
                           placeholder="Enter unit" class="form-control" id="unit" required>
                </div>
                 <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" parsley-trigger="change"
                           placeholder="Enter price" class="form-control" id="price" required>
                </div>
                 <div class="form-group text-left m-b-0">
                    <button  type="submit" class="btn btn-primary waves-effect waves-light">
                        Save drug
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