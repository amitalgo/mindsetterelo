<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">

    <link rel="stylesheet" href="{{asset('css/frontend/css/login_css.css')}}">


</head>

<body style="background-image:url('images/hand-drawn-school-set-vintage-illustration-study-related-words-style-grid-background-all-text-36898541.jpg');">


<div class="form" >
    <a href="index.php"><button type="submit" class="button button-block"/>Home </button></a>
    <br>

    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
    </ul>

    <div class="tab-content">
        <div id="signup">
            <h1>Sign Up for Free</h1>

            <form action="/" method="post">

                <div class="top-row">
                    <div class="field-wrap">
                        <label>
                            First Name<span class="req">*</span>
                        </label>
                        <input type="text" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Last Name<span class="req">*</span>
                        </label>
                        <input type="text"required autocomplete="off"/>
                    </div>
                </div>
                <div class="top-row">
                    <div class="field-wrap">
                        <label>
                            Age<span class="req">*</span>
                        </label>
                        <input type="text" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">

                        <select>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>


                <div class="field-wrap">
                    <label>
                        <span class="req">*</span>
                    </label>
                    <input type="text" class="dob" required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Address<span class="req">*</span>
                    </label>
                    <input type="password"required autocomplete="off"/>
                </div>
                <div class="top-row">
                    <div class="field-wrap">
                        <label>
                            Locality<span class="req">*</span>
                        </label>
                        <input type="text" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            City*<span class="req">*</span>
                        </label>
                        <input type="text"required autocomplete="off"/>
                    </div>
                </div>
                <div class="top-row">
                    <div class="field-wrap">
                        <label>
                            State<span class="req">*</span>
                        </label>
                        <input type="text" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Pin Code*<span class="req">*</span>
                        </label>
                        <input type="text"required autocomplete="off"/>
                    </div>
                </div>
                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="password"required autocomplete="off"/>
                </div>
                <div class="top-row">
                    <div class="field-wrap">
                        <label>
                            Phone<span class="req">*</span>
                        </label>
                        <input type="text" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Mobile*<span class="req">*</span>
                        </label>
                        <input type="text"required autocomplete="off"/>
                    </div>
                </div>





                <div class="field-wrap">
                    <label>
                        Qualification<span class="req">*</span>
                    </label>
                    <input type="email"required autocomplete="off"/>
                </div>
                <div class="field-wrap">
                    <label>
                        Teaching Subjects<span class="req">*</span>
                    </label>
                    <input type="email"required autocomplete="off"/>
                </div>
                <div class="field-wrap">
                    <label>
                        Teaching Experience*
                        <span class="req">*</span>
                    </label>
                    <input type="email"required autocomplete="off"/>
                </div>
                <div class="field-wrap">
                    <label>
                        Classes Perferred for Teaching*
                        <span class="req">*</span>
                    </label>
                    <input type="email"required autocomplete="off"/>
                </div>
                <div class="field-wrap">
                    <label>
                        Minimum Fee Expected
                        <span class="req">*</span>
                    </label>
                    <input type="email"required autocomplete="off"/>
                </div>
                <div class="field-wrap">
                    <label>
                        Number Of Assignments
                        <span class="req">*</span>
                    </label>
                    <input type="email"required autocomplete="off"/>
                </div>




                <div class="field-wrap">
                    <label>
                        Additional Useful Information if any<span class="req">*</span>
                    </label>
                    <input type="email"required autocomplete="off"/>
                </div>






                <button type="submit" class="button button-block"/>Get Started</button>

            </form>

        </div>

        <div id="login">
            <h1>Welcome Back!</h1>

            <form action="/" method="post">

                <div class="field-wrap">
                    <label>
                        Phone Number<span class="req">*</span>
                    </label>
                    <input type="email"required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Password<span class="req">*</span>
                    </label>
                    <input type="password"required autocomplete="off"/>
                </div>

                <p class="forgot"><a href="#">Forgot Password?</a></p>

                <button class="button button-block"/>Log In</button>

            </form>

        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.js"></script>

<script  src="{{ asset('js/frontend/login.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.dob').datepicker();
    });
</script>




</body>

</html>
