<?php
    //  $json_url = "https://islamic-api-indonesia.herokuapp.com/api/data/json/tahlil";
    $json = file_get_contents("https://api.quran.sutanlab.id/surah/2");
    $data = json_decode($json);
    ?>
    
    <?php
        // foreach ($data->result->data as $mydata){
        //     echo $mydata->verses[0]->text->arab;
        // }
        
        // $length = $data->data->numberOfVerses;
        $i = 0;
        foreach ($data->data as $mydata){
            // error_reporting(0);
            // if ($i <= $length){
                // echo $data->data->verses[$i]->text->arab."<br>";
            // } else {
            //     echo break;
            // }
    
            echo $data->data->verses[$i]->text->arab."<br>";
            echo $data->data->verses[$i]->translation->id."<br>";
    
        $i += 1;
        }
        // 
    ?>