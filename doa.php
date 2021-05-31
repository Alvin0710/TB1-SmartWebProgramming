<!DOCTYPE html>
<html>
<head>
  <title>Do'a - Do'a</title>
  <style type="text/css" href="style.css"></style>
</head>
<body>

<!-- API -->
<?php
 include('header.php');
	$data = file_get_contents("data/doaharian.json");
	$data = json_decode($data);
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

<div class="container">
  <form class="example" action="/action_page.php" style="margin:auto;max-width:900px">
    <input type="text" placeholder="Search.." name="search2">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
</div>
    
</div>

<br>
<br>

<div class="row doa-row-main">
  <?php
      $i = 0;
    	foreach ($data as $value){
        ?>
        <div class="col-lg-5 col-sm-1 col-md-5 doa-box pointer" data-toggle="modal" data-target="#myModal">
            <h4 class="name-doa"><b><?=$value->title?></b></h4>
          </div>
        
        <?php
        $i += 1;
      }
  ?>
</div>


<?php
  	$json = file_get_contents("data/doaharian.json");
    $data = json_decode($json);
?>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><?php echo $data[0]->title;?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <p align="right"><?php echo $data[0]->arabic;?></p>
        <p><i><?php echo $data[0]->latin;?></i></p>
        <p><?php echo $data[0]->translation;?></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
</div>

<br>
<br>

<?php

include('footer.php');
?>

</body>
</html>