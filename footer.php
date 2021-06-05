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
                        <a class="link-footer" href=""><p>contact@muslimorphosis.com</p></a>
                        </div>

                        <div class="row">
                        <img src="images/phone-alt.svg" class="icon-footer" width="20" height="20" alt="">
                        <a class="link-footer" href=""><p>+62 821 2121 0808</p></a>
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
                    </div>
                </div>

                <div class="col-lg-3 col-sm-2 col-md-6">
                    <!-- Links -->
                    <div class="row">
                    <p style="text-align: center;">
                        <b>Jadwal Sholat</b> <br><br>
                        <!-- <iframe scrolling="no" frameborder="no" clocktype="html5" style="overflow:hidden;border:0;margin:0;padding:0;width:380px;height:80px;text-align: center;"src="https://www.clocklink.com/html5embed.php?clock=047&timezone=Indonesia_Jakarta&color=green&size=200&Title=&Message=&Target=&From=2021,1,1,0,0,0&Color=green"></iframe> -->
                        <iframe src="https://jam.jadwalsholat.org/digitalclock/" frameborder="0" style="overflow:hidden;border:0;margin:0;padding:0;width:250px;height:60px"></iframe>
                        <iframe src="https://www.jadwalsholat.org/adzan/ajax.row.php?id=265" frameborder="0" style="overflow:hidden;border:0;margin:0;padding:0;width:200px;height:200px"></iframe>
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
    </footer>

<?php
    }
?>

</body>

</html>