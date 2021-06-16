<!DOCTYPE html>
<html>
<head>
  <title>Al-Qur'an</title>
  <style type="text/css" href="style.css"></style>
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
  <form class="example" action="/action_page.php" style="margin:auto;max-width:900px">
  <i class="fa fa-search icon-search" width="30" ></i>
  <input type="text" placeholder="Search.." name="search" id="myInput" class="input-field" onkeyup="myFunction()" action="/action_page.php">
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
                <p class="name-surah"><b><?php echo $mydata->name->transliteration->id."  "?></b>(<?php echo $mydata->name->short;?>)</p>
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
                <h4 class="modal-title"><?php echo $value['name']['transliteration']['id']?></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                    
                    <?php
                        $y = 0;
                        foreach ($value['verses'] as $val){  
                    ?>
                            <!-- Modal body -->
                            <div class="modal-body">
                            <div style="background: black; color:white; height:3.5vh; width:3.5vh;">
                            <center><p><?php echo $val['number']['inSurah'] ?></p></center>
                            </div>
                            <h2 align="right" style="font-family: 'Scheherazade', serif;"><?php echo $val['text']['arab']?></b></h2><br><br>
                            <p><i><?php echo $val['text']['transliteration']['en']?></i></p>
                            <p><?php echo $val['translation']['id']?></p>
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
        a = div[i].getElementsByTagName("h4")[0];
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