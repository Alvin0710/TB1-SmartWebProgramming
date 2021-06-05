<?php
    $json_url = "https://raw.githubusercontent.com/penggguna/QuranJSON/master/quran.json";
    $json = file_get_contents($json_url);
    $api = json_decode($json, TRUE);
?>