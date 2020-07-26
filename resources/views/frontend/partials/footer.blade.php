<div id="OrangeBorder"></div>
@php
    $setting = \App\Models\Setting::where('status', 1)->first();
@endphp
<section class="footer">
    <div class="ftrwidth">

        <div class="meta ftr_prdcts">

            <h2 class="ftr_tittle">About Us</h2>
            <div style="width: 200px; margin-bottom: 20px;">
               <p>{{$setting->footer_about}}</p> 
            </div>



            <div class="footer_follow">

                <a href="{{asset($setting->facebook)}}" target="_blank"> <img src="{{ asset('public/img/social-icon/footer/printing-service-in-fb.svg') }}" alt="printing service" title="Printing Service in Dhaka" /> </a>

                <a href="{{asset($setting->linkedin)}}" target="_blank"> <img src="{{ asset('public/img/social-icon/footer/printing-service-in-linkedin.svg') }}" alt="printing service" title="Printing Service in Dhaka" /> </a>

                <a href="{{asset($setting->youtube)}}" target="_blank"> <img src="{{ asset('public/img/social-icon/footer/printing-service-in-you-tube.svg') }}" alt="printing service" title="Printing Service in Dhaka" /> </a>

                <a href="{{asset($setting->twitter)}}" target="_blank"> <img src="{{ asset('public/img/social-icon/footer/printing-service-in-twitter.svg') }}" alt="printing service" title="Printing Service in Dhaka" /> </a>


            </div>

        </div>

        <div class="meta ftrinfo">
            <h2 class="ftr_tittle">Page Links</h2>
            <div class="inform linkz">
                <ul>
                    <li><a href="{{ route('about_us') }}" target="_blank"><span><i class="fa fa-angle-double-right"></i>&nbsp;</span>About Us</a></li>
                    <li><a href="{{Route('our_services')}}" class="disabled" target="_blank"><span><i class="fa fa-angle-double-right"></i>&nbsp;</span> Service</a></li>
                    <li><a href="#" class="disabled" target="_blank"><span><i class="fa fa-angle-double-right"></i>&nbsp;</span>Product</a></li>
                    <li><a href="#" class="disabled" target="_blank"><span><i class="fa fa-angle-double-right"></i>&nbsp;</span>Image</a></li>
                </ul>
            </div>
        </div>

        <div class="meta ftrcntct">
            <h2 class="ftr_tittle">Contact Info</h2>

            <div class="ftr_nmbr">
                <p><i class="fa fa-map-marker fa-2x" title="Hotline"> </i><span class="absb"> &nbsp;&nbsp;ChotoBazar, Netrokona</span></p>
                <p><i class="fa fa-phone-square fa-2x" title="Hotline"> </i><span class="absb"> &nbsp;{{ $setting->mobile1 }}</span></p>
                <p><i class="fa fa-phone-square fa-2x" title="Hotline"> </i><span class="absb"> &nbsp;{{ $setting->mobile2 }}</span></p>
                {{-- <p><i class="fa fa-phone-square fa-2x" title="Hotline"> </i><span class="absb"> &nbsp;+88 0 1992 61 00 89</span></p> --}}
                {{-- <p class="tumi">Sat-Wed: 9am - 7pm</p> --}}
            </div>
            <br>
            <div class="ftr_mail">
                <p><i class="fa fa-envelope fa-2x" title="NABIL GRAPHICS HotMail"> </i><span class="mailta"> &nbsp; {{ $setting->email }}</span></p>

            </div>

            <address>
                <p>OR use our user-friendly <a href="{{ route('contact_us') }}">Contact Form</a> </p>
                <p style="padding-top:8px; padding-bottom:4px;">Office: {!! $setting->office  !!}</p>
                <p style="padding-top:4px; padding-bottom:4px;">Factory: {!! $setting->factory  !!}</p>
            </address>
            
        </div>

        <div class="clear"></div>

    </div>
    <!-- mycontainer -->
</section>


<div class="bottom_link">

    <p>Powered by <a class="linkFotter" href="#" class="disabled">Freelance IT Lab</a></p>

</div>