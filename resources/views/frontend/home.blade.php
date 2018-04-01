@extends('frontend/layouts.app')

@section('title','Mind Setterz')

@section('body')
    <!--************************************
				Home Banner Start
		*************************************-->
    <div id="tg-homebanner" class="tg-homebanner tg-haslayout">
        <figure class="tg-bannerbg">
            <img src="images/banner/img-01.jpg" alt="image description">
        </figure>
        <div class="tg-bannercontent">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form class="tg-formsearch">
                            <fieldset>
                                <figure class="tg-bannerimg hidden-sm hidden-xs"><img src="images/banner/img-02.png" alt="image description"></figure>
                                <div class="tg-searchfields">
                                    <div class="form-group">
                                        <label>Location :</label>
                                        <span class="tg-geolocationicon">
												<input type="text" name="geolocation" class="form-control" placeholder="Your Location">
											</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Class</label>
                                        <div class="tg-select">
                                            <select>
                                                <option>Blank</option>
                                                <option>Blank</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Subjects</label>
                                        <div class="tg-select">
                                            <select>
                                                <option>Blank</option>
                                                <option>Blank</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tutors with subject expert</label>
                                        <div class="tg-select">
                                            <select>
                                                <option>Blank</option>
                                                <option>Blank</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="tg-btn">search</button>
                                    </div>
                                    <div class="tg-loginbanner">
                                        <div class="tg-box">
                                            <h2>Join Us!</h2>
                                            <div class="tg-description">
                                                <p>Are you a Tutor?</p>
                                                <p>Become a Member for FREE! <a href="#">Signup Now »</a></p>
                                            </div>
                                            <img src="images/banner/img-03.png" alt="image description">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="tg-noticeboard">
            <div class="tg-box">
                <strong>Notice Board:</strong>
                <ul id="tg-newsticker" class="tg-newsticker">
                    <li>
                        <div class="tg-description">
                            <p>Adipisicing elit sed do eiusmod tempor incididunt ut <time datetime="2011-01-12">June 27, 2017</time> dolore magna aliqua <a href="#">Read More</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="tg-description">
                            <p>Ut enim ad minim veniam, quis nostrud <time datetime="2011-01-12">June 27, 2017</time> exercitation ullamco laboris ex ea <a href="#">Read More</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="tg-description">
                            <p>Ut enim ad minim veniam, quis nostrud <time datetime="2011-01-12">June 27, 2017</time> exercitation ullamco laboris ex ea <a href="#">Read More</a></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--************************************
            Home Banner End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <!--************************************
                Features Start
        *************************************-->
        <section class="tg-main-section tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="tg-sectionhead">
                            <h2><span>Marketplace For Tutoring Jobs</span></h2>
                        </div>
                    </div>
                    <div class="tg-features">
                        <div class="col-sm-6">
                            <div class="tg-feature">
                                <span class="tg-featureicon tg-featureiconone">Become a Tutor</span>
                                <h3><a href="#">Become a Tutor</a></h3>
                                <div class="tg-description">
                                    <p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris.</p>
                                </div>
                                <a class="tg-btn" href="#">Signup now</a>
                            </div>
                        </div>

                        <div class="col-sm-6">
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
        </section>
        <!--************************************
                Features End
        *************************************-->
        <!--************************************
                Latest Jobs Start
        *************************************-->
        <section class="tg-main-section tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-01.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="tg-sectionhead">
                            <h2><span>Latest Jobs Available</span></h2>
                        </div>
                        <div class="tg-jobs">
                            <div class="tg-job">
                                <div class="tg-jobhead">
                                    <span class="tg-priceperhour">40$ <em>Per Hour</em></span>
                                    <h3><a href="#">Chartered Certified Accountant</a></h3>
                                    <ul class="tg-jobsmetadata">
                                        <li><i class="fa fa-map-marker"></i><a href="#">Manchester, United kingdom</a></li>
                                        <li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
                                        <li><a href="#">1509 view</a></li>
                                    </ul>
                                </div>
                                <div class="tg-description">
                                    <p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrud exeration ullamcoaoris nisi ut aliquip exeao consuatauit te irure dolor in reprehenderit aperiam eaque ipsa quae ab illo inventore.</p>
                                </div>
                                <div class="tg-jobfoot">
                                    <ul class="tg-tags">
                                        <li><a class="tg-tag" href="#">Accounting</a></li>
                                        <li><a class="tg-tag" href="#">Finance</a></li>
                                        <li><a class="tg-tag" href="#">Law</a></li>
                                    </ul>
                                    <ul class="tg-metadata">
                                        <li><a href="#">By: Livia Silva</a></li>
                                        <li><a href="#">June 27, 2017</a></li>
                                        <li><a href="#">Law</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tg-job">
                                <div class="tg-jobhead">
                                    <span class="tg-priceperhour">40$ <em>Per Hour</em></span>
                                    <h3><a href="#">Chartered Certified Accountant</a></h3>
                                    <ul class="tg-jobsmetadata">
                                        <li><i class="fa fa-map-marker"></i><a href="#">Manchester, United kingdom</a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#">1509 view</a></li>
                                    </ul>
                                </div>
                                <div class="tg-description">
                                    <p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrud exeration ullamcoaoris nisi ut aliquip exeao consuatauit te irure dolor in reprehenderit aperiam eaque ipsa quae ab illo inventore.</p>
                                </div>
                                <div class="tg-jobfoot">
                                    <ul class="tg-tags">
                                        <li><a class="tg-tag" href="#">Accounting</a></li>
                                        <li><a class="tg-tag" href="#">Finance</a></li>
                                        <li><a class="tg-tag" href="#">Law</a></li>
                                    </ul>
                                    <ul class="tg-metadata">
                                        <li><a href="#">By: Livia Silva</a></li>
                                        <li><a href="#">June 27, 2017</a></li>
                                        <li><a href="#">Law</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tg-job">
                                <div class="tg-jobhead">
                                    <span class="tg-priceperhour">40$ <em>Per Hour</em></span>
                                    <h3><a href="#">Chartered Certified Accountant</a></h3>
                                    <ul class="tg-jobsmetadata">
                                        <li><i class="fa fa-map-marker"></i><a href="#">Manchester, United kingdom</a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#">1509 view</a></li>
                                    </ul>
                                </div>
                                <div class="tg-description">
                                    <p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrud exeration ullamcoaoris nisi ut aliquip exeao consuatauit te irure dolor in reprehenderit aperiam eaque ipsa quae ab illo inventore.</p>
                                </div>
                                <div class="tg-jobfoot">
                                    <ul class="tg-tags">
                                        <li><a class="tg-tag" href="#">Accounting</a></li>
                                        <li><a class="tg-tag" href="#">Finance</a></li>
                                        <li><a class="tg-tag" href="#">Law</a></li>
                                    </ul>
                                    <ul class="tg-metadata">
                                        <li><a href="#">By: Livia Silva</a></li>
                                        <li><a href="#">June 27, 2017</a></li>
                                        <li><a href="#">Law</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tg-btns">
                            <a class="tg-btn" href="#">view all</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Latest Jobs End
        *************************************-->
        <!--************************************
                Featured Tutor Start
        *************************************-->
        <section class="tg-main-section tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                        <div class="tg-sectionhead">
                            <h2><span>Featured Tutors</span></h2>
                            <div class="tg-description">
                                <p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrudion ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor in reprehenderit in voluptate.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                        <div class="tg-featuredtutors">
                        @foreach($users as $tutors)

                            <div class="tg-tutor">
                                <figure class="tg-tutordp">
                                    <a href="#"><img src="images/tutors/img-02.jpg" height="120" width="120" alt="image description"></a>
                                    <figcaption>
                                        <a class="tg-usericon tg-iconfeatured" href="#">
                                            <em class="tg-usericonholder">
                                                <i class="fa fa-bolt"></i>
                                                <span>featured</span>
                                            </em>
                                        </a>
                                        <a class="tg-usericon tg-iconvarified" href="#">
                                            <em class="tg-usericonholder">
                                                <i class="fa fa-shield"></i>
                                                <span>verified</span>
                                            </em>
                                        </a>
                                    </figcaption>
                                </figure>
                                <div class="tg-tutorinfo">
                                    <div class="tg-jobhead">
                                        <span class="tg-priceperhour">{{ $tutors->user_x->fees }} <em>Per Hour</em></span>
                                        <h3><a href="#">{{$tutors->name}}</a></h3>
                                        <div class="tg-subjects">Mathematics &amp; Statistics</div>
                                        <ul class="tg-jobsmetadata">
                                            <li><span class="tg-stars"><span></span></span></li>
                                            <li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
                                            <li><a href="#">1509 view</a></li>
                                        </ul>
                                    </div>
                                    <div class="tg-description">
                                        <p>{{ $tutors->user_x->about }}</p>
                                    </div>
                                    <div class="tg-jobfoot">
                                        <ul class="tg-tags">
                                        @foreach($tutors->subDetails as $subject)
                                            <li><a class="tg-tag" href="#">{{$subject->subject}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{--<div class="tg-tutor">--}}
                                {{--<figure class="tg-tutordp">--}}
                                    {{--<a href="#"><img src="images/tutors/img-02.jpg" height="120" width="120" alt="image description"></a>--}}
                                    {{--<figcaption>--}}
                                        {{--<a class="tg-usericon tg-iconfeatured" href="#">--}}
                                            {{--<em class="tg-usericonholder">--}}
                                                {{--<i class="fa fa-bolt"></i>--}}
                                                {{--<span>featured</span>--}}
                                            {{--</em>--}}
                                        {{--</a>--}}
                                        {{--<a class="tg-usericon tg-iconvarified" href="#">--}}
                                            {{--<em class="tg-usericonholder">--}}
                                                {{--<i class="fa fa-shield"></i>--}}
                                                {{--<span>varified</span>--}}
                                            {{--</em>--}}
                                        {{--</a>--}}
                                    {{--</figcaption>--}}
                                {{--</figure>--}}
                                {{--<div class="tg-tutorinfo">--}}
                                    {{--<div class="tg-jobhead">--}}
                                        {{--<span class="tg-priceperhour">24$ <em>Per Hour</em></span>--}}
                                        {{--<h3><a href="#">Ahmad Carstensen</a></h3>--}}
                                        {{--<div class="tg-subjects">Mathematics &amp; Statistics</div>--}}
                                        {{--<ul class="tg-jobsmetadata">--}}
                                            {{--<li><span class="tg-stars"><span></span></span></li>--}}
                                            {{--<li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>--}}
                                            {{--<li><a href="#">1509 view</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<div class="tg-description">--}}
                                        {{--<p>Consectetur adipisicing elit eiusmod tempor incididunt ut laborei dolore magna aliqua minim.</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="tg-jobfoot">--}}
                                        {{--<ul class="tg-tags">--}}
                                            {{--<li><a class="tg-tag" href="#">Accounting</a></li>--}}
                                            {{--<li><a class="tg-tag" href="#">Finance</a></li>--}}
                                            {{--<li><a class="tg-tag" href="#">Law</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="tg-tutor">--}}
                                {{--<figure class="tg-tutordp">--}}
                                    {{--<a href="#"><img src="images/tutors/img-03.jpg" height="120" width="120" alt="image description"></a>--}}
                                    {{--<figcaption>--}}
                                        {{--<a class="tg-usericon tg-iconfeatured" href="#">--}}
                                            {{--<em class="tg-usericonholder">--}}
                                                {{--<i class="fa fa-bolt"></i>--}}
                                                {{--<span>featured</span>--}}
                                            {{--</em>--}}
                                        {{--</a>--}}
                                        {{--<a class="tg-usericon tg-iconvarified" href="#">--}}
                                            {{--<em class="tg-usericonholder">--}}
                                                {{--<i class="fa fa-shield"></i>--}}
                                                {{--<span>varified</span>--}}
                                            {{--</em>--}}
                                        {{--</a>--}}
                                    {{--</figcaption>--}}
                                {{--</figure>--}}
                                {{--<div class="tg-tutorinfo">--}}
                                    {{--<div class="tg-jobhead">--}}
                                        {{--<span class="tg-priceperhour">29$ <em>Per Hour</em></span>--}}
                                        {{--<h3><a href="#">Lawrence Troutman</a></h3>--}}
                                        {{--<div class="tg-subjects">Mathematics &amp; Statistics</div>--}}
                                        {{--<ul class="tg-jobsmetadata">--}}
                                            {{--<li><span class="tg-stars"><span></span></span></li>--}}
                                            {{--<li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>--}}
                                            {{--<li><a href="#">1509 view</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<div class="tg-description">--}}
                                        {{--<p>Consectetur adipisicing elit eiusmod tempor incididunt ut laborei dolore magna aliqua minim.</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="tg-jobfoot">--}}
                                        {{--<ul class="tg-tags">--}}
                                            {{--<li><a class="tg-tag" href="#">Accounting</a></li>--}}
                                            {{--<li><a class="tg-tag" href="#">Finance</a></li>--}}
                                            {{--<li><a class="tg-tag" href="#">Law</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="tg-tutor">--}}
                                {{--<figure class="tg-tutordp">--}}
                                    {{--<a href="#"><img src="images/tutors/img-04.jpg" height="120" width="120" alt="image description"></a>--}}
                                    {{--<figcaption>--}}
                                        {{--<a class="tg-usericon tg-iconfeatured" href="#">--}}
                                            {{--<em class="tg-usericonholder">--}}
                                                {{--<i class="fa fa-bolt"></i>--}}
                                                {{--<span>featured</span>--}}
                                            {{--</em>--}}
                                        {{--</a>--}}
                                        {{--<a class="tg-usericon tg-iconvarified" href="#">--}}
                                            {{--<em class="tg-usericonholder">--}}
                                                {{--<i class="fa fa-shield"></i>--}}
                                                {{--<span>varified</span>--}}
                                            {{--</em>--}}
                                        {{--</a>--}}
                                    {{--</figcaption>--}}
                                {{--</figure>--}}
                                {{--<div class="tg-tutorinfo">--}}
                                    {{--<div class="tg-jobhead">--}}
                                        {{--<span class="tg-priceperhour">24$ <em>Per Hour</em></span>--}}
                                        {{--<h3><a href="#">Ahmad Carstensen</a></h3>--}}
                                        {{--<div class="tg-subjects">Mathematics &amp; Statistics</div>--}}
                                        {{--<ul class="tg-jobsmetadata">--}}
                                            {{--<li><span class="tg-stars"><span></span></span></li>--}}
                                            {{--<li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>--}}
                                            {{--<li><a href="#">1509 view</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<div class="tg-description">--}}
                                        {{--<p>Consectetur adipisicing elit eiusmod tempor incididunt ut laborei dolore magna aliqua minim.</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="tg-jobfoot">--}}
                                        {{--<ul class="tg-tags">--}}
                                            {{--<li><a class="tg-tag" href="#">Accounting</a></li>--}}
                                            {{--<li><a class="tg-tag" href="#">Finance</a></li>--}}
                                            {{--<li><a class="tg-tag" href="#">Law</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="tg-tutor">--}}
                                {{--<figure class="tg-tutordp">--}}
                                    {{--<a href="#"><img src="images/tutors/img-05.jpg" height="120" width="120" alt="image description"></a>--}}
                                    {{--<figcaption>--}}
                                        {{--<a class="tg-usericon tg-iconfeatured" href="#">--}}
                                            {{--<em class="tg-usericonholder">--}}
                                                {{--<i class="fa fa-bolt"></i>--}}
                                                {{--<span>featured</span>--}}
                                            {{--</em>--}}
                                        {{--</a>--}}
                                        {{--<a class="tg-usericon tg-iconvarified" href="#">--}}
                                            {{--<em class="tg-usericonholder">--}}
                                                {{--<i class="fa fa-shield"></i>--}}
                                                {{--<span>varified</span>--}}
                                            {{--</em>--}}
                                        {{--</a>--}}
                                    {{--</figcaption>--}}
                                {{--</figure>--}}
                                {{--<div class="tg-tutorinfo">--}}
                                    {{--<div class="tg-jobhead">--}}
                                        {{--<span class="tg-priceperhour">29$ <em>Per Hour</em></span>--}}
                                        {{--<h3><a href="#">Lawrence Troutman</a></h3>--}}
                                        {{--<div class="tg-subjects">Mathematics &amp; Statistics</div>--}}
                                        {{--<ul class="tg-jobsmetadata">--}}
                                            {{--<li><span class="tg-stars"><span></span></span></li>--}}
                                            {{--<li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>--}}
                                            {{--<li><a href="#">1509 view</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<div class="tg-description">--}}
                                        {{--<p>Consectetur adipisicing elit eiusmod tempor incididunt ut laborei dolore magna aliqua minim.</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="tg-jobfoot">--}}
                                        {{--<ul class="tg-tags">--}}
                                            {{--<li><a class="tg-tag" href="#">Accounting</a></li>--}}
                                            {{--<li><a class="tg-tag" href="#">Finance</a></li>--}}
                                            {{--<li><a class="tg-tag" href="#">Law</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="tg-tutor">--}}
                                {{--<figure class="tg-tutordp">--}}
                                    {{--<a href="#"><img src="images/tutors/img-06.jpg" height="120" width="120" alt="image description"></a>--}}
                                    {{--<figcaption>--}}
                                        {{--<a class="tg-usericon tg-iconfeatured" href="#">--}}
                                            {{--<em class="tg-usericonholder">--}}
                                                {{--<i class="fa fa-bolt"></i>--}}
                                                {{--<span>featured</span>--}}
                                            {{--</em>--}}
                                        {{--</a>--}}
                                        {{--<a class="tg-usericon tg-iconvarified" href="#">--}}
                                            {{--<em class="tg-usericonholder">--}}
                                                {{--<i class="fa fa-shield"></i>--}}
                                                {{--<span>varified</span>--}}
                                            {{--</em>--}}
                                        {{--</a>--}}
                                    {{--</figcaption>--}}
                                {{--</figure>--}}
                                {{--<div class="tg-tutorinfo">--}}
                                    {{--<div class="tg-jobhead">--}}
                                        {{--<span class="tg-priceperhour">24$ <em>Per Hour</em></span>--}}
                                        {{--<h3><a href="#">Ahmad Carstensen</a></h3>--}}
                                        {{--<div class="tg-subjects">Mathematics &amp; Statistics</div>--}}
                                        {{--<ul class="tg-jobsmetadata">--}}
                                            {{--<li><span class="tg-stars"><span></span></span></li>--}}
                                            {{--<li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>--}}
                                            {{--<li><a href="#">1509 view</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<div class="tg-description">--}}
                                        {{--<p>Consectetur adipisicing elit eiusmod tempor incididunt ut laborei dolore magna aliqua minim.</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="tg-jobfoot">--}}
                                        {{--<ul class="tg-tags">--}}
                                            {{--<li><a class="tg-tag" href="#">Accounting</a></li>--}}
                                            {{--<li><a class="tg-tag" href="#">Finance</a></li>--}}
                                            {{--<li><a class="tg-tag" href="#">Law</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="tg-btns">
                            <a class="tg-btn" href="#">view all</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Featured Tutor End
        *************************************-->
        <!--************************************
                Statistics Start
        *************************************-->
        <section class="tg-main-section tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-02.jpg">
            <div class="container">
                <div class="row">
                    <div class="tg-statisticscounters">
                        <div class="tg-counter">
                            <h2><span data-from="0" data-to="2700" data-speed="8000" data-refresh-interval="50">2700</span><em>+</em></h2>
                            <h3>Active Tutors</h3>
                        </div>
                        <div class="tg-counter">
                            <h2><span data-from="0" data-to="2673" data-speed="8000" data-refresh-interval="50">2673</span></h2>
                            <h3>Active Tuition Centres</h3>
                        </div>
                        <div class="tg-counter">
                            <h2><span data-from="0" data-to="2450" data-speed="8000" data-refresh-interval="50">2450</span></h2>
                            <h3>Active Jobs</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Statistics End
        *************************************-->
        <!--************************************
                Tuition Center Start
        *************************************-->

        <!--************************************
                Tuition Center End
        *************************************-->
        <!--************************************
                Student Review Start
        *************************************-->
        <section class="tg-main-section tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-03.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                        <div class="tg-sectionhead">
                            <h2><span>Students Reviews</span></h2>
                        </div>
                        <div id="tg-studentreviewsslider" class="tg-studentreviewsslider tg-studentreviews">
                            <div class="item">
                                <div class="tg-reviewcontent">
                                    <blockquote>
                                        <q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
                                    </blockquote>
                                    <h3>Jenna Strope</h3>
                                    <ul class="tg-metadata">
                                        <li><a href="#">Mathematics &amp; Statistics </a></li>
                                        <li><span class="tg-tooltip tg-stars" data-toggle="tooltip" data-placement="top right" title="4.85 average based on 423 ratings"><span></span></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="tg-reviewcontent">
                                    <blockquote>
                                        <q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
                                    </blockquote>
                                    <h3>Lawrence Troutman</h3>
                                    <ul class="tg-metadata">
                                        <li><a href="#">Mathematics &amp; Statistics </a></li>
                                        <li><span class="tg-tooltip tg-stars" data-toggle="tooltip" data-placement="top right" title="4.85 average based on 423 ratings"><span></span></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="tg-reviewcontent">
                                    <blockquote>
                                        <q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
                                    </blockquote>
                                    <h3>Ahmad Carstensen</h3>
                                    <ul class="tg-metadata">
                                        <li><a href="#">Mathematics &amp; Statistics </a></li>
                                        <li><span class="tg-tooltip tg-stars" data-toggle="tooltip" data-placement="top right" title="4.85 average based on 423 ratings"><span></span></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="tg-reviewcontent">
                                    <blockquote>
                                        <q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
                                    </blockquote>
                                    <h3>Jenna Strope</h3>
                                    <ul class="tg-metadata">
                                        <li><a href="#">Mathematics &amp; Statistics </a></li>
                                        <li><span class="tg-tooltip tg-stars" data-toggle="tooltip" data-placement="top right" title="4.85 average based on 423 ratings"><span></span></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="tg-reviewcontent">
                                    <blockquote>
                                        <q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
                                    </blockquote>
                                    <h3>Dolores Mcreynolds</h3>
                                    <ul class="tg-metadata">
                                        <li><a href="#">Mathematics &amp; Statistics </a></li>
                                        <li><span class="tg-tooltip tg-stars" data-toggle="tooltip" data-placement="top right" title="4.85 average based on 423 ratings"><span></span></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="tg-reviewcontent">
                                    <blockquote>
                                        <q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
                                    </blockquote>
                                    <h3>Dustin Mckillop</h3>
                                    <ul class="tg-metadata">
                                        <li><a href="#">Mathematics &amp; Statistics </a></li>
                                        <li><span class="tg-tooltip tg-stars" data-toggle="tooltip" data-placement="top right" title="4.85 average based on 423 ratings"><span></span></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="tg-reviewerdpslider" class="tg-reviewerdpslider tg-reviewerdp">
                            <div class="item">
                                <figure><img src="images/thumbnails/img-01.jpg" alt="image description"></figure>
                            </div>
                            <div class="item">
                                <figure><img src="images/thumbnails/img-02.jpg" alt="image description"></figure>
                            </div>
                            <div class="item">
                                <figure><img src="images/thumbnails/img-03.jpg" alt="image description"></figure>
                            </div>
                            <div class="item">
                                <figure><img src="images/thumbnails/img-04.jpg" alt="image description"></figure>
                            </div>
                            <div class="item">
                                <figure><img src="images/thumbnails/img-05.jpg" alt="image description"></figure>
                            </div>
                            <div class="item">
                                <figure><img src="images/thumbnails/img-06.jpg" alt="image description"></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Student Review End
        *************************************-->
        <!--************************************
                News & Trusted Start
        *************************************-->
        <section class="tg-main-section tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="tg-newstrusted">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="tg-sectionhead tg-leftalign">
                                <h2><span>Latest News</span></h2>
                            </div>
                            <div class="tg-latestnews">
                                <article class="tg-post">
                                    <figure class="tg-postimg"><a href="#"><img src="images/post/img-01.jpg" alt="image description"></a></figure>
                                    <div class="tg-postcontent">
                                        <div class="tg-posttitle">
                                            <h3><a href="#">Bright Future After Right Decision</a></h3>
                                        </div>
                                        <ul class="tg-metadata">
                                            <li>
                                                <em>Posted By: </em>
                                                <a href="#">Pricilla Nader</a>
                                            </li>
                                            <li>
                                                <time datetime="2011-01-12">
                                                    <em>Dated: </em>
                                                    <a href="#">June 27, 2017</a>
                                                </time>
                                            </li>
                                        </ul>
                                        <div class="tg-description">
                                            <p>Consectetur adipisicing elit eiusmod ipor incididunt utrei dolorena aliqua minim veniam.</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="tg-sectionhead tg-leftalign">
                                <h2><span>Latest News</span></h2>
                            </div>
                            <div class="tg-latestnews">
                                <article class="tg-post">
                                    <figure class="tg-postimg"><a href="#"><img src="images/post/img-01.jpg" alt="image description"></a></figure>
                                    <div class="tg-postcontent">
                                        <div class="tg-posttitle">
                                            <h3><a href="#">Bright Future After Right Decision</a></h3>
                                        </div>
                                        <ul class="tg-metadata">
                                            <li>
                                                <em>Posted By: </em>
                                                <a href="#">Pricilla Nader</a>
                                            </li>
                                            <li>
                                                <time datetime="2011-01-12">
                                                    <em>Dated: </em>
                                                    <a href="#">June 27, 2017</a>
                                                </time>
                                            </li>
                                        </ul>
                                        <div class="tg-description">
                                            <p>Consectetur adipisicing elit eiusmod ipor incididunt utrei dolorena aliqua minim veniam.</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                News & Trusted End
        *************************************-->
    </main>

@endsection