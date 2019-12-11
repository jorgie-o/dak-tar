
@extends('layouts.app')
@section('page-header')
Drugs
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
             @include('global_partials.flash-messages')
            <h3 class="m-t-10">Drugs</h3>
             <a
             href="/drugs/create"
                 class="btn btn-primary waves-effect waves-light">
                        Create drug
             </a>
            <table id="datatable-buttons" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Drug Name</th>
                        <th>Quantity in stock</th>
                        <th>Expiry date</th>
                        <th>Price</th>
                        <th>Unit</th>
                        <th>Created</th>
                    </tr>
                </thead>

                <tbody>
                	@foreach($drugs as $drug)
                    <tr>                   	
                        <td>{{ $drug->name }}</td>
                        <td>{{ $drug->quantity }}</td>
                        <td>{{ $drug->expiry_date }}</td>
                        <td>{{ $drug->price }}</td>
                        <td>{{ $drug->unit_of_measrement }}</td>
                        <td>{{ $drug->created_at }}</td>
                    </tr>
                     @endforeach
                </tbody>
            </table>
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