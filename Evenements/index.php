<?php
require "../inc/head.php";
require "../inc/header.php"; ?>

<style>
/* ── EVENT CARDS ── */
.ev-card {
    position: relative;
    background: var(--black-color2, #111);
    border: 1px solid rgba(255,255,255,0.07);
    border-radius: 4px;
    overflow: hidden;
    transition: transform .35s ease, border-color .35s ease, box-shadow .35s ease;
}
.ev-card:hover {
    transform: translateY(-6px);
    border-color: var(--theme-color);
    box-shadow: 0 20px 50px rgba(0,0,0,.5);
}
.ev-card-img {
    position: relative;
    overflow: hidden;
    height: 240px;
}
.ev-card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .6s ease;
}
.ev-card:hover .ev-card-img img {
    transform: scale(1.07);
}
.ev-card-img-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(10,10,10,.85) 0%, transparent 55%);
}
.ev-badge {
    position: absolute;
    top: 18px;
    left: 18px;
    background: var(--theme-color);
    color: #0a0a0a;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 5px 14px;
    border-radius: 2px;
}
.ev-date-box {
    position: absolute;
    bottom: 18px;
    right: 18px;
    background: rgba(10,10,10,.85);
    border: 1px solid var(--theme-color);
    border-radius: 3px;
    padding: 8px 14px;
    text-align: center;
    line-height: 1.2;
}
.ev-date-day {
    font-family: var(--title-font, "Kanit", sans-serif);
    font-size: 26px;
    font-weight: 700;
    color: var(--theme-color);
    display: block;
}
.ev-date-month {
    font-size: 10px;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: rgba(255,255,255,.7);
}
.ev-card-body {
    padding: 26px 28px 30px;
}
.ev-meta {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 12px;
}
.ev-meta span {
    font-size: 12px;
    color: rgba(255,255,255,.5);
    letter-spacing: .5px;
    display: flex;
    align-items: center;
    gap: 6px;
}
.ev-meta span i {
    color: var(--theme-color);
    font-size: 12px;
}
.ev-title {
    font-family: var(--title-font, "Kanit", sans-serif);
    font-size: 20px;
    font-weight: 600;
    color: #fff;
    margin-bottom: 12px;
    line-height: 1.35;
    transition: color .3s;
}
.ev-card:hover .ev-title {
    color: var(--theme-color);
}
.ev-desc {
    font-size: 14px;
    color: rgba(255,255,255,.6);
    line-height: 1.75;
    margin-bottom: 22px;
}
.ev-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 20px;
    border-top: 1px solid rgba(255,255,255,.07);
}
.ev-spots {
    font-size: 12px;
    color: rgba(255,255,255,.5);
}
.ev-spots strong {
    color: var(--theme-color);
    font-weight: 700;
}

/* ── PAST EVENTS ── */
.past-ev-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 3px;
}
.past-ev-item {
    position: relative;
    overflow: hidden;
    aspect-ratio: 4/3;
    cursor: pointer;
}
.past-ev-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .6s ease, filter .5s ease;
    filter: grayscale(20%);
}
.past-ev-item:hover img {
    transform: scale(1.08);
    filter: grayscale(0%);
}
.past-ev-ov {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(10,10,10,.9) 0%, rgba(10,10,10,.1) 60%);
    display: flex;
    align-items: flex-end;
    padding: 20px;
    opacity: 0;
    transition: opacity .4s;
}
.past-ev-item:hover .past-ev-ov {
    opacity: 1;
}
.past-ev-ov-title {
    font-family: var(--title-font, "Kanit", sans-serif);
    font-size: 15px;
    font-weight: 600;
    color: #fff;
}
.past-ev-ov-date {
    font-size: 11px;
    color: var(--theme-color);
    letter-spacing: 1px;
}

/* ── CTA BANNER ── */
.ev-cta {
    background: linear-gradient(135deg, var(--black-color2, #111) 0%, #1a1a1a 100%);
    border: 1px solid rgba(201,169,76,.2);
    border-radius: 4px;
    padding: 60px;
    text-align: center;
    position: relative;
    overflow: hidden;
}
.ev-cta::before {
    content: '';
    position: absolute;
    top: -80px;
    right: -80px;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(201,169,76,.12) 0%, transparent 70%);
    pointer-events: none;
}
.ev-cta::after {
    content: '';
    position: absolute;
    bottom: -80px;
    left: -80px;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(201,169,76,.08) 0%, transparent 70%);
    pointer-events: none;
}

/* ── FILTER TABS ── */
.ev-filter {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    margin-bottom: 44px;
}
.ev-filter-btn {
    background: transparent;
    border: 1px solid rgba(255,255,255,.15);
    color: rgba(255,255,255,.6);
    padding: 9px 22px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    border-radius: 2px;
    cursor: pointer;
    transition: all .3s;
    font-family: var(--body-font, "Archivo", sans-serif);
}
.ev-filter-btn.active,
.ev-filter-btn:hover {
    background: var(--theme-color);
    border-color: var(--theme-color);
    color: #0a0a0a;
}

@media (max-width: 768px) {
    .past-ev-grid { grid-template-columns: repeat(2, 1fr); }
    .ev-cta { padding: 40px 24px; }
}
@media (max-width: 480px) {
    .past-ev-grid { grid-template-columns: 1fr; }
}
</style>

<!--==============================Breadcumb==============================-->
<div class="breadcumb-wrapper" data-bg-src="<?php echo $path; ?>/assets/img/bg/about_bg.jpg">
    <div class="breadcumb-shape1"></div>
    <div class="breadcumb-shape2"></div>
    <div class="breadcumb-shape3"></div>
    <div class="breadcumb-shape4"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Événements</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="<?php echo $path; ?>/">Accueil</a></li>
                        <li>Événements</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 d-lg-block d-none align-self-end">
                <div class="breadcumb-thumb">
                    <img src="<?php echo $path; ?>/assets/img/normal/men_gym.png" alt="Événements">
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
Upcoming Events
==============================-->
<section class="space" id="upcoming-events">
    <div class="container">

        <div class="title-area text-center mb-10">
            <span class="sub-title">Agenda Privilège</span>
            <h2 class="sec-title text-white">Événements à <span class="text-theme">Venir</span></h2>
        </div>

        <div class="ev-filter justify-content-center" id="evFilter">
            <button class="ev-filter-btn active" data-filter="all">Tous</button>
            <button class="ev-filter-btn" data-filter="crossfit">CrossFit</button>
            <button class="ev-filter-btn" data-filter="yoga">Yoga & Bien-être</button>
            <button class="ev-filter-btn" data-filter="vip">VIP & Gala</button>
            <button class="ev-filter-btn" data-filter="nutrition">Nutrition</button>
        </div>

        <div class="row gy-4" id="evGrid">

            <!-- Event 1 -->
            <div class="col-lg-4 col-md-6 ev-item" data-category="crossfit">
                <div class="ev-card">
                    <div class="ev-card-img">
                        <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=800&q=80" alt="Challenge CrossFit" loading="lazy">
                        <div class="ev-card-img-overlay"></div>
                        <span class="ev-badge">À venir</span>
                        <div class="ev-date-box">
                            <span class="ev-date-day">14</span>
                            <span class="ev-date-month">Juin 2025</span>
                        </div>
                    </div>
                    <div class="ev-card-body">
                        <div class="ev-meta">
                            <span><i class="fal fa-clock"></i> 08h00 – 13h00</span>
                            <span><i class="fal fa-location-dot"></i> Salle CrossFit</span>
                        </div>
                        <h3 class="ev-title">Challenge CrossFit Summer Cup 2025</h3>
                        <p class="ev-desc">Compétition interne ouverte à tous les membres. Catégories Débutant, Intermédiaire et Elite. Récompenses pour les 3 premiers de chaque catégorie.</p>
                        <div class="ev-footer">
                            <div class="ev-spots"><strong>18</strong> places restantes</div>
                            <a href="<?php echo $path; ?>/Contact/" class="th-btn style3">S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event 2 -->
            <div class="col-lg-4 col-md-6 ev-item" data-category="yoga">
                <div class="ev-card">
                    <div class="ev-card-img">
                        <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=800&q=80" alt="Yoga Sunset" loading="lazy">
                        <div class="ev-card-img-overlay"></div>
                        <span class="ev-badge">À venir</span>
                        <div class="ev-date-box">
                            <span class="ev-date-day">21</span>
                            <span class="ev-date-month">Juin 2025</span>
                        </div>
                    </div>
                    <div class="ev-card-body">
                        <div class="ev-meta">
                            <span><i class="fal fa-clock"></i> 18h30 – 20h00</span>
                            <span><i class="fal fa-location-dot"></i> Espace Zen</span>
                        </div>
                        <h3 class="ev-title">Séance Yoga Sunset — Solstice d'Été</h3>
                        <p class="ev-desc">Session spéciale solstice d'été animée par Salma Tazi. Yoga flow en pleine conscience, méditation guidée et initiation à la respiration Pranayama.</p>
                        <div class="ev-footer">
                            <div class="ev-spots"><strong>12</strong> places restantes</div>
                            <a href="<?php echo $path; ?>/Contact/" class="th-btn style3">S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event 3 -->
            <div class="col-lg-4 col-md-6 ev-item" data-category="nutrition">
                <div class="ev-card">
                    <div class="ev-card-img">
                        <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=800&q=80" alt="Masterclass Nutrition" loading="lazy">
                        <div class="ev-card-img-overlay"></div>
                        <span class="ev-badge">À venir</span>
                        <div class="ev-date-box">
                            <span class="ev-date-day">05</span>
                            <span class="ev-date-month">Juil 2025</span>
                        </div>
                    </div>
                    <div class="ev-card-body">
                        <div class="ev-meta">
                            <span><i class="fal fa-clock"></i> 10h00 – 12h30</span>
                            <span><i class="fal fa-location-dot"></i> Salle VIP</span>
                        </div>
                        <h3 class="ev-title">Masterclass Nutrition & Performance Sportive</h3>
                        <p class="ev-desc">Conférence animée par un nutritionniste sport certifié. Planification des repas, supplémentation et stratégies pour maximiser vos résultats à l'entraînement.</p>
                        <div class="ev-footer">
                            <div class="ev-spots"><strong>30</strong> places restantes</div>
                            <a href="<?php echo $path; ?>/Contact/" class="th-btn style3">S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event 4 -->
            <div class="col-lg-4 col-md-6 ev-item" data-category="crossfit">
                <div class="ev-card">
                    <div class="ev-card-img">
                        <img src="https://images.unsplash.com/photo-1552674605-db6ffd4facb5?w=800&q=80" alt="Bootcamp Estival" loading="lazy">
                        <div class="ev-card-img-overlay"></div>
                        <span class="ev-badge">À venir</span>
                        <div class="ev-date-box">
                            <span class="ev-date-day">19</span>
                            <span class="ev-date-month">Juil 2025</span>
                        </div>
                    </div>
                    <div class="ev-card-body">
                        <div class="ev-meta">
                            <span><i class="fal fa-clock"></i> 07h00 – 09h00</span>
                            <span><i class="fal fa-location-dot"></i> Espace Outdoor</span>
                        </div>
                        <h3 class="ev-title">Bootcamp Estival — Morning Edition</h3>
                        <p class="ev-desc">Démarrez l'été en forme avec notre bootcamp matinal intensif. HIIT, circuit training et cardio en groupe, encadrés par nos coachs experts.</p>
                        <div class="ev-footer">
                            <div class="ev-spots"><strong>25</strong> places restantes</div>
                            <a href="<?php echo $path; ?>/Contact/" class="th-btn style3">S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event 5 -->
            <div class="col-lg-4 col-md-6 ev-item" data-category="vip">
                <div class="ev-card">
                    <div class="ev-card-img">
                        <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&q=80" alt="Soirée VIP" loading="lazy">
                        <div class="ev-card-img-overlay"></div>
                        <span class="ev-badge">Exclusif</span>
                        <div class="ev-date-box">
                            <span class="ev-date-day">02</span>
                            <span class="ev-date-month">Août 2025</span>
                        </div>
                    </div>
                    <div class="ev-card-body">
                        <div class="ev-meta">
                            <span><i class="fal fa-clock"></i> 20h00 – 23h00</span>
                            <span><i class="fal fa-location-dot"></i> Espace VIP</span>
                        </div>
                        <h3 class="ev-title">Soirée VIP Membres — Privilège Summer Night</h3>
                        <p class="ev-desc">Soirée exclusive réservée aux membres VIP. Cocktails wellness, démonstrations live, rencontres avec nos coachs et présentation des nouveaux programmes d'automne.</p>
                        <div class="ev-footer">
                            <div class="ev-spots"><strong>Membres VIP</strong> uniquement</div>
                            <a href="<?php echo $path; ?>/Contact/" class="th-btn style3">Réserver</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event 6 -->
            <div class="col-lg-4 col-md-6 ev-item" data-category="yoga">
                <div class="ev-card">
                    <div class="ev-card-img">
                        <img src="https://images.unsplash.com/photo-1545205597-3d9d02c29597?w=800&q=80" alt="Journée Bien-être" loading="lazy">
                        <div class="ev-card-img-overlay"></div>
                        <span class="ev-badge">À venir</span>
                        <div class="ev-date-box">
                            <span class="ev-date-day">16</span>
                            <span class="ev-date-month">Août 2025</span>
                        </div>
                    </div>
                    <div class="ev-card-body">
                        <div class="ev-meta">
                            <span><i class="fal fa-clock"></i> 09h00 – 18h00</span>
                            <span><i class="fal fa-location-dot"></i> Club Entier</span>
                        </div>
                        <h3 class="ev-title">Journée Bien-être & Spa Privilège</h3>
                        <p class="ev-desc">Une journée complète dédiée au bien-être : yoga matinal, soins spa, ateliers détente et nutrition. Accès illimité à tous les espaces du club.</p>
                        <div class="ev-footer">
                            <div class="ev-spots"><strong>20</strong> places restantes</div>
                            <a href="<?php echo $path; ?>/Contact/" class="th-btn style3">S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--==============================
Past Events Gallery
==============================-->
<section class="space bg-black2" id="past-events">
    <div class="container">
        <div class="title-area text-center mb-50">
            <span class="sub-title">Retour en Images</span>
            <h2 class="sec-title text-white">Nos Événements <span class="text-theme">Passés</span></h2>
        </div>
    </div>

    <div class="container-fluid px-0">
        <div class="past-ev-grid">

            <div class="past-ev-item">
                <img src="https://images.unsplash.com/photo-1517838277536-f5f99be501cd?w=700&q=80" alt="Ramadan Cup CrossFit" loading="lazy">
                <div class="past-ev-ov">
                    <div>
                        <div class="past-ev-ov-date">Mars 2025</div>
                        <div class="past-ev-ov-title">Ramadan CrossFit Cup</div>
                    </div>
                </div>
            </div>

            <div class="past-ev-item">
                <img src="https://images.unsplash.com/photo-1607962837359-5e7e89f86776?w=700&q=80" alt="Gala Fin Année" loading="lazy">
                <div class="past-ev-ov">
                    <div>
                        <div class="past-ev-ov-date">Décembre 2024</div>
                        <div class="past-ev-ov-title">Gala de Fin d'Année VIP</div>
                    </div>
                </div>
            </div>

            <div class="past-ev-item">
                <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=700&q=80" alt="Bootcamp Automne" loading="lazy">
                <div class="past-ev-ov">
                    <div>
                        <div class="past-ev-ov-date">Octobre 2024</div>
                        <div class="past-ev-ov-title">Bootcamp Automne Challenge</div>
                    </div>
                </div>
            </div>

            <div class="past-ev-item">
                <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?w=700&q=80" alt="Yoga Journée Mondiale" loading="lazy">
                <div class="past-ev-ov">
                    <div>
                        <div class="past-ev-ov-date">Juin 2024</div>
                        <div class="past-ev-ov-title">Journée Mondiale du Yoga</div>
                    </div>
                </div>
            </div>

            <div class="past-ev-item">
                <img src="https://images.unsplash.com/photo-1549060279-7e168fcee0c2?w=700&q=80" alt="Masterclass Reaxing" loading="lazy">
                <div class="past-ev-ov">
                    <div>
                        <div class="past-ev-ov-date">Avril 2024</div>
                        <div class="past-ev-ov-title">Masterclass Reaxing Open</div>
                    </div>
                </div>
            </div>

            <div class="past-ev-item">
                <img src="https://images.unsplash.com/photo-1579758629938-03607ccdbaba?w=700&q=80" alt="Portes Ouvertes" loading="lazy">
                <div class="past-ev-ov">
                    <div>
                        <div class="past-ev-ov-date">Janvier 2024</div>
                        <div class="past-ev-ov-title">Journée Portes Ouvertes</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--==============================
CTA Section
==============================-->
<section class="space">
    <div class="container">
        <div class="ev-cta">
            <span class="sub-title">Vous avez un projet ?</span>
            <h2 class="sec-title text-white mb-20">Organisez Votre Événement<br><span class="text-theme">Chez Privilège</span></h2>
            <p class="text-light mb-40" style="max-width:560px;margin-inline:auto;font-size:15px;line-height:1.8">
                Vous souhaitez organiser un séminaire corporate, un team building sportif ou une soirée privée ? Nos espaces VIP sont disponibles à la location.
            </p>
            <a href="<?php echo $path; ?>/Contact/" class="th-btn me-3">Demander un Devis</a>
            <a href="tel:+212522831616" class="th-btn style2">+212 5228-31616</a>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const btns  = document.querySelectorAll('.ev-filter-btn');
    const items = document.querySelectorAll('.ev-item');

    btns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            btns.forEach(function (b) { b.classList.remove('active'); });
            btn.classList.add('active');

            var filter = btn.dataset.filter;
            items.forEach(function (item) {
                if (filter === 'all' || item.dataset.category === filter) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?php
require "../inc/footer.php";
require "../inc/foot.php"; ?>
