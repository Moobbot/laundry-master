<?php include("./reuse/header.php")?>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->
    <?php include("./reuse/menu.php")?>
    <main>
        <!--? slider Area Start-->
        <section class="slider-area hero-overly">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-10 col-sm-9">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">Quality laundry service in your city</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">We take care about cleenness of your cloth</p>
                                    <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Explore Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider Area End-->
        <!--? Services Area Start -->
        <section class="services-area pt-top border-bottom pb-20 mb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element">Our Process</span>
                            <h2>This is how we work</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    //** Link dẫn
                        $link1 = array(
                                        "services.php",
                                        "services.php",
                                        "services.php"
                                    );
                    //** Dòng tip
                        $tip = array(
                                    "We collect your clothes",
                                    "Wash your clothes",
                                    "Get delivery"
                                    );
                    //** Text
                        $text = array(
                                        "The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!",
                                        "The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!",
                                        "The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!"
                                    );
                    for ($i=0; $i < count($tip); $i++) {
                    ?>
                        <div class="col-4">
                            <div class="single-cat text-center">
                                <div class="cat-icon">
                                    <img src="assets/img/icon/services-icon<?=($i+1)?>.svg" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="<?=$link1[$i]?>"><?=$tip[$i]?></a></h5>
                                    <p><?=$text[$i]?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!--? Offer-services Start  -->
        <section class="offer-services pb-bottom2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element">Services</span>
                            <h2>Services we offer</h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="assets/img/gallery/offers1.png" alt="" class=" w-100">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="assets/img/gallery/offers2.png" alt="" class=" w-100">
                            <div class="offers-caption text-center">
                                <div class="cat-icon">
                                    <img src="assets/img/icon/offers-icon1.png" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.php">Cloth laundry</a></h5>
                                    <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="assets/img/gallery/offers2.png" alt="" class=" w-100">
                            <div class="offers-caption text-center">
                                <div class="cat-icon">
                                    <img src="assets/img/icon/offers-icon1.png" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.php">Cloth ironing</a></h5>
                                    <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="assets/img/gallery/offers4.png" alt="" class=" w-100">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Offer-services End  -->
        <!--? Want To work -->
        <section class="container">
            <section class="wantToWork-area" data-background="assets/img/gallery/section_bg01.png">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8 col-lg-9 col-md-7">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Call us for a service</h2>
                                <p>We deliver the goods to the most complicated places on earth</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5">
                            <a href="#" class="btn wantToWork-btn"><img src="assets/img/icon/call2.png" alt=""> Learn More</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- Want To work End -->
        <!-- Testimonials_start -->
        <section class="testimonials-area testimonials-overly  position-relative">
            <div class="container">
                <div class="border-bottom section-padding40 ">
                    <div class="row">
                        <div class="col-xl-12">
                            <!-- testmonial-image -->
                            <div class="testmonial-nav text-center">
                                <div class="testmonial-thumb">
                                    <img src="assets/img/gallery/testimonila1.png" alt="">
                                </div>
                                <div class="testmonial-thumb">
                                    <img src="assets/img/gallery/testimonila2.png" alt="">
                                </div>
                                <div class="testmonial-thumb">
                                    <img src="assets/img/gallery/testimonila3.png" alt="">
                                </div>
                                <div class="testmonial-thumb">
                                    <img src="assets/img/gallery/testimonila2.png" alt="">
                                </div>
                            </div>
                            <div class="testmonial-item-active text-center">
                                <?php
                                    for ($i=0; $i < 4; $i++) {
                                ?>
                                    <!-- testimonial-single-items -->
                                    <div class="testmonial-item ">
                                        <p class="pera">The automated process starts as soon as your clothes go into the<br> machine. The outcome is gleaming clothes!</p>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p> - Rupaya</p>
                                    </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials_end -->
        <!--? Company achievement Start -->
        <section class="services-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element">Fun Fact</span>
                            <h2>Company achievement</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-cap">
                                <span>4000</span>
                                <p>The automated process starts as soon as your clothes go into the machine.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-cap">
                                <span>300+</span>
                                <p>The automated process starts as soon as your clothes go into the machine.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-cap">
                                <span>95%</span>
                                <p>The automated process starts as soon as your clothes go into the machine.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bottom-bt">
                                <img src="assets/img/gallery/company-bg.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Company achievement End -->
        <!--? About Area  -->
        <section class="about-area2 pb-bottom mt-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="assets/img/gallery/about1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-25">
                                <h2>About company</h2>
                            </div>
                            <p class="mb-20">
                                The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!
                            </p>
                            <p class="mb-30">The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!</p>

                            <a href="about.html" class="btn">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--?  Map Area start  -->
        <div class="Map-area">
            <img src="assets/img/gallery/Map.png" alt="" class="w-100">
        </div>
        <!-- Map Area End -->
    </main>
<?php include("./reuse/footer_body.php")?>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
<?php include("./reuse/footer.php")?>