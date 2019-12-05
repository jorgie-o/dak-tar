
@extends('layouts.app')
@section('page-header')
doctors
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h3 class="m-t-0">Drugs</h3>
            </p>
            <table id="datatable-buttons" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Drug Name</th>
                    </tr>
                </thead>

                <tbody>
                	@foreach($drugs as $drug)
                    <tr>                   	
                        <td>{{ $drug->name }}</td>
                        <td>{{ $drug->expiry_date }}</td>
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