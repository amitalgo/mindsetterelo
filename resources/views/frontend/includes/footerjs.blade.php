<footer id="tg-footer" class="tg-footer tg-haslayout">
    <div class="tg-infobox">
        <div class="container">
            <div class="row">
                <div class="tg-fcols">
                    <div class="tg-fcol">
                        <strong class="tg-logo"><a href="#"><img src="images/logo.png" alt="image description"></a></strong>
                        <div class="tg-description">
                            <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquat enim ad minim veniam nostrud exercitation ullamco laboris nisi ut aliquip exeaodo consequat aute irure dolor.</p>
                        </div>
                        <ul class="tg-socialicons">
                            <li class="tg-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="tg-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="tg-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="tg-googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="tg-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                    <div class="tg-fcol">
                        <div class="tg-icon">
                            <i class="fa fa-bullhorn"></i>
                        </div>
                        <div class="tg-title">
                            <h3>Talk To Us</h3>
                        </div>
                        <ul class="tg-email">
                            <li><a href="query@domain.com">query@domain.com</a></li>
                            <li><a href="support@domain.com">support@domain.com</a></li>
                        </ul>
                    </div>
                    <div class="tg-fcol">
                        <div class="tg-icon">
                            <i class="fa fa-paper-plane-o"></i>
                        </div>
                        <div class="tg-title">
                            <h3>Stay Updated</h3>
                        </div>
                        <form class="tg-newsletter" action="index_submit" method="post" enctype="text/plain">
                            <fieldset>
                                <input type="email" class="form-control" name="email" placeholder="Your Email">
                                <button type="submit"><i class="fa fa-check"></i></button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tg-footerbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <nav id="tg-footernav" class="tg-footernav">
                        <ul>
                            <li class="tg-active"><a href="">Home</a></li>
                            <li><a href="">jobs</a></li>
                            <li><a href="">tutors</a></li>
                            <li><a href="">How it works?</a></li>
                            <li><a href="">Contact</a></li>

                        </ul>
                    </nav>
                    <span class="tg-copyright">2018 All Rights Reserved &copy; <a href="BetaBugs.Tech">BetaBugs.Tech</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('js/frontend/js/vendor/jquery-library.js') }}"></script>
<script src="{{ asset('js/frontend/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/frontend/js/bootstrap-add-clear.min.js') }}"></script>
<script src="{{ asset('js/frontend/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('js/frontend/js/mapclustering/data.json') }}"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>
<script src="{{ asset('js/frontend/js/mapclustering/markerclusterer.min.js') }}"></script>
<script src="{{ asset('js/frontend/js/mapclustering/infobox.js') }}"></script>
<script src="{{ asset('js/frontend/js/mapclustering/map.js') }}"></script>
<script src="{{ asset('js/frontend/js/customScrollbar.min.js') }}"></script>
<script src="{{ asset('js/frontend/js/jquery.countdown.js') }}"></script>
<script src="{{ asset('js/frontend/js/simplyscroll.min.js') }}"></script>
<script src="{{ asset('js/frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/frontend/js/chosen.jquery.js') }}"></script>
<script src="{{ asset('js/frontend/js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/frontend/js/parallax.js') }}"></script>
<script src="{{ asset('js/frontend/js/countTo.js') }}"></script>
<script src="{{ asset('js/frontend/js/loader.js') }}"></script>
<script src="{{ asset('js/frontend/js/appear.js') }}"></script>
<script src="{{ asset('js/frontend/js/gmap3.js') }}"></script>
<script src="{{ asset('js/frontend/js/main.js') }}"></script>



<script>
    $(document).ready(function() {
        $('input[type=checkbox],input[name=gender],input[name=language]').on('change',function(){
            $('#filterall').submit();
        });
        $('#tg-agerangeslider').on("slidestop", function (event, ui) {
            endPos=ui.values[1];
            startPos=ui.values[0];
            if(endPos != startPos)
            {
                $('input[name=staragetPos]').val(startPos);
                $('input[name=endagePos]').val(endPos);
                $('#filterall').submit();
            }

        })
    });
</script>