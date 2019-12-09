
@extends('layouts.app')
@section('page-header')
Nurses
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
             @include('global_partials.flash-messages')
            <h3 class="m-t-10">Nurses</h3>
             <a  type="submit"
             href="/nurses/create"
                 class="btn btn-primary waves-effect waves-light">
                        Create nurse
             </a>
            <table id="datatable-buttons" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nurse Name</th>
                        <th>gender</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Created</th>
                    </tr>
                </thead>

                <tbody>
                	@foreach($nurses as $nurse)
                    <tr>                   	
                        <td>{{ $nurse->first_name }} {{ $nurse->last_name }}</td>
                        <td>{{ $nurse->gender }}</td>
                        <td>{{ $nurse->contact }}</td>
                        <td>{{ $nurse->address }}</td>
                        <td>{{ $nurse->created_at }}</td>
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