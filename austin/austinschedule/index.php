<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   include_once($path."/Library/Travaasa_Common.php");
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Travaasa Austin Resort Experiences Schedule | All Inclusive Resort Activities</title>
	<meta name="keywords" content="travaasa, travel, resorts, hana, hāna, hawaii, austin, texas, Austin resort, Austin spa, travaasa Austin, Austin spa resort, experiential, hotel, Austin hotel, Austin conference center, Austin group meeting" />
	<meta name="description" content="Every day is a new discovery at Travaasa Austin resort. Our schedule includes both all inclusive resort experiences and additional adventures." />
	<?php
   include_once($path."/Library/Travaasa_Head.php");
	?>
<!-- start NAVIS Code -->
<script type="text/javascript" src="http://www.navistechnologies.info/JavascriptPhoneNumber/js.aspx?account=15070&amp;jspass=ivcsp4gaxk4fbz8banxd&amp;dflt=<?php echo NAVIS_GLOBAL_AUSTIN ?>"></script>
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
   include_once($path."/Library/Travaasa_Menu_Austin.php");
?><section id="feature1_wrapper" class="subpage_bg"><img src="/assets/images/bg_hana_clouds.jpg" alt=""></section>
<section id="content">
<article id="main">
  <section class="intro pad clearfix notheater">
          <h1>EXPERIENCE SCHEDULE</h1>
          <p>This schedule is subject to change. View our selection of <a href="/austin/austin-experiences/austin-private-classes.php">private classes</a>.</p>
          <video style="width:100% !important; height:auto !important;" preload autoplay loop>
          <source src="http://static.travaasa.com/assets/images/baby-chicks.mp4" type="video/mp4">
          <source src="http://static.travaasa.com/assets/images/baby-chicks.webm" type="video/webm">
          </video>
  </section>
  <section class="grey pad group">
      <p><iframe id="forecast_embed" type="text/html" display="inline" frameborder="0" height="245" width="100%" src="http://forecast.io/embed/#lat=30.444271&lon=-97.864709&name=Travaasa Austin&color=#D7385E&font=Helvetica&units=us"> </iframe></p>
  	<div class="responsive-iframe-container">
      <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=900&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=travaasa.com_a8hp6jo2ugd1l3dmunvcqgdu3s%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FChicago" style=" border:solid 10px #FFFFFF " width="630" height="900" frameborder="0" scrolling="no"></iframe>
    </div>

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
