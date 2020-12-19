@extends('layouts.app')
@section('title','Send Proof')
@section('content')


    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="/" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
				Send Proof For  Your Order
			</span>
        </div>
    </div>

    <div class="container py-3">
        <div class="col-12 mb-3">
            <form action="{{route('proof.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                @include('admin.layout.noti')
                <div class="form-group">
                    <label for="order_id">Your Order Number</label>
                    <input type="number" class="form-control" name="order_id" id="order_id" placeholder="Enter Your Order Number eg: 1573652461">
                </div>
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <label for="phone">Your Phone Number</label>
                    <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter Your Phone Number">
                </div>
                <div class="form-group">
                    <label for="address">Your Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter Your Address">
                </div>
                <div class="form-group">
                    <label for="img">ScreenShoot Photo</label>
                    <input type="file" class="form-control-file" id="img" name="img">
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>




@endsection