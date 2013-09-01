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
      <div class="slide"><img src="/assets/images/feature_months_august_2013_1600x640.jpg" alt="August is Dive Month at Travaasa"></div>
    </div>
</section>
<section id="content">
<article id="main">
  <section class="intro pad clearfix">    
    <div class="section group">
    	<div class="col span_1_of_2">
            <!--<div class="listing">
                <h6>XXXXXX <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>OOOOOOOOOOOOOOO</p>
            </div>
            <div class="listing">
                <h6>XXXXXX <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>OOOOOOOOOOOOOOO</p>
            </div>
            <div class="listing">
                <h6>XXXXXX <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>OOOOOOOOOOOOOOO</p>
            </div>-->
            <h2>Adventure</h2>
            <div class="listing">
                <h6>Target and Dive <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Learn the art of fishnet throwing passed on in Hawaiian families from generation to generation. You’ll cast your net into our Garden Pool to perfect your throwing technique and prepare you to dive right in for your catch! Don't forget your swimsuit.</p>
            </div>
            <div class="listing">
                <h6>Stand Up and Snorkel <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Hoe he'e nalu (stand-up paddle boarding) is an emerging global sport with a strong Hawaiian heritage. Learn how to stand-up paddle board, and finish your class with a dive in the ocean as you snorkel over gorgeous reefs.</p>
            </div>
            <div class="listing">
                <h6>Soaker Golf <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Cool off with a game of soaker golf. This game uses water blasters and small cups in place of golf balls. The concept is simple: Launch the cup and have it land in the bucket using as few squirts as possible.</p>
            </div>
            <div class="listing">
                <h6>Stand Up Paddling <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Develop balance and core strength as you enjoy a popular water sport that honors Hana’s Hawaiian culture.</p>
            </div>
            <!--<div class="listing">
                <h6>Lake Travis Zipline; Austin Expedition School <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>&nbsp;</p>
            </div>-->
            <h2>Culinary</h2>
            <div class="listing">
                <h6>Refreshment: Water Tasting <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Staying hydrated in the summer is extremely important. Learn how to make some simple flavored waters that will get you more excited about drinking water and impress your guests at your next gathering.</p>
            </div>
            <div class="listing">
                <h6>Raw Food and Juicing <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Learn about the valuable nutrients in raw vegetables and fruits and how blending them helps make nutrients more readily available to your body. Sample some raw-food juices and dive into a heathier lifestyle.</p>
            </div>
            <h2>Culture</h2>
            <div class="listing">
                <h6>Kite Diving <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>David Malo, a Native Hawaiian historian, stated, “Kite-flying deserves special mention as a pastime that was dear to the Hawaiian heart, the practice of which recurred with the regularity of the seasons.” Relive this Hawaiian pursuit and embrace the summer winds of Maui while making a kite float and dive across the sky.</p>
            </div>
            <div class="listing">
                <h6>Put Some "Hoop" Into Your "Hula"  <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Hula hooping is a fun, exciting way to get a whole body workout. Learn how to utilize the hoop as a tool for exercise, dance and self-expression. Maybe even learn a trick or two? This class is great for anyone looking to dive into something new.</p>
            </div>
            <div class="listing">
                <h6>Labor Day Mountain Ball Tournament <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Hana’s traditional Labor Day tournament takes place each year at Hana Ballpark, located steps away from Travaasa Hana. Teams from all over Hawai‘i come to Hana to take part in this community event. The history of the hotel and the ballpark, which was built in the 1940s to hold the San Francisco Seals summer camp, are united. The Seals were owned by Paul Fagan who began the hotel in 1946 and was also the original owner of Hana Ranch. There will be lots of cheering and lively entertainment throughout the tournament, unless a visiting team is winning.</p>
            </div>
            <h2>Fitness</h2>
            <div class="listing">
                <h6>Water Aerobics <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Dive into fitness without breaking a sweat. Join us for a cool time in the pool.</p>
            </div>
            <div class="listing">
                <h6>Dive Into Pilates <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Try this well-rounded exercise method that works the deeper muscles along the spine – muscles vital to posture and mobilitiy. Dive into this practice to strengthen your torso and increase core stability for greater range of motion, stronger, more controlled movement and a leaner, more toned physique.</p>
            </div>
            
        </div>
        <div class="col span_1_of_2">
            <div class="listing">
                <h6>Tai Chi Dive and Surf <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Submerge your entire body in Tai Chi Chuan, which loosely translates to mean “Supreme Ultimate Exercise.” It utilizes breathing, visualizations and circular movements to work the entire body at once, via smooth, continuous, natural movements that generate health, longevity and internal strength. Simple yet profound, Tai Chi is based on the idea that everything consists of two opposing forces that harmonize with each other to create a whole. The easiest way to see and understand this is with a Taiji diagram: Yang-Yin, White-Black, Exhale-Inhale, Release-Store, Expand-Contract, Give-Receive, Offense-Defense, Dive-Surf.</p>
            </div>
            <div class="listing">
                <h6>Aqua Yoga <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Dive into this form of yoga. Literally. Practicing yoga in the pool is for everyone, from folks who need a little extra support to those just looking for a new way to deepen their yoga practice. It’s even for those who don’t want to get their hair wet. You’ll use the pool wall and foam noodles for support, while keeping your head nice and dry.</p>
            </div>
            <div class="listing">
                <h6>Yoga Hips and Knees Renewal Plunge  <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>You’ll feel like you’re floating after this restoring workout. Hips and knees often take a toll during everyday living and sports activities. This renewal workout will create more awareness and range of motion and increase the strength of the muscles around the hip and knee joints. Opening the hips will also help to open your mind and soul for better mobility and enjoyment of an active life.</p>
            </div>
            <div class="listing">
                <h6>Jump Up and Get Down <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Dive into a new fitness routine with this power-packed circuit workout! Get your heart pumping with various jump rope drills, then get down with a challenging circuit of strength exercise stations. No fancy choreography here … just nonstop fitness and fun. For those who think sweating is fun.</p>
            </div>
            <div class="listing">
                <h6>Pool Volleyball <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Enjoy a little cool competition as you jump, spike and dive into action in our amazing infinity pool.</p>
            </div>
            <h2>Spa &amp; Wellness</h2>
            <div class="listing">
                <h6>Watsu&#174; <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Test the waters with an innovative body-healing spa treatment. Watsu® uses the warmth and buoyancy of 96-degree water and a combination of unique stretches and natural movements in a secluded pool to help improve circulation, relieve nerve pressure and lessen stress, arthritis, anxiety and chronic pain. Our certified Watsu practitioners will fit the 60-minute treatment to your liking and body’s needs.</p>
            </div>
            <div class="listing">
                <h6>Deep Dive Into Foot Care <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>You’re on your feet a lot, even when you don’t realize it. Learning the proper mechanics of how to use your feet is essential to their health and the health of the other joints above, including your back. Going deeper into your feet, massaging them and strengthening them will help you stay mobile and afloat, surfing to an overall better posture and healthier lifestyle.</p>
            </div>
            <div class="listing">
                <h6>Dive Into Inner Self-Meditation  <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Just breathe. And visualize the energy forces within and around you to connect you more deeply with your inner self. </p>
            </div>
            <div class="listing">
                <h6>Qoya – At One with Water  <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Soak in this unique water experience for women. Tap into your true essence and explore yourself as wise, wild and free. Through yoga and dance, the flowing and cleansing properties of water will be your focus and will assist in renewing your outlook on who you are and how you feel.</p>
            </div>
            <div class="listing">
                <h6>Dive Into Your Past: Journaling <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Reflect on water/beach excursions from your past and capture memories from your current adventures at Travaasa.</p>
            </div>
            <div class="listing">
                <h6>Delve Into Your Root Chakra Yoga <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p> There are seven energy centers in the human body called chakras. Each chackra builds on the next. The first, called the root chakra, is located at the beginning of the spine by the tailbone and relates to the feet, legs and feelings of groundedness. In this class, you will learn about the foundations of each chakra and the psychological aspects of the root chakra.</p>
            </div>
        </div>
    </div>  
      
  </section>
  
  <section class="grey pad">
        <h4>See upcoming months</h4>
  		<div class="group">
            <div class="col span_1_of_3 month"><div class="active"><a href="/calendar/2013/august/"><img src="/assets/images/months/aug-dive.png" alt="August is Dive Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2013/september/"><img src="/assets/images/months/sep-uncover.png" alt="September is Uncover Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2013/october/"><img src="/assets/images/months/oct-harvest.png" alt="October is Harvest Month"></a></div></div>
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