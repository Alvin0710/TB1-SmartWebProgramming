<?php
    // $json_url = "https://islamic-api-zhirrr.vercel.app/api/kisahnabi";
    // $json = file_get_contents($json_url);
    $json = file_get_contents("kisahnabi.json");
    $api = json_decode($json, TRUE);
?>