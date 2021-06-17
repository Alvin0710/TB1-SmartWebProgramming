<!DOCTYPE html>
<html>
<head>
  <title>Hadist - Hadist</title>
  <style type="text/css" href="css/style.css"></style>
  <link rel="icon" href="images/LOGO.png">
</head>
<body>

<?php
 include('header.php');
?>

<div class="main-content" id="<?php echo empty($_GET['page'])?'pageContent':''; ?>">

  <class class="d-flex vh-100">
      <div class="d-flex w-100 justify-content-center align-self-center">
          <div class="jumbotron jumbotron-fluid bg-white">
              <div class="container">
                  <center>
                      <h1 class="display-4">HADITS - HADITS</h1>
                  </center>
              </div>
          </div>
      </div>
  </class>
<!-- <div class="container input-icons">
  <form class="example" action="/action_page.php" style="margin:auto;max-width:900px">
  <i class="fa fa-search icon" width="30" ></i>
  <input type="text" placeholder="Di Kota mana kamu tinggal?" name="search" id="myInput" class="input-field" onkeyup="myFunction()" action="/action_page.php">
  </form>
</div><br><br> -->
</div>

<?php

// session_start();

// $_SESSION['varname'] = "ahmad";

?>

<div class="row doa-row-main" id="data-doa">
  <a href="<?php echo "hadist-all.php?id=Abu Daud" ?>" class="col-lg-5 col-sm-1 col-md-5 doa-box pointer">
    <div>
      <h4 class="name-doa"><b>Riwayat Abu Daud</b></h4>
    </div>
  </a>
  <a href="<?php echo "hadist-all.php?id=Ahmad" ?>" class="col-lg-5 col-sm-1 col-md-5 doa-box pointer">
    <div>
      <h4 class="name-doa"><b>Riwayat Ahmad</b></h4>
    </div>
  </a>
  <a href="<?php echo "hadist-all.php?id=Bukhari" ?>" class="col-lg-5 col-sm-1 col-md-5 doa-box pointer">
    <div>
      <h4 class="name-doa"><b>Riwayat Bukhari</b></h4>
    </div>
  </a>
  <a href="<?php echo "hadist-all.php?id=Darimi" ?>" class="col-lg-5 col-sm-1 col-md-5 doa-box pointer">
    <div>
      <h4 class="name-doa"><b>Riwayat Darimi</b></h4>
    </div>
  </a>
  <a href="<?php echo "hadist-all.php?id=Ibnu Majah" ?>" class="col-lg-5 col-sm-1 col-md-5 doa-box pointer">
    <div>
      <h4 class="name-doa"><b>Riwayat Ibnu Majah</b></h4>
    </div>
  </a>
  <a href="<?php echo "hadist-all.php?id=Nasai" ?>" class="col-lg-5 col-sm-1 col-md-5 doa-box pointer">
    <div>
      <h4 class="name-doa"><b>Riwayat Nasai</b></h4>
    </div>
  </a>
  <a href="<?php echo "hadist-all.php?id=Malik" ?>" class="col-lg-5 col-sm-1 col-md-5 doa-box pointer">
    <div>
      <h4 class="name-doa"><b>Riwayat Malik</b></h4>
    </div>
  </a>
  <a href="<?php echo "hadist-all.php?id=Muslim" ?>" class="col-lg-5 col-sm-1 col-md-5 doa-box pointer">
    <div>
      <h4 class="name-doa"><b>Riwayat Muslim</b></h4>
    </div>
  </a>

</div>
</div>
<br><br>

<?php
  include('footer.php');
?>

<!-- <script>
function myFunction() {
    var input, filter, container, div, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    container = document.getElementById("data-jadwal");
    div = container.getElementsByTagName("div");
    for (i = 0; i < div.length; i++) {
        a = div[i].getElementsByTagName("b")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            div[i].style.display = "";
        } else {
            div[i].style.display = "none";
        }
    }
}
</script> -->

</body>
</html>