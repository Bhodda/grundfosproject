<?php

require_once('geoplugin.class.php');

$geoplugin = new geoPlugin();

$geoplugin->locate($_SERVER['REMOTE_ADDR']);

?>