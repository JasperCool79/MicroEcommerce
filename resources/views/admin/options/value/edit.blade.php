@extends('admin.layout.adminapp')
@section('admintitle','Create Option Value')
@section('dashbordtitle','Update Option Value')
@section('admincontent')

    <div class="col-12 mb-3 mb-xl-0 mt-3">
        <div class="card rounded">
            <div class="card-body">
                <h5 class="text-muted text-center mb-4">Update Option Value <span class="text-primary">{{$option_value->value}}</span></h5>
                <form action="{{route('option.value.update',['id'=>$option_value->id])}}" method="post">
                    {{csrf_field()}}
                    @include('admin.layout.noti')
                    <div class="form-group">
                        <input name="name" value="{{$option_value->value}}"  type="text" class="form-control py-2 mb-3" placeholder="User Select Option Name">
                    </div>
                    <button  type="submit" class="btn font-weight-bold text-light btn-primary btn-block py-2 mb-5">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>



@endsection