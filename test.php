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
 include('header.php');
 $json_url = "https://islamic-api-indonesia.herokuapp.com/api/data/json/quran";
 $json = file_get_contents($json_url);
 $data = json_decode($json);
?>


<div class="row quran-row-main" id="data-surah">

    <?php
      $i = 0;
    	foreach ($data->data as $mydata){
        ?>
        <div class="col-lg-3 col-sm-1 col-md-5 quran-box" data-toggle="modal" data-target="#myModal">
            <p><?=$mydata->number?></p>
            <p class="name-surah"><b><?=$mydata->name->short?></b></p>
            <p class="arti-surah">as</p>
        </div>
        
        <?php
        $i += 1;
      }
    ?>


</div>

<?php

include('footer.php');
?>

<!-- <div class="col-lg-3 col-sm-1 col-md-5 quran-box" data-toggle="modal" data-target="#myModal">
        <p>al</p>
        <p class="name-surah"><b>al</b></p>
        <p class="arti-surah">as</p>
    </div> -->