<!DOCTYPE html>
<html>
<head>
  <title>About Us</title>
  <style type="text/css" href="style.css"></style>
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
                <p class="pt-3 text-center text-dark" data-aos="zoom-in"><b class="font-weight-bold">Muhammad Fauzi Maulana</b><br>
                    University Student</p>
            </div>
            <div class="col-sm my-5">
                <div class="container-team mx-auto d-block bg-dark" data-aos="zoom-out" style="background-image: url('images/alvin.jpg');background-size: cover;">
                </div>
                <p class="pt-3 text-center text-dark" data-aos="zoom-in"><b class="font-weight-bold">Alvin Irwanto</b><br>
                    University Student</p>
            </div>
            <div class="col-sm my-5">
                <div class="container-team mx-auto d-block bg-dark" data-aos="fade-left" style="background-image: url('images/fajar.jpg');background-size: cover;"></div>
                <p class="pt-3 text-center text-dark" data-aos="zoom-in"><b class="font-weight-bold">Fajar Bhaskoro Catur S.</b><br>
                    University Student</p>
            </div>
        </div>
    </div>
    
</div>
<?php

include('footer.php');
?>


</body>
</html>