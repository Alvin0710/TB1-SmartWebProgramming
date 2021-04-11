<!DOCTYPE html>
<html>
<head>
  <title>Kisah Nabi & Rasul</title>
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
                    <h1 class="display-4">KISAH NABI & RASUL</h1>
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
    <button class="button">Nabi Adam AS</button>
  </div>
  <div class="column2">
    <button class="button">Nabi Idris AS</button>
  </div>
</div>
<div class="row">
  <div class="column1">
    <button class="button">Nabi Nuh AS</button>
  </div>
  <div class="column2">
    <button class="button">Nabi Hud AS</button>
  </div>
</div>
<div class="row">
  <div class="column1">
    <button class="button">Nabi Sholeh AS</button>
  </div>
  <div class="column2">
    <button class="button">Nabi Ibrahim AS</button>
  </div>
</div>
<div class="row">
  <div class="column1">
    <button class="button">Nabi Luth AS</button>
  </div>
  <div class="column2">
    <button class="button">Nabi Ismail AS</button>
  </div>
</div>
<div class="row">
  <div class="column1">
    <button class="button">Nabi Ishaq AS</button>
  </div>
  <div class="column2">
    <button class="button">Nabi Yakub AS</button>
  </div>
</div>

<br>
<br>

<?php

include('footer.php');
?>


</body>
</html>