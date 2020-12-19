@extends('admin.layout.adminapp')
@section('admintitle','Create Option Name')
@section('dashbordtitle','New Option Name')
@section('admincontent')

    <div class="col-12 mb-3 mb-xl-0 mt-3">
        <div class="card rounded">
            <div class="card-body">
                <h5 class="text-muted text-center mb-4">Create New Option Name</h5>
                <form action="{{route('option.store')}}" method="post">
                    {{csrf_field()}}
                    @include('admin.layout.noti')
                    <div class="form-group">
                        <input name="name"  type="text" class="form-control py-2 mb-3" placeholder="User Select Option Name">
                    </div>
                    <button  type="submit" class="btn font-weight-bold text-light btn-primary btn-block py-2 mb-5">
                        Create
                    </button>
                </form>
            </div>
        </div>
    </div>



@endsection