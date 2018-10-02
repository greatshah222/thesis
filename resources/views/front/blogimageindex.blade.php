@section('content')
    <div class="container">
        <div class="row">
            @extends('layouts.manage')
            <div class="row">
                <div class="col-md-10 ">
                    <h1 class="title">All Images</h1>
                </div>
                <div class="col-md-1 pull-right ">




                    <a href="{{route('photo.create')}}" class="btn btn-info btn-lg " role="button" aria-pressed="true"><i class="fa fa-user-plus m-l-10"></i> Add New Image</a>













                </div>

                '
                <br>
                <br><br><br>
                <div class="col-md-10 pull-right  ">

                    <hr>
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr class="table-info">
                            <th>#</th>

                            <th>Title</th>



                            <th>Image</th>

                            <th>Date Created</th>


                            <th>Actions</th>




                        </tr>

                        </thead>
                        <tbody>
                        @foreach($photos as $photo)
                            <tr>
                                <td>{{$photo->id}}</td>
                                <td>{{$photo->title}}</td>
                                <td>
                                    <a href="{{asset('postphotoimages/'.$photo->featured_image)}}"><img src="{{asset('postphotoimages/'.$photo->featured_image)}}" height="10px" width="100px" class="img-responsive" alt="djsb"/></a>
                                </td>



                                <td>{{$photo->created_at->toFormattedDateString()}}</td>
                                <td>
                                    {!! Form::open(['route'=>['photo.destroy', $photo->id],'method'=>'DELETE']) !!}
                                    {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                </td>







                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-offset-6 pull-right">
                        {{$photos->links()}}

                    </div>

                </div>

            </div>



        </div>


    </div>


    <br><br><br><br><br>

    @include('_includes.navbar.footer')


@endsection

