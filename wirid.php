<!DOCTYPE html>
<html>
<head>
  <title>Wirid & Tahlil</title>
  <style type="text/css" href="style.css"></style>
  <link href="https://fonts.googleapis.com/css2?family=Scheherazade:wght@700&display=swap" rel="stylesheet">
  <link rel="icon" href="images/LOGO.png">
</head>
<body>

<?php
 include('header.php');

 //API Wirid
 $json_wirid_url = "https://islamic-api-indonesia.herokuapp.com/api/data/json/wirid";
 $json_wirid = file_get_contents($json_wirid_url);
 $data_wirid = json_decode($json_wirid);


 // API Tahlil
 $json_tahlil_url = "https://islamic-api-indonesia.herokuapp.com/api/data/json/tahlil";
 $json_tahlil = file_get_contents($json_tahlil_url);
 $data_tahlil = json_decode($json_tahlil);
?>

<div class="main-content" id="<?php echo empty($_GET['page'])?'pageContent':''; ?>">

<class class="d-flex vh-100">
    <div class="d-flex w-100 justify-content-center align-self-center">
        <div class="jumbotron jumbotron-fluid bg-white">
            <div class="container">
                <center>
                    <h1 class="display-4">WIRID & TAHLIL</h1>
                </center>
            </div>
        </div>
    </div>
</class><br><br>


<div class="row doa-row-main" id="data-doa">
  <div class="col-lg-5 col-sm-1 col-md-5 doa-box pointer" data-toggle="modal" data-target="#modal-wirid">
      <h4 class="name-doa"><b>Wirid</b></h4>
  </div>

  <div class="col-lg-5 col-sm-1 col-md-5 doa-box pointer" data-toggle="modal" data-target="#modal-tahlil">
      <h4 class="name-doa"><b>Tahlil</b></h4>
  </div>
</div> <br><br>
    



<!-- The Modals -->
<div class="modal fade" id="modal-wirid" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      
      <?php
          $i = 0;
          foreach ($data_wirid->result->data as $mydata){
      ?>
        <!-- Modal Header -->
        <div class="modal-header">
          <!-- <h4 class="modal-title"></h4> -->
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h2 align="right" style="font-family: 'Scheherazade', serif;"><b?><?php echo $mydata->arabic;?></b></h2>
          <h2 align="right" style="font-family: 'Scheherazade', serif;"><b><?php echo $mydata->times."X";?></b></h2>
          <p style="text-transform:capitalize;"><?php echo $mydata->tnc;?></p>
          <hr>
        </div><br><br>

      <?php
        $i += 1;
        }
      ?>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

    </div>
  </div>
</div>



<div class="modal fade" id="modal-tahlil" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      
      <?php
          $i = 0;
          foreach ($data_tahlil->result->data as $mydata){
      ?>
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><?php echo $mydata->title;?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h2 align="right" style="font-family: 'Scheherazade', serif;"><?php echo $mydata->arabic;?></b></h2><br>
          <p><?php echo $mydata->translation;?></p>
        </div><br><br>

      <?php
        $i += 1;
        }
      ?>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

    </div>
  </div>
</div>


</div>
<?php

include('footer.php');
?>


</body>
</html>