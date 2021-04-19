<!DOCTYPE html>
<html>
<head>
  <title>Do'a - Do'a</title>
  <style type="text/css" href="style.css"></style>
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
                    <h1 class="display-4">DO'A - DO'A</h1>
                </center>
            </div>
        </div>
    </div>
</class>

<div class="container">
  <form class="example" action="/action_page.php" style="margin:auto;max-width:900px">
    <input type="text" placeholder="Search.." name="search2">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
</div>
    
</div>

<br>
<br>

<!-- <div class="container">
  <div class="row">
    <div class="column1">
      <button class="button" id="myBtn">Doa Sebelum Makan</button>
    </div>
    <div class="column2">
      <button class="button" id="myBtn1">Doa Sesudah Makan</button>
    </div>
    <div class="column1">
      <button class="button" id="myBtn2">Doa Ketika Lupa Membaca Doa Sebelum Makan</button>
    </div>
    <div class="column2">
      <button class="button" id="myBtn3">Doa Sebelum Tidur</button>
    </div>
    <div class="column1">
      <button class="button" id="myBtn4">Doa Ketika Mendapat Mimpi Buruk</button>
    </div>
    <div class="column2">
      <button class="button" id="myBtn5">Doa Ketika Mendapat Mimpi Baik</button>
    </div>
    <div class="column1">
      <button class="button" id="myBtn6">Doa Masuk Kamar Mandi</button>
    </div>
    <div class="column2">
      <button class="button" id="myBtn7">Doa Keluar Kamar Mandi</button>
    </div>
    <div class="column1">
      <button class="button" id="myBtn8">Doa Memohon Ilmu Yang Bermanfaat</button>
    </div>
    <div class="column2">
      <button class="button" id="myBtn9">Doa Sebelum Belajar</button>
    </div>
  </div>
</div> -->

<div class="row doa-row-main">
    <div class="col-lg-5 col-sm-1 col-md-5 doa-box pointer" data-toggle="modal" data-target="#myModal">
      <h4 class="name-doa"><b>Doa Sebelum Makan</b></h4>
    </div>
    <div class="col-lg-5 col-sm-1 col-md-5 doa-box pointer" data-toggle="modal" data-target="#myModal">
        <h4 class="name-doa"><b>Doa Sesudah Makan</b></h4>
    </div>
    <div class="col-lg-5 col-sm-1 col-md-5 doa-box pointer" data-toggle="modal" data-target="#myModal">
        <h4 class="name-doa"><b>Doa Ketika Lupa Membaca Doa Sebelum Makan</b></h4>
    </div>
    <div class="col-lg-5 col-sm-1 col-md-5 doa-box pointer" data-toggle="modal" data-target="#myModal">
        <h4 class="name-doa"><b>Doa Sebelum Tidur</b></h4>
    </div>
    <div class="col-lg-5 col-sm-1 col-md-5 doa-box pointer" data-toggle="modal" data-target="#myModal">
        <h4 class="name-doa"><b>Doa Ketika Mendapat Mimpi Buruk</b></h4>
    </div>
    <div class="col-lg-5 col-sm-1 col-md-5 doa-box pointer" data-toggle="modal" data-target="#myModal">
        <h4 class="name-doa"><b>Doa Ketika Mendapat Mimpi Baik</b></h4>
    </div>
    <div class="col-lg-5 col-sm-1 col-md-5 doa-box pointer" data-toggle="modal" data-target="#myModal">
        <h4 class="name-doa"><b>Doa Masuk Kamar Mandi</b></h4>
    </div>
    <div class="col-lg-5 col-sm-1 col-md-5 doa-box pointer" data-toggle="modal" data-target="#myModal">
        <h4 class="name-doa"><b>Doa Memohon Ilmu Yang Bermanfaat</b></h4>
    </div>
    <div class="col-lg-5 col-sm-1 col-md-5 doa-box pointer" data-toggle="modal" data-target="#myModal">
        <h4 class="name-doa"><b>Doa Sebelum Belajar</b></h4>
    </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">DO'A SEBELUM MAKAN</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <p align="right">اَللّٰهُمَّ بَارِكْ لَنَا فِيْمَا رَزَقْتَنَا وَقِنَا عَذَابَ النَّارِ</p>
        <p><i>Alloohumma barik lanaa fiimaa razatanaa waqinaa 'adzaa bannar</i></p>
        <p>"Ya Allah, berkahilah kami dalam rezeki yang telah Engkau berikan kepada kami dan peliharalah kami dari siksa api neraka"</p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
</div>

<!-- <div class="container">
  <-- The Modal --
  <div id="myModal" class="modal">

    !-- Modal content --
    <div class="modal-content">
      <span class="close">&times;</span>
      <div style="padding: 6em;">
        <p align="center"><b>JUDUL DOA</b></p>
        <h1 align="right">اَللّٰهُمَّ بَارِكْ لَنَا فِيْمَا رَزَقْتَنَا وَقِنَا عَذَابَ النَّارِ</h1>
        <p><i>Alloohumma barik lanaa fiimaa razatanaa waqinaa 'adzaa bannar</i></p>
        <p>"Ya Allah, berkahilah kami dalam rezeki yang telah Engkau berikan kepada kami dan peliharalah kami dari siksa api neraka"</p>
      </div>
    </div>

  </div>
</div> -->

<br>
<br>

<?php

include('footer.php');
?>


<!-- <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");
var btn5 = document.getElementById("myBtn5");
var btn6 = document.getElementById("myBtn6");
var btn7 = document.getElementById("myBtn7");
var btn8 = document.getElementById("myBtn8");
var btn9 = document.getElementById("myBtn9");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

btn1.onclick = function() {
  modal.style.display = "block";
}

btn2.onclick = function() {
  modal.style.display = "block";
}

btn3.onclick = function() {
  modal.style.display = "block";
}

btn4.onclick = function() {
  modal.style.display = "block";
}

btn5.onclick = function() {
  modal.style.display = "block";
}

btn6.onclick = function() {
  modal.style.display = "block";
}

btn7.onclick = function() {
  modal.style.display = "block";
}

btn8.onclick = function() {
  modal.style.display = "block";
}

btn9.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script> -->

</body>
</html>