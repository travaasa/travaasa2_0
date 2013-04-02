<?php
$base = "/calendar/2013/april/";
$referrer = $_SERVER["HTTP_REFERER"];
if (strlen($referrer) <= 0)
	$referrer = "blank";
$hana = strpos($referrer, "hana");
$austin = strpos($referrer, "austin");
if ($hana === true) {
	header('Location: ' . $base . "?loc=hana");
} elseif ($austin === true) {
	header('Location: ' . $base . "?loc=austin");
} else {
	header('Location: ' . $base);
}
exit();
?>