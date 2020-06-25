<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('theme/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/plyr.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/photoswipe.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/default-skin.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/main.css')}}">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{asset('theme/Logo.png')}}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{asset('theme/Logo.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('theme/Logo.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('theme/Logo.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('theme/Logo.png')}}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Dmitry Volkov">
    <title>MINVIU</title>

    <style type="text/css">
        .main{
            margin-left: 0;
        }
        .sidebar{
            display: none;
        }
        .card__cover{
            border: 6px solid #3f495c;
        }
        #imH{
            width: 30%;
        }

        
        @media screen and (min-width: 1000px) {
            .sidLi{
                color: white;
            }
            .sidLi:hover{
                color: #00bcd4;
            }
            .card__cover{
            border: 6px solid #3f495c;
            }
            .main{
                margin-left:176px;padding: 0px 0px;
            }
            .sidebar{
                height: 100%; width: 176px; position: fixed; z-index: 3;top: 0;left: 0;background-color: #070f1f;overflow-x: hidden;padding-top: 120px;display: block;
            }
            .section{
                padding: 15px 0;
            }
            .forSm{
            display: none;
        }

        }
    </style>
</head>
<body class="body" style="overflow-x: hidden;">

    <!-- header -->
    <header class="header">
        <div class="header__wrap"  style="background-color: #0f1b33">
            <div class="">
                <div class="row">
                    <div class="col-12">
                        <div class="header__content">
                            <!-- header logo -->
                            <a href="{{url('/')}}" class="header__logo" style="background-color: #0f1b33">
                                <img id="imH" src="{{asset('theme/Logo.png')}}" alt="" style="position: absolute;left: 0">
                            </a>
                            <!-- end header logo -->

                            <!-- header nav -->
                            <ul class="header__nav">
                                <!-- dropdown -->
                                <li class="header__nav-item">
                                    <a class="header__nav-link" href="{{url('/')}}" style="color: #00bcd4;">Home</a>

                                    
                                </li>
                                <li class="header__nav-item forSm">
                                    <a class="header__nav-link" href="{{url('movies')}}" style="color: lightgrey;">Movies</a>
                                </li>
                                <li class="header__nav-item forSm">
                                    <a class="header__nav-link" href="{{url('softwares')}}" style="color: lightgrey">Softwares</a>
                                </li>
                                <li class="header__nav-item forSm">
                                    <a class="header__nav-link" href="{{url('applications')}}" style="color: lightgrey;">Applications</a>
                                </li>
                                <li class="header__nav-item forSm">
                                    <a class="header__nav-link" href="{{url('games')}}" style="color: lightgrey;">Games</a>
                                </li>
                                <!-- end dropdown -->

                                <!-- dropdown
                                <li class="header__nav-item">
                                    <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>

                                    <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
                                        <li><a href="catalog1.html">Catalog Grid</a></li>
                                        <li><a href="catalog2.html">Catalog List</a></li>
                                        <li><a href="details1.html">Details Movie</a></li>
                                        <li><a href="details2.html">Details TV Series</a></li>
                                    </ul>
                                </li>
                                end dropdown -->

                                <li class="header__nav-item">
                                    <a href="#" class="header__nav-link">Contact Us</a>
                                </li>

                                <li class="header__nav-item">
                                    <a href="#" class="header__nav-link">About Us</a>
                                </li>

                                <!-- dropdown -->
                                <li class="dropdown header__nav-item">
                                    <a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-more"></i></a>

                                    <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
                                        <li><a href="#">FAQ</a></li>
                                        
                                        <li><a href="{{url('signin')}}">Sign In</a></li>
                                        <li><a href="{{url('signup')}}">Sign Up</a></li>
                                        <li><a href="#">Forgot password</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">404 Page</a></li>
                                    </ul>
                                </li>
                                <!-- end dropdown -->
                            </ul>
                            <!-- end header nav -->

                            <!-- header auth -->
                            <div class="header__auth">
                                <button class="header__search-btn" type="button">
                                    <i class="icon ion-ios-search"></i>
                                </button>


                                <!-- dropdown -->
                                <div class="dropdown header__lang">
                                    <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</a>

                                    <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuLang">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        
                                    </ul>
                                </div>
                                <div class="dropdown header__lang">
                                    <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell" style="color: white;"></i></a>

                                    <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuLang">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown header__lang">
                                    <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" style="color: white;"></i>&nbsp;&nbsp;</a>

                                    <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuLang">
                                        @if(Auth::user())
                                        <li><a href="#">{{Auth::user()->name}}</a></li>
                                        <li><a href="{{url('logout')}}">Logout</a></li>
                                        @endif
                                        
                                    </ul>
                                </div>
                                <!-- end dropdown -->
                                <!--
                                <div class="dropdown header__lang" style="visibility: hidden;">
                                    <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</a>

                                    <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuLang">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">Russian</a></li>
                                    </ul>
                                </div>-->
                                <!-- end dropdown -->
                                <!--
                                <a href="signin.html" class="header__sign-in" style="">
                                    <i class="icon ion-ios-log-in"></i>
                                    <span>sign in</span>
                                </a>-->

                                
                            </div>
                            <!-- end header auth -->

                            <!-- header menu btn -->
                            <button class="header__btn" type="button">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <!-- end header menu btn -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- header search -->
        <form action="#" class="header__search">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header__search-content">
                            <input type="text" placeholder="Search for a movie, TV Series that you are looking for">

                            <button type="" style="background-color: #0f1b33">search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- end header search -->
    </header>
    <!-- end header -->
    <div class="sidebar" style="">
          <ul style="padding-left: 10px;">
            <li style=" text-align: left;"><a href="{{url('movies')}}" class="sidLi"><i class="fa fa-film" style="font-size:20px; color: white;"></i>&nbsp;&nbsp;&nbsp;<b>Movies</b></a></li><br><br>
            <li style="text-align: left;"><a href="{{url('softwares')}}" class="sidLi"><i class="fa fa-cogs" style="font-size:20px; color: white;"></i>&nbsp;&nbsp;&nbsp;<b>Softwares</b></a></li><br><br>
            <li style="text-align: left;"><a href="{{url('applications')}}" class="sidLi"><i class="fa fa-tv" style="font-size:20px; color: white;"></i>&nbsp;&nbsp;&nbsp;<b>Applications</b></a></li><br><br>
            <li style="text-align: left;"><a href="{{url('games')}}" class="sidLi"><i class="fa fa-gamepad" style="font-size:20px; color: white;"></i>&nbsp;&nbsp;&nbsp;<b>Games</b></li><br>
          </ul>
    </div>
        <div class="main" style="background-color: #0f1b33">
            
            <!-- home -->
            <section class="home" style="padding: 0">
                <!-- -->
                <div class="container">
                    <div class="row">
                        <div class="col-12" style="">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                              
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img class="d-block w-100" src="{{asset('theme/5.png')}}" style="width: 100%;" alt="First slide">
                                  
                                </div>
                                <div class="carousel-item"> 
                                  <img class="d-block w-100" src="{{asset('theme/11.png')}}" style="width: 100%" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="{{asset('theme/13.png')}}" style="width: 100%" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="{{asset('theme/6.png')}}" style="width: 100%" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="{{asset('theme/7.png')}}" style="width: 100%" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="{{asset('theme/8.png')}}" style="width: 100%" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="{{asset('theme/9.png')}}" style="width: 100%" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="{{asset('theme/10.png')}}" style="width: 100%" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="{{asset('theme/4.png')}}" style="width: 100%" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="{{asset('theme/3.png')}}" style="width: 100%" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="{{asset('theme/1.png')}}" style="width: 100%" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="{{asset('theme/2.png')}}" style="width: 100%" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="{{asset('theme/12.png')}}" style="width: 100%" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="{{asset('theme/14.png')}}" style="width: 100%" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="{{asset('theme/15.png')}}" style="width: 100%" alt="Third slide">
                                </div>
                                

                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only"></span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only"></span>
                              </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->
                <!-- home bg -->
                
                <!-- end home bg -->
            </section>
            <!-- end home -->

            

            <!-- expected premiere -->
            <section class="section section--bg" data-bg="">
                <div class="container">
                    <div class="row">
                        <!-- section title -->
                        <div class="col-12">
                            <h2 class="section__title" style="border-bottom: 3px solid #00bcd4">Movies</h2>
                        </div>
                        <!-- end section title -->
                        <?php
                            $movies=\App\Movie::take(6)->get();
                         ?>
                         @if(!empty($movies))
                         @foreach($movies as $movie)
                        <!-- card -->
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                            <div class="card">
                                <div class="card__cover">
                                    <img src="@if(!empty($movie)){{asset($movie->cover)}}@endif" alt="">
                                    <a href="{{url('view-movie/'.$movie->id)}}" class="card__play">
                                        <i class="icon ion-ios-play"></i>
                                    </a>
                                </div>
                                <div class="card__content">
                                    <h3 class="card__title"><a href="{{url('view-movie/'.$movie->id)}}">@if(!empty($movie)){{$movie->title}}@endif</a></h3>
                                    <span class="card__category">
                                        <a href="#">@if(!empty($movie)){{$movie->genre}}@endif</a>
                                        
                                    </span>
                                    <span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                        @endforeach
                        @endif
                        <!-- section btn -->
                        <!-- end section btn -->
                    </div>
                </div>
            </section>
            <!-- end expected premiere -->

            <!-- expected premiere -->
            <section class="section section--bg" data-bg="">
                <div class="container">
                    <div class="row">
                        <!-- section title -->
                        <div class="col-12">
                            <h2 class="section__title" style="border-bottom: 3px solid #00bcd4">Softwares</h2>
                        </div>
                        <!-- end section title -->
                        <?php
                            $softwares=\App\Software::take(6)->get();
                         ?>
                         @if(!empty($softwares))
                         @foreach($softwares as $software)
                        <!-- card -->
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                            <div class="card">
                                <div class="card__cover">
                                    <img src="@if(!empty($movie)){{asset($software->cover)}}@endif" alt="">
                                    <a href="{{url('view-software/'.$software->id)}}" class="card__play">
                                        <i class="icon ion-ios-play"></i>
                                    </a>
                                </div>
                                <div class="card__content">
                                    <h3 class="card__title"><a href="{{url('view-software/'.$software->id)}}">@if(!empty($software)){{$software->title}}@endif</a></h3>
                                    <span class="card__category">
                                        <a href="#">@if(!empty($software)){{$software->year}}@endif</a>
                                    </span>
                                    <span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                        @endforeach
                        @endif

                        <!-- section btn -->
                        
                        <!-- end section btn -->
                    </div>
                </div>
            </section>
            <!-- end expected premiere -->

            <!-- expected premiere -->
            <section class="section section--bg" data-bg="">
                <div class="container">
                    <div class="row">
                        <!-- section title -->
                        <div class="col-12">
                            <h2 class="section__title" style="border-bottom: 3px solid #00bcd4">Applications</h2>
                        </div>
                        <!-- end section title -->
                        <?php
                            $applications=\App\Application::take(6)->get();
                         ?>
                         @if(!empty($applications))
                         @foreach($applications as $application)
                        <!-- card -->
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                            <div class="card">
                                <div class="card__cover">
                                    <img src="@if(!empty($application)){{asset($application->cover)}}@endif" alt="">
                                    <a href="{{url('view-application/'.$application->id)}}" class="card__play">
                                        <i class="icon ion-ios-play"></i>
                                    </a>
                                </div>
                                <div class="card__content">
                                    <h3 class="card__title"><a href="{{url('view-application/'.$application->id)}}">@if(!empty($application)){{$application->title}}@endif</a></h3>
                                    <span class="card__category">
                                        <a href="#">@if(!empty($application)){{$application->year}}@endif</a>
                                    </span>
                                    <span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                        @endforeach
                        @endif
                        <!-- section btn -->
                        <!-- end section btn -->
                    </div>
                </div>
            </section>
            <!-- end expected premiere -->

            <!-- expected premiere -->
            <section class="section section--bg" data-bg="">
                <div class="container">
                    <div class="row">
                        <!-- section title -->
                        <div class="col-12">
                            <h2 class="section__title" style="border-bottom: 3px solid #00bcd4">Games</h2>
                        </div>
                        <!-- end section title -->
                        <?php
                            $games=\App\Game::take(6)->get();
                         ?>
                         @if(!empty($games))
                         @foreach($games as $game)
                        <!-- card -->
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                            <div class="card">
                                <div class="card__cover">
                                    <img src="@if(!empty($game)){{asset($game->cover)}}@endif" alt="">
                                    <a href="{{url('view-game/'.$game->id)}}" class="card__play">
                                        <i class="icon ion-ios-play"></i>
                                    </a>
                                </div>
                                <div class="card__content">
                                    <h3 class="card__title"><a href="{{url('view-game/'.$game->id)}}">@if(!empty($game)){{$game->title}}@endif</a></h3>
                                    <span class="card__category">
                                        <a href="#">@if(!empty($game)){{$game->year}}@endif</a>
                                    </span>
                                    <span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                        @endforeach
                        @endif
                        <!-- section btn -->
                        
                        <!-- end section btn -->
                    </div>
                </div>
            </section>
            <!-- end expected premiere -->

            <!-- partners -->
            <section class="section">
                <div class="container">
                    <div class="row">
                        <!-- section title -->
                        <div class="col-12">
                            <h2 class="section__title section__title--no-margin">Our Partners</h2>
                        </div>
                        <!-- end section title -->

                        <!-- section text -->
                        <div class="col-12">
                            <p class="section__text section__text--last-with-margin">It is a long <b>established</b> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
                        </div>
                        <!-- end section text -->

                        <!-- partner -->
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <a href="#" class="partner">
                                <img src="{{asset('theme/img/partners/partner.jpg')}}" alt="" class="partner__img">
                            </a>
                        </div>
                        <!-- end partner -->

                        <!-- partner -->
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <a href="#" class="partner">
                                <img src="{{asset('theme/img/partners/partner.jpg')}}" alt="" class="partner__img">
                            </a>
                        </div>
                        <!-- end partner -->

                        <!-- partner -->
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <a href="#" class="partner">
                                <img src="{{asset('theme/img/partners/partner.jpg')}}" alt="" class="partner__img">
                            </a>
                        </div>
                        <!-- end partner -->

                        <!-- partner -->
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <a href="#" class="partner">
                                <img src="{{asset('theme/img/partners/partner.jpg')}}" alt="" class="partner__img">
                            </a>
                        </div>
                        <!-- end partner -->

                        <!-- partner -->
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <a href="#" class="partner">
                                <img src="{{asset('theme/img/partners/partner.jpg')}}" alt="" class="partner__img">
                            </a>
                        </div>
                        <!-- end partner -->

                        <!-- partner -->
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <a href="#" class="partner">
                                <img src="{{asset('theme/img/partners/partner.jpg')}}" alt="" class="partner__img">
                            </a>
                        </div>
                        <!-- end partner -->
                    </div>
                </div>
            </section>
            <!-- end partners -->

            <!-- footer -->
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <!-- footer list 
                        <div class="col-12 col-md-3">
                            <h6 class="footer__title">Download Our App</h6>
                            <ul class="footer__app">
                                <li><a href="#"><img src="{{asset('theme/img/Download_on_the_App_Store_Badge.svg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('theme/img/google-play-badge.png')}}" alt=""></a></li>
                            </ul>
                        </div>
                         end footer list -->

                        <!-- footer list -->
                        <div class="col-6 col-sm-4 col-md-4">
                            <h6 class="footer__title">Resources</h6>
                            <ul class="footer__list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Pricing Plan</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                        <!-- end footer list -->

                        <!-- footer list -->
                        <div class="col-6 col-sm-4 col-md-4">
                            <h6 class="footer__title">Legal</h6>
                            <ul class="footer__list">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Security</a></li>
                            </ul>
                        </div>
                        <!-- end footer list -->

                        <!-- footer list -->
                        <div class="col-12 col-sm-4 col-md-4">
                            <h6 class="footer__title">Contact</h6>
                            <ul class="footer__list">
                                <li><a href="tel:+18002345678">+1 (800) 234-5678</a></li>
                                <li><a href="#"></a></li>
                            </ul>
                            <ul class="footer__social">
                                <li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                                <li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
                                <li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
                                <li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
                            </ul>
                        </div>
                        <!-- end footer list -->

                        <!-- footer copyright -->
                        <div class="col-12">
                            <div class="footer__copyright">
                                <small>© 2020 Minviu. <!--Designed & Developed by <a href="" target="_blank">Techelonstudios</a>--></small>

                                <ul>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end footer copyright -->
                    </div>
                </div>
            </footer>
            <!-- end footer -->
            
        </div>
    <!-- JS -->
    <script src="{{asset('theme/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('theme/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('theme/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('theme/js/jquery.mousewheel.min.js')}}"></script>
    <script src="{{asset('theme/js/jquery.mCustomScrollbar.min.js')}}"></script>
    <script src="{{asset('theme/js/wNumb.js')}}"></script>
    <script src="{{asset('theme/js/nouislider.min.js')}}"></script>
    <script src="{{asset('theme/js/plyr.min.js')}}"></script>
    <script src="{{asset('theme/js/jquery.morelines.min.js')}}"></script>
    <script src="{{asset('theme/js/photoswipe.min.js')}}"></script>
    <script src="{{asset('theme/js/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{asset('theme/js/main.js')}}"></script>
    <script type="text/javascript">
        $('.carousel').carousel();
    </script>
</body>
</html>