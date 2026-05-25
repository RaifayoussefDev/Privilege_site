<?php
require "../inc/head.php";
require "../inc/header.php";
;?>

<div class="breadcumb-wrapper " data-bg-src="<?php echo $path ;?>/assets/img/bg/breadcumb-bg.jpg">
    <div class="breadcumb-shape1"></div>
    <div class="breadcumb-shape2"></div>
    <div class="breadcumb-shape3"></div>
    <div class="breadcumb-shape4"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Pricing Plan</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>Pricing Plan</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 d-lg-block d-none align-self-end">
                <div class="breadcumb-thumb">
                    <img src="<?php echo $path ;?>/assets/img/normal/breadcumb-thumb.png" alt="img">
                </div>
            </div>
        </div>
    </div>
</div><!--==============================
Price Area  
==============================-->
<section class="space">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6">
                <div class="title-area text-lg-start text-center">
                    <span class="sub-title after-lg-none">Pricing Plan</span>
                    <h2 class="sec-title">Find Your Perfect Plan</h2>
                </div>
            </div>
            <div class="col-lg-auto">
                <div class="sec-btn">
                    <div class="nav tab-menu1 price-tab-btn" role="tablist">
                        <button class="tab-btn th-btn active" id="price-one-tab" data-bs-toggle="tab" data-bs-target="#price-one" role="tab" aria-controls="price-one" aria-selected="true">
                            Monthly
                        </button>
                        <button class="tab-btn th-btn" id="price-two-tab" data-bs-toggle="tab" data-bs-target="#price-two" role="tab" aria-controls="price-two" aria-selected="false">
                            Yearly
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="price-one" role="tabpanel" aria-labelledby="price-one-tab">
                <div class="row gy-30 justify-content-center">

                    <div class="col-xl-12 col-lg-6">
                        <div class="price-card ">
                            <div class="price-title-wrap">
                                <h3 class="box-title">Basic Plan</h3>
                                <h4 class="price-card_price"><span class="currency">$</span>150<span class="duration"> / Month</span></h4>
                            </div>
                            <div class="price-card_content">
                                <div class="row gy-4">
                                    <div class="col-xl-6">
                                        <div class="checklist style3">
                                            <ul>
                                                <li><i class="far fa-circle-check"></i> 20 Trainings</li>
                                                <li><i class="far fa-circle-check"></i> Free shower & lockers</li>
                                                <li><i class="far fa-circle-check"></i> Reliable & Experienced Team</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="checklist style3">
                                            <ul>
                                                <li><i class="far fa-circle-check"></i> Free parking</li>
                                                <li class="unavailable"><i class="far fa-circle-check"></i> 5 Days Per Week</li>
                                                <li class="unavailable"><i class="far fa-circle-check"></i> Nutrition Program</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap">
                                <a href="pricing.html" class="th-btn style3 w-100">Purchase Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-6">
                        <div class="price-card active">
                            <div class="price-title-wrap">
                                <h3 class="box-title">Standard Plan</h3>
                                <h4 class="price-card_price"><span class="currency">$</span>200<span class="duration"> / Month</span></h4>
                            </div>
                            <div class="price-card_content">
                                <div class="row gy-4">
                                    <div class="col-xl-6">
                                        <div class="checklist style3">
                                            <ul>
                                                <li><i class="far fa-circle-check"></i> 20 Trainings</li>
                                                <li><i class="far fa-circle-check"></i> Free shower & lockers</li>
                                                <li><i class="far fa-circle-check"></i> Reliable & Experienced Team</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="checklist style3">
                                            <ul>
                                                <li><i class="far fa-circle-check"></i> Free parking</li>
                                                <li><i class="far fa-circle-check"></i> 5 Days Per Week</li>
                                                <li class="unavailable"><i class="far fa-circle-check"></i> Nutrition Program</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap">
                                <a href="pricing.html" class="th-btn style3 w-100">Purchase Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-6">
                        <div class="price-card ">
                            <div class="price-title-wrap">
                                <h3 class="box-title">Premium Plan</h3>
                                <h4 class="price-card_price"><span class="currency">$</span>250<span class="duration"> / Month</span></h4>
                            </div>
                            <div class="price-card_content">
                                <div class="row gy-4">
                                    <div class="col-xl-6">
                                        <div class="checklist style3">
                                            <ul>
                                                <li><i class="far fa-circle-check"></i> 20 Trainings</li>
                                                <li><i class="far fa-circle-check"></i> Free shower & lockers</li>
                                                <li><i class="far fa-circle-check"></i> Reliable & Experienced Team</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="checklist style3">
                                            <ul>
                                                <li><i class="far fa-circle-check"></i> Free parking</li>
                                                <li><i class="far fa-circle-check"></i> 5 Days Per Week</li>
                                                <li><i class="far fa-circle-check"></i> Nutrition Program</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap">
                                <a href="pricing.html" class="th-btn style3 w-100">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="price-two" role="tabpanel" aria-labelledby="price-two-tab">
                <div class="row gy-30 justify-content-center">

                    <div class="col-xl-12 col-lg-6">
                        <div class="price-card ">
                            <div class="price-title-wrap">
                                <h3 class="box-title">Basic Plan</h3>
                                <h4 class="price-card_price"><span class="currency">$</span>350<span class="duration"> / Month</span></h4>
                            </div>
                            <div class="price-card_content">
                                <div class="row gy-4">
                                    <div class="col-xl-6">
                                        <div class="checklist style3">
                                            <ul>
                                                <li><i class="far fa-circle-check"></i> 20 Trainings</li>
                                                <li><i class="far fa-circle-check"></i> Free shower & lockers</li>
                                                <li><i class="far fa-circle-check"></i> Reliable & Experienced Team</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="checklist style3">
                                            <ul>
                                                <li><i class="far fa-circle-check"></i> Free parking</li>
                                                <li class="unavailable"><i class="far fa-circle-check"></i> 5 Days Per Week</li>
                                                <li class="unavailable"><i class="far fa-circle-check"></i> Nutrition Program</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap">
                                <a href="pricing.html" class="th-btn style3 w-100">Purchase Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-6">
                        <div class="price-card active">
                            <div class="price-title-wrap">
                                <h3 class="box-title">Standard Plan</h3>
                                <h4 class="price-card_price"><span class="currency">$</span>400<span class="duration"> / Month</span></h4>
                            </div>
                            <div class="price-card_content">
                                <div class="row gy-4">
                                    <div class="col-xl-6">
                                        <div class="checklist style3">
                                            <ul>
                                                <li><i class="far fa-circle-check"></i> 20 Trainings</li>
                                                <li><i class="far fa-circle-check"></i> Free shower & lockers</li>
                                                <li><i class="far fa-circle-check"></i> Reliable & Experienced Team</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="checklist style3">
                                            <ul>
                                                <li><i class="far fa-circle-check"></i> Free parking</li>
                                                <li><i class="far fa-circle-check"></i> 5 Days Per Week</li>
                                                <li class="unavailable"><i class="far fa-circle-check"></i> Nutrition Program</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap">
                                <a href="pricing.html" class="th-btn style3 w-100">Purchase Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-6">
                        <div class="price-card ">
                            <div class="price-title-wrap">
                                <h3 class="box-title">Premium Plan</h3>
                                <h4 class="price-card_price"><span class="currency">$</span>550<span class="duration"> / Month</span></h4>
                            </div>
                            <div class="price-card_content">
                                <div class="row gy-4">
                                    <div class="col-xl-6">
                                        <div class="checklist style3">
                                            <ul>
                                                <li><i class="far fa-circle-check"></i> 20 Trainings</li>
                                                <li><i class="far fa-circle-check"></i> Free shower & lockers</li>
                                                <li><i class="far fa-circle-check"></i> Reliable & Experienced Team</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="checklist style3">
                                            <ul>
                                                <li><i class="far fa-circle-check"></i> Free parking</li>
                                                <li><i class="far fa-circle-check"></i> 5 Days Per Week</li>
                                                <li><i class="far fa-circle-check"></i> Nutrition Program</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap">
                                <a href="pricing.html" class="th-btn style3 w-100">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Cta Area  
==============================-->
<section class="cta-area-1 text-xl-start text-center" data-bg-src="<?php echo $path ;?>/assets/img/bg/cta_bg_1_1.png" data-overlay="black" data-opacity="9">
    <div class="cta-bg-shape1-1 d-xl-block d-none"></div>
    <div class="cta-bg-shape1-2 d-xl-block d-none"></div>
    <div class="container z-index-common">
        <div class="row">
            <div class="col-xl-6">
                <div class="cta-wrap1 space">
                    <div class="title-area mb-0">
                        <h2 class="sec-title text-white">Get <span class="text-theme">20%</span> Discount for all
                            Fitness Classes</h2>
                        <p class="sec-text text-light mt-30 mb-10 fw-medium">Fitness workouts are known to have positive effects on mental health, reducing stress, anxiety, and depression.</p>
                        <a href="contact.html" class="th-btn style-radius">Join Our Class</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 align-self-end">
                <div class="cta-thumb1-1">
                    <img src="<?php echo $path ;?>/assets/img/normal/cta_1_1.png" alt="img">
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Testimonial Area  
==============================-->
<section class="testi-sec-2 overflow-hidden space-top">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Testimonials</span>
            <h2 class="sec-title">What our clients Say?</h2>
        </div>
        <div class="testi-slider2">
            <div class="swiper th-slider" id="testiSlide2" data-slider-options='{"effect":"fade", "autoHeight": "true"}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testi-card2">
                            <div class="media-left">
                                <div class="testi-card_img">
                                    <img src="<?php echo $path ;?>/assets/img/testimonial/testi_2_1.png" alt="img">
                                    <div class="quote-icon">
                                        <div class="mask-icon" data-mask-src="<?php echo $path ;?>/assets/img/icon/quote.svg"></div>
                                        <img src="<?php echo $path ;?>/assets/img/icon/quote.svg" alt="icon">
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="testi-card_profile">
                                    <div class="testi-card_content">
                                        <p class="testi-card_text">“The group at Baroque is unimaginably committed, educated, and supportive. The completed item was delightful, and worth each penny. I would totally suggest Baroque”</p>
                                        <h3 class="testi-card_name">Alex Carlose,<span class="testi-card_desig">ENVATO LLC</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card2">
                            <div class="media-left">
                                <div class="testi-card_img">
                                    <img src="<?php echo $path ;?>/assets/img/testimonial/testi_2_2.png" alt="img">
                                    <div class="quote-icon">
                                        <div class="mask-icon" data-mask-src="<?php echo $path ;?>/assets/img/icon/quote.svg"></div>
                                        <img src="<?php echo $path ;?>/assets/img/icon/quote.svg" alt="icon">
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="testi-card_profile">
                                    <div class="testi-card_content">
                                        <p class="testi-card_text">“The completed item was delightful, and worth each penny. I would totally suggest Baroque. The group at Baroque is unimaginably committed, educated, and supportive.”</p>
                                        <h3 class="testi-card_name">Micelito Alexan,<span class="testi-card_desig">UI/UX Designer</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="icon-box">
                <button data-slider-prev="#testiSlide2" class="slider-arrow default slider-prev style-border"><i class="far fa-arrow-left"></i></button>
                <button data-slider-next="#testiSlide2" class="slider-arrow default slider-next style-border"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
</section>

<!--==============================
Brand Area  
==============================-->
<div class="space">
    <div class="container-fluid">
        <div class="swiper th-slider text-center" id="brandSlider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"5"},"1500":{"slidesPerView":"6"}}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path ;?>/assets/img/brand/brand_3_1-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path ;?>/assets/img/brand/brand_3_1.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path ;?>/assets/img/brand/brand_3_2-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path ;?>/assets/img/brand/brand_3_2.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path ;?>/assets/img/brand/brand_3_3-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path ;?>/assets/img/brand/brand_3_3.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path ;?>/assets/img/brand/brand_3_4-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path ;?>/assets/img/brand/brand_3_4.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path ;?>/assets/img/brand/brand_3_5-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path ;?>/assets/img/brand/brand_3_5.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path ;?>/assets/img/brand/brand_3_6-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path ;?>/assets/img/brand/brand_3_6.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path ;?>/assets/img/brand/brand_3_1-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path ;?>/assets/img/brand/brand_3_1.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path ;?>/assets/img/brand/brand_3_2-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path ;?>/assets/img/brand/brand_3_2.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path ;?>/assets/img/brand/brand_3_3-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path ;?>/assets/img/brand/brand_3_3.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path ;?>/assets/img/brand/brand_3_4-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path ;?>/assets/img/brand/brand_3_4.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path ;?>/assets/img/brand/brand_3_5-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path ;?>/assets/img/brand/brand_3_5.svg" alt="Brand Logo">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="blog.html" class="brand-box2">
                        <img class="original" src="<?php echo $path ;?>/assets/img/brand/brand_3_6-black.svg" alt="Brand Logo">
                        <img class="hover-img" src="<?php echo $path ;?>/assets/img/brand/brand_3_6.svg" alt="Brand Logo">
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
require "../inc/footer.php";
require "../inc/foot.php";
;?>