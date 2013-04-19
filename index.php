<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   include_once($path."/Library/Travaasa_Common.php");
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Travaasa - Real Travel for Real Experiences.</title>
	<meta name="keywords" content="travaasa, travel, resorts, hana, hāna, hawaii, austin, texas, Austin resort, Austin spa, travaasa Austin, Austin spa resort, experiential, hotel, Austin hotel, Austin conference center, Austin group meeting" />
	<meta name="description" content="Rediscover the magic of travel with Travaasa Austin, Texas or Hana, Maui." />
<?php 
   include_once($path."/Library/Travaasa_Head.php");
?>
<!-- start NAVIS Code -->
<script type="text/javascript" src="http://www.navistechnologies.info/JavascriptPhoneNumber/js.aspx?account=15070&amp;jspass=ivcsp4gaxk4fbz8banxd&amp;dflt=<?php echo NAVIS_GLOBAL_DEFAULT ?>"></script>
<script type="text/javascript">ProcessNavisNCKeyword();</script>
<!-- end NAVIS Code -->
</head>
<body>
<?php 
   include_once($path."/Library/Travaasa_Menu.php");
?>
<section id="feature1_wrapper" class="feature_carousel clearfix">
    <div id="feature1" class="feature">
      <div class="slide"><a href="/hana/"><img src="/assets/images/feature_home_1600x640_adventure.jpg" alt=""></a></div>
      <div class="slide"><a href="/austin/dining/"><img data-original="/assets/images/feature_home_1600x640_culinary.jpg" src="/assets/images/global/placeholder.gif" alt=""></a></div>
      <div class="slide"><a href="/hana/"><img data-original="/assets/images/feature_home_1600x640_culture.jpg" src="/assets/images/global/placeholder.gif" alt=""></a></div>
      <div class="slide"><a href="/austin/"><img data-original="/assets/images/feature_home_1600x640_fitness.jpg" src="/assets/images/global/placeholder.gif" alt=""></a></div>
      <div class="slide"><a href="/austin/travaasa-spa-overview/"><img data-original="/assets/images/feature_home_1600x640_spa.jpg" src="/assets/images/global/placeholder.gif" alt=""></a></div>
    </div>
    <a class="carousel_prev" id="feature1_prev" href="#"><span><b>prev</b></span></a> <a class="carousel_next" id="feature1_next" href="#"><span><b>next</b></span></a>
</section>
<section id="content" class="clearfix">
<article id="main" class="clearfix">
  <section class="section group" class="clearfix">
  	<div class="pad">
        <div class="col span_4_of_7">
            <div id="location-selector">
                <h1>SELECT A LOCATION</h1>
                <ul>
                    <li><a href="./hana">HANA, MAUI</a></li>
                    <li><a href="./austin">AUSTIN, TX</a></li>
                </ul>
             </div>
         </div>
        <div class="col span_3_of_7 col_reservation">
            <a href="https://www.phgsecure.com/IBE/bookingRedirect.ashx?propertyCode=AUSTC" target="_blank" onclick="_gaq.push(['_link', AppendNavisKeywordToURL('https://www.phgsecure.com/IBE/bookingRedirect.ashx?propertyCode=AUSTC')]); return false;" class="btn">BOOK AUSTIN</a>&nbsp;
            <a href="https://www.phgsecure.com/IBE/bookingRedirect.ashx?propertyCode=HNMHM&amp;numberOfAdults=2" target="_blank" onclick="_gaq.push(['_link', AppendNavisKeywordToURL('https://www.phgsecure.com/IBE/bookingRedirect.ashx?propertyCode=HNMHM&amp;numberOfAdults=2')]); return false;" class="btn">BOOK HANA</a>
         </div> 
     </div>
  </section>
</article>
</section>
<?php 
   include_once($path."/Library/Travaasa_Testimonials.php");
   include_once($path."/Library/Travaasa_Footer.php");
   include_once($path."/Library/Travaasa_Scripts.php");
?>
<script type="text/javascript">
$(document).ready(function(e) {
	createSubpageStorylines(true, false);
});
</script>
</body>
</html>