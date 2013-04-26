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
<script type="text/javascript" src="http://www.navistechnologies.info/JavascriptPhoneNumber/js.aspx?account=15070&amp;jspass=ivcsp4gaxk4fbz8banxd&amp;dflt=<?php echo NAVIS_GLOBAL_HANA ?>"></script>
<script type="text/javascript">ProcessNavisNCKeyword();</script>
<!-- end NAVIS Code -->
</head>
<body>
<?php 
   include_once($path."/Library/Travaasa_Menu_Hana.php");
?><section id="feature1_wrapper" class="subpage_bg"><img src="/assets/images/bg_hana_clouds.jpg" alt=""></section>
<section id="content">
<article id="main">
  <section class="intro pad clearfix notheater">
          <h2>Travaasa Hana Packing List</h2>
  </section>
  <section class="grey pad group">
          <p style="margin:10px 0 10px 15px;">&bull;&nbsp;Camera<br />&bull;&nbsp;Swimsuit<br />&bull;&nbsp;Sun block<br /> &bull;&nbsp;Polarized Sunglasses<br /> &bull;&nbsp;Hat<br /> &bull;&nbsp;Poolside shoes<br /> &bull;&nbsp;Workout clothes<br /> &bull;&nbsp;Comfortable walking shoes<br /> &bull;&nbsp;Comfortable clothing for participating in activities<br /> &bull;&nbsp;Close toed shoes for adventure activities<br /> &bull;&nbsp;Casual "aloha attire" clothing for dinner<br /> &bull;&nbsp;Toiletries<br /> &bull;&nbsp;Book or magazine<br /> &bull;&nbsp;Rain jacket (in case there is rain)</p>
  </section>
</article>
</section>
<?php 
   include_once($path."/Library/Travaasa_Testimonials.php");
   include_once($path."/Library/Travaasa_Footer_Hana.php");
   include_once($path."/Library/Travaasa_Scripts.php");
?><script type="text/javascript">
$(function() {
	$('a[data-target="flare"]').peFlareLightbox();
	setLocation("Hana", "offproperty");
});
</script>
</body>
</html>