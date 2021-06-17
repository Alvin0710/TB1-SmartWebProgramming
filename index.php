<!-- <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head> -->
<?php

include('header.php');
?>

<!-- <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Quote of The Day</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
				<p>Subscribe to our mailing list to get the latest updates straight in your inbox.</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div> -->

<div class="main-content" id="<?php echo empty($_GET['page'])?'pageContent':''; ?>">

<div class="main-row">
    <div class="row">
        <a href="quran.php" class="col-lg-4 col-sm-2 col-md-6 col" style="background-color: white;">
            <div>
            <center><img src="images/quran.png" alt="" class="image-menu"></center>
                <h3 class="main-title">AL-QUR'AN</h3>
            </div>
        </a>
        <a href="doa.php" class="col-lg-4 col-sm-2 col-md-6 col" style="background-color: #f2f2f280">
            <div>
            <center><img src="images/doa.png" alt="" class="image-menu"></center>
                <h3 class="main-title">
                    DO'A <br>
                    - DO'A
                </h3>
            </div>
        </a>
        <a href="kisah.php" class="col-lg-4 col-sm-2 col-md-6 col" style="background-color: #e6e6e67c;">
            <div>
            <center><img src="images/kisah.png" alt="" class="image-menu"></center>
                <h3 class="main-title">
                    KISAH NABI <br>
                    & RASUL
                </h3>
            </div>
        </a>
         <a href="hadits.php" class="col-lg-4 col-sm-2 col-md-6 col" style="background-color: #cccccc7e">
            <div>
            <center><img src="images/hadits.png" alt="" class="image-menu"></center>
                <h3 class="main-title">
                    HADITS <br>
                    - HADITS
                </h3>
            </div>
        </a>

        <a href="ceramah.php" class="col-lg-4 col-sm-2 col-md-6 col" style="background-color: #b3b3b37a;">
            <div>
            <center><img src="images/ceramah.png" alt="" class="image-menu"></center>
                <h3 class="main-title">
                    CERAMAH
                </h3>
            </div>
        </a>

        <a href="wirid.php" class="col-lg-4 col-sm-2 col-md-6 col" style="background-color: #9999997c;">
            <div>
            <center><img src="images/wirid.png" alt="" class="image-menu"></center>
                <h3 class="main-title">
                    WIRID <br>
                    & TAHLIL
                </h3>
            </div>
        </a>
    </div>
</div>
    
</div>

<div id="pageContent">
   
</div>
<?php

include('footer.php');
?>
