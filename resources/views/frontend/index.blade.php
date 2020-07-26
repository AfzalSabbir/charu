@extends('frontend.layouts.master')

@section('fav_title', 'Printing Services | Calendar Print | Diary Print | Notebook Print | Brochure Print | Catalog Print | Hang Tag and Label Print | Printing Press in Dhaka Bangladesh BD')

@section('metas')
    <meta name="keywords" content="print, printing service, printing service in dhaka bd, print press company in dhaka, printing press, online print, offset press, brochure print, business Card print, calendar print, letterhead Pad print, catalog print, booklet print, leaflet print, flyers print, transparent visiting card print, transparent business card print, event ticket print, greeting card print, folded card print, poster print, envelope print, folded leaflet print, menu print, hang tag print, label print, sticker print, screen print, plastic business card print, transparent plastic print, online printing press, offset, printing company in dhaka" />
    <meta name="description" content="Top Printing Service Provider in Dhaka, Bangladesh. Offset Print, Digital Print, Screen Print, Garments Accessories and  All kinds of Printing Solution." />
    <link rel="canonical" href="index.html">
    <link rel="canonical" href="index.html" />
@endsection

@section('styles')
    {{-- <link rel="stylesheet" href="{{ asset('css/animate.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/aos.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('public/css/promo-offer.css') }}">
    <style>
        .dpc_pera {
            border-radius: 50px 50px 20px 20px;
            border: 1px solid #f00;
        }
    </style>
@endsection

@section('content')



    <div class="bigpic eki animated fadeInUp">
        <img width="100%" height="600" src="{{ asset($setting->banner) }}" alt="Banner" title="Charu Banner">
    </div>

    <div class="bigpicFormobile eki animated fadeInUp">
        <img src="{{ asset('public/img/nabil-graphics-printing-dhaka.png') }}" alt="Printing in Dhaka" title="Online Printing Service">
    </div>


    <section class="dpc">

        <div class="dpc_pera" data-aos="fade-right" data-aos-duration="2000">
            <h3>Design</h3>
            <p>Innovation and Attraction is our main concern in Graphics Designing. <br><br> Our team of experienced Graphic Designers work to your brief to create effective Designs and Concepts for your Company.
                <br><br> We begin and end with collaboration. Bring us your ideas, your challenges, your goals. We will work with you to find the best way to tell your story and develop your brand. After collaborating with you to determine a direction, our team gets to work doing what we do best - creating great design.
                <br><br> Good design is fundamental to the success of a business. We are here to help your business grow through eye catching design, branding, and creative thinking.</p>
        </div>

        <div class="dpc_pera" data-aos="fade-up" data-aos-duration="2000">
            <h3>Printing</h3>
            <p>We are a division of U-Printing Network, with offices and facilities based out of Dhaka, BD. Our long-term staff is knowledgeable, experienced and friendly. We are always ready to answer your questions and be of assistance. NABIL GRAPHICS has a long successful history dedicated toward creating and managing brilliant print products to help effectively communicate your message.
                <br><br> We offer Intelligent printing services for companies who are aware of their brand image and want to do everything they can to improve and promote themselves in a brand-consistent way.
                <br><br> What are Intelligent printing services ?!
                <br> It means we don’t just sell you ink on paper-we provide a printing solution that has thought behind it because we start with your end-goal in mind.</p>
        </div>

        <div class="dpc_pera" data-aos="fade-left" data-aos-duration="2000">
            <h3>Consulting</h3>
            <p>We'll put our 10 years of printing and marketing expertise to work for you-and your business.<br><br> These days, lots of companies can offer printing services. But the fact is, it’s just not enough. That’s why NABIL GRAPHICS wants to make your marketing campaigns as efficient-and effective-as possible.
                <br><br> Large offset printing projects…small digital printing jobs…custom mailers…custom packaging. No matter how large or small, simple or complex your printing needs, when you trust your printing to NABIL GRAPHICS, you can count on a stress-free experience and a finished product that truly soars above.
                <br><br> Contact us today for a free consultation.</p>
        </div>

    </section>


    <!-- EXPERIENCE Start -->

    <section class="experience clearfix">

        <div class="exMedia">
            <a href="printing-service.html" title="" target="_blank"><img src="{{ asset('public/img/printing-press-dhaka.svg') }}" alt="printing press" /></a>
        </div>


        <div class="exLeft" data-aos="fade-right" data-aos-duration="2000">

            <h1>10 YEARS OF<br>PRINTING EXCELLENCE!!</h1>

            <hr class="style13">

            <p class="exText">For over 10 years we've catered to small and medium sized businesses nationwide. We offer advanced printing solutions to solve your most complicated challenges. Whether it be Offset, Screen or digital printing, we can print as little as 1 to as many as you can imagine. We offer faster turnaround with minimal human error and lower overhead cost. This allows us to provide customers with consistently high-quality printing at the lowest possible prices.</p>

            <br><br>

            <a href="about-us.html" title="More About Our Printing Service" target="_blank" class="exButton">Learn More</a>

        </div>

        <div class="exRight" data-aos="fade-left" data-aos-duration="2000">
            <a href="printing-service.html" title="Nabil Graphics and Printing Service" target="_blank">
                <img src="{{ asset('public/img/printing-press-dhaka.svg') }}" alt="printing press"/>
            </a>
        </div>

    </section>



    <!-- Shop Item Gallery Start Now -->

    <section class="productGroup clearfix">

        <div class="specialoffr" data-aos="fade-up" data-aos-duration="2000">

            <div class="feature">
                <p><span>SPECIALS OFFERS</span></p>
            </div>

            <div class="spcialss-dsktop"><a href="visiting-card-printing-offer.html" target="_blank"><img src="{{ asset('public/img/spcialss.jpg') }}" alt="visiting card print dhaka" /></a></div>
            <div class="spcialss-mbl"><a href="visiting-card-printing-offer.html" target="_blank"><img src="{{ asset('public/img/spcialss-mbl.jpg') }}" alt="visiting card print dhaka" /></a></div>

        </div>

        <div class="groupItem clearfix">

            <div class="feature" data-aos="fade-down" data-aos-duration="2000">
                <p><span>FEATURED PRODUCTS</span></p>
            </div>
            @foreach($products as $product)
                @if($product->type == 2)
                    <div class="prdctItem" data-aos="fade-right" data-aos-duration="2000" title="{{ $product->name }}">
                        {{-- <a href="printing-service-in-dhaka/brochure-printing.html" target="_blank"> --}}
                            <div class="prdctImg">
                                <img src="{{ asset($product->image) }}" width="366" height="244" alt="Featured - {{ $product->name }}" />
                            </div>
                            <div class="prdctTitle">
                                <h2>{{ $product->name }}</h2>
                            </div>
                        {{-- </a> --}}
                    </div>
                @endif
            @endforeach
        </div>
        <!--==================== productiTem End===-->


        <div class="groupTwo clearfix">

            <div class="feature" data-aos="fade-down" data-aos-duration="2000">
                <p><span>MORE FROM NABIL GRAPHICS</span></p>
            </div>

            @foreach($products as $product)
                @if($product->type == 1)
                    <div class="twoItem" data-aos="fade-right" data-aos-duration="2000" title="{{ $product->name }}">
                        <a href="pen-print.html" target="_blank">
                            <div class="prdctImg">
                                <img src="{{ asset($product->image) }}" width="579" height="386" alt="General - {{ $product->name }}" />
                            </div>
                            <div class="prdctTitle">
                                <h2>{{ $product->name }}</h2>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </section>



    <!-- Shop Item Gallery END -->


    <section class="propose clearfix">

        <div class="mycol" data-aos="fade-right" data-aos-duration="2000">
            <div class="proposal">
                <img src="{{ asset('public/img/iconbulb.svg') }}" alt="Graphics Design and Printing Press Service in Dhaka">
                <h2><strong>What’s you Want ?!</strong></h2>
                <p>We can help with your all printing needs. We are printing firm that can provide you with amazing printing services suitable to any product requirement or budget. </p>
            </div>

            <a href="about-us.html"><span class="button">About Us</span></a>
        </div>

        <div class="mycol" data-aos="fade-up" data-aos-duration="2000">
            <div class="proposal">
                <img src="{{ asset('public/img/iconfire.svg') }}" alt="Graphics Design and Printing Press Service in Dhaka">
                <h2><strong>Advanced Printing Solutions!</strong></h2>
                <p>We don’t just sell you ink on paper-we provide a printing solution that has thought behind it because we start with your end-goal in mind.</p>
            </div>

            <a href="our-services.html"><span class="button">Our Service</span></a>
        </div>

        <div class="mycol" data-aos="fade-left" data-aos-duration="2000">
            <div class="proposal">
                <img src="{{ asset('public/img/icobrickfire.svg') }}" alt="Graphics Design and Printing Press Service in Dhaka">
                <h2><strong>Guarantee</strong></h2>
                <p>The job is not complete until you are completely satisfied. if you are not satisfied, we will take action to correct any flaws or omissions. </p>
            </div>

            <a href="contact-us.html"><span class="button">Contact Us</span></a>
        </div>

    </section>







    <!-- ==============================  Hot Service Area Start -->


    <section class="hotservice" style="background-image:url(img/grtsrvcbg.jpg); background-repeat:repeat; width:100%; height:100%; padding-bottom:60px; ">

        {{-- <div class="hothead">
            <p class="hotphd">Some Hot Service</p>
            <!-- <p class="hotptxt">Yapp, NABIL GRAPHICS Balances Creative Abilities in Graphics Design with a Practical Knowledge of the Printing Industry.</p> -->
        </div>--}}

        <div class="hotarea text-center">

            <div class="hotcol">
                <div class="hotinfo">

                    <img src="{{ asset('public/img/hotinfoimg1.png') }}" alt="Graphics Design and Printing Press Service in Dhaka" title="Printing Service in Dhaka">

                    <h3><strong>GRAPHICS DESIGN</strong></h3>

                    <p>Taking care of your graphic design needs from concept to print. Simple, effective design.</p>

                </div>
            </div>

            <div class="hotcol">
                <div class="hotinfo">

                    <img src="{{ asset('public/img/hotinfoimg2.png') }}" width="366" height="244" alt="Graphics Design and Printing Press Service in Dhaka" title="Printing Service in Dhaka">

                    <h3><strong>BRAND IDENTITY</strong></h3>

                    <p>Concept and design of all visual aspects that form your business or product brand.</p>

                </div>
            </div>

            <div class="hotcol">
                <div class="hotinfo">

                    <img src="{{ asset('public/img/hotinfoimg3.png') }}" alt="Graphics Design and Printing Press Service in Dhaka" title="Printing Service in Dhaka">

                    <h3><strong>COMMERCIAL PHOTOGRAPHY</strong></h3>

                    <p>Promote or sell products and services with effective imagery.</p>

                </div>
            </div>

            <div class="hotcol">
                <div class="hotinfo">

                    <img src="{{ asset('public/img/hotinfoimg4.png') }}" alt="Graphics Design and Printing Press Service in Dhaka" title="Printing Service in Dhaka">

                    <h3><strong>COMMERCIAL PRINTING</strong></h3>

                    <p>High quality short and long-run commercial printing – on time, within budget.</p>

                </div>
            </div>

            <div class="hotcol">
                <div class="hotinfo">

                    <img class="img-responsive" src="{{ asset('public/img/hotinfoimg5.png') }}" alt="Graphics Design and Printing Press Service in Dhaka" title="Printing Service in Dhaka">

                    <h3><strong>COPY SERVICES</strong></h3>

                    <p>Fast, high-quality colour copies. Convenient local pickup and drop-off available.</p>

                </div>
            </div>

            <div class="hotcol">

                <div class="hotinfo">

                    <img src="{{ asset('public/img/hotinfoimg6.png') }}" alt="Graphics Design and Printing Press Service in Dhaka" title="Printing Service in Dhaka">

                    <h3><strong>OFFICE SERVICES</strong></h3>

                    <p>Binding and document finishing. Corporate Newsletters. Scanning and laminating.</p>

                </div>
            </div>
        </div>

    </section>



    <div class="hotline" style="background-image:url({{ asset('public/img/hotlinepicimg.png') }});">
        <p class="hotcall"> Hotline: {{ $setting->mobile }}</p>
    </div>

@endsection

@section('scripts')
@endsection
