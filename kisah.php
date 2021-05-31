<!DOCTYPE html>
<html>
<head>
  <title>Kisah Nabi & Rasul</title>
  <style type="text/css" href="style.css"></style>
</head>
<body>

<?php
 include('header.php');
 include "kisah_back.php";
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

<div class="container">
  <form class="example" action="/action_page.php" style="margin:auto;max-width:900px">
  <input type="text" placeholder="Search.." name="search" id="myInput" class="input-field" onkeyup="myFunction()" action="/action_page.php">
    <button type="submit"><i class="fa fa-search"></i></button>
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
        <div class="modal fade" id="myModal<?php echo $i; ?>">
      <div class="modal-dialog modal-xl">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><?php echo $api[$i]['name'];?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <p id="desc"><?php echo $api[$i]['description'];?></p>
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