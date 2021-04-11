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

<?php
    if(empty($_GET['page'])) {
?>


<!-- Footer -->
<footer class="page-footer font-small pt-4 bg-dark text-white">
        <!-- Footer Links -->
        <div class="container text-center text-md-left">
            <!-- Grid row -->
            <div class="row">
                <hr class="clearfix w-100 d-md-none pb-3">
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase">Center Book Study</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" data-page="home.html">Home</a>
                        </li>
                        <li>
                            <a href="#!" data-page="new_book.html">New Book</a>
                        </li>
                        <li>
                            <a href="#!" data-page="news.html">News</a>
                        </li>
                        <li>
                            <a href="#!">Business</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase">Service and Application</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Download Application</a>
                        </li>
                        <li>
                            <a href="#!">Web Service</a>
                        </li>
                        <li>
                            <a href="#!">News</a>
                        </li>
                        <li>
                            <a href="#!">Relasion</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase">Follow Us</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Twitter</a>
                        </li>
                        <li>
                            <a href="#!">Instagram</a>
                        </li>
                        <li>
                            <a href="#!">Pinterest</a>
                        </li>
                        <li>
                            <a href="#!">Youtube</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Grid row -->
        </div>
        <!-- Copyright -->
        <div class="footer-copyright text-center text-white py-3 ">
            © 2021 Copyright
        </div>
    </footer>

<?php
    }
?>

</body>

</html>