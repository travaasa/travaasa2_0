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
	<title>Travaasa July 2013 Featured Experiences</title>
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
      <div class="slide"><img src="/assets/images/feature_months_july_2013_1600x640-hana.jpg" alt="July is Independence Month at Travaasa"></div>
    </div>
</section>
<section id="content">
<article id="main">
  <section class="intro pad clearfix">    
    <div class="section group">
    	<div class="col span_1_of_2">
            <h2>Fitness</h2>
            <div class="listing">
                <h6>Zumba&#174; Fitness <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Zumba&#174; is a revolutionary fitness experience. It takes you on an unforgettable, exhilarating journey to a healthier and happier lifestyle. Jam-packed with steaming-hot dance moves, pulsating Latin and international rhythms and feel-it-to-the-core routines, this invigorating dance-fitness party will have you movin' and groovin' the fat right off.</p>
            </div>
            <div class="listing">
                <h6>Salsa Dance &amp; Joy <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Let's experience the joy of dancing. Begin with the basic footwork, embrace your partner and move in harmony around the dance floor. In this Salsa Dance class, you will learn the basic salsa steps, how to properly lead and turn, and some beginner-to-intermediate patterns to go salsa dance with confidence!</p>
            </div>
            <div class="listing">
                <h6>Tai Chi Joy <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Tai Chi is a joyful practice that empowers our energy centers. It is also described as "meditation in motion" and helps us to nurture our body as we gather energy and calm our mind. The Tai Chi forms (or postures) are done in a relaxed, artful and linked way, with the circular and rhythmic movements of one position flowing seamlessly into the next. The five essential qualities of Tai Chi are: slowness to develop awareness, lightness to make movements flow, balance to prevent body strain, calmness to maintain continuity and clarity to focus the mind. Some claim that Tai Chi helps with various health conditions and has both physical and mental benefits.</p>
            </div>
            <div class="listing">
                <h6>Foot Care <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>The feet are an extremely vital part of the musculoskeletal system. They are the base of support. They accelerate and decelerate the whole body and influence all the other joints above, including your spine. Learning about your feet as well as massaging and strengthening them is very important for mobility and back health. It is also important to note that certain areas in the foot, when stimulated, will affect certain organs. This class will help to improve mobility, strength, power and general health.</p>
            </div>
            <div class="listing">
                <h6>Aqua Yoga <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Practicing yoga in the pool is for everybody, from folks who need a little extra support to those who are just looking for a new way to deepen their yoga practice. We will use the pool wall and noodles for support while keeping our head nice and dry.</p>
            </div>
            <div class="listing">
                <h6>Aqua Aerobics <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Kick off your day with a wet, weightless workout!  Enjoy the cardiovascular and strength building benefits of water resistance exercises with other guests and our local Kupuna (elders).  This class is safe and effective for everybody and is a great way to stay cool while you work out.</p>
            </div>
            <div class="listing">
                <h6>Inspire Fitness Boot Camp <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Come be inspired to work a little harder toward your fitness goals. We use teamwork and camaraderie as integral parts of this Fitness Boot Camp class. So, look no further, and find the true joy of exercise while working out with others toward a common goal.</p>
            </div>
        </div>
        <div class="col span_1_of_2">
            <div class="listing">
                <h6>Core Elation <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Come find the joy of a stronger, more shapely torso by challenging the powerhouse of your body, the "core." This fitness class focuses on the muscles that control and support your spine, pelvis and shoulder girdle. In this short 45-minute class, you will improve your posture and alignment while strengthening and toning your waistline.</p>
            </div>
            <div class="listing">
                <h6>Celebrating Yoga <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Energize your body and mind with a flowing Hatha-style Yoga experience.  Celebrate gratitude for your health as you integrate breath, movement and kinesthetic awareness surrounded by the natural beauty of Austin or Hana.</p>
            </div>
            <div class="listing">
                <h6>Pilates &#8211; Ignite Your Core <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Pilates practice is a well-rounded exercise method that works with the deeper muscles along the spine. They are very important for good posture and mobility. Ignite your core with this practice for a stronger torso and increased core stability, which creates greater range of motion; stronger, more controlled movement; and a leaner, more toned physique.</p>
            </div>
            <div class="listing">
                <h6>Yoga Therapy for Hips &amp; Knees <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Hips and knees often take a toll during everyday living and sports activities. This workout will create more awareness, range of motion and strength to the muscles around these joints for better mobility and enjoyment of an active life.</p>
            </div>
            <h2>Spa &amp; Wellness</h2>
            <div class="listing">
                <h6>Aqua Aerobics <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Kick off your day with a wet, weightless workout!  Enjoy the cardiovascular and strength building benefits of water resistance exercises with other guests and our local Kupuna (elders).  This class is safe and effective for everybody and is a great way to stay cool while you work out.</p>
            </div>
            <div class="listing">
                <h6>Igniting a Meditation Practice <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Learn light stretches that help prepare the body for meditation along with comfortable sitting postures, and be led through a guided meditation.</p>
            </div>

            <h2>Culinary</h2>
            <div class="listing">
                <h6>BBQ <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Texans love their BBQ, and you can learn how to prepare wonderful recipes to prepare back home.</p>
            </div>
            <div class="listing">
                <h6>To Your Health &#8211; Juicing <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Get healthy the natural way with whole fruit juice! This is not a diet or a fad; it is a revolutionary method of getting all the vitamins and minerals your body needs in a natural, effective and more time-efficient way. Drink to your health!</p>
            </div>
        </div>
    </div>  
      
  </section>
  
  <section class="grey pad">
        <h4>See upcoming months</h4>
  		<div class="group">
            <div class="col span_1_of_3 month"><div class="active"><a href="/calendar/2013/july/"><img src="/assets/images/months/jul-independence.png" alt="July is Independence Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2013/august/"><img src="/assets/images/months/aug-dive.png" alt="August is Dive Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2013/september/"><img src="/assets/images/months/sep-uncover.png" alt="September is Uncover Month"></a></div></div>
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