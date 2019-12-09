
@extends('layouts.app')
@section('page-header')
Patients
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
              @include('global_partials.flash-messages')
            <h3 class="m-t-10">Patients</h3>
             <a  type="submit"
             href="/patients/create"
                 class="btn btn-primary waves-efdfect waves-light">
                        Create patient
             </a>
            <table id="datatable-buttons" class="table table-bordered">
                <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>gender</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Age</th>
                        <th>Created</th>
                    </tr>
                </thead>

                <tbody>
                	@foreach($patients as $patient)
                    <tr>                   	
                        <td>{{ $patient->first_name }}</td>
                        <td {{ $patient->last_name }}</td>
                        <td>{{ $patient->gender }}</td>
                        <td>{{ $patient->contact }}</td>
                        <td>{{ $patient->address }}</td>
                        <td>{{ $patient->age }}</td>
                        <td>{{ $patient->created_at }}</td>
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