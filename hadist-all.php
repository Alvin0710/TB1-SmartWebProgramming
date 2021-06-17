<!DOCTYPE html>
<html>
<head>
  <title>Hadits - Hadits</title>
  <style type="text/css" href="style.css"></style>
  <link rel="icon" href="images/LOGO.png">
</head>

<?php
 include('header.php');

$a = $_GET['id'];
$json_url = "";

if ($a == "Abu Daud") {
    $json_url = "json/abu-daud.json";
} elseif ($a == "Ahmad") {
    $json_url = "json/ahmad.json";
} elseif ($a == "Bukhari") {
    $json_url = "json/bukhari.json";
} elseif ($a == "Darimi") {
    $json_url = "json/darimi.json";
} elseif ($a == "Ibnu Majah") {
    $json_url = "json/ibnu-majah.json";
} elseif ($a == "Nasai") {
    $json_url = "json/nasai.json";
} elseif ($a == "Malik") {
    $json_url = "json/malik.json";
} elseif ($a == "Muslim") {
    $json_url = "json/muslim.json";
} 

 $json = file_get_contents($json_url);
 $api = json_decode($json, TRUE);
?>


<body>



<div style="padding-left: 8em; padding-right: 8em; padding-top: 8em; padding-bottom: 4em;">
    <h1 style="text-align: center;">Hadits - Hadits Riwayat <?php echo $a ?></h1>
</div>

    <?php
        $i = 0;
        foreach ($api as $value){
    ?>
    <div class="container">
        <p align="center">(<?php echo $value['number'] ?>)</p>
        <br><br>
        <h3 align="right" style="font-family: 'Scheherazade', serif;"><?php echo $value['arab'] ?></h3>
        <br>
        <div style="text-align: justify;">
            <p>"<?php echo $value['id'] ?>"</p>
        </div>
    </div><br>
<hr>
<br>
    <?php
        $i += 1;
    }
    ?>

<br>
<br>
<br>
<br>
    
</div>
<?php

include('footer.php');
?>


</body>
</html>