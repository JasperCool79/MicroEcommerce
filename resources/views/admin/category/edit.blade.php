@extends('admin.layout.adminapp')
@section('admintitle','Update Category')
@section('dashbordtitle','Update => '.$category->name)
@section('admincontent')

    <div class="col-12 mb-3 mb-xl-0 mt-3">
        <div class="card rounded">
            <div class="card-body">
                <h5 class="text-muted text-center mb-4">Update Category</h5>
                <form action="{{route('category.update',['id'=>$category->id])}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @include('admin.layout.noti')
                    <div class="form-group">
                        <input name="name" value="{{$category->name}}" type="text" class="form-control py-2 mb-3" placeholder="Category Menu Name">
                    </div>
                    <div class="form-group">
                        <input name="title" value="{{$category->title}}" type="text" class="form-control py-2 mb-3" placeholder="Category Title">
                    </div>
                    <div class="form-group">
                        <input name="subtitle" value="{{$category->subtitle}}" type="text" class="form-control py-2 mb-3" placeholder="Category Subtitle">
                    </div>
                    <div class="form-group">
                        <label for="banner" class="text-info">Category Slider Image Use(1900 x 900 )Size</label>
                        <input name="banner_img" type="file" class="form-control-file" id="banner">
                    </div>
                    <div class="form-group">
                        <label for="sub-banner" class="text-info">Category Name Image Use(1200 x 800 )Size</label>
                        <input name="sub_banner_img" type="file" class="form-control-file" id="sub-banner">
                    </div>
                    <button  type="submit" class="btn font-weight-bold text-light btn-primary btn-block py-2 mb-5">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>



@endsection