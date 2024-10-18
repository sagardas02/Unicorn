<?php include '../include/header.php' ?>
<!-- start of breadcumb-section -->
<div class="wpo-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>Contact Us</h2>
                    <ul>
                        <li><a href="../others/index.php">Home</a></li>
                        <!-- <li><span>Contact</span></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of wpo-breadcumb-section-->

<section class="wpo-contact-pg-section section-padding">
    <div class="container">
        <div class="row">

            <div class="office-info">
                <div class="row">
                    <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="office-info-item">
                            <div class="con-head"></div>
                            <div class="office-info-icon">
                                <div class="icon">
                                    <i class="fi flaticon-placeholder"></i>
                                </div>
                            </div>
                            <div class="office-info-text">
                                <h2>Address</h2>
                                <p>Guwahati, Assam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="office-info-item">
                            <div class="con-head"></div>
                            <div class="office-info-icon">
                                <div class="icon">
                                    <i class="fi flaticon-email"></i>
                                </div>
                            </div>
                            <div class="office-info-text">
                                <h2>Email Us</h2>
                                <p><a href="mailto:">mail.info@mail.com</a></p>
                                <!-- <p><a href="mailto:helloyou@gmail.com">helloyou@gmail.com</a></p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="office-info-item">
                            <div class="con-head"></div>
                            <div class="office-info-icon">
                                <div class="icon">
                                    <i class="fi flaticon-phone-call"></i>
                                </div>
                            </div>
                            <div class="office-info-text">
                                <h2>Call Now</h2>
                                <p><a href="tel:">+91 9876543210</a></p>
                                <!-- <p><a href="9871230456">+91 9871230456</a></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-lg-10 offset-lg-1">
                <div class="wpo-contact-title">
                    <h2>Have Any Question?</h2>
                    <p>It is a long established fact that a reader will be distracted
                        content of a page when looking.</p>
                </div>
                <div class="wpo-contact-form-area">
                    <form method="post" class="contact-validation-active" id="contact-form-main">
                        <div class="fullwidth">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                        </div>
                        <div>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                        </div>
                        <div>
                            <input type="number" class="form-control" name="number" id="number" placeholder="Your Contact Number">
                        </div>
                        <div class="fullwidth">
                            <textarea class="form-control" name="note" id="note" placeholder="Your Message"></textarea>
                        </div>
                        <div class="submit-area">
                            <button type="submit" class="theme-btn">Get in Touch</button>
                            <div id="loader">
                                <i class="ti-reload"></i>
                            </div>
                        </div>
                        <div class="clearfix error-handling-messages">
                            <div id="success">Thank you</div>
                            <div id="error"> Error occurred while sending email. Please try again later. </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>


<?php include '../include/footer.php' ?>