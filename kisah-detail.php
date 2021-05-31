<!DOCTYPE html>
<html>
<head>
  <title>Kisah Nabi</title>
  <style type="text/css" href="style.css"></style>
</head>
<body>

<?php

 include('header.php');
 include "kisah_back.php";
?>

<div style="padding: 8em;">
    <div style="text-align: center;">
        <h1><?php echo $name ?></h1>
        <br>
        <img src="images/dummy.jpg">
    </div>
    <br>
    <br>
    <div style="text-align: justify;">
        <p><?php echo $kisah ?></p>
    </div>
</div>
    
</div>
<?php

include('footer.php');
?>


</body>
</html>