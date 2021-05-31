<?php
	$json = file_get_contents("data/doaharian.json");
	$data = json_decode($json);

    echo $data[0]->title;

    // echo $data->title;
    
    // foreach ($data as $value){

	// 	echo $value->title[];
	// 	echo "title : ".$value->title."<br>";
	// 	echo "arabic : ".$value->arabic."<br>";
	// 	echo "latin : ".$value->latin."<br>";
	// 	echo "translation : ".$value->translation."<br>";
		
	// }
?>