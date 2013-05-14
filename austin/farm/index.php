<?php 
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
<script type="text/javascript" src="http://www.navistechnologies.info/JavascriptPhoneNumber/js.aspx?account=15070&amp;jspass=ivcsp4gaxk4fbz8banxd&amp;dflt=<?php echo NAVIS_GLOBAL_AUSTIN ?>"></script>
<script type="text/javascript">ProcessNavisNCKeyword();</script>
<!-- end NAVIS Code -->
</head>
<body>
<?php 
   include_once($path."/Library/Travaasa_Menu_Austin.php");
?><section id="feature1_wrapper" class="feature_carousel sub_feature clearfix">
    <div id="feature1" class="feature">
      <div class="slide"><img data-original="/assets/images/farm_teaser_1600x640.jpg" src="/assets/images/global/placeholder.gif" alt=""></div>
    </div>
    <a class="carousel_prev" id="feature1_prev" href="#"><span><b>prev</b></span></a>
    <a class="carousel_next" id="feature1_next" href="#"><span><b>next</b></span></a>
</section>
<section id="content">
<article id="main">
  <section class="intro pad clearfix notheater">
      <div class="col span_8_of_9">
          <h3>GO FOR A ROLL IN THE HAY. REALLY. WE HAVE A FARM.</h3>
          <p>We’re taking the whole farm-to-table thing to heart with our very own 3.25-acre working farm. At our Travaasa Farm in Austin, we’re growing the highest quality produce in the region, using all organic practices, to supply food for our kitchen and provide guests with experiences and programs to participate in throughout the year. Classes include everything from seeding and identifying edible plants, to composting, chicken care and much more.</p>
          <p>Located in a gorgeous valley across from the property on the edge of the Balcones Canyonlands Preserve, the farm features more than 80 varieties of vegetable crops, perennial fruit orchards, native pecans, edible flowers, and culinary and medical herbs, all of which are used extensively in the resorts food and beverage offerings as well as in treatments at the award winning spa. Additionally, the farm includes a 360-square foot greenhouse, a 2,300-square foot activity garden for hands-on growing classes, and a 680-square foot chicken coop with more than 100 laying hens of five different breeds and two roosters, as well as the property’s new equine center which is home to seven horses and our Equine Encounter program.</p>
          <p>It’s the real deal. Come roll your sleeves up and get down with us on the farm.</p>

          <img src="/assets/images/farm-fruit-logo-533.png" alt="The Farm at Travaasa Austin" width="320">
      <!--<dl class="floatright span_3_of_7 inset">
      <dt><img src="/assets/images/farm-fruit-logo-533.png" alt="The Farm at Travaasa Austin" class="fitwidth"></dt>
        <dd></dd>
    </dl>-->
      </div>
  </section>
  <!--<section class="grey pad group">
    <h3>Terms &amp; Conditions</h3>

<p>©2013 Green Tea, LLC. All rights reserved.</p>
  </section>-->
</article>
</section>
<?php 
   include_once($path."/Library/Travaasa_Testimonials.php");
   include_once($path."/Library/Travaasa_Footer_Austin.php");
   include_once($path."/Library/Travaasa_Scripts.php");
?><script type="text/javascript">
$(function() {
	createSubpageStorylines(true, false);
	setLocation("Austin");
});
</script>
</body>
</html>