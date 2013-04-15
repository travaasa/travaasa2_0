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
	<title>Travaasa - Real Travel for Real Experiences.</title>
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