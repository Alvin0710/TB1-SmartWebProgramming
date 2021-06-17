<!DOCTYPE html>
<html>
<head>
  <title>Hadits - Hadits Riwayat Abu Daud</title>
  <style type="text/css" href="css/style.css"></style>
  <link rel="icon" href="images/LOGO.png">
</head>
<body>

<?php
     $dataCard = array(
            array(
                'title' => 'Al-qur\'an',
                'source' => 'Islamic API V2 - Zhirrr',
                'link' => 'https://github.com/Zhirrr/islamic-rest-api-indonesian-v2'
            ),
            array(
                'title' => 'Do\'a - Do\'a',
                'source' => 'Islamic Rest API Official',
                'link' => 'https://github.com/Zhirrr/islamic-rest-api-indonesian'
            ),
            array(
                'title' => 'Kisah Nabi & Rasul',
                'source' => 'Islamic Rest API Official',
                'link' => 'https://github.com/Zhirrr/islamic-rest-api-indonesian'
            ),
            array(
                'title' => 'Hadits - Hadits',
                'source' => 'Islamic API V2 - Zhirrr',
                'link' => 'https://github.com/Zhirrr/islamic-rest-api-indonesian-v2'
            ),
            array(
                'title' => 'Wirid & Tahlil',
                'source' => 'Islamic API V2 - Zhirrr',
                'link' => 'https://github.com/Zhirrr/islamic-rest-api-indonesian-v2'
            ),
            array(
                'title' => 'Jadwal Sholat',
                'source' => 'Jadwalsholat.org',
                'link' => 'https://www.jadwalsholat.org'
            ),
         );


    $api = json_encode($dataCard);
?>

<?php
      $i = 0;
    	foreach ($dataCard as $mydata){
        ?>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p><?=$mydata['title']?></p>
                </div>
                <div class="flip-card-back">
                    <a href="<?=$mydata['link']?>" class="title-back-card" target="_blank"><?=$mydata['source']?></a>
                </div>
            </div>
        </div>
        
        <?php
        $i += 1;
      }
  ?>
</body>
</html>