<!DOCTYPE html>
<html>
<head>
  <title>About Us</title>
  <style type="text/css" href="css/style.css"></style>
  <link rel="icon" href="images/LOGO.png">

  <style>
        section {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #text-title {
            margin-right: 10vw;
            margin-left: 10vw;
        }

        .team {
            margin-top: 5rem;
            margin-bottom: 7rem;
        }

        .container-team {
            height: 15rem;
            width: 15rem;
            background-color: red;
            border-radius: 10rem;
        }

        #title {
            margin-top: 8.5rem;
        }
    </style>
</head>
<body>

<?php
 include('header.php');
?>

<div class="main-content" id="<?php echo empty($_GET['page'])?'pageContent':''; ?>">

<div class="container" id="title">
        <h1 class="display-4 text-center font-weight-bold text-dark mt-5" data-aos="zoom-in">Meet Our Awesome Team</h1>
        <p class="info text-center" id="text-title" data-aos="fade-up">Below are the names of the members of our team who with their efforts can complete the making of this website with their respective sections.</p>
    </div>

    <div class="container team">
        <div class="row text-center pt-3">
            <div class="col-sm my-5">
                <div class="container-team mx-auto d-block bg-dark" data-aos="fade-right" style="background-image: url('images/fauzi.jpg');background-size: cover;">
                </div>
                <p class="pt-3 text-center text-dark" data-aos="zoom-in"><a href="https://www.instagram.com/fauzimaulana.id/" target="_blank"><b class="font-weight-bold">Muhammad Fauzi Maulana</a></b><br>
                    41518010003</p>
            </div>
            <div class="col-sm my-5">
                <div class="container-team mx-auto d-block bg-dark" data-aos="zoom-out" style="background-image: url('images/alvin.jpg');background-size: cover;">
                </div>
                <p class="pt-3 text-center text-dark" data-aos="zoom-in"><a href="https://www.instagram.com/alvinirwanto/" target="_blank"><b class="font-weight-bold">Alvin Irwanto</a></b><br>
                    41518010055</p>
            </div>
            <div class="col-sm my-5">
                <div class="container-team mx-auto d-block bg-dark" data-aos="fade-left" style="background-image: url('images/fajar.jpg');background-size: cover;"></div>
                <p class="pt-3 text-center text-dark" data-aos="zoom-in"><a href="https://www.instagram.com/fajarrcaturr/" target="_blank"><b class="font-weight-bold">Fajar Bhaskoro Catur S.</a></b><br>
                    41518010041</p>
            </div>
        </div>
    </div>

    <div class="container team">
        <p><b>DATA SOURCES FOR MUSLIMORPHOSIS</b></p>
        <p><b>AL - QUR'AN PAGE :</b> <a href="https://github.com/Zhirrr/islamic-rest-api-indonesian-v2" target="_blank">Islamic API V2 - Zhirrr</a></p>
        <p><b>Do'a - Do'a PAGE :</b> <a href="https://github.com/Zhirrr/islamic-rest-api-indonesian" target="_blank">Islamic Rest API Official</a></p>
        <p><b>Kisah Nabi & Rasul PAGE :</b> <a href="https://github.com/Zhirrr/islamic-rest-api-indonesian" target="_blank">Islamic Rest API Official</a></p>
        <p><b>Hadits - Hadits PAGE :</b> <a href="https://github.com/Zhirrr/islamic-rest-api-indonesian-v2" target="_blank">Islamic API V2 - Zhirrr</a></p>
        <p><b>Ceramah PAGE :</b> <a href="https://www.youtube.com" target="_blank">Youtube</a></p>
        <p><b>Wirid & Tahlil PAGE :</b> <a href="https://github.com/Zhirrr/islamic-rest-api-indonesian-v2" target="_blank">Islamic API V2 - Zhirrr</a></p>
        <p><b>Jadwal Sholat :</b> <a href="https://www.jadwalsholat.org" target="_blank">Jadwalsholat.org</a></p>
    </div>
    
</div>
<?php

include('footer.php');
?>


</body>
</html>