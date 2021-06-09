<!DOCTYPE html>
<html>
<head>
  <title>Hadits - Hadits Riwayat Abu Daud</title>
  <style type="text/css" href="style.css"></style>
</head>
<body>

<?php
 include('header.php');
 $json_url = "json/abu-daud.json";
 $json = file_get_contents($json_url);
 $api = json_decode($json, TRUE);
?>

        <div style="padding-left: 8em; padding-right: 8em; padding-top: 8em; padding-bottom: 4em;">
            <h1 style="text-align: center;">Hadits - Hadits Riwayat Abu Daud</h1>
        </div>
            <?php
                $i = 0;
                foreach ($api as $value){
                ?>
        <div style="padding-left: 8em; padding-right: 8em; padding-bottom: 4em;">
            <p align="center">(<?php echo $value['number'] ?>)</p>
            <br>
            <h1 align="right" style="font-family: 'Scheherazade', serif;"><?php echo $value['arab'] ?></h1>
            <br>
            <div style="text-align: justify;">
                <p>"<?php echo $value['id'] ?>"</p>
            </div>
        </div>
        <hr>

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