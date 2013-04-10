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
?><section id="feature1_wrapper" class="subpage_bg"><img src="/assets/images/bg_hana_clouds.jpg" alt=""></section>
<section id="content">
<article id="main">
  <section class="intro pad clearfix notheater">
          <h1>EXPERIENCE SCHEDULE</h1>
          <p>This schedule is subject to change. View our selection of <a href="/austin/austin-experiences/austin-private-classes.html">private classes</a>.</p>
  </section>
  <section class="grey pad group">
  	   <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=900&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=travaasa.com_a8hp6jo2ugd1l3dmunvcqgdu3s%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FChicago" style=" border:solid 10px #FFFFFF " width="630" height="900" frameborder="0" scrolling="no"></iframe>
    
  </section>
</article>
</section>
<?php 
   include_once($path."/Library/Travaasa_Testimonials.php");
   include_once($path."/Library/Travaasa_Footer_Austin.php");
   include_once($path."/Library/Travaasa_Scripts.php");
?><script type="text/javascript">
$(function() {
	setLocation("Austin");
});
</script>
</body>
</html>