@extends('admin.layout.adminapp')
@section('admintitle','Products')
@section('dashbordtitle','Products')
@section('admincontent')


    @foreach($categories as $category)
        <div class="col-xl-3 col-sm-6 p-2">
            <div class="card card-common">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <i class="fa fa-shopping-cart fa-3x text-warning"></i>
                        <div class="text-right text-secondary">
                            <h5>{{$category->name}}</h5>
                            <h5 class="text-info">
                                {{count($category->products)}}
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-secondary">
                    <i class="fa fa-sync mr-3"></i>
                    <span>Products In Category</span>
                </div>
            </div>
        </div>
    @endforeach
    <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <div class="card rounded">
                        @include('admin.layout.noti')
                        <div class="card-body bg-dark">
                            <h5 class="text-muted text-center mb-4">Total Product Items</h5>

                            <div class="row text-center">
                                <div class="col">
                                    <a href="{{route('product.create')}}" class="btn btn-lg btn-block-sm btn-danger mr-2">
                                        <i class="fas fa-plus-square text-dark"></i>
                                        <span class="h6 text-white">Add New Product</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{route('product.show',['product'=>'all'])}}" class="btn btn-lg btn-block-sm btn-danger mr-2">
                                        <i class="fa fa-eye text-dark"></i>
                                        <span class="h6 text-white">View All Products</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="btn btn-lg btn-danger btn-block-sm">
                                        <i class="fas fa-arrow-alt-circle-right text-dark"></i>
                                        <span class="h6 text-white">Totals Products <strong class="h3 text-success">{{count($products)}}</strong> </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


@endsection