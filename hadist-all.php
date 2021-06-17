<!DOCTYPE html>
<html>
<head>
  <title>Hadits - Hadits</title>
  <style type="text/css" href="css/style.css"></style>
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



<div class="container" style="padding-top: 10em; padding-bottom:10em;">
    <h1 style="text-align: center;">Hadits - Hadits Riwayat <?php echo $a ?></h1>
</div>

<div class="container input-icons">
  <form class="example" style="margin:auto;max-width:900px">
    <i class="fa fa-search icon-search justify-content-center align-self-center" width="30" ></i>
    <input type="text" placeholder="Search.." id="myInput" class="input-field" onkeyup="myFunction()" onkeypress="return event.keyCode!=13">
  </form>
</div><br><br><br><br>

<div class="container" id="data-hadits">
<?php
        $i = 0;
        foreach ($api as $value){
    ?>
        <center style="background: black; color:white; height:3.5vh; width:3.5vh;" class="numbering">
            <p><?php echo $value['number'] ?></p>
        </center>
        <br><br>
        <h3 class="arabic-text" align="right" style="font-family: 'Scheherazade', serif;"><?php echo $value['arab'] ?></h3>
        <br>
        <div style="text-align: justify;">
            <p class="normal-text">"<?php echo $value['id'] ?>"</p>
        </div>
<br>
<hr>
<br>
    <?php
        $i += 1;
    }
    ?>
</div>

<br>
<br>
<br>
<br>
    
</div>
<?php

include('footer.php');
?>

<script>
function myFunction() {
    var input, filter, container, div, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    container = document.getElementById("data-hadits");
    div = container.getElementsByTagName("center");
    for (i = 0; i < div.length; i++) {
        a = div[i].getElementsByTagName("p")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            div[i].style.display = "";
        } else {
            div[i].style.display = "none";
        }
    }
}
</script>

</body>
</html>