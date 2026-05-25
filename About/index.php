<?php
require "../inc/head.php";
require "../inc/header.php"; ?>
<!--==============================Hero Area==============================-->
<!--==============================Breadcumb============================== -->
<div class="breadcumb-wrapper " data-bg-src="<?php echo $path; ?>/assets/img/bg/about_bg.jpg">
    <div class="breadcumb-shape1"></div>
    <div class="breadcumb-shape2"></div>
    <div class="breadcumb-shape3"></div>
    <div class="breadcumb-shape4"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">À Propos de nous</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>À Propos de nous</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 d-lg-block d-none align-self-end">
                <div class="breadcumb-thumb">
                    <img src="<?php echo $path; ?>/assets/img/normal/men_gym.png" alt="img">
                </div>
            </div>
        </div>
    </div>
</div><!--==============================
About Area  
==============================-->
<div class="overflow-hidden space-top" id="about-sec">
    <div class="container">
        <div class="row gx-80 gy-60 align-items-center">
            <div class="col-xl-6">
                <div class="img-box3">
                    <div class="img1" data-mask-src="<?php echo $path; ?>/assets/img/normal/about_3_1-mask.png">
                        <img src="<?php echo $path; ?>/assets/img/photos 2/photos/about_book.jpg" alt="À propos">
                    </div>
                    <div class="year-counter">
                        <div class="star-icon">
                            <img src="<?php echo $path; ?>/assets/img/icon/about-star-icon.svg" alt="icône">
                        </div>
                        <div class="year-counter_number"><span class="counter-number">500</span>+</div>
                        <p class="year-counter_text">Clients Satisfaits</p>
                    </div>
                </div>

            </div>
            <div class="col-xl-6">
                <div class="title-area mb-30">
                    <span class="sub-title after-none">À Propos de nous</span>
                    <h2 class="sec-title text-white">Privilège Luxury Fitness Club </h2>
                    <p class="text-light">Bienvenue dans PRIVILÈGE LUXURY FITNESS CLUB, où le luxe rencontre la performance. Notre club hors catégorie redéfinit l’art du fitness, offrant une expérience inégalée au cœur de Casablanca.</p>
                </div>
                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="about-grid">
                            <div class="about-grid-number">
                                01
                            </div>
                            <div class="details">
                                <h4 class="about-grid_title text-white">Entraînement Fitness</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-grid">
                            <div class="about-grid-number">
                                02
                            </div>
                            <div class="details">
                                <h4 class="about-grid_title text-white">Routine Personnalisée</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--==============================
Counter Area  
==============================-->
<div class="space">
    <div class="container">
        <div class="counter-card-wrap3">
            <div class="counter-card style2">
                <div class="media-body">
                    <h2 class="box-number"><span class="counter-number text-white">500</span><span class="counter-sign text-theme">+</span></h2>
                    <p class="box-text text-white">Membres Satisfaits</p>
                </div>
            </div>
            <div class="counter-card style2">
                <div class="media-body">
                    <h2 class="box-number"><span class="counter-number text-white">50</span><span class="counter-sign text-theme">+</span></h2>
                    <p class="box-text text-white">Activités Haut de Gamme</p>
                </div>
            </div>
            <div class="counter-card style2">
                <div class="media-body">
                    <h2 class="box-number"><span class="counter-number text-white">20</span><span class="counter-sign text-theme">+</span></h2>
                    <p class="box-text text-white">Coachs Experts</p>
                </div>
            </div>
            <div class="counter-card style2">
                <div class="media-body">
                    <h2 class="box-number text-white"><span class="counter-number text-white">10</span>k<span class="counter-sign text-theme">+</span></h2>
                    <p class="box-text text-white">Abonnés sur Instagram</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!--==============================
Team Area  
==============================-->
<section class="space bg-black2" id="team-sec">
    <div class="shape-mockup team-shape2-1 jump-reverse d-xl-block d-none" data-top="5%" data-left="2%"><img src="<?php echo $path; ?>/assets/img/photos 2/photos/about_alters.png" alt="img"></div>
    <div class="shape-mockup team-shape2-2 jump d-xl-block d-none" data-bottom="5%" data-right="0%"><img src="<?php echo $path; ?>/assets/img/photos 2/photos/889A9648 (1).jpg" alt="img"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6">
                <div class="title-area text-lg-start text-center">
                    <span class="sub-title after-lg-none">Nos Coachs</span>
                    <h2 class="sec-title text-white">Rencontrez Nos Coachs Experts</h2>
                </div>
            </div>

            <div class="col-lg-auto">
                <div class="sec-btn">
                    <div class="icon-box">
                        <button data-slider-prev="#teamSlider2" class="slider-arrow default slider-prev style-border"><i class="far fa-arrow-left"></i></button>
                        <button data-slider-next="#teamSlider2" class="slider-arrow default slider-next style-border"><i class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="teamSlider2" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card style2">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="<?php echo $path; ?>/assets/img/team/team_2_1.png" alt="Team">
                                    <div class="hover-img">
                                        <img src="<?php echo $path; ?>/assets/img/team/team_2_1-hover.png" alt="Team">
                                    </div>
                                </div>
                            </div>
                            <div class="team-card-content">
                                <div class="team-card-bg-shape" data-bg-src="<?php echo $path; ?>/assets/img/team/team-card-bg-2.png"></div>
                                <h3 class="box-title"><a href="team-details.html">Jhon Williams</a></h3>
                                <span class="team-desig">Fitness Trainer</span>
                                <div class="team-social-hover">
                                    <a href="#" class="team-social-hover_btn">
                                        <i class="far fa-plus"></i>
                                    </a>
                                    <div class="th-social">
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card style2">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="<?php echo $path; ?>/assets/img/team/team_2_2.png" alt="Team">
                                    <div class="hover-img">
                                        <img src="<?php echo $path; ?>/assets/img/team/team_2_2-hover.png" alt="Team">
                                    </div>
                                </div>
                            </div>
                            <div class="team-card-content">
                                <div class="team-card-bg-shape" data-bg-src="<?php echo $path; ?>/assets/img/team/team-card-bg-2.png"></div>
                                <h3 class="box-title"><a href="team-details.html">Henry Joseph</a></h3>
                                <span class="team-desig">Gym Trainer</span>
                                <div class="team-social-hover">
                                    <a href="#" class="team-social-hover_btn">
                                        <i class="far fa-plus"></i>
                                    </a>
                                    <div class="th-social">
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card style2">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="<?php echo $path; ?>/assets/img/team/team_2_3.png" alt="Team">
                                    <div class="hover-img">
                                        <img src="<?php echo $path; ?>/assets/img/team/team_2_3-hover.png" alt="Team">
                                    </div>
                                </div>
                            </div>
                            <div class="team-card-content">
                                <div class="team-card-bg-shape" data-bg-src="<?php echo $path; ?>/assets/img/team/team-card-bg-2.png"></div>
                                <h3 class="box-title"><a href="team-details.html">Esa Elizabed</a></h3>
                                <span class="team-desig">Fitness Trainer</span>
                                <div class="team-social-hover">
                                    <a href="#" class="team-social-hover_btn">
                                        <i class="far fa-plus"></i>
                                    </a>
                                    <div class="th-social">
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card style2">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="<?php echo $path; ?>/assets/img/team/team_2_4.png" alt="Team">
                                    <div class="hover-img">
                                        <img src="<?php echo $path; ?>/assets/img/team/team_2_4-hover.png" alt="Team">
                                    </div>
                                </div>
                            </div>
                            <div class="team-card-content">
                                <div class="team-card-bg-shape" data-bg-src="<?php echo $path; ?>/assets/img/team/team-card-bg-2.png"></div>
                                <h3 class="box-title"><a href="team-details.html">Darrell Steward</a></h3>
                                <span class="team-desig">Gym Trainer</span>
                                <div class="team-social-hover">
                                    <a href="#" class="team-social-hover_btn">
                                        <i class="far fa-plus"></i>
                                    </a>
                                    <div class="th-social">
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card style2">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="<?php echo $path; ?>/assets/img/team/team_2_1.png" alt="Team">
                                    <div class="hover-img">
                                        <img src="<?php echo $path; ?>/assets/img/team/team_2_1-hover.png" alt="Team">
                                    </div>
                                </div>
                            </div>
                            <div class="team-card-content">
                                <div class="team-card-bg-shape" data-bg-src="<?php echo $path; ?>/assets/img/team/team-card-bg-2.png"></div>
                                <h3 class="box-title"><a href="team-details.html">Jhon Williams</a></h3>
                                <span class="team-desig">Fitness Trainer</span>
                                <div class="team-social-hover">
                                    <a href="#" class="team-social-hover_btn">
                                        <i class="far fa-plus"></i>
                                    </a>
                                    <div class="th-social">
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card style2">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="<?php echo $path; ?>/assets/img/team/team_2_2.png" alt="Team">
                                    <div class="hover-img">
                                        <img src="<?php echo $path; ?>/assets/img/team/team_2_2-hover.png" alt="Team">
                                    </div>
                                </div>
                            </div>
                            <div class="team-card-content">
                                <div class="team-card-bg-shape" data-bg-src="<?php echo $path; ?>/assets/img/team/team-card-bg-2.png"></div>
                                <h3 class="box-title"><a href="team-details.html">Henry Joseph</a></h3>
                                <span class="team-desig">Gym Trainer</span>
                                <div class="team-social-hover">
                                    <a href="#" class="team-social-hover_btn">
                                        <i class="far fa-plus"></i>
                                    </a>
                                    <div class="th-social">
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card style2">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="<?php echo $path; ?>/assets/img/team/team_2_3.png" alt="Team">
                                    <div class="hover-img">
                                        <img src="<?php echo $path; ?>/assets/img/team/team_2_3-hover.png" alt="Team">
                                    </div>
                                </div>
                            </div>
                            <div class="team-card-content">
                                <div class="team-card-bg-shape" data-bg-src="<?php echo $path; ?>/assets/img/team/team-card-bg-2.png"></div>
                                <h3 class="box-title"><a href="team-details.html">Esa Elizabed</a></h3>
                                <span class="team-desig">Fitness Trainer</span>
                                <div class="team-social-hover">
                                    <a href="#" class="team-social-hover_btn">
                                        <i class="far fa-plus"></i>
                                    </a>
                                    <div class="th-social">
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card style2">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="<?php echo $path; ?>/assets/img/team/team_2_4.png" alt="Team">
                                    <div class="hover-img">
                                        <img src="<?php echo $path; ?>/assets/img/team/team_2_4-hover.png" alt="Team">
                                    </div>
                                </div>
                            </div>
                            <div class="team-card-content">
                                <div class="team-card-bg-shape" data-bg-src="<?php echo $path; ?>/assets/img/team/team-card-bg-2.png"></div>
                                <h3 class="box-title"><a href="team-details.html">Darrell Steward</a></h3>
                                <span class="team-desig">Gym Trainer</span>
                                <div class="team-social-hover">
                                    <a href="#" class="team-social-hover_btn">
                                        <i class="far fa-plus"></i>
                                    </a>
                                    <div class="th-social">
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!--==============================
Service Area  
==============================-->
<section class="overflow-hidden space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Nos Services</span>
            <h2 class="sec-title text-white">Nos Services Pour Vous</h2>
        </div>
        <div class="row gy-30 gx-30 justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card2 style2">
                    <div class="box-shape">
                        <svg width="81" height="80" viewBox="0 0 81 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M81 0H30C13.4315 0 0 13.4315 0 30V80L15.027 65.1585C16.9293 63.2797 18 60.7174 18 58.0437V39C18 27.9543 26.9543 19 38 19H57.6567C60.2873 19 62.812 17.9634 64.6837 16.1148L81 0Z" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="box-content">
                        <div class="service-card-icon">
                            <img src="<?php echo $path; ?>/assets/img/icon/healthy.png" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Reaxing</a></h3>
                        <p class="box-text">Un programme unique qui booste vitesse, coordination et motricité.</p>
                        <a href="service-details.html" class="link-btn style4">Lire la suite<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card2 style2">
                    <div class="box-shape">
                        <svg width="81" height="80" viewBox="0 0 81 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M81 0H30C13.4315 0 0 13.4315 0 30V80L15.027 65.1585C16.9293 63.2797 18 60.7174 18 58.0437V39C18 27.9543 26.9543 19 38 19H57.6567C60.2873 19 62.812 17.9634 64.6837 16.1148L81 0Z" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="box-content">
                        <div class="service-card-icon">
                            <img src="<?php echo $path; ?>/assets/img/icon/service_icon2-2.svg" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">CrossFit</a></h3>
                        <p class="box-text">Découvrez des séances d'entraînement variées et accessibles à tous.</p>
                        <a href="service-details.html" class="link-btn style4">Lire la suite<i class="fas fa-arrow-right ms-2"></i></a>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card2 style2">
                    <div class="box-shape">
                        <svg width="81" height="80" viewBox="0 0 81 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M81 0H30C13.4315 0 0 13.4315 0 30V80L15.027 65.1585C16.9293 63.2797 18 60.7174 18 58.0437V39C18 27.9543 26.9543 19 38 19H57.6567C60.2873 19 62.812 17.9634 64.6837 16.1148L81 0Z" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="box-content">
                        <div class="service-card-icon">
                            <img src="<?php echo $path; ?>/assets/img/icon/yoga.png" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">YOGA</a></h3>
                        <p class="box-text">Apprenez à vous détendre et à renforcer votre corps en douceur.</p>
                        <a href="service-details.html" class="link-btn style4">Lire la suite<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card2 style2">
                    <div class="box-shape">
                        <svg width="81" height="80" viewBox="0 0 81 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M81 0H30C13.4315 0 0 13.4315 0 30V80L15.027 65.1585C16.9293 63.2797 18 60.7174 18 58.0437V39C18 27.9543 26.9543 19 38 19H57.6567C60.2873 19 62.812 17.9634 64.6837 16.1148L81 0Z" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="box-content">
                        <div class="service-card-icon">
                            <img src="<?php echo $path; ?>/assets/img/icon/service_icon2-4.svg" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Équipements Modernes</a></h3>
                        <p class="box-text">Profitez des appareils de pointe pour des entraînements optimaux.</p>
                        <a href="service-details.html" class="link-btn style4">Lire la suite<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Brand Area  
==============================-->
<div class="space-bottom overflow-hidden">
    <div class="container-fluid">
        <div class="swiper th-slider text-center" id="brandSlider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"5"},"1500":{"slidesPerView":"6"}}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_1-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_1.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_2-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_2.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_3-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_3.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_4-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_4.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_5-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_5.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_6-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_6.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_1-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_1.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_2-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_2.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_3-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_3.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_4-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_4.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_5-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_5.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_6-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_6.svg" alt="Brand Logo">
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
require "../inc/footer.php";
require "../inc/foot.php";; ?>