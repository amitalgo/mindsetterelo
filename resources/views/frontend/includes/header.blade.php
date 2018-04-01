<!--************************************
				Header Start
		*************************************-->
<header id="tg-header" class="tg-header tg-haslayout">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <strong class="tg-logo">
                    <a href="index.html"><img src="images/logo.png" alt="image description"></a>
                </strong>
                <div class="tg-navigationarea">
                    <nav id="tg-nav" class="tg-nav">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="tg-navigation" class="tg-navigation collapse navbar-collapse">
                            <ul>
                                <li class="tg-active"><a href="index.php">Home</a></li>

                                <li><a href="/tutors">tutor</a></li>
                                <li><a href="#">ODS</a></li>
                                <li><a href="/newsgrid">news</a></li>
                                <li><a href="/contactus">Contact</a></li>
                                <li class="tg-active"><div class="dropdown tg-dropdown">
                                        <button id="tg-signin" class="tg-signin tg-btndropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SIGN IN</button>
                                        <div class="dropdown-menu tg-dropdownbox" aria-labelledby="tg-signin">

                                            <form id="tg-formsignin" class="tg-form tg-formsignin">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" name="password" class="form-control" placeholder="password">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="tg-btn">signin</button>
                                                        <a class="tg-forgotpassword" href="#">Forgot password?</a>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div></li>
                                <li class="tg-active"><a href="{{ Route('frontend.tutorRegister') }}">SIGN UP</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>