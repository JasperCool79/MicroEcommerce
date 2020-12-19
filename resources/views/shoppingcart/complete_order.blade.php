@extends('layouts.app')
@section('title','Complete Order')
@section('content')


    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="/" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
				Complete Your Order
			</span>
        </div>
    </div>

    <div class="container py-3">
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-header text-info">
                    You have Successfully Ordered!<span class="text-warning"> Order Id <i class="fa fa-arrow-circle-right text-danger"></i> {{$order_id}}</span>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-info">Pleace Send Cash To Below Account Number with Your Order Number in Message Box</h3>
                    <p> KBZ &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right text-danger"></i>&nbsp;&nbsp;099-988-000-998</p>
                    <p> KBZ Pay&nbsp;&nbsp;&nbsp; <i class="fa fa-arrow-circle-right text-danger"></i>&nbsp;&nbsp;099-988-000-998</p>
                    <p> WaveMoney&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right text-danger"></i>&nbsp;&nbsp;099-988-000-998</p>
                    <p> AYA &nbsp;&nbsp;&nbsp; <i class="fa fa-arrow-circle-right text-danger"></i>&nbsp;&nbsp;099-988-000-998</p>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{route('welcome')}}">Continute To Shopping</a>
                </div>
            </div>
        </div>
    </div>




@endsection