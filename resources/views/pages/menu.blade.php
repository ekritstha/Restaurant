@extends('layout.app')

@section('content')
	<?php $pagename = 'Menu'; ?>
	@include('inc.page_head')
	<div class="menu__wrap">
        <div class="menu">
            <!-- menu section -->
            <div class="menu__section menu__section-special" id="menu-special">
                <div class="menu__body">
                    <div class="container">
                        <div class="menu__body-title">
                            <h2>Our Specials</h2>
                        </div>
                        <div class="menu__listwrap">
                            <!-- menu list -->
                            <div class="menu__list row">
                                @foreach($menu as $row)
                                <div class="menu__details col-lg-6">
                                    <div class="menu__details-img imgtobgcover"><img src="{{url('/images/gallery/'.$row->image)}}" alt=""></div>
                                    <h5 class="menu__details-title">{!!$row->name!!}</h5>
                                    <span class="menu__details-items">{!!$row->ingredient!!}</span>
                                    {{-- <span class="menu__details-price">{!!$row->price!!}</span> --}}
                                </div>
                                @endforeach
                                <!-- <div class="menu__details col-lg-6">
                                    <div class="menu__details-img imgtobgcover"><img src="images/pexels-photo-698549.jpeg" alt=""></div>
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <div class="menu__details-img imgtobgcover"><img src="images/pexels-photo-698549.jpeg" alt=""></div>
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <div class="menu__details-img imgtobgcover"><img src="images/pexels-photo-698549.jpeg" alt=""></div>
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <div class="menu__details-img imgtobgcover"><img src="images/pexels-photo-698549.jpeg" alt=""></div>
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <div class="menu__details-img imgtobgcover"><img src="images/pexels-photo-698549.jpeg" alt=""></div>
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <div class="menu__details-img imgtobgcover"><img src="images/pexels-photo-698549.jpeg" alt=""></div>
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <div class="menu__details-img imgtobgcover"><img src="images/pexels-photo-698549.jpeg" alt=""></div>
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- menu section -->
            <div class="menu__section menu__section-breakfast" id="menu-breakfast">
                <div class="menu__head">
                    <div class="menu__head-bg imgtobgcover">
                        <img src="images/pexels-photo-262897.jpeg" alt="">
                    </div>
                    <div class="menu__head-title">
                        <h2>Breakfast</h2>
                    </div>
                </div>
                <div class="menu__body">
                    <div class="container">
                        <div class="menu__listwrap">
                            <!-- menu list -->
                            <div class="menu__list row">
                                @foreach($breakfast as $row)
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">{!!$row->name!!}</h5>
                                    <span class="menu__details-items">{!!$row->ingredient!!}</span>
                                    {{-- <span class="menu__details-price">{!!$row->price!!}</span> --}}
                                </div>
                                @endforeach
                                <!-- <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- menu section -->
            <div class="menu__section menu__section-lunch" id="menu-lunch">
                <div class="menu__head">
                    <div class="menu__head-bg imgtobgcover">
                        <img src="images/jakub-kapusnak-296881-unsplash.jpg" alt="">
                    </div>
                    <div class="menu__head-title">
                        <h2>Lunch</h2>
                    </div>
                </div>
                <div class="menu__body">
                    <div class="container">
                        <div class="menu__listwrap">
                            <!-- menu list -->
                            <div class="menu__list row">
                                @foreach($lunch as $row)
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">{!!$row->name!!}</h5>
                                    <span class="menu__details-items">{!!$row->ingredient!!}</span>
                                    {{-- <span class="menu__details-price">{!!$row->price!!}</span> --}}
                                </div>
                                @endforeach
                                <!-- <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- menu section -->
            <div class="menu__section menu__section-dinner" id="menu-dinner">
                <div class="menu__head">
                    <div class="menu__head-bg imgtobgcover">
                        <img src="images/pexels-photo-1213271.jpeg" alt="">
                    </div>
                    <div class="menu__head-title">
                        <h2>Dinner</h2>
                    </div>
                </div>
                <div class="menu__body">
                    <div class="container">
                        <div class="menu__listwrap">
                            <!-- menu list -->
                            <div class="menu__list row">
                                @foreach($dinner as $row)
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">{!!$row->name!!}</h5>
                                    <span class="menu__details-items">{!!$row->ingredient!!}</span>
                                    {{-- <span class="menu__details-price">{!!$row->price!!}</span> --}}
                                </div>
                                @endforeach
                                <!-- <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- menu section -->
            <div class="menu__section menu__section-drinks" id="menu-drinks">
                <div class="menu__head">
                    <div class="menu__head-bg imgtobgcover">
                        <img src="images/eiliv-sonas-aceron-733630-unsplash.jpg" alt="">
                    </div>
                    <div class="menu__head-title">
                        <h2>Drinks</h2>
                    </div>
                </div>
                <div class="menu__body">
                    <div class="container">
                        <div class="menu__listwrap">
                            <!-- menu list -->
                            <div class="menu__list row">
                                @foreach($drink as $row)
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">{!!$row->name!!}</h5>
                                    <span class="menu__details-items">{!!$row->ingredient!!}</span>
                                    {{-- <span class="menu__details-price">{!!$row->price!!}</span> --}}
                                </div>
                                @endforeach
                                <!-- <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div>
                                <div class="menu__details col-lg-6">
                                    <h5 class="menu__details-title">Title #1</h5>
                                    <span class="menu__details-items">Crab / Potatoes / Rice</span>
                                    <span class="menu__details-price">24.5</span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection