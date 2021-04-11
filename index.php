<?php

include('header.php');
?>

<div class="main-content" id="<?php echo empty($_GET['page'])?'pageContent':''; ?>">

<div class="main-row">
    <div class="row">
        <a href="quran.php" class="col-lg-4 col-sm-2 col-md-6 col" style="background-color: white;">
            <div>
                <h3 class="main-title">AL-QUR'AN</h3>
            </div>
        </a>
        <a href="doa.php" class="col-lg-4 col-sm-2 col-md-6 col" style="background-color: #f2f2f280">
            <div>
                <h3 class="main-title">
                    DO'A <br>
                    - DO'A
                </h3>
            </div>
        </a>
        <a href="kisah.php" class="col-lg-4 col-sm-2 col-md-6 col" style="background-color: #e6e6e67c;">
            <div>
                <h3 class="main-title">
                    KISAH NABI <br>
                    & RASUL
                </h3>
            </div>
        </a>
         <a href="jadwal.php" class="col-lg-4 col-sm-2 col-md-6 col" style="background-color: #cccccc7e">
            <div>
                <h3 class="main-title">
                    JADWAL <br>
                    SHOLAT
                </h3>
            </div>
        </a>

        <a href="ceramah.php" class="col-lg-4 col-sm-2 col-md-6 col" style="background-color: #b3b3b37a;">
            <div>
                <h3 class="main-title">
                    CERAMAH
                </h3>
            </div>
        </a>

        <a href="tebak.php" class="col-lg-4 col-sm-2 col-md-6 col" style="background-color: #9999997c;">
            <div>
                <h3 class="main-title">
                    TEBAK AYAT <br>
                    AL-QUR'AN
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
