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
      <div class="slide"><img src="/assets/images/feature_months_september_2013_1600x640.jpg" alt="September is Uncover month at Travaasa"></div>
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

            <div class="listing">
              <h6>LABOR DAY POOL PARTY <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
              <p>Join us Monday, September 2nd for a decidedly laborless Labor Day featuring drinks and snacks by the pool</p>
            </div>

            <h2>Culinary</h2>

            <div class="listing">
              <h6>MYSTERY BOX CHALLENGE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Uncover your cooking creativity! You'll receive a mystery box full of fun foods and will be tasked with developing your own unique recipes. Our culinary team will review basic cooking skills and help guide you as you try your hand at combining new flavors.</p>
            </div>
            <div class="listing">
              <h6>REVEAL THE FRUIT OF LIFE <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Found across most of the tropics, the coconut ("niu") is known for its great versatility and is part of the daily diet of Hawaiian people. Labeled the Fruit of Life, in this class you’ll uncover the coconut’s many secrets. Learn the art of husking a coconut and how to turn its fresh water into milk.</p>
            </div>

            <h2>Culture</h2>

            <div class="listing">
            <h6>UNCOVER THE HISTORY OF HANA <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
            <p>Discover the treasure of Hāna by touring the Plantation Guest House. This lovingly restored, turn-of-the-century home is accented by warm Hawaiian woods, earthy island hues and Hawaiian art, taking you back to the Hawaiʻi most never get to experience.</p>
            </div>

            <h2>Fitness</h2>

            <div class="listing">
                <h6>PILATES REVEALED <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Learn the components of the Pilates Method and connect with yourself for better posture and a healthier spine.</p>
            </div>
            <div class="listing">
                <h6>NECK/SHOULDER YOGA THERAPY REVEALED <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Use yoga asanas to uncover your neck and shoulder imbalances and repattern your posture. Become more aware of your bandas to create support for your spine, shoulders, neck and head as you open and strengthen your heart and throat chakras.</p>
            </div>
            <div class="listing">
                <h6>THAI PARTNER STRETCH UNVEILED <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>These stretches are sure to energize and rejuvenate you. You’ll be positioned in a variety of yoga-like poses while deep static and rhythmic pressures are applied to your body. The stretch can be performed solo or in a group of a dozen or so individuals.</p>
            </div>
            <div class="listing">
                <h6>DISCOVER SWING DANCE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Get footloose and fancy-free. Let the music move you while you condition your cardiovascular system with easy steps and patterns done to big band music.</p>
            </div>
            <div class="listing">
                <h6>PLAY UNEARTHED <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Enjoy fun outdoor activities that will improve your stamina, strength, flexibility and spirits. Play games and challenge yourself while competing with others, all while walking, squatting, lunging, balancing, jumping and climbing your way to a happier, healthier you.</p>
            </div>
            <div class="listing">
                <h6>KETTLEBELLS AND GLIDERS UNCOVERED <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Add some intensity to your workout. You’ll glide and use the kettlebells as you squat, lunge, balance, do planks, bridges, twists and perform all kinds of multi-joint exercises that enhance your physical performance during daily tasks and sports activities.</p>
            </div>
            <div class="listing">
                <h6>GENTLE YOGA UNVEILED <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Using breath and brief meditation, you’ll focus on yoking your mind and body to better understand the wisdom of your body and how they are connected. Much of this introductory class will be performed on a mat via a few basic balancing poses.</p>
            </div>
            <div class="listing">
                <h6>QOYA — UNCOVERING AUTHENTIC SELF <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>This unique movement practice, designed for women, will help you reveal your true essence as a wise, wild and free being. It combines the wisdom of yoga, the feeling of wildness through sensual movement, and freedom of expression with dance to cultivate connectedness to one’s true, authentic self. This fun, one-of-a-kind experience is accompanied by great music.</p>
            </div>
            <div class="listing">
                <h6>UNCOVER CHAKRA-CENTERED YOGA <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Uncover the energetic centers of your body, the chakras. You’ll weave together yantras (sacred symbols), breathing exercises, postures and guided imagery to create a direct experience with these centers that energize your body. The completion of this journey will include deep relaxation that focuses on the integration and sharing of the experience.</p>
            </div>
            
        </div>
        <div class="col span_1_of_2">
            
            <div class="listing">
                <h6>UNCOVER YOUR PILATES POWERHOUSE <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Joseph Pilates referred to the core as our “Powerhouse.” It is no coincidence that this area of the body corresponds to the center of our power, the solar plexus. Manipura is the Sanskrit name for this energetic component that houses ego, sense of humor and where we develop our will. We will strengthen our core muscles and activate our Mula Bandha with intentional breath and visualization to uncover the “power” within our own “house.”</p>
            </div>
            <div class="listing">
                <h6>UNCOVER YOUR INNER CHILD <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>When children play, they laugh, smile, have fun and are uninhibited in their expression of pure joy. They’re also getting exercise without being conscious of it. In this class, you’ll take part in activities, like jumping rope, hopscotch, base running, skipping and hot potato, that will bring you back to your childhood. You might even forget just how hard you’re working out.</p>
            </div>
            <div class="listing">
                <h6>YOGA MUDRAS – HONORING THE ESSENTIAL <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Uncover and honor what is essential through the practice of mudras (hand yoga) and conscious breathing. Learn yoga mudras, each distinctly related to the systems of organs and emotions within the body-mind called chakras. Calm and focus the mind, cleanse and nourish the organs, rekindle and channel elemental energies. Through the practice of mudras, you’ll awaken your essence and learn to navigate life’s circumstances with grace, courage and joy.</p>
            </div>
            <div class="listing">
                <h6>HANA RELAY <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Large groups of people run on a 52-mile course from Kahului Airport along the Hāna Highway to the finish line at the Hāna Ballpark, located just a few steps away from Travaasa Hāna. There will be lots of cheering and excitement at the ballpark where a celebration for all of the runners will be held. If you see our Travaasa Van on the Hāna Highway, honk your horn and cheer for our team.</p>
            </div>
            <div class="listing">
                <h6>UNCOVER INTERMEDIATE YOGA: WISDOM OF THE CHAKRAS <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Yogis believe there are seven energetic centers in the human body called chakras. Each chakra builds on the next. In this class, we’ll focus on the first two chakras, which involve the feet, legs and lower back.</p>
            </div>
            <div class="listing">
                <h6>UNVEIL GENTLE YOGA: THE WISDOM OF THE BODY <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>When we can tune into our bodies, we have access to a wealth of information. Throughout this class, we will reflect on the mind/body relationship. Much of the class will be on the mat with a few gentle balancing poses.</p>
            </div>
            <div class="listing">
                <h6>INTERMEDIATE YOGA REVEALED: THE WISE JOURNEY <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Yoga is a journey of self-discovery. Through a mix of hatha and flow, we will start from where we are and explore places where we may feel fixed in our bodies and minds. Recommended for guests with some experience in yoga but all are welcome.</p>
            </div>

             <h2>Spa &amp; Wellness</h2>

            <div class="listing">
                <h6>FOOT CARE UNCOVERED <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Feel lighter on your feet with the basics of foot care and balance. This class will help you get a healthier spine from the bottom up.</p>
            </div>
            <div class="listing">
                <h6>EXPOSE YOUR CHI <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Learn to uncover and foster the energy around you to find your center and balance your body.</p>
            </div>
            <div class="listing">
                <h6>SPA MEDITATION UNMASKED <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>This meditation practice incorporates relaxing spa oils to help you uncover your inner self and start healing and rejuvenating both physically and emotionally.</p>
            </div>
            <div class="listing">
                <h6>UNCOVER YOUR INNER SELF MEDITATION <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>This guided meditation uses visualization techniques as a means of concentration. Through focus on guided words, you’ll open yourself up to experience your deeper inner self within a meditative state.</p>
            </div>
            <div class="listing">
                <h6>CHAKRA AWARENESS MEDITATION <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Through deep relaxation and focus on breath and sounds, you’ll cultivate a sense of open awareness. This practice concentrates on the energy centers of the body that correspond to our endocrine system – the chakras. Using guided imagery, you’ll experience a meditative state that focuses on specific chakras. By gazing at the yantras (sacred geometric symbols) of the chakras, you will experience a sense of integration at a universal level of shared consciousness.</p>
            </div>

        </div>
    </div>  
      
  </section>
  
  <section class="grey pad">
        <h4>See upcoming months</h4>
  		<div class="group">
            <div class="col span_1_of_3 month"><div><a href="/calendar/2013/august/"><img src="/assets/images/months/aug-dive.png" alt="August is Dive Month"></a></div></div>
            <div class="col span_1_of_3 month"><div class="active"><a href="/calendar/2013/september/"><img src="/assets/images/months/sep-uncover.png" alt="September is Uncover Month"></a></div></div>
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