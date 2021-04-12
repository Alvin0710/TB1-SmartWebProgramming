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


<div class="container">
  <div class="row">
    <div class="column1">
      <button class="button" id="myBtn">Doa Sebelum Makan</button>
    </div>
    <div class="column2">
      <button class="button">Doa Sesudah Makan</button>
    </div>
  </div>
  <div class="row">
    <div class="column1">
      <button class="button">Doa Ketika Lupa Membaca Doa Sebelum Makan</button>
    </div>
    <div class="column2">
      <button class="button">Doa Sebelum Tidur</button>
    </div>
  </div>
  <div class="row">
    <div class="column1">
      <button class="button">Doa Ketika Mendapat Mimpi Buruk</button>
    </div>
    <div class="column2">
      <button class="button">Doa Ketika Mendapat Mimpi Baik</button>
    </div>
  </div>
  <div class="row">
    <div class="column1">
      <button class="button">Doa Masuk Kamar Mandi</button>
    </div>
    <div class="column2">
      <button class="button">Doa Keluar Kamar Mandi</button>
    </div>
  </div>
  <div class="row">
    <div class="column1">
      <button class="button">Doa Memohon Ilmu Yang Bermanfaat</button>
    </div>
    <div class="column2">
      <button class="button">Doa Sebelum Belajar</button>
    </div>
  </div>
</div>


<div class="container">
  <!-- The Modal -->
  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <p align="center"><b>DOA SEBELUM MAKAN</b></p>
      <p>sadjhsjfkbskagfaksbdhks</p>
      <p>sadjhsjfkbskagfaksbdhk</p>
    </div>

  </div>
</div>

<br>
<br>

<?php

include('footer.php');
?>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
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
</script>

</body>
</html>