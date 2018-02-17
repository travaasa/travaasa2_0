<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   include_once($path."/Library/Travaasa_Common.php");
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="robots" content="noindex" />
  <meta name="googlebot" content="noindex" />
  <title>Donation Request | Travaasa Hana, Maui</title>
  <meta name="keywords" content="travaasa, travel, resorts, hana, hana, hawaii, experiential, hotel, hotel hana-maui" />
  <meta name="description" content="Discover the town of Hana at the tip of Maui and at the end of the Road to Hana. Discover an extraordinary Maui resort vacation experience at Travaasa Hana." />
  <?php
   include_once($path."/Library/Travaasa_Head.php");
  ?>
</head>
<body>
<?php 
   include_once($path."/Library/Travaasa_Menu_Hana.php");?>
<section id="feature1_wrapper" class="subpage_bg"><img src="/assets/images/bg_hana_clouds.jpg" alt=""></section>
<!--<section id="feature1_wrapper" class="subpage400_bg"><a href="https://travaasa.ticketbud.com/robert-mondavi-wine-dinner" target="_blank"><img data-original="/assets/images/feature_400_austin_1600x400_mondavi-wine-dinner.jpg" src="/assets/images/feature_400_austin_1600x400_mondavi-wine-dinner.jpg" alt=""></section>-->

<!--<section id="feature1_wrapper" class="feature_carousel sub_feature clearfix">
    <div id="feature1" class="feature">
      <div class="slide"><a href="https://travaasabbqbash.ticketbud.com/travaasa-bbq-bash" target="_blank"><img data-original="/assets/images/feature_austin_1600x640_bbq-bash.jpg" src="/assets/images/global/placeholder.gif" alt=""></a></div>
    </div>
    <a class="carousel_prev" id="feature1_prev" href="#"><span><b>prev</b></span></a>
    <a class="carousel_next" id="feature1_next" href="#"><span><b>next</b></span></a>
</section>-->
<section id="content">
<article id="main">
  <section class="intro pad clearfix notheater">
          <iframe height="2000" allowtransparency="true" frameborder="0" scrolling="no" style="width:666px; border:none; padding: 20px 20px 20px 20px;" src="https://travaasa.wufoo.com/forms/donation-request/"></iframe>
  </section>
</article>
</section>
<?php


   include_once($path."/Library/Travaasa_Testimonials.php");
   include_once($path."/Library/Travaasa_Footer_Hana.php");
   include_once($path."/Library/Travaasa_Scripts.php");
?><script type="text/javascript">
$(function() {
  createSubpageStorylines(true, false);
  setLocation("Hana", "locationinfo");
  activateTabbedList();
});
</script>
</body>
</html>