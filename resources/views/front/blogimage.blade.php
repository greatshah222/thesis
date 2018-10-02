@section('content')
    <div class="container">
        <div class="row">
            @extends('layouts.manage')
            <div class="row">
                <div class="col-md-10 ">
                    <h1 class="title">Add image</h1>
                </div>


                <br>
                <br><br><br>
                <div class="col-md-10 pull-right  ">

                    <hr>
                    {!! Form::open(array('route' => 'photo.store','files'=>true)) !!}

                    {{Form::label('title','Title:')}}
                    {{Form::text('title',null,array('class'=>'form-control','required'=>''))}}




                    <br>
                    {{Form::label('featured_image','Image:')}}
                    {{Form::file('featured_image',null,array('class'=>'form-control'))}}
                    <br>




                    {{Form::submit('Add Image',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}

                    {!! Form::close() !!}



                </div>



        </div>

    </div>






@endsection



