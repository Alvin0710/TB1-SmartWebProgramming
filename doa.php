<!DOCTYPE html>
<html>
<head>
  <title>Change URL without reloading page using ajax & PHP</title>
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

<form class="example" action="/action_page.php" style="margin:auto;max-width:900px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
    
</div>

<br>
<br>

<div class="row">
  <div class="column1">
    <button class="button">Doa Sebelum Makan</button>
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

<br>
<br>

<?php

include('footer.php');
?>


</body>
</html>