
@extends('layouts.app')
@section('page-header')
Pharmacy
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
             @include('global_partials.flash-messages')
            <h3 class="m-t-10">Drug dispenses</h3>
             <a
             href="/pharmacies/create"
                 class="btn btn-primary waves-effect waves-light m-b-15">
                        Create new dispense
             </a>
            <table id="datatable-buttons" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Disease</th>
                        <th>Dispenses</th>
                        <th>Created</th>
                    </tr>
                </thead>

                <tbody>
                	@foreach($pharmacies as $pharmacie)
                    <tr>                   	
                        <td>{{ $pharmacie->patient->name }}</td>
                        <td>{{ $pharmacie->opd->healness }}</td>
                        <td>{{ $pharmacie->dispenses }}</td>
                        <td>{{ $pharmacie->created_at }}</td>
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