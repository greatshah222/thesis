@section('content')
    <div class="container">
        <div class="row">
            @extends('layouts.manage')
            <div class="row">
                <div class="col-md-10 ">
                    <h1 class="title">Edit Employee Information</h1>
                </div>


                <br>
                <br><br><br>
                <div class="col-md-8 col-md-offset-2 ">

                    <hr>
                    <form action="{{route('personals.update',$personal->id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="employee_name"> Employee Name</label>
                            <input type="text" class="form-control" id="employee_name"   name="employee_name" value="{{$personal->employee_name}}">
                        </div>
                        <div class="form-group">
                            <label for="employee_info"> Employee Info</label>
                            <input type="text" class="form-control" id="employee_info"   name="employee_info" value="{{$personal->employee_info}}">
                        </div>
                        <div class="form-group">
                            <label for="employee_fb_link"> Facebook Link</label>
                            <input type="text" class="form-control" id="employee_fb_link"   name="employee_fb_link" value="{{$personal->employee_fb_link}}">
                        </div>
                        <div class="form-group">
                            <label for="employee_twitter_link"> Twitter Link</label>
                            <input type="text" class="form-control" id="employee_twitter_link"   name="employee_twitter_link" value="{{$personal->employee_twitter_link}}">
                        </div>
                        <div class="form-group">
                            <label for="employee_instagram_link"> Instragam Link</label>
                            <input type="text" class="form-control" id="employee_instagram_link"   name="employee_instagram_linkk" value="{{$personal->employee_instagram_link}}">
                        </div>
                        <div class="form-group">
                            <label for="employee_google_link"> GoogleLink</label>
                            <input type="text" class="form-control" id="employee_google_link"   name="employee_google_link" value="{{$personal->employee_google_link}}">
                        </div>
                        <div class="form-group">
                            <label for="featured_employee_image"> Employee Image</label>
                            <input type="file" class="form-control-file" id="featured_employee_image"   name="featured_employee_image">
                        </div>




                        <button type="submit" class="btn btn-success">Create Employee </button>
                    </form>

                </div>

            </div>



        </div>

    </div>








    <br><br><br><br><br><br><br><br><br><br>
    @include('_includes.navbar.footer')

@endsection



