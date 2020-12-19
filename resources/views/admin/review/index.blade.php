@extends('admin.layout.adminapp')
@section('admintitle','Review')
@section('dashbordtitle','Manage Review Page')
@section('admincontent')

    <div class="col-xl-6 col-12 mb-3 mb-xl-0 mt-3">
        <div class="card rounded">
            <div class="card-body">
                <h5 class="text-muted text-center mb-4">Add New Review</h5>
                <form action="{{route('review.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @include('admin.layout.noti')
                    <div class="form-group">
                        <input name="name" type="text" class="form-control py-2 mb-3" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input name="job" type="text" class="form-control py-2 mb-3" placeholder="Enter Job Name! eg; Teacher,Doctor">
                    </div>
                    <div class="form-group">
                        <input name="company" type="text" class="form-control py-2 mb-3"
                               placeholder="Enter Company Name">
                    </div>
                    <div class="form-group">
                        <label for="photo" class="text-info">Photo  220x220</label>
                        <input name="photo" type="file" class="form-control-file" id="photo">
                    </div>
                    <div class="form-group">
                        <label for="review_message">Review Message</label>
                        <textarea class="form-control" id="review_message" name="review_message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn font-weight-bold text-light btn-primary btn-block py-2 mb-5">
                        Create
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-12 mb-3 mb-xl-0 mt-3">
        <h4 class="text-muted p-3 mb-3">Reviews::</h4>
        @if(count($reviews)>0)
            <div class="container-fluid">
                @foreach($reviews as $review)
                    <div class="row py-3 mb-4 task-list-border align-items-center bg-secondary text-white">
                        <div class="col-1">
                            <input type="checkbox" checked>
                        </div>
                        <div class="col-sm-9 col-8">
                            <span class="text-info">{{$review->name}}</span> <span class="small">{{substr($review->review_message,0,40)}}</span>
                        </div>
                        <div class="col-1">
                            <a href="{{route('review.edit',['id'=>$review->id])}}" data-toggle="tooltip"
                               title="<h3>Edit</h3>" data-placement="right" data-html="true">
                                <i class="fa fa-edit fa-lg text-success mr-2"></i>
                            </a>
                        </div>
                        <div class="col-1">
                            <a title="<h3>Delete</h3>" data-placement="bottom" data-html="true" data-toggle="tooltip"
                               href="{{route('review.destroy',['id'=>$review->id])}}"
                               onclick="event.preventDefault();
                                                     document.getElementById('review-deleete-form').submit();">
                                <i class="fa fa-trash-alt fa-lg text-danger"></i>
                            </a>

                            <form id="review-deleete-form" action="{{route('review.destroy',['id'=>$review->id])}}"
                                  method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endforeach
                {{--Pagination Start--}}
                <div class="row justify-content-center">
                    {{$reviews->links()}}
                </div>
                {{--Pagination End--}}
            </div>
            @else
            <h3 class="text-warning"> There is No Review ! Create New</h3>
            @endif

    </div>



@endsection