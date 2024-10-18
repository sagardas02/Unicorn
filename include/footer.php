<!-- start of wpo-site-footer-section -->
<footer class="wpo-site-footer">
    <div class="wpo-upper-footer">
        <div class="container">
            <div class="row">
                <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="widget about-widget">
                        <div class="widget-title">
                            <h3>About Us</h3>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt iure blanditiis
                            labore tempora inventore laborum error molestias,</p>
                        <div class="social-widget">
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                                <!-- <li><a href="#"><i class="ti-linkedin"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-2 col-md-6 col-sm-6 col-6">
                    <div class="widget link-widget">
                        <div class="widget-title">
                            <h3>Quick Links</h3>
                        </div>
                        <ul>
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="../others/about.php">About us</a></li>
                            <!-- <li><a href="#">Product</a></li> -->

                            <li><a href="../others/contact.php">Contact us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col col-lg-7 col-md-6 col-sm-6 col-6">
                    <div class="widget link-widget">
                        <div class="widget-title">
                            <h3>Products</h3>
                        </div>
                        <ul class="p-list">
                            <li><a href="../air-comp/air-comp.php">Air Compressor</a></li>
                            <li><a href="../ac-recov/ac-recov.php">AC Recovery and Recharge Unit</a></li>
                            <li><a href="../battery/battery.php">Battery Management</a></li>
                            <li><a href="../body-shop/body-shop.php">Body Shop Equipment</a></li>
                            <li><a href="../lift-equip/lift-equip.php">Lift Equipment</a></li>
                            <li><a href="../lube-e/lube-e.php">Lube Equipment</a></li>
                            <li><a href="../veh-serv/veh-serv.php">Vehicle Service Equipment</a></li>
                            <li><a href="../wash-equip/wash-equip.php">Wash Equipment</a></li>
                            <li><a href="../wheel-bal/wheel-bal.php">Wheel Balancer</a></li>
                            <li><a href="../wheel-serv/wheel-serv.php">Wheel Service Equipment</a></li>
                        </ul>
                    </div>
                </div>

                <!-- <div class="col col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="widget newsletter-widget">
                        <div class="widget-title">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="con-a">
                            <ul>
                                <li>
                                    <i class="fi ti-location-pin i-ex"></i>
                                    <p><a href="#!">Guwahati, Assam</a></p>
                                </li>
                                <li>
                                    <i class="fi flaticon-email"></i>
                                    <p><a href="mailto:info@example.com">info@example.com</a></p>
                                </li>
                                <li>
                                    <i class="fi flaticon-phone-call"></i>
                                    <p><a href="tel:9876543210">+91 9876543210</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="widget newsletter-widget">
                        <!-- <div class="widget-title">
                            <h3>Contact Us</h3>
                        </div> -->
                        <div class="con-a">
                            <ul>
                                <li>
                                    <i class="fi ti-location-pin i-ex"></i>
                                    <p><a href="#!">Guwahati, Assam</a></p>
                                </li>
                                <div class="cm">
                                    <li>
                                        <i class="fi flaticon-email"></i>
                                        <p><a href="mailto:info@example.com">info@example.com</a></p>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-phone-call"></i>
                                        <p><a href="tel:9876543210">+91 9876543210</a></p>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </div>
    <div class="wpo-lower-footer">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <p class="copyright"> Copyright &copy; 2024 UNICORN All
                        Rights Reserved. Designed by <a href="https://www.webinfotech.net.in/" target="_blank">Web
                            Infotech</a> </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end of wpo-site-footer-section -->


</div>
<!-- end of page-wrapper -->

<!-- All JavaScript files
    ================================================== -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<!-- Plugins for this template -->
<script src="../assets/js/modernizr.custom.js"></script>
<script src="../assets/js/jquery-plugin-collection.js"></script>
<!-- Custom script for this template -->
<script src="../assets/js/script.js"></script>



<script>
    // scripts.js
    document.addEventListener("DOMContentLoaded", () => {
        const mainImage = document.getElementById("main-image");
        const thumbnails = document.querySelectorAll(".thumbnail");

        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener("click", (event) => {
                const newImageSrc = event.target.getAttribute("data-image");
                mainImage.src = newImageSrc;
            });
        });

        // Magnification effect
        mainImage.addEventListener("mousemove", (event) => {
            const rect = mainImage.getBoundingClientRect();
            const x = event.clientX - rect.left;
            const y = event.clientY - rect.top;
            const percentX = (x / rect.width) * 100;
            const percentY = (y / rect.height) * 100;

            mainImage.style.transformOrigin = `${percentX}% ${percentY}%`;
            mainImage.style.transform = "scale(2)";
        });

        mainImage.addEventListener("mouseleave", () => {
            mainImage.style.transform = "scale(1)";
        });
    });
</script>

<script>
    // scripts.js
    document.addEventListener("DOMContentLoaded", () => {
        const minusButton = document.querySelector(".minus-btn");
        const plusButton = document.querySelector(".plus-btn");
        const quantityInput = document.querySelector(".quantity");

        minusButton.addEventListener("click", () => {
            let currentQuantity = parseInt(quantityInput.value);
            if (currentQuantity > 1) {
                quantityInput.value = currentQuantity - 1;
            }
        });

        plusButton.addEventListener("click", () => {
            let currentQuantity = parseInt(quantityInput.value);
            quantityInput.value = currentQuantity + 1;
        });
    });
</script>



</body>




</html>