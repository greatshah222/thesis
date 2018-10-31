@section('content')
    <div class="container">
        <div class="row">
            @extends('layouts.manage')
            <div class="row">
                <div class="col-md-10 ">
                    <h1 class="title">Employee information</h1>
                </div>
                <div class="col-md-1 pull-right ">




                    <a href="{{route('personals.create')}}" class="btn btn-info btn-lg " role="button" aria-pressed="true"><i class="fa fa-user-plus m-l-10"></i> Add New </a>













                </div>

                '
                <br>
                <br><br><br>
                <div class="col-md-10  ">

                    <hr>
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr class="table-info">
                            <th>#</th>

                            <th>Name</th>
                            <th>Info</th>
                            <th>Twitter</th>
                            <th>facebook</th>
                            <th>instragram</th>
                            <th>google</th>




                            <th>Image</th>



                            <th>Actions</th>




                        </tr>

                        </thead>
                        <tbody>
                        @foreach($personals as $personal)
                            <tr>
                                <td>{{$personal->id}}</td>
                                <td>{{$personal->employee_name}}</td>
                                <td>{{$personal->employee_info}}</td>
                                <td>{{$personal->employee_twitter_link}}</td>
                                <td>{{$personal->employee_fb_link}}</td>


                                <td>{{$personal->employee_instagram_link}}</td>
                                <td>{{$personal->employee_google_link}}</td>



                                <td>
                                    <a href="{{asset('employeeimage/'.$personal->featured_employee_image)}}"><img src="{{asset('employeeimage/'.$personal->featured_employee_image)}}" height="10px" width="100px" class="img-responsive" alt="djsb"/></a>
                                </td>



                                <td>
                                <a href="{{route('personals.edit',$personal->id)}}" class="btn btn-primary btn-sm" role="button">Edit</a>

                                </td>
                                <td>
                                    {!! Form::open(['route'=>['personals.destroy', $personal->id],'method'=>'DELETE']) !!}
                                    {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                </td>







                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-offset-6 pull-right">
                        {{$personals->links()}}


                    </div>

                </div>

            </div>



        </div>


    </div>


    <br><br><br><br><br>

    @include('_includes.navbar.footer')


@endsection

