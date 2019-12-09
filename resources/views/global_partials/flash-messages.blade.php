@if(Session::has('success'))
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ Session::get('success') }}
    </div>
@endif

@if($errors->count() > 0)
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        @foreach($errors->all() as $error)
        <ul>
            <li>{{ $error }}</li>
        </ul>
        @endforeach
    </div>
@endif