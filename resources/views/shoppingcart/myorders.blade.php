@extends('layouts.app')
@section('title','My Orders')
@section('content')


    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="/" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
				Orders
			</span>
        </div>
    </div>

    <div class="container">
        <div class="col-12 mb-3">
            <h3 class="text-center mb-3">All Of Your Orders</h3>
            <table class="table table-dark text-white bg-dark table-hover text-center">
                <thead>
                <tr>
                    <td>Order Id</td>
                    <td>Order Date</td>
                    <td>Total Cost</td>
                    <td>Status</td>
                    <td>View</td>
                </tr>
                </thead>
                <tbody>
                @if(count($orders)>0)
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$order->order_id}}</td>
                            <td>{{date_format($order->created_at,'d-F-Y')}}</td>
                            <td>{{$order->total_cost}}</td>
                            <td>
                                @if($order->status == 1)
                                    <span class="btn btn-sm btn-success disabled text-white">Complete</span>
                                @else
                                    <span class="btn btn-sm btn-warning disabled text-white">Pending</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('myorders.details',['id'=>$order->order_id])}}"><button class="btn btn-sm btn-success">View Details</button></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>




@endsection