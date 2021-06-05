<!DOCTYPE html>
<html>
<head>
  <title>Jadwal Sholat</title>
  <style type="text/css" href="style.css"></style>
</head>
<body>

<?php
 include('header.php');

 $json_url = "https://raw.githubusercontent.com/lakuapik/jadwalsholatorg/master/kota.json";
  $json = file_get_contents($json_url);
  $data = json_decode($json);
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

<!-- <form class="example" action="/action_page.php" style="margin:auto;max-width:900px">
  <input type="text" placeholder="Tulis nama kotamu .." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form><br><br><br> -->
<div class="container input-icons">
  <form class="example" action="/action_page.php" style="margin:auto;max-width:900px">
  <i class="fa fa-search icon" width="30" ></i>
  <input type="text" placeholder="Di Kota mana kamu tinggal?" name="search" id="myInput" class="input-field" onkeyup="myFunction()" action="/action_page.php">
  </form>
</div><br><br>

<div class="row quran-row-main" id="data-jadwal">
    <?php
        $i = 0;
            foreach ($data as $value){
            ?>
            <div class="col-lg-3 col-sm-1 col-md-5 quran-box" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">
                <p class="justify-content-center align-self-center">
                  <center>
                    <b style="text-transform: capitalize;" ><?=$value?></b>
                  </center>
                </p>
            </div>
            
            <?php
            $i += 1;
        }
    ?>
</div>
    
<!-- <div class="container">
<h1 style="text-align:center; text-transform: capitalize;">
  <b>
    Tangerang
  </b>
</h1>

<br><br>
<h3 style="text-align:center">Mei 2021</h3>
<br><br> -->

<!-- <p style="text-align: center;"><iframe src="https://www.jadwalsholat.org/adzan/monthly.php?id=265" height="940" width="430" frameborder="0"></iframe><a href="https://www.jadwalsholat.org" target="_blank"><img class="aligncenter" style="text-align: center;" alt="jadwal-sholat" src="https://www.jadwalsholat.org/wp-content/uploads/2013/09/jadwal-sholat.png" width="81" height="18" /></a></p> -->

<!-- <div class="table-responsive">
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
</table> -->

</div>
<br><br>
</div>
</div>
<?php

include('footer.php');
?>

<script>
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
</script>

</body>
</html>