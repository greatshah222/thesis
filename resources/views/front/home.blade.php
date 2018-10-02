@extends('layout.main')

@section('value')
<!-- banner -->
<div class="banner-w3ls">
    <div class="container">

        <h2 class="wthree-tittle">We Need Your Help</h2>
        <p class="subtitle-agileinfo">Give a little. Change a lot.</p>
        <div class="banner-info">
            <div  id="top" class="callbacks_container">
                <ul class="rslides" id="slider3">
                    <li>
                        <div class="col-md-5 ban-left">
                            <img src="{{asset('main/images/v1.jpg')}}" alt=" "/>
                        </div>
                        <div class="col-md-7 ban-right">
                            <h3>BECOME VOLUNTEER</h3>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                odit aut fugit, sed quia consequuntur magni dolores eos.</p>
                            <a href="#" data-toggle="modal" data-target="#myModal" >Read More</a>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="col-md-5 ban-left">
                            <img src="{{asset('main/images/v1.jpg')}}" alt=" "/>
                        </div>
                        <div class="col-md-7 ban-right">
                            <h3>Save a Child's Life</h3>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                odit aut fugit, sed quia consequuntur magni dolores eos.</p>
                            <a href="#" data-toggle="modal" data-target="#myModal" >Read More</a>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>


        </div>
    </div>
</div>
<!-- //banner -->
<!-- bootstrap-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <section>
                <div class="modal-body">
                    <h3 class="agileinfo_sign">BEFRIEND</h3>
                    <img src="{{asset('main/images/v1.jpg')}}" alt=" " class="img-responsive" />
                    <p>Ut enim ad minima veniam, quis nostrum
                        exercitationem ullam corporis suscipit laboriosam,
                        nisi ut aliquid ex ea commodi consequatur.
                        <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit .</i></p>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- //bootstrap-pop-up -->


<!-- about -->
<div class="about" id="about">
    <div class="container">
        <div class="col-md-4 agileits_about_left">
            <div class="title-agileits1">
                <h3>About Us</h3>
            </div>

        </div>
        <div class="col-md-8 agileits_about_right">
            <p>{{$settings->about_us_big}} <i>{{$settings->about_us_small}}</i></p>
            <ul>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>{{$settings->about_us_nutshell1}}</li>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>{{$settings->about_us_nutshell2}}</li>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>{{$settings->about_us_nutshell3}}</li>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>{{$settings->about_us_nutshell4}}</li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>


<!-- //about -->
<!-- content -->
<div class="content-counter">
    <div class="container">
        <div class="title-agileits">
            <h3 class="w3l-agile">Donate Us</h3>
        </div>
        <div class="content_grids">
            <div class="col-md-3 capabil-grid text-center">
            <i class="fa fa-apple" aria-hidden="true"></i>
            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='5700' data-delay='.5' data-increment="1">5700</div>
            <p>Food</p>
        </div>
        <div class="col-md-3 capabil-grid mar-top text-center">
            <i class="fa fa-child" aria-hidden="true"></i>
            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1700' data-delay='.5' data-increment="1">1700</div>
            <p>Cloths</p>
        </div>
        <div class="col-md-3 capabil-grid mar-top wow fadeInDown animated animated text-center">
            <i class="fa fa-eye" aria-hidden="true"></i>
            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='9000' data-delay='.5' data-increment="1"> 9000</div>
            <p>Eyes</p>
        </div>
        <div class="col-md-3 capabil-grid wow fadeInUp animated animated text-center">
            <i class="fa fa-money" aria-hidden="true"></i>
            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='2500' data-delay='.5' data-increment="1"> 2500</div>
            <p>Money</p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</div>
<!-- //content -->
<!--team-->
<div class="team" id="team">
    <div class="container">
        <div class="title-agileits">
            <h3>Donators</h3>
        </div>
        <div class="agileits_w3layouts">
            <div class="col-md-3 team-grids wow fadeInUp animated" data-wow-delay=".5s">
                <h5>Thom<span>son</span></h5>
                <p>Lorem ipsum dolor sit amet consectetur adipi. </p>
                <div class="social-bnr-agileits about-agile">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="team-img">
                    <img src="images/t1.jpg" alt="">
                </div>
            </div>
            <div class="col-md-3 team-grids team-mdl wow fadeInUp animated" data-wow-delay=".5s">
                <h5>Mary <span>Doe</span></h5>
                <p>Lorem ipsum dolor sit amet consectetur adipi. </p>
                <div class="social-bnr-agileits about-agile">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="team-img">
                    <img src="images/t2.jpg" alt="">
                </div>
            </div>
            <div class="col-md-3 team-grids team-mdl1 wow fadeInUp animated" data-wow-delay=".5s">
                <h5>Victo<span>ria</span></h5>
                <p>Lorem ipsum dolor sit amet consectetur adipi. </p>
                <div class="social-bnr-agileits about-agile">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="team-img">
                    <img src="images/t3.jpg" alt="">
                </div>
            </div>
            <div class="col-md-3 team-grids wow fadeInUp animated" data-wow-delay=".5s">
                <h5>Patrick <span>Pool</span></h5>
                <p>Lorem ipsum dolor sit amet consectetur adipi. </p>
                <div class="social-bnr-agileits about-agile">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="team-img">
                    <img src="images/t4.jpg" alt="">
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--//team-->

<!-- content -->
<div class="process-agileits">
    <div class="container">
        <div class="title-agileits">
            <h3 class="w3l-agile">Save Children From Hunger</h3>
        </div>

        <div class="process_grids">
            <div class="col-md-6 process_left">
                <div class="port-2 effect-1">
                    <div class="image-box">
                        <img class="img-responsive" src="images/g6.jpg" alt="Image-1">
                    </div>
                    <div class="text-desc">
                        <h4>Befriend</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 process-one">

                <h5>Donate Now to Support</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                <a href="#" class="donate" data-toggle="modal" data-target="#myModal5">Donate Now</a>

            </div>
            <div class="clearfix"></div>
        </div>
        <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4>Donate Now</h4>
                        <div class="donate_form_w3l">

                            <form action="{{route('payment.store')}}" method="post" id="payment-form">
                                {{ csrf_field() }}


                                <div class="col-md-6 form-one">
                                    <p> Name on card </p>
                                    <input type="text" name="name" id="name" required="">

                                </div>
                                <div class="col-md-6 form-one">
                                    <p>Email </p>
                                    <input type="email" name="email" required="" id="email">

                                </div>
                                <br>
                                <div class="col-md-6 form-one">
                                    <p><label for="card-element">
                                            Credit or debit card
                                        </label></p>
                                    <div id="card-element">
                                        <!-- A Stripe Element will be inserted here. -->
                                    </div>

                                    <!-- Used to display form errors. -->
                                    <div id="card-errors" role="alert"></div>
                                    <div class="clear"> </div>
                                </div>

                                <div class="clearfix"></div>


                                <input type="submit" value="Donate">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </div>
</div>
<!-- //process -->
<!-- gallery -->
<div class="gallery" id="gallery">
    <div class="container">
        <div class="title-agileits">
            <h3>GAllERY</h3>
        </div>
        <div class="agileinfo_gallery_grids">
            @foreach($photos as $photo)

                <div class="col-md-4 w3_tabs_grid w3_tabs_grid_sub">
                    <div class="grid">
                        <a href="{{asset('postphotoimages/'.$photo->featured_image)}}" class="lsb-preview" data-lsb-group="header">
                            <figure class="effect-winston">
                                <img src="{{asset('postphotoimages/'.$photo->featured_image)}}" class="img-responsive" alt=" " />
                                <figcaption>
                                    <p>
                                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true">{{$photo->title}}</span>
                                    </p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
            @endforeach
            <div class="clearfix"> </div>
        </div>

    </div>
</div>
<!-- //gallery -->
<!-- news -->
<div class="news" id="news">
    <div class="container">
        <div class="title-agileits">
            <h3>Our News</h3>
        </div>
        <div class="agileits_w3layouts">
            <div class="w3_agile_services_grids">
                <div class="col-md-4 w3_agileits_events_grid">
                    <div class="wthree_events_grid">
                        <div class="wthree_events_grid1">
                            <img src="images/g1.jpg" alt=" " class="img-responsive" />
                            <div class="agileits_event_grid_date">
                                <p><span>03</span> November 2016</p>
                            </div>
                        </div>
                        <div class="agileinfo_events_grid1">
                            <h5><a href="#" data-toggle="modal" data-target="#myModal">ADOPT A CHILD</a></h5>
                            <p>Lorem ipsump accusamus et iusto odio dignissimos ducimus qui blanditiis
                                praesentium</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 w3_agileits_events_grid">
                    <div class="wthree_events_grid">
                        <div class="wthree_events_grid1">
                            <img src="images/g3.jpg" alt=" " class="img-responsive" />
                            <div class="agileits_event_grid_date">
                                <p><span>05</span> November 2016</p>
                            </div>
                        </div>
                        <div class="agileinfo_events_grid1">
                            <h5><a href="#" data-toggle="modal" data-target="#myModal">CHILDREN IN CARE</a></h5>
                            <p>Lorem ipsump accusamus et iusto odio dignissimos ducimus qui blanditiis
                                praesentium</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 w3_agileits_events_grid">
                    <div class="wthree_events_grid">
                        <div class="wthree_events_grid1">
                            <img src="images/g6.jpg" alt=" " class="img-responsive" />
                            <div class="agileits_event_grid_date">
                                <p><span>08</span> November 2016</p>
                            </div>
                        </div>
                        <div class="agileinfo_events_grid1">
                            <h5><a href="#" data-toggle="modal" data-target="#myModal">RECORDS & SUPPORT</a></h5>
                            <p>Lorem ipsump accusamus et iusto odio dignissimos ducimus qui blanditiis
                                praesentium</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- //news -->

<!-- feed -->
<div class="feeds-flicker-agile">
    <div class="container">
        <div class="title-agileits">
            <h3 class="w3l-agile">People Says</h3>
        </div>
        <div class="flex-slider">
            <ul id="flexiselDemo1">
                <li>
                    <div class="laptop">
                        <div class="col-md-4 team-left">
                            <img class="img-responsive" src="images/t1.jpg" alt=" " />
                        </div>
                        <div class="col-md-8 team-right">
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                adipisci velit, sed quia non numquam.</p>
                            <h5>Federica</h5>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li>
                    <div class="laptop">
                        <div class="col-md-4 team-left">
                            <img class="img-responsive" src="images/t4.jpg" alt=" " />
                        </div>
                        <div class="col-md-8 team-right">
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                adipisci velit, sed quia non numquam.</p>
                            <h5>Thompson</h5>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</div>
<!-- //feed -->
<!-- contact -->
<!-- mail -->
<div class="contact-agileits" id="contact">
    <div class="container">
        <div class="title-agileits">
            <h3>Contact Us</h3>
        </div>
        <div class="agileits_w3layouts">
            <div class="col-md-6 wthree-agile-icons">
                <div class="agileinfo_mail_social_right">
                    <div class="agileinfo_mail_social_rightl">
                        <a href="#" class="w3_contact_facebook">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <p>Facebook</p>
                        </a>
                    </div>
                    <div class="agileinfo_mail_social_rightr">
                        <a href="#" class="w3_contact_twitter">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <p>Twitter</p>
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="agileinfo_mail_social_right two">
                    <div class="agileinfo_mail_social_rightl">
                        <a href="#" class="w3_contact_gmail">
                            <i class="fa fa-google-plus"></i>
                            <p>Google+</p>
                        </a>
                    </div>
                    <div class="agileinfo_mail_social_rightr">
                        <a href="#" class="w3_contact_db">
                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                            <p>Dribbble</p>
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="agileinfo_mail_social_right">
                    <div class="agileinfo_mail_social_rightl">
                        <a href="#" class="w3_contact_rss">
                            <i class="fa fa-rss" aria-hidden="true"></i>
                            <p>RSS Feeds</p>
                        </a>
                    </div>
                    <div class="agileinfo_mail_social_rightr">
                        <a href="#" class="w3_contact_be">
                            <i class="fa fa-behance" aria-hidden="true"></i>
                            <p>Behance</p>
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-6 wthree-agile-form">
                <form action="{{ url('contactme') }}" method="post">
                    {{ csrf_field() }}
                    <span class="input input--nariko">
							<input class="input__field input__field--nariko" name="name" type="text" id="name" placeholder=" " required="" />
							<label class="input__label input__label--nariko" for="name">
								<span class="input__label-content input__label-content--nariko">Your Name</span>
							</label>
						</span>
                    <span class="input input--nariko">
							<input class="input__field input__field--nariko" name="email" type="email" id="email" placeholder=" " required="" />
							<label class="input__label input__label--nariko" for="email">
								<span class="input__label-content input__label-content--nariko">Your Email</span>
							</label>
						</span>
                    <span class="input input--nariko">
							<input class="input__field input__field--nariko" name="subject" type="text" id="subject" placeholder=" " required="" />
							<label class="input__label input__label--nariko" for="subject">
								<span class="input__label-content input__label-content--nariko">Your Subject</span>
							</label>
						</span>
                    <textarea name="message" placeholder="Your Message..." id="message" required=""></textarea>
                    <input type="submit" value="Send">
                </form>
            </div>

            <div class="clearfix"> </div>
        </div>

    </div>
</div>



        <!-- start-smoth-scrolling -->
    @endsection