
@extends('layouts.app')
@section('page-header')
Labaratory
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
             @include('global_partials.flash-messages')
            <h3 class="m-t-10">Labartory tests</h3>
             <a
             href="/labs/create"
                 class="btn btn-primary waves-effect waves-light m-b-15">
                        Create lab test
             </a>
            <table id="datatable-buttons" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Test requested</th>
                        <th>Test results</th>
                        <th>Created</th>
                    </tr>
                </thead>

                <tbody>
                	@foreach($labs as $lab)
                    <tr>                   	
                        <td>{{ $lab->patient->name }}</td>
                        <td>{{ $lab->opd->lab_results }}</td>
                        <td>{{ $lab->test_result }}</td>
                        <td>{{ $lab->created_at }}</td>
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