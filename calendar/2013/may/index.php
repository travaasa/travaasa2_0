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
	<title>Travaasa May 2013 Featured Experiences</title>
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
      <div class="slide"><img src="/assets/images/feature_months_may_2013_1600x640.jpg" alt="May is Nuture Month at Travaasa"></div>
    </div>
</section>
<section id="content">
<article id="main">
  <section class="intro pad clearfix">    
    <div class="section group">
    	<div class="col span_1_of_2">
            <h2>Fitness</h2>
            <div class="listing">
                <h6>Boot Camp Training <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Let this nature-filled workout be your morning coffee. This outdoor boot camp class incorporates many different training modalities, including strength, cardio, core, speed, agility, flexibility and injury prevention. This high-energy, outdoor/indoor workout will leave you feeling refreshed and ready to take on your day!</p>
            </div>
            <div class="listing">
                <h6>BOSU Uplifting <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>This total body BOSU workout will uplift and refocus your mind and body. These core and balance-focused exercises will strengthen every muscle group in your body while reinforcing your mind-to-body connection.</p>
            </div>
            <div class="listing">
                <h6>Cherish Your Pilates Practice <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Pilates practice is a well-rounded exercise method that works with the deeper muscles along the spine. They are very important for one's posture and mobility. Pilates encourages a strong torso and core stability, which creates greater range of motion; stronger, more controlled movement; and a leaner, more toned physique.</p>
            </div>
            <div class="listing">
                <h6>Core Support Training <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>You have probably at least heard the term core or core stability. These terms are now commonly used by physical therapists, fitness professionals and even some doctors. The "core" is a word used to describe a group of deeper muscles along the torso which support the spine, pelvis and shoulder girdle. Strengthening these muscles will not only give you a thinner, sleeker waistline, they also help reduce and prevent lower back pain and improve postural alignment. This class focuses on strengthening and toning the core muscles.</p>
            </div>
            <div class="listing">
                <h6>Zumba Fitness <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Dance as you explore other cultures and their moves. Discover your natural happiness that arises when we move freely to various ethnic rhythms. Zumba is a fun dance party that can burn as many as 600 calories per hour.</p>
            </div>
            <div class="listing">
                <h6>Embrace Your Hips &amp; Knees Yoga <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Our hips and knees are all connected and often they are in need of some nurturing. Using yoga asanas will create more awareness,  range of motion and strengthen the muscles around these joints for better mobility and enjoyment of life.</p>
            </div>
        </div>
        <div class="col span_1_of_2">
            <div class="listing">
                <h6>Nurturing Yoga <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>A gentle yoga class designed to restore and renew. </p>
            </div>
            <div class="listing">
                <h6>Nurture Your Feet <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Your feet are an extremely vital part of your musculoskeletal system. They can influence all the other joints above, including your spine. Learning about your feet, massaging them and strengthening the muscles that are necessary for good posture and alignment is imperative. It is also important to note areas in the foot that, when stimulated, will affect some of our organs. Thus good foot care will certainly be great for your posture, mobility and general health.</p>
            </div>
            <div class="listing">
                <h6>Embrace &amp; Dance <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Let's embrace our inner dancer and your dance partner. Begin with the basic footwork, embrace your partner and move in harmony around the dance floor. In this salsa dance class, you will learn the basic salsa steps, how to properly lead and turn, and some beginner-to-intermediate patterns to go salsa dance with confidence!</p>
            </div>
            <h2>Culinary</h2>
            <div class="listing">
                <h6>Comfort Foods <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Learn healthy ways to prepare those old-time favorites that mother used to make.</p>
            </div>
            <h2>Culture</h2>
             <div class="listing">
                <h6>May Lei Celebration <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Ancient Polynesians honored the gods by twining flowers and greens into adornments for the body.  Learn the art of lei making from our Makana team.  Craft a ti leaf, feather or shell lei to take home and cherish for years to come.</p>
            </div>
            <h2>Spa &amp; Wellness</h2>
            <div class="listing">
                <h6>Nurturing Breath <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Connect with Mother Earth and use your breath to direct the healing energy of life throughout your body.</p>
            </div>
        </div>
    </div>  
  </section>
  
  <section class="grey pad">
        <h4>See upcoming months</h4>
  		<div class="group">
            <div class="col span_1_of_3 month"><div class="active"><a href="/calendar/2013/may/"><img src="/assets/images/months/may-nuture.png" alt="May is Nurture Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2013/june/"><img src="/assets/images/months/jun-man.png" alt="June is Man Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2013/july/"><img src="/assets/images/months/jul-independence.png" alt="July is Independence Month"></a></div></div>
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