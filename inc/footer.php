<?php $path = $path ?? '..'; ?>
<!-- WhatsApp Floating Button -->
<a href="https://wa.me/212522831616" class="whatsapp-float" target="_blank" rel="noopener" aria-label="Contactez-nous sur WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>
<style>
.whatsapp-float {
    position: fixed;
    bottom: 160px;
    right: 24px;
    width: 56px;
    height: 56px;
    background-color: #25d366;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    box-shadow: 0 4px 16px rgba(37,211,102,0.45);
    z-index: 9999;
    transition: transform 0.2s, box-shadow 0.2s;
    text-decoration: none;
}
.whatsapp-float:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 24px rgba(37,211,102,0.6);
    color: #fff;
}
</style>
 <!--==============================Footer Area==============================-->
 <footer class="footer-wrapper footer-default" data-bg-src="<?php echo $path; ?>/assets/img/bg/background_footer.jpg">
     <div class="footer-top">
         <div class="container">
             <div class="subscribe-box">
                 <div class="row gy-40 align-items-center">
                     <div class="col-xl-6">
                         <h4 class="subscribe-box_title">Abonnez-vous à notre Newsletter</h4>
                         <p class="subscribe-box_text">Profitez de 10% de réduction sur votre première commande ! Dépêchez-vous</p>
                     </div>
                     <div class="col-xl-6">
                         <form class="newsletter-form">
                             <div class="form-group style-dark">
                                 <input class="form-control" type="email" placeholder="Entrez votre adresse email" required="">
                             </div>
                             <button type="submit" class="th-btn style-radius">S'ABONNER</button>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="widget-area">
         <div class="container">
             <div class="row justify-content-between">
                 <div class="col-sm-6 col-xl-auto">
                     <div class="widget footer-widget">
                         <div class="th-widget-about">
                             <div class="about-logo">
                                 <a href="index.html"><img src="<?php echo $path; ?>/assets/img/logo_light.png" alt="Privilège"></a>
                             </div>
                             <div class="info-box">
                                 <p class="info-box_title">
                                     Appelez-nous à tout moment :
                                 </p>
                                 <h5 class="info-box_text">
                                     <a href="tel:+212522831616" class="info-box_link">+212 5228-31616</a>
                                 </h5>
                             </div>
                             <div class="info-box">
                                 <p class="info-box_title">
                                     Envoyez-nous un email :
                                 </p>
                                 <h5 class="info-box_text">
                                     <a href="mailto:info@privilege.ma" class="info-box_link">info@privilege.ma</a>
                                 </h5>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-6 col-xl-auto">
                     <div class="widget widget_nav_menu footer-widget">
                         <h3 class="widget_title">Liens rapides</h3>
                         <div class="menu-all-pages-container">
                             <ul class="menu">
                                 <li><a href="<?php echo $path; ?>">Accueil</a></li>
                                 <li><a href="<?php echo $path; ?>/services/">Nos Services</a></li>
                                 <li><a href="<?php echo $path; ?>/Salles/">Nos Salles</a></li>
                                 <li><a href="<?php echo $path; ?>/Evenements/">Événements</a></li>
                                 <li><a href="<?php echo $path; ?>/About/">À Propos</a></li>
                                 <li><a href="<?php echo $path; ?>/Contact/">Contact</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>

                 <div class="col-sm-6 col-xl-auto">
                     <div class="widget widget_nav_menu footer-widget">
                         <h3 class="widget_title">Nos services</h3>
                         <div class="menu-all-pages-container">
                             <ul class="menu">
                                 <li><a href="<?php echo $path; ?>/services/">Entraînement personnel</a></li>
                                 <li><a href="<?php echo $path; ?>/services/">Entraînement en groupe</a></li>
                                 <li><a href="<?php echo $path; ?>/services/">Renforcement musculaire</a></li>
                                 <li><a href="<?php echo $path; ?>/services/">Entraînement virtuel</a></li>
                                 <li><a href="<?php echo $path; ?>/services/">Entraînement perte de poids</a></li>
                                 <li><a href="<?php echo $path; ?>/services/">Étirement corporel</a></li>
                                 <li><a href="<?php echo $path; ?>/services/">Entraînement psychologique</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-6 col-xl-auto">
                     <div class="widget footer-widget">
                         <h3 class="widget_title">Galerie de photos</h3>
                         <div class="sidebar-gallery">
                             <div class="gallery-thumb">
                                 <img src="<?php echo $path; ?>/assets/img/photos 2/photos/footer1.jpg" alt="Image de la galerie">
                                 <a href="<?php echo $path; ?>/assets/img/photos 2/photos/footer1.jpg" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                             </div>
                             <div class="gallery-thumb">
                                 <img src="<?php echo $path; ?>/assets/img/photos 2/photos/footer2.jpg" alt="Image de la galerie">
                                 <a href="<?php echo $path; ?>/assets/img/photos 2/photos/footer2.jpg" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                             </div>
                             <div class="gallery-thumb">
                                 <img src="<?php echo $path; ?>/assets/img/photos 2/photos/footer3.jpg" alt="Image de la galerie">
                                 <a href="<?php echo $path; ?>/assets/img/photos 2/photos/footer3.jpg" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                             </div>
                             <div class="gallery-thumb">
                                 <img src="<?php echo $path; ?>/assets/img/photos 2/photos/footer4.jpg" alt="Image de la galerie">
                                 <a href="<?php echo $path; ?>/assets/img/photos 2/photos/footer4.jpg" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="copyright-wrap bg-black2">
         <div class="container">
             <div class="row gy-3 align-items-center">
                 <div class="col-lg-6">
                     <p class="copyright-text">
                         <i class="fal fa-copyright"></i> Copyright 2026 <a href="https://privilege.ma">Privilège Luxury Fitness Club</a>. Tous droits réservés.
                     </p>
                     <p class="copyright-text mt-1" style="font-size:12px;opacity:.55">
                         Développé par <a href="https://capitalsoft.ma" target="_blank" rel="noopener" style="color:var(--theme-color);opacity:1">capitalsoft.ma</a>
                     </p>
                 </div>
                 <div class="col-lg-6 text-center text-lg-end">
                     <div class="th-social">
                         <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                         <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                         <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                         <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>


 <!--********************************Code End  Here******************************** -->

 <!-- Scroll To Top -->
 <div class="scroll-top">
     <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
     </svg>
 </div>