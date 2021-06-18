<!DOCTYPE html>
<html>
<head>
  <title>Al-Qur'an</title>
  <style type="text/css" href="css/style.css"></style>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Scheherazade:wght@700&display=swap" rel="stylesheet">
  <link rel="icon" href="images/LOGO.png">
</head>
<body>

<?php
 include('header.php');
 $json = file_get_contents("json/quran.json");
 $data = json_decode($json);

?>

<div class="main-content" id="<?php echo empty($_GET['page'])?'pageContent':''; ?>">

<class class="d-flex vh-100">
    <div class="d-flex w-100 justify-content-center align-self-center">
        <div class="jumbotron jumbotron-fluid bg-white">
            <div class="container">
                <center>
                    <h1 class="display-4">AL-QUR'AN</h1>
                </center>
            </div>
        </div>
    </div>
</class>

<div class="container input-icons">
  <form class="example" style="margin:auto;max-width:900px">
    <i class="fa fa-search icon-search justify-content-center align-self-center" width="30" ></i>
    <input type="text" placeholder="Search.." id="myInput" class="input-field" onkeyup="myFunction()" onkeypress="return event.keyCode!=13">
  </form>
</div>
</div><br><br>

<div class="row quran-row-main" id="data-surah">
    <?php
        $i = 0;
            foreach ($data->result->data as $mydata){
            ?>
            <div class="col-lg-3 col-sm-1 col-md-5 quran-box" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">
                <p style="text-align:right;"><?php echo $mydata->number;?></p>
                <h6 class="name-surah"><b><?php echo $mydata->name->transliteration->id."  "?></b>(<?php echo $mydata->name->short;?>)</h6>
                <p class="arti-surah"><?php echo $mydata->name->translation->id;?></p>
                <p class="ayat-surah"><?php echo $mydata->numberOfVerses." Ayat";?></p>
            </div>
            <?php
            $i += 1;
        }
    ?>
</div>
</div>

<!-- The Modal -->
<div class="container">
    <?php
        $v = 0;
        $json = file_get_contents("json/quran.json");
        $api = json_decode($json, TRUE);
        foreach ($api['result']['data'] as $value){
    ?>
            <div class="modal fade" id="myModal<?php echo $v; ?>">
            <div class="modal-dialog modal-xl">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
            <p class="header-title"><?php echo $value['name']['transliteration']['id']."  "?>(<?php echo $value['name']['short']?>)</p><br><br>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                <?php
                    $y = 0;
                    $n = $value['number'];
                    if ($n == 1){
                       echo "";
                    } elseif ($n == 9){
                        echo "";
                    } else{
                       echo "<br><br><p class=\"arabic-text\" align=\"center\" style=\"font-family: \'Scheherazade\', serif;\">- بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ -</h2><br><br>";
                    }
                    foreach ($value['verses'] as $val){  
                ?>
                    <!-- Modal body -->
                    <div class="modal-body">
                    <div style="background: black; color:white; height:1.5em; width:1.5em;">
                        <center class="numbering"><p><?php echo $val['number']['inSurah'] ?></p></center>
                    </div><br>
                    <p class="arabic-text" align="right" style="font-family: 'Scheherazade', serif;"><?php echo $val['text']['arab']?></h2><br><br>
                    <p><i class="normal-text"><?php echo $val['text']['transliteration']['en']?></i></p>
                    <p class="normal-text"><?php echo $val['translation']['id']?></p>
                    </div>
                    <hr>
                <?php
                    $y += 1;
                    }
                ?>
                    
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                    
                </div>
                </div>
                </div>
                
    <?php
            $v += 1;
            }
    ?>
</div>
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
    container = document.getElementById("data-surah");
    div = container.getElementsByTagName("div");
    for (i = 0; i < div.length; i++) {
        a = div[i].getElementsByTagName("h6")[0];
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