<?php
    $json_url = "https://islamic-api-indonesia.herokuapp.com/api/data/json/hadith/abu-daud";
    $json = file_get_contents($json_url);
    $api = json_decode($json, TRUE);
?>