<?php
require "../inc/head.php";
require "../inc/header.php"; ?>
<style>
    .service-photo-card {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        height: 280px;
    }
    .service-photo-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .service-photo-card:hover img {
        transform: scale(1.07);
    }
    .service-photo-card .overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.1) 60%);
        display: flex;
        align-items: flex-end;
        padding: 24px 20px;
    }
    .service-photo-card .overlay h4 {
        color: #fff;
        font-size: 18px;
        font-weight: 700;
        margin: 0;
    }
    .service-photo-card .overlay span {
        color: var(--theme-color, #c9a96e);
        font-size: 13px;
    }
    .gallery-grid img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        border-radius: 10px;
        transition: transform 0.4s ease, opacity 0.4s;
    }
    .gallery-grid img:hover {
        transform: scale(1.04);
        opacity: 0.9;
    }
</style>

<!--==============================
    Breadcumb
==============================-->
<div class="breadcumb-wrapper" data-bg-src="<?php echo $path; ?>/assets/img/bg/breadcumb-bg.jpg">
    <div class="breadcumb-shape1"></div>
    <div class="breadcumb-shape2"></div>
    <div class="breadcumb-shape3"></div>
    <div class="breadcumb-shape4"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Nos Services</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="../">Accueil</a></li>
                        <li>Nos Services</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 d-lg-block d-none align-self-end">
                <div class="breadcumb-thumb">
                    <img src="<?php echo $path; ?>/assets/img/normal/breadcumb-thumb.png" alt="img">
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
Services avec Photos
==============================-->
<section class="space">
    <div class="container">
        <div class="title-area text-center mb-50">
            <span class="sub-title">Ce Que Nous Offrons</span>
            <h2 class="sec-title text-white">Des Services Premium pour Votre Bien-être</h2>
            <p class="text-light mt-3 mx-auto" style="max-width:650px">Privilège Luxury Fitness Club vous propose une gamme complète de services haut de gamme pour un accompagnement total : corps, esprit et beauté.</p>
        </div>

        <!-- Photo Cards Row 1 -->
        <div class="row gy-24 gx-24 mb-4">
            <div class="col-xl-4 col-md-6">
                <div class="service-photo-card">
                    <img src="<?php echo $path; ?>/assets/img/photos 2/Photos/889A6634 (1).jpg" alt="CrossFit Privilège" loading="lazy">
                    <div class="overlay">
                        <div>
                            <span>Salle Dédiée</span>
                            <h4>CrossFit</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="service-photo-card">
                    <img src="<?php echo $path; ?>/assets/img/Photos/889A9532-HDR.jpg" alt="Reaxing Privilège" loading="lazy">
                    <div class="overlay">
                        <div>
                            <span>Unique au Maroc</span>
                            <h4>Reaxing</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="service-photo-card">
                    <img src="<?php echo $path; ?>/assets/img/Photos/889A9543-HDR.jpg" alt="Yoga & Pilates Privilège" loading="lazy">
                    <div class="overlay">
                        <div>
                            <span>Cours Collectifs</span>
                            <h4>Yoga & Pilates</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="service-photo-card">
                    <img src="<?php echo $path; ?>/assets/img/photos 2/Photos/889A3832 (1).jpg" alt="Coaching Personnel Privilège" loading="lazy">
                    <div class="overlay">
                        <div>
                            <span>Programme sur Mesure</span>
                            <h4>Coaching Personnel</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="service-photo-card">
                    <img src="<?php echo $path; ?>/assets/img/Photos/889A9577.jpg" alt="Fitness & Musculation Privilège" loading="lazy">
                    <div class="overlay">
                        <div>
                            <span>Équipements Dernière Génération</span>
                            <h4>Fitness & Musculation</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="service-photo-card">
                    <img src="<?php echo $path; ?>/assets/img/Photos/889A9579.jpg" alt="Beauty & Spa Privilège" loading="lazy">
                    <div class="overlay">
                        <div>
                            <span>Détente & Beauté</span>
                            <h4>Beauty & Spa</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service cards texte -->
        <div class="row gy-30 gx-30 mt-50 justify-content-center">
            <div class="col-xl-4 col-md-6">
                <div class="service-card4">
                    <div class="service-card-bg-shape">
                        <img src="<?php echo $path; ?>/assets/img/bg/feature-card-bg-shape1-1.png" alt="img">
                    </div>
                    <div class="box-content">
                        <div class="service-card-icon">
                            <img src="<?php echo $path; ?>/assets/img/icon/service_icon4-1.svg" alt="CrossFit">
                        </div>
                        <h3 class="box-title"><a href="#">CrossFit</a></h3>
                        <p class="box-text">Entraînements haute intensité combinant cardio, haltérophilie et exercices au poids du corps. Adapté à tous les niveaux, le CrossFit à Privilège est encadré par des coachs certifiés.</p>
                        <a href="../Contact/" class="link-btn style4">Nous Rejoindre<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="service-card4">
                    <div class="service-card-bg-shape">
                        <img src="<?php echo $path; ?>/assets/img/bg/feature-card-bg-shape1-1.png" alt="img">
                    </div>
                    <div class="box-content">
                        <div class="service-card-icon">
                            <img src="<?php echo $path; ?>/assets/img/icon/healthy.png" alt="Reaxing">
                        </div>
                        <h3 class="box-title"><a href="#">Reaxing</a></h3>
                        <p class="box-text">Technologie unique au Maroc. Le Reaxing améliore la coordination, la réactivité et l'équilibre grâce à des machines innovantes. Une expérience ludique et très efficace pour le corps.</p>
                        <a href="../Contact/" class="link-btn style4">Nous Rejoindre<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="service-card4">
                    <div class="service-card-bg-shape">
                        <img src="<?php echo $path; ?>/assets/img/bg/feature-card-bg-shape1-1.png" alt="img">
                    </div>
                    <div class="box-content">
                        <div class="service-card-icon">
                            <img src="<?php echo $path; ?>/assets/img/icon/yoga.png" alt="Yoga">
                        </div>
                        <h3 class="box-title"><a href="#">Yoga & Pilates</a></h3>
                        <p class="box-text">Des cours collectifs animés par des instructeurs certifiés dans un espace calme et raffiné. Renforcez votre corps, améliorez votre posture et retrouvez équilibre mental et sérénité.</p>
                        <a href="../Contact/" class="link-btn style4">Nous Rejoindre<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="service-card4">
                    <div class="service-card-bg-shape">
                        <img src="<?php echo $path; ?>/assets/img/bg/feature-card-bg-shape1-1.png" alt="img">
                    </div>
                    <div class="box-content">
                        <div class="service-card-icon">
                            <img src="<?php echo $path; ?>/assets/img/icon/service_icon4-2.svg" alt="Coaching">
                        </div>
                        <h3 class="box-title"><a href="#">Coaching Personnel</a></h3>
                        <p class="box-text">Un programme 100% personnalisé élaboré par votre coach dédié. Suivi nutrition, bilan de forme, objectifs définis ensemble. Résultats garantis grâce à un accompagnement individuel rigoureux.</p>
                        <a href="../Contact/" class="link-btn style4">Nous Rejoindre<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="service-card4">
                    <div class="service-card-bg-shape">
                        <img src="<?php echo $path; ?>/assets/img/bg/feature-card-bg-shape1-1.png" alt="img">
                    </div>
                    <div class="box-content">
                        <div class="service-card-icon">
                            <img src="<?php echo $path; ?>/assets/img/icon/service_icon4-3.svg" alt="Musculation">
                        </div>
                        <h3 class="box-title"><a href="#">Fitness & Musculation</a></h3>
                        <p class="box-text">Vaste espace équipé des meilleures machines de musculation et appareils cardio. Haltères, câbles, bancs et machines guidées — tout ce dont vous avez besoin pour sculpter votre corps.</p>
                        <a href="../Contact/" class="link-btn style4">Nous Rejoindre<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="service-card4">
                    <div class="service-card-bg-shape">
                        <img src="<?php echo $path; ?>/assets/img/bg/feature-card-bg-shape1-1.png" alt="img">
                    </div>
                    <div class="box-content">
                        <div class="service-card-icon">
                            <img src="<?php echo $path; ?>/assets/img/icon/service_icon4-4.svg" alt="Spa">
                        </div>
                        <h3 class="box-title"><a href="#">Beauty & Spa</a></h3>
                        <p class="box-text">Hammam, massages relaxants et soins du corps dans un cadre luxueux. Notre espace spa est conçu pour vous offrir une détente totale après votre entraînement ou en dehors.</p>
                        <a href="../Contact/" class="link-btn style4">Nous Rejoindre<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Galerie Photos
==============================-->
<section class="space-bottom bg-black2">
    <div class="container">
        <div class="title-area text-center mb-50">
            <span class="sub-title">Notre Club en Images</span>
            <h2 class="sec-title text-white">Découvrez Nos Installations</h2>
        </div>
        <div class="row gy-20 gx-20 gallery-grid">
            <div class="col-xl-3 col-md-4 col-6">
                <img src="<?php echo $path; ?>/assets/img/Photos/889A9584.jpg" alt="Privilège Fitness" loading="lazy">
            </div>
            <div class="col-xl-3 col-md-4 col-6">
                <img src="<?php echo $path; ?>/assets/img/Photos/889A9585.jpg" alt="Privilège Fitness" loading="lazy">
            </div>
            <div class="col-xl-3 col-md-4 col-6">
                <img src="<?php echo $path; ?>/assets/img/Photos/889A9596-1.jpg" alt="Privilège Fitness" loading="lazy">
            </div>
            <div class="col-xl-3 col-md-4 col-6">
                <img src="<?php echo $path; ?>/assets/img/Photos/889A9599.jpg" alt="Privilège Fitness" loading="lazy">
            </div>
            <div class="col-xl-3 col-md-4 col-6">
                <img src="<?php echo $path; ?>/assets/img/Photos/889A9602.jpg" alt="Privilège Fitness" loading="lazy">
            </div>
            <div class="col-xl-3 col-md-4 col-6">
                <img src="<?php echo $path; ?>/assets/img/Photos/889A9617.jpg" alt="Privilège Fitness" loading="lazy">
            </div>
            <div class="col-xl-3 col-md-4 col-6">
                <img src="<?php echo $path; ?>/assets/img/Photos/889A9630.jpg" alt="Privilège Fitness" loading="lazy">
            </div>
            <div class="col-xl-3 col-md-4 col-6">
                <img src="<?php echo $path; ?>/assets/img/Photos/889A9641.jpg" alt="Privilège Fitness" loading="lazy">
            </div>
        </div>
    </div>
</section>

<?php
require "../inc/footer.php";
require "../inc/foot.php"; ?>
