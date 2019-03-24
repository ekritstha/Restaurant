@extends('layout.app')
@section('content')
<div class="page page-korean-traditional-foods">
    <!-- page head wrap -->
    <?php $pagename = 'Korean Traditional Foods'; ?>
    @include('inc/page_head')

    <div class="aboutcontent__wrap">
        <div class="aboutcontent">
            <div class="container">
                <div class="row">
                    <!-- about content col -->
                    <div class="aboutcontent__col col-lg-6">
                        <div class="aboutcontent__col--txtcover">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam quidem sint expedita
                                error? Magni ut odit assumenda reiciendis quibusdam recusandae odio deleniti provident
                                eum! Quia similique, sint facere iusto ut reprehenderit tempora deleniti earum amet
                                voluptatibus necessitatibus officia. Ipsum, quaerat!</p>
                        </div>
                    </div>
                    <!-- about content col -->
                    <div class="aboutcontent__col col-lg-6">
                        <div class="aboutcontent__col--imgcover imgtobgcover">
                            <img src="images/eiliv-sonas-aceron-733630-unsplash.jpg" alt="">
                        </div>
                    </div>
                    <!-- about content col -->
                    <div class="aboutcontent__col col-lg-6">
                        <div class="aboutcontent__col--imgcover imgtobgcover">
                            <img src="images/pexels-photo-1731535.jpeg" alt="">
                        </div>
                    </div>
                    <!-- about content col -->
                    <div class="aboutcontent__col col-lg-6">
                        <div class="aboutcontent__col--txtcover">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam ex
                                voluptatum quibusdam hic recusandae suscipit libero consequatur eos voluptates.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus consequuntur expedita
                                ab vero nisi doloribus quidem ducimus tempore, fugiat facilis ipsa mollitia deleniti
                                quisquam recusandae.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection