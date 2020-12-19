@extends('admin.layout.adminapp')
@section('admintitle','Create Product')
@section('dashbordtitle','Create New Product')
@section('admincontent')

    <div class="col-12 mb-3 mb-xl-0 mt-3">
        <div class="card rounded">
            <div class="card-body">
                <h5 class="text-muted text-center mb-4">Create New Product</h5>
                <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @include('admin.layout.noti')
                    <div class="form-group">
                        <label for="category_id">Select Category</label>
                        <select class="form-control" id="category_id" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input name="name" type="text" class="form-control py-2 mb-3" placeholder="Product Name">
                    </div>
                    <div class="form-group">
                        <input name="title" type="text" class="form-control py-2 mb-3" placeholder="Product Title">
                    </div>
                    <div class="form-group">
                        <input name="price" type="number" class="form-control py-2 mb-3" placeholder="Product Price">
                    </div>
                    <div class="form-group">
                        <label for="img" class="text-info">Product Image Use ( 1200 x 1420 )Size</label>
                        <input name="product_img[]" type="file" class="form-control-file" id="banner" multiple>
                    </div>
                    <div class="form-group">
                        <label for="description">Description of Product</label>
                        <textarea name="description" class="form-control" id="description" rows="3"></textarea>
                    </div>
                    @if(count($option_names)!=0)
                        @foreach($option_names as $name)
                            <div class="form-group">
                                <label for="option">Select Option For <span class="text-primary h4">{{$name->name}}</span></label>
                                <input type="hidden" value="{{$name->name}}" name="option_names[]">
                                <select class="form-control" id="option" name="option_value_{{$name->name}}[]"  multiple>
                                    @foreach($name->values as $value)
                                        <option  value="{{$value->value}}">{{$value->value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="order_type">Select Order Type</label>
                        <select class="form-control" id="order_type" name="order_type">
                            <option selected value="0">Instock</option>
                            <option value="1">PreOrder</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="product_type">Select Product Price Type</label>
                        <select class="form-control" id="product_type" name="product_type">
                            <option selected value="0">Retail</option>
                            <option value="1">Whole Sale</option>
                        </select>
                    </div>

                    <button  type="submit" class="btn font-weight-bold text-light btn-primary btn-block py-2 mb-5">
                        Create
                    </button>
                </form>
            </div>
        </div>
    </div>



@endsection