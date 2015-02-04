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
	<title>Travaasa October 2013 Featured Experiences</title>
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
      <div class="slide"><img src="/assets/images/feature_months_october_2013_1600x640.jpg" alt="October is Harvest month at Travaasa"></div>
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
                <h6>HARVEST THE SPLENDOR OF THE SEA <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Join expert and native Hawaiian fisherman, Andrew Park, to explore tide pools, try your hand at Hawaiian throw-net fishing and learn how to make (and fish with) a bamboo pole. In Hawai‘i, the fall harvest isn’t all about pumpkins and squash, but reaping the bounty of the sea.</p>
            </div>

            <h2>Culinary</h2>

            <div class="listing">
                <h6>HARVEST YOUR HEALTH JUICING <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Celebrate living healthily and in harmony with nature by sampling some of the best juice the fall harvest has to offer. Green vegetables have more valuable nutrients than any other food in existence, and mixing them with fruit helps make those nutrients more readily available to the body.</p>
            </div>
            
            <div class="listing">
                <h6>AUTUMN JUICING <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Learn how to reap the joy and health benefits of juicing Mother Nature’s plenty. After all, there’s no better time to juice than during the fall harvest.</p>
            </div>
            
            <div class="listing">
                <h6>PUMPKIN AND SQUASH <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>There’s way more to pumpkins than spooky jack-o’-lanterns or Grandma’s pumpkin pie. Learn several scrumptious ways to prepare this sumptuous squash.</p>
            </div>

            <div class="listing">
                <h6>BREWING PUMPKINS <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Toast to the spirit of the season with our handpicked selection of Pumpkin Ales. With crisp autumn breezes, comes a cornucopia of unique flavors, and Travaasa’s beermeister has selected the most delicious ones for you to sample.</p>
            </div>

            <h2>Culture</h2>

            <div class="listing">
                <h6>GHOST STORIES AROUND THE FIRE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Gather around the crackling campfire for a spooky night of chilling local ghost stories and eerie tales from the beyond. The month before All Hallows’ Eve, the air cools and spirits come out to play.</p>
            </div>

            <div class="listing">
                <h6>ALOHA WEEK <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Join families from all over Maui for an enriching celebration of music, dance and special history, including a reenactment of our ali‘i (royal family) and other live entertainment. Aloha Week is Hawai‘i’s premier cultural showcase dedicated to preserving unique island traditions. Please note the opening day of this festival (October 13) will bring many people to Hāna, and a portion of the road will be closed from 11 a.m. to 1 p.m.</p>
            </div>

            <h2>Fitness</h2>

            <div class="listing">
                <h6>BEYOND SALSA STEPS <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Spice up the fall weather by learning some new Salsa dance steps. Dance the night away for fitness and fun, and even create a few patterns of your own.</p>
            </div>

            <div class="listing">
                <h6>REAP YOUR CORE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Harvest better posture, balance and power, and discover your girdle of strength as you activate your intrinsic muscles.</p>
            </div>

            <div class="listing">
                <h6>PILATES SEEDS FOR CENTERING <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Learn how to gather your inner balance and control the muscles along your spine through mindfulness of breath and movement.</p>
            </div>

            <div class="listing">
                <h6>GREET THE GLOWING SUN YOGA <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Welcome the autumn sun while practicing “Surya Namaskara,” or Sun Salutations. This class will break down every pose, acclimating you to each movement and transition until the sequence becomes one inspiring meditation. No matter your skill level, you can adjust this sequence of poses to practice as a warm-up or as the heart of your yoga routine.</p>
            </div>

            <div class="listing">
                <h6>PLANT A YOGA PRACTICE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Take in the fundamentals of yoga. This beginning class breaks down popular poses and discusses the variety of ways you can develop a regular routine to practice at home.</p>
            </div>
            
        </div>
        <div class="col span_1_of_2">

            <div class="listing">
                <h6>HOT TUB YOGA <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Heat up your yoga sequence by stretching out in a hot tub. From folks who need a bit of extra support, to those who just want to deepen their practice, this class is a great way to gently harvest your inner strength. Don’t worry, you’ll use the pool for stability while keeping your head nice and dry.</p>
            </div>

            <div class="listing">
                <h6>HARVEST STRENGTH AND RELAXATION <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Plant the seeds of relaxation by cultivating your inner heat and strength. In this intermediate class, you’ll focus on leg, arm and core strength, and then reap what you’ve sewn with a gratifying cooldown.</p>
            </div>

            <div class="listing">
                <h6>GO NUTS WITH COCONUTS <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Join us for a fun-filled workout that uses nothing but Mother Nature’s bounty — coconuts. Coconuts are healthy, but they also make great exercise equipment. Cultivate your strength through a cornucopia of exercises, including soccer tosses, jump shots, coco shuttles, push-ups, Russian twists, planks, coco hops, coco break dancing, coco squats and many more.</p>
            </div>

            <div class="listing">
                <h6>TAI CHI SPARK <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Learn the fundamentals of tai chi, and spark the energy centers in your physical body to access your spiritual drive. There’s no better time to tap into your inner fire, with vibrant fall colors glowing all around you.</p>
            </div>

            <div class="listing">
                <h6>KETTLEBELLS GLIDER WORKOUT <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Plant some fun and intensity into your workout while using props that enhance total body conditioning. You’ll glide and use the kettlebells as you squat, lunge, balance and complete more multi-joint exercises to enhance your physical performance in day-to-day activities.</p>
            </div>

            <div class="listing">
                <h6>HARVEST YOUR INNER CHILD HULA HOOPING <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Revive your inner child and have a blast with this back-to-basics fitness Hula-Hooping class. Get a great workout while learning the basics of hula hooping. Revisit the days when exercise was never boring as you start losing inches while having fun. Maybe your next feat will even be leaping headfirst into a pile of leaves.</p>
            </div>

            <div class="listing">
                <h6>GATHER YOUR STRENGTH WITH FREE WEIGHTS <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Harvest your muscular strength and grow more definition in your physique in this 45-minute Free-Weights class. Chisel your body while increasing your strength and endurance. With the help of dumbbells, props and some ultra-effective sculpting moves, you’re sure to leave feeling stronger and more physically fit. Pumpkins shouldn’t be the only things getting carved into something spectacular this fall.</p>
            </div>

            <div class="listing">
                <h6>HIPS AND KNEES YOGA THERAPY <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Give your hips and knees some pampering after a day of hiking through the rich autumn foliage. This transforming therapy creates more awareness and a wider range of motion while strengthening the muscles around these joints. Opening the hips also helps open minds to enjoy an active life with better mobility.</p>
            </div>

            <div class="listing">
                <h6>HARVESTING STRENGTH AND FLEXIBILITY YOGA <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Get ready to plant your core into the ground and watch your flexibility grow. In this intermediate class, you’ll nourish the seeds of relaxation in your inner heat and strength. After focusing on asanas that strengthen your arms, legs and core, you’ll reap what you’ve sewn with a relaxing cooldown centered around increasing flexibility.</p>
            </div>

            <h2>Spa &amp; Wellness</h2>

            <div class="listing">
                <h6>MIND BODY MEDITATION <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Envision yourself stretching out in a pile of leaves, inhale and say “om.” This refreshing class incorporates gentle movement, stretches and breathing to create a relaxing experience and a clear, centered state of mind.</p>
            </div>

            <div class="listing">
                <h6>PLANTING SEEDS OF COMPASSION MEDITATION <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Discover how meditation is not only a useful tool for gaining insight into your mind’s roots, but it’s an amazing opportunity to cultivate and practice compassion. In this transforming class, you’ll be guided though visualizations that strengthen your ability to sprout kindness in yourself and others.</p>
            </div>

            <div class="listing">
                <h6>HARVEST SPECIAL MEMORIES JOURNALING <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Rake up your fond autumn memories and bag them into a journal so you can rekindle your warm feelings long past fall.</p>
            </div>

        </div>
    </div>  
      
  </section>
  
  <section class="grey pad">
        <h4>See upcoming months</h4>
  		<div class="group">
            <div class="col span_1_of_3 month"><div class="active"><a href="/calendar/2013/october/"><img src="/assets/images/months/oct-harvest.png" alt="October is Harvest Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2013/november/"><img src="/assets/images/months/nov-stop.png" alt="November is Stop Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2013/december/"><img src="/assets/images/months/dec-joy.png" alt="December is Joy Month"></a></div></div>
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