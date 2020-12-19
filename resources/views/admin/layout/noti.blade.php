@if(count($errors))
    @foreach($errors->all() as $error)
        <p class="alert alert-danger">{{$error}}</p>
    @endforeach
@endif
@if(session('success'))
    <p class="alert alert-success">{{session('success')}}</p>
@endif
@if(session('info'))
    <p class="alert alert-info">{{session('info')}}</p>
@endif