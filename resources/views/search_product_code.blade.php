@extends('layouts.app')
@section('title','Search Product')
@section('content')


    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="/" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
				Search Product Code
			</span>
        </div>
    </div>

    <div class="container py-3">
        <div class="col-12 mb-3">
            <form action="{{route('search.code.result')}}" method="post">
                {{csrf_field()}}
                @include('admin.layout.noti')
                <div class="form-group">
                    <input type="text" class="form-control" name="product_id" id="product_id" placeholder="Enter Product Code eg: dBgU">
                </div>
                <button type="submit" class="btn btn-primary">Find Product</button>
            </form>
        </div>
    </div>




@endsection