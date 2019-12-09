
@extends('layouts.app')
@section('page-header')
doctors
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
             @include('global_partials.flash-messages')
            <h3 class="m-t-10">Doctors</h3>
             <a  type="submit"
             href="/doctors/create"
                 class="btn btn-primary waves-effect waves-light">
                        Create doctor
             </a>
            <table id="datatable-buttons" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Doctor Name</th>
                        <th>gender</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Created</th>
                    </tr>
                </thead>

                <tbody>
                	@foreach($doctors as $doctor)
                    <tr>                   	
                        <td>{{ $doctor->first_name }} {{ $doctor->last_name }}</td>
                        <td>{{ $doctor->gender }}</td>
                        <td>{{ $doctor->contact }}</td>
                        <td>{{ $doctor->address }}</td>
                        <td>{{ $doctor->created_at }}</td>
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