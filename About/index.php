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
                        <li><a href="../">Accueil</a></li>
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
                    <!-- Karim El Mansouri -->
                    <div class="swiper-slide">
                        <div class="th-team team-card style2">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="<?php echo $path; ?>/assets/img/team/team_1_1.jpg" alt="Karim El Mansouri">
                                    <div class="hover-img">
                                        <img src="<?php echo $path; ?>/assets/img/team/team_1_1.jpg" alt="Karim El Mansouri">
                                    </div>
                                </div>
                            </div>
                            <div class="team-card-content">
                                <div class="team-card-bg-shape" data-bg-src="<?php echo $path; ?>/assets/img/team/team-card-bg-2.png"></div>
                                <h3 class="box-title"><a href="#">Karim El Mansouri</a></h3>
                                <span class="team-desig">Coach CrossFit</span>
                                <div class="team-social-hover">
                                    <a href="#" class="team-social-hover_btn"><i class="far fa-plus"></i></a>
                                    <div class="th-social">
                                        <a target="_blank" href="https://instagram.com/privilegefitnessclub/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://facebook.com/privilegefitnessclub/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://wa.me/212522831616"><i class="fab fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Nabil Benjelloun -->
                    <div class="swiper-slide">
                        <div class="th-team team-card style2">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="<?php echo $path; ?>/assets/img/team/team_1_2.jpg" alt="Nabil Benjelloun">
                                    <div class="hover-img">
                                        <img src="<?php echo $path; ?>/assets/img/team/team_1_2.jpg" alt="Nabil Benjelloun">
                                    </div>
                                </div>
                            </div>
                            <div class="team-card-content">
                                <div class="team-card-bg-shape" data-bg-src="<?php echo $path; ?>/assets/img/team/team-card-bg-2.png"></div>
                                <h3 class="box-title"><a href="#">Nabil Benjelloun</a></h3>
                                <span class="team-desig">Coach Fitness</span>
                                <div class="team-social-hover">
                                    <a href="#" class="team-social-hover_btn"><i class="far fa-plus"></i></a>
                                    <div class="th-social">
                                        <a target="_blank" href="https://instagram.com/privilegefitnessclub/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://facebook.com/privilegefitnessclub/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://wa.me/212522831616"><i class="fab fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Salma Tazi -->
                    <div class="swiper-slide">
                        <div class="th-team team-card style2">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="<?php echo $path; ?>/assets/img/team/team_1_3.jpg" alt="Salma Tazi">
                                    <div class="hover-img">
                                        <img src="<?php echo $path; ?>/assets/img/team/team_1_3.jpg" alt="Salma Tazi">
                                    </div>
                                </div>
                            </div>
                            <div class="team-card-content">
                                <div class="team-card-bg-shape" data-bg-src="<?php echo $path; ?>/assets/img/team/team-card-bg-2.png"></div>
                                <h3 class="box-title"><a href="#">Salma Tazi</a></h3>
                                <span class="team-desig">Coach Yoga & Spa</span>
                                <div class="team-social-hover">
                                    <a href="#" class="team-social-hover_btn"><i class="far fa-plus"></i></a>
                                    <div class="th-social">
                                        <a target="_blank" href="https://instagram.com/privilegefitnessclub/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://facebook.com/privilegefitnessclub/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://wa.me/212522831616"><i class="fab fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Yassine Chakir -->
                    <div class="swiper-slide">
                        <div class="th-team team-card style2">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="<?php echo $path; ?>/assets/img/team/team_1_4.jpg" alt="Yassine Chakir">
                                    <div class="hover-img">
                                        <img src="<?php echo $path; ?>/assets/img/team/team_1_4.jpg" alt="Yassine Chakir">
                                    </div>
                                </div>
                            </div>
                            <div class="team-card-content">
                                <div class="team-card-bg-shape" data-bg-src="<?php echo $path; ?>/assets/img/team/team-card-bg-2.png"></div>
                                <h3 class="box-title"><a href="#">Yassine Chakir</a></h3>
                                <span class="team-desig">Coach Reaxing</span>
                                <div class="team-social-hover">
                                    <a href="#" class="team-social-hover_btn"><i class="far fa-plus"></i></a>
                                    <div class="th-social">
                                        <a target="_blank" href="https://instagram.com/privilegefitnessclub/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://facebook.com/privilegefitnessclub/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://wa.me/212522831616"><i class="fab fa-whatsapp"></i></a>
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
                        <h3 class="box-title"><a href="../services/">Reaxing</a></h3>
                        <p class="box-text">Un programme unique qui booste vitesse, coordination et motricité.</p>
                        <a href="../services/" class="link-btn style4">Lire la suite<i class="fas fa-arrow-right ms-2"></i></a>
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
                        <h3 class="box-title"><a href="../services/">CrossFit</a></h3>
                        <p class="box-text">Découvrez des séances d'entraînement variées et accessibles à tous.</p>
                        <a href="../services/" class="link-btn style4">Lire la suite<i class="fas fa-arrow-right ms-2"></i></a>

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
                        <h3 class="box-title"><a href="../services/">YOGA</a></h3>
                        <p class="box-text">Apprenez à vous détendre et à renforcer votre corps en douceur.</p>
                        <a href="../services/" class="link-btn style4">Lire la suite<i class="fas fa-arrow-right ms-2"></i></a>
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
                        <h3 class="box-title"><a href="../services/">Équipements Modernes</a></h3>
                        <p class="box-text">Profitez des appareils de pointe pour des entraînements optimaux.</p>
                        <a href="../services/" class="link-btn style4">Lire la suite<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Temoignages Area
==============================-->
<section class="space bg-black2" id="temoignages-sec">
    <div class="container">
        <div class="title-area text-center mb-50">
            <span class="sub-title">Ce Qu'ils Disent</span>
            <h2 class="sec-title text-white">Témoignages de Nos Membres</h2>
        </div>
        <div class="swiper th-slider" id="temoignagesSlider" data-slider-options='{"loop":true,"autoplay":{"delay":4500},"breakpoints":{"0":{"slidesPerView":1},"768":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
            <div class="swiper-wrapper">

                <!-- Témoignage 1 -->
                <div class="swiper-slide">
                    <div class="testi-card style2">
                        <div class="testi-card_quote"><i class="fas fa-quote-left"></i></div>
                        <p class="testi-card_text">Privilège Luxury Fitness Club est sans doute le meilleur club de Casablanca. L'ambiance est exceptionnelle, les équipements sont dernière génération et les coachs sont vraiment professionnels. Je recommande vivement !</p>
                        <div class="testi-card_author">
                            <div class="testi-card_img">
                                <img src="<?php echo $path; ?>/assets/img/team/team_1_1.jpg" alt="Mehdi Alaoui">
                            </div>
                            <div class="testi-card_info">
                                <h3 class="box-title text-white">Mehdi Alaoui</h3>
                                <span class="testi-card_desig">Membre depuis 2 ans</span>
                            </div>
                            <div class="testi-card_review ms-auto">
                                <i class="fas fa-star text-theme"></i>
                                <i class="fas fa-star text-theme"></i>
                                <i class="fas fa-star text-theme"></i>
                                <i class="fas fa-star text-theme"></i>
                                <i class="fas fa-star text-theme"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Témoignage 2 -->
                <div class="swiper-slide">
                    <div class="testi-card style2">
                        <div class="testi-card_quote"><i class="fas fa-quote-left"></i></div>
                        <p class="testi-card_text">La salle Reaxing est unique au Maroc et m'a complètement transformée. En 6 mois, j'ai gagné en coordination, en équilibre et en confiance. L'équipe est toujours à l'écoute et bienveillante.</p>
                        <div class="testi-card_author">
                            <div class="testi-card_img">
                                <img src="<?php echo $path; ?>/assets/img/team/team_1_3.jpg" alt="Sara Benali">
                            </div>
                            <div class="testi-card_info">
                                <h3 class="box-title text-white">Sara Benali</h3>
                                <span class="testi-card_desig">Membre depuis 1 an</span>
                            </div>
                            <div class="testi-card_review ms-auto">
                                <i class="fas fa-star text-theme"></i>
                                <i class="fas fa-star text-theme"></i>
                                <i class="fas fa-star text-theme"></i>
                                <i class="fas fa-star text-theme"></i>
                                <i class="fas fa-star text-theme"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Témoignage 3 -->
                <div class="swiper-slide">
                    <div class="testi-card style2">
                        <div class="testi-card_quote"><i class="fas fa-quote-left"></i></div>
                        <p class="testi-card_text">Un club hors du commun ! Le cadre est luxueux, les douches et vestiaires sont impeccables. Karim mon coach CrossFit a su adapter chaque séance à mes besoins. Résultats visibles dès le premier mois.</p>
                        <div class="testi-card_author">
                            <div class="testi-card_img">
                                <img src="<?php echo $path; ?>/assets/img/team/team_1_2.jpg" alt="Rachid El Fassi">
                            </div>
                            <div class="testi-card_info">
                                <h3 class="box-title text-white">Rachid El Fassi</h3>
                                <span class="testi-card_desig">Membre depuis 3 ans</span>
                            </div>
                            <div class="testi-card_review ms-auto">
                                <i class="fas fa-star text-theme"></i>
                                <i class="fas fa-star text-theme"></i>
                                <i class="fas fa-star text-theme"></i>
                                <i class="fas fa-star text-theme"></i>
                                <i class="fas fa-star text-theme"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Témoignage 4 -->
                <div class="swiper-slide">
                    <div class="testi-card style2">
                        <div class="testi-card_quote"><i class="fas fa-quote-left"></i></div>
                        <p class="testi-card_text">J'apprécie énormément les cours de yoga animés par Salma. L'espace est calme, propre et très bien aménagé. Le spa est une vraie détente après chaque séance. Privilège, c'est vraiment une expérience complète !</p>
                        <div class="testi-card_author">
                            <div class="testi-card_img">
                                <img src="<?php echo $path; ?>/assets/img/team/team_1_4.jpg" alt="Nadia Khattabi">
                            </div>
                            <div class="testi-card_info">
                                <h3 class="box-title text-white">Nadia Khattabi</h3>
                                <span class="testi-card_desig">Membre depuis 8 mois</span>
                            </div>
                            <div class="testi-card_review ms-auto">
                                <i class="fas fa-star text-theme"></i>
                                <i class="fas fa-star text-theme"></i>
                                <i class="fas fa-star text-theme"></i>
                                <i class="fas fa-star text-theme"></i>
                                <i class="fas fa-star text-theme"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Témoignage 5 -->
                <div class="swiper-slide">
                    <div class="testi-card style2">
                        <div class="testi-card_quote"><i class="fas fa-quote-left"></i></div>
                        <p class="testi-card_text">Grâce au suivi personnalisé de Nabil, j'ai perdu 12 kg en 4 mois tout en gagnant en masse musculaire. La qualité des équipements et la propreté du club sont au rendez-vous à chaque visite. Je suis bluffé !</p>
                        <div class="testi-card_author">
                            <div class="testi-card_img">
                                <img src="<?php echo $path; ?>/assets/img/team/team_1_1.jpg" alt="Omar Bennani">
                            </div>
                            <div class="testi-card_info">
                                <h3 class="box-title text-white">Omar Bennani</h3>
                                <span class="testi-card_desig">Membre depuis 6 mois</span>
                            </div>
                            <div class="testi-card_review ms-auto">
                                <i class="fas fa-star text-theme"></i>
                                <i class="fas fa-star text-theme"></i>
                                <i class="fas fa-star text-theme"></i>
                                <i class="fas fa-star text-theme"></i>
                                <i class="fas fa-star text-theme"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="slider-pagination"></div>
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
                    <a href="#" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_1-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_1.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_2-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_2.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_3-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_3.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_4-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_4.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_5-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_5.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_6-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_6.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_1-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_1.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_2-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_2.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_3-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_3.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_4-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_4.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="brand-box2">
                        <img class="original" src="<?php echo $path; ?>/assets/img/brand/brand_3_5-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path; ?>/assets/img/brand/brand_3_5.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="brand-box2">
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