@section('content')
<div class="container">
    <div class="row">
        @extends('layouts.manage')
        <div class="row">
        <div class="col-md-10 ">
            <h1 class="title">Manage Users</h1>
        </div>

        <div class="col-md-1 pull-right ">




            <a href="{{asset('manage/users/create')}}" class="btn btn-info btn-lg " role="button" aria-pressed="true"><i class="fa fa-user-plus m-l-10"></i>  Create new user</a>













        </div>
            <br>
            <br><br><br>
            <div class="col-md-8 pull-right  ">

            <hr>
            <table class="table table-hover table-striped ">
                <thead>
                <tr class="success">
                    <th>Id</th>
                    <th>Avatar</th>


                    <th>Name</th>
                    <th>Email</th>
                    <th>Date Created</th>
                    <th></th>


                    <th>Actions</th>
                    <th></th>


                </tr>

                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <th>{{$user->id}}</th>
                    <th><img src="{{asset($user->profile->avatar)}}" height="75px" width="100px"></th>




                    <th>{{$user->name}}</th>

                    <th>{{$user->email}}</th>
                    <th>{{$user->created_at->toFormattedDateString()}}</th>


                    <th>
                        @if($user->admin)
                            <a href="{{route('users.not.admin',$user->id)}}" class="btn btn-danger btn-sm" role="button">Remove admin</a>
                        @else
                            <a href="{{route('users.admin',$user->id)}}" class="btn btn-success btn-sm" role="button">make Admin</a>
                        @endif
                    </th>
                    <th><a href="{{route('users.edit',$user->id)}}" class="btn btn-primary btn-sm" role="button">Edit</a> </th>

                    <th>@if(Auth::id() !== $user->id )
                            {!! Form::open(['route'=>['users.destroy', $user->id],'method'=>'DELETE']) !!}
                            {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}


                        @endif




                    </th>





                </tr>
                    @endforeach
                </tbody>
            </table>
                    <div class="col-md-offset-6 pull-right">
                        {{$users->links()}}
                    </div>

            </div>

        </div>



    </div>

</div>






@endsection