
@extends('layouts.app')
@section('page-header')
OPD
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
             @include('global_partials.flash-messages')
            <h3 class="m-t-10">Diagnosis</h3>
             <a
             href="/opds/create"
                 class="btn btn-primary waves-effect waves-light">
                        Create diagnosis
             </a>
            <table id="datatable-buttons" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>healness</th>
                        <th>Test to performed</th>
                        <th>Pescription</th>
                        <th>Created</th>
                    </tr>
                </thead>

                <tbody>
                	@foreach($opds as $opd)
                    <tr>                   	
                    <td>{{ $opd->patient->name }}</td>
                        <td>{{ $opd->healness }}</td>
                        <td>{{ $opd->lab_results }}</td>
                        <td>{{ $opd->prescription }}</td>
                        <td>{{ $opd->created_at }}</td>
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