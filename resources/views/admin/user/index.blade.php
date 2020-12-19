@extends('admin.layout.adminapp')
@section('admintitle','All Users')
@section('dashbordtitle','All Register Users')
@section('admincontent')


    <div class="col mb-3">
        <h3 class="text-center text-muted mb-3">All Users</h3>
        @include('admin.layout.noti')
        <table class="table table-responsive table-dark table-hover text-center">
            <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>email</td>
                <td>Register Date</td>
                <td>Admin</td>
                <td>Delete</td>
                <td>Phone</td>
                <td>Address</td>
            </tr>
            </thead>
            <tbody>
            @if(count($users)>0)
                <?php $i = 1 ?>
                @while($i<=count($users))
                    @foreach($users as $user)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>
                                @if($user->admin)
                                    <button type="submit" class="btn btn-sm btn-success">
                                        <a class="text-white" style="text-decoration: none"
                                           href="@if(Auth::user()->id!=$user->id)
                                           {{route('admin.unmakeadmin',['id'=>$user->id])}}
                                           @endif ">
                                            Admin
                                        </a>
                                    </button>
                                @else
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <a href="{{route('admin.makeadmin',['id'=>$user->id])}}" class="text-white"
                                           style="text-decoration: none">Make Admin</a>
                                    </button>
                                @endif
                            </td>
                            <td>
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <a class="text-white" style="text-decoration: none"
                                       href="@if(Auth::user()->id!=$user->id)
                                        {{route('admin.user.delete',['id'=>$user->id])}}
                                            @endif ">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </button>
                            </td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->address}}</td>
                        </tr>
                    @endforeach
                @endwhile
            @endif
            </tbody>
        </table>

        <!-- Pagination Start -->
        <div class="row justify-content-center">
            {{$users->links()}}
        </div>
        <!-- Pagination -->
    </div>

@endsection