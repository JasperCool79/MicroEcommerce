@extends('admin.layout.adminapp')
@section('admintitle','Options')
@section('dashbordtitle','User Select Options')
@section('admincontent')

    <!-- Table Start -->
        <div class="col-xl-6 col-12 mb-3 mb-xl-0">
            <h3 class="text-center text-muted mb-3">User Select Option Name</h3>
            @include('admin.layout.noti')
            <table class="table table-striped text-center bg-light">
                <thead>
                <tr class="text-muted">
                    <td>#</td>
                    <td>Name</td>
                    <td>Action</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                </thead>
                <tbody>
                @if(count($option_names)>0)
                    @foreach($option_names as $name)
                        <tr>
                            <td>{{$name->id}}</td>
                            <td>{{$name->name}}</td>
                            <td>
                                <button class="btn btn-sm btn-primary">
                                    <a class="text-white" href="{{route('options.match',['id'=>$name->id])}}">Add Value</a>
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-info">
                                    <a class="text-white" href="{{route('option.edit',['id'=>$name->id])}}">  <i class="fa fa-edit"></i></a>
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-danger">
                                    <a class="text-white" href="{{route('option.delete',['id'=>$name->id])}}"> <i class="fa fa-trash"></i></a>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="5">
                            <h3 class="text-warning"> There is No Name ! Create New</h3>
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
            <!-- Pagination Start -->
            <div class="row justify-content-center">
                {{$option_names->links()}}
            </div>
            <!-- Pagination -->

        </div>

        <div class="col-xl-6 col-12 mb-3">
            <h3 class="text-center text-muted mb-3">User Select Option Value</h3>
            <table class="table table-dark table-hover text-center">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                </thead>
                <tbody>
                @if(count($option_values)>0)
                    @foreach($option_values as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->value}}</td>
                            <td>
                                <button class="btn btn-sm btn-info">
                                    <a class="text-white" href="{{route('option.value.edit',['id'=>$value->id])}}">  <i class="fa fa-edit"></i></a>
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-danger">
                                    <a class="text-white" href="{{route('option.value.delete',['id'=>$value->id])}}"> <i class="fa fa-trash"></i></a>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="4">
                            <h3 class="text-warning"> There is No Value ! Create New</h3>
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
            <!-- Pagination Start -->
            <div class="row justify-content-center">
                {{$option_values->links()}}
            </div>
            <!-- Pagination -->
        </div>



    <!-- Table End -->



    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <div class="card rounded">
                    <div class="card-body bg-dark">
                        <h5 class="text-muted text-center mb-4">Functions For User Select Options</h5>

                        <div class="row text-center">
                            <div class="col">
                                <a href="{{route('option.newname')}}" class="btn btn-lg btn-block-sm btn-danger mr-2">
                                    <i class="fas fa-plus-square text-dark"></i>
                                    <span class="h6 text-white">New Name</span>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{route('option.value')}}" class="btn btn-lg btn-block-sm btn-danger mr-2">
                                    <i class="fas fa-plus-square text-dark"></i>
                                    <span class="h6 text-white">New Value</span>
                                </a>
                            </div>
                            <div class="col">
                                <a disabled class="btn btn-md btn-danger btn-block-sm">
                                    <i class="fas fa-arrow-alt-circle-right text-dark"></i>
                                    <span class="h6 text-white"><span class="h3">{{count($option_names)}}</span> Name & <span class="h3">{{count($option_values)}}</span> Value</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection