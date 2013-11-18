<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   include_once($path."/Library/Travaasa_Common.php");
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Travaasa Experiential Resorts - Rediscover the Magic of Travel.</title>
	<meta name="keywords" content="travaasa, travel, resorts, hana, hāna, hawaii, austin, texas, Austin resort, Austin spa, travaasa Austin, Austin spa resort, experiential, hotel, Austin hotel, Austin conference center, Austin group meeting" />
	<meta name="description" content="Rediscover the magic of travel with Travaasa Austin, Texas or Hana, Maui." />
	<?php 
   include_once($path."/Library/Travaasa_Head.php");
	?>
<!-- start NAVIS Code -->
<script type="text/javascript" src="http://www.navistechnologies.info/JavascriptPhoneNumber/js.aspx?account=15070&amp;jspass=ivcsp4gaxk4fbz8banxd&amp;dflt=<?php echo NAVIS_GLOBAL_HANA ?>"></script>
<script type="text/javascript">ProcessNavisNCKeyword();</script>
<!-- end NAVIS Code -->
</head>
<body>
<?php 
   include_once($path."/Library/Travaasa_Menu_Hana.php");
?><section id="feature1_wrapper" class="feature_carousel clearfix">
    <div id="feature1" class="feature">
      	<div class="slide"><a data-target="flare" href="http://www.youtube.com/watch?v=NOtwkBLTFzM" id="lnk"><img data-original="/assets/images/feature_hana_1600x640_dayvideo_promo.jpg" src="/assets/images/global/placeholder.gif" alt=""></a></div>
    </div>
    <a class="carousel_prev" id="feature1_prev" href="#"><span><b>prev</b></span></a>
    <a class="carousel_next" id="feature1_next" href="#"><span><b>next</b></span></a>
</section>
<section id="content">
<article id="main">
  <section class="intro pad clearfix">
      <div class="col span_6_of_9">
          <h1>TRAVAASA HANA: MAUI'S LAST TRULY HAWAIIAN PLACE</h1>
          <p>Long considered one of the most remarkable resorts in Hawaii, Travaasa Hana (formerly known as Hotel Hana Maui) is now even better. In fact, it was voted the "No. 1 Resort in Hawaii" in <em>Condé Nast Traveler</em>'s 2011 Reader's Choice Awards.<br><br>Located in the town of Hana on the eastern tip of Maui, Travaasa Hana is the first resort on the island to greet the rising sun. Set amid rolling grass fields and palm trees above Kaihalulu Bay, Travaasa Hana will immerse you in the real Hawaii.</p>
          <a href="/hana/video/"><img class="videobox" width="350" src="/assets/images/play-button-600px-hana.jpg"></a>
      </div>
      <div class="pricing_grp col span_3_of_9"><?php include_once($path."/Library/Travaasa_Hana_Pricing.php"); ?></div>
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
	setLocation("Hana");
	$("#lnk").click();
});
</script>
</body>
</html>