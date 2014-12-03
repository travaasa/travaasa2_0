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
  <title>Travaasa December 2014 Featured Experiences</title>
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
      <div class="slide"><img src="/assets/images/feature_months_december_2013_1600x640_austin.jpg" alt="December is Joy Month at Travaasa"></div>
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
              <h6>JOYFUL CATCH-NET THROWING <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Experience cast-net throwing with a Hana native.  Learn how to prepare your net for casting, as well as how and where to throw your net.  Because our guides come from a long line of local fishermen, you will have the opportunity to enjoy their personal stories of growing up and fishing in Hana!  Guaranteed to be a joyful experience and maybe even a joyful catch!</p>
              </div>


                  <div class="listing">
              <h6>PURE HAWAIIAN JOY-HOE I KA WA’A (CANOE PADDLING) <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Ho’omakaukau!  Get Ready!  Here we go!  Learn how to paddle in a 4-man outrigger canoe, an activity rarely experienced by most visitors.  Expect a full-body workout as you paddle along spectacular views of coral reefs and Hana Bay. You will also hear stories of the area from paddling experts, as well as oli (chants) and mele (songs) that will enhance your paddling adventure.  Don’t be too surprised if you see a turtle or dolphin swim by—they live here after all!  I ka hoe i ka wa’a!</p>
              </div>


                  <div class="listing">
              <h6>STAND UP &amp; PADDLE FOR JOY <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Experience the history of Stand Up Paddling, past and present, in this beginner-level class.  Learn the basic techniques during a 30-minute ground instruction, and then paddle for joy in the Hana Bay! During your 90-minute paddling session, you will learn the history and cultural significance of the waters surrounding you.</p>
              </div>


           



             <h2>Culinary</h2>

  <div class="listing">
              <h6>COOKIE DECORATING <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Want to host a holiday party but need a little baking guidance? Join us in learning simple cookie decorating tricks from the pros.</p>
            </div>
  
         <div class="listing">
              <h6>THE JOY OF JUICING <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Discover new ways to incorporate valuable nutrients into your diet while learning the benefits of juicing fruits and vegetables.  This educational and delicious class allows you to sample juices individually and then create your own combinations.</p>
              </div>



              

            <h2>Culture</h2>

                      <div class="listing">
              <h6>STRUM FOR JOY <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Enjoy learning how to play the classical instrument widely used throughout Hawaii: the Ukulele.  This 45-minute session will teach you the basic chords and a few beginner songs, so you can “strum for joy” in paradise!</p>
              </div>

        <div class="listing">
              <h6>HUSKING FOR JOY <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Found across most of the tropics, the coconut  ("niu") is known for its great versatility as seen in the many domestic, commercial, and industrial uses of its different parts. Coconuts are a part of the daily diet of our Hawaiian people thanks to the many health benefits it provides and, of course, it’s delicious flavor. Come see the art of husking a coconut and enjoy the fresh coconut water and meat just for you!</p>
              </div>


        

             <h2>Fitness</h2>


            <div class="listing">
              <h6>DANCE, DANCE, DANCE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Find the joy in movement as you play with various forms of dance, from hula and rumba to Texas two-step.</p>
            </div>

                   <div class="listing">
              <h6>JOYOUS CHI OR CHI BLISS <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Practice this ancient art to unleash the blissful energy in your body and mind.</p>
            </div>


       <div class="listing">
              <h6>CORE ELATION <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>A strong core allows the muscles in your pelvis, lower back, hips, and abdomen to work in joyous harmony. Find your body’s powerhouse and connect with your center in this muscle-strengthening, core-elation class.</p>
            </div>


              </div>
    <div class="col span_1_of_2">


       <div class="listing">
              <h6>REACHING FOR NEW HEIGHTS WITH STICK EXERCISE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Achieve a more functional and aesthetically balanced figure using Stick Exercise. This class will help the inactive muscles throughout your body develop greater range of motion and improved strength.</p>
            </div>


       <div class="listing">
              <h6>EXPLORE THE JOY OF HULA HOOPING <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Re-connect with your inner-child and find the joy of hula hooping—while burning loads of calories—in this back-to-basics fitness hula hooping class.</p>
            </div>


       <div class="listing">
              <h6>PILATES IN MOTION <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Flow from one Pilates move to another, revealing the energy that comes from mindful breath and centering. Enjoy the strength and freedom of movement inherent to this practice.</p>
            </div>


       <div class="listing">
              <h6>BREATH OF JOY &ndash;  YOGA THERAPY &amp; CORE WORK <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Practice the breath of joy as you learn to connect your breath with your inner unit, the intrinsic muscles of your core. Feel a renewed inner girdle of strength that brings expansiveness to your body and joy to your everyday movements.</p>
            </div>

            <div class="listing">
              <h6>NATURAL ORNAMENTS &amp; CENTERPIECES <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Nature provides us with beautiful objects that we can craft into gifts and ornaments for our holiday trees. Our team will help you create decorations that will last for years to come.</p>
            </div>

       <div class="listing">
              <h6>HOLISTIC JOY &ndash; GENTLE YOGA <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Stretch, breathe deeply and relax in a joyous experience for your whole self, mind, body and spirit. Come with any level of experience to enjoy breath work, mellow asana flow and restorative poses.</p>
            </div>

       <div class="listing">
              <h6>YOGA AS THERAPUETIC SELF-INQUIRY <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Strengthen the mind-body connection by slowing down, breathing deeply and noticing the ripple effect of gentle asana. Trace the threads between sensations, emotions and thoughts to learn how to bring sukha, or sweet ease, into your daily life. </p>
            </div>


         <div class="listing">
              <h6>JUMP FOR JOY <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Jumping recruits muscles from the entire body. Join this multidimensional circuit training workout that incorporates broad jumps, box jumps, plyometrics and more. Jump for joy with us while you increase muscle strength and endurance, as well as improve your balance and spatial awareness.</p>
              </div>


                  <div class="listing">
              <h6>"CELEBRATE YOUR INNER JOY" YOGA <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Activate and celebrate inner joy with a heart-expanding yoga practice that features sequences designed to stimulate, nourish and open the heart. This class combines asana (physical postures) in a unique way to facilitate an expansion of the physical and emotional heart-space.</p>
              </div>
             



            <h2>Spa &amp; Wellness</h2>

       <div class="listing">
              <h6>JOURNALING &ndash; JOURNEY INTO JOYOUS TIMES <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Record your most joyous moments in a journal today. Writing down your thoughts on a regular basis can help these moments continuously unfold throughout your daily life.</p>
            </div>


       <div class="listing">
              <h6>FOOT CARE UNWRAPPED <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Unwrap improved mobility, better posture and a healthier lifestyle with a class dedicated to neglected feet. Learn proper massage techniques and mechanics that will help strengthen your feet muscles and heal aches and pains associated with overworked feet. </p>
            </div>

<div class="listing">
              <h6>PEACE &amp; JOY MEDITATION <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Create joy and contentment in your life through the practice of mindfulness. While happiness and other emotions come and go, joy and peace are always available for connection. Learn how to cultivate equanimity through meditation.</p>
            </div>

             
     </div>
    </div>   
  </section>
  
  <section class="grey pad">
        <h4>See upcoming months</h4>
          <div class="group">
           <div class="col span_1_of_3 month"><div class="active"><a href="/calendar/2014/december/"><img src="/assets/images/months/dec-joy.png" alt="December is Joy Month"></a></div></div>
           <div class="col span_1_of_3 month"><div><a href="/calendar/2015/january/"><img src="/assets/images/months/jan-vitality.png" alt="January is Vitality Month"></a></div></div>
           <div class="col span_1_of_3 month"><div><a href="/calendar/2015/february/"><img src="/assets/images/months/feb-heart.png" alt="February is Heart Month"></a></div></div>
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