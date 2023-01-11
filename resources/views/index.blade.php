<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfect Women|Home</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/owner.css" type="text/css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <a href="/" width="100%"><img src="img/Logo.png" alt="" width="100% "  height="100%"></a>
                    {{-- <div class="header__logo">
                        
                        <img itemprop="image" class="mobile" src="https://perfectwomen.ae/wp-content/uploads/2020/11/Logo1.png" alt="Logo" style="height: 100%; width:40px;color:white">
                    </div> --}}
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="/">@lang('index.home')</a></li>
                                <li><a href="{{ url('contact') }}">@lang('index.git in touch')</a></li>
                                <li><a href="./portfolio.html">@lang('index.press kit')</a></li>
                                <li><a href="./services.html">@lang('index.media')</a></li>
                                {{-- <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./about.html">About</a></li>
                                        <li><a href="./portfolio.html">Portfolio</a></li>
                                        <li><a href="./blog.html">Blog</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li> --}}
                                <li><a href="/"><img src="img\icons/united-states-flag-icon-9.png" alt="" width="25px"> English</a></li>
                                <li><a href="/ar"><img src="img\icons/aueicon.png" alt="" width="25px">Arbic</a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero">
       
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>@lang('index.HOW TO BE PERFECT')</span>
                                <h3 style="color: white"><b>@lang('index.LOYALTY content')</b></h3><br>
                                <a href="https://www.youtube.com/watch?v=yfkrrx540vE&t=3s" class="play-btn video-popup primary-btn " style="width: 100px"><h1 style="color: white"><i class="fa fa-play" width="500pxpx"></i></h1></a>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>@lang('index.PRIVACY title')</span>
                                <h3 style="color: white"><b> @lang('index.PRIVACY content')</b></h3><br>
                                
                                <a href="https://www.youtube.com/watch?v=yfkrrx540vE&t=3s" class="play-btn video-popup primary-btn " style="width: 100px"><h1 style="color: white"><i class="fa fa-play" width="500pxpx"></i></h1></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>@lang('index.CREATIVE THINKING title')</span>
                                <h3 style="color: white"><b>@lang('index.CREATIVE content')</b></h3>
                                {{-- <a href="#" class="primary-btn">See more about us</a> --}}
                                <a href="https://www.youtube.com/watch?v=yfkrrx540vE&t=3s" class="play-btn video-popup primary-btn " style="width: 100px"><h1 style="color: white"><i class="fa fa-play" width="500pxpx"></i></h1></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services__title">
                        <div class="section-title">
                            {{-- <span>WHY PERFECT?</span> --}}
                            <h2>@lang('index.WHY PERFECT')</h2>
                        </div>
                        {{-- <p>If you hire a videographer of our team you will get a video professional to make a custom
                            video for your business and, once the project is over.</p> --}}
                        <a href="#" class="primary-btn">View all PERFECT?</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="img/icons/si-1.png" alt="">
                                </div>
                                <h4>@lang('index.PROFESSIONAL CADRES title')</h4>
                                <p>@lang('index.PROFESSIONAL CADRES content')</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="img/icons/si-2.png" alt="">
                                </div>
                                <h4>@lang('index.TO ALL BUDGETS title')</h4>
                                <p>@lang('index.TO ALL BUDGETS content')</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="img/icons/si-3.png" alt="">
                                </div>
                                <h4>@lang('index.HEALTH AND SAFETY title')</h4>
                                <p>@lang('index.HEALTH AND SAFETY content')</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="img/icons/si-4.png" alt="">
                                </div>
                                <h4>@lang('index.TARGETING THE AUDIENCE title')</h4>
                                <p>@lang('index.TARGETING THE AUDIENCE content')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Work Section Begin -->
    {{-- <section class="work">
        <div class="work__gallery">
            <div class="grid-sizer"></div>
            <div class="work__item wide__item set-bg" data-setbg="img/work/work-1.jpg">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
                <div class="work__item__hover">
                    <h4>VIP Auto Tires & Service</h4>
                    <ul>
                        <li>eCommerce</li>
                        <li>Magento</li>
                    </ul>
                </div>
            </div>
            <div class="work__item small__item set-bg" data-setbg="img/work/work-2.jpg">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
            </div>
            <div class="work__item small__item set-bg" data-setbg="img/work/work-3.jpg">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
            </div>
            <div class="work__item large__item set-bg" data-setbg="img/work/work-4.jpg">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
                <div class="work__item__hover">
                    <h4>VIP Auto Tires & Service</h4>
                    <ul>
                        <li>eCommerce</li>
                        <li>Magento</li>
                    </ul>
                </div>
            </div>
            <div class="work__item small__item set-bg" data-setbg="img/work/work-5.jpg">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
            </div>
            <div class="work__item small__item set-bg" data-setbg="img/work/work-6.jpg">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
            </div>
            <div class="work__item wide__item set-bg" data-setbg="img/work/work-7.jpg">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
                <div class="work__item__hover">
                    <h4>VIP Auto Tires & Service</h4>
                    <ul>
                        <li>eCommerce</li>
                        <li>Magento</li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Work Section End -->

    <!-- Counter Section Begin -->
    {{-- <section class="counter">
        <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <img src="img/icons/ci-1.png" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Compled Projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <img src="img/icons/ci-2.png" alt="">
                                <h2 class="counter_num">1068</h2>
                                <p>Happy clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                                <img src="img/icons/ci-3.png" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Perspective clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item four__item">
                            <div class="counter__item__text">
                                <img src="img/icons/ci-4.png" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Compled Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Counter Section End -->

    <!-- Team Section Begin -->
    <section class="team spad set-bg" data-setbg="img/team-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title team__title">
                        <span>Our Events</span>
                        <h2>PERFECT EVENTS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item set-bg" data-setbg="https://perfectwomen.ae/wp-content/uploads/2019/12/h1-img-01.jpg">
                        <div class="team__item__text">
                            <h4>MAD MAN JOHNSON</h4>
                            {{-- <p>Videographer</p> --}}
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--second set-bg" data-setbg="https://perfectwomen.ae/wp-content/uploads/2019/12/h1-img-02.jpg">
                        <div class="team__item__text">
                            <h4>BIG BLUE BEAR</h4>
                            {{-- <p>Videographer</p> --}}
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--third set-bg" data-setbg="https://perfectwomen.ae/wp-content/uploads/2019/12/h1-img-03.jpg">
                        <div class="team__item__text">
                            <h4>SPRING BREEZE</h4>
                            {{-- <p>Videographer</p> --}}
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--four set-bg" data-setbg="https://perfectwomen.ae/wp-content/uploads/2019/12/h1-img-04.jpg">
                        <div class="team__item__text">
                            <h4>THE GUNNER</h4>
                            {{-- <p>Videographer</p> --}}
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-12 p-0">
                    <div class="team__btn">
                        <a href="#" class="primary-btn">Meet Our Team</a>
                    </div>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item set-bg" data-setbg="https://perfectwomen.ae/wp-content/uploads/2019/12/h1-img-05.jpg">
                        <div class="team__item__text">
                            <h4>MAD MAN JOHNSON</h4>
                            {{-- <p>Videographer</p> --}}
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--second set-bg" data-setbg="https://perfectwomen.ae/wp-content/uploads/2019/12/h1-img-06.jpg">
                        <div class="team__item__text">
                            <h4>BIG BLUE BEAR</h4>
                            {{-- <p>Videographer</p> --}}
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--third set-bg" data-setbg="https://perfectwomen.ae/wp-content/uploads/2019/12/h1-img-07.jpg">
                        <div class="team__item__text">
                            <h4>SPRING BREEZE</h4>
                            {{-- <p>Videographer</p> --}}
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--four set-bg" data-setbg="img/team/team-4.jpg">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div> old one all like this--}}
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--four set-bg" data-setbg="https://perfectwomen.ae/wp-content/uploads/2019/12/h1-img-08.jpg">
                        <div class="team__item__text">
                            <h4>THE GUNNER</h4>
                            {{-- <p>Videographer</p> --}}
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 p-0">
                    <div class="team__btn">
                        <a href="#" class="primary-btn">Meet Our Team</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2>@lang('index.OUR SERVICES')</h2><br>
                        <span>@lang('INDEX.OUR SERVICES intro')</span>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest__slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.AUDIO & VISUAL RENTAL SERVICES title')</h4>
                            <ul>
                                {{-- <li>Jan 03, 2020</li>
                                <li>05 Comment</li> --}}
                                <img src="img/SERVICESBLOGER/BOLG01.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.AUDIO & VISUAL RENTAL SERVICES')</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.PLASMA SCREEN RENTAL SERVICES title')</h4>
                            <ul>
                                {{-- <li>Jan 03, 2020</li>
                                <li>05 Comment</li> --}}
                                <img src="img/SERVICESBLOGER/BLoG2.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.PLASMA SCREEN RENTAL SERVICES')</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.ENTERTAINMENT EVENTS title')</h4>
                            <ul>
                                {{-- <li>Jan 03, 2020</li>
                                <li>05 Comment</li> --}}
                                <img src="img/SERVICESBLOGER/BLoG3.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.ENTERTAINMENT EVENTS')</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.CONFERENCES, SEMINARS, AND MEETINGS titile')</h4>
                            <ul>
                                {{-- <li>Jan 03, 2020</li>
                                <li>05 Comment</li> --}}
                                <img src="img/SERVICESBLOGER/BLoG4.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.CONFERENCES, SEMINARS, AND MEETINGS')</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.EXHIBITION ORGANIZATION title')</h4>
                            <ul>
                                {{-- <li>Jan 03, 2020</li>
                                <li>05 Comment</li> --}}
                                <img src="img/SERVICESBLOGER/BLoG5.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.EXHIBITION ORGANIZATION')</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.ARABIC TENTS RENTAL SERVICES title')</h4>
                            <ul>
                                {{-- <li>Jan 03, 2020</li>
                                <li>05 Comment</li> --}}
                                <img src="img/SERVICESBLOGER/BLoG6.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.ARABIC TENTS RENTAL SERVICES')</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.FLOWER ARRANGEMENT AND DECORATION title')</h4>
                            <ul>
                                {{-- <li>Jan 03, 2020</li>
                                <li>05 Comment</li> --}}
                                <img src="img/SERVICESBLOGER/BLoG7.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.FLOWER ARRANGEMENT AND DECORATION')</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.KIDS’ ACTIVITIES & GAMES EVENTS’ PREPARATION title')</h4>
                            <ul>
                                {{-- <li>Jan 03, 2020</li>
                                <li>05 Comment</li> --}}
                                <img src="img/SERVICESBLOGER/BLoG8.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.KIDS’ ACTIVITIES & GAMES EVENTS’ PREPARATION')</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
            </div><br><br>
            <div class="row">
                <div class="latest__slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.HOLDING VIP PARTIES title')</h4>
                            <ul>
                                {{-- <li>Jan 03, 2020</li>
                                <li>05 Comment</li> --}}
                                <img src="img/SERVICESBLOGER/BLoG9.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.HOLDING VIP PARTIES')</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.TEAM BUILDING & DOING ACTIVITY title')</h4>
                            <ul>
                                {{-- <li>Jan 03, 2020</li>
                                <li>05 Comment</li> --}}
                                <img src="img/SERVICESBLOGER/BLoG10.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.TEAM BUILDING & DOING ACTIVITY')</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.CATERING title')</h4>
                            <ul>
                                {{-- <li>Jan 03, 2020</li>
                                <li>05 Comment</li> --}}
                                <img src="img/SERVICESBLOGER/BLoG11.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.CATERING')</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.MUSIC PRODUCTION title')</h4>
                            <ul>
                                {{-- <li>Jan 03, 2020</li>
                                <li>05 Comment</li> --}}
                                <img src="img/SERVICESBLOGER/BLoG12.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.MUSIC PRODUCTION').</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.VIDEOGRAPHY & PHOTOGRAPHY title')</h4>
                            <ul>
                                {{-- <li>Jan 03, 2020</li>
                                <li>05 Comment</li> --}}
                                <img src="img/SERVICESBLOGER/BLoG13.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.VIDEOGRAPHY & PHOTOGRAPHY')</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.EVENT EQUIPMENT RENTAL & INSTALLATION title')</h4>
                            <ul>
                                {{-- <li>Jan 03, 2020</li>
                                <li>05 Comment</li> --}}
                                <img src="img/SERVICESBLOGER/BLoG14.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.EVENT EQUIPMENT RENTAL & INSTALLATION')</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.STAGE SET UP & BACKLINE PREPARATION title')</h4>
                            <ul>
                                {{-- <li>Jan 03, 2020</li>
                                <li>05 Comment</li> --}}
                                <img src="img/SERVICESBLOGER/BLoG15.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.STAGE SET UP & BACKLINE PREPARATION')</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.PERSONNEL & STAFF MANAGEMENT title')</h4>
                            <ul>
                                {{-- <li>Jan 03, 2020</li>
                                <li>05 Comment</li> --}}
                                <img src="img/SERVICESBLOGER/BLoG16.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.PERSONNEL & STAFF MANAGEMENT')</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
            </div><br><br>
            <div class="row">
                <div class="latest__slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.PERFORMANCE ARTISTS RENTALS title')</h4>
                            <ul>
                                {{-- <li>Jan 03, 2020</li>
                                <li>05 Comment</li> --}}
                                <img src="img/SERVICESBLOGER/BLoG17.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.PERFORMANCE ARTISTS RENTALS')</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.CULTURE EVENTS AND FESTIVALS title')</h4>
                            <ul>
                                {{-- <li>Jan 03, 2020</li>
                                <li>05 Comment</li> --}}
                                <img src="img/SERVICESBLOGER/BLoG18.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.CULTURE EVENTS AND FESTIVALS')</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.FASHION SHOWS title')</h4>
                            <ul>
                                {{-- <li>Jan 03, 2020</li>
                                <li>05 Comment</li> --}}
                                <img src="img/SERVICESBLOGER/BLoG19.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.FASHION SHOWS')</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.SCHOOLS’ & COLLEGES’ EVENTS title')</h4>
                            <ul>
                                {{-- <li>Jan 03, 2020</li>
                                <li>05 Comment</li> --}}
                                <img src="img/SERVICESBLOGER/BLoG20.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.SCHOOLS’ & COLLEGES’ EVENTS')</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.CORPORATE & BUSINESS EVENTS title')</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                                <img src="img/SERVICESBLOGER/BLoG21.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.CORPORATE & BUSINESS EVENTS')</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>@lang('index.PRODUCT LAUNCHING title')</h4>
                            <ul>
                                {{-- <li>Jan 03, 2020</li>
                                <li>05 Comment</li> --}}
                                <img src="img/SERVICESBLOGER/BLoG22.jpg" alt="" width="40px">
                            </ul>
                            <p>@lang('index.PRODUCT LAUNCHING')</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->
{{-- OUR Services --}}
 <section class="latest spad">
    <h1 style="color: white"><center>@lang('index.HOW TO BE PERFECT')</center></h1><br>
     <div class="container" style="color: white">
   
    <div class="row">
        <div class=" col section-title center-title">
            <span><b><u>@lang('index.LOYALTY title') </u></b></span>
            <h3 style="color: white">@lang('index.LOYALTY content')</h3>
        </div>
      <div class="col section-title center-title">
        <span> <b><u>@lang('index.PRIVACY title')  </u></b></span>
        <h3 style="color: white">@lang('index.PRIVACY content')</h3>
      </div>
      <div class="col">
        <span><u> <b>@lang('index.CREATIVE THINKING title') </b></u></span>
        <h3 style="color: white">@lang('index.CREATIVE content')</h3>
      </div>
    </div>
     </div>
  </section>

<section class="latest spad">
    <div class="container mt-5">
    
        <div class="row d-flex justify-content-center">
            
            <div class="col-md-7">
                
                <div class="card p-3 py-4">
                    <h2 class="mt-2 mb-0"><b> MEET US</b></h2><br>
                    <div class="px-4 mt-1">
                        
                        <p class="fonts"> <b> The success of Perfect Women in aiming to raise the level of events’ organization in the United Arab Emirates won’t have reached this level of excellence and success without the great exerted efforts of:</b> </p>
                    
                    </div>
                    <div class="text-center">
                        <img src="img/SERVICESBLOGER/owner.jpeg" width="100" class="rounded-circle">
                    </div>
                    
                    <div class="text-center mt-3">
                        <h3 class="mt-2 mb-0">SUAAD AL HABSI</h3>
                        <span class="bg-secondary p-1 px-4 rounded text-white">Owner</span>
                        
                        <span>
                            <ul>
                                <li>Owner of perfect women events.</li>
                                <li>Bachelors business management </li>
                                <li>diploma finance and banking.</li>
                                <li>kindergarten management.</li>
                                <li>15 years participated in CrossFit, Spartan Races .</li>
                                <li>Chef of about 10 years.</li>

                            </ul>
                            
                        </span>
                        
                        
                        
                         <ul class="social-list">
                            <li><i class="fa fa-facebook"></i></li>
                            <li><i class="fa fa-dribbble"></i></li>
                            <li><i class="fa fa-instagram"></i></li>
                            <li><i class="fa fa-linkedin"></i></li>
                            <li><i class="fa fa-google"></i></li>
                        </ul>
                        
                        {{-- <div class="buttons">
                            
                            <button class="btn btn-outline-primary px-4">Message</button>
                            <button class="btn btn-primary px-4 ms-3">Contact</button>
                        </div> --}}
                        
                        
                    </div>
                    
                   
                    
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
</section>
  
    <!-- Call To Action Section Begin -->
    {{-- <section class="callto spad set-bg" data-setbg="img/callto-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="callto__text">
                        <h2>@lang('index.slowgan')</h2>
                        <p>INC5000, Best places to work 2019</p>
                        <a href="#">Start your stories</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Call To Action Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__logo">
                            <a href="#"><img src="img/logo.png" alt="" width="300px" height="100%"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__option">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__option__item">
                            {{-- <h5>About us</h5> --}}
                            <p> <img src="img/SERVICESBLOGER/AD-police.png" alt=""></p>
                            <a href="#" class="read__more">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>Who we are</h5>
                            <ul>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Carrers</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Locations</a></li>
                            </ul>
                           
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>UAE</h5>
                            {{-- <ul>
                                <li><a href="#">Feature</a></li>
                                <li><a href="#">Latest</a></li>
                                <li><a href="#">Browse Archive</a></li>
                                <li><a href="#">Video for web</a></li>
                            </ul> --}}
                            <img src="img/SERVICESBLOGER/Zayed-festival.png" alt="">
                            <img src="img/SERVICESBLOGER/aueanimationimg.png" alt="">
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__option__item">
                            {{-- <h5>Newsletter</h5>
                            <p>Videoprah is an award-winning, full-service production company specializing.</p>
                            <form action="#">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form> --}}
                            <img width="174" height="324" src="https://perfectwomen.ae/wp-content/uploads/2020/11/Logolight.png" class="image wp-image-599  attachment-full size-full" alt="" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://perfectwomen.ae/wp-content/uploads/2020/11/Logolight.png 174w, https://perfectwomen.ae/wp-content/uploads/2020/11/Logolight-161x300.png 161w" sizes="(max-width: 174px) 100vw, 174px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="footer__copyright__text">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved PerfectWomen| This Website is made <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="#" target="_blank">Durob Gurop</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <!-- JS -->
  <script src="http://roshinjose.com/codepen/jquery_002.js"></script>
  <script src="http://roshinjose.com/codepen/plugins.js"></script>
  
</body>

</html>