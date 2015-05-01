<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   include_once($path."/Library/Travaasa_Common.php");

   $fp = file_get_contents( "sitemap.txt" );
   $rows = explode("\n", $fp);

   $austin = array();
   $hana = array();
   $travaasa = array();


     foreach($rows as $row => $data) {

      $row_data = explode(",", $data);

      if ( $row_data[6] == 1 || $row_data[6] == 2) {

      switch(strtolower($row_data[0])){
        case "austin":
         $austin[] = $row_data;
         break;
        case "hana":
         $hana[] = $row_data;
         break;
        case "travaasa" :
         $travaasa[] = $row_data;
         break;
      }
     }

    }


?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Travaasa Experiential Resorts Site Map | Resorts in Austin TX and Hana, Maui HI</title>
	<meta name="keywords" content="travaasa, travel, resorts, hana, hāna, hawaii, austin, texas, Austin resort, Austin spa, travaasa Austin, Austin spa resort, experiential, hotel, Austin hotel, Austin conference center, Austin group meeting" />
	<meta name="description" content="Travaasa destination resorts in Hana Hawaii and Austin Texas take our guests on a journey of discovery. All inclusive packages available." />
	<?php
   include_once($path."/Library/Travaasa_Head.php");
	?>
<!-- start NAVIS Code -->
<script type="text/javascript" src="http://www.navistechnologies.info/JavascriptPhoneNumber/js.aspx?account=15070&amp;jspass=ivcsp4gaxk4fbz8banxd&amp;dflt=<?php echo NAVIS_GLOBAL_DEFAULT ?>"></script>
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
   include_once($path."/Library/Travaasa_Menu.php");
?><section id="feature1_wrapper" class="subpage_bg"><img src="/assets/images/bg_hana_clouds.jpg" alt=""></section>
<section id="content">
<article id="main">
  <section class="intro pad clearfix notheater">
  		<h1>Site Map</h1>
  </section>
  		<section class="pad grey group">
        	<div class="col span_1_of_3">
            	<h5><a href="/austin">Travaasa Austin</a></h5>
              	<p class="clear"><a href="https://www.phgsecure.com/IBE/bookingRedirect.ashx?propertyCode=AUSTC&amp;numberOfAdults=2" id="pricing-hana-link" target="_blank">MAKE A RESERVATION</a><script type="text/javascript">AppendNavisKeywordToLink("sitemap-austin-link");</script><br>
                <?php
                foreach($austin as $a):
                  ?>
                    <a href="<?=$a[2];?>"><?=strtoupper($a[1]);?></a><br>
                  <?php
                endforeach;
                ?>
                </p>
            </div>
        	<div class="col span_1_of_3">
            	<h5><a href="/hana">Travaasa Hana</a></h5>
              	<p class="clear"><a href="https://www.phgsecure.com/IBE/bookingRedirect.ashx?propertyCode=HNMHM&amp;numberOfAdults=2" id="pricing-hana-link" target="_blank">MAKE A RESERVATION</a><script type="text/javascript">AppendNavisKeywordToLink("sitemap-hana-link");</script><br>
                <?php
                  foreach($hana as $h):
                    ?>
                      <a href="<?=$h[2];?>"><?=strtoupper($h[1]);?></a><br>
                    <?php
                  endforeach;
                  ?>
                  </p>
            </div>
            <div class="col span_1_of_3">
      			<h5><a href="/">Travaasa</a></h5>
                <p>
                <?php
                foreach($travaasa as $t):
                  ?>
                    <a href="<?=$t[2];?>"><?=strtoupper($t[1]);?></a><br>
                  <?php
                endforeach;
                ?>
                </p>
    		</div>
          </section>
</article>
</section>
<?php
   include_once($path."/Library/Travaasa_Testimonials.php");
   include_once($path."/Library/Travaasa_Footer.php");
   include_once($path."/Library/Travaasa_Scripts.php");


?>
<script type="text/javascript">
$(function() {
});
</script>
</body>
</html>
