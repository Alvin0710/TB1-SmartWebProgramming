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
    

	$json_url = "https://islamic-api-zhirrr.vercel.app/api/doaharian";
	$json = file_get_contents($json_url);
	$api = json_decode($json, TRUE);
    
    echo $api->title;

?>