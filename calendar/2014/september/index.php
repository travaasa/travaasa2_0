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
  <title>Travaasa September 2014 Featured Experiences</title>
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
      <div class="slide"><img src="/assets/images/feature_months_september_2014_1600x640.jpg" alt="September is Discover Month at Travaasa"></div>
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
              <h6>DISCOVER THE BENEFITS OF JUICING <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Learn the benefits of juicing fruits and vegetables. This educational and delicious class allows you to sample juices individually before creating your own combinations. Discover new ways to add valuable nutrients to your diet!</p>
              </div>

           <h2>Culture</h2>

             <div class="listing">
              <h6>THE FRUIT OF LIFE <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Native to most tropical regions, the coconut, "niu," is an incredibly versatile fruit and a staple in daily diet of Hawaiian people. We invite you to discover the secrets of this so-called “Fruit of Life” by learning the art of coconut husking. Join us in enjoying coconut water and creating our very own coconut milk from scratch.</p>
              </div>

              <div class="listing">
              <h6>DISCOVER THE HISTORY OF HĀNA (HISTORICAL WALKING TOUR) <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Discover the treasure of Hāna by touring the Plantation Guest House, a lovingly restored, turn-of-the-century home accented by warm Hawaiian woods, earthly island hues and Hawaiian art. This tour is sure to take you back to the Hawaii most travelers will never get to experience.</p>
              </div>
               


           <h2>Fitness</h2>

               <div class="listing">
              <h6>WISDOM OF THE CHAKRAS – INTERMEDIATE YOGA<span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Discover the energetic centers of your body known as the chakras.  You will weave yantras (sacred symbols), breathing exercises, postures, and guided imagery to create a direct experience of the centers that energize the body.  Expect deep relaxation that focuses on the integration and sharing of the experience as you hold a space to connect with your peers in silence.  </p>
              </div>

     

                 <div class="listing">
              <h6>DISCOVER YOUR POWERHOUSE — CORE TRAINING <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Pilates inspired core training emphasizes flowing movements that require the use of multiple muscle groups. Controlled breathing and concentration are essential, making this core training session a workout for both the mind and body. With the use of stability balls and fitness rings, you will improve your posture and mobility as you strengthen your core.</p>
              </div>
               

                 <div class="listing">
              <h6>HANA RELAY <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Alongside tons of athletes, Travaasa Hana will be participating in the 52-mile run along the Hāna Highway (Hwy. 360), from Kahului Airport to the finish line at the Hāna Ball Park. Paul Fagen, the founder of the Travaasa Hotel Hāna (built in 1946) and the original owner of Hāna Ranch, was also the owner of the San Francisco Seals, a team who hosted their Summer Camp at this very ballpark. Located just a few steps away from Travaasa Hotel, the park will be filled with tons of cheering fans all throughout the relay. If you see our Travaasa Van on the Hāna Highway, honk your horn and cheer for our team!</p>
              </div>


                        <div class="listing">
              <h6>NECK AND SHOULDER YOGA THERAPY <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Use yoga asanas to discover your neck and shoulders’ imbalances and restore good posture. This class will help you create better support for your spine, shoulder, neck and head as you open and strengthen your heart and throat chakras.</p>
              </div>

               <div class="listing">
              <h6>THAI PARTNER STRETCH <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Combining influences from Thai, Indian, Chinese and Southeast Asian medicine, Thai Partner Stretch helps to energize and rejuvenate the body through systematic stretches and static, rhythmic pressures. No oils are used in Thai massage or stretches.</p>
              </div>


               <div class="listing">
              <h6>SWING DANCE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Dancing is not only a fun way to let go and allow your body to move freely, but it can also be a great way to condition our cardiovascular system. In this class, we will discover our natural rhythm and get our cardio in using the upbeat steps of swing dance and irresistible sounds of big band music.</p>
              </div>

        
                            <div class="listing">
              <h6>INTERMEDIATE YOGA: THE WISE JOURNEY  <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Yoga, as with anything, can be viewed as a goal-oriented process or simply a journey of self-discovery. In this class, we will be focusing on viewing it as the latter. Through a mix of hatha and flow, we will start from where we are and explore places where we may feel fixed in our bodies and minds. Recommended for guests with some experience in yoga, however all are welcome.</p>
              </div>



         </div>
          <div class="col span_1_of_2">

               <div class="listing">
              <h6>LET'S GLIDE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Using the science of friction, glider discs are an innovative way to strengthen and tone your core, improve balance, muscular strength and function. The slippery surface created by the gliders & flooring will force you to work harder in order to stabilize and balance. Regular use of the glider discs will result in better balance, improved posture, joint stability and enhanced physical function.</p>
              </div>

               <div class="listing">
              <h6>PLAYING OUT <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Join us for a series of outdoor activities sure to improve your stamina, strength, flexibility and spirits. Discover your competitive edge as you work alongside others carrying and throwing rocks, walking, squatting, lunging, balancing, jumping, climbing and hanging. </p>
              </div>

                    <div class="listing">
              <h6>GENTLE YOGA: THE WISDOM OF THE BODY <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Want to discover the yogi in you? Try this introductory class that focuses on breath and brief meditation. Much of the class will be on the mat with a few gentle balancing poses.</p>
              </div>

                    <div class="listing">
              <h6>KETTLE BELLS AND GLIDERS WOKOUT <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Using functional, compound exercises, we will work multiple muscle groups simultaneously to develop strength and muscular endurance, all while burning tons of calories! Get ready to squat, lunge, balance and perform multipoint exercises for a stronger, more agile you!</p>
              </div>

                            <div class="listing">
              <h6>QOYA - DISCOVERING AUTHENTIC SELF <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Qoya, literally meaning queen, is a movement practice that incorporates sweet ritual, stretching, yoga and dance to tap into the feminine essence. Based on the idea that through movement we remember who we are, this class will nurture you both mind and body.</p>
              </div>



                     <div class="listing">
              <h6>PILATES REVEALED <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Learn the components of the Pilates Method and connect with your inner unit for better posture and healthier spine.</p>
              </div>



               <div class="listing">
              <h6>BARE YOUR SOLE WITH DANCE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Come bare your sole in this heart-pumping rhythm and fitness class. In this 45-minute cardio-based class, you will burn tons of calories while moving your body to various Latin, Hip-hop and International rhythms. </p>
              </div>
              
              <div class="listing">
              <h6>INTERMEDIATE YOGA: THE WISDOM OF THE BODY  <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>We will focus on yoking our mind and body in order to learn the wisdom of the body using breath and a brief meditation.</p>
              </div>


          

             <h2>Spa & Wellness</h2>
            
            <div class="listing">
              <h6>DISCOVER SELF-MEDITATION <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>This guided meditation uses visualization techniques as a means of concentration. By focusing on the guided words, we aim to open ourselves to experience our inner-self within a meditative state.</p>
              </div>

                 <div class="listing">
              <h6>DISCOVER FOOT CARE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>We constantly put our feet to work without giving them proper care. Take better care of your feet and discover improved mobility, better posture and a healthier lifestyle! Learn the proper massage and mechanics that can help strengthen muscles and heal aches and pains associated with overworked feet.</p>
              </div>

               <div class="listing">
              <h6>UNCOVER YOUR CHI <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Discover the energy around you and how to foster it to find your center and balance your body.</p>
              </div>


                    <div class="listing">
              <h6>SPA EXPERIENCE MEDITATION <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>This Meditation practice introduces spa relaxing oils to help you discover healing and rejuvenation of both the physical and emotional body.</p>
              </div>

      
                    <div class="listing">
              <h6>DISCOVER YOUR INNER SELF - MEDITATION <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>This guided meditation uses visualization techniques as a means of concentration. By focusing on the guided words, we aim to discover our deeper inner self within a meditative state.</p>
              </div>

      



            


 
       




              
          
          
            

     </div>
    </div>   
  </section>
  
  <section class="grey pad">
        <h4>See upcoming months</h4>
      <div class="group">
            <div class="col span_1_of_3 month"><div class="active"><a href="/calendar/2014/september/"><img src="/assets/images/months/sep-discover.png" alt="September is Discover Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2014/october/"><img src="/assets/images/months/oct-harvest.png" alt="October is Harvest Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2014/november/"><img src="/assets/images/months/nov-stop.png" alt="November is Stop Month"></a></div></div>
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