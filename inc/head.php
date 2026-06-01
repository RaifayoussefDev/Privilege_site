<?php
$path = isset($page) ? '.' : '..';
$host = strtolower($_SERVER['HTTP_HOST'] ?? '');
if (strpos($host, 'privilège.ma') !== false) {
    header('Location: https://privilege.ma' . $_SERVER['REQUEST_URI'], true, 301);
    exit;
}
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
    header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], true, 301);
    exit;
}
?>
<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Privilège Luxury Fitness Club | Salle de Sport & Spa Casablanca</title>
    <meta name="author" content="Privilège Luxury Fitness Club">
    <meta name="description" content="N°1 des salles de sport à Casablanca. Privilège Luxury Fitness Club : CrossFit, Reaxing, Coaching personnel, Yoga, Beauty & Spa. Ouvert 7j/7 de 6h à 23h. Rejoignez-nous !">
    <meta name="keywords" content="salle de sport Casablanca, fitness club luxe Casablanca, Privilège fitness, CrossFit Casablanca, Reaxing, coaching personnel Casablanca, spa Casablanca, gym luxe Maroc, club de sport Casablanca, privilege luxury fitness">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="geo.region" content="MA-CAS">
    <meta name="geo.placename" content="Casablanca">
    <meta name="geo.position" content="33.56169;-7.62018">
    <link rel="canonical" href="https://privilege.ma/">
    <meta property="og:title" content="Privilège Luxury Fitness Club | Salle de Sport Luxe Casablanca">
    <meta property="og:description" content="N°1 des salles de sport à Casablanca. CrossFit, Reaxing, Coaching personnel, Beauty & Spa. Ouvert 7j/7.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://privilege.ma/">
    <meta property="og:image" content="https://privilege.ma/assets/img/logo_light.png">
    <meta property="og:locale" content="fr_MA">
    <meta property="og:site_name" content="Privilège Luxury Fitness Club">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Privilège Luxury Fitness Club | Casablanca">
    <meta name="twitter:description" content="La salle de sport haut de gamme N°1 à Casablanca. CrossFit, Reaxing, Spa & Coaching personnel.">
    <meta name="twitter:image" content="https://privilege.ma/assets/img/logo_light.png">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ExerciseGym",
      "name": "Privilège Luxury Fitness Club",
      "description": "Salle de sport haut de gamme à Casablanca — CrossFit, Reaxing, Coaching Personnel, Beauty & Spa. Ouvert 7j/7 de 6h à 23h.",
      "url": "https://privilege.ma",
      "telephone": "+212522831616",
      "email": "info@privilege.ma",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "709 Bd Modibo Keita",
        "addressLocality": "Casablanca",
        "postalCode": "20000",
        "addressCountry": "MA"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 33.56169,
        "longitude": -7.62018
      },
      "openingHoursSpecification": [{
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "06:00",
        "closes": "23:00"
      }],
      "image": "https://privilege.ma/assets/img/logo_light.png",
      "priceRange": "MAD",
      "amenityFeature": [
        {"@type": "LocationFeatureSpecification","name": "CrossFit","value": true},
        {"@type": "LocationFeatureSpecification","name": "Reaxing","value": true},
        {"@type": "LocationFeatureSpecification","name": "Yoga & Pilates","value": true},
        {"@type": "LocationFeatureSpecification","name": "Beauty & Spa","value": true},
        {"@type": "LocationFeatureSpecification","name": "Coaching Personnel","value": true},
        {"@type": "LocationFeatureSpecification","name": "Parking","value": true}
      ]
    }
    </script>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $path ;?>/assets/img/logo_light.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $path ;?>/assets/img/logo_light.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $path ;?>/assets/img/logo_light.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $path ;?>/assets/img/logo_light.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $path ;?>/assets/img/logo_light.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $path ;?>/assets/img/logo_light.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $path ;?>/assets/img/logo_light.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $path ;?>/assets/img/logo_light.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $path ;?>/assets/img/logo_light.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo $path ;?>/assets/img/logo_light.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $path ;?>/assets/img/logo_light.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $path ;?>/assets/img/logo_light.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $path ;?>/assets/img/logo_light.png">
    <link rel="manifest" href="<?php echo $path ;?>/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $path ;?>/assets/img/logo_light.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Preload ressources critiques -->
    <link rel="preload" href="<?php echo $path; ?>/assets/css/style.css" as="style">
    <link rel="preload" href="<?php echo $path; ?>/assets/css/bootstrap.min.css" as="style">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo $path; ?>/assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="<?php echo $path; ?>/assets/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo $path; ?>/assets/css/magnific-popup.min.css">
    <!-- datetimepicker -->
    <link rel="stylesheet" href="<?php echo $path; ?>/assets/css/jquery.datetimepicker.min.css">
    <!-- Swiper Js -->
    <link rel="stylesheet" href="<?php echo $path; ?>/assets/css/swiper-bundle.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo $path; ?>/assets/css/style.css">

</head>

<body class="bg-black2">

    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->


    <!--********************************
   		Code Start From Here 
	******************************** -->

    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader ">
        <button class="th-btn style2 preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <span class="loader">
            </span>
        </div>
    </div>
    <!--==============================
    Sidemenu
============================== -->