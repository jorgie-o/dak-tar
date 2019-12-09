
@extends('layouts.app')
@section('page-header')
Departments
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h3 class="m-t-0">Departments</h3>
            </p>
            <table id="datatable-buttons" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Department Name</th>
                        <th>Created</th>
                    </tr>
                </thead>

                <tbody>
                	@foreach($departments as $department)
                    <tr>                   	
                        <td>{{ $department->name }}</td>
                        <td>{{ $department->created_at }}</td>
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