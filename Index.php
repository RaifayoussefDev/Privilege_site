<?php
$page = 1;
require "inc/head.php";
require "inc/header.php"; ?>
<!--==============================Hero Area==============================-->

<!--==============================
Hero Area
==============================-->
<div class="th-hero-wrapper hero-1" id="hero">
    <div class="swiper th-slider hero-slider1" id="heroSlide1" data-slider-options='{"effect":"fade", "autoHeight": "true"}' data-mask-src="assets/img/hero/hero_bg-shape-mask.png">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-inner" data-bg-src="assets/img/hero/hero_bg_1_1.jpg" data-overlay="black" data-opacity="9">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-6">
                                <div class="hero-style1">
                                    <span class="sub-title text-theme after-none" data-ani="slideinup" data-ani-delay="0.2s">Bienvenue au Privilege Luxury Fitness Club</span>
                                    <h1 class="hero-title text-white">
                                        <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                            Prêt à Entraîner </span>
                                        <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                            Votre Corps </span>
                                    </h1>
                                    <!-- <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.5s">Les entraînements en salle de sport sont des séances d'exercice structurées réalisées dans un établissement de fitness équipé de diverses machines d'exercice, poids libres et commodités.</p> -->
                                    <!-- <div class="btn-wrap" data-ani="slideinup" data-ani-delay="0.7s">
                                        <a href="schedule.html" class="th-btn">VOIR L'HORAIRE DES COURS</a>
                                        <div class="hero-counter-wrap">
                                            <div class="counter-number-wrap">
                                                <div class="counter-number">2</div>k <span class="fw-light">+</span>
                                            </div>
                                            <h4 class="counter-title">Clients Satisfaits</h4>
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 align-self-end">
                                <div class="hero-img1" data-ani="slideinright" data-ani-delay="0.5s">
                                    <img src="assets/img/photos/pngwing_girl.png" alt="Image">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-shadow-text">GYM</div>
                    <div class="hero-bg-shape1" data-bg-src="assets/img/photos 2/vedio/video.gif">
                    </div>
                </div>

            </div>
            <div class="swiper-slide">
                <div class="hero-inner" data-bg-src="assets/img/hero/hero_bg_1_2.jpg" data-overlay="black" data-opacity="9">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-6">
                                <div class="hero-style1">
                                    <span class="sub-title text-theme after-none" data-ani="slideinup" data-ani-delay="0.2s">Gardez Votre Corps En Forme Avec Des Entraînements</span>
                                    <h1 class="hero-title text-white">
                                        <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                            Votre Forme </span>
                                        <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                            Votre Victoire </span>
                                    </h1>
                                    <!-- <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.5s">Les entraînements en salle de sport sont des séances d'exercice structurées réalisées dans un établissement de fitness équipé de diverses machines d'exercice, poids libres et commodités.</p> -->
                                    <div class="btn-wrap" data-ani="slideinup" data-ani-delay="0.7s">
                                        <a href="schedule.html" class="th-btn">VOIR L'HORAIRE DES COURS</a>
                                        <div class="hero-counter-wrap">
                                            <div class="counter-number-wrap">
                                                <div class="counter-number">2</div>k <span class="fw-light">+</span>
                                            </div>
                                            <h4 class="counter-title">Clients Satisfaits</h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-4 col-lg-6 align-self-end">
                                <div class="hero-img1" data-ani="slideinright" data-ani-delay="0.5s">
                                    <img src="assets/img/photos/pngwing.com.png" alt="Image">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-shadow-text">GYM</div>
                    <div class="hero-bg-shape1" data-bg-src="assets/img/photos/privilage_home.jpg">
                    </div>
                </div>

            </div>
        </div>
        <div class="icon-box">
            <button data-slider-prev="#heroSlider1" class="slider-arrow slider-prev"><span class="icon"></span></button>
            <button data-slider-next="#heroSlider1" class="slider-arrow slider-next"><span class="icon"></span></button>
        </div>
    </div>
</div>
<!--======== / Hero Section ========--><!--==============================
BMI Area  
==============================-->
<div class="overflow-hidden bmi-area-1 space-bottom bg-black2" data-mask-src="assets/img/hero/hero_bg-shape-mask.png">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Indice de Masse Corporelle</span>
            <h2 class="sec-title text-white">Calculez Votre IMC Maintenant</h2>
        </div>
        <div class="bmi-calculator-form">
            <form class="bmi-form" id="form" name="bmiCalc">
                <div class="row gy-30 gx-30 justify-content-center">
                    <div class="col-xl-3 col-md-6">
                        <div class="form-group style-dark2">
                            <input class="form-control" placeholder="Poids / KG" type="text" name="weight">
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="form-group style-dark2">
                            <input class="form-control" placeholder="Taille / CM" type="text" name="height">
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="form-group style-dark2">
                            <input type="number" class="form-control" name="age" id="age" placeholder="Âge">
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="form-group style-dark2">
                            <select name="subject" id="subject" class="form-select">
                                <option value="" disabled selected hidden>Sexe</option>
                                <option value="Male">Homme</option>
                                <option value="Female">Femme</option>
                                <option value="Other">Autre</option>
                            </select>
                            <i class="far fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="row gy-30 gx-30">
                            <div class="col-md-6">
                                <div class="form-group style-dark2">
                                    <input class="form-control" placeholder="Facteur d'Activité IMC" type="text" name="bmi">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group style-dark2">
                                    <input placeholder="Cela signifie" class="form-control" type="text" name="meaning">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="th-btn">
                            <input type="button" value="Calculer Maintenant" onClick="calculateBMI()">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--==============================
About Area  
==============================-->
<div class="overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="row gy-60 align-items-center flex-row-reverse">
            <div class="col-xl-6">
                <div class="img-box1">
                    <div class="line1 jump"></div>
                    <div class="line2 jump-reverse"></div>
                    <div class="img1">
                        <img src="assets/img/photos/team.jpg" alt="À propos" loading="lazy">
                    </div>
                    <!-- <div class="logo-icon jump">
                        <img src="assets/img/logo-icon.svg" alt="img">
                    </div> -->
                </div>
            </div>
            <div class="col-xl-6">
                <div class="title-area">
                    <span class="sub-title after-none">À Propos de Nous</span>
                    <h2 class="sec-title text-white">Nous Avons Beaucoup D'Expérience En Entraînement Gym</h2>
                </div>
                <div class="about-wrap1">
                    <div class="row gx-30 gy-30 align-items-center">
                        <div class="col-xl-6 col-lg-4 col-md-5">
                            <img src="assets/img/photos/about_us.jpg" alt="img" loading="lazy">
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-7">
                            <p class="text-light mt-4 mb-30">Bienvenue dans PRIVILÈGE LUXURY FITNESS CLUB, où le luxe rencontre
                                la performance.
                                Notre club hors catégorie redéfinit l’art du fitness, offrant une expérience
                                inégalée au cœur de Casablanca.</p>
                            <div class="checklist style-line style-white">
                                <ul>
                                    <!-- <li>Plus de 15 ans d'expérience</li> -->
                                    <li>Entraîneurs certifiés</li>
                                    <li>Qualité de travail exceptionnelle</li>
                                </ul>
                            </div>
                            <a href="about.html" class="th-btn style2">Commencer</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<!--==============================
Process Area  
==============================-->
<section class="space-bottom">
    <div class="shape-mockup process-shape1-1 jump-reverse d-xl-block d-none" data-top="-5%" data-left="2%"><img src="assets/img/Photos 2/Photos/pngwing.com.png" alt="img"></div>
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Processus de Travail</span>
            <h2 class="sec-title text-white">Étapes Faciles pour Atteindre Vos Objectifs.</h2>
        </div>
        <div class="process-card-wrap1 position-relative">
            <div class="process-line1-1 d-xl-block d-none">
                <img src="assets/img/process/process-line1-1.png" alt="img">
            </div>
            <div class="row gy-40 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="process-card">
                        <div class="process-card-thumb">
                            <img src="assets/img/photos 2/Photos/889A6634 (1).jpg" alt="img" loading="lazy">
                            <p class="box-number">
                                <span class="bg-shape">
                                    <svg width="88" height="34" viewBox="0 0 88 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M63.1937 3.77333C69.2789 6.26448 74.808 9.91582 79.4654 14.5189C82.8438 17.8578 85.7155 21.6501 88 25.7767C51.0219 40.1521 16.916 32.7165 0 25.7767C2.28451 21.6501 5.1562 17.8578 8.53458 14.5189C13.192 9.91582 18.7211 6.26448 24.8063 3.77333C30.8914 1.28218 37.4135 0 44 0C50.5865 0 57.1086 1.28218 63.1937 3.77333Z" fill="currentColor" />
                                    </svg>
                                </span>
                                ÉTAPE-01
                            </p>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title text-white">Entraînement de Boxe et Motivation Personnelle</h3>
                            <p class="box-text text-light ">Un coach de boxe concentré, prêt à guider ses élèves vers leurs objectifs. L'entraînement au punching-ball est un excellent moyen de développer la force, l'agilité et la discipline. Chaque coup porté est un pas de plus vers la maîtrise de soi et la résilience mentale.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="process-card">
                        <div class="process-card-thumb">
                            <img src="assets/img/photos 2/Photos/889A3832 (1).jpg" alt="img" loading="lazy">
                            <p class="box-number">
                                <span class="bg-shape">
                                    <svg width="88" height="34" viewBox="0 0 88 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M63.1937 3.77333C69.2789 6.26448 74.808 9.91582 79.4654 14.5189C82.8438 17.8578 85.7155 21.6501 88 25.7767C51.0219 40.1521 16.916 32.7165 0 25.7767C2.28451 21.6501 5.1562 17.8578 8.53458 14.5189C13.192 9.91582 18.7211 6.26448 24.8063 3.77333C30.8914 1.28218 37.4135 0 44 0C50.5865 0 57.1086 1.28218 63.1937 3.77333Z" fill="currentColor" />
                                    </svg>
                                </span>
                                ÉTAPE-02
                            </p>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title text-white">Pratique du Fitness</h3>
                            <p class="box-text text-light ">Les salles de sport s'adaptent à différents niveaux et préférences de condition physique, répondant aussi bien aux débutants qu'aux personnes expérimentées.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="process-card">
                        <div class="process-card-thumb">
                            <img src="assets/img/photos 2/photos/889A3767 (1).jpg" alt="img" loading="lazy">
                            <p class="box-number">
                                <span class="bg-shape">
                                    <svg width="88" height="34" viewBox="0 0 88 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M63.1937 3.77333C69.2789 6.26448 74.808 9.91582 79.4654 14.5189C82.8438 17.8578 85.7155 21.6501 88 25.7767C51.0219 40.1521 16.916 32.7165 0 25.7767C2.28451 21.6501 5.1562 17.8578 8.53458 14.5189C13.192 9.91582 18.7211 6.26448 24.8063 3.77333C30.8914 1.28218 37.4135 0 44 0C50.5865 0 57.1086 1.28218 63.1937 3.77333Z" fill="currentColor" />
                                    </svg>
                                </span>
                                ÉTAPE-03
                            </p>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title text-white">Accomplissement</h3>
                            <p class="box-text text-light ">Les cours de fitness collectifs dirigés par des instructeurs offrent des entraînements structurés dans un environnement de groupe motivant.</p>
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
<section class="overflow-hidden bg-smoke space" id="service-sec">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6">
                <div class="title-area text-lg-start text-center">
                    <span class="sub-title after-lg-none">Salle de sport et entraînement physique</span>
                    <h2 class="sec-title">Nos cours de fitness en salle</h2>
                </div>
            </div>
            <div class="col-lg-auto">
                <div class="sec-btn">
                    <a href="service.html" class="th-btn style2">Voir tous les cours</a>
                </div>
            </div>

        </div>
        <?php
        $svg = ' <svg width="76" height="65" viewBox="0 0 76 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 7.99512C0 12.4134 3.58172 15.9951 8 15.9951C12.4183 15.9951 16 12.4134 16 7.99512C16 3.57684 12.4183 -0.00488281 8 -0.00488281C3.58172 -0.00488281 0 3.57684 0 7.99512ZM60 56.9951C60 61.4134 63.5817 64.9951 68 64.9951C72.4183 64.9951 76 61.4134 76 56.9951C76 52.5768 72.4183 48.9951 68 48.9951C63.5817 48.9951 60 52.5768 60 56.9951ZM8 9.49512C17.1248 9.49512 23.1218 12.416 27.5822 16.7296C32.1162 21.1145 35.1398 27.0032 38.1529 33.1549C41.1183 39.2093 44.0916 45.5667 48.5239 50.3575C53.046 55.2454 59.0648 58.4951 68 58.4951V55.4951C59.9352 55.4951 54.704 52.6199 50.7261 48.3202C46.6584 43.9235 43.8817 38.031 40.8471 31.8353C37.8602 25.737 34.6338 19.3757 29.6678 14.5731C24.6282 9.69928 17.8752 6.49512 8 6.49512V9.49512Z" fill="currentColor" />
                            </svg>'; ?>
        <div class="row gy-30 gx-60 justify-content-center">
            <div class="col-xl-3">
                <div class="nav tab-menu1 service-tab-btn" role="tablist">
                    <button class="tab-btn active" id="nav-one-tab" data-bs-toggle="tab" data-bs-target="#nav-one" role="tab" aria-controls="nav-one" aria-selected="true">
                        Reaxing
                        <span class="active-shape">
                            <?php echo $svg; ?>
                        </span>
                    </button>
                    <button class="tab-btn" id="nav-two-tab" data-bs-toggle="tab" data-bs-target="#nav-two" role="tab" aria-controls="nav-two" aria-selected="false">
                        Entraînement personnel
                        <span class="active-shape">
                            <?php echo $svg; ?>
                        </span>
                    </button>
                    <button class="tab-btn" id="nav-three-tab" data-bs-toggle="tab" data-bs-target="#nav-three" role="tab" aria-controls="nav-three" aria-selected="false">
                        Entraînement Mixte
                        <span class="active-shape">
                            <?php echo $svg; ?>
                        </span>
                    </button>
                    <button class="tab-btn" id="nav-four-tab" data-bs-toggle="tab" data-bs-target="#nav-four" role="tab" aria-controls="nav-four" aria-selected="false">
                        Entraînement CrossFit
                        <span class="active-shape">
                            <?php echo $svg; ?>
                        </span>
                    </button>
                    <button class="tab-btn" id="nav-five-tab" data-bs-toggle="tab" data-bs-target="#nav-five" role="tab" aria-controls="nav-five" aria-selected="false">
                        Yoga et Pilates
                        <span class="active-shape">
                            <?php echo $svg; ?>
                        </span>
                    </button>

                </div>
            </div>

            <div class="col-xl-9">
                <div class="tab-content">
                    <!-- Élément d'onglet 1 -->
                    <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                        <div class="service-card-wrap1">
                            <div class="service-bg-shape">
                                <img src="assets/img/bg/service-card-bg-shape1-1.png" alt="Icône">
                            </div>
                            <div class="service-shadow-icon">
                                <img src="assets/img/icon/service_shadow_icon1-1.svg" alt="Icône">
                            </div>
                            <div class="row gx-40 gy-40">
                                <div class="col-lg-6">
                                    <div class="box-img">
                                        <video autoplay loop muted playsinline style="width:100%;height:100%;object-fit:cover;">
                                            <source src="assets/img/Photos 2/Photos/Privilège - Reaxing Machin.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-card">
                                        <div class="box-icon">
                                            <img src="assets/img/icon/service_icon1-1.svg" alt="Icône">
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Reaxing</a></h3>
                                        <p class="box-text">Le Reaxing combine des exercices innovants et des mouvements imprévisibles pour améliorer la coordination, la réactivité et l'équilibre, tout en offrant une expérience d'entraînement engageante et stimulante.</p>

                                        <a class="th-btn" href="service-details.html">Voir les détails</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Élément d'onglet 2 -->
                    <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                        <div class="service-card-wrap1">
                            <div class="service-bg-shape">
                                <img src="assets/img/bg/service-card-bg-shape1-1.png" alt="Icône">
                            </div>
                            <div class="service-shadow-icon">
                                <img src="assets/img/icon/service_shadow_icon1-2.svg" alt="Icône">
                            </div>
                            <div class="row gx-40 gy-40">
                                <div class="col-lg-6">
                                    <div class="box-img">
                                        <video autoplay loop muted playsinline style="width:100%;height:100%;object-fit:cover;">
                                            <source src="assets/img/Photos 2/Photos/Privilège - Coaching.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-card">
                                        <div class="box-icon">
                                            <img src="assets/img/icon/service_icon1-2.svg" alt="Icône">
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Entraînement personnel</a></h3>
                                        <p class="box-text">L'entraînement personnel offre un accompagnement sur mesure pour atteindre vos objectifs de fitness. Avec des programmes personnalisés et un suivi adapté, il permet d'améliorer vos performances, de renforcer votre motivation et d'optimiser vos résultats, tout en respectant votre rythme et vos besoins spécifiques.</p>

                                        <a class="th-btn" href="service-details.html">Voir les détails</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Élément d'onglet 3 -->
                    <!-- <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">
                        <div class="service-card-wrap1">
                            <div class="service-bg-shape">
                                <img src="assets/img/bg/service-card-bg-shape1-1.png" alt="Icône">
                            </div>
                            <div class="service-shadow-icon">
                                <img src="assets/img/icon/service_shadow_icon1-3.svg" alt="Icône">
                            </div>
                            <div class="row gx-40 gy-40">
                                <div class="col-lg-6">
                                    <div class="box-img">
                                        <img src="assets/img/service/service_card_1_3.png" alt="Service">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-card">
                                        <div class="box-icon">
                                            <img src="assets/img/icon/service_icon1-3.svg" alt="Icône">
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Cours de boxe</a></h3>
                                        <p class="box-text">Les tapis roulants, vélos stationnaires et machines elliptiques sont couramment utilisés pour les entraînements cardiovasculaires, aidant à améliorer l'endurance, brûler des calories et renforcer la santé cardiaque.</p>
                                        <div class="author-wrap">
                                            <div class="author-wrap-content">
                                                <div class="author-thumb">
                                                    <img src="assets/img/service/service_card_author_1_1.png" alt="Icône">
                                                </div>
                                                <div class="content">
                                                    <h4 class="author-name"><a href="service-details.html">Esa Elizabed</a></h4>
                                                    <p class="desig">Entraîneur Fitness</p>
                                                </div>
                                            </div>
                                            <div class="author-wrap-contact">
                                                <p class="contact-text">Appelez-moi</p>
                                                <a class="contact-link" href="tel:16365896547">+ 163-6589-6547</a>
                                            </div>
                                        </div>
                                        <a class="th-btn" href="service-details.html">Voir les détails</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- tab item 4 -->
                    <div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab">
                        <div class="service-card-wrap1">
                            <div class="service-bg-shape">
                                <img src="assets/img/bg/service-card-bg-shape1-1.png" alt="Icon">
                            </div>
                            <div class="service-shadow-icon">
                                <img src="assets/img/icon/service_shadow_icon1-4.svg" alt="Icon">
                            </div>
                            <div class="row gx-40 gy-40">
                                <div class="col-lg-6">
                                    <div class="box-img">
                                        <video autoplay loop muted playsinline style="width:100%;height:100%;object-fit:cover;">
                                            <source src="assets/img/Photos 2/Photos/Privilège - Coach v3.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-card">
                                        <div class="box-icon">
                                            <img src="assets/img/icon/service_icon1-4.svg" alt="Icon">
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">CrossFit Training</a></h3>
                                        <p class="box-text">Treadmills, stationary bikes, and elliptical machines are commonly used for cardiovascular workouts, helping to improve endurance, burn calories, and enhance heart health.</p>

                                        <a class="th-btn" href="service-details.html">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Élément d'onglet 3 -->
                    <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">
                        <div class="service-card-wrap1">
                            <div class="service-bg-shape">
                                <img src="assets/img/bg/service-card-bg-shape1-1.png" alt="Icône">
                            </div>
                            <div class="service-shadow-icon">
                                <img src="assets/img/icon/service_shadow_icon1-3.svg" alt="Icône">
                            </div>
                            <div class="row gx-40 gy-40">
                                <div class="col-lg-6">
                                    <div class="box-img">
                                        <video autoplay loop muted playsinline style="width:100%;height:100%;object-fit:cover;">
                                            <source src="assets/img/Photos 2/Photos/Privilège - Mix Workout.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-card">
                                        <div class="box-icon">
                                            <img src="assets/img/icon/service_icon1-3.svg" alt="Icône">
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Entraînement Mixte</a></h3>
                                        <p class="box-text">L'entraînement mixte combine des exercices cardiovasculaires et de renforcement musculaire pour améliorer la condition physique globale, la coordination et la performance. Il est adapté à tous les niveaux et objectifs.</p>

                                        <div class="author-wrap">
                                            <div class="author-wrap-content">
                                                <div class="author-thumb">
                                                    <img src="assets/img/service/service_card_author_1_1.png" alt="Icône">
                                                </div>
                                                <div class="content">
                                                    <h4 class="author-name"><a href="service-details.html">Esa Elizabed</a></h4>
                                                    <p class="desig">Entraîneur Fitness</p>
                                                </div>
                                            </div>
                                            <div class="author-wrap-contact">
                                                <p class="contact-text">Appelez-moi</p>
                                                <a class="contact-link" href="tel:16365896547">+ 163-6589-6547</a>
                                            </div>
                                        </div>
                                        <a class="th-btn" href="service-details.html">Voir les détails</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Élément d'onglet 5 -->
                    <div class="tab-pane fade" id="nav-five" role="tabpanel" aria-labelledby="nav-five-tab">
                        <div class="service-card-wrap1">
                            <div class="service-bg-shape">
                                <img src="assets/img/bg/service-card-bg-shape1-1.png" alt="Icône">
                            </div>
                            <div class="service-shadow-icon">
                                <img src="assets/img/icon/service_shadow_icon1-5.svg" alt="Icône">
                            </div>
                            <div class="row gx-40 gy-40">
                                <div class="col-lg-6">
                                    <div class="box-img">
                                        <video autoplay loop muted playsinline style="width:100%;height:100%;object-fit:cover;">
                                            <source src="assets/img/Photos 2/Photos/Privilège Beauty & Spa - General v3.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-card">
                                        <div class="box-icon">
                                            <img src="assets/img/icon/service_icon1-5.svg" alt="Icône">
                                        </div>
                                        <h3 class="box-title"><a href="service-details.html">Beauty & Spa</a></h3>
                                        <p class="box-text">Découvrez un espace dédié à votre bien-être et votre relaxation. Profitez de nos soins spa, massages relaxants, et traitements de beauté, dans un cadre apaisant conçu pour revitaliser votre corps et esprit.</p>

                                        <a class="th-btn" href="service-details.html">Voir les détails</a>
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
Why Choose Us Area  
==============================-->
<div class="why-sec-1 overflow-hidden space">
    <div class="container">
        <div class="row gy-60 gx-60 justify-content-between flex-row-reverse align-items-center">
            <div class="col-xxl-5 col-xl-6">
                <div class="why-img-box">
                    <div class="img1">
                        <img src="assets/img/photos 2/Photos/889A1640-HDR-1 (1).jpg" alt="img" loading="lazy">
                    </div>
                    <div class="img2">
                        <img src="assets/img/photos 2/photos/889A9761.jpg" alt="img" loading="lazy">
                    </div>
                </div>
            </div>
            <div class="col-xxl-7 col-xl-6">
                <div class="why-wrap-1">
                    <div class="title-area mb-30">
                        <span class="sub-title after-none">Pourquoi Nous Choisir</span>
                        <h2 class="sec-title text-white">Un Entraînement Fitness de Luxe pour le Corps et l'Esprit</h2>
                        <p class="text-light mt-4 mb-30">Chez Privilège Luxury Fitness, nous offrons une expérience unique alliant bien-être, élégance et performance. Nos installations modernes, associées à des services premium, sont conçues pour répondre aux attentes des membres les plus exigeants. Profitez d'entraînements personnalisés, de cours exclusifs et d'un espace dédié à la détente et au raffinement.</p>
                    </div>
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="checklist style2 style-white">
                                <ul>
                                    <li>Entraînements Personnalisés</li>
                                    <li>Cours Collectifs Exclusifs</li>
                                    <li>Espaces de Détente Élégants</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checklist style2 style-white">
                                <ul>
                                    <li>Équipements Haut de Gamme</li>
                                    <li>Accompagnement par des Experts</li>
                                    <li>Ambiance Confort et Luxe</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrap mt-40">
                        <a href="about.html" class="th-btn style2">En Savoir Plus</a>
                        <a href="contact.html" class="th-btn style3">Nous Contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
Team Area  
==============================-->
<section class="space team-area-1" data-bg-src="assets/img/bg/team_bg_1_1.png" data-overlay="smoke" data-opacity="7">
    <div class="container z-index-common">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-8">
                <div class="title-area text-center">
                    <span class="sub-title">Nos Coachs</span>
                    <h2 class="sec-title">Rencontrez Nos Coachs Qualifiés</h2>
                </div>

            </div>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="teamSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/team/team_1_1.png" alt="Team">
                                    <div class="hover-img">
                                        <img src="assets/img/team/team_1_1-hover.png" alt="Team">
                                    </div>
                                </div>
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
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Jhon Williams</a></h3>
                                <span class="team-desig">Fitness Trainer</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/team/team_1_2.png" alt="Team">
                                    <div class="hover-img">
                                        <img src="assets/img/team/team_1_2-hover.png" alt="Team">
                                    </div>
                                </div>
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
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Henry Joseph</a></h3>
                                <span class="team-desig">Gym Trainer</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/team/team_1_3.png" alt="Team">
                                    <div class="hover-img">
                                        <img src="assets/img/team/team_1_3-hover.png" alt="Team">
                                    </div>
                                </div>
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
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Esa Elizabed</a></h3>
                                <span class="team-desig">Fitness Trainer</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/team/team_1_4.png" alt="Team">
                                    <div class="hover-img">
                                        <img src="assets/img/team/team_1_4-hover.png" alt="Team">
                                    </div>
                                </div>
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
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Henry Carlose</a></h3>
                                <span class="team-desig">Gym Trainer</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/team/team_1_1.png" alt="Team">
                                    <div class="hover-img">
                                        <img src="assets/img/team/team_1_1-hover.png" alt="Team">
                                    </div>
                                </div>
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
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Jhon Williams</a></h3>
                                <span class="team-desig">Fitness Trainer</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/team/team_1_2.png" alt="Team">
                                    <div class="hover-img">
                                        <img src="assets/img/team/team_1_2-hover.png" alt="Team">
                                    </div>
                                </div>
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
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Henry Joseph</a></h3>
                                <span class="team-desig">Gym Trainer</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/team/team_1_3.png" alt="Team">
                                    <div class="hover-img">
                                        <img src="assets/img/team/team_1_3-hover.png" alt="Team">
                                    </div>
                                </div>
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
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Esa Elizabed</a></h3>
                                <span class="team-desig">Fitness Trainer</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/team/team_1_4.png" alt="Team">
                                    <div class="hover-img">
                                        <img src="assets/img/team/team_1_4-hover.png" alt="Team">
                                    </div>
                                </div>
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
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Henry Carlose</a></h3>
                                <span class="team-desig">Gym Trainer</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button data-slider-prev="#teamSlider1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#teamSlider1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>

<!--==============================
Gallery Area  
==============================-->
<!-- <div class="overflow-hidden space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Our Portfolio</span>
            <h2 class="sec-title text-white">Our Portfolio Gallery</h2>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="slider-area">
            <div class="swiper th-slider gallery-slider1" id="gallerySlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"3"}},"centeredSlides": "true"}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="gallery-card">
                            <div class="box-img">
                                <img src="assets/img/project/project_1_1.png" alt="gallery image">
                            </div>
                            <div class="box-content">
                                <div class="media-body">
                                    <p class="box-subtitle">GYM FITNESS</p>
                                    <h3 class="box-title"><a href="class-details.html">Body Fitness Workout</a></h3>
                                </div>
                                <div class="box-number">
                                    01 </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-card">
                            <div class="box-img">
                                <img src="assets/img/project/project_1_2.png" alt="gallery image">
                            </div>
                            <div class="box-content">
                                <div class="media-body">
                                    <p class="box-subtitle">HOLISTIC APPROACH</p>
                                    <h3 class="box-title"><a href="class-details.html">Personalized Workout</a></h3>
                                </div>
                                <div class="box-number">
                                    02 </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-card">
                            <div class="box-img">
                                <img src="assets/img/project/project_1_3.png" alt="gallery image">
                            </div>
                            <div class="box-content">
                                <div class="media-body">
                                    <p class="box-subtitle">COMMUNITY & MOTIVATION</p>
                                    <h3 class="box-title"><a href="class-details.html">Expert Guidance</a></h3>
                                </div>
                                <div class="box-number">
                                    03 </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-card">
                            <div class="box-img">
                                <img src="assets/img/project/project_1_4.png" alt="gallery image">
                            </div>
                            <div class="box-content">
                                <div class="media-body">
                                    <p class="box-subtitle">STRONGHOLD FITNESS</p>
                                    <h3 class="box-title"><a href="class-details.html">Nutritional Support</a></h3>
                                </div>
                                <div class="box-number">
                                    04 </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-card">
                            <div class="box-img">
                                <img src="assets/img/project/project_1_1.png" alt="gallery image">
                            </div>
                            <div class="box-content">
                                <div class="media-body">
                                    <p class="box-subtitle">GYM FITNESS</p>
                                    <h3 class="box-title"><a href="class-details.html">Body Fitness Workout</a></h3>
                                </div>
                                <div class="box-number">
                                    01 </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-card">
                            <div class="box-img">
                                <img src="assets/img/project/project_1_2.png" alt="gallery image">
                            </div>
                            <div class="box-content">
                                <div class="media-body">
                                    <p class="box-subtitle">HOLISTIC APPROACH</p>
                                    <h3 class="box-title"><a href="class-details.html">Personalized Workout</a></h3>
                                </div>
                                <div class="box-number">
                                    02 </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-card">
                            <div class="box-img">
                                <img src="assets/img/project/project_1_3.png" alt="gallery image">
                            </div>
                            <div class="box-content">
                                <div class="media-body">
                                    <p class="box-subtitle">COMMUNITY & MOTIVATION</p>
                                    <h3 class="box-title"><a href="class-details.html">Expert Guidance</a></h3>
                                </div>
                                <div class="box-number">
                                    03 </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-card">
                            <div class="box-img">
                                <img src="assets/img/project/project_1_4.png" alt="gallery image">
                            </div>
                            <div class="box-content">
                                <div class="media-body">
                                    <p class="box-subtitle">STRONGHOLD FITNESS</p>
                                    <h3 class="box-title"><a href="class-details.html">Nutritional Support</a></h3>
                                </div>
                                <div class="box-number">
                                    04 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-pagination"></div>
            </div>
        </div>
    </div>
</div> -->



<!--==============================
Testimonial Area  
==============================-->
<section class="testi-area-1 bg-black2 space overflow-hidden" id="testi-sec">
    <div class="shape-mockup testi-bg-thumb1-1 d-xl-block d-none" data-top="0" data-left="0" data-bottom="0">
        <img src="assets/img/photos 2/photos/889A6645.jpg" alt="img">
    </div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-9">
                <div class="row gy-60 gx-60 align-items-center">
                    <div class="col-lg-5">
                        <div class="swiper th-slider testi-thumb-slider1" data-slider-options='{"effect":"fade","loop":true}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testi-box-img">
                                        <img src="assets/img/testimonial/testi_1_1.png" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-box-img">
                                        <img src="assets/img/testimonial/testi_1_2.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="title-area">
                            <span class="sub-title after-none">Témoignages</span>
                            <h2 class="sec-title text-white">Que disent nos clients ?</h2>
                        </div>
                        <div class="testi-slider1">
                            <div class="swiper th-slider" id="testiSlide1" data-slider-options='{"effect":"fade", "autoHeight": "true", "thumbs":{"swiper":".testi-thumb-slider1"}}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testi-card">
                                            <p class="testi-card_text">« De nombreuses personnes bénéficient de plans d'entraînement personnalisés conçus par des professionnels du fitness ou des entraîneurs personnels pour atteindre des objectifs spécifiques, tels que le gain musculaire, la perte de poids ou l'amélioration des performances athlétiques. »</p>
                                            <div class="testi-card_review">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="testi-card_profile">
                                                <div class="testi-card_content">
                                                    <h3 class="testi-card_name">Alex Furnandes</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-card">
                                            <p class="testi-card_text">« L'équipe de Baroque est incroyablement dévouée, compétente et solidaire. Le produit fini était magnifique et valait chaque centime. Je recommanderais absolument Baroque pour la perte de poids ou l'amélioration des performances athlétiques. »</p>
                                            <div class="testi-card_review">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="testi-card_profile">
                                                <div class="testi-card_content">
                                                    <h3 class="testi-card_name">Brooklyn Simmons</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="icon-box">
                        <button data-slider-prev="#testiSlide1" class="slider-arrow default slider-prev"><i class="far fa-angle-left"></i></button>
                        <button data-slider-next="#testiSlide1" class="slider-arrow default slider-next"><i class="far fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Contact Area
==============================-->
<div class=" contact-area-1 position-relative z-index-common overflow-hidden space">
    <div class="container">
        <div class="row">

            <div class="col-xl-5">
                <div class="contact-wrap1 bg-black2">
                    <div class="title-area mb-40">
                        <h4 class="sec-title text-white">Informations de Contact</h4>
                    </div>
                    <div class="contact-feature">
                        <div class="box-icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title h5 text-white">Horaires d'ouverture</h3>
                            <p class="box-text">
                                Tous les jours de 6h à 23h
                            </p>
                        </div>
                    </div>
                    <div class="contact-feature">
                        <div class="box-icon">
                            <i class="far fa-location-dot"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title h5 text-white">Adresse</h3>
                            <p class="box-text">709 Bd Modibo Keita, Casablanca 20000</p>
                        </div>
                    </div>
                    <div class="contact-feature">
                        <div class="box-icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title h5 text-white">Adresse Email</h3>
                            <p class="box-text"><a href="mailto:privilege@capitalsoft.com">privilege@capitalsoft.com</a></p>
                        </div>
                    </div>
                    <div class="contact-feature">
                        <div class="box-icon">
                            <i class="far fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title h5 text-white">Numéro de Téléphone</h3>
                            <p class="box-text"><a href="tel:+212522831616">+212 522 831 616</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-7">
                <div class="contact-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.6801329290956!2d-7.620396123704517!3d33.56168614347283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda62d007599f39f%3A0xd085843203c19729!2sPrivil%C3%A8ge%20Luxury%20Fitness%20Club!5e0!3m2!1sfr!2sma!4v1736154412824!5m2!1sfr!2sma"
                        width="600"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
Brand Area  
==============================-->
<div class="space-bottom brand-area-2">
    <div class="container-fluid">
        <div class="swiper th-slider text-center" id="brandSlider2" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"5"},"1500":{"slidesPerView":"6"}}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="assets/img/brand/brand_2_1-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="assets/img/brand/brand_2_1.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="assets/img/brand/brand_2_2-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="assets/img/brand/brand_2_2.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="assets/img/brand/brand_2_3-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="assets/img/brand/brand_2_3.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="assets/img/brand/brand_2_4-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="assets/img/brand/brand_2_4.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="assets/img/brand/brand_2_5-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="assets/img/brand/brand_2_5.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="assets/img/brand/brand_2_6-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="assets/img/brand/brand_2_6.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="assets/img/brand/brand_2_1-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="assets/img/brand/brand_2_1.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="assets/img/brand/brand_2_2-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="assets/img/brand/brand_2_2.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="assets/img/brand/brand_2_3-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="assets/img/brand/brand_2_3.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="assets/img/brand/brand_2_4-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="assets/img/brand/brand_2_4.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="assets/img/brand/brand_2_5-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="assets/img/brand/brand_2_5.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="assets/img/brand/brand_2_6-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="assets/img/brand/brand_2_6.svg" alt="Brand Logo">
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
require "inc/footer.php";
require "inc/foot.php";; ?>