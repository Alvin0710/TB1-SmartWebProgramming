<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muslimorphosis</title>
    <link href="bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
    if(empty($_GET['page'])){
?>
    <nav class="navbar navbar-light bg-white fixed-top mr-auto" id="myNavBar">
        <a href="index.php"><img src="images/LOGO.png" alt="" id="logo" width="60" height="60" class="d-inline-block align-top"></a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse"
            data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" onclick="openNav()"></span>
        </button>
        
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php" class="menu-item">HOME</a>
            <a class="menu-item" href="quran.php">AL-QUR'AN</a>
            <a class="menu-item" href="doa.php">DO'A - DO'A</a>
            <a class="menu-item" href="kisah.php">KISAH NABI DAN RASUL</a>
            <a class="menu-item" href="jadwal.php">JADWAL SHOLAT</a>
            <a class="menu-item" href="ceramah.php">CERAMAH</a>
            <a class="menu-item" href="tebak.php">TEBAK AYAT AL-QUR'AN</a>
            <a class="menu-item" href="about.php">ABOUT US</a>
        </div>
    </nav>


<?php    
    }
?>