@extends('admin.layout.adminapp')
@section('admintitle','Update Post')
@section('dashbordtitle','Update Blog Post')
@section('admincontent')

    <div class="col-12 mb-3 mb-xl-0 mt-3">
        <div class="card rounded">
            <div class="card-body">
                <h5 class="text-muted text-center mb-4">Update Post</h5>
                <form action="{{route('post.update',['id'=>$post->id])}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @include('admin.layout.noti')
                    <div class="form-group">
                        <input name="title" value="{{$post->title}}" type="text" class="form-control py-2 mb-3" placeholder="Blog Post Title">
                    </div>
                    <div class="form-group">
                        <label for="content">Blog Post Content</label>
                        <textarea name="content" class="form-control" id="content" rows="3">{{$post->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="banner" class="text-info">Blog Post Image 2200x720</label>
                        <input name="banner_img" type="file" class="form-control-file" id="banner">
                    </div>
                    <button type="submit" class="btn font-weight-bold text-light btn-primary btn-block py-2 mb-5">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>



@endsection