@section('content')
    <div class="container">
        <div class="row">
            @extends('layouts.manage')
            <div class="row">
                <div class="col-md-10 ">
                    <h1 class="title">Edit Blog Setting</h1>
                </div>


                <br>
                <br><br><br>
                <div class="col-md-8 col-md-offset-2 ">

                    <hr>
                    <form action="{{route('settings.update')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name"> Site Name</label>
                            <input type="text" class="form-control" id="name"   name="site_name" value="{{$settings->site_name }}">
                        </div>
                        <div class="form-group">
                            <label for="name"> CEO Name</label>
                            <input type="text" class="form-control" id="name"   na  me="ceo_name" value="{{$settings->ceo_name }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email"   name="contact_email" value="{{$settings->contact_email}}">
                        </div>
                        <div class="form-group">
                            <label for="address">Adress</label>
                            <input type="text" class="form-control" id="address"   name="address" value="{{$settings->address}}">
                        </div>
                        <div class="form-group">
                            <label for="contact"> Contact Number </label>
                            <input type="tel" class="form-control" id="contact"   name="contact_number" value="{{$settings->contact_number}}">
                        </div>
                        <div class="form-group">
                            <label for="about_us">About_us Big Paragraph</label>
                            <input type="text" class="form-control" id="about_us"   name="about_us_big" value="{{$settings->about_us_big}}">
                        </div>
                        <div class="form-group">
                            <label for="about_us">About_us small paragraph</label>
                            <input type="text" class="form-control" id="about_us"   name="about_us_small" value="{{$settings->about_us_small}}">
                        </div>
                        <div class="form-group">
                            <label for="about_us">About_us nutshell(1)</label>
                            <input type="text" class="form-control" id="about_us"   name="about_us_nutshell1" value="{{$settings->about_us_nutshell1}}">
                        </div>
                        <div class="form-group">
                            <label for="about_us">About_us nutshell(2)</label>
                            <input type="text" class="form-control" id="about_us"   name="about_us_nutshell2" value="{{$settings->about_us_nutshell2}}">
                        </div>
                        <div class="form-group">
                            <label for="about_us">About_us nutshell(3)</label>
                            <input type="text" class="form-control" id="about_us"   name="about_us_nutshell3" value="{{$settings->about_us_nutshell3}}">
                        </div>
                        <div class="form-group">
                            <label for="about_us">About_us nutshell(4)</label>
                            <input type="text" class="form-control" id="about_us"   name="about_us_nutshell4" value="{{$settings->about_us_nutshell4}}">
                        </div>



                        <button type="submit" class="btn btn-success">update Setting </button>
                    </form>

                </div>

            </div>



        </div>

    </div>








    <br><br><br><br><br><br><br><br><br><br>
    @include('_includes.navbar.footer')

@endsection



