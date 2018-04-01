@extends('frontend/layouts.app')

@section('title','Mind Setterz')

@section('breadcrumb')
<!--************************************
                    Inner Banner Start
            *************************************-->
<div id="tg-innerbanner" class="tg-innerbanner tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-05.jpg">
<div class="container">
<div class="row">
<div class="col-sm-12 col-xs-12">
<div class="tg-innerbannercontent">
<div class="tg-pagetitle">
<h1>Highly Capable Tutors</h1>
</div>
<ol class="tg-breadcrumb">
<li><a href="#">Home</a></li>
<li class="tg-active">Tutors</li>
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
    <!--************************************
				Main Start
		*************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <div class="container">
            <div class="row">
                <div id="tg-twocolumns" class="tg-twocolumns">
                    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 pull-right">
                        <div id="tg-content" class="tg-content">
                            <div class="tg-tutors tg-tutorsgrid">
                                <div class="tg-mapbox">
                                    <div id="tg-map" class="tg-map"></div>
                                    <div class="tg-map-controls">
                                        <span id="doc-mapplus"><i class="fa fa-plus"></i></span>
                                        <span id="doc-mapminus"><i class="fa fa-minus"></i></span>
                                        <span id="doc-lock"><i class="fa fa-lock"></i></span>
                                    </div>
                                </div>
                                <div class="tg-activefilters">
                                    <div class="tg-filtertitle">
                                        <h2>Active Filters:</h2>
                                    </div>
                                    <div class="tg-filters">
                                        <a class="tg-btnfilter" href="#">
                                            <span><i>Gender:</i> Both</span>
                                        </a>
                                        <a class="tg-btnfilter" href="#">
                                            <span><i>Language:</i> English</span>
                                        </a>
                                        <a class="tg-btnfilter" href="#">
                                            <span><i>Age:</i> 22 - 26</span>
                                        </a>
                                        <a class="tg-btnfilter" href="#">
                                            <span><i>Time:</i> 09:00 - 18:00</span>
                                        </a>
                                        <a class="tg-btnclearall" href="#">Clear All</a>
                                    </div>
                                </div>
                                @foreach($users as $tutors)
                                <div class="tg-tutor">
                                    <figure class="tg-tutordp">
                                        <a href="#"><img src="images/tutors/img-01.jpg" height="120" width="120" alt="image description"></a>
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
                                                    <span>varified</span>
                                                </em>
                                            </a>
                                        </figcaption>
                                    </figure>
                                    <div class="tg-tutorinfo">
                                        <div class="tg-jobhead">
                                            <span class="tg-priceperhour">{{$tutors->user_x->fees}} <em>Per Hour</em></span>
                                            <h3><a href="#">{{$tutors->name}}</a></h3>
                                            <div class="tg-subjects">Mathematics &amp; Statistics</div>
                                            <ul class="tg-jobsmetadata">
                                                <li><span class="tg-stars"><span></span></span></li>
                                                <li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
                                                <li><a href="#">1509 view</a></li>
                                            </ul>
                                        </div>
                                        <div class="tg-description">
                                            <p>{{$tutors->user_x->about}}</p>
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
                                <nav class="tg-pagination">
                                    <ul>
                                        <li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="tg-active"><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>...</li>
                                        <li><a href="#">10</a></li>
                                        <li class="tg-nextpage"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 pull-left">
                        <aside id="tg-sidebar" class="tg-sidebar">
                            <form action="{{route('tutor.view')}}" id="filterall" class="tg-formjobsearch">
                                <fieldset>
                                    <div class="tg-widget">
                                        <div class="tg-widgettitle">
                                            <h3>Categories</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div class="form-group">
                                                <div class="tg-joinus">
														<span class="tg-radio">
															<input type="radio" id="jobs" name="search" value="jobs" checked="">
															<label for="jobs">jobs</label>
														</span>
                                                    <span class="tg-radio">
															<input type="radio" id="stutor" name="search" value="tutor">
															<label for="stutor">tutor</label>
														</span>
                                                    <span class="tg-radio">
															<input type="radio" id="sacademy" name="search" value="academy">
															<label for="sacademy">academy</label>
														</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="tg-select">
                                                    <select>
                                                        <option>Academics</option>
                                                        <option>Academics</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="tg-select">
                                                    <select>
                                                        <option>A-Levels</option>
                                                        <option>A-Levels</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-widgettitle tg-paddingtop">
                                            <h3>Subjects</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div class="form-group">
                                                <div class="tg-filterscrollbar tg-themescrollbar tg-subjectcheckbox">
													@foreach($subjects as $tutorSub)
                                                    <span class="tg-checkbox">
															<input type="checkbox" id="subject-{{ $tutorSub->subject }}" name="subject[]" value="{{ $tutorSub->subject }}" {{(app('request')->input('subject')==$tutorSub->subject)?'checked':''}}>
															<label for="subject-{{ $tutorSub->subject }}">{{$tutorSub->subject}}</label>
														</span>
                                                        @endforeach
{{--                                                    {{(\Request::route()->getName())}}--}}

                                                </div>
                                            </div>
                                            <span class="tg-geolocationicon">
													<input type="text" name="geolocation" class="form-control" placeholder="Geo Location">
												</span>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="tg-widget">
                                        <div class="tg-widgettitle">
                                            <h3>Fee Range</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div id="tg-feerangeslider" class="tg-feerangeslider tg-themerangeslider"></div>
                                            <div class="tg-amountbox">
                                                <input type="text" id="tg-feerangeamount" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="tg-widget">
                                        <div class="tg-widgettitle">
                                            <h3>Gender</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div class="tg-genderradio">
													<span class="tg-radio">
														<input type="radio" id="male" name="gender" value="male" {{(app('request')->input('gender')=='male')?'checked':''}}>
														<label for="male"><span>male</span><i>(240)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="female" name="gender" value="female" {{(app('request')->input('gender')=='female')?'checked':''}} >
														<label for="female"><span>female</span><i>(149)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="both" name="gender" value="both" {{(app('request')->input('gender')=='both')?'checked':''}}>
														<label for="both"><span>both</span><i>(389)</i></label>
													</span>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="tg-widget">
                                        <div class="tg-widgettitle">
                                            <h3>Age Range</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div class="tg-widgetcontent">
                                                <div id="tg-agerangeslider" class="tg-agerangeslider tg-themerangeslider"></div>
                                                <div class="tg-amountbox">
                                                    <input type="text" id="tg-agerangeamount" readonly>
                                                    <input type="hidden" name="staragetPos" value="">
                                                    <input type="hidden" name="endagePos" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="tg-widget">
                                        <div class="tg-widgettitle">
                                            <h3>Language</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div class="tg-filterscrollbar tg-themescrollbar tg-languagesradio">
													<span class="tg-radio">
														<input type="radio" id="all" name="language" value="all" checked="">
														<label for="all"><span>all</span><i>(389)</i></label>
													</span>
                                                @foreach($languages as $language)
                                                    <span class="tg-radio">
														<input type="radio" id="{{ $language->name }}" name="language" value="{{ $language->name }}" {{(app('request')->input('language')==$language->name)?'checked':''}}>
														<label for="{{ $language->name }}"><span>{{ $language->name }}</span><i>(256)</i></label>
													</span>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="tg-widget">
                                        <div class="tg-widgettitle">
                                            <h3>Time Slots</h3>
                                        </div>
                                        <div class="input-group tg-timepicker">
                                            <input id="tg-timepicker1" type="text" class="form-control input-small" placeholder="From">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                        </div>
                                        <div class="input-group tg-timepicker">
                                            <input id="tg-timepicker2" type="text" class="form-control input-small" placeholder="T0">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div class="tg-timeslotradio">
													<span class="tg-radio">
														<input type="radio" id="timeslotone" name="timeslot" value="all" checked="">
														<label for="timeslotone">All</label>
													</span>
                                                @foreach($timeslots as  $timeslot)
                                                    <span class="tg-radio">
														<input type="radio" id="{{$timeslot->timeslot}}" name="timeslot" value="{{ $timeslot->id }}" />
														<label for="{{ $timeslot->timeslot }}">{{ $timeslot->timeslot }}</label>
                                                        {{--@break--}}
													</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->

@endsection