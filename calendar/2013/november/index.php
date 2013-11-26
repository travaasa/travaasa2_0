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
      <div class="slide"><img src="/assets/images/feature_months_november_2013_1600x640.jpg" alt="November is stop month at Travaasa"></div>
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
              <h6>ARCHERY: TURKEY SHOOT <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Come down and take part in Travaasa's Wacky Turkey Shoot.</p>
            </div>

             <h2>Culinary</h2>

            <div class="listing">
              <h6>HOLIDAY TASTING SERIES <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Learn how to make the best roasted turkey, the smoothest gravy or an out of this world vegetarian option for Thanksgiving. Join our culinary team and discover how the pros prepare for the holidays. </p>
            </div>

            <div class="listing">
              <h6>THE HOLIDAY TABLE <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Learn the art of napkin folding and how to make natural centerpieces to make your holiday meal even more memorable.</p>
            </div>

            <h2>Culture</h2>

            <div class="listing">
                <h6>STOP FOR FLOWERS <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>From the “canoe” plants brought by the Polynesian voyagers to the modern plants introduced to Hawai`i in the last 200 years, join us for a historical journey of Hawai’i’s lush lands. Learn interesting facts about the myriad of plants that adorn our resort and the many lā’au lapa’au (or medicinal plants) that grow here.</p>
            </div>

             <div class="listing">
                <h6>STOP AND ARRANGE <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p> In Hawai’i, flowers are traditionally used to celebrate all occasions. Come celebrate the season of giving with us by creating a floral masterpiece using tropical flowers and foliage from our hotel grounds.</p>
              </div>

             <h2>Fitness</h2>

            <div class="listing">
              <h6>REFRESH YOUR CHI <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Stop and yield to your body’s needs. In this class, you’ll take a break from holiday chaos to restore your Chi.</p>
            </div>

            <div class="listing">
              <h6>RESTORATIVE PILATES <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Halt the holiday hustle. This time of year can be draining both physically and mentally. So revitalize yourself with mindful exercises that will recharge your body from the inside out.</p>
            </div>

            <div class="listing">
              <h6>BODY AND MIND UNWIND <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Take time to decompress with a class that will recharge your core and brain with calm, vitalizing energy. We’re sure you could use it in the midst of all the holiday madness. </p>
            </div>

            <div class="listing">
              <h6>CHERISH YOUR PILATES PRACTICE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Find the joy of a stronger, more shapely torso by challenging the powerhouse of your body – your core. This 45-minute fitness class focuses on the muscles that control and support your spine, pelvis and shoulder girdle. It will help improve your posture and alignment while strengthening and toning your waistline. </p>
            </div>

            <div class="listing">
              <h6>CELEBRATE SALSA DANCE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Honor life with festive salsa rhythms and moves. Improve your cardio, core and coordination with this fun activity.</p>
            </div>

             </div>
          <div class="col span_1_of_2">


            <div class="listing">
              <h6>UNCRUNCH <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Release holiday stress by working your entire core and extremities without crunching your body. Feel your spine lengthen as you strengthen your body without compressing your spine. Improve your core stability, posture and balance, and tone your midsection as you work the rest of your body. </p>
            </div>

            <div class="listing">
              <h6>DE-STRESS NECK AND SHOULDER THERAPY <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Get some range of motion and blood flow to your neck and shoulders. We tend to hold stress in these areas, especially during the holidays. This class will give you what you need most this time of year. Relaxation.</p>
            </div>


            <div class="listing">
              <h6>UNWIND LATIN DANCE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Move to the music as you explore other cultures and their dance steps. Discover the natural happiness that occurs from moving freely to various ethnic rhythms. Not only is it a ton of fun, but during this hour-long dance party you’ll burn 400 to 600 calories.</p>
            </div>


            <div class="listing">
              <h6>HONOR YOUR FOOT CARE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Learn to truly take care of your feet through massage, proper mechanics and strengthening so you can stay mobile, have better posture and a healthier lifestyle. Stop simply walking all over them and give your feet the treatment they deserve.</p>
            </div>

            <div class="listing">
              <h6>FENG SHUI THANKSGIVING <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Acknowledge all of the bounty you enjoy on a daily basis. Learn to be more receptive to abundance and you’ll attract it more readily. Integrating feng shui into your living and office spaces will give you more insight into counting your blessings.</p>
            </div>

            <h2>Spa &amp; Wellness</h2>

            <div class="listing">
              <h6>JOURNALING—UNFOLD YOUR MIND <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Reflect on excursions from your past and capture memories from your current adventures at Travaasa.</p>
            </div>

            <div class="listing">
              <h6>MEDITATION: STOPPING THE CHATTER <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Discuss how to find your peaceful center and then put it into practice to quiet the noise in your head during this busy season.</p>
            </div>

            <div class="listing">
              <h6>GRATITUDE YOGA <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Open yourself to abundance through the practice of gratitude. Through postures, conscious breathing and mental focus, this Hatha flow class will help teach you just that. Not to mention, you’ll develop awareness, strength and flexibility while actually relaxing.</p>
            </div>

            <div class="listing">
              <h6>STRONG GRATITUDE YOGA <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Stretch deeply and release tension this holiday season. In this intermediate yoga class, you’ll build strength, increase flexibility and muscle tone, improve lung capacity, develop proper body alignment and leave class feeling stress free, balanced and peaceful.</p>
            </div>

               <div class="listing">
              <h6>STOP TO MEDITATE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Just breathe. And visualize the energy forces within and around you to connect you more deeply with your inner self. This introductory class is sure to help you clear your mind during this busy holiday season.</p>
            </div>

               <div class="listing">
              <h6>QOYA—STOP & CONNECT <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Tap into your true essence as a wise, wild and free being. In this class, you’ll focus on yourself through breath awareness, concentrated movements, yoga, dance and simply having fun while enjoying inspiring music.</p>
            </div>

            <div class="listing">
              <h6>GRATITUDE MEDITATION <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Take some time out to reflect on the things you are thankful for during this ancient practice. A daily reflection on gratitude can be a powerful force of good in your life.</p>
             </div>
     </div>
    </div>   
  </section>
  
  <section class="grey pad">
        <h4>See upcoming months</h4>
  		<div class="group">
            <div class="col span_1_of_3 month"><div class="active"><a href="/calendar/2013/november/"><img src="/assets/images/months/nov-stop.png" alt="November is Stop Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2013/december/"><img src="/assets/images/months/dec-joy.png" alt="December is Joy Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2014/january/"><img src="/assets/images/months/jan-vitality.png" alt="January is Vitality Month"></a></div></div>
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