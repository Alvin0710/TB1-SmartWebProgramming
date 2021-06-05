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
                    <h1 class="display-4">WIRID & TAHLIL</h1>
                </center>
            </div>
        </div>
    </div>
</class>

<center>
    <div class="col-3 tebak-box pointer" data-toggle="modal" data-target="#myModal">
      <h4 id="tebak-name"><b>Mulai Quiz</b></h4>
    </div>
</center>
    
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">QUIZ</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <p align="right">اَللّٰهُمَّ بَارِكْ لَنَا فِيْمَا رَزَقْتَنَا وَقِنَا عَذَابَ النَّارِ</p>
        <p><i>Alloohumma barik lanaa fiimaa razatanaa waqinaa 'adzaa bannar</i></p>
        <p>"Ya Allah, berkahilah kami dalam rezeki yang telah Engkau berikan kepada kami dan peliharalah kami dari siksa api neraka"</p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
</div>


</div>
<?php

include('footer.php');
?>


</body>
</html>