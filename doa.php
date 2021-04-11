<!DOCTYPE html>
<html>
<head>
  <title>Change URL without reloading page using ajax & PHP</title>
  <style type="text/css" href="style.css"></style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<hr class="dashed">

<form class="example" action="/action_page.php" style="margin:auto;max-width:900px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
    
</div>
<?php

include('footer.php');
?>


</body>
</html>