
@extends('layouts.app')
@section('page-header')
doctors
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h3 class="m-t-0">Nurses</h3>
            </p>
            <table id="datatable-buttons" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nurse Name</th>
                    </tr>
                </thead>

                <tbody>
                	@foreach($nurses as $nurses)
                    <tr>                   	
                        <td>{{ $nurses->first_name }} {{ $nurses->last_name }}</td>
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