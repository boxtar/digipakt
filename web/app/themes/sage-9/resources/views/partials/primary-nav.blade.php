<?php
   $locations = get_nav_menu_locations();
   $menu = wp_get_nav_menu_object( $locations[ 'primary_navigation' ] );
   $menu_items = wp_get_nav_menu_items($menu->term_id);
?>
<nav class="PrimaryNav">
   <div class="brand">
      <img src="@asset('images/brand.png')" alt="">
   </div>

   {{-- This is hidden unless on mobile --}}
   <div class="mobile"><a href="#"><i class="fa fa-bars"></i></a></div>

   <div class="nav">
      <ul class="navlist">
         @foreach ($menu_items as $item)
            <li class="navitem"><a href="{{ $item->url }}">{{ $item->title }}</a></li>
         @endforeach

         <li class="navitem"><a href="#">
            <i class="fa fa-bars"></i>
         </a></li>
         <li class="navitem"><a href="#">
            <i class="fa fa-search"></i>
         </a></li>
         <li class="navitem">
            <a href="#" class="QuoteButton ScaleOnHover">
               Get Your Quote
            </a>
         </li>
      </ul>
   </div>
</nav>
