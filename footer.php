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
    document.getElementById("myNavBar").style.top = "-50px";
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
                <div class="col-lg-4 col-sm-2 col-md-6">
                <img src="images/asterisk.svg" alt="" id="logo-footer" width="30" height="30" class="d-inline-block align-top">
                <h5><b>Islam is Love</b></h5>
                <p style="color: rgba(255, 255, 255, 0.500);">© 2021 Copyright by Inslamorphosis. <br> All Rights Reserved.</p>
                </div>

                <!-- Grid column -->
                <div class="col-lg-4 col-sm-2 col-md-6">
                    <!-- Links -->
                    <h5 class="text-uppercase">CONTACT US</h5><br><br>
                    <ul class="list-unstyled">
                        <div class="row">
                        <img src="images/envelope.svg" class="icon-footer" width="23" height="23" alt="">
                        <a class="link-footer" href=""><p>muslimorphosis@gmail.com</p></a>
                        </div>

                        <div class="row">
                        <img src="images/phone-alt.svg" class="icon-footer" width="20" height="20" alt="">
                        <a class="link-footer" href=""><p>+62 821 2121 0808</p></a>
                        </div>
                    </ul>
                </div>

                <div class="col-lg-4 col-sm-2 col-md-6">
                    <!-- Links -->
                    <div class="row">
                        <a href=""><div class="bg-icon"><img src="images/instagram.svg" class="icon-footer-s" width="25" height="25" alt=""></div></a>
                        <a href=""><div class="bg-icon"><img src="images/facebook.svg" class="icon-footer-s" width="25" height="25" alt=""></div></a>
                        <a href=""><div class="bg-icon"><img src="images/twitter.svg" class="icon-footer-s" width="25" height="25" alt=""></div></a>
                        <a href=""><div class="bg-icon"><img src="images/whatsapp.svg" class="icon-footer-s" width="25" height="25" alt=""></div></a>
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