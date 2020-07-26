<div class="topbar">

    <div class="leftbar">
        <a href="#" title="Printing Press in Dhaka Bangladesh">
            <li class="baritem"><i class="fa fa-map-marker"> </i>&nbsp;167 Fokirapool, Motijheel, Dhaka. BD. </li>
        </a>
        <a href="mailto:nabilgraphics@hotmail.com" target="_blank" title="NABIL GRAPHICS HotMail">
            <li class="baritem"> <i class="fa fa-envelope"> </i> nabilgraphics@hotmail.com </li>
        </a>
        <a href="#" title="Printing Press-Hotline">
            <li class="baritem"> <i class="fa fa-phone-square"> </i>&nbsp;+88 0 1992 61 00 89</li>
        </a>
    </div>

    {{-- <div class="rightbar">
        <a href="#" title="Live Chat With Printing Press Customer Care">
            <li class="baritem"> <i class="fa fa-comments"> </i>&nbsp;Live Chat</li>
        </a>
        <a href="#" title="Login/Sign Up for Printing Support">
            <li class="baritem"><i class="fa fa-sign-in"> </i>&nbsp;Login/Register</li>
        </a>
    </div> --}}

</div>

<div class="topbar_follow r-0">

    {{-- <a href="https://plus.google.com/+NabilGraphics" target="_blank"> <img src="{{ asset('public/img/social-icon/top/printing-service-in-google-plus.svg') }}" alt="printing service" title="Follow us on Google Plus" /> </a> --}}
    <a href="https://www.facebook.com/nabilgraphics/" target="_blank"> <img src="{{ asset('public/img/social-icon/top/printing-service-in-fb.svg') }}" alt="printing service" title="Follow us on Facebook" /> </a>
    <a href="https://www.linkedin.com/company/nabilgraphics" target="_blank"> <img src="{{ asset('public/img/social-icon/top/printing-service-in-linkedin.svg') }}" alt="printing service" title="Follow us on LinkedIN" /> </a>
    <!--        <a href="https://nabilgraphics.tumblr.com/" target="_blank"> <img src="{{ asset('public/img/social-icon/top/printing-service-in-tumblr.svg') }}" alt="printing service" title="Printing Service in Dhaka" /> </a>-->
    <!--        <a href="http://nabilgraphics.blogspot.com/" target="_blank"> <img src="{{ asset('public/img/social-icon/top/printing-service-in-blogger.svg') }}" alt="printing service" title="Printing Service in Dhaka" /> </a>-->
    <!--        <a href="https://nabilgraphics.tumblr.com/" target="_blank"> <img src="{{ asset('public/img/social-icon/top/printing-service-in-behence.svg') }}" alt="printing service" title="Printing Service in Dhaka" /> </a>-->
    <a href="https://www.youtube.com/channel/UCfDXWjRUc1Z5qcw1ka1UzqQ" target="_blank"> <img src="{{ asset('public/img/social-icon/top/printing-service-in-you-tube.svg') }}" alt="printing service" title="Follow us on TouTube" /> </a>
    <!--        <a href="https://nabilgraphics.wordpress.com/" target="_blank"> <img src="{{ asset('public/img/social-icon/top/printing-service-in-wordpress.svg') }}" alt="printing service" title="Printing Service in Dhaka" /> </a>-->
    <a href="https://twitter.com/NabilGraphics" target="_blank"> <img src="{{ asset('public/img/social-icon/top/printing-service-in-twitter.svg') }}" alt="printing service" title="Follow us on Twitter" /> </a>
    <!--        <a href="http://www.nabilgraphics.com" target="_blank"> <img src="{{ asset('public/img/social-icon/top/printing-service-in-skype.svg') }}" alt="printing service" title="Printing Service in Dhaka" /> </a>-->
    <!--        <a href="http://www.nabilgraphics.com" target="_blank"> <img src="{{ asset('public/img/social-icon/top/printing-service-in-pinterest.svg') }}" alt="printing service" title="Printing Service in Dhaka" /> </a>-->

</div>

<div class="home clearfix">

    <div class="brand">
    {{-- <div class="brand  animated bounceInRight"> --}}
        @php
        $logo = DB::table('settings')->first();
        @endphp
        <a href="index.html" target="_blank" title="Printing Press in Dhaka Bangladesh"><img src="{{ asset($logo->logo) }}" alt="printing service" /></a>
    </div>

    <div class="leftside">
        <div class="hilight inline">
            <ul>
                <li class="light_a"><strong>Full Color</strong></li>
                <li class="light_b"><strong>High Quality</strong></li>
                <li class="light_c"><strong>Fastest Performance</strong></li>
                <li class="light_d"><strong>Best Printing Services</strong></li>
                <li class="light_e"><strong>Satisfaction Guarantee</strong></li>
            </ul>
        </div>

        <div class="certified inline">
            <div class="issue clearfix">
                <img class="issue_a" src="{{ asset('public/img/printing-guarantee/luxury.jpg') }}" alt="printing service" />
                <img class="issue_b" src="{{ asset('public/img/printing-guarantee/guarantee3.png') }}" alt="printing service" />
            </div>
        </div>
    </div>
</div>


<!-- Menu Start -->
<div class="navmenu eki">
{{-- <div class="navmenu eki animated fadeInUp"> --}}
    <!--shudu index eii animation thakbe....-->
    <ul class="navcan">
        <li><a class="{{ \Route::current()->getName() == 'index' ? 'active' : '' }}" href="{{ route('index') }}">Home</a></li>
        <li><a class="{{ \Route::current()->getName() == 'about_us' ? 'active' : '' }}" href="{{ route('about_us') }}">About Us</a></li>
        <li><a class="{{ \Route::current()->getName() == 'our_services' ? 'active' : '' }}" href="{{ route('our_services') }}">Our Services</a></li>
        <li><a class="{{ \Route::current()->getName() == 'printing_service' ? 'active' : '' }}" href="{{ route('printing_service') }}">Printing Service</a></li>
        <li><a class="{{ \Route::current()->getName() == 'promo_offer' ? 'active' : '' }}" href="{{ route('promo_offer') }}">Promo Offer</a></li>
        <li><a class="{{ \Route::current()->getName() == 'terms_and_condition' ? 'active' : '' }}" href="{{ route('terms_and_condition') }}">Terms and Condition</a></li>
        <li><a class="{{ \Route::current()->getName() == 'comming_soon' ? 'active' : '' }}" href="{{-- route('comming_soon') --}}#">Blog</a></li>
        <li><a class="{{ \Route::current()->getName() == 'employee' ? 'active' : '' }}" href="{{ route('employee') }}">Employee</a></li>
        <li><a class="{{ \Route::current()->getName() == 'contact_us' ? 'active' : '' }}" href="{{ route('contact_us') }}">Contact Us</a></li>
    </ul>
</div>
<!-- Toogle Menu Start -->

<div class="menuToogle">

    <div class="aqaq clearfix">
        <div class="aqright">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="aqleft">
            <p>Menu</p>
        </div>
    </div>


    <div class="navToogle">
        <ul class="navcanToogle">
            <li><a class="active" href="index.html">Home</a></li>
            <!-- ---------.html gulo uthai dici cz extension jatee na show koree.. its run only server... -->
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="our-services.html">Our Services</a></li>
            <li><a href="printing-service.html">Printing Service</a></li>
            <li><a href="promo-offer.html">Promo Offer</a></li>
            <li><a href="terms-and-condition.html">Terms and Condition</a></li>
            <li><a href="comming-soon.html">Blog</a></li>
            <li><a href="contact-us.html">Contact us</a></li>
        </ul>

    </div>

</div>
<!-- Toogle Menu End -->
<!--============ Menu End -->