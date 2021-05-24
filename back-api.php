<?php
	$json_url = "https://raw.githubusercontent.com/lakuapik/jadwalsholatorg/master/kota.json";
	$json = file_get_contents($json_url);
	$api = json_decode($json, TRUE);
	$data = $api[0];
?>