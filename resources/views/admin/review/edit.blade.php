@extends('admin.layout.adminapp')
@section('admintitle','Update Review')
@section('dashbordtitle','Update => '.$review->name)
@section('admincontent')

    <div class="col-12 mb-3 mb-xl-0 mt-3">
        <div class="card rounded">
            <div class="card-body">
                <h5 class="text-muted text-center mb-4">Update Review</h5>
                <form action="{{route('review.update',['id'=>$review->id])}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @include('admin.layout.noti')
                    <div class="form-group">
                        <input name="name" value="{{$review->name}}" type="text" class="form-control py-2 mb-3" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input name="job" value="{{$review->job}}" type="text" class="form-control py-2 mb-3" placeholder="Enter Job Name! eg; Teacher,Doctor">
                    </div>
                    <div class="form-group">
                        <input name="company" value="{{$review->company}}" type="text" class="form-control py-2 mb-3"
                               placeholder="Enter Company Name">
                    </div>
                    <div class="form-group">
                        <label for="photo" class="text-info">Photo  220x220</label>
                        <input name="photo" type="file" class="form-control-file" id="photo">
                    </div>
                    <div class="form-group">
                        <label for="review_message">Review Message</label>
                        <textarea class="form-control" id="review_message" name="review_message" rows="3">{{$review->review_message}}</textarea>
                    </div>
                    <button  type="submit" class="btn font-weight-bold text-light btn-primary btn-block py-2 mb-5">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>



@endsection