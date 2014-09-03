<?php
$base = "/calendar/2014/september/";
$referrer = $_SERVER["HTTP_REFERER"];
if (strlen($referrer) <= 0)
	$referrer = "blank";
$hana = strpos($referrer, "hana");
$austin = strpos($referrer, "austin");
if ($hana > 0) {
	header('Location: ' . $base . "?loc=hana");
} elseif ($austin > 0) {
	header('Location: ' . $base . "?loc=austin");
} else {
	header('Location: ' . $base);
}
exit();
?>