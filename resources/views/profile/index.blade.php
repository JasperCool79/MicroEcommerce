@extends('layouts.app')
@section('title','User Profile')
@section('content')


    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="/" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
				My Profile
			</span>
        </div>
    </div>
    <div class="container">
        <div class="row p-2">
            <a href="{{route('myorders')}}" class="btn btn-lg btn-block btn-success">View My Orders</a>
        </div>
    </div>

    <div class="container py-3">
        @include('admin.layout.noti')
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-2">
                    @if($user->avatar)
                        <img  src="{{asset('uploads/profile/'.$user->avatar)}}" class="card-img-top img-fluid" alt="...">
                        @else
                        <img src="{{asset('uploads/profile/1.png')}}" class="card-img-top img-fluid" alt="...">
                        @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$user->name}}</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <span class="text-primary">Name <i class="fa fa-arrow-circle-right text-danger"></i> {{$user->name}}<br></span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-primary">Email <i class="fa fa-arrow-circle-right text-danger"></i> {{$user->email}}<br></span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-primary">Phone <i class="fa fa-arrow-circle-right text-danger"></i> {{$user->phone}}<br></span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-primary">Address <i class="fa fa-arrow-circle-right text-danger"></i> {{$user->address}}<br></span>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
            <div class="col-md-4">

                <div class="card mb-2">
                    <div class="card-header text-center">
                        <h3>Edit Profile</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="number" name="phone" class="form-control" id="phone" placeholder="Your Phone Number" value="{{$user->phone}}">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" id="address" placeholder="Your Adress" value="{{$user->address}}">
                            </div>

                            <div class="form-group">
                                <label for="avatar">Profile Photo</label>
                                <input type="file" class="form-control-file" id="avatar" name="avatar">
                            </div>

                            <button type="submit" class="btn btn-block btn-primary">Update</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-md-4">

                <div class="card">
                    <div class="card-header text-center">
                        <h3>Change Password</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('profile.password.update')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="password">Old Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="form-group">
                                <label for="new_password">New Password</label>
                                <input type="password" name="new_password" class="form-control" id="new_password">
                            </div>
                            <div class="form-group">
                                <label for="new_password_confirmation">Confirm Your New Password</label>
                                <input type="password" name="new_password_confirmation" class="form-control" id="new_password_confirmation">
                            </div>

                            <button type="submit" class="btn btn-block btn-primary">Change</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>




@endsection