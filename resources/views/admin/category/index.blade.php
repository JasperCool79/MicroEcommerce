@extends('admin.layout.adminapp')
@section('admintitle','Category')
@section('dashbordtitle','All Catogories')
@section('admincontent')

    <div class="col-xl-6 col-12 mb-3 mb-xl-0 mt-3">
        <div class="card rounded">
            <div class="card-body">
                <h5 class="text-muted text-center mb-4">Add New Category</h5>
                <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @include('admin.layout.noti')
                    <div class="form-group">
                        <input name="name" type="text" class="form-control py-2 mb-3" placeholder="Category Menu Name">
                    </div>
                    <div class="form-group">
                        <input name="title" type="text" class="form-control py-2 mb-3" placeholder="Category Title">
                    </div>
                    <div class="form-group">
                        <input name="subtitle" type="text" class="form-control py-2 mb-3"
                               placeholder="Category Subtitle">
                    </div>
                    <div class="form-group">
                        <label for="banner" class="text-info">Category Slider Image Use(1900 x 900 )Size</label>
                        <input name="banner_img" type="file" class="form-control-file" id="banner">
                    </div>
                    <div class="form-group">
                        <label for="sub-banner" class="text-info">Category Name Image Use(1200 x 800 )Size</label>
                        <input name="sub_banner_img" type="file" class="form-control-file" id="sub-banner">
                    </div>
                    <button type="submit" class="btn font-weight-bold text-light btn-primary btn-block py-2 mb-5">
                        Create
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-12 mb-3 mb-xl-0 mt-3">
        <h4 class="text-muted p-3 mb-3">Categories::</h4>
        @if(count($categories)>0)
            <div class="container-fluid">
                @foreach($categories as $category)
                    <div class="row py-3 mb-4 task-list-border align-items-center bg-secondary text-white">
                        <div class="col-1">
                            <input type="checkbox" checked>
                        </div>
                        <div class="col-sm-9 col-8">
                            {{$category->name}}
                        </div>
                        <div class="col-1">
                            <a href="{{route('category.edit',['id'=>$category->id])}}" data-toggle="tooltip"
                               title="<h3>Edit</h3>" data-placement="right" data-html="true">
                                <i class="fa fa-edit fa-lg text-success mr-2"></i>
                            </a>
                        </div>
                        <div class="col-1">
                            <a href="{{route('category.destroy',['id'=>$category->id])}}" data-toggle="tooltip"
                               title="<h3>Delete</h3>" data-placement="right" data-html="true">
                                <i class="fa fa-trash fa-lg text-danger mr-2"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
                {{--Pagination Start--}}
                <div class="row justify-content-center">
                    {{$categories->links()}}
                </div>
                {{--Pagination End--}}
            </div>
            @else
            <h3 class="text-warning"> There is No Category ! Create New</h3>
            @endif

    </div>



@endsection