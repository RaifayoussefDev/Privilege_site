<?php
require "../inc/head.php";
require "../inc/header.php";
?>

<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" data-bg-src="<?php echo $path; ?>/assets/img/bg/about_bg.jpg">
    <div class="breadcumb-shape1"></div>
    <div class="breadcumb-shape2"></div>
    <div class="breadcumb-shape3"></div>
    <div class="breadcumb-shape4"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Contactez-Nous !</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Accueil</a></li>
                        <li>Contactez-Nous !</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 d-lg-block d-none align-self-end">
                <div class="breadcumb-thumb">
                    <img src="<?php echo $path; ?>/assets/img/normal/men_gym.png" alt="Image">
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
Contact Area  
==============================-->
<div class="space contact-area-3">
    <div class="container">
        <div class="row gy-4 justify-content-center">
            <div class="col-xl-4 col-lg-6">
                <div class="contact-feature2">
                    <div class="box-icon bg-theme">
                        <i class="fal fa-location-dot"></i>
                    </div>
                    <div class="media-body">
                        <p class="contact-feature_label">Adresse</p>
                        <a href="https://www.google.com/maps" class="contact-feature_link">709 Bd Modibo Keita, Casablanca 20000</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="contact-feature2">
                    <div class="box-icon bg-title">
                        <i class="fal fa-phone"></i>
                    </div>
                    <div class="media-body">
                        <p class="contact-feature_label">Contact</p>
                        <a href="tel:+212522831616" class="contact-feature_link">+212 522 831 616</a>
                        <a href="mailto:privilege@capitalsoft.com" class="contact-feature_link">privilege@capitalsoft.com</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="contact-feature2">
                    <div class="box-icon bg-body">
                        <i class="fal fa-clock"></i>
                    </div>
                    <div class="media-body">
                        <p class="contact-feature_label">Horaires d'ouverture</p>
                        <span class="contact-feature_link">Tous les jours de 6h à 23h</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-page-form-wrap mt-50">
            <div class="row">
                <div class="col-xl-6">
                    <div class="contact-form-v2 contact-page-form">
                        <h2 class="title mt-n3 fw-semibold mb-30">Contactez-Nous !</h2>
                        <form id="contactForm" action="../actions/add_contact.php" method="POST" class="contact-form">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Votre Nom" required>
                                    <i class="fal fa-user"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Votre Prénom" required>
                                    <i class="fal fa-user"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="tel" class="form-control" name="telephone" id="telephone" placeholder="Numéro de Téléphone" required>
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea name="message" id="message" placeholder="Écrivez votre message..." class="form-control" required></textarea>
                                    <i class="fal fa-pencil"></i>
                                </div>
                                <div class="form-btn col-12">
                                    <button type="submit" class="th-btn w-100 style2 style-radius">ENVOYER LE MESSAGE</button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3" id="formMessage"></p>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 align-self-end d-xl-block d-none">
                    <div class="contact-thumb3-1">
                        <img src="<?php echo $path; ?>/assets/img/normal/889A1649-HDR-1.jpg" alt="Contact Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-0">
    <div class="contact-map style2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.6801329290956!2d-7.620396123704517!3d33.56168614347283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda62d007599f39f%3A0xd085843203c19729!2sPrivil%C3%A8ge%20Luxury%20Fitness%20Club!5e0!3m2!1sfr!2sma!4v1736154412824!5m2!1sfr!2sma" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const form = document.getElementById("contactForm");
        const formMessage = document.getElementById("formMessage");
        const submitButton = form.querySelector("button[type='submit']");

        form.addEventListener("submit", (e) => {
            e.preventDefault();

            const formData = new FormData(form);

            // Désactiver le bouton et afficher un message de chargement
            submitButton.disabled = true;
            submitButton.innerHTML = "En cours d'envoi... <i class='fas fa-spinner fa-spin'></i>"; // Utiliser FontAwesome pour l'icône de chargement

            fetch(form.action, {
                    method: "POST",
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === "success") {
                        formMessage.textContent = "Merci de nous contacter. Nous allons vous répondre le plus tôt possible.";
                        formMessage.style.color = "black";
                        form.reset();
                    } else {
                        formMessage.textContent = "Une erreur s'est produite. Veuillez réessayer ultérieurement.";
                        formMessage.style.color = "red";
                    }
                })
                .catch(error => {
                    console.error("Erreur :", error);
                    formMessage.textContent = "Une erreur s'est produite. Veuillez réessayer ultérieurement.";
                    formMessage.style.color = "red";
                })
                .finally(() => {
                    // Réactiver le bouton et modifier le texte
                    submitButton.disabled = false;
                    submitButton.innerHTML = "ENVOYER LE MESSAGE";
                });
        });
    });
</script>

<?php
require "../inc/footer.php";
require "../inc/foot.php";
?>