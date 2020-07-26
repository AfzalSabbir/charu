@extends('frontend.layouts.master')

@section('fav_title', 'Brochure, Business Card, Calendar, Letterhead Pad, Catalog, Booklet, Leaflets and Flyer, Event Ticket, Greeting Card, Folded Card Print, Poster Print, Postcard Print, Envelope, Folded Leaflet Print, Presentation Folder Print, Business Package Print, Menu Print, Sales Sheet, Folder, Hang Tag, Label, Compliment Slip Print, Carbon Less Form Print, Sticker Print, Wall Graphic Print, Screen Print, Transparent Plastic Card, Transparent Visiting Card, Plastic Visiting Card, Printing in Dhaka Bangladesh BD')

@section('metas')
<meta name="description" content= "Printing  Press in Dhaka, Bangladesh. Offset printing or digital printing… Garment Accessories item .. a combination of both?! We offer full-service print production.. Your Online Printing Service" />
<meta name="keywords" content="brochure print, business Card print, calendar print, letterhead Pad print, catalog print, booklet print, leaflet print, flyers print, transparent visiting card print, transparent business card print, event ticket print, greeting card print, folded card print, poster print, envelope print, folded leaflet print, menu print, hang tag print, label print, sticker print, screen print, plastic business card print, transparent plastic print, online printing press, printing, press, offset, printing company in dhaka" />
<link rel="canonical" href="contact-us.html">
<meta name="revisit-after" content="7 days">
@endsection

@section('styles')
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CBioRhyme+Expanded:200,300,400,700,800%7CCutive%7CKadwa:400,700%7CKreon:300,400,700%7CMarko+One%7CPodkova:400,500,600,700,800%7CRhodium+Libre%7CSanchez:400,400i%7CSuez+One%7CUltra%7COxygen+Mono%7COxygen:300,400,700%7CAlex+Brush%7CCaveat+Brush%7CChela+One%7CMaven+Pro:400,500,700,900" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('public/css/contact.css') }}">
@endsection

@section('content')
<section class="myContent">
    <div class="cntct_scnd clearfix">

      <div class="cntct_form">

         <div class= "container">

           <p class="msghd"> <strong> SEND A MESSAGE </strong> </p>

           <div class="sendinput">

               <form method="POST" action="http://formspree.io/nabilgraphics@hotmail.com" class= "msgme" >  <!-- ---------------------- Contact Form ---- -->

                   <input type="text" name="name" placeholder="Name" id="name" >
                   <input type="text" name="_replyto" placeholder="E-mail" id="email" >
                   <input type="text" name="phone" placeholder="Phone" id="phn" >

                   <textarea name="message" rows="2" cols="20"  placeholder="Massage" id="mssge" ></textarea>

                   <br />
                   <br />

                   <input type="submit" name="submit" value="Send">

               </form>

           </div>

       </div>

   </div>

   <div class="cntct_addrss">

    <h2>Hot-Line: +88 0 1868 01 38 58</h2>
    <h2>Hot-Mail: nabilgraphics@hotmail.com</h2>                

</div>
</div>
</section>

@endsection

@section('scripts')
@endsection