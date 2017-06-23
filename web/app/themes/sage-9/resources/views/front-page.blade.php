@extends('layouts.app')

<?php
// Obviously would pull this data from DB
$clients = [
   "nhs" => [
      "image" => "nhs.png"
   ],
   "police" => [
      "image" => "police-scotland.png"
   ],
   "uws" => [
      "image" => "uws.png"
   ],
   "kfc" => [
      "image" => "kfc.png"
   ],
   "uofg" => [
      "image" => "uofg.png"
   ],
   "hm-gov" => [
      "image" => "hm-gov.png"
   ],
   "lidl" => [
      "image" => "lidl.png"
   ],
]
 ?>

@section('content')
  <div class="FrontPage">
     <section class="Hero">
        <div class="overlay">
           <div class="TopLeftOrangeOverlay"></div>
           <div class="BottomLeftOrangeOverlay"></div>

           @include('partials.primary-nav')

           <div class="Hero__mainContent">
              {{ __("39 years experience of", 'sage') }}
              <h2>{{ __("Manufacturing Bespoke Joinery To The Highest Possible Standard", 'sage') }}</h2>

              <div class="PlayButtonWrap">
                 <div class="PlayButton ScaleOnHover">
                    <i class="fa fa-play "></i>
                 </div>

              </div>
              <p class="PlayVideoHUD">Video not available</p>
           </div>

           <div class="ClientsBanner">
             @foreach ($clients as $client => $data)
                 <img src="@asset("images/" . $data['image'])" alt="{{ $client }}" class="ClientImage">
             @endforeach
           </div>

        </div>
     </section>

     {{-- Workshop Section --}}
     <section class="WorkshopSection">
        <div class="Section Section1">
           <div class="align">
             <span>Our Joinery Workshop</span>
             <h2 class="subtitle">A State Of The Art Workshop</h2>
             <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
             <a href="#" class="QuoteButton ScaleOnHover">Get Your Quote</a>
           </div>
        </div>
        <div class="Section Section2">
           <img src="@asset('images/map.png')" alt="">
           <img src="@asset('images/map-inner.png')" alt="" class="mapGraphic">
        </div>
        <div class="MapIcon CircleButton">
           <i class="fa fa-lg fa-map-marker" aria-hidden="true"></i>
        </div>
     </section>

     {{-- Testimonials Section --}}
     <section class="Testimonials">
        <div class="TestimonialsFlexWrap">

           <div class="Section1">
             <div class="align">
               <span>Testimonials</span>
               <h2 class="subtitle">What Our Clients Have To Say About Us</h2>
               <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
               <div class="SlickArrowContainer">
                  <a href="#" class="QuoteButton ScaleOnHover">Get Your Quote</a>
                  <span id="SlickArrowAnchor"></span>
               </div>
             </div>
           </div>

           {{-- Slider Section --}}
           <div class="Section2">
             <div class="SlickTestimonials">
                 <div class="Testimonial">
                    <div class="Body">
                       <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                       <p class="StandOut">They really care about the smallest detail.</p>
                       <p class="desc">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                    </div>
                    <div class="Footer">
                       Name &amp; Job Title
                    </div>
                 </div>

                 <div class="Testimonial">
                    <div class="Body">
                       <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                       <p class="StandOut">Professional service from start to finish.</p>
                       <p class="desc">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Onsectetur adipisicing elit, sed do eiusmod tempor"</p>
                    </div>
                    <div class="Footer">
                       Name &amp; Job Title
                    </div>
                 </div>

                 <div class="Testimonial">
                    <div class="Body">
                       <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                       <p class="StandOut">Friendly &amp; Professional service. Impressed!</p>
                       <p class="desc">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                    </div>
                    <div class="Footer">
                       Name &amp; Job Title
                    </div>
                 </div>
             </div>
           </div>
        </div>
     </section>
  </div>
@endsection
