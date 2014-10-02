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
  <title>Travaasa November 2014 Featured Experiences</title>
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
      <div class="slide"><img src="/assets/images/feature_months_november_2013_1600x640.jpg" alt="November is Stop Month at Travaasa"></div>
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
              <h6>OUTRIGGER CANOE ADVENTURE <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>With Maui’s famous volcano, Haleakala, as your backdrop, paddle into Maui's ancient past with a maritime adventure onboard Wananalua, Travaasa Hana's Outrigger Canoe. Expert local guides teach the basics of canoeing as well as the history of the canoe and its importance to Hawaiian history. It is not uncommon to spot sea turtles swimming alongside the canoe, and sometimes during the winter and spring months, a few lucky guests may even see a whale or two.</p>
              </div>

               <div class="listing">
              <h6>REGAIN YOUR BALANCE - STAND UP PADDLEBOARDING <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Hoe he'e nalu (Stand Up Paddle Boarding) is an emerging global sport with a Hawaiian heritage and is often considered the ancient form of surfing. Join us in the warm waters of the Pacific Ocean for a guided tour of this historical sport where you will regain balance, both in mind and body!</p>
              </div>


             <h2>Culinary</h2>


               <div class="listing">
              <h6>FARM TO TABLE JUICING <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Celebrate living healthy and in harmony with nature. Green vegetables have more valuable nutrients than any other food in existence. Blending your greens with some fruits helps make nutrients more readily available to the body.  Sample some delicious juices and harvest your health!</p>
              </div>

            <div class="listing">
              <h6>FARM TO TABLE SMOOTHIES <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Grow green, eat green, drink green, be green and live green. This is the theme of a new generation of people who desire to live healthy and in harmony with nature. Green vegetables have more valuable nutrients than any other food in existence. Blending your greens helps make nutrients more readily available to the body.</p>
            </div>


                <div class="listing">
              <h6>HOLIDAY TASTING SERIES <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Join our culinary for our holiday tasting series. You will learn to prepare either a crowd-pleasing roasted turkey or, if you’re vegan or vegetarian, a meatless dish so satisfying it converts your guests to a meatless lifestyle. </p>
            </div>


            <h2>Culture</h2>

              <div class="listing">
              <h6>STOP AND CONNECT WITH THE TREE OF LIFE <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Found across most of the tropics, the coconut  ("niu") is known for its great versatility as seen in the many domestic, commercial, and industrial uses of its different parts. Coconuts are a part of the daily diet of our Hawaiian people thanks to the many health benefits it provides and, of course, it’s delicious flavor. Come see the art of husking a coconut and enjoy the fresh coconut water and meat just for you!</p>
              </div>


           <div class="listing">
              <h6>STOP AND CONNECT WITH NATURE <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Enjoy our outdoor activities this November and connect with nature in Hana! Experience Bamboo Pole Fishing, Throw Net Fishing or a leisurely walk through our beautiful gardens. All of our cultural experiences provide a wonderful education of Hawaiian civilization and history.</p>
            </div>

        

             <h2>Fitness</h2>


             <div class="listing">
              <h6>GRATITUDE YOGA <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Embrace your yoga practice with an invigorating Hatha flow experience! As you move through various asanas with precision and focused breathing, you will experience a deeper awareness and vitality coming from within. An increased sense of well-being will help you clear your mind and lighten spirit.</p>
              </div>


              <div class="listing">
              <h6>STOP TO MEDITATE <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>A daily reflection on gratitude can be a powerful force for good in your life. Take some time out to reflect on the things you are thankful for during this ancient practice.</p>
              </div>


              <div class="listing">
              <h6>THE YOGA OF BREATH <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Pause to observe and navigate the vastness of your inner, subtler realm through the practice of conscious breathing with Pranayama, the Yoga of Breath. Learn postural and breathing techniques for relaxation, focus and sustained energy during a guided practice of breath awareness.</p>
              </div>


              <div class="listing">
              <h6>ISOMETRIC BURN <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Sometimes it is hard to stay still. Challenge yourself not to move. Isometric muscle contractions happen while holding a position, trying to move an immovable object, or pitting your own muscles against each other. Join us and work hard toward great gains by going nowhere.</p>
              </div>


              <div class="listing">
              <h6>RECHARGE YOUR CORE <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Come find the joy of a stronger, shapelier torso by challenging the powerhouse of your body, the "core." In this short, 45-minute fitness class, we will focus on the muscles that control and support your spine, pelvis and shoulder girdle to help improve posture and alignment, as well as strengthen and tone your waistline.</p>
              </div>

                <div class="listing">
              <h6>REFRESH YOUR CHI <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Stop and yield to yourself. Restore your chi in the midst of the holiday chaos.</p>
            </div>


              </div>
    <div class="col span_1_of_2">


                <div class="listing">
              <h6>UNWIND YOUR BODY AND MIND <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>In the mist of all the holiday hustle, take time to unwind and partake in a body-mind class that will tone your core while calming your mind.</p>
            </div>


                <div class="listing">
              <h6>CHERISH YOUR PILATES PRACTICE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Join us in working towards a stronger, shapelier torso as we challenge our core, the powerhouse of the body. This short, 45-minute class focuses on the muscles that control and support the spine, pelvis and shoulder girdle. Expect to improve your posture and alignment while strengthening and toning your waistline. </p>
            </div>



                <div class="listing">
              <h6>UNCRUNCH <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Work your core and extremities without a single crunch. This fitness class will help you to lengthen your spine, tone your midsection as well as improve core stability, posture and balance.</p>
            </div>


                <div class="listing">
              <h6>CELEBRATE WITH SALSA DANCE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Celebrate life with festive salsa rhythm and dance.  As you move to the beat, you will work your cardiovascular system, tone your core and improve your coordination.</p>
            </div>


                    <div class="listing">
              <h6>UNWIND NECK AND SHOULDERS YOGA THERAPY <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>We tend to hold stress in our neck and shoulders, especially during the holidays. This class will help to improve the range of motion and blood flow throughout these areas, as well as relax your mind.</p>
            </div>



                <div class="listing">
              <h6>CONNECT PELVIC FLOOR & CORE YOGA THERAPY <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>With the aid of your breath, you can improve the health of your pelvic floor and back. In this class, we will use various yoga poses to help us quiet our minds, deepen our breaths, stretch our muscles, and heal both our body and our mind.</p>
            </div>


                <div class="listing">
              <h6>ZUMBA - UNWIND LATIN DANCE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Discover the natural happiness that arises when we move freely with Zumba, a fun dance fitness method that can burn 400 to 600 calories in one hour.</p>
            </div>            

                <div class="listing">
              <h6>HONOR YOUR FOOT CARE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Learn relaxing massage, strengthening techniques and all the postural benefits that come with proper foot care.</p>
            </div>


                <div class="listing">
              <h6>GRATITUDE YOGA <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>In this Hatha Flow yoga class, we will open ourselves to abundance through the practice of gratitude.</p>
            </div>    

               <div class="listing">
              <h6>STRONG GRATITUDE YOGA <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Using breath and a brief meditation, this yoga class focuses on yoking, or bringing together the facets of yourself through the experience of being in your body.</p>
            </div>




            <h2>Spa &amp; Wellness</h2>

              <div class="listing">
              <h6>STOP AND SMELL THE ROSES <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Enjoy a deeply relaxing and rejuvenating rose ritual inspired by the state flower of Hawaii, the Lokelani Rose. This luxurious body treatment incorporates organic roses and decadent rose scented oils to soothe skin and calm the mind and body. Your journey will begin with a gentle exfoliating milk scrub followed by a relaxing massage and rejuvenating facial mask.</p>
              </div>

                    <div class="listing">
              <h6>FENG SHUI THANKSGIVING <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Thanksgiving is a marvelous opportunity to acknowledge all of the bounty we enjoy on a daily basis. And, by being more receptive to abundance, you can attract it more readily. Join us in learning how to integrate Feng Shui into our living and office spaces, so we may the things we have and life we live.</p>
            </div>


                <div class="listing">
              <h6>MEDITATION: STOPPING THE CHATTER <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Quiet the chatter of the mind and find your peaceful center as you learn how to meditate. In this guided class, we will discuss proper technique, and then put our new skills to practice.</p>
            </div>


                    <div class="listing">
              <h6>STOP TO MEDITATE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Quiet introspection and silence allow you to deepen your level of appreciation, establish a space within, and leave you replenished and revitalized.</p>
            </div>


                <div class="listing">
              <h6>QOYA-STOP & CONNECT <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Qoya is a movement practice for woman with the intention to tap into our true essence, which is wise, wild and free. In this class, our theme is to "Stop & Connect" by looking into ourselves through breath awareness, focused movements, yoga and dance.</p>
            </div>

            <div class="listing">
              <h6>GRATITUDE MEDITATION <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>A daily reflection on gratitude can be a powerful force for happiness in your life. During this ancient practice, allow yourself to take some time out to reflect on the things you are thankful for.</p>
            </div>           


             
     </div>
    </div>   
  </section>
  
  <section class="grey pad">
        <h4>See upcoming months</h4>
      <div class="group">
            <div class="col span_1_of_3 month"><div><a href="/calendar/2014/october/"><img src="/assets/images/months/oct-harvest.png" alt="October is Harvest Month"></a></div></div>
            <div class="col span_1_of_3 month"><div class="active"><a href="/calendar/2014/november/"><img src="/assets/images/months/nov-stop.png" alt="November is Stop Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2014/december/"><img src="/assets/images/months/dec-joy.png" alt="December is Joy Month"></a></div></div>
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