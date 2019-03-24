@extends('layout.app')
@section('content')
<body class="page page-liveevent">
    <?php $pagename = 'Live Events'; ?>
    @include('inc/page_head')

    <div class="event__wrap">
        <div class="event">
            <div class="container">
                <div class="row">
                    <!-- event col -->
                    @foreach($event as $row)
                    <div class="event__col col-md-6 col-12">
                        <div class="event__imgcover imgtobgcover">
                            <img src="{{url('/images/gallery/'.$row->image)}}" alt="">
                        </div>
                        <div class="event__cont">
                            <div class="event__details">
                                <span class="event__details-date">{!!$day = date('d', strtotime($row->date))!!} {!!$monthName = date('F', mktime(0, 0, 0, (date('m', strtotime($row->date))), 10));
                                        !!}</span>
                                <span class="event__details-title">{!!$row->event_title!!}</span>
                                <span class="event__details-location">{!!$row->location!!}</span>
                                <span class="event__details-time">{!!$row->time!!}</span>
                            </div>
                            <p>{!!$row->event_details!!}</p>
                        </div>
                    </div>
                    @endforeach
                    <!-- event col -->
                    <!-- <div class="event__col col-md-6 col-12">
                        <div class="event__imgcover imgtobgcover">
                            <img src="images/slider-img1.jpg" alt="">
                        </div>
                        <div class="event__cont">
                            <div class="event__details">
                                <span class="event__details-date">08 Feb</span>
                                <span class="event__details-title">Night Inspiration Party</span>
                                <span class="event__details-location">Tangal</span>
                                <span class="event__details-time">8:00pm - 10:00pm</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem necessitatibus
                                et odit officia eius dolorum facilis ratione provident nemo optio.</p>
                        </div>
                    </div> -->
                    <!-- event col -->
                    <!-- <div class="event__col col-md-6 col-12">
                        <div class="event__imgcover imgtobgcover">
                            <img src="images/slider-img1.jpg" alt="">
                        </div>
                        <div class="event__cont">
                            <div class="event__details">
                                <span class="event__details-date">08 Feb</span>
                                <span class="event__details-title">Night Inspiration Party</span>
                                <span class="event__details-location">Tangal</span>
                                <span class="event__details-time">8:00pm - 10:00pm</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem necessitatibus
                                et odit officia eius dolorum facilis ratione provident nemo optio.</p>
                        </div>
                    </div> -->
                    <!-- event col -->
                    <!-- <div class="event__col col-md-6 col-12">
                        <div class="event__imgcover imgtobgcover">
                            <img src="images/slider-img1.jpg" alt="">
                        </div>
                        <div class="event__cont">
                            <div class="event__details">
                                <span class="event__details-date">08 Feb</span>
                                <span class="event__details-title">Night Inspiration Party</span>
                                <span class="event__details-location">Tangal</span>
                                <span class="event__details-time">8:00pm - 10:00pm</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem necessitatibus
                                et odit officia eius dolorum facilis ratione provident nemo optio.</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection