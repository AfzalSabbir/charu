@extends('frontend.layouts.master')

@section('fav_title', 'Best Printing Service Offer | Printing Press in Dhaka | NABIL GRAPHICS')

@section('metas')
    <meta name="keywords" content="print dhaka, design dhaka, print offer, promo offer, business offer, visiting card, business card, brochure, brochure print, brochure print in dhaka bd, catalog print, booklet print, leaflet print, flyers print, online printing press, printing, press, offset, printing company in dhaka, printing bangladesh, printing bd" />
    <meta name="description" content="We offer 2019 Diary and Calendar Print, Brochure Print, Letterhead Print and many more. See our print offer for your business promotion." />
    <link rel="canonical" href="{{ route('promo_offer') }}">
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('public/css/promo-offer.css') }}">
@endsection

@section('content')

    <!-- ============== Body Start ========== -->

    <div class="promoHead text-center">
        <h1>Promotional Offer</h1>
    </div>

    <section class="promoBody container">

        <h4 class="promoTexttop">We offer 2019 Diary and Calendar Print, Brochure Print, Letterhead Print and many more.
            <br>
            <br> See our print offer for your business promotion.<br><br> We offer Intelligent printing services for companies who are aware of their brand image and want to do everything they can to improve and promote themselves in a brand-consistent way. <br><br> What are Intelligent printing services ?! <br><br> It means we don’t just sell you ink on paper-we provide a printing solution that has thought behind it because we start with your end-goal in mind.<br><br> We'll put our 10 years of printing and marketing expertise to work for you-and your business.<br><br> Large offset printing projects…small digital printing jobs…custom mailers…custom packaging. No matter how large or small, simple or complex your printing needs, when you trust your printing to NABIL GRAPHICS, you can count on a stress-free experience and a finished product that truly soars above.<br><br> Contact us today for a free consultation.<br> We are happy to assist you.

        </h4>

        <div class="promoBar clearfix">

            <div class="promoTab clearfix">
                <div class="barPic">

                    <img src="{{ asset('public/img/printing-offer/calendar-print-dhaka.jpg') }}" alt="" />
                </div>
                <div class="barDetail">
                    <h1>6 Page 15/20 inch Wall Calendar Only 45 Taka (Per Pcs)</h1>
                    <p>*** Minimum Order 1000 Pcs</p>
                    <p>Full Color 6 Page | Extra 1 Cover Page one Color</p>
                    <p>150 GSM Art Paper | 70 Gsm Offset Cover Page | Wire-O Binding</p>
                    <a class="barButton" href="2019-wall-calendar-printing-offer.html">Click for Details</a>
                </div>
            </div>

            <div class="promoTab clearfix">
                <div class="barPic">

                    <img src="{{ asset('public/img/printing-offer/desk-calendar-print-dhaka.jpg') }}" alt="" />
                </div>
                <div class="barDetail">
                    <h1>6 Page Full Color 5 X 8.5 inch Desk Calendar Only 70 Taka.</h1>
                    <p>** Minimum Order 1000 Pcs</p>
                    <p>300 GSM Art Card | Both Side Print (one Side One Moth) | Hard Gel with One Color Solid print with Matt Lamination | Wire-O Binding</p>
                    <a class="barButton" href="2019-desk-calendar-printing-offer.html">Click for Details</a>
                </div>
            </div>

            <div class="promoTab clearfix">
                <div class="barPic">

                    <img src="{{ asset('public/img/printing-offer/brochure-print-dhaka.jpg') }}" alt="" />
                </div>
                <div class="barDetail">
                    <h1>12 Page Brochure Only 80 Taka (Per Pcs)</h1>
                    <p>Visit our brochure print offer package.</p>
                    <p>**16 Page Brochure Only 100 Taka (Per Pcs)</p>
                    <p>**Minimum Order 500 Pcs</p>
                    <a class="barButton" href="brochure-printing-offer.html">Click for Details</a>
                </div>
            </div>

            <div class="promoTab clearfix">
                <div class="barPic">

                    <img src="{{ asset('public/img/printing-offer/letterhead-pad-print-offer-nabil-graphics-dhaka.jpg') }}" alt="" />
                </div>
                <div class="barDetail">
                    <h1>We Offer 1000 Letterhead Pad Print Only 2800.00 Taka.</h1>
                    <p>120 GSM Foreign Offset Paper | Multi Color Print</p>
                    <a class="barButton" href="letterhead-pad-printing-offer.html">Click for Details</a>
                </div>
            </div>


            <div class="promoTab clearfix">
                <div class="barPic">
                    <img src="{{ asset('public/img/printing-offer/visiting-card-print-only-300tk.jpg') }}" alt="" />
                </div>
                <div class="barDetail">
                    <h1>1000 pcs Visiting Card Only 300 Taka.</h1>
                    <p>Visit our visiting card offer package.</p>
                    <a class="barButton" href="visiting-card-printing-offer.html">Click for Details</a>
                </div>
            </div>
        </div>

        <div class="promoSidebar">

            <div class="sideFrst">
                <img src="{{ asset('public/img/printing-service-in-dhaka.svg') }}" alt="" />
                <br><br>

                <h3><strong>&nbsp&nbsp Most Populer</strong></h3>

                <hr>

                <p>Brochure Printing Offer: <a href="brochure-printing-offer.html">Brochure Printing Offer</a></p>

                <p>2019 Calendar Printing Offer: <a href="2019-calendar-printing-offer.html">2019 Calendar Printing Offer</a></p>

                <p>2019 Diary Printing Offer: <a href="comming-soon.html">2019 Diary Printing Offer</a></p>

                <p>2019 Desk Calendar Printing Offer: <a href="2019-desk-calendar-printing-offer.html">2019 Desk Calendar Printing Offer</a></p>

                <p>2019 Wall Calendar Printing Offer: <a href="2019-wall-calendar-printing-offer.html">2019 Wall Calendar Printing Offer</a></p>

                <p>Visiting Card Printing Offer: <a href="visiting-card-printing-offer.html">Visiting Card Printing Offer</a></p>

                <p>Letterhead Pad Printing Offer: <a href="letterhead-pad-printing-offer.html">Letterhead Pad Printing Offer</a></p>

                <br><br>

            </div>

        </div>


    </section>

@endsection

@section('scripts')
@endsection