@extends('admin.layout.adminapp')
@section('admintitle','Match Name and Value')
@section('dashbordtitle','Match Name and Value')
@section('admincontent')

    <div class="col-12 mb-3 mb-xl-0 mt-3">
        <div class="card rounded">
            <div class="card-body">
                <h5 class="text-muted text-center mb-4">Match Option Name and Value</h5>
                @if(count($option_values) ==0)
                    <h3 class="text-warning">Your Must Create Name and Value Before</h3>
                    @else
                    <form action="{{route('options.match.sync',['id'=>$option_name->id])}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">{{$option_name->name}}</label>

                                <select class="form-control" id="exampleFormControlSelect2" name="{{$option_name->name}}[]" multiple>
                                    @foreach($option_values as $value)
                                    <option value="{{$value->id}}"
                                            @if(in_array($value->value,$select_option_values))
                                                selected="selected"
                                            @endif

                                    >{{$value->value}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <button type="submit" class="btn btn-primary form-control">Add Values</button>
                    </form>
                @endif
            </div>
        </div>
    </div>



@endsection