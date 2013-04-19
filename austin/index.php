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
?><section id="feature1_wrapper" class="feature_carousel clearfix">
    <div id="feature1" class="feature">
      <div class="slide"><a data-target="flare" href="http://www.youtube.com/watch?v=YLFU16k-6f8"><img data-original="/assets/images/feature_austin_1600x640_dayvideo_promo.jpg" src="/assets/images/global/placeholder.gif" alt=""></a></div>
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
      <div class="pricing_grp col span_3_of_9"><br><?php include_once($path."/Library/Travaasa_Austin_Pricing.php"); ?></div>
  </section>
  <section class="grey pad">    
    <h4>HIGHLIGHTS</h4>   
    <div id="story1-wrapper" class="storyline_carousel">
      <div id="story1" class="storyline">
        <div class="slide">
          <div class="slide_inner"><a href="/austin/austin-experiences/"><img data-original="/assets/images/exp_austin_experiences_overview.jpg" src="/assets/images/global/placeholder.gif" alt=""></a>
            <h5>Travaasa Austin Experiences</h5>
            <p class="description">Situated on the edge of the Balcones Canyonlands Preserve, Travaasa Austin offers an extensive selection of guided activities set amidst — and inspired by — the beautiful Texas Hill Country. Learn how to Texas Two-Step, overcome your inhibitions on the Prickly Pear Challenge Course, take a mechanical bull riding workout class, embrace your intuition through a sunrise horseback ride, and more. At Travaasa Austin, you will never run out of things to do. <a href="/austin/austin-experiences/" class="more">Explore</a></p>
          </div>
        </div>
        <div class="slide">
          <div class="slide_inner"><a href="/austin/travaasa-spa-overview/"><img data-original="/assets/images/exp_austin_spa_overview.jpg" src="/assets/images/global/placeholder.gif" alt=""></a>
            <h5>Travaasa Austin a Top 10 Destination Spa</h5>
            <p class="description">TripAdvisor named Travaasa Austin a Top 10 Destination Spa. Because a visit here goes far beyond pampering and indulgence. Our treatments reflect our passion for, and knowledge of, the human body and the ability of plants and essential oils to naturally treat, heal and revitalize the soul. <a href="/austin/travaasa-spa-overview/" class="more">Explore</a></p>
          </div>
        </div>
        <div class="slide">
          <div class="slide_inner"><a href="/austin/accomodations/"><img data-original="/assets/images/exp_austin_accommodations_overview.jpg" src="/assets/images/global/placeholder.gif" alt=""></a>
            <h5>Relaxing digs</h5>
            <p class="description">The accommodations at Travaasa Austin are comfortable, stylish and soothing — perfect for unwinding after an ambitious workout, nature hike or meeting. Each rooms offers a private deck or patio welcoming the fresh outdoor air in. The a perfect place to just breathe. <a href="/austin/accomodations/" class="more">Explore</a></p>
          </div>
        </div>
        <div class="slide">
          <div class="slide_inner"><a href="/austin/dining/"><img data-original="/assets/images/exp_austin_dining_overview.jpg" src="/assets/images/global/placeholder.gif" alt=""></a>
            <h5>A taste of Travaasa Austin</h5>
            <p class="description">With the emphasis on locally sourced, organic food, and a focus on healthy eating, Travaasa Austin brings you a well-rounded culinary program that offers everything from basic culinary skills and juicing, to wine tasting and group cooking demonstrations and challenges. <a href="/austin/dining/" class="more">Explore</a></p>
          </div>
        </div>
      </div>
      <a class="carousel_prev" id="story1_prev" href="#"><span><b>prev</b></span></a> <a class="carousel_next" id="story1_next" href="#"><span><b>next</b></span></a> </div>
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
	$('a[data-target="flare"]').peFlareLightbox();
	setLocation("Austin");
});
</script>
</body>
</html>