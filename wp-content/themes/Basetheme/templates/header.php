
<header class="banner" role="banner">

<div id="top">
    <h1>LogoEvents</h1>
 </div>
  <div class="container">
  <?php  /* <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?>Logo</a> */ ?>

    <nav class="navbar navbar-default col-xs-12 ">

    <?php  /*  ?> <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-navigation" aria-expanded="false">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div> <?php */ ?>

<<<<<<< HEAD
     <?php /*  <div class="collapse navbar-collapse " id="primary-navigation">
        <nav class="container">

    <ul>
    <li><a href="/">Home</a></li>
    <li class="active"><a href="/templates/layouts/event_aboutus.html" target="_self">About Us</a></li>
    <li>
   <a href="/templates/layouts/event_eventspage.html" target="_self">Events</a>
      <ul class="submenu">
        <li><a href="/templates/layouts/myevents/event_branding.html">Branding</a></li>
        <li><a href="/templates/layouts/myevents/event_celebrations.html">Celebrations</a></li>
        <li><a href="/templates/layouts/myevents/event_wedding.html">Weddings</a></li>
        <li><a href="/templates/layouts/myevents/birthday_parties.html">Birthday Parties</a></li>
      </ul>

  </li>
    <li><a href="/templates/layouts/event_service.html">Services</a></li>
    <li><a href="/templates/layouts/event_contactus.html">Contact Us</a></li>
  </ul>
</nav> */ ?>

=======
      <div class="collapse navbar-collapse " id="primary-navigation">
>>>>>>> 401200e633f660de684a7dcd9072230066824cf0
          <?php

          //TODO: event not showing on over.
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation','depth'=> 7,'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
              endif;

             //  wp_nav_menu(['theme_location' => 'primary_navigation']);
          ?>
      </div>
    </nav>
  </div>
</header>
