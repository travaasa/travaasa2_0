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
                <p>Train like a pro and join our fitness team as we perform exercise drills to help warm up for the summer season.</p>
            </div>
            <div class="listing">
                <h6>Back to Nature Boot Camp <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Let this nature-filled workout be your morning coffee. This outdoor boot camp class incorporates many different training modalities, including strength, cardio, core, speed, agility, flexibility and injury prevention. Join us for this fun, high-energy, outdoor adventure!</p>
            </div>
            <div class="listing">
                <h6>Cultivate Happiness Collage <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Create a lovely magazine collage and stretch your perspective.</p>
            </div>
            <div class="listing">
                <h6>Growing Natural Rhythm Salsa Class <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Dance to salsa music that will inspire your natural rhythm to unleash and grow. Dancing is a great and fun way to become comfortable with your body, build confidence and self-esteem. The side effects are bursts of laughter and burning calories.</p>
            </div>
            <div class="listing">
                <h6>Tai Chi &amp; Nature <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Tai chi means moving the energy of our bodies in harmony with the energy of the universe. This practice brings us closer to nature as it can be practiced outdoors where we can appreciate, enjoy and explore the energy in our surroundings.</p>
            </div>
            <div class="listing">
                <h6>Foot Care &amp; Awareness <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>This workout teaches how to maintain healthy feet, nature's foundation for the joints above. Grow your foot awareness and rebalance your body as you acquire better postural alignment, overall function and coordination.</p>
            </div>
            <div class="listing">
                <h6>Grow an Inch Pilates <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Learn to control your inner core&#8212;the muscles from the bottom of your spine all the way up to the back of your skull. Pilates exercises are based on axial skeleton elongation and stability, designed to strengthen as you lengthen. Create more space within the joints, enabling growth of an inch or more as you develop strength.</p>
            </div>
            <div class="listing">
                <h6>Cultivate Heat Yoga <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>An intermediate yoga class designed to warm the muscles. Flowing sun salutations combine with longer-held poses to increase stamina and strength.</p>
            </div>
            <div class="listing">
                <h6>Hatha Yoga <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>A combination of mild warming flow and longer-held poses, suitable for both new and returning Yogis.</p>
            </div>
            <div class="listing">
                <h6>Explore Your Hips &amp; Knees Yoga Therapy <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Explore the mobility of the hips and knees through the use of Yoga Therapy <em>asanas</em>, or postures, experiencing a greater awareness of your true range of motion and strength.</p>
            </div>
            <div class="listing">
                <h6>Explore Quiet Yoga <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Yin Yoga is a more passive, slow-paced style of yoga. Asanas are held for five minutes each, allowing for a deeper state of each posture. </p>
            </div>
            <div class="listing">
                <h6>Zumba Fitness <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Explore other cultures through the art of dance, burning 400 to 600 calories in an hour along the way.</p>
            </div>            
        </div>
        <div class="col span_1_of_2">
            <h2>Culinary</h2>
            <div class="listing">
                <h6>Sprouts Galore <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Rich in vitamins, minerals and other phytochemicals, sprouts are a wise and delicious addition to daily meals. Learn the art of sprouting as well as simple methods to integrate them into a variety of dishes.</p>
            </div>
            <h2>Culture</h2>
             <div class="listing">
                <h6>Taro Tasting <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Taro has earned its place as a traditional Hawaiian staple&#8212;it’s abundant, appetizing, and all parts of the plant can be eaten. Prepare and taste a sampling from the more than 300 varieties present on the Hawaiian islands.</p>
            </div>
            <div class="listing">
                <h6>East Maui Taro Festival <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>The taro plant, also known as kalo in Hawaii, plays a central role in Hawaiian mythology. Taro came to Hawaii with the earliest Polynesian settlers in their canoes, and has been cultivated as a staple since ancient times. The East Maui Taro Festival is an opportunity for the community to share with others the importance and value of this heritage food. 
                <br/>This two-day event that takes place at Hana Ballpark, located just a few steps away from Travaasa Hana. There will be live entertainment, concession booths and local vendors celebrating the Taro.
                </p>
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
                <p>Stop and savor the surrounding beauty of the Balcones Canyonlands Preserve. Quiet introspection and silence allow you to deepen your level of appreciation, establish a space within, and leave you replenished and revitalized.</p>
            </div>
            <div class="listing">
                <h6>Journal &amp; Grow <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Grow more into your complete self by integrating different parts of your psyche.</p>
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