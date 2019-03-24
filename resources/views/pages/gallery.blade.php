@extends('layout.app')
@section('content')
<div class="page page-gallery">
    <!-- page head wrap -->
    <?php $pagename = 'Gallery'; ?>
    @include('inc/page_head')

    <div class="gallery__wrap">
        <div class="gallery">
            <div class="container">
                <div class="gallery" id="gallery">
                    <!-- gallery Nav -->
                    <div class="gallery__nav wow fadeInRight">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".cat-food">Food</li>
                            <li data-filter=".cat-liveevents">Live Events</li>
                            <li data-filter=".cat-guests">Guests</li>
                            <li data-filter=".cat-other">Other</li>
                        </ul>
                    </div>
                    <!--/ End gallery Nav -->
                    <div class="gallery__inner wow fadeInLeft">
                        <div class="isotop-active row">
                            @foreach($food as $row)
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="{{url('/images/gallery/'.$row->image)}}"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="{{url('/images/gallery/'.$row->image)}}" />
                                </div>
                            </div>
                            @endforeach
                            <!-- <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/DIP_2694.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/DIP_2694.jpg" />
                                </div>
                            </div>
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/DIP_2728.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/DIP_2728.jpg" />
                                </div>
                            </div>
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/DIP_2743.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/DIP_2743.jpg" />
                                </div>
                            </div>
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/DIP_2747.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/DIP_2747.jpg" />
                                </div>
                            </div>
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/DIP_2777.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/DIP_2777.jpg" />
                                </div>
                            </div>
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/DIP_2780.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/DIP_2780.jpg" />
                                </div>
                            </div>
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/DIP_2799.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/DIP_2799.jpg" />
                                </div>
                            </div>
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/DIP_2802.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/DIP_2802.jpg" />
                                </div>
                            </div>
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/DIP_2808.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/DIP_2808.jpg" />
                                </div>
                            </div>
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/DIP_2829.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/DIP_2829.jpg" />
                                </div>
                            </div>
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/DIP_2842.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/DIP_2842.jpg" />
                                </div>
                            </div>
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/DIP_2859.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/DIP_2859.jpg" />
                                </div>
                            </div>
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/DIP_2862.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/DIP_2862.jpg" />
                                </div>
                            </div>
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/DIP_2865.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/DIP_2865.jpg" />
                                </div>
                            </div>
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/DIP_2882.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/DIP_2882.jpg" />
                                </div>
                            </div>
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/DIP_2883.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/DIP_2883.jpg" />
                                </div>
                            </div> -->
                            @foreach($others as $row)
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-other">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="{{url('/images/gallery/'.$row->image)}}"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="{{url('/images/gallery/'.$row->image)}}" />
                                </div>
                            </div>
                            @endforeach
                            <!-- <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-other">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/DIP_2909.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/DIP_2909.jpg" />
                                </div>
                            </div>
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-other">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/DIP_2910.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/DIP_2910.jpg" />
                                </div>
                            </div>
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/DIP_2919.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/DIP_2919.jpg" />
                                </div>
                            </div>
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/DIP_2923.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/DIP_2923.jpg" />
                                </div>
                            </div>
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/DIP_2930.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/DIP_2930.jpg" />
                                </div>
                            </div>
                            
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/eiliv-sonas-aceron-733630-unsplash.jpg"><i
                                            class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/eiliv-sonas-aceron-733630-unsplash.jpg" />
                                </div>
                            </div>

                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/jakub-kapusnak-296881-unsplash.jpg"><i
                                            class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/jakub-kapusnak-296881-unsplash.jpg" />
                                </div>
                            </div>

                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/pexels-photo-1213271.jpg"><i
                                            class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/pexels-photo-1213271.jpg" />
                                </div>
                            </div> -->
                            @foreach($guests as $row)
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-guests">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="{{url('/images/gallery/'.$row->image)}}"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="{{url('/images/gallery/'.$row->image)}}" />
                                </div>
                            </div>
                            @endforeach
                            <!-- <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-guests cat-other">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/pexels-photo-698549.jpg"><i
                                            class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/pexels-photo-698549.jpg" />
                                </div>
                            </div> -->
                            @foreach($liveevent as $row)
                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-liveevents">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="{{url('/images/gallery/'.$row->image)}}"><i
                                            class="fa fa-eye"></i></a>
                                    <img data-u="image" src="{{url('/images/gallery/'.$row->image)}}" />
                                </div>
                            </div>
                            @endforeach
                            <!-- <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-other">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/slider-img1.jpg"><i class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/slider-img1.jpg" />
                                </div>
                            </div>

                            <div class="gallery__col col-lg-3 col-md-4 col-6 mix cat-food">
                                <div class="gallery-link imgtobgcover">
                                    <a class="fancybox" rel="group" href="images/gallery/pexels-photo-262897.jpg"><i
                                            class="fa fa-eye"></i></a>
                                    <img data-u="image" src="images/gallery/thumb/pexels-photo-262897.jpg" />
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection