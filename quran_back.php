<?php

    // include "quran.php";

    $json_url = "https://raw.githubusercontent.com/penggguna/QuranJSON/master/quran.json";
    $json = file_get_contents($json_url);
    $api = json_decode($json, TRUE);
    // $name = $api[0]['name'];
    // $kisah = $api[0]['description'];
    
    // $a = $i + 1;
    // $json_url_ayat = "https://raw.githubusercontent.com/penggguna/QuranJSON/master/surah/$a.json";
    // $json_ayat = file_get_contents($json_url_ayat);
    // $api_ayat = json_decode($json_ayat, TRUE);

?>