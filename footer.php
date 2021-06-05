<script src="js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "20em";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

<script>
    /* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("myNavBar").style.top = "0";
  } else {
    document.getElementById("myNavBar").style.top = "-70px";
  }
  prevScrollpos = currentScrollPos;
}
</script>

<?php
    if(empty($_GET['page'])) {
?>


<!-- Footer -->
<footer class="page-footer font-small pt-4 bg-dark text-white">
        <!-- Footer Links -->
        <div class="text-center text-md-left">
            <!-- Grid row -->
            <div class="row" id="footer-text">
                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-lg-3 col-sm-2 col-md-6">
                <img src="images/LOGO.png" alt="" id="logo-footer" width="70" height="70" class="d-inline-block align-top">
                <h5><b>Islam is Love</b></h5>
                <p style="color: rgba(255, 255, 255, 0.500);">© 2021 Copyright by Muslimorphosis. <br> All Rights Reserved.</p>
                </div>

                <!-- Grid column -->
                <div class="col-lg-3 col-sm-2 col-md-6">
                    <!-- Links -->
                    <h5 class="text-uppercase">CONTACT US</h5><br><br>
                    <ul class="list-unstyled">
                        <div class="row">
                        <img src="images/envelope.svg" class="icon-footer" width="23" height="23" alt="">
                        <a class="link-footer" href=""><p>contact@muslimorphosis.litecloud.id</p></a>
                        </div>

                        <div class="row">
                        <img src="images/phone-alt.svg" class="icon-footer" width="20" height="20" alt="">
                        <a class="link-footer" href=""><p>+62 838 7829 9837</p></a>
                        </div>
                    </ul>
                </div>

                <div class="col-lg-3 col-sm-2 col-md-6">
                    <!-- Links -->
                    <div class="row">
                        <a href=""><div class="bg-icon"><img src="images/instagram.svg" class="icon-footer-s" width="25" height="25" alt=""></div></a>
                        <a href=""><div class="bg-icon"><img src="images/facebook.svg" class="icon-footer-s" width="25" height="25" alt=""></div></a>
                        <a href=""><div class="bg-icon"><img src="images/twitter.svg" class="icon-footer-s" width="25" height="25" alt=""></div></a>
                        <a href=""><div class="bg-icon"><img src="images/whatsapp.svg" class="icon-footer-s" width="25" height="25" alt=""></div></a>
                    </div><br>
                    <!-- <p style="text-align: left;">
                          <iframe src="https://jam.jadwalsholat.org/digitalclock/" frameborder="0" style="overflow:hidden;border:0;margin:0;padding:0;width:250px;height:60px"></iframe>
                    </p> -->
                    <div id="clock"></div>
                </div>

                <div class="col-lg-3 col-sm-2 col-md-6">
                    <!-- Links -->
                    <div class="row">
                        <p style="text-align: center; font-size:20px; font-weight:500;">
                            JADWAL SHOLAT<br><br>
                           <iframe src="https://www.jadwalsholat.org/adzan/ajax.row.php?id=309" frameborder="0" style="overflow:hidden;border:0;margin:0;padding:0;width:250px;height:200px"></iframe><br>
                            <a class="btn btn-outline-light" data-toggle="modal" data-target="#modalJadwal">Perbesar</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Grid row -->
        </div>
        <!-- Copyright -->
        <!-- <div class="footer-copyright text-center text-white py-3 ">
            © 2021 Copyright by Inslamorphosis. All Rights Reserved.
        </div> -->
        <!-- The Modal -->
<div class="container">
        <div class="modal fade" id="modalJadwal">
      <div class="modal-dialog modal-xl">
      <div class="modal-content">
        
        <!-- Modal body -->
        <div class="modal-body">
        <p style="text-align: center;">
        <iframe src="https://www.jadwalsholat.org/adzan/monthly.php?id=309" frameborder="0" style="overflow:hidden;border:0;margin:0;padding:0;width:430px;height:800px"></iframe>
        </p>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
</div>
</div>

    </footer>

<?php
    }
?>

<script>
    function currentTime() {
  var date = new Date(); /* creating object of Date class */
  var hour = date.getHours();
  var min = date.getMinutes();
  var sec = date.getSeconds();
  hour = updateTime(hour);
  min = updateTime(min);
  sec = updateTime(sec);
  document.getElementById("clock").innerText = hour + " : " + min + " : " + sec; /* adding time to the div */
    var t = setTimeout(function(){ currentTime() }, 1000); /* setting timer */
}

function updateTime(k) {
  if (k < 10) {
    return "0" + k;
  }
  else {
    return k;
  }
}

currentTime(); /* calling currentTime() function to initiate the process */
</script>

</body>

</html>