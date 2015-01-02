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
  <title>Travaasa July 2014 Featured Experiences</title>
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
</header><section id="feature1_wrapper" class="feature_carousel clearfix">
    <div id="feature1" class="feature">
      <div class="slide"><img src="/assets/images/feature_months_july_2014_1600x640.jpg" alt="July is Independence month at Travaasa"></div>
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
            <h2>Culinary</h2>

               <div class="listing">
              <h6>DRINK TO YOUR HEALTH: JUICING <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Get healthy the natural way with whole fruit juice! This is not a diet or a fad; it is a revolutionary method of getting all the vitamins and mineral your body needs in a natural, effective and more time-efficient way. Drink to your health!</p>
              </div>

            <div class="listing">
              <h6>CELEBRATE JUICING <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Celebrate living healthy and in harmony with nature. Green vegetables have more valuable nutrients than any other food in existence. Blending your greens with some fruits helps make nutrients more readily available to the body. Sample some delicious juices and celebrate life.</p>
              </div>

                 <div class="listing">
              <h6>BBQ PREPARATION <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Texans love their BBQ. Learn how to prepare wonderful recipes to bring home to friends and family. </p>
              </div>

           <h2>Culture</h2>

             <div class="listing">
              <h6>KUKUI NUT LAMP <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>In ancient times, the Kukui Nut was used for light. Torches made with kukui were used for night fishing and at evening ceremonies in Hawai`i. In this class, you will learn the traditional way to make fire using Hāna's Kukui Nuts.</p>
              </div>


             <div class="listing">
              <h6>KEIKI TREASURE HUNT (CHILDREN FLOWER HUNT) <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>This is an activity for all keiki (children) and their parents! Walk around our Travaasa property and hunt for Hāna treasures such as flowers, plants and insects. </p>
              </div>


           <h2>Fitness</h2>


             <div class="listing">
              <h6>IGNITE YOUR FITNESS BOOTCAMP <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>No gym or fancy equipment needed here to achieve higher levels of fitness!  You will use the environment and your body weight to create a challenging workout that will take your fitness to the next level.  Ignite your inner athlete as you jog through our gorgeous property, stopping along the way for various skills and drills that will increase you strength, coordination and endurance.</p>
              </div>


             <div class="listing">
              <h6>JUMP ROPE CIRCUIT <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Jump, squat, twist and lift...in paradise!  This action packed circuit class will challenge every muscle group in your body. Develop muscular strength and endurance while you alternate with bouts of jumping rope. Keep your heart pumping between various strength building stations as our skilled fitness coach inspires you to take it to the limit.</p>
              </div>

              <div class="listing">
              <h6>HULA HOOPING <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Hula Hooping is a fun, exciting way to get a whole body workout.  You will learn how to utilize the hoop as a tool for exercise, dance and self-expression—maybe even learn a trick or two! This class is great for beginners or anyone looking to dive into learning something new! </p>
              </div>

               <div class="listing">
              <h6>ZUMBA <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Zumba is a revolutionary fitness experience. It takes you on an unforgettable, exhilarating journey to a healthier and happier lifestyle. Jam-packed with steaming hot dance moves, pulsating Latin and international rhythms and feel-it-to-the-core routines, this invigorating dance-fitness party will have you movin' and groovin' the fat right off.</p>
              </div>

               <div class="listing">
              <h6>SWING DANCE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Dancing is a fun way to let go and allow your body to move freely. In this class, we will use simple steps of swing dance and upbeat sounds of big band music to condition your cardiovascular system.</p>
              </div>

               <div class="listing">
              <h6>SALSA DANCE AND JOY <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Let's experience the joy of dancing. Begin with the basic foot work, embrace your partner and move in harmony around the dance floor. In this salsa dance class, you will learn the basic salsa steps, how to properly lead and turn, as well as some beginner to intermediate patterns so you can salsa dance with confidence!</p>
              </div>

               <div class="listing">
              <h6>CORE ELATION <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Come find the joy of a stronger shapelier torso by challenging the powerhouse of your body—your core. This fitness class focuses on the muscles that control and support your spine, pelvis and shoulder girdle. In this short, 45-minute class, you will improve your posture and alignment while strengthening and toning your waistline. </p>
              </div>

                                            </div>
          <div class="col span_1_of_2">

               <div class="listing">
              <h6>INSPIRE FITNESS BOOT CAMP <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Let us inspire you to work a little harder towards your fitness goals with the use of teamwork and camaraderie, integral parts of this boot camp class. We hope to help you discover the true joy of exercise as you work with others towards a common goal. </p>
              </div>

               <div class="listing">
              <h6>CELEBRATION YOGA <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Join us for a hatha yoga class that incorporates gratitude and celebration of your mind and body.</p>
              </div>

                <div class="listing">
              <h6>PILATES: IGNITE YOUR CORE <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Pilates practice is a well-rounded exercise method that works with the deeper muscles along the spine. Ignite your core for a stronger torso and increased core stability, which creates greater range of motion, stronger, more controlled movement and a leaner, more toned physique.</p>
              </div>

                <div class="listing">
              <h6>TAI CHI JOY <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Tai Chi is a joyful practice that empowers our energy centers. Often described as "meditation in motion," this practice helps us to nurture our body as we gather energy and calm the mind.</p>
              </div>

       

                <div class="listing">
              <h6>YOGA FOR HIPS AND KNEES STRENGTH <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>The health of our hips and knees is often overlooked. This workout will allow for greater awareness, improved range of motion and increased strength for the muscles surrounding these joints, leaving you with better mobility and more enjoyment of an active life.</p>
              </div>

        <div class="listing">
              <h6>FOOT CARE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>The feet are an extremely vital part of the musculo-skeletal system, as they are the base of support, accelerate and decelerate the whole body and influence all the other joints and spine. Join us in learning about, massaging and strengthening your feet for improved mobility and long-term back health.</p>
              </div>

                <div class="listing">
              <h6>ALL ABOUT ABS AND BACK <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>In this class, we will assess the health of your spine by increasing your self-spinal awareness. You will learn how myofascial release, stretches, postural spinal alignment, and stabilization and mobilization techniques can improve your breath and overall health. </p>
              </div>

                 <div class="listing">
              <h6>AQUA YOGA <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Practicing yoga in the pool is for everybody, from folks who need a little extra support to those who are just looking for a new way to deepen their yoga practice. We will use the pool wall and noodles for support while keeping our head nice and dry.</p>
              </div>


            <h2>Spa & Wellness</h2>

            <div class="listing">
              <h6>IGNITE A MEDITATION PRACTICE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>First learn light stretches that help prepare the body for meditation as well as comfortable sitting postures. Then let us lead you through a guided meditation.</p>
              </div>

 
                 <div class="listing">
              <h6>CELEBRATING WISHES MEDITATION <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Explore your wishes through reflection and meditation. Tap into your deep desires and dreams, and through ritual, we will call for the manifestation of what we want to create in our personal world.</p>
              </div>


                 <div class="listing">
              <h6>CANDLELIGHT MEDITATION <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>We help demystify the ancient practice of meditation using candlelight—bringing awareness to our moment-to-moment experiences. This simple—but not easy—practice of acceptance, letting go, non-striving and suspension of the judgmental mind leaves us with a deep sense of openness and receptivity to ourselves, to others and to the moment as it unfolds.</p>
              </div>

  <h2>Spa Services for Young Adults – Hana, Maui</h2>

            <div class="listing">
              <h6>FRESH FACIAL <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p> This is a customized facial for young adults using high quality organic skin care products. The treatment includes cleansing, exfoliating and moisturizing the skin, as well as a gentle neck and shoulder massage to release muscular tension and promote relaxation. </p>
              </div>

              <div class="listing">
              <h6>LOMI LOMI MASSAGE <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Enjoy this traditional Hawaiian-inspired massage treatment. This style of massage uses rhythmic dance-like strokes with the hands and forearms to release muscular tension and create a deep sense of calm and relaxation. </p>
              </div>

             <div class="listing">
              <h6>AROMATHERAPY MASSAGE <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>This specialized massage treatment focuses on the head, neck, shoulders and feet. In this treatment, you can choose a scent that will leave you feeling balanced or energized.</p>
              </div>






              
          
          
            

     </div>
    </div>   
  </section>
  
  <section class="grey pad">
        <h4>See upcoming months</h4>
      <div class="group">
            <div class="col span_1_of_3 month"><div class="active"><a href="/calendar/2014/july/"><img src="/assets/images/months/jul-independence.png" alt="July is Independence Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2014/august/"><img src="/assets/images/months/aug-dive.png" alt="August is Dive Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2014/september/"><img src="/assets/images/months/sep-discover.png" alt="September is Discover Month"></a></div></div>
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