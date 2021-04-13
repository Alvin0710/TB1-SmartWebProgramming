<!DOCTYPE html>
<html>
<head>
  <title>Al-Qur'an</title>
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
                    <h1 class="display-4">AL-QUR'AN</h1>
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
</div><br><br>

<div class="row quran-row-main">
    <a href="" class="col-lg-3 col-sm-1 col-md-5 quran-box">
        <p class="name-surah"><b>1. Al-Fatihah (7)</b></p>
        <p class="arti-surah">Pembukaan</p>
    </a>
    <a href="" class="col-lg-3 col-sm-1 col-md-5 quran-box">
        <p class="name-surah"><b>2. Al-Baqarah (286)</b></p>
        <p class="arti-surah">Sapi Betina</p>
    </a>
    <a href="" class="col-lg-3 col-sm-1 col-md-5 quran-box">
        <p class="name-surah"><b>3. Ali 'Imran (200)</b></p>
        <p class="arti-surah">Keluarga Imran</p>
    </a>
    <a href="" class="col-lg-3 col-sm-1 col-md-5 quran-box">
        <p class="name-surah"><b>4. An-Nisa (176)</b></p>
        <p class="arti-surah">Wanita</p>
    </a>
    <a href="" class="col-lg-3 col-sm-1 col-md-5 quran-box">
        <p class="name-surah"><b>5. Al-Maidah (120)</b></p>
        <p class="arti-surah">Hidangan</p>
    </a>
    <a href="" class="col-lg-3 col-sm-1 col-md-5 quran-box">
        <p class="name-surah"><b>6. Al-An'am (165)</b></p>
        <p class="arti-surah">Binatang Ternak</p>
    </a>
    <a href="" class="col-lg-3 col-sm-1 col-md-5 quran-box">
        <p class="name-surah"><b>7. Al-A'raf (206)</b></p>
        <p class="arti-surah">Tempat yang Tinggi</p>
    </a>

</div>
    
</div>

<br>
<br>
</div>
<?php

include('footer.php');
?>


</body>
</html>