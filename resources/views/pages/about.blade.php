@extends('layout.app')

@section('content')
<div class="page page-about">
    <!-- page head wrap -->
    <?php $pagename = 'About Us'; ?>
    @include('inc.page_head')

    <!-- about -->
    <div class="about__wrap">
        <div class="about">
            <div class="row about__row about__row-1">
                <!-- about col -->
                <div class="about__col about__col-img col-lg-6 dis-md">
                    <div class="about__imgcover imgtobgcover">
                        <img src="images/slider-img1.jpg" alt="">
                    </div>
                </div>
                <!-- about col -->
                <div class="about__col about__col-text col-lg-6">
                    <div class="about__text">
                        <h5>About</h5>
                        <h2>Hankook Sarang</h2>
                        <p>Serving Century old culture of authentic nutritions and sumptuous korea culinary experinece
                            at our customer's dinner plates Hankook Sarang is more than just any other Korean
                            restaurant in the country.</p>
                        <p>Hankook Sarang, which means "One Korea- Love" inspired its founders
                            for the simplicity, nutritious and sharing culture of Korean dinning.
                            determined to promote this belief in his love for the Korean Gastronomy
                            we started our first korean restaurant venture in 2002. The conscious change in
                            healthy eating habits of growing Nepalese popolation and the penetration of the K-POP
                            Hallyu culture among
                            the global youngsters has also successfully penetrated the nepalese society making Korean
                            food popular.</p>
                    </div>
                </div>
            </div>
            <div class="row about__row about__row-2">
                <!-- about col -->
                <div class="about__col about__col-text about__col-text-alt col-lg-6">
                    <div class="about__text">
                        <p>Even more the freshness and nutritious value of the Bhanchan-side dishes together with the
                            healthy benefit of fermented Kimchi prepared in the Korea serving has greater valur for
                            health and economic spending.</p>
                        <p>Above all Korean dining is an experience in itself eith more engaging and sharing culture
                            put into the table with love.</p>
                        <p>To bring forth our commitment for our customers for our customer's complete satisfaction
                            Hankook Sarang is now ready to serve in a much more Family Friendly spacious Property with
                            Korean Traditional and Cultural infused setting and ambience in Tangal.</p>
                    </div>
                </div>
                <!-- about col -->
                <div class="about__col about__col-img col-lg-6">
                    <div class="about__imgcover imgtobgcover">
                        <img src="images/pexels-photo-1213271.jpeg" alt="">
                    </div>
                </div>
            </div>
            <div class="row about__row-3">
                <div class="about__col about__col-text col-12 text-center">
                    <div class="about__text about__text-large">
                        <h2>OUR CUSTOMER'S SATISFACTION IS OUR GREATEST CONCERN</h2>
                        <p>We welcome you to strength this relation to much pleasent and find Korean Dinning
                            experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- team -->
    <div class="team__wrap">
        <div class="team">
            <div class="container">
                <div class="team__head">
                    <h2>Meet Our Team</h2>
                </div>
                <div class="team__body">
                    <div class="row">
                        <!-- team col -->
                        @foreach($staff as $row)
                        <div class="team__col col-lg-4 col-md-6 col-12">
                            <div class="team__box">
                                <div class="team__imgcover imgtobgcover">
                                    <img src="{{url('/images/gallery/'.$row->image)}}" alt="">
                                </div>
                                <div class="team__list">
                                    <span class="team__list-name">{!!$row->name!!}</span>
                                    <span class="team__list-title">{!!$row->designation!!}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- team col -->
                        {{-- <div class="team__col col-lg-4 col-md-6 col-12">
                            <div class="team__box">
                                <div class="team__imgcover imgtobgcover">
                                    <img src="images/staff/team_2.jpg" alt="">
                                </div>
                                <div class="team__list">
                                    <span class="team__list-name">Scara Carlton</span>
                                    <span class="team__list-title">Co-Manager</span>
                                </div>
                            </div>
                        </div>
                        <!-- team col -->
                        <div class="team__col col-lg-4 col-md-6 col-12">
                            <div class="team__box">
                                <div class="team__imgcover imgtobgcover">
                                    <img src="images/staff/team_3.jpg" alt="">
                                </div>
                                <div class="team__list">
                                    <span class="team__list-name">Jake Rodio</span>
                                    <span class="team__list-title">Staff</span>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection