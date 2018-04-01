@extends('frontend/layouts.app')

@section('title','Mind Setterz')

@section('breadcrumb')
    <!--************************************
				Inner Banner Start
		*************************************-->
    <div id="tg-innerbanner" class="tg-innerbanner tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-09.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="tg-innerbannercontent">
                        <div class="tg-pagetitle">
                            <h1>Get In Touch</h1>
                        </div>
                        <ol class="tg-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="tg-active">contact us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
            Inner Banner End
    *************************************-->
@endsection

@section('body')
    <main id="tg-main" class="tg-main tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="tg-contactus">
                    <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                        <div class="tg-sectionhead">
                            <h2><span>Need Help Or Have Feedback?</span></h2>
                            <div class="tg-description">
                                <p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrudion ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor in reprehenderit in voluptate.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12">
                        <form class="tg-themeform tg-formcontactus">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="text" class="form-control" placeholder="Full Name *">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="mobile" class="form-control" placeholder="Mobile *">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Your Email *">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="text" class="form-control" placeholder="Subject *">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <textarea placeholder="Message *"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="tg-btn">send now</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="tg-contactmapinfo">
                        <div class="col-sm-8 col-xs-12"><div id="tg-location-map" class="tg-jobsmap"></div></div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="tg-contactinfo">
                                <h2>head office, manchester</h2>
                                <div class="tg-description">
                                    <p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris.</p>
                                </div>
                                <ul class="tg-address">
                                    <li><i class="fa fa-envelope-o"></i><a href="mailto:test@test.com">statecs@domain.com</a></li>
                                    <li><i class="fa fa-support"></i><a href="#">support@domain.com</a></li>
                                    <li><i class="fa fa-phone"></i><a href="mailto:test@test.com">+14 1234 45678</a></li>
                                    <li><i class="fa fa-fax"></i><a href="mailto:test@test.com">+14 1234 45678</a></li>
                                    <li><i class="fa fa-skype"></i><a href="statecs772">statecs772</a></li>
                                </ul>
                                <a class="tg-btn" href="#">get direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="tg-haslayout">
                        <div class="col-sm-12 col-xs-12">
                            <div class="tg-sectionhead">
                                <h2><span>Marketplace For Tutoring Jobs</span></h2>
                            </div>
                        </div>
                        <div class="tg-features">
                            <div class="col-sm-4 col-xs-12">
                                <div class="tg-feature">
                                    <span class="tg-featureicon tg-featureiconone">Become a Tutor</span>
                                    <h3><a href="#">Become a Tutor</a></h3>
                                    <div class="tg-description">
                                        <p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris.</p>
                                    </div>
                                    <a class="tg-btn" href="#">Signup now</a>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="tg-feature">
                                    <span class="tg-featureicon tg-featureicontwo">Become a Tutor</span>
                                    <h3><a href="#">Become a Tutor</a></h3>
                                    <div class="tg-description">
                                        <p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris.</p>
                                    </div>
                                    <a class="tg-btn" href="#">Search now</a>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="tg-feature">
                                    <span class="tg-featureicon tg-featureiconthree">Post a Tuition Job</span>
                                    <h3><a href="#">Post a Tuition Job</a></h3>
                                    <div class="tg-description">
                                        <p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris.</p>
                                    </div>
                                    <a class="tg-btn" href="#">Post now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection