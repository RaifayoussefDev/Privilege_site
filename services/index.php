<?php
require "../inc/head.php";
require "../inc/header.php"; ?>
<style>
    .box-text {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* Limite à 3 lignes */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="<?php echo $path; ?>/assets/img/bg/breadcumb-bg.jpg">
    <div class="breadcumb-shape1"></div>
    <div class="breadcumb-shape2"></div>
    <div class="breadcumb-shape3"></div>
    <div class="breadcumb-shape4"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Services</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>Services</li>
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
</div><!--==============================
Feature Area  
==============================-->
<section class="space">
    <div class="container">
        <div class="row gy-30 gx-30 justify-content-center">
            <div class="col-xl-4 col-md-6">
                <div class="service-card4">
                    <div class="service-card-bg-shape">
                        <img src="<?php echo $path; ?>/assets/img/bg/feature-card-bg-shape1-1.png" alt="img">
                    </div>
                    <div class="box-content">
                        <div class="service-card-icon">
                            <img src="<?php echo $path; ?>/assets/img/icon/service_icon4-1.svg" alt="Icône">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Gym & Entraînement Fitness</a></h3>
                        <p class="box-text">Les salles de sport s'adaptent à différents niveaux de condition physique et préférences, convenant aux débutants comme aux personnes expérimentées. Elles mettent l'accent sur la sécurité et l'hygiène des équipements.</p>
                        <a href="service-details.html" class="link-btn style4">En savoir plus<i class="fas fa-arrow-right ms-2"></i></a>
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
                            <img src="<?php echo $path; ?>/assets/img/icon/service_icon4-2.svg" alt="Icône">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Entraînement Personnel</a></h3>
                        <p class="box-text">Les tapis roulants, vélos stationnaires et machines elliptiques sont souvent utilisés pour des entraînements cardio, améliorant l'endurance et brûlant des calories.</p>
                        <a href="service-details.html" class="link-btn style4">En savoir plus<i class="fas fa-arrow-right ms-2"></i></a>
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
                            <img src="<?php echo $path; ?>/assets/img/icon/service_icon4-3.svg" alt="Icône">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Haltérophilie</a></h3>
                        <p class="box-text">Les équipements de musculation dans les salles ciblent des groupes musculaires spécifiques, améliorant la force et la composition corporelle globale.</p>
                        <a href="service-details.html" class="link-btn style4">En savoir plus<i class="fas fa-arrow-right ms-2"></i></a>
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
                            <img src="<?php echo $path; ?>/assets/img/icon/service_icon4-4.svg" alt="Icône">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Force Cardio</a></h3>
                        <p class="box-text">Les salles de sport disposent souvent de coachs certifiés qui donnent des conseils sur les techniques d'exercice et les routines d'entraînement efficaces.</p>
                        <a href="service-details.html" class="link-btn style4">En savoir plus<i class="fas fa-arrow-right ms-2"></i></a>
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
                            <img src="<?php echo $path; ?>/assets/img/icon/service_icon4-5.svg" alt="Icône">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Musculation</a></h3>
                        <p class="box-text">Des horaires étendus et des commodités variées rendent les entraînements en salle pratiques pour divers emplois du temps.</p>
                        <a href="service-details.html" class="link-btn style4">En savoir plus<i class="fas fa-arrow-right ms-2"></i></a>
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
                            <img src="<?php echo $path; ?>/assets/img/icon/service_icon4-6.svg" alt="Icône">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Équilibre Corporel</a></h3>
                        <p class="box-text">Les salles permettent de choisir parmi une variété d'exercices et de personnaliser les entraînements selon ses besoins.</p>
                        <a href="service-details.html" class="link-btn style4">En savoir plus<i class="fas fa-arrow-right ms-2"></i></a>
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
                            <img src="<?php echo $path; ?>/assets/img/icon/service_icon4-7.svg" alt="Icône">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Pilates Débutant</a></h3>
                        <p class="box-text">Les salles de sport servent de lieux de rencontre sociale où les personnes partageant des objectifs similaires peuvent se motiver mutuellement.</p>
                        <a href="service-details.html" class="link-btn style4">En savoir plus<i class="fas fa-arrow-right ms-2"></i></a>
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
                            <img src="<?php echo $path; ?>/assets/img/icon/service_icon4-8.svg" alt="Icône">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Yoga de Base</a></h3>
                        <p class="box-text">La disponibilité de différentes zones d'exercice permet d'intégrer divers types d'exercices. Les séances en groupe ajoutent une dimension sociale.</p>
                        <a href="service-details.html" class="link-btn style4">En savoir plus<i class="fas fa-arrow-right ms-2"></i></a>
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
                            <img src="<?php echo $path; ?>/assets/img/icon/service_icon4-9.svg" alt="Icône">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Développement Musculaire</a></h3>
                        <p class="box-text">De nombreuses salles offrent des outils pour suivre les progrès, comme des applications, des journaux d'entraînement, ou des logiciels intégrés.</p>
                        <a href="service-details.html" class="link-btn style4">En savoir plus<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php
require "../inc/footer.php";
require "../inc/foot.php";; ?>