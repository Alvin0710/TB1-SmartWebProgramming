<!DOCTYPE html>
<html>
<head>
  <title>Ceramah</title>
  <style type="text/css" href="style.css"></style>
</head>
<body>

<?php
 include('header.php');
 include('back-api.php');
?>

<div class="main-content" id="<?php echo empty($_GET['page'])?'pageContent':''; ?>">

<class class="d-flex vh-100">
    <div class="d-flex w-100 justify-content-center align-self-center">
        <div class="jumbotron jumbotron-fluid bg-white">
            <div class="container">
                <center>
                    <h1 class="display-4">CERAMAH</h1>
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
<br><br>


<div class="row ceramah-row-main">
    <div class="col-lg-5 col-sm-2 col-md-6">
        <iframe src="https://www.youtube.com/embed/89XQC7ey8DU"></iframe>
    </div>

    <div class="col-lg-5 col-sm-2 col-md-6">
        <iframe src="https://www.youtube.com/embed/T5KbPoSFaME"></iframe>
    </div>
    
    <div class="col-lg-5 col-sm-2 col-md-6">
        <iframe src="https://www.youtube.com/embed/X3_eAId-XaM"></iframe>
    </div>

    <div class="col-lg-5 col-sm-2 col-md-6">
        <iframe src="https://www.youtube.com/embed/JOML0AGrTNU"></iframe>
    </div>
    </div>
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