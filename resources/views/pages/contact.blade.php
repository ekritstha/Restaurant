@extends('layout.app')
@section('content')
<div class="page page-contact">
    <!-- page head wrap -->
    <?php $pagename = 'Contact Us'; ?>
    @include('inc.page_head')

    <!-- contact -->
    <div class="contact__wrap">
        <div class="contact">
            <div class="container">
                <div class="row">
                    <div class="contact__col contact__col-text col-12 text-center">
                        <div class="contact__text contact__text-large">
                            <h2>OUR CUSTOMER'S SATISFACTION IS OUR GREATEST CONCERN</h2>
                            <p>We welcome you to strength this relation to much pleasent and find Korean Dinning
                                experience.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- about hp col -->
                    <div class="contact__col contact__col-img col-lg-7">
                        <div class="contact__imgrow row">
                            <div class="contact__imgcol col-12">
                                <div class="contact__imgcover imgtobgcover">
                                    <img src="images/pexels-photo-262897.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- about hp col-->
                    <div class="contact__col contact__col-cont col-lg-5">
                        <div class="contact__box">
                            <div class="contact__cont rellax" data-rellax-speed="-1" data-rellax-percentage="-1">
                                <span class="contact__cont-welcome">Get in Touch</span>
                                <h1 class="contact__cont-title">Contact</h1>
                                <span class="contact__cont-subtitle">
                                    <span><a href="tel:01-4421711"><i class="fa fa-phone"></i> 01-4421711</a></span>
                                    <span><a href="mailto:sampleemail@email.com"><i class="fa fa-envelope"></i>
                                            sampleemail@email.com</a></span>
                                    <span><i class="fa fa-map-marker-alt"></i> Naxal, Tangal</span>
                                </span>
                            <form action="{{url('contact')}}" method="POST" class="row contact__form">
                                {{ csrf_field()}}
                                    <div class="formfield col-md-6 col-12">
                                        <input type="text" name="name" placeholder="Name*" required>
                                    </div>
                                    <div class="formfield col-md-6 col-12">
                                        <input type="tel" name="phone" placeholder="Phone*" required>
                                    </div>
                                    <div class="formfield col-12">
                                        <textarea name="message" placeholder="Message*" required></textarea>
                                    </div>
                                    <div class="formfield formfield-submit col-12">
                                        <input type="submit" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact__map" id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.0664430202087!2d85.33115986919617!3d27.71654074372639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3e2695fd93eb605e!2sHankook+Sarang+Korean+Restaurant!5e0!3m2!1sen!2snp!4v1547620514150"
            frameborder="0" allowfullscreen></iframe>
    </div>
</div>
@endsection