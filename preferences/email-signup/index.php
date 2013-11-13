<?php
	session_start();
	$loc = @$_GET['loc']; 
	if (strlen($loc) > 0 && ($loc == 'hana' || $loc == 'austin')){ 
	  $_SESSION["origLoc"] = $loc;
	} elseif (isset($_SESSION["origLoc"])) {
	  $loc = $_SESSION["origLoc"];
	} else {
	  $loc = "default";
	}
   $path = $_SERVER['DOCUMENT_ROOT'];
   include_once($path."/Library/Travaasa_Common.php");
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Email Newsletter Signup Preferences | Travaasa</title>
	<meta name="keywords" content="travaasa, travel, resorts, hana, hāna, hawaii, austin, texas, Austin resort, Austin spa, travaasa Austin, Austin spa resort, experiential, hotel, Austin hotel, Austin conference center, Austin group meeting" />
	<meta name="description" content="Rediscover the magic of travel with Travaasa Austin, Texas or Hana, Maui." />
	<?php 
   include_once($path."/Library/Travaasa_Head.php");
	?>
<!-- start NAVIS Code -->
<script type="text/javascript" src="http://www.navistechnologies.info/JavascriptPhoneNumber/js.aspx?account=15070&amp;jspass=ivcsp4gaxk4fbz8banxd&amp;dflt=<?php 
if ($loc == 'hana') :
echo NAVIS_GLOBAL_HANA;
elseif ($loc == 'austin') :
echo NAVIS_GLOBAL_AUSTIN;
else :
echo NAVIS_GLOBAL_DEFAULT;
endif; 
?>"></script>
<script type="text/javascript">ProcessNavisNCKeyword();</script>
<!-- end NAVIS Code -->
</head>
<body>
<?php 
if ($loc == 'hana') :
include_once($path."/Library/Travaasa_Menu_Hana.php");
elseif ($loc == 'austin') :
include_once($path."/Library/Travaasa_Menu_Austin.php");
else :
include_once($path."/Library/Travaasa_Menu.php");
endif; 
?>
<section id="feature1_wrapper" class="subpage_bg"><img src="/assets/images/bg_hana_clouds.jpg" alt=""></section>
<section id="content">
<article id="main">
    <section class="intro pad clearfix notheater">
          <!--<iframe height="700" allowTransparency="true" frameborder="0" scrolling="no" style="width:666px; border:none; padding: 20px 20px 20px 20px;"  src="https://travaasa.wufoo.com/embed/m1gbj6ka06fc414/"></iframe>
          <p></p>-->
          <div style="margin-left:50px;" id="wufoo-m1gbj6ka06fc414">
<!--<a href="https://travaasa.wufoo.com/forms/m1gbj6ka06fc414"></a>-->
</div>
<script type="text/javascript">var m1gbj6ka06fc414;(function(d, t) {
var s = d.createElement(t), options = {
'userName':'travaasa', 
'formHash':'m1gbj6ka06fc414', 
'autoResize':true,
'height':'598',
'width':'460',
'async':true,
'host':'wufoo.com',
'header':'show', 
'ssl':true};
s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
s.onload = s.onreadystatechange = function() {
var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
try { m1gbj6ka06fc414 = new WufooForm();m1gbj6ka06fc414.initialize(options);m1gbj6ka06fc414.display(); } catch (e) {}};
var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
})(document, 'script');</script>
  </section>

  <!--<p><a class="btn-list" href="/preferences/">GET ON THE LIST</a></p>-->
  <!--<section class="intro pad clearfix">    
    <div class="section group">

    </div>  
      
  </section>-->
  
  <!--<section class="grey pad">
        <h4>See upcoming months</h4>
  		<div class="group">
            <div class="col span_1_of_3 month"><div class="active"><a href="/calendar/2013/september/"><img src="/assets/images/months/sep-uncover.png" alt="September is Uncover Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2013/october/"><img src="/assets/images/months/oct-harvest.png" alt="October is Harvest Month"></a></div></div>
           <div class="col span_1_of_3 month"><div><a href="/calendar/2013/november/"><img src="/assets/images/months/nov-stop.png" alt="November is Stop Month"></a></div></div>
        </div>
  </section>-->
  
</article>
</section>
<?php 
include_once($path."/Library/Travaasa_Testimonials.php");
if ($loc == 'hana') :
include_once($path."/Library/Travaasa_Footer_Hana.php");
elseif ($loc == 'austin') :
include_once($path."/Library/Travaasa_Footer_Austin.php");
else :
include_once($path."/Library/Travaasa_Footer.php");
endif; 
include_once($path."/Library/Travaasa_Scripts.php");
?><script type="text/javascript">
$(function() {
	createSubpageStorylines(true, true);
});
</script>
</body>
</html>