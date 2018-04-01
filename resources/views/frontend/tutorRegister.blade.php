<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <title>Tutors Registration</title>

    {{--DatePicker Includues--}}
    <link href="{{asset('plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/clockpicker/css/bootstrap-clockpicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    {{--Select Include--}}
    <link href="{{ asset('plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/switchery/css/switchery.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/multiselect/css/multi-select.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />

    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />

    <script src="{{asset('js/modernizr.min.js')}}"></script>


</head>


<body>

<div id="app">

    <div class="container" style="margin-top:100px">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Tutors Registration</div>

                    <div class="panel-body">
                        @if (Session::has('message'))
                            <li>{!! session('message') !!}</li>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ route('tutor.submit') }}">
                            {{ csrf_field() }}

                            <div class="col-md-12">
                                <div class="col-md-6 form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                                    <label for="">First Name</label>
                                    <input id="fname" type="text" class="form-control" placeholder="First Name" name="fname" value="{{ old('fname') }}" required autofocus>
                                    @if ($errors->has('fname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fname') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="col-md-6 form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                                    <label for="">Last Name</label>
                                    <input id="lname" type="text" class="form-control" placeholder="Last Name" name="lname" value="{{ old('lname') }}" required autofocus>
                                    @if ($errors->has('lname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-6 form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                    <label for="">Gender</label>
                                    <select class="selectpicker" name="gender" data-style="btn-white">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    @if ($errors->has('gender'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="col-md-6 form-group{{ $errors->has('db') ? ' has-error' : '' }}">
                                    <label for="">Date of birth</label>
                                    <input type="text" class="form-control" placeholder="DOB" id="datepicker-autoclose" name="db" value="{{old('db')}}" >
                                    @if ($errors->has('db'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('db') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12">

                                <div class="col-md-6 form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                                    <label for="">Country</label>
                                    <select class="selectpicker" name="country" data-style="btn-white" id="country">
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $key => $country)
                                            {{--@if(old('country')==$country->id){{'selected'}} @endif--}}
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('country'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('country') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-6 form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                                    <label for="">State</label>
                                    <select class="selectpicker" name="state" data-style="btn-white" id="state">
                                        <option value="">Select  State</option>
                                    </select>
                                    @if ($errors->has('state'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('state') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12">

                                <div class="col-md-6 form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                    <label for="">City</label>
                                    <select class="selectpicker" name="city" data-style="btn-white" id="city">
                                        <option value=""> Select City</option>
                                    </select>
                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6 form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                    <label for="">Address</label>
                                    <input id="address" type="text" class="form-control" placeholder="Address" name="address"  value="{{ old('address') }}" required autofocus>
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>

                            <div class="col-md-12">
                                <div class="col-md-6 form-group{{ $errors->has('pincode') ? ' has-error' : '' }}">
                                    <label for="">Pincode</label>
                                    <input id="pincode" type="number" class="form-control" placeholder="Pin Code" name="pincode" value="{{ old('pincode') }}" required autofocus>
                                    @if ($errors->has('pincode'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('pincode') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="col-md-6 form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                                    <label for="">Age</label>
                                    <input id="age" type="number" class="form-control" placeholder="Age" name="age" value="{{ old('age') }}" required autofocus>
                                    @if ($errors->has('age'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('age') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-6 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="">Email Id</label>
                                    <input id="email" type="text" class="form-control" placeholder="Email Id" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="col-md-6 form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                    <label for="">Mobile No.</label>
                                    <input id="mobile" type="number" class="form-control" placeholder="Mobile No" name="mobile" value="{{ old('mobile') }}" required autofocus>
                                    @if ($errors->has('mobile'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('mobile') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-6 form-group{{ $errors->has('qualification') ? ' has-error' : '' }}">
                                    <label for="">Qualification</label>
                                    <input id="qualification" type="text" class="form-control" placeholder="Qualification" name="qualification" value="{{ old('qualification') }}" required autofocus>
                                    @if ($errors->has('qualification'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('qualification') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="col-md-6 form-group{{ $errors->has('experience') ? ' has-error' : '' }}">
                                    <label for="">Experience</label>
                                    <input id="experience" type="number" class="form-control" placeholder="Experience" name="experience" value="{{ old('experience') }}" required autofocus>
                                    @if ($errors->has('experience'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('experience') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-6 form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                                    <label for="">Subject</label>
                                    <input type="text" class="form-control" value="{{old('subject')}}" name="subject" placeholder="Please Enter Subject Name" id="sub" data-role="tagsinput" />
                                </div>

                                <div class="col-md-6 form-group{{ $errors->has('fee') ? ' has-error' : '' }}">
                                    <label for="">Fees</label>
                                    <input id="fee" type="number" class="form-control" placeholder="Fee in  Rs." name="fee" value="{{ old('fee') }}" required autofocus>
                                    @if ($errors->has('fee'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fee') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="col-md-6 form-group{{ $errors->has('work') ? ' has-error' : '' }}">
                                    <label for="">Working Hours</label>
                                    <select class="selectpicker" name="work" data-style="btn-white">
                                        <option value="">Select working hours</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                    @if ($errors->has('work'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('work') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6 form-group{{ $errors->has('language') ? ' has-error' : '' }}">
                                    <label for="">Language</label>
                                    <select class="selectpicker" name="language" data-style="btn-white">
                                        <option value="">Select language</option>
                                        <option value="hindi">Hindi</option>
                                        <option value="english">English</option>
                                    </select>
                                    @if ($errors->has('language'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('language') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="col-md-6 form-group{{ $errors->has('skill') ? ' has-error' : '' }}">
                                    <label for="">Skills</label>
                                    <input type="text" class="form-control" name="skill" value="{{old('skill')}}" placeholder="Please Enter skill" id="skill" data-role="tagsinput" />
                                    @if ($errors->has('skill'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('skill') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6 form-group{{ $errors->has('honour') ? ' has-error' : '' }}">
                                    <label for="">Honour</label>
                                    <input type="text" class="form-control" name="honour" value="{{old('honour')}}" placeholder="Please Enter honour" id="honour" data-role="tagsinput" />
                                    @if ($errors->has('honour'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('honour') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="col-md-12 form-group{{ $errors->has('about') ? ' has-error' : '' }}">
                                    <label for="">About</label>
                                    <textarea class="form-control" rows="5" placeholder="About Me" name="about" value="{{old('about')}}"></textarea>
                                    @if ($errors->has('about'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('about') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-6 form-group{{ $errors->has('pass') ? ' has-error' : '' }}">
                                    <label for="">Password</label>
                                    <input type="password" name="pass" class="form-control" placeholder="Enter password">
                                    @if ($errors->has('pass'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('pass') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6 form-group{{ $errors->has('cpass') ? ' has-error' : '' }}">
                                    <label for="">Confirm Password</label>
                                    <input type="password" name="cpass" class="form-control" placeholder="Confirm password">
                                    @if ($errors->has('cpass'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cpass') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    var resizefunc = [];
</script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script><!-- Popper for Bootstrap -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/detect.js')}}"></script>
<script src="{{asset('js/fastclick.js')}}"></script>
<script src="{{asset('js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('js/jquery.blockUI.js')}}"></script>
<script src="{{asset('js/waves.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>

{{--Select JS--}}
<script src="{{ asset('plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('plugins/switchery/js/switchery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/multiselect/js/jquery.multi-select.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery-quicksearch/jquery.quicksearch.js') }}"></script>
<script src="{{ asset('plugins/select2/js/select2.min.js')  }}" type="text/javascript"></script>
<script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>

{{--DatePicker JS--}}
<script src="{{ asset('plugins/moment/moment.js') }}"></script>
<script src="{{ asset('plugins/timepicker/bootstrap-timepicker.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('plugins/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('js/frontend/js/typeahead.js') }}"></script>
<script src="{{asset('js/jquery.core.js')}}"></script>
<script src="{{asset('js/jquery.app.js')}}"></script>
<script src="{{asset('pages/jquery.form-pickers.init.js') }}"></script>
<script type="text/javascript">
    $('#country').on('change',function(e){
        var countryID = $(this).val();
        $.get('api/get-state-list?country_id=' + countryID, function(res){
            $('#state').empty();
            $('#state').append('<option>Select State</option>');
            $.each(res,function(index,subcatObj){
                $('#state').append('<option value="'+subcatObj.id+'">'+subcatObj.name+'</option>');
            });//

            $('#state').selectpicker('refresh');
        });

    });

    $(document).ready(function(){
        $.get('api/get-sub-list', function(res){
            //console.log(res);
        });


        $('#state').on('change',function(e){
            var stateID = $(this).val();
            $.get('api/get-city-list?state_id=' + stateID, function(res){
                $('#city').empty();
                $.each(res,function(index,subcatObj){
                    $('#city').append('<option value="'+subcatObj.id+'">'+subcatObj.name+'</option>');
                });//

                $('#city').selectpicker('refresh');
            });
        });
    });
</script>
<script>
    var citynames = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        prefetch: {
            url: 'api/get-sub-list',
            filter: function(list) {
                return $.map(list, function(cityname) {
                    return { name: cityname }; });
            }
        }
    });

    console.log(citynames);

    citynames.initialize();

    $('#sub').tagsinput({
        typeaheadjs: {
            name: 'citynames',
            displayKey: 'name',
            valueKey: 'name',
            source: citynames.ttAdapter()
        }
    });
    </script>
</body>

<!-- Mirrored from coderthemes.com/ubold/light/form-pickers.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Nov 2017 15:23:27 GMT -->
</html>