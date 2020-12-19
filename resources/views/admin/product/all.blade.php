@extends('admin.layout.adminapp')
@section('admintitle','Products')
@section('dashbordtitle','All Products')
@section('admincontent')

    {{--<div class="row">--}}
    <div class="col-12 mb-3">
        <h3 class="text-center text-muted mb-3">Created Product</h3>
        @include('admin.layout.noti')
        <div class="table-responsive-md">

            <table class="table table-dark table-hover text-center">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Image</td>
                    <td>Name</td>
                    <td>Title</td>
                    <td>Price</td>
                    <td>Category</td>
                    <td>Description</td>
                    <td>Edit</td>
                    <td>Delete</td>
                    <td>Best Selling</td>
                    <td>Popular</td>
                </tr>
                </thead>
                <tbody>
                @if(count($products)>0)
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->product_id}}</td>
                            <td>
                                <img class="img-fluid rounded"
                                     src="{{'/uploads/product/'.unserialize($product->product_img)[0]}}" alt=""
                                     width="40" height="40">
                            </td>
                            <td>{{$product->name}}</td>
                            <td>{{substr($product->title,0,15).' ...'}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->category->name}}</td>
                            <td>{{substr($product->description,0,15).' ...'}}</td>
                            <td>
                                <button type="submit" class="btn btn-sm btn-success">
                                    <a class="text-white" style="text-decoration: none"
                                       href="{{route('product.edit',['product'=>$product->id])}}">Edit</a>
                                </button>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <a href="{{route('product.destroy',['product'=>$product->id])}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('product-delete-form').submit();">
                                        <i class="fa fa-trash-alt fa-lg text-white"></i>
                                    </a>

                                    <form id="product-delete-form"
                                          action="{{route('product.destroy',['product'=>$product->id])}}" method="post"
                                          style="display: none;">
                                        @csrf
                                        {{method_field('DELETE')}}
                                    </form>
                                </button>
                            </td>
                            <td>
                                @if($product->best_selling)
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <a class="text-white" style="text-decoration: none"
                                           href="{{route('product.remove.best_selling',['product'=>$product->id])}}">Remove</a>
                                    </button>
                                    @else
                                    <button type="submit" class="btn btn-sm btn-warning">
                                        <a class="text-white" style="text-decoration: none"
                                           href="{{route('product.add.best_selling',['product'=>$product->id])}}">Add</a>
                                    </button>
                                @endif
                            </td>
                            <td>
                                @if($product->popular)
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <a class="text-white" style="text-decoration: none"
                                           href="{{route('product.remove.popular',['product'=>$product->id])}}">Remove</a>
                                    </button>
                                @else
                                    <button type="submit" class="btn btn-sm btn-warning">
                                        <a class="text-white" style="text-decoration: none"
                                           href="{{route('product.add.popular',['product'=>$product->id])}}">Add</a>
                                    </button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                       <td colspan="11">
                          <h3 class="text-warning"> There is No Products ! Create New</h3>
                       </td>
                    </tr>
                @endif
                </tbody>
            </table>

        </div>


        <!-- Pagination Start -->

        <div class="row justify-content-center">
            {{$products->links()}}
        </div>
        <!-- Pagination -->
    </div>
    {{--</div>--}}


@endsection