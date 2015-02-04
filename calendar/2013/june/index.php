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
   $path = $_SERVER['DOCUMENT_ROOT'];
   include_once($path."/Library/Travaasa_Common.php");
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Travaasa June 2013 Featured Experiences</title>
	<meta name="keywords" content="travaasa, travel, resorts, hana, hāna, hawaii, austin, texas, Austin resort, Austin spa, travaasa Austin, Austin spa resort, experiential, hotel, Austin hotel, Austin conference center, Austin group meeting" />
	<meta name="description" content="Rediscover the magic of travel with Travaasa Austin, Texas or Hana, Maui." />
	<?php 
   include_once($path."/Library/Travaasa_Head.php");
	?>
<!-- start NAVIS Code -->
<script type="text/javascript" src="http://www.navistechnologies.info/JavascriptPhoneNumber/js.aspx?account=15070&amp;jspass=ivcsp4gaxk4fbz8banxd&amp;dflt=<?php 
if ($loc == 'hana') :
echo NAVIS_GLOBAL_HANA;
elseif ($loc == 'austin') :
echo NAVIS_GLOBAL_AUSTIN;
else :
echo NAVIS_GLOBAL_DEFAULT;
endif; 
?>"></script>
<script type="text/javascript">ProcessNavisNCKeyword();</script>
<!-- end NAVIS Code -->
</head>
<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MW4X3M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MW4X3M');</script>
<!-- End Google Tag Manager -->
<?php 
if ($loc == 'hana') :
include_once($path."/Library/Travaasa_Menu_Hana.php");
elseif ($loc == 'austin') :
include_once($path."/Library/Travaasa_Menu_Austin.php");
else :
include_once($path."/Library/Travaasa_Menu.php");
endif; 
?>
<section id="feature1_wrapper" class="feature_carousel clearfix">
    <div id="feature1" class="feature">
      <div class="slide"><img src="/assets/images/feature_months_june_2013_1600x640.jpg" alt="June is Man Month at Travaasa"></div>
    </div>
</section>
<section id="content">
<article id="main">
  <section class="intro pad clearfix">    
    <div class="section group">
    	<div class="col span_1_of_2">
            <h2>Adventure</h2>
            <div class="listing">
                <h6>Bamboo Pole Fishing <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>The essence of fishing:  a freshly cut bamboo pole, a line and baited hook, the thrill of feeling fish bite and landing your catch.  Andrew Park has fished Hana Bay since childhood and shares his experience with our guests on this fishing expedition.</p>
            </div>
            <div class="listing">
                <h6>Tidal Pool Hunt <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Join our guide on a fun and invigorating walk down the spectacular Hana coastline and explore four different tidal pools of the reef. Learn about the history of Hana, its ecosystems and marine life.</p>
            </div>
            <h2>Fitness</h2>
            <div class="listing">
                <h6>Six-Pack Abs <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>The abs are important for our posture and healthy spine. With awareness of these muscles and effective exercises, you can rediscover your six-pack abs. This is a workout that will enhance your ability to activate your core muscles and help to uncover them.</p>
            </div>
            <div class="listing">
                <h6>HardCORE Workout <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>The name of this class is both a description and a goal! This is an intense, 45-minute class that focuses on strengthening and toning your core or "powerhouse" muscles. </p>
            </div>
            <div class="listing">
                <h6>Zumba Fitness <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p> Zumba is a revolutionizing fitness experience, that takes you on an unforgettable, exhilarating journey to a healthy and happy lifestyle. Jam-packed with red-hot dance steps, pulsating Latin and international rhythms, and feel-it-to-the-core routines, this invigorating dance-fitness party will have you movin', rockin' and shakin' the weight off.</p>
            </div>
            <div class="listing">
                <h6>Yoga for Hips &amp; Knees <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Hips and knees often take a toll during everyday living and sports activities. This workout will create more awareness, range of motion and strength to the muscles around these joints for better mobility and enjoyment of an active life.</p>
            </div>
        </div>
        <div class="col span_1_of_2">
            <div class="listing">
                <h6>Kettlebells Full Strength <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Kettlebell Full Strength will help kick all your fitness goals into high gear! These functional, compound exercises work multiple muscle groups simultaneously, developing strength and muscular endurance while burning many calories. In this 45-minute, high-intensity class, you will focus on functional movement, power, strength, joint stability, alignment, balance and control. Working with the kettlebell is combined with BOSU and body weight exercises for an all-around heart-pumping workout.</p>
            </div>
            <div class="listing">
                <h6>Salsa Dance &amp; Abs <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Partner up with your abs to move to salsa music and watch your six packs soar and get sore.</p>
            </div>
            <h2>Culinary</h2>
            <div class="listing">
                <h6>Island Brew Hop <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <br />
            </div>
            <div class="listing">
                <h6>Beer Tasting <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Beer is the third most popular drink in the world, so this is the perfect opportunity to learn how to make different styles of beer.  Hop on over to get brewing!</p>
            </div>
            <div class="listing">
                <h6>Grilling &amp; Smoking Demonstration <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Summer is the perfect time to light up the grill and enjoy some great BBQ!  And what dad doesn’t appreciate a big Texas steak on a hot summer day?  Come learn some new smoking and grilling techniques and recipes to enjoy at home on the deck!</p>
            </div>
        </div>
    </div>  
      
  </section>
  
  <section class="grey pad">
        <h4>See upcoming months</h4>
  		<div class="group">
            <div class="col span_1_of_3 month"><div class="active"><a href="/calendar/2013/june/"><img src="/assets/images/months/jun-man.png" alt="June is Man Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2013/july/"><img src="/assets/images/months/jul-independence.png" alt="July is Independence Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2013/august/"><img src="/assets/images/months/aug-dive.png" alt="August is Dive Month"></a></div></div>
        </div>
  </section>
  
</article>
</section>
<?php

 
include_once($path."/Library/Travaasa_Testimonials.php");
if ($loc == 'hana') :
include_once($path."/Library/Travaasa_Footer_Hana.php");
elseif ($loc == 'austin') :
include_once($path."/Library/Travaasa_Footer_Austin.php");
else :
include_once($path."/Library/Travaasa_Footer.php");
endif; 
include_once($path."/Library/Travaasa_Scripts.php");
?><script type="text/javascript">
$(function() {
	createSubpageStorylines(true, true);
});
</script>
</body>
</html>