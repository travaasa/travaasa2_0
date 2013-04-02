<?php
session_start();
$loc = @$_GET['loc']; 
if (strlen($loc) > 0 && ($loc == 'hana' || $loc == 'austin')){ 
  $_SESSION["origLoc"] = $loc;
} elseif (isset($_SESSION["origLoc"])) {
  $loc = $_SESSION["origLoc"];
} else {
  $loc = "default";
}
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Travaasa - Real Travel for Real Experiences.</title>
	<meta name="keywords" content="travaasa, travel, resorts, hana, hāna, hawaii, austin, texas, Austin resort, Austin spa, travaasa Austin, Austin spa resort, experiential, hotel, Austin hotel, Austin conference center, Austin group meeting" />
	<meta name="description" content="Rediscover the magic of travel with Travaasa Austin, Texas or Hana, Maui." />
	<meta name="author" content="www.travaasa.com.com">
	<link rel="shortcut icon" href="/favicon.ico">
	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<!-- Stylesheets -->
    <link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/219cfca3-6d64-4b4f-98fa-9e9b1197e3d8.css"/>
	<link rel="stylesheet" href="/assets/css/html5reset.css" media="all">
	<link rel="stylesheet" href="/assets/css/col.css" media="all">
	<link rel="stylesheet" href="/assets/css/2cols.css" media="all">
	<link rel="stylesheet" href="/assets/css/3cols.css" media="all">
	<link rel="stylesheet" href="/assets/css/4cols.css" media="all">
	<link rel="stylesheet" href="/assets/css/5cols.css" media="all">
	<link rel="stylesheet" href="/assets/css/6cols.css" media="all">
	<link rel="stylesheet" href="/assets/css/7cols.css" media="all">
	<link rel="stylesheet" href="/assets/css/8cols.css" media="all">
	<link rel="stylesheet" href="/assets/css/9cols.css" media="all">
	<link rel="stylesheet" href="/assets/css/10cols.css" media="all">
	<link rel="stylesheet" href="/assets/css/11cols.css" media="all">
	<link rel="stylesheet" href="/assets/css/12cols.css" media="all">
    <link rel="stylesheet" href="/assets/css/shadowbox.css" media="screen">
    <link rel="stylesheet" href="/assets/css/global_trav.css" media="all">
    <link rel="stylesheet" href="/assets/css/homepage.css" media="all">
    <link rel="stylesheet" href="/assets/scripts/pe.flare/jquery.pixelentity.flare.min.css" media="all">
	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements and feature detects --><script src="/assets/scripts/modernizr-2.5.3-min.js"></script>
<!-- start NAVIS Code -->
<script type="text/javascript" src="http://www.navistechnologies.info/JavascriptPhoneNumber/js.aspx?account=15070&amp;jspass=ivcsp4gaxk4fbz8banxd&amp;dflt=8558687282"></script>
<script type="text/javascript">ProcessNavisNCKeyword();</script>
<!-- end NAVIS Code -->
</head>
<body>
<?php if ($loc == 'hana') : ?>
<!-- #BeginLibraryItem "/Library/Travaasa_Menu_Hana.lbi" -->
<header>
  <div id="logo"><a href="/"><span>TRAVAASA Experiential Resorts</span></a></div>
  <nav id="main_nav" class="clearfix">
    <ul class="location_selector_nav menu_top">
      <li class="menu_main"><a href="/hana" id="current_location">HANA, MAUI</a>
        <ul class="menu_sub">
          <li><a href="/hana">HANA, MAUI</a></li>
          <li><a href="/austin">AUSTIN, TX</a></li>
        </ul>
      </li>
    </ul>
    <div id="hana_location_nav" class="location_group_nav">
      <ul class="location_nav menu_top">
        <li><a class="lnk_gallery" href="/hana/hanaphotos">GALLERY</a></li>
        <li><a class="lnk_experiences" href="/hana/travaasa-hana-experiences">EXPERIENCES</a></li>
        <li><a class="lnk_spa" href="/hana/hana-the-spa-at-travaasa-hana">SPA</a></li>
        <li><a class="lnk_rooms" href="/hana/accomodations">ROOMS</a></li>
        <li><a class="lnk_dining" href="/hana/hana-dining-overview">DINING</a></li>
        <li><a class="lnk_rates" href="/hana/hana-rates-and-packages">RATES</a></li>
        <li class="menu_main menu_plus"><a href="#" class="plus"><span>+</span></a>
          <ul class="menu_sub">
            <li><a class="lnk_schedule" href="/hana/hanaschedule">EXPERIENCE SCHEDULE</a></li>
            <li><a class="lnk_locationinfo" href="/hana/hana-maui">HANA &amp; GETTING HERE</a></li>
            <li><a class="lnk_groups" href="/hana/hana-groups-and-meetings">GROUPS &amp; MEETINGS</a></li>
            <li><a class="lnk_offproperty" href="/hana/hana-off-property-excursions">OFF-PROPERTY EXCURSIONS</a></li>
          </ul>
        </li>
      </ul>
      <ul class="location_condensed_nav menu_top">
        <li class="menu_main"><a href="#">EXPLORE</a>
          <ul class="menu_sub">
            <li><a class="lnk_gallery" href="/hana/hanaphotos">GALLERY</a></li>
            <li><a class="lnk_experiences" href="/hana/travaasa-hana-experiences">EXPERIENCES</a></li>
            <li><a class="lnk_spa" href="/hana/hana-the-spa-at-travaasa-hana">SPA</a></li>
            <li><a class="lnk_rooms" href="/hana/accomodations">ROOMS</a></li>
            <li><a class="lnk_dining" href="/hana/hana-dining-overview">DINING</a></li>
            <li><a class="lnk_rates" href="/hana/hana-rates-and-packages">RATES</a></li>
            <li><a class="lnk_schedule" href="/hana/hanaschedule">EXPERIENCE SCHEDULE</a></li>
            <li><a class="lnk_locationinfo" href="/hana/hana-maui">HANA &amp; GETTING HERE</a></li>
            <li><a class="lnk_groups" href="/hana/hana-groups-and-meetings">GROUPS &amp; MEETINGS</a></li>
            <li><a class="lnk_offproperty" href="/hana/hana-off-property-excursions">OFF-PROPERTY EXCURSIONS</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- #EndLibraryItem -->
<?php elseif ($loc == 'austin') : ?>
<!-- #BeginLibraryItem "/Library/Travaasa_Menu_Austin.lbi" -->
<header>
  <div id="logo"><a href="/"><span>TRAVAASA Experiential Resorts</span></a></div>
  <nav id="main_nav" class="clearfix">
    <ul class="location_selector_nav menu_top">
      <li class="menu_main"><a href="/austin" id="current_location">AUSTIN, TX</a>
        <ul class="menu_sub">
          <li><a href="/hana">HANA, MAUI</a></li>
          <li><a href="/austin">AUSTIN, TX</a></li>
        </ul>
      </li>
    </ul>
    <div id="austin_location_nav" class="location_group_nav">
      <ul class="location_nav menu_top">
        <li><a class="lnk_gallery" href="/austin/austinphotos">GALLERY</a></li>
        <li><a class="lnk_experiences" href="/austin/austin-experiences">EXPERIENCES</a></li>
        <li><a class="lnk_spa" href="/austin/travaasa-spa-overview">SPA</a></li>
        <li><a class="lnk_rooms" href="/austin/accomodations">ROOMS</a></li>
        <li><a class="lnk_dining" href="/austin/dining">DINING</a></li>
        <li><a class="lnk_rates" href="/austin/rates-and-packages">RATES</a></li>
        <li><a class="lnk_groups" href="/austin/groups-and-meetings">GROUPS &amp; MEETINGS</a></li>
        <li class="menu_main menu_plus"><a href="#" class="plus"><span>+</span></a>
          <ul class="menu_sub">
            <li><a class="lnk_schedule" href="/austin/austinschedule">EXPERIENCE SCHEDULE</a></li>
          </ul>
        </li>
      </ul>
      <ul class="location_condensed_nav menu_top">
        <li class="menu_main"><a href="#">EXPLORE</a>
          <ul class="menu_sub">
            <li><a class="lnk_gallery" href="/austin/austinphotos">GALLERY</a></li>
            <li><a class="lnk_experiences" href="/austin/austin-experiences">EXPERIENCES</a></li>
            <li><a class="lnk_spa" href="/austin/travaasa-spa-overview">SPA</a></li>
            <li><a class="lnk_rooms" href="/austin/accomodations">ROOMS</a></li>
            <li><a class="lnk_dining" href="/austin/dining">DINING</a></li>
            <li><a class="lnk_rates" href="/austin/rates-and-packages">RATES</a></li>
            <li><a class="lnk_groups" href="/austin/groups-and-meetings">GROUPS &amp; MEETINGS</a></li>
            <li><a class="lnk_schedule" href="/austin/austinschedule">EXPERIENCE SCHEDULE</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- #EndLibraryItem -->
<?php else : ?>
<!-- #BeginLibraryItem "/Library/Travaasa_Menu.lbi" --><header>
  <div id="logo"><a href="/"><span>TRAVAASA Experiential Resorts</span></a></div>
  <nav id="main_nav" class="clearfix">
    <ul class="location_selector_nav menu_top">
    	<li class="menu_main"><a href="#" id="current_location">LOCATION</a>
        	<ul class="menu_sub">
                <li><a href="/hana">HANA, MAUI</a></li>
                <li><a href="/austin">AUSTIN, TX</a></li>
             </ul>
        </li>
    </ul>
  </nav>
</header><!-- #EndLibraryItem -->
<?php endif; ?>
<section id="feature1_wrapper" class="feature_carousel clearfix">
    <div id="feature1" class="feature">
      <div class="slide"><img src="/assets/images/feature_months_april_2013_1600x640.jpg" alt=""></div>
    </div>
</section>
<section id="content">
<article id="main">
  <section class="intro pad clearfix">    
    <div class="section group">
    	<div class="col span_1_of_2">
            <h2>Fitness</h2>
            <div class="listing">
                <h6>SPRING TRAINING <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Train like a pro and join our fitness team as we perform excerise drills to help warm up for the summer season.</p>
            </div>
            <div class="listing">
                <h6>Back to Nature Boot Camp <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Let this nature-filled workout be your morning coffee. This outdoor boot camp class incorporates many different training modalities, including strength, cardio, core, speed, agility, flexibility and injury prevention. Join us for this fun, high-energy, outdoor adventure!</p>
            </div>
            <div class="listing">
                <h6>Cultivate Happiness Collage <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Create a lovely magazine collage and strech your perpective.</p>
            </div>
            <div class="listing">
                <h6>Growing Natural Rhythm Salsa Class <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Dance to Salsa music that will inspire your natural rhythm to unleash and grow. Dancing is a great and fun way to become confortable with your body, build confidence and self-steem. The side effects are bursts of laughter and burning calories.</p>
            </div>
            <div class="listing">
                <h6>Tai Chi &amp; Nature <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Tai Chi means moving the energy of our bodies in harmony with the energy of the universe. This practice bring us closer to nature as it can be practice outdoors where we can appreciate, enjoy and explore the energy in our surroundings.</p>
            </div>
            <div class="listing">
                <h6>Food Care &amp; Awareness <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>This workout will teach how to keep your feet healthy and learn that by nature they are our base of support, the foundation of the joints above. Grow your feet awareness and rebalance your body as you acquire better postural alignment, overall function and coordination.</p>
            </div>
            <div class="listing">
                <h6>Grow an Inch Pilates <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Pilates exercises are about learning how to control your inner unit, the muscles from the bottom of your spine all the way up to the back of your skull. Pilates exercises are based on axial skeleton elongation and stability. Their nature is to strengthen as you lenghten, creating more space withing the joints, therefore making it possible to grow an inch or more as you get stronger.</p>
            </div>
            <div class="listing">
                <h6>Cultivate Heat Yoga <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>An intermediate yoga class designed to build strenght ans heat. Flowing sun salutations combined with longer held poses for to build stamina. </p>
            </div>
            <div class="listing">
                <h6>Hatha Yoga <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>This is a great class for all levels. A combination of a mild warming flow and longer held poses. </p>
            </div>
            <div class="listing">
                <h6>Explore Your Hips &amp; Knees Yoga Therapy <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Learn how to explore the mobility of your hisps and knees using Yoga Therapy asanas. Create more awareness, range of motion and strength in the muscles around your hips and knees and then use your new found mobility to explore the world.</p>
            </div>
            <div class="listing">
                <h6>Explore Quiet Yoga <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Yin yoga is a more passive slow-paced style of yoga with postures or asanas that are held for five minutes each, allowing for a deeper release.</p>
            </div>
            <div class="listing">
                <h6>Zumba Fitness <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Dance as you explore other cultures and their moves. Discover your natural happiness that rises when we move freely to various ethnical rhythms. Zumba is a fun dance party that can burn 400 to 600 calories in an hour. </p>
            </div>            
        </div>
        <div class="col span_1_of_2">
            <h2>Culinary</h2>
            <div class="listing">
                <h6>Sprouts Galore <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Sprouts are rich in vitamins, minerals and other phytochemicals and can be a delicious part of your daily meals.  Learn the art of sprouting as well as simple ways to use your sprouts in simple dishes at every meal.</p>
            </div>
            <h2>Culture</h2>
             <div class="listing">
                <h6>Taro Tasting <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Taro is a traditional Hawaiian staple and over 300 different forms are grown in the Hawaiian Islands. All parts of the plant can be eaten.  Join our team in preparing and sampling some simple taro dishes.</p>
            </div>
            <div class="listing">
                <h6>East Maui Taro Festival <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>The taro plant, also known as kalo in Hawai’i, plays a central role in Hawaiian mythology. Taro came to Hawai`i with the earliest Polynesian settlers in their canoes and has been cultivated as a staple from ancient times. East Maui Taro Festival is a time for our community to share with others the importance and value of this staple. Taro Festival is a two day event that takes place at Hāna Ballpark, which is located just a few steps away from Travaasa Hotel Hāna and was built in the 1940s to hold the San Francisco Seals summer camp. The Seals were owned by Paul Fagan who began Travaasa Hotel Hāna in 1946 and was also the original owner of Hāna Ranch. There will be Lively Entertainment and various concession booths which can be seen and heard from our property. Learn about poi pounding, taste the flavor of cooked taro and meet some of our local vendors.</p>
            </div>
           
            
            <h2>Spa &amp; Wellness</h2>
            <div class="listing">
                <h6>Discover the Eight Limbs of Yoga <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>A general hatha yoga class set with the intention of exploring the philosophy of yoga. Appropriate for beginners and intermediate.</p>
            </div>
            <div class="listing">
                <h6>Farm to Blender Juicing <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Grow green, eat green, drink green, be green and live green. This is the theme of a new generation of people who desire to live healthy and in harmony with nature. Green vegetables have more valuable nutrients than any other food in existence. Blending your greens helps make nutrients more readily available to the body.</p>
            </div>
            <div class="listing">
                <h6>Meditation | Tune into Nature <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Head outdoors to stop and savior the beauty all around us. Take the opportunity for quiet introspection and silence to deepen your appreciation for the change in season, and create space within that will leave you replenished and revitalized.</p>
            </div>
            <div class="listing">
                <h6>Nature &amp; Wisdom Journaling <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Journaling about  what we know and experience in Nature can be enlightening. Reflecting on how that affects our wisdown is our theme. Nature and Wisdom journaling helps with self discovery as we explore and appreciate the world around us.</p>
            </div>
            <div class="listing">
                <h6>Journal &amp; Grow <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Grow more into your complete self by integrating different parts of your psyche. We will explore ways that we deny ourselves and others.</p>
            </div>
             <div class="listing">
                <h6>Explore Watercolors <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Learn different watercolor techniques by painting a pre-drawn still life.</p>
            </div>
        </div>
    </div>  
      
  </section>
  
  <section class="grey pad">
        <h4>See upcoming months</h4>
  		<div class="group">
            <div class="col span_1_of_3 month"><div class="active"><a href="/calendar/2013/april/"><img src="/assets/images/months/apr-grow.png" alt="April is Grow Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2013/may/"><img src="/assets/images/months/may-nuture.png" alt="May is Nuture Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2013/june/"><img src="/assets/images/months/jun-man.png" alt="June is Man Month"></a></div></div>
        </div>
  </section>
  
</article>
</section>
<!-- #BeginLibraryItem "/Library/Travaasa_Testimonials.lbi" --><section id="comments" class="section group">
	<div class="pad">
        <div class="col span_1_of_7">
            <img src="/assets/images/global/trip-advisor.png" alt="As seen of TripAdvisor">
        </div>
        <div class="col span_2_of_7">
            <p class="fittext_quotes" id="quote_1"></p>
        </div>
        <div class="col span_2_of_7">
            <p class="fittext_quotes" id="quote_2"></p>
        </div>
        <div class="col span_2_of_7">
            <p class="fittext_quotes" id="quote_3"></p>
        </div>
     </div>
</section><!-- #EndLibraryItem -->
<?php if ($loc == 'hana') : ?>
<!-- #BeginLibraryItem "/Library/Travaasa_Footer_Hana.lbi" -->
<div id="reservations-bar">
  <div class="reservations-bar-inner">
    <p class="phone">
      <script type="text/javascript">ShowNavisNCPhoneNumber();</script>
      <noscript>
        1-855-868-7282
      </noscript>
    </p>
    <ul class="reservation_nav menu_top">
      <li class="reservation"><a href="https://www.phgsecure.com/IBE/bookingRedirect.ashx?propertyCode=HNMHM&amp;numberOfAdults=2" target="_blank" onclick="_gaq.push(['_link', AppendNavisKeywordToURL('https://www.phgsecure.com/IBE/bookingRedirect.ashx?propertyCode=HNMHM&amp;numberOfAdults=2')]); return false;">MAKE A RESERVATION</a></li>
    </ul>
    <ul class="pricing">
      <li>
        <h2>INCLUSIVE<br>
          <span>Starting at</span></h2>
        <h3><sup>$</sup>825</h3>
      </li>
      <li>
        <h2>A LA CARTE<br>
          <span>Starting at</span></h2>
        <h3><sup>$</sup>375</h3>
      </li>
    </ul>
  </div>
</div>
<footer class="clear">
  <nav id="footer_links" class="group">
    <div class="col span_1_of_4">
      <h2 class="hdr">TRAVAASA HANA</h2>
      <p>5031 Hana Hwy<br>
        Hana, Hi 96713<br>
        <br>
        Tel: 808-359-2401<br>
        Fax: 808-248-7202<br>
        <br>
        <a href="http://maps.google.com/maps?hl=en&amp;q=5031+Hana+Highway+Hana,+HI+96713&amp;gs_upl=3125l8296l0l9305l5l5l0l0l0l1l203l724l1.3.1l5l0&amp;bav=on.2,or.r_gc.r_pw.,cf.osb&amp;biw=638&amp;bih=933&amp;um=1&amp;ie=UTF-8&amp;hq=&amp;hnear=0x7954ac25effd1793:0x535647e82e0e776,5031+Hana+Hwy,+Hana,+HI+96713&amp;gl=us&amp;ei=Hh4GT_KFB4nE2wX9zIn5CQ&amp;sa=X&amp;oi=geocode_result&amp;ct=title&amp;resnum=1&amp;ved=0CB0Q8gEwAA5">DIRECTIONS</a></p>
    </div>
    <div class="col span_1_of_4">
      <p><a href="/hana/hanaphotos">GALLERY</a><br>
        <a href="/hana/travaasa-hana-experiences">EXPERIENCES</a><br>
        <a href="/hana/hanaschedule">EXPERIENCE SCHEDULE</a><br>
        <a href="/hana/hana-the-spa-at-travaasa-hana">SPA</a><br>
        <a href="/hana/accomodations">ROOMS</a><br>
        <a href="/hana/hana-dining-overview">DINING</a><br>
        <a href="/hana/hana-rates-and-packages">RATES</a><br>
        <a href="/hana/hana-maui">HANA &amp; GETTING HERE</a><br>
        <a href="/hana/hana-groups-and-meetings">GROUPS &amp; MEETINGS</a><br>
        <a href="/hana/hana-off-property-excursions">OFF-PROPERTY EXCURSIONS</a></p>
    </div>
    <div class="col span_1_of_4">
      <h2 class="hdr">INQUIRIES</h2>
      <p><a href="/about-us">ABOUT TRAVAASA</a><br>
        <a href="/contact-us">CONTACT US</a><br>
        <a href="http://www.travaasa.com/press-room/">PRESS ROOM</a><br>
        <a href="http://www.travaasa.com/blog">BLOG</a><br>
        <a href="http://giftcards.travaasa.com/">GIFT CARDS</a><br>
        <a href="https://theapplicantmanager.com/php/careers.php?co=tv">CAREERS</a><br>
        <a href="/site-map">SITE MAP</a></p>
    </div>
    <div class="col span_1_of_4">
      <h2 class="hdr">FOLLOW US</h2>
      <ul id="social" class="clearfix">
        <li><a href="http://www.facebook.com/travaasa" target="_blank" id="facebook"><img src="/assets/images/global/transparent.gif" alt="Facebook"></a></li>
        <li><a href="http://www.twitter.com/travaasa" target="_blank" id="twitter"><img src="/assets/images/global/transparent.gif" alt="Twitter"></a></li>
        <li><a href="http://www.youtube.com/user/Travaasa" target="_blank" id="youtube"><img src="/assets/images/global/transparent.gif" alt="YouTube"></a></li>
        <li><a href="http://pinterest.com/travaasa/" target="_blank" id="pinterest"><img src="/assets/images/global/transparent.gif" alt="Pinterest"></a></li>
        <li><a href="http://travaasa.com/blog" target="_blank" id="blog"><img src="/assets/images/global/transparent.gif" alt="Blog"></a></li>
      </ul>
      <p><a class="btn" href="http://www.data2gold.com/gallery/travaasa/eClub/eClub.html">SIGN UP FOR OUR NEWSLETTER</a></p>
    </div>
    <p class="clear" id="footer-copyright"><a title="Preferred Boutique" target="_blank" href="http://preferredhotelgroup.com/preferred-boutique/destinations/hana/travaasa-hana/"><img src="/assets/images/global/preferred-logo-white-144px.png" alt=""></a><span>&copy;2013 Green Tea, LLC.</span></p>
  </nav>
</footer>
<script type="text/javascript">
var loc = "hana";
</script>
<!-- #EndLibraryItem -->
<?php elseif ($loc == 'austin') : ?>
<!-- #BeginLibraryItem "/Library/Travaasa_Footer_Austin.lbi" -->
<div id="reservations-bar">
  <div class="reservations-bar-inner">
    <p class="phone">
      <script type="text/javascript">ShowNavisNCPhoneNumber();</script>
      <noscript>
        1-855-868-7282
      </noscript>
    </p>
    <ul class="reservation_nav menu_top">
      <li class="reservation"> <a href="https://www.phgsecure.com/IBE/bookingRedirect.ashx?propertyCode=AUSTC" target="_blank" onclick="_gaq.push(['_link', AppendNavisKeywordToURL('https://www.phgsecure.com/IBE/bookingRedirect.ashx?propertyCode=AUSTC')]); return false;">MAKE A RESERVATION</a></li>
    </ul>
    <ul class="pricing">
      <li>
        <h2>INCLUSIVE<br>
          <span>Starting at</span></h2>
        <h3><sup>$</sup>350</h3>
      </li>
      <li>
        <h2>A LA CARTE<br>
          <span>Starting at</span></h2>
        <h3><sup>$</sup>200</h3>
      </li>
    </ul>
  </div>
</div>
<footer class="clear">
  <nav id="footer_links" class="group">
    <div class="col span_1_of_4">
      <h2 class="hdr">TRAVAASA AUSTIN</h2>
      <p>13500 Farm to Market Road 2769<br>
        Austin, TX 78726<br>
        <br>
        Tel: 512-364-0061<br>
        Fax: 512-506-9737<br>
        <br>
        <a href="http://maps.google.com/maps?hl=en&amp;q=travaasa+austin&amp;safe=off&amp;ie=UTF8&amp;sqi=2&amp;hq=travaasa&amp;hnear=Austin,+Travis,+Texas&amp;t=m&amp;vpsrc=6&amp;ll=30.45844,-97.835999&amp;spn=0.12326,0.221786&amp;z=13&amp;iwloc=A&amp;cid=5151063792531704065">DIRECTIONS</a></p>
    </div>
    <div class="col span_1_of_4">
      <p><a href="/austin/austinphotos">GALLERY</a><br>
        <a href="/austin/austin-experiences">EXPERIENCES</a><br>
        <a href="/austin/austinschedule">EXPERIENCE SCHEDULE</a><br>
        <a href="/austin/travaasa-spa-overview">SPA</a><br>
        <a href="/austin/accomodations">ROOMS</a><br>
        <a href="/austin/dining">DINING</a><br>
        <a href="/austin/groups-and-meetings">GROUPS &amp; MEETINGS</a></p>
    </div>
    <div class="col span_1_of_4">
      <h2 class="hdr">INQUIRIES</h2>
      <p><a href="/about-us">ABOUT TRAVAASA</a><br>
        <a href="/contact-us">CONTACT US</a><br>
        <a href="http://www.travaasa.com/press-room/">PRESS ROOM</a><br>
        <a href="http://www.travaasa.com/blog">BLOG</a><br>
        <a href="http://giftcards.travaasa.com/">GIFT CARDS</a><br>
        <a href="https://theapplicantmanager.com/php/careers.php?co=tv">CAREERS</a><br>
        <a href="/site-map">SITE MAP</a></p>
    </div>
    <div class="col span_1_of_4">
      <h2 class="hdr">FOLLOW US</h2>
      <ul id="social" class="clearfix">
        <li><a href="http://www.facebook.com/travaasa" target="_blank" id="facebook"><img src="/assets/images/global/transparent.gif" alt="Facebook"></a></li>
        <li><a href="http://www.twitter.com/travaasa" target="_blank" id="twitter"><img src="/assets/images/global/transparent.gif" alt="Twitter"></a></li>
        <li><a href="http://www.youtube.com/user/Travaasa" target="_blank" id="youtube"><img src="/assets/images/global/transparent.gif" alt="YouTube"></a></li>
        <li><a href="http://pinterest.com/travaasa/" target="_blank" id="pinterest"><img src="/assets/images/global/transparent.gif" alt="Pinterest"></a></li>
        <li><a href="http://travaasa.com/blog" target="_blank" id="blog"><img src="/assets/images/global/transparent.gif" alt="Blog"></a></li>
      </ul>
      <p><a class="btn" href="http://www.data2gold.com/gallery/travaasa/eClub/eClub.html">SIGN UP FOR OUR NEWSLETTER</a></p>
    </div>
    <p class="clear" id="footer-copyright"><a title="Preferred Boutique" target="_blank" href="http://preferredhotelgroup.com/preferred-boutique/destinations/united-states/texas/austin/travaasa-austin"><img src="/assets/images/global/preferred-logo-white-144px.png" alt=""></a><span>&copy;2013 Green Tea, LLC.</span></p>
  </nav>
</footer>
<script type="text/javascript">
var loc = "austin";
</script><!-- #EndLibraryItem -->
<?php else : ?>
<!-- #BeginLibraryItem "/Library/Travaasa_Footer.lbi" --><footer class="clear global">
  <nav id="footer_links" class="group">
    <div class="col span_2_of_4">
      <h2 class="hdr">TRAVAASA EXPERIENTIAL RESORTS</h2>
        <p>Introducing Travaasa, a new collection of experiential spa resorts that emphasizes real travel and the unique, authentic qualities that make a destination magical. Learn more about the <a href="/about-us">Travaasa Vision</a>. Our hotels are tailored to the intellectually active and culturally curious, offering a resort experience that is defined by guided adventures, culinary classes, cultural encounters, healing spa treatments, as well as fitness and wellness workshops.</p>
    </div>
    <div class="col span_1_of_4">
      <h2 class="hdr">INQUIRIES</h2>
      <p><a href="/about-us">ABOUT TRAVAASA</a><br>
      <a href="/contact-us">CONTACT US</a><br>
      <a href="http://www.travaasa.com/press-room/">PRESS ROOM</a><br>
      <a href="http://www.travaasa.com/blog">BLOG</a><br>
      <a href="http://giftcards.travaasa.com/">GIFT CARDS</a><br>
      <a href="https://theapplicantmanager.com/php/careers.php?co=tv">CAREERS</a><br>
	  <a href="/site-map">SITE MAP</a></p>
    </div>
    <div class="col span_1_of_4">
      <h2 class="hdr">FOLLOW US</h2>
      <ul id="social" class="clearfix">
      	<li><a href="http://www.facebook.com/travaasa" target="_blank" id="facebook"><img src="/assets/images/global/transparent.gif" alt="Facebook"></a></li>
        <li><a href="http://www.twitter.com/travaasa" target="_blank" id="twitter"><img src="/assets/images/global/transparent.gif" alt="Twitter"></a></li>
        <li><a href="http://www.youtube.com/user/Travaasa" target="_blank" id="youtube"><img src="/assets/images/global/transparent.gif" alt="YouTube"></a></li>
        <li><a href="http://pinterest.com/travaasa/" target="_blank" id="pinterest"><img src="/assets/images/global/transparent.gif" alt="Pinterest"></a></li>
        <li><a href="http://travaasa.com/blog" target="_blank" id="blog"><img src="/assets/images/global/transparent.gif" alt="Blog"></a></li>
      </ul>
      <p><a class="btn" href="http://www.data2gold.com/gallery/travaasa/eClub/eClub.html">SIGN UP FOR OUR NEWSLETTER</a></p>
    </div>
<p class="clear" id="footer-copyright"><a title="Preferred Boutique" target="_blank" href="http://preferredhotelgroup.com/preferred-boutique/destinations/hana/travaasa-hana/"><img src="/assets/images/global/preferred-logo-white-144px.png" alt=""></a><span>&copy;2013 Green Tea, LLC.</span></p>
  </nav>
</footer>
<script type="text/javascript">
var loc = "all";
</script><!-- #EndLibraryItem -->
<?php endif; ?>
<!-- #BeginLibraryItem "/Library/Travaasa_Scripts.lbi" --><!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<!-- JavaScript at the bottom for fast page loading -->
<script>window.jQuery || document.write('<script src="/assets/scripts/jquery-1.7.2.min.js"><\/script>')</script>
<script type="text/javascript" src="/assets/scripts/jquery.carouFredSel-6.1.0-packed.js"></script>
<![if !IE]>
<script type="text/javascript" src="/assets/scripts/jquery.touchSwipe.min.js"></script>
<![endif]>
<script type="text/javascript" src="/assets/scripts/jquery.lazyload.js"></script>
<script type="text/javascript" src="/assets/scripts/jquery.hoverIntent.minified.js"></script>
<script type="text/javascript" src="/assets/scripts/jquery.fittext.js"></script>
<script type="text/javascript" src="/assets/scripts/travaasa.js"></script>
<!--[if (lt IE 9) & (!IEMobile)]>
<script src="/assets/scripts/selectivizr-min.js"></script>
<![endif]-->
<script type="text/javascript" src="/assets/scripts/responsivegridsystem.js"></script>
<!--<script type="text/javascript" src="/assets/scripts/pe.flare/jquery.pixelentity.flare.min.js"></script>//-->
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.theme.utils.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.utils.browser.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.utils.geom.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.utils.preloader.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.utils.transition.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.utils.youtube.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/froogaloop.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.utils.vimeo.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/video/projekktor.min.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.video.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.videoPlayer.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.transform.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.flare.lightbox.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.flare.lightbox.render.image.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.backgroundSlider.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.simplethumb.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.flare.lightbox.render.gallery.js"></script>
<script type="text/javascript" src="/assets/scripts/jquery.address-1.5.min.js"></script>

<!-- start Adserving Tag -->
<script type='text/javascript'>
// Conversion Name: Travaasa Home Page
var ebRand = Math.random()+'';
ebRand = ebRand * 1000000;
//<![CDATA[ 
document.write('<scr'+'ipt src="HTTP://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?cn=as&amp;ActivityID=213436&amp;rnd=' + ebRand + '"></scr' + 'ipt>');
//]]>
</script>
<noscript>
<img width="1" height="1" style="border:0" src="HTTP://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?cn=as&amp;ActivityID=213436&amp;ns=1"/>
</noscript>
<!-- end Adserving Tag-->
<script type="text/javascript">AppendNavisKeywordToLink("lnkBookingEngine1");</script>
<!-- start IMI -->
<script type="text/javascript">
document.write(unescape('%3Cscript src="' + document.location.protocol + '//d1ivexoxmp59q7.cloudfront.net/imi/live.js" type="text/javascript"%3E%3C/script%3E'));
</script>
<!-- end IMI -->
<!-- start Retargeting Tag -->
<script type="text/javascript">
// Retargeting Tag Name: Travaasa Home Page Retargeting
// The retargeting Tags should be placed at the top of the <BODY> section of the HTML page.
var ebRand = Math.random()+ ' ';
ebRand = ebRand * 1000000;
//<![CDATA[
document.write('<scr'+'ipt src="HTTP://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?CN=TT&amp;TID=4095&amp;AdvertiserID=52437&amp;TKV0=z&amp;rnd=' + ebRand + '"></scr' + 'ipt>');
//]]>
</script>
<noscript>
<img width="1" height="1" style="border:0" src="HTTP://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?CN=TT&amp;TID=4095&amp;AdvertiserID=52437&amp;TKV0=z&amp;ns=1"/>
</noscript>
<!-- end Retargeting Tag -->
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-17613889-1']);
_gaq.push(['_setDomainName', '.travaasa.com']);
_gaq.push(['_setAllowLinker', true]);
_gaq.push(['_setAllowHash', false]);
_gaq.push(['_setAllowAnchor', true]);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') 
+ '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<!-- begin olark code --><script data-cfasync="false" type='text/javascript'>/*{literal}<![CDATA[*/
window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){f[z]=function(){(a.s=a.s||[]).push(arguments)};var a=f[z]._={},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={0:+new Date};a.P=function(u){a.p[u]=new Date-a.p[0]};function s(){a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{b.contentWindow[g].open()}catch(w){c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{var t=b.contentWindow[g];t.write(p());t.close()}catch(x){b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('1552-236-10-1169');/*]]>{/literal}*/</script>
<script>olark.configure('system.require_email', 0);</script>
<!-- end olark code -->
<!-- begin IMI retargeting --><script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1004189758;
var google_conversion_label = "oxLWCPLEoAMQvvDq3gM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1004189758/?value=0&amp;label=oxLWCPLEoAMQvvDq3gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<script type="text/javascript">
adroll_adv_id = "FZE6L5WNEBGM5O4WNFGEWL";
adroll_pix_id = "2AKTCGXQFJG5BFH7S37JH2";
(function () {
var oldonload = window.onload;
window.onload = function(){
__adroll_loaded=true;
var scr = document.createElement("script");
var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
scr.setAttribute('async', 'true');
scr.type = "text/javascript";
scr.src = host + "/j/roundtrip.js";
((document.getElementsByTagName('head') || [null])[0] ||
document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
if(oldonload){oldonload()}};
}());
</script>
<!-- end IMI retargeting --><!-- #EndLibraryItem -->
<script type="text/javascript">
$(function() {
	createSubpageStorylines(true, true);
});
</script>
</body>
</html>