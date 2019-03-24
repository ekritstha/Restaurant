@extends('layout.app')
@section('content')
	<div class="homepage">
    <!-- header -->

    <!-- Carousel -->
    <div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($slidehead as $row)
            <li data-target="#myCarousel" data-slide-to="{{$row->order}}"></li>
            {{-- <li data-target="#carousel1" data-slide-to="1"></li>
            <li data-target="#carousel1" data-slide-to="2"></li> --}}
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($slidehead as $row)
            <div class="carousel-item rellax @if($row->order == '0'){{'active'}}@endif" data-rellax-speed="-5" >
                
                <img src="{{url('/images/gallery/'.$row->image)}}" alt="">
                <div class="carousel-caption carou-lt">
                    
                    <span class="carousel-caption-txt-sm">Welcome to</span>
                    <span class="carousel-caption-txt-bg">
                        Hankook Sarang <small>Korean Restaurant</small>
                    </span>
                    <p>{!!$row->description!!}</p>

                    <div class="carousel-caption-link">
                        <a href="{{url('about')}}"><i class="fa fa-user"></i> About Us</a>
                    </div>
                    
                </div>
                
            </div>
            @endforeach
            <!-- <div class="carousel-item rellax" data-rellax-speed="-5">
                <img src="images/DIP_2836.jpg" alt="">
                <div class="carousel-caption carou-lt">
                    <span class="carousel-caption-txt-sm">Welcome to</span>
                    <span class="carousel-caption-txt-bg">
                        Hankook Sarang <small>Korean Restaurant</small>
                    </span>
                    <p>Come here for all the delicious and traditional korean food to taste.</p>

                    <div class="carousel-caption-link">
                        <a href="{{url('menu')}}"><i class="fa fa-list"></i> Menu</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item rellax" data-rellax-speed="-5">
                <img src="images/DIP_2707.jpg" alt="">
                <div class="carousel-caption carou-lt">
                    <span class="carousel-caption-txt-sm">Welcome to</span>
                    <span class="carousel-caption-txt-bg">
                        Hankook Sarang <small>Korean Restaurant</small>
                    </span>
                    <p>Come here for all the delicious and traditional korean food to taste.</p>

                    <div class="carousel-caption-link">
                        <a href="{{url('menu')}}"><i class="fa fa-list"></i> Menu</a>
                    </div>
                </div>
            </div> -->
        </div>

        <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
            <i class="far fa-caret-square-left"></i>
        </a>
        <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
            <i class="far fa-caret-square-right"></i>
        </a>
    </div>

    <div class="ownerdetails__wrap text-center">
        <div class="ownerdetails">
            <div class="container">
                <h2>The best in Kathmandu to taste not just the traditional korean food but also feel the aesthetics of
                    a genuine korean feel.</h2>
                <small>Our Founder John Doe</small>
                <img src="images/signature.png" alt="">
            </div>
        </div>
    </div>

    <!-- abouthp -->
    <div class="abouthp__wrap">
        <div class="abouthp">
            <div class="container">
                <div class="row">
                    <!-- about hp col -->
                    <div class="abouthp__col abouthp__col-img col-lg-8">
                        <div class="abouthp__imgrow row">
                            <div class="abouthp__imgcol col-6">
                                <div class="abouthp__imgcover imgtobgcover">
                                    <img src="images/pexels-photo-1213271.jpeg" alt="">
                                </div>
                            </div>
                            <div class="abouthp__imgcol col-6">
                                <div class="abouthp__imgcover imgtobgcover">
                                    <img src="images/eiliv-sonas-aceron-733630-unsplash.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- about hp col-->
                    <div class="abouthp__col abouthp__col-cont col-lg-4">
                        <div class="abouthp__box">
                            <div class="abouthp__cont rellax">
                                <span class="abouthp__cont-welcome">Discover</span>
                                <h1 class="abouthp__cont-title">Our Taste</h1>
                                <span class="abouthp__cont-subtitle">The ultimate korean experience</span>
                                <p><strong>Korean cuisine</strong> is the customary cooking traditions and practices of
                                    the culinary arts of Korea. Korean cuisine has evolved through centuries of social
                                    and political change. Originating from ancient agricultural and nomadic traditions
                                    in Korea and southern Manchuria, Korean cuisine has evolved through a complex
                                    interaction of the natural environment and different cultural trends.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- menu -->
    <div class="menuhp__wrap">
        <div class="menuhp">
            <div class="menuhp__title">
                <div class="menuhp__title-txt">
                    <h2><span>Our</span> Menu</h2>
                </div>
            </div>
            <div class="menuhp__body">
                <div class="menuhp__meal menuhp__special">
                    <div class="menuhp__special-title">
                        <h4 class="menuhp__mealname"><a href="#">Specials</a></h4>
                    </div>
                    <div class="menuhp__specialslider owl-carousel owl-theme">
                        <!-- item -->
                        @foreach($menu as $row)
                        <div class="item">
                            <div class="menuhp__sliderbox">
                                
                                <div class="menuhp__sliderimg imgtobgcover">
                                    <img src="{{url('/images/gallery/'.$row->image)}}" alt="">
                                </div>
                                <div class="menu__details">
                            
                                    <h5 class="menu__details-title">{!!$row->name!!}</h5>
                                    <span class="menu__details-items">{!!$row->ingredient!!}</span>
                                    {{-- <span class="menu__details-price">{!!$row->price!!}</span> --}}
                                
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- item -->

                        <!-- class="item">
                            <div class="menuhp__sliderbox">
                                <div class="menuhp__sliderimg imgtobgcover">
                                    <img src="images/pexels-photo-1731535.jpeg" alt="">
                                </div>
                                <div class="menu__details">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                            </div>
                        </div>
                        <!- item -->
                        <!-- <div class="item">
                            <div class="menuhp__sliderbox">
                                <div class="menuhp__sliderimg imgtobgcover">
                                    <img src="images/pexels-photo-262897.jpeg" alt="">
                                </div>
                                <div class="menu__details">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                            </div>
                        </div> -->
                        <!-- item -->
                        <!-- <div class="item">
                            <div class="menuhp__sliderbox">
                                <div class="menuhp__sliderimg imgtobgcover">
                                    <img src="images/pexels-photo-698549.jpeg" alt="">
                                </div>
                                <div class="menu__details">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                            </div>
                        </div> -->
                        <!-- item -->
                        
                        <!-- item -->
                        <!-- <div class="item">
                            <div class="menuhp__sliderbox">
                                <div class="menuhp__sliderimg imgtobgcover">
                                    <img src="images/jakub-kapusnak-296881-unsplash.jpg" alt="">
                                </div>
                                <div class="menu__details">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                            </div>
                        </div> -->
                        <!-- item -->
                        <!-- <div class="item">
                            <div class="menuhp__sliderbox">
                                <div class="menuhp__sliderimg imgtobgcover">
                                    <img src="images/pexels-photo-1213271.jpeg" alt="">
                                </div>
                                <div class="menu__details">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- menu meal -->
                <div class="menuhp__meal">
                    <div class="container">
                        <!-- Breakfast -->
                        <div class="row menuhp__meal-row menuhp__meal-lt">
                            <div class="menuhp__meal-col menuhp__meal-col--img col-lg-8">
                                <div class="menuhp__meal-img imgtobgcover">
                                    <img src="images/jakub-kapusnak-296881-unsplash.jpg" alt="">
                                </div>
                            </div>
                            <div class="menuhp__meal-col menuhp__meal-col--cont col-lg-4">
                                <div class="menuhp__box">
                                    <div class="menuhp__cont rellax" data-rellax-speed="-1" data-rellax-percentage="1">
                                        <h4 class="menuhp__mealname"><a href="#">Breakfast</a></h4>
                                        @foreach($breakfast as $row)

                                        <div class="menu__details">
                                            
                                                <h5 class="menu__details-title">{!!$row->name!!}</h5>
                                                <span class="menu__details-items"><span>{!!$row->ingredient!!}</span></span>
                                                {{-- <span class="menu__details-price">{!!$row->price!!}</span> --}}
                                            
                                        </div>
                                        @endforeach
                                        <!-- <div class="menu__details">
                                            <h5 class="menu__details-title">Bul-gogi (Beef)</h5>
                                            <span class="menu__details-items"><span>Crab / Potatoes / Rice</span></span>
                                            <span class="menu__details-price">350</span>
                                        </div>
                                        <div class="menu__details">
                                            <h5 class="menu__details-title">Bul-gogi (Beef)</h5>
                                            <span class="menu__details-items"><span>Crab / Potatoes / Rice</span></span>
                                            <span class="menu__details-price">350</span>
                                        </div>
                                        <div class="menu__details">
                                            <h5 class="menu__details-title">Bul-gogi (Beef)</h5>
                                            <span class="menu__details-items"><span>Crab / Potatoes / Rice</span></span>
                                            <span class="menu__details-price">350</span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Lunch -->
                        <div class="row menuhp__meal-row menuhp__meal-rt">
                            <div class="menuhp__meal-col menuhp__meal-col--img col-lg-8">
                                <div class="menuhp__meal-img imgtobgcover">
                                    <img src="images/pexels-photo-698549.jpeg" alt="">
                                </div>
                            </div>
                            <div class="menuhp__meal-col menuhp__meal-col--cont col-lg-4">
                                <div class="menuhp__box">
                                    <div class="menuhp__cont rellax" data-rellax-speed="-1" data-rellax-percentage="1">
                                        <h4 class="menuhp__mealname"><a href="#">Lunch</a></h4>
                                        @foreach($lunch as $row)
                                        <div class="menu__details">
                                            
                                            <h5 class="menu__details-title">{!!$row->name!!}</h5>
                                            <span class="menu__details-items"><span>{!!$row->ingredient!!}</span></span>
                                            {{-- <span class="menu__details-price">{!!$row->price!!}</span> --}}
                                            
                                        </div>
                                        @endforeach
                                        <!-- <div class="menu__details">
                                            <h5 class="menu__details-title">Bul-gogi (Beef)</h5>
                                            <span class="menu__details-items"><span>Crab / Potatoes / Rice</span></span>
                                            <span class="menu__details-price">350</span>
                                        </div>
                                        <div class="menu__details">
                                            <h5 class="menu__details-title">Bul-gogi (Beef)</h5>
                                            <span class="menu__details-items"><span>Crab / Potatoes / Rice</span></span>
                                            <span class="menu__details-price">350</span>
                                        </div>
                                        <div class="menu__details">
                                            <h5 class="menu__details-title">Bul-gogi (Beef)</h5>
                                            <span class="menu__details-items"><span>Crab / Potatoes / Rice</span></span>
                                            <span class="menu__details-price">350</span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Dinner -->
                        <div class="row menuhp__meal-row menuhp__meal-lt">
                            <div class="menuhp__meal-col menuhp__meal-col--img col-lg-8">
                                <div class="menuhp__meal-img imgtobgcover">
                                    <img src="images/pexels-photo-262897.jpeg" alt="">
                                </div>
                            </div>
                            <div class="menuhp__meal-col menuhp__meal-col--cont col-lg-4">
                                <div class="menuhp__box">
                                    <div class="menuhp__cont rellax" data-rellax-speed="-1" data-rellax-percentage="1">
                                        <h4 class="menuhp__mealname"><a href="#">Dinner</a></h4>
                                        @foreach($dinner as $row)
                                        <div class="menu__details">
                                            
                                            <h5 class="menu__details-title">{!!$row->name!!}</h5>
                                            <span class="menu__details-items"><span>{!!$row->ingredient!!}</span></span>
                                            {{-- <span class="menu__details-price">{!!$row->price!!}</span> --}}
                                            
                                        </div>
                                        @endforeach
                                        <!-- <div class="menu__details">
                                            <h5 class="menu__details-title">Bul-gogi (Beef)</h5>
                                            <span class="menu__details-items"><span>Crab / Potatoes / Rice</span></span>
                                            <span class="menu__details-price">350</span>
                                        </div>
                                        <div class="menu__details">
                                            <h5 class="menu__details-title">Bul-gogi (Beef)</h5>
                                            <span class="menu__details-items"><span>Crab / Potatoes / Rice</span></span>
                                            <span class="menu__details-price">350</span>
                                        </div>
                                        <div class="menu__details">
                                            <h5 class="menu__details-title">Bul-gogi (Beef)</h5>
                                            <span class="menu__details-items"><span>Crab / Potatoes / Rice</span></span>
                                            <span class="menu__details-price">350</span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Drinks -->
                        <div class="row menuhp__meal-row menuhp__meal-tp">
                            <div class="menuhp__meal-col menuhp__meal-col--img col-12">
                                <div class="menuhp__meal-img imgtobgcover">
                                    <img src="images/eiliv-sonas-aceron-733630-unsplash.jpg" alt="">
                                </div>
                            </div>
                            <div class="menuhp__meal-col menuhp__meal-col--cont col-lg-4">
                                <div class="menuhp__box">
                                    <div class="menuhp__cont rellax" data-rellax-speed="-1" data-rellax-percentage="1">
                                        <h4 class="menuhp__mealname"><a href="#">Drinks</a></h4>
                                        @foreach($drink as $row)
                                        <div class="menu__details">
                                            
                                            <h5 class="menu__details-title">{!!$row->name!!}</h5>
                                            <span class="menu__details-items"><span>{!!$row->ingredient!!}</span></span>
                                            {{-- <span class="menu__details-price">{!!$row->price!!}</span> --}}
                                        </div>
                                        @endforeach
                                        <!-- <div class="menu__details">
                                            <h5 class="menu__details-title">Bul-gogi (Beef)</h5>
                                            <span class="menu__details-items"><span>Crab / Potatoes / Rice</span></span>
                                            <span class="menu__details-price">350</span>
                                        </div>
                                        <div class="menu__details">
                                            <h5 class="menu__details-title">Bul-gogi (Beef)</h5>
                                            <span class="menu__details-items"><span>Crab / Potatoes / Rice</span></span>
                                            <span class="menu__details-price">350</span>
                                        </div>
                                        <div class="menu__details">
                                            <h5 class="menu__details-title">Bul-gogi (Beef)</h5>
                                            <span class="menu__details-items"><span>Crab / Potatoes / Rice</span></span>
                                            <span class="menu__details-price">350</span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- banner contact -->
    <!-- <div class="bannercontact__wrap">
        <div class="bannercontact">
            <div class="container">
                <div class="bannercontact__cont">
                    <h3>Hankook Sarang</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sed excepturi cupiditate dicta
                        dolores?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime delectus dicta veritatis non
                        dolore eum, voluptate esse cum nesciunt repellendus dignissimos aliquam expedita molestiae
                        distinctio!</p>
                    <div class="bannercontact__link">
                        <a href="#">Contact Us</a>
                        <a class="reservepopup-form--toggle">Reserve Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- upcoming eventshp -->
    <div class="eventshp__wrap">
        <div class="eventshp">
            <div class="container">
                <div class="eventshp__head text-center">
                    <h2><span>Upcoming</span> Events</h2>
                </div>
                <div class="eventshp__body">
                    <div class="eventshp__row row">
                        <!-- upcoming eventshp col -->

                        <div class="eventshp__col eventshp__col-sm col-lg-7">
                            <!-- upcoming eventshp box -->
                            @foreach($event as $row)
                            <div class="eventshp__box eventshp__box-sm">
                                <div class="row">
                                    <div class="eventshp__innercol eventshp__col-img col-lg-5">
                                        <div class="eventshp__imgcover imgtobgcover">
                                            <img src="{{url('/images/gallery/'.$row->image)}}" alt="">
                                        </div>
                                        <div class="eventshp__date">
                                               
                                            <span class="eventshp__date-day">{!!$day = date('d', strtotime($row->date))!!}</span>
                                            <span class="eventshp__date-month">{!!$monthName = date('F', mktime(0, 0, 0, (date('m', strtotime($row->date))), 10));
                                                !!}</span>
                                        </div>
                                    </div>
                                    <div class="eventshp__innercol eventshp__col-cont col-lg-7">
                                        <div class="eventshp__cont">
                                            <h3>{!!$row->event_title!!}</h3>
                                            <div class="eventshp__details">
                                                <span class="eventshp__details-location">{!!$row->location!!}</span>
                                                <span class="eventshp__details-time">{!!$row->time!!}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- upcoming eventshp box -->
                            {{-- <div class="eventshp__box eventshp__box-sm">
                                <div class="row">
                                    <div class="eventshp__innercol eventshp__col-img col-lg-5">
                                        <div class="eventshp__imgcover imgtobgcover">
                                            <img src="images/pexels-photo-1618925.jpeg" alt="">
                                        </div>
                                        <div class="eventshp__date">
                                            <span class="eventshp__date-day">08</span>
                                            <span class="eventshp__date-month">Feb</span>
                                        </div>
                                    </div>
                                    <div class="eventshp__innercol eventshp__col-cont col-lg-7">
                                        <div class="eventshp__cont">
                                            <h3>Night Inspiration Party</h3>
                                            <div class="eventshp__details">
                                                <span class="eventshp__details-location">Thamel</span>
                                                <span class="eventshp__details-time">8:00pm - 10:00pm</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <?php
                            $d0 = 32;
                            $m0 = 13;
                            foreach($late as $row){
                                $y1=date('Y', strtotime($row->date));
                                $y2=date('Y');
                                $m1=date('m', strtotime($row->date));
                                $m2=date('m');
                                $d1=date('d', strtotime($row->date));
                                $d2=date('d');
                                if($y1>=$y2){
                                    if($m1>=$m2){
                                        if($d1>=$d2){
                                            if($d0 > $d1){
                                                $d0 = $d1;
                                                $raw = $row;
                                            }
                                        }
                                    }
                                }
                            }
                        
                        ?>
                        <div class="eventshp__col eventshp__col-lg col-lg-5">
                            <div class="eventshp__box eventshp__box-lg">
                                <div class="eventshp__imgcover imgtobgcover">
                                    <img src="{{url('/images/gallery/'.$raw->image)}}" alt="">
                                </div>
                                <div class="eventshp__cont">
                                    <h3>{!!$raw->event_title!!}</h3>
                                    <div class="eventshp__details">
                                        <span class="eventshp__details-location">{!!$raw->location!!}</span>
                                        <span class="eventshp__details-time">{!!$raw->time!!}</span>
                                    </div>
                                    <div class="eventshp__date">
                                        <span class="eventshp__date-day">{!!$day = date('d', strtotime($raw->date))!!}</span>
                                        <span class="eventshp__date-month">{!!$monthName = date('F', mktime(0, 0, 0, (date('m', strtotime($raw->date))), 10));
                                            !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- galleryhp -->
    <div class="galleryhp__wrap">
        <div class="galleryhp">
            <div class="galleryhp__head">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="galleryhp__head-col col-lg-2 text-right">
                            <h3>All our images</h3>
                        </div>
                        <div class="galleryhp__head-col col-lg-3 text-right">
                            <h2>Our Gallery</h2>
                        </div>
                        <div class="galleryhp__head-col col-lg-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non ad accusantium quia veniam
                                numquam est!</p>
                            <a href="{{url('gallery')}}" class="linkdab linkdab-alt">See All</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="galleryhp__body">
                <div class="gallery__inner wow fadeInLeft">
                    <div class="isotop-active row">
                        @foreach($gallery as $row)
                        <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                            <div class="gallery-link imgtobgcover">
                                <a class="fancybox" rel="group" href="{{url('/images/gallery/'.$row->image)}}"><i
                                        class="fa fa-eye"></i></a>
                                <img data-u="image" src="{{url('/images/gallery/'.$row->image)}}" />
                            </div>
                        </div>
                        @endforeach

                        <!-- <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                            <div class="gallery-link imgtobgcover">
                                <a class="fancybox" rel="group" href="images/gallery/jakub-kapusnak-296881-unsplash.jpg"><i
                                        class="fa fa-eye"></i></a>
                                <img data-u="image" src="images/gallery/thumb/jakub-kapusnak-296881-unsplash.jpg" />
                            </div>
                        </div>

                        <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                            <div class="gallery-link imgtobgcover">
                                <a class="fancybox" rel="group" href="images/gallery/pexels-photo-1213271.jpg"><i class="fa fa-eye"></i></a>
                                <img data-u="image" src="images/gallery/thumb/pexels-photo-1213271.jpg" />
                            </div>
                        </div>

                        <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-guests cat-other">
                            <div class="gallery-link imgtobgcover">
                                <a class="fancybox" rel="group" href="images/gallery/slider-img3.jpg"><i class="fa fa-eye"></i></a>
                                <img data-u="image" src="images/gallery/thumb/slider-img3.jpg" />
                            </div>
                        </div>

                        <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-guests cat-other">
                            <div class="gallery-link imgtobgcover">
                                <a class="fancybox" rel="group" href="images/gallery/pexels-photo-698549.jpg"><i class="fa fa-eye"></i></a>
                                <img data-u="image" src="images/gallery/thumb/pexels-photo-698549.jpg" />
                            </div>
                        </div>

                        <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-liveevents cat-other">
                            <div class="gallery-link imgtobgcover">
                                <a class="fancybox" rel="group" href="images/gallery/rachel-lynette-french-609252-unsplash.jpg"><i
                                        class="fa fa-eye"></i></a>
                                <img data-u="image" src="images/gallery/thumb/rachel-lynette-french-609252-unsplash.jpg" />
                            </div>
                        </div>

                        <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-other">
                            <div class="gallery-link imgtobgcover">
                                <a class="fancybox" rel="group" href="images/gallery/slider-img1.jpg"><i class="fa fa-eye"></i></a>
                                <img data-u="image" src="images/gallery/thumb/slider-img1.jpg" />
                            </div>
                        </div>

                        <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                            <div class="gallery-link imgtobgcover">
                                <a class="fancybox" rel="group" href="images/gallery/pexels-photo-262897.jpg"><i class="fa fa-eye"></i></a>
                                <img data-u="image" src="images/gallery/thumb/pexels-photo-262897.jpg" />
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contacthp -->
    <div class="contacthp__wrap">
        <div class="contacthp">
            <div class="row">
                <!-- contact hp col -->
                <div class="contacthp__col contacthp__col-img col-md-6">
                    <div class="contacthp__imgcover imgtobgcover">
                        <img src="images/slider-img1.jpg" alt="">
                        <div class="logowrap">
                            <img src="images/logo-darkbg.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- contact hp col -->
                <div class="contacthp__col contacthp__col-cont col-md-6">
                    <div class="contacthp__cont">
                        <h3>Come &amp; Visit</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita alias fugiat accusantium
                            reiciendis quos esse cupiditate, harum doloremque. Nobis rem est facilis veritatis
                            voluptatem facere.</p>
                        <a href="{{url('contact')}}"><i class="fa fa-phone"></i> Contact Us</a>
                        <a class="reservepopup-form--toggle"><i class="fa fa-envelope"></i> Reserve Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- review -->
    <div class="reviewhp__wrap">
        <div class="reviewhp">
            <div class="container">
                <div class="reviewhp__head">
                    <h2>See what our happy customers say about us</h2>
                </div>
                <div class="reviewhp__body">
                    <div class="reviewhp-slider owl-carousel owl-theme">
                        <!-- item -->
                        @foreach($test as $row)
                        <div class="item">
                            <div class="reviewhp__box">
                                <div class="reviewhp__box-cont">
                                    <h5>{!!$row->title!!}</h5>
                                    <p>{!!$row->description!!}</p>
                                </div>
                                <div class="reviewhp__box-author">
                                    <strong>{!!$row->cname!!}</strong>
                                    <span>Posted in {!!$row->source!!}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- item -->
                        <!-- <div class="item">
                            <div class="reviewhp__box">
                                <div class="reviewhp__box-cont">
                                    <h5>Nice terrace to taste Korean food</h5>
                                    <p>Well-located in a quiet street into Thamel. The atmosphere is relaxing and wife
                                        not working. I have had dinner with some friends I have eaten bibimbap. The
                                        service was poor as my friend who has visited it many times. It was not the
                                        best restaurant for our last dinner in Nepal.</p>
                                </div>
                                <div class="reviewhp__box-author">
                                    <strong>ENRIC-23</strong>
                                    <span>Posted in Tripadvisor</span>
                                </div>
                            </div>
                        </div> -->
                        <!-- item -->
                        <!-- <div class="item">
                            <div class="reviewhp__box">
                                <div class="reviewhp__box-cont">
                                    <h5>Good Food and Good Value</h5>
                                    <p>The services are good and food value for money. The ambien is good. The pork
                                        dish for self barbecue is real value for money as it comes with 4 side dishes
                                        and rice.</p>
                                </div>
                                <div class="reviewhp__box-author">
                                    <strong>944James</strong>
                                    <span>Posted in Tripadvisor</span>
                                </div>
                            </div>
                        </div> -->
                        <!-- item -->
                        <!-- <div class="item">
                            <div class="reviewhp__box">
                                <div class="reviewhp__box-cont">
                                    <h5>Service needs to be improved</h5>
                                    <p>The food was just ok. Nothing special. The staffs were not available when we
                                        needed something. Had to walk up to the counter ask call the staffs. The staffs
                                        could be a little more welcoming and friendly.</p>
                                </div>
                                <div class="reviewhp__box-author">
                                    <strong>Manas S</strong>
                                    <span>Posted in Tripadvisor</span>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection