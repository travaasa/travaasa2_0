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
?>

<!-- Start page header: see header widgets -->
<section id="feature_carousel_1" class="feature_carousel clearfix">
    <div id="feature_carousel_content_1" class="feature">
    	<div class="slide"><img data-original="/assets/images/feature_austin_1600x640_jeanberry.jpg" src="/assets/images/global/placeholder.gif" alt="Jean Berry"></div>
    </div>
    <a class="carousel_prev" id="feature1_prev" href="#"><span><b>prev</b></span></a>
    <a class="carousel_next" id="feature1_next" href="#"><span><b>next</b></span></a>
</section>
<!-- End page header //-->

<section id="content">
	<article id="main">

	<!-- Start body content: see body widgets //-->
	<section class="intro pad clearfix">
    	<h1>Jean Berry, The Inspiration for Jean's Kitchen</h1>
          <p>Jean Berry's life was the epitome of the Travaasa spirit in travel, food and fun. Besides enjoying good food from around the world, she loved to cook, especially for others. Her ordinary life as a wife, mother, and friend gave her the opportunity to experiment, perfect, and make several types and kinds of food. Her meals and dishes became extraordinary because she used ideal ingredients and made just about everything from scratch.
Although Jean's parents were Americans, they lived in Mexico at the time of her birth and traveled to EI Paso to have their baby in a more modern American hospital. She then spent her childhood in Chicago and Denver, working in the family creamery as a teenager. She married and eventually established her family in Phoenix, Arizona.<br><br>
She loved to travel and see and learn about new places and cultures. She also had a passion for Italian food, and made her gnocchi, which became a family favorite, by hand. She went through an "Asian" phase and besides stir fry dishes, she made pot stickers and a variety of egg rolls. Once, when she made her Mexican green chili, she peeled so many chili peppers her hands blistered the next day. Her extraordinary drive and joyful attitude spurned her to compile and help publish several church cookbooks for the ordinary cook to benefit from her expertise. Her most famous dish, a meat pie, became a request of all potlucks and published in the local paper.
Always with a smile, always with open arms and hugs, Jean was an ordinary woman with an extraordinary spirit, and the character of Travaasa.</p>
		<p><a href="../">Dining at Travaasa Austin</a></p>
    </section>
	<!-- End body content //-->

	</article>
</section>

<?php 
   include_once($path."/Library/Travaasa_Testimonials.php");
   include_once($path."/Library/Travaasa_Footer_Austin.php");
   include_once($path."/Library/Travaasa_Scripts.php");
?>

<!-- Start page-level javascript (NOTE: ensure to include necessary code for referenced widgets per documentation) -->
<script type="text/javascript">
$(function() {
	createSubpageStorylines(true, true);
	setLocation("austin","dining");
});
</script>
</body>
</html>