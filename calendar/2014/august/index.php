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
  <title>Travaasa August 2014 Featured Experiences</title>
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
      <div class="slide"><img src="/assets/images/feature_months_august_2014_1600x640.jpg" alt="August is Dive month at Travaasa"></div>
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
              <h6>RAW FOOD AND JUICING <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Dive into the world of raw juice for a healthier lifestyle. Learn all about the abundance of nutrients found in blended raw fruits and vegetables and how to easily make your own at home.</p>
              </div>

            <div class="listing">
              <h6>REFRESHING DIVE: WATER FLAVORING <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Sugary, artifically-flavored drinks can't keep you hydrated like a simple glass of water can. In this 30-minute demonstration, We'll teach you how to use fresh ingredients to add tons of flavor to a typical glass of H2O. Then impress your friends and family at your next get-together.</p>
              </div>


             <div class="listing">
              <h6>DIVE INTO WELLNESS WITH SMOOTHIES <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Celebrate living healthy and in harmony with nature while you sample a variety of delicious smoothies. Then learn how to create your own appetizing combinations that not only taste great, but are beneficial to your health. You’ll even get a chance to burn some calories by using our “Blender Bike” to mix up your fruits and veggies!</p>
              </div>


           <h2>Culture</h2>

             <div class="listing">
              <h6>DIVE INTO ACTION <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Learn the art of fish net throwing, a tradition passed down by Hawaiian families generation after generation. After enjoying an educational tour of the bay, cast your own net into the Kapueokahi (Hāna Bay) and, if you’re lucky, you may just catch a few fish in your net.</p>
              </div>

              <div class="listing">
              <h6>STAND UP AND SNORKEL <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Hoe he'e nalu (Stand Up Paddle Boarding) is an emerging global sport rooted in Hawaiian tradition. Learn to Stand Up Paddle Board like a true Hawaiian before diving into the ocean and snorkeling some beautiful Hawaiian reefs.</p>
              </div>

               <div class="listing">
              <h6>JOURNALING: DIVE INTO YOUR PAST <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Our journaling focus this month will have you reflecting on beach/water-focused vacations from your past or special moments from your current Travaasa Adventure.</p>
              </div>


           <h2>Fitness</h2>


             <div class="listing">
              <h6>YOGA FLOW <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Leap into spring with an invigorating Hatha flow practice. As you move through various asanas with precision and focused breathing, you will experience a deeper awareness and vitality coming from within. An increased sense of well-being will help you spring into the new season with a clear mind and a lightened spirit.</p>
              </div>


             <div class="listing">
              <h6>JUMP UP AND GET DOWN <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Boot camp circuit training is known for delivering maximum results in minimal time. With this outdoor workout, you will challenge your body and mind while enjoying the stunning scenery of Hana. Our trained fitness coach will lead you through a variety of movements and intensities, all sure to make your heart rate soar.</p>
              </div>


             <div class="listing">
              <h6>DIVE INTO CORE TRAINING <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Pilates-inspired core training emphasizes flow movements that require the use of multiple muscle groups. Controlled breathing and concentration are essential, making this core workout challenging both to the mind and body. With the use of stability balls and fitness rings, you will improve your posture and mobility, all while strengthening your core. </p>
              </div>


             <div class="listing">
              <h6>HULA HOOPING <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Hula Hooping is a fun and exciting way to get a full-body workout. Learn how to utilize the hoop as a tool for exercise, dance and self-expression—you may even learn a trick or two! This class is great for beginners or anyone simply looking to learn something new.</p>
              </div>

              <div class="listing">
              <h6>WATER AEROBICS <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Dive into fitness without breaking a sweat. Join us for low-impact, high-energy aqua exercises and a cool time in the pool.</p>
              </div>


          

         </div>
          <div class="col span_1_of_2">
       

               <div class="listing">
              <h6>DIVE INTO PILATES <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Pilates practice is a well-rounded exercise method that works with the deeper muscles along the spine, which are vital for good posture and mobility. Dive into this practice to achieve greater range of motion, stronger, more controlled movement and a leaner, more toned physique.</p>
              </div>



               <div class="listing">
              <h6>TAI CHI: DIVE AND SURF <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Tai Chi Chuan literally translates to “Supreme Ultimate Boxing,” however, when used as a form of exercise, it is loosely translated as “Supreme Ultimate Exercise” or “Skill.” This exercise utilizes breathing, visualizations and circular movements to work the entire body at once. The movements are smooth, continuous, natural and promote health, longevity and internal strength.</p>
              </div>

               <div class="listing">
              <h6>FOOT-CARE: GOING DEEPER <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>We constantly put our feet to work without giving them proper care. Take better care of your feet for improved mobility, better posture and a healthier lifestyle! With this class, you will learn the proper massage and mechanics that can help strengthen muscles and heal aches and pains associated with overworked feet.</p>
              </div>

               <div class="listing">
              <h6>YOGA THERAPY: HIPS AND KNEES RENEWAL <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Whether through exercise or extended periods of sitting or standing, our daily routines often take a toll on our hips and knees. Join us for a workout that will yield better awareness, improved range of motion and increased strength of the muscles around these joints, resulting in easier mobility and more enjoyment of an active lifestyle.</p>
              </div>

               <div class="listing">
              <h6>DIVE INTO FITNESS WITH KETTLEBELLS <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Staying fit can also be FUNctional! This workout incorporates kettle bells and full-body exercises to help increase your overall strength and improve your agility, allowing for a pain-free active lifestyle.</p>
              </div>

               <div class="listing">
              <h6>INTERMEDIATE YOGA: DIVE INTO THE CHAKRAS <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Yogis believe there are 7 energetic centers, or chakras, in the human body, each of which builds on the next. In this class, we will focus on the first two chakras or those that involve the feet, legs and lower back.</p>
              </div>

               <div class="listing">
              <h6>GENTLE YOGA <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>If you’re new to yoga, we encourage you to take this gentle introductory class. Using breath and a brief meditation, we will focus on relaxation on the mat and gentle balancing poses.</p>
              </div>

            <h2>Spa & Wellness</h2>


             <div class="listing">
              <h6>BREATHING AND MEDITATION <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Breathing is a vital and involuntary human function. The ability to control your breath is key to replenishing the body with fresh oxygen, eliminating toxins, increasing energy, and distressing and calming the mind. This class intends to give you a greater understanding of how we breath, how our breath influences our energy levels and state of mind and how to control it for optimum health.</p>
              </div>


               <div class="listing">
              <h6>SPA EXPERIENCE MEDITATION <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>This meditation practice introduces a variety of relaxing oils to inspire you to dive into your inner self and begin the healing and rejuvenation of both the physical and emotional body.</p>
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
            <div class="col span_1_of_3 month"><div><a href="/calendar/2014/july/"><img src="/assets/images/months/jul-independence.png" alt="July is Independence Month"></a></div></div>
            <div class="col span_1_of_3 month"><div class="active"><a href="/calendar/2014/august/"><img src="/assets/images/months/aug-dive.png" alt="August is Dive Month"></a></div></div>
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