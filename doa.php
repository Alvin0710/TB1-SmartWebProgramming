<!DOCTYPE html>
<html>
<head>
  <title>Do'a - Do'a</title>
  <style type="text/css" href="style.css"></style>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Scheherazade:wght@700&display=swap" rel="stylesheet">
</head>
<body>

<!-- API -->
<?php
 include('header.php');
 $json_url = "https://islamic-api-zhirrr.vercel.app/api/doaharian";
 $json = file_get_contents($json_url);
 $data = json_decode($json);
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

<div class="container input-icons">
  <i class="fa fa-search icon-search" width="30" ></i>
  <!-- <img src="images/icon/search.svg" alt="" width="20" height="20"> -->
  <form class="example">
    <input type="text" placeholder="Search.." id="myInput" class="input-field" onkeyup="myFunction()">
  </form>
</div>
    
</div>

<br>
<br>

<div class="row doa-row-main" id="data-doa">
  <?php
      $i = 0;
    	foreach ($data->data as $mydata){
        ?>
        <div class="col-lg-5 col-sm-1 col-md-5 doa-box pointer" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">
            <h4 class="name-doa"><b><?=$mydata->title?></b></h4>
        </div>
        
        <?php
        $i += 1;
      }
  ?>
</div>



<!-- The Modal -->
<div class="container">
<?php
      $i = 0;
    	foreach ($data->data as $mydata){
        ?>
        <div class="modal fade" id="myModal<?php echo $i; ?>">
      <div class="modal-dialog modal-xl">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><?php echo $data->data[$i]->title;?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <h2 align="right" style="font-family: 'Scheherazade', serif;"><?php echo $data->data[$i]->arabic;?></b></h2><br><br>
        <p><i><?php echo $data->data[$i]->latin;?></i></p>
        <p><?php echo $data->data[$i]->translation;?></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
</div>
        
        <?php
        $i += 1;
      }
  ?>
</div>

<br>
<br>

<?php

include('footer.php');
?>

<script>
function myFunction() {
    var input, filter, container, div, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    container = document.getElementById("data-doa");
    div = container.getElementsByTagName("div");
    for (i = 0; i < div.length; i++) {
        a = div[i].getElementsByTagName("h4")[0];
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