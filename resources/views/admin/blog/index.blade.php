@extends('admin.layout.adminapp')
@section('admintitle','Blog')
@section('dashbordtitle','Blog')
@section('admincontent')

    <div class="col-xl-6 col-12 mb-3 mb-xl-0 mt-3">
        <div class="card rounded">
            <div class="card-body">
                <h5 class="text-muted text-center mb-4">Add New Post</h5>
                <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @include('admin.layout.noti')
                    <div class="form-group">
                        <input name="title" type="text" class="form-control py-2 mb-3" placeholder="Blog Post Title">
                    </div>
                    <div class="form-group">
                        <label for="content">Blog Post Content</label>
                        <textarea name="content" class="form-control" id="content" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="banner" class="text-info">Blog Post Image 1200x720</label>
                        <input name="banner_img" type="file" class="form-control-file" id="banner">
                    </div>
                    <button type="submit" class="btn font-weight-bold text-light btn-primary btn-block py-2 mb-5">
                        Create
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-12 mb-3 mb-xl-0 mt-3">
        <h4 class="text-muted p-3 mb-3">Blog Posts::</h4>
        @if(count($posts)>0)
            <div class="container-fluid">
                @foreach($posts as $post)
                    <div class="row py-3 mb-4 task-list-border align-items-center bg-secondary text-white">
                        <div class="col-1">
                            <input type="checkbox" checked>
                        </div>
                        <div class="col-sm-9 col-8">
                            {{$post->title}}
                        </div>
                        <div class="col-1">
                            <a href="{{route('post.edit',['id'=>$post->id])}}" data-toggle="tooltip"
                               title="<h3>Edit</h3>" data-placement="right" data-html="true">
                                <i class="fa fa-edit fa-lg text-success mr-2"></i>
                            </a>
                        </div>
                        <div class="col-1">
                            <a href="{{route('post.destroy',['id'=>$post->id])}}" data-toggle="tooltip"
                               title="<h3>Delete</h3>" data-placement="right" data-html="true">
                                <i class="fa fa-trash fa-lg text-danger mr-2"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
                {{--Pagination Start--}}
                <div class="row justify-content-center">
                    {{$posts->links()}}
                </div>
                {{--Pagination End--}}
            </div>
            @else
            <h3 class="text-warning"> There is No Blog Post ! Create New</h3>
            @endif

    </div>



@endsection