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
                    <h1 class="display-4">JADWAL SHOLAT</h1>
                </center>
            </div>
        </div>
    </div>
</class>

<div class="container">
<form class="example" action="/action_page.php" style="margin:auto;max-width:900px">
  <input type="text" placeholder="Tulis nama kotamu .." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form><br><br>
</div>
    
<div class="container">
<h1 style="text-align:center"><b>Kota Tangerang</b></h1>
<br><br>
<h3 style="text-align:center">April 2021</h3>
<br><br>

<div class="table-responsive">
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Tanggal</th>
      <th scope="col">Imsyak</th>
      <th scope="col">Shubuh</th>
      <th scope="col">Terbit</th>
      <th scope="col">Dhuha</th>
      <th scope="col">Dzuhur</th>
      <th scope="col">Ashr</th>
      <th scope="col">Maghrib</th>
      <th scope="col">Isya'</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>04:32</td>
      <td>04:42</td>
      <td>05:56</td>
      <td>06:20</td>
      <td>12:07</td>
      <td>15:12</td>
      <td>18:14</td>
      <td>19:24</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>04:32</td>
      <td>04:42</td>
      <td>05:56</td>
      <td>06:20</td>
      <td>12:07</td>
      <td>15:12</td>
      <td>18:14</td>
      <td>19:24</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>04:32</td>
      <td>04:42</td>
      <td>05:56</td>
      <td>06:20</td>
      <td>12:07</td>
      <td>15:12</td>
      <td>18:14</td>
      <td>19:24</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>04:32</td>
      <td>04:42</td>
      <td>05:56</td>
      <td>06:20</td>
      <td>12:07</td>
      <td>15:12</td>
      <td>18:14</td>
      <td>19:24</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>04:32</td>
      <td>04:42</td>
      <td>05:56</td>
      <td>06:20</td>
      <td>12:07</td>
      <td>15:12</td>
      <td>18:14</td>
      <td>19:24</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>04:32</td>
      <td>04:42</td>
      <td>05:56</td>
      <td>06:20</td>
      <td>12:07</td>
      <td>15:12</td>
      <td>18:14</td>
      <td>19:24</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>04:32</td>
      <td>04:42</td>
      <td>05:56</td>
      <td>06:20</td>
      <td>12:07</td>
      <td>15:12</td>
      <td>18:14</td>
      <td>19:24</td>
    </tr>

  </tbody>
</table>

</div>
<br><br>
</div>
</div>
<?php

include('footer.php');
?>


</body>
</html>