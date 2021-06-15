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
    

	// $json_url = "https://raw.githubusercontent.com/lakuapik/jadwalsholatorg/master/kota.json";
	// $json = file_get_contents($json_url);
    // $data = json_decode($json);
    
    // foreach ($data as $value){
    //     echo $value."<br>";
    // }

    // $json = file_get_contents("data/doaharian.json");
    // $data = json_decode($json);
    
    // foreach ($data as $value){
    //     echo $value->title;
    // }

?>

<?php
for ($x = 1; $x <= 114; $x++) {
    // <?php
    //  $json_url = "https://islamic-api-indonesia.herokuapp.com/api/data/json/tahlil";
    $json = file_get_contents("https://api.quran.sutanlab.id/surah/$x");
    $data = json_decode($json);
    ?>
    
    <?php
        // foreach ($data->result->data as $mydata){
        //     echo $mydata->verses[0]->text->arab;
        // }
        
        // $length = $data->data->numberOfVerses;
        $i = 0;
        foreach ($data->data as $mydata){
            error_reporting(0);
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
    
}
?>





    <!-- // foreach ($data->result->data as $mydata){

    //     // echo $data->result->data[5]->title;
    //     echo $mydata->name->short."<br>";
    //     // echo $mydata->arabic."<br>"; 
    //     // echo $mydata->translation."<br>"; 

    //     echo "<br>";
    //     echo "<hr>";
    //     echo "<br>";
		
    // } -->
