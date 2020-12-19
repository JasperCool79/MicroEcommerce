@extends('admin.layout.adminapp')
@section('admintitle','All Message')
@section('dashbordtitle','Message From Users')
@section('admincontent')

    <div class="col-12 mb-3">
        <h3 class="text-center text-muted mb-3">All Message</h3>
        <table class="table table-responsive table-dark table-hover text-center">
            <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>email</td>
                <td>Send Date</td>
                <td>Content</td>
                <td>Delete</td>
            </tr>
            </thead>
            <tbody>
            @if(count($messages)>0)
                <?php $i = 1 ?>
                @while($i<=count($messages))
                    @foreach($messages as $message)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$message->name}}</td>
                            <td>{{$message->email}}</td>
                            <td>{{$message->created_at}}</td>
                            <td>{{$message->message}}</td>
                            <td>
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <a href="{{route('delete_message',['id'=>$message->id])}}" class="text-white"
                                       style="text-decoration: none">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </button>
                            </td>
                        </tr>

                    @endforeach
                @endwhile
            @endif
            </tbody>
        </table>

        <!-- Pagination Start -->
        <div class="row justify-content-center">
            {{$messages->links()}}
        </div>
        <!-- Pagination -->
    </div>

@endsection