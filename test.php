<?php
	// $json = file_get_contents("data/doaharian.json");
	// $data = json_decode($json);

    // echo $data[0]->title;

    // echo $data->title;
    
    // foreach ($data as $value){

	// 	echo $value->title[];
	// 	echo "title : ".$value->title."<br>";
	// 	echo "arabic : ".$value->arabic."<br>";
	// 	echo "latin : ".$value->latin."<br>";
	// 	echo "translation : ".$value->translation."<br>";
		
    // }
    

	$json_url = "https://raw.githubusercontent.com/lakuapik/jadwalsholatorg/master/kota.json";
	$json = file_get_contents($json_url);
    $data = json_decode($json);
    
    foreach ($data as $value){
        echo $value."<br>";
    }

    // $json = file_get_contents("data/doaharian.json");
    // $data = json_decode($json);
    
    // foreach ($data as $value){
    //     echo $value->title;
    // }

?>