@extends('admin.layout.adminapp')
@section('admintitle','Create Option Value')
@section('dashbordtitle','New Option Value')
@section('admincontent')

    <div class="col-12 mb-3 mb-xl-0 mt-3">
        <div class="card rounded">
            <div class="card-body">
                <h5 class="text-muted text-center mb-4">Create New Option Value</h5>
                <form action="{{route('option.value.store')}}" method="post">
                    {{csrf_field()}}
                    @include('admin.layout.noti')
                    <div class="form-group">
                        <input name="name"  type="text" class="form-control py-2 mb-3" placeholder="User Select Option Value">
                    </div>
                    <button  type="submit" class="btn font-weight-bold text-light btn-primary btn-block py-2 mb-5">
                        Create
                    </button>
                </form>
            </div>
        </div>
    </div>



@endsection