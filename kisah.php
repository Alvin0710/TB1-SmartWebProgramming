<!DOCTYPE html>
<html>
<head>
  <title>Kisah - Kisah Nabi & Rasul</title>
  <style type="text/css" href="css/style.css"></style>
  <link rel="icon" href="images/LOGO.png">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Scheherazade:wght@700&display=swap" rel="stylesheet">
</head>
<body>

<?php
 include('header.php');
 $json = file_get_contents("json/kisahnabi.json");
 $api = json_decode($json, TRUE);
?>

<div class="main-content" id="<?php echo empty($_GET['page'])?'pageContent':''; ?>">

<class class="d-flex vh-100">
    <div class="d-flex w-100 justify-content-center align-self-center">
        <div class="jumbotron jumbotron-fluid bg-white">
            <div class="container">
                <center>
                    <h1 class="display-4">KISAH NABI & RASUL</h1>
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

</div>

<br>
<br>

<div class="row doa-row-main" id="data-kisah">
<?php
      $i = 0;
    	foreach ($api as $value){
        ?>
        <div class="col-lg-5 col-sm-1 col-md-5 doa-box pointer" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">
            <h4 class="name-doa"><b><?=$value['name']?></b></h4>
        </div>
        
        <?php
        $i += 1;
      }
  ?>
</div>

<!-- The Modal -->
<div class="container">
<?php
      $i = 0;
    	foreach ($api as $value){
        ?>
        <div class="modal fade" id="myModal<?php echo $i; ?>" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <p class="header-title"><?php echo $api[$i]['name'];?></p>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <img style="width: 100%;" src="<?php echo $api[$i]['image_url'];?>" alt=""><br><br>
        <p id="desc" class="normal-text"><?php echo $api[$i]['description'];?></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
</div>
        
        <?php
        $i += 1;
      }
  ?>
</div>

<br>
<br>

<?php

include('footer.php');
?>

<script>
function myFunction() {
    var input, filter, container, div, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    container = document.getElementById("data-kisah");
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