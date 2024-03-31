@extends('layouts.app')

@section('content')


<body>
<header>

    <div class="collapse navbar-collapse" id="navbar-collapse">

        <ul class="nav navbar-nav navbar-right">

    <li class="active">
        <a href="{{url('/')}}">Sakums</a>
    </li>

    <li>
        <a href="{{url('preces')}}">Preces</a>
    </li>

    <li>
        <a href="{{url('jaunumi')}}">Jaunumi</a>
    </li>

    <li>
        <a href="{{url('information')}}">Information</a>
    </li>

    <li>
        <a href="{{url('kontakt')}}">Kontakts</a>
    </li>

    <li>


        </ul>
    </div>
</header>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>



<div class="main-wrapper">

    <section class="cd-slider-wrapper">
        <ul class="cd-slider">
            <li class="visible">
                <div>
                    <h2>Welcome!</h2>
                    <p>Datoru veikals</p>
                    <a href="#0" class="cd-btn">Vairak</a>
                </div>
            </li>

            <li>
                <div>
                    <h2>Informacija</h2>
                    <p>Maza informacija par musu produktiem</p>
                    <a href="#0" class="cd-btn">Vairak</a>
                </div>
            </li>

            <li>
                <div>
                    <h2>Musu preces</h2>
                    <p>Musu vislabakas preces</p>
                    <a href="#0" class="cd-btn">Vairak</a>
                </div>
            </li>

            <li>
                <div>
                    <h2>Kontakti</h2>
                    <p>Musu kontakti</p>
                    <a href="#0" class="cd-btn">Vairak</a>
                </div>
            </li>
        </ul> <!-- .cd-slider -->

        <ol class="cd-slider-navigation">
            <li class="selected"><a href="#0"><Slaid #1</em></a></li>
            <li><a href="#0"><em>Slaid#2</em></a></li>
            <li><a href="#0"><em>Slaid#3</em></a></li>
            <li><a href="#0"><em>Slaid#4</em></a></li>
        </ol> <!-- .cd-slider-navigation -->

        <div class="cd-svg-cover" data-step1="M1402,800h-2V0.6c0-0.3,0-0.3,0-0.6h2v294V800z" data-step2="M1400,800H383L770.7,0.6c0.2-0.3,0.5-0.6,0.9-0.6H1400v294V800z" data-step3="M1400,800H0V0.6C0,0.4,0,0.3,0,0h1400v294V800z" data-step4="M615,800H0V0.6C0,0.4,0,0.3,0,0h615L393,312L615,800z" data-step5="M0,800h-2V0.6C-2,0.4-2,0.3-2,0h2v312V800z" data-step6="M-2,800h2L0,0.6C0,0.3,0,0.3,0,0l-2,0v294V800z" data-step7="M0,800h1017L629.3,0.6c-0.2-0.3-0.5-0.6-0.9-0.6L0,0l0,294L0,800z" data-step8="M0,800h1400V0.6c0-0.2,0-0.3,0-0.6L0,0l0,294L0,800z" data-step9="M785,800h615V0.6c0-0.2,0-0.3,0-0.6L785,0l222,312L785,800z" data-step10="M1400,800h2V0.6c0-0.2,0-0.3,0-0.6l-2,0v312V800z">
            <svg height='100%' width="100%" preserveAspectRatio="none" viewBox="0 0 1400 800">

                <desc>а</desc>
                <path id="cd-changing-path" d="M1402,800h-2V0.6c0-0.3,0-0.3,0-0.6h2v294V800z"/>
            </svg>
        </div> <!-- .cd-svg-cover -->
    </section> <!-- .cd-slider-wrapper -->



    <!-- Call to Action -->
    <section class="call-to-action">
        <div class="container">
            <h3 class="cta-subheading text-center">Mes piedavajam tikai labas preces</h3>
            <h2 class="text-center mt30">Izvele aiz jums </h2>
            <div class="col-lg-12 text-center mt40">
                <a href="#" id="cta-button-solid" class="btn btn-large btn-rounded btn-light-solid">Pirkt </a>
                <a href="#" id="cta-button-stroke" class="btn btn-large btn-rounded btn-light-transparent">Vairak</a>
            </div>
        </div>
    </section>

    <!-- Core Features -->
    <section class="core-features style-1">
        <div class="container">
            <h2 class="text-center">Musi priekšrocība</h2>
            <p class="subheading text-center">Mēs uzlabojam savas īpašības jūsu labā</p>
            <div class="main-border blue"></div>

            <div class="features-promo mt70">
                <div class="row">

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="features-item features-right text-right">
                            <div class="features-icon">
                                <i class="icon icon-Search"></i>
                            </div>
                            <h5>Priekšrocība №1</h5>
                            <p>Jauni modernizēti datori.</p>
                        </div>

                        <div class="features-item features-right text-right">
                            <div class="features-icon">
                                <i class="icon icon-Layers"></i>
                            </div>
                            <h5>Priekšrocība №2</h5>
                            <p>Daudz laimīgu lietotāju un komentāru.</p>
                        </div>

                        <div class="features-item features-right text-right">
                            <div class="features-icon">
                                <i class="icon icon-Drop"></i>
                            </div>
                            <h5>Priekšrocība №3</h5>
                            <p>Ir datori katrai jusei gaumei.</p>
                        </div>
                    </div>

                    <div class="promo-img col-lg-6 col-md-4 hidden-sm hidden-xs text-center">
                        <img src="upload/core_features_img.jpg" alt="core-features-img">
                    </div>

                    <!-- start right column -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="icon icon-Tools"></i>
                            </div>
                            <h5>Priekšrocība №4</h5>
                            <p>Laba darba kvalitāte.</p>
                        </div>

                        <div class="features-item">
                            <div class="features-icon">
                                <i class="icon icon-Timer"></i>
                            </div>
                            <h5>Priekšrocība №5</h5>
                            <p>Viegla muitošana un labas cenas.</p>
                        </div> <!-- end features item -->

                        <div class="features-item">
                            <div class="features-icon">
                                <i class="icon icon-Notes"></i>
                            </div>
                            <h5>Priekšrocība №6</h5>
                            <p>Labs tehniskais atbalsts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Results -->
    <section class="results">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 text-center">
                    <div class="statistic">
                        <span class="timer" data-from="0" data-to="547"></span>
                        <h5 class="counter-text">Klientus</h5>
                    </div>
                </div> <!-- end col -->

                <div class="col-sm-3 text-center">
                    <div class="statistic">
                        <span class="timer" data-from="0" data-to="1024"></span>
                        <h5 class="counter-text">palika datori</h5>
                    </div>
                </div>

                <div class="col-sm-3 text-center">
                    <div class="statistic">
                        <span class="timer" data-from="0" data-to="3589"></span>
                        <h5 class="counter-text">pardodas datori</h5>
                    </div>
                </div>

                <div class="col-sm-3 text-center">
                    <div class="statistic">
                        <span class="timer" data-from="0" data-to="999"></span>
                        <h5 class="counter-text">kontrakti</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="footer-widgets">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-about-us">
                            <h5 class="heading-white">Musu kompanija</h5>
                            <p>Musa laiks iet talak un musu galvena merkis ari iet ar vinu talak. Mes daudz stradajam lai jums bija vieglak atrast prece kura jums palidzes dzive.</p>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/artyr.hyf.7"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="https://myaccount.google.com/profile"><i class="fa fa-google-plus"></i></a>
                                <a href="https://vk.com/sad_kizik"><i class="fa fa-linkedin"></i></a>
                                <a href="https://fontawesome.com/v4/icon/pinterest-p"><i class="fa fa-pinterest-p"></i></a>
                                <a href="https://www.instagram.com/kizik_psix/"><i class="fa fa-instagram"></i></a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</div>
</div>
</footer>

<div id="back-to-top">
    <a href="#top"><i class="fa fa-angle-up"></i></a>
</div>

</div>





</body>

</html>

@endsection
