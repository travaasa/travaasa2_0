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
<script type="text/javascript" src="http://www.navistechnologies.info/JavascriptPhoneNumber/js.aspx?account=15070&amp;jspass=ivcsp4gaxk4fbz8banxd&amp;dflt=<?php echo NAVIS_GLOBAL_AUSTIN ?>"></script>
<script type="text/javascript">ProcessNavisNCKeyword();</script>
<!-- end NAVIS Code -->
</head>
<body>
<?php 
   include_once($path."/Library/Travaasa_Menu_Austin.php");
?><section id="feature1_wrapper" class="feature_carousel clearfix">
    <div id="feature1" class="feature">
      	<div class="slide"><a data-target="flare" href="http://www.youtube.com/watch?v=YLFU16k-6f8" id="lnk"><img data-original="/assets/images/feature_austin_1600x640_dayvideo_promo.jpg" src="/assets/images/global/placeholder.gif" alt=""></a></div>
    </div>
    <a class="carousel_prev" id="feature1_prev" href="#"><span><b>prev</b></span></a>
    <a class="carousel_next" id="feature1_next" href="#"><span><b>next</b></span></a>
</section>
<section id="content">
<article id="main">
  <section class="intro pad clearfix">
      <div class="col span_6_of_9">
          <h1>The Newest Experiential Resort and Spa in Texas</h1>
          <p>The location of Travaasa Austin alone will inspire you. Surrounded by the ancient live oaks and undulating hills of the Balcones Canyonlands Preserve, our resort embraces nature … and is embraced by nature in return.<br><br>
          <strong>But this isn’t just another resort.</strong><br><br>
          As Texas's most active destination resort and spa, Travaasa Austin takes pride in offering its guests a compelling menu of inclusive guided adventures, culinary classes, cultural encounters, healing spa treatments, and fitness and wellness workshops, all located in a Zen-like preserve for the soul.</p>
      </div>
      <div class="pricing_grp col span_3_of_9"><?php include_once($path."/Library/Travaasa_Austin_Pricing.php"); ?></div>
  </section>
</article>
</section>
<?php 
   include_once($path."/Library/Travaasa_Testimonials.php");
   include_once($path."/Library/Travaasa_Footer_Austin.php");
   include_once($path."/Library/Travaasa_Scripts.php");
?><script type="text/javascript">
$(function() {
	createSubpageStorylines(true, true);
	setLocation("Austin");
	$("#lnk").click();
});
</script>
</body>
</html>