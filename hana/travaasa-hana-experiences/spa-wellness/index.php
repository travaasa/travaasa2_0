<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   include_once($path."/Library/Travaasa_Common.php");
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Hana Spa & Wellness: Massages, Meditation | Travaasa Hana Resort</title>
	<meta name="keywords" content="travaasa, travel, resorts, hana, hāna, hawaii, austin, texas, Austin resort, Austin spa, travaasa Austin, Austin spa resort, experiential, hotel, Austin hotel, Austin conference center, Austin group meeting" />
	<meta name="description" content="Relax and rejuvenate during your stay at Travaasa Resort in Hana with spa treatments, meditation sessions and more. " />
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
        <h1>Hana Spa & Wellness</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident beatae repellat inventore necessitatibus quisquam, aspernatur a sint delectus rerum, vero, porro recusandae sit distinctio quos atque. Expedita delectus quidem saepe.</p>
      </div>
    </section>

    <section class="group grey pad storylines experience-inner-tiles hana">
      <article>
        <img data-original="/assets/images/exp_hana_spa_body_treatments.jpg" src="/assets/images/exp_hana_spa_body_treatments.jpg" alt="The Spa at Travaasa Hana Maui spa at Hana">
        <h5>The Spa at Travaasa Hana</h5>
        <p class="description">At The Spa at Travaasa Hana, we gratefully utilize the incredible bounty of Hana, using its abundant plants, minerals and water to blend in our teas and create natural body and face products and treatments. Our spa menu is designed to do more than pamper your body — we believe in honoring your body by purposefully using the healing, revitalizing and nourishing properties of local plants and essential oils to create a truly rejuvenating experience. The wide variety of therapeutic services we offer prepares our guests to experience Hana more fully, thus restoring feelings of balance and wellness to body, mind, spirit and emotion.</p>
      </article>
      <article>
        <img data-original="/assets/images/exp_hana_spa_guided_mediation.jpg" src="/assets/images/exp_hana_spa_guided_mediation.jpg" alt="Guided Meditation Hawaii meditation classes">
        <h5>Guided Meditation</h5>
        <p class="description">In this Travaasa, we help demystify the ancient practice of meditation: bringing awareness to our moment-to-moment experiences. This simple — but not easy — practice of acceptance, letting go, non-striving and suspension of the judgmental mind leaves us with a deep sense of openness and receptivity to ourselves, to others and to the moment as it unfolds. Learn basic meditation techniques, such as breathing and visualization, and practice this art of mindful awareness under the gentle guidance of your instructor. By the end of this peaceful meditation, you’ll find yourself in a new state of calm after practicing quieting your mind and focusing on the moment.</p>
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
