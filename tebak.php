<!DOCTYPE html>
<html>
<head>
  <title>Tebak Ayat Al-Qur'an</title>
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
                    <h1 class="display-4">TEBAK AYAT AL-QUR'AN</h1>
                </center>
            </div>
        </div>
    </div>
</class>
    
</div>
<?php

include('footer.php');
?>


</body>
</html>