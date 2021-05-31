<!DOCTYPE html>
<html>
<head>
  <title>Al-Qur'an</title>
  <style type="text/css" href="style.css"></style>
</head>
<body>

<?php
 include('header.php');
 include "quran_back.php";
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
  <i class="fa fa-search icon" width="30" ></i>
  <input type="text" placeholder="Search.." name="search" id="myInput" class="input-field" onkeyup="myFunction()" action="/action_page.php">
  </form>
</div>
</div><br><br>

<div class="row quran-row-main" id="data-surah">
    <?php
        $i = 0;
            foreach ($api as $value){
            ?>
            <div class="col-lg-3 col-sm-1 col-md-5 quran-box" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">
                <p><?=$value['number_of_surah']?></p>
                <p class="name-surah"><b><?=$value['name']?> (<?=$value['number_of_ayah']?> ayat)</b></p>
                <p class="arti-surah"><?=$value['name_translations']['id']?></p>
            </div>
            
            <?php
            $i += 1;
        }
    ?>
</div>
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