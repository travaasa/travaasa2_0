<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   include_once($path."/Library/Travaasa_Common.php");
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Hana, Maui Adventure: hang gliding, snorkeling, paddling | Travaasa Hana Resort</title>
	<meta name="keywords" content="travaasa, travel, resorts, hana, hāna, hawaii, austin, texas, Austin resort, Austin spa, travaasa Austin, Austin spa resort, experiential, hotel, Austin hotel, Austin conference center, Austin group meeting" />
	<meta name="description" content="Enjoy a Hawaiian adventure during your stay at Travaasa Experiential Resort and try hang gliding, horseback riding, snorkeling, paddling and more in Hana. " />
	<?php
   include_once($path."/Library/Travaasa_Head.php");
	?>
<!-- start NAVIS Code -->
<script type="text/javascript" src="http://www.navistechnologies.info/JavascriptPhoneNumber/js.aspx?account=15070&amp;jspass=ivcsp4gaxk4fbz8banxd&amp;dflt=<?php echo NAVIS_GLOBAL_HANA ?>"></script>
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
   include_once($path."/Library/Travaasa_Menu_Hana.php");
?>
<section class="header-img">
  <!-- <img src="/assets/images/bg_hana_clouds.jpg" alt=""> -->
</section>
<section id="content">
  <article id="main">
    <section class="intro pad clearfix">
        <div class="col span_6_of_9">
          <h1>Hana Adventure Experiences</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident beatae repellat inventore necessitatibus quisquam, aspernatur a sint delectus rerum, vero, porro recusandae sit distinctio quos atque. Expedita delectus quidem saepe.</p>
        </div>
    </section>

    <section class="group grey pad storylines experience-inner-tiles hana">
      <article>
        <img data-original="/assets/images/exp_hana_adventure_equine.jpg" src="/assets/images/exp_hana_adventure_equine.jpg" alt="TRAIL RIDES Hana horseback riding">
        <h5>Trail Rides</h5>
        <p class="description">Remote and unspoiled slopes, plains and coastline surround the island escape of Travaasa Hana, and there’s nothing quite like experiencing the superb natural beauty of Maui for yourself on horseback. Explore Hana’s extensive trail system as the paniolos, or Hawaiian cowboys, have for nearly 200 years as an Alaka’i, or trained tour leader, guides you through these immaculate lands. As you make your way through Hana’s lush valleys and gaze upon endless stretches of the blue ocean before you, you’ll find you’re riding through Hawaii’s history, too: your Alaka’i will bring deeper meaning to your trail ride with stories of this magical land and its people. No previous horse experience is needed.</p>
      </article>
      <article>
        <img data-original="/assets/images/exp_hana_adventure_glider.jpg" src="/assets/images/exp_hana_adventure_glider.jpg" alt="GLIDER ADVENTURE Gliding in Hana">
        <h5>Glider Adventure</h5>
        <p class="description">Nothing compares to experiencing Maui’s beauty from the sky with an unforgettable flight over Hana’s coastlines, bays, valleys and volcanic origins. Your guide for this glider adventure is Hans, a veteran pilot who has been gliding since he was 14. Together, you’ll soar over the crystal blue waters of Hana Bay and glide along the surrounding coasts before an optional excursion over Haleakala, the world’s largest dormant volcano. As you see Haleakala Crater from above, you’ll pass Haleakala Observatory before winding your way back down to Hana Airport. Don’t forget your video camera — this is one thrilling and awe-inspiring journey you’ll want to remember for years to come.</p>
      </article>
      <article>
        <img data-original="/assets/images/exp_hana_adventure_stand_up_paddling.jpg" src="/assets/images/exp_hana_adventure_stand_up_paddling.jpg" alt="Stand Up Paddling Hawaii Stand Up Paddleboarding">
        <h5>Stand Up Paddling</h5>
        <p class="description">Stand Up Paddling is a popular water sport around the world today, but did you know this adventurous aquatic activity actually originated along the shores of Hawaii? Better known locally as hoe he'e nalu, SUP was once how the ancient Polynesians surfed the local waves. SUP is similar to surfing except a paddle is used to maintain balance and movement on the water, providing a strong core workout that promotes general fitness in true Hawaiian style. Plus, SUP at Travaasa Hana is more than just a fun workout — it also provides beautiful views of the natural surroundings of Hana Bay.</p>
      </article>
      <article>
        <img data-original="/assets/images/exp_hana_adventure_snorkeling.jpg" src="/assets/images/exp_hana_adventure_snorkeling.jpg" alt="Snorkeling Hana snorkeling">
        <h5>Snorkeling</h5>
        <p class="description">Maui is by far the most popular snorkeling island in all of Hawaii — and it isn’t hard to see why. Spectacular coral reefs and colorful varieties of exotic sea life beckon you to discover the wealth of treasures that wait for you beneath the ocean’s surface. During this snorkeling experience, you’ll discover the hidden beauty of Kapueokahi Beach or Hana Bay, where a protected cove teems with tropical fish and living coral gardens in amazing shapes and colors. Take your time enjoying this snorkeler's paradise because after your first glimpse of Hawaii’s stunning underwater surroundings, you might just become hooked on this breathtaking experience.</p>
      </article>
      </section>
    </article>
</section>
<?php
   include_once($path."/Library/Travaasa_Testimonials.php");
   include_once($path."/Library/Travaasa_Footer_Hana.php");
   include_once($path."/Library/Travaasa_Scripts.php");
?><script type="text/javascript">
$(function() {
	createSubpageStorylines(true, true);
	setLocation("Hana", "experiences");
});
</script>
</body>
</html>
