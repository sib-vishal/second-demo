<?php $page = 'about'; ?>
<?php

// Creating an array with the new structure, including titles and descriptions
$whyChooseUs = [
    [
        "title" => "ALL-ROUND SUPPORT",
        "description" => "We administer an all-inclusive approach to support that encompasses housing, 24/7 care, medical assistance, and help with daily living activities, ensuring that all of your needs are met in one place.",
        "image" => "images/icons/why/healthcare.png"
    ],
    [
        "title" => "CARING TEAM",
        "description" => "Our care attendants are trained professionals who treat every client with respect, dignity, and kindness, creating a safe and welcoming environment.",
        "image" => "images/icons/why/console.png"
    ],
    [
        "title" => "PERSONALISED SUPPORT",
        "description" => "We treat each person differently, and our care is unique to their needs and preferences.",
        "image" => "images/icons/why/examination.png"
    ],
    [
        "title" => "Community Integration",
        "description" => "We are proactive in supporting our clients to maintain community ties and independence and a sense of belonging within the community.",
        "image" => "images/icons/why/community (2).png"
    ],
    [
        "title" => "Reliable Medical Coordination",
        "description" => "Our transportation services include support to ensure that our clients are safely and punctually transported to scheduled appointments, and that they are managing their medications properly and taking their required medications.",
        "image" => "images/icons/why/protection.png"
    ],
    [
        "title" => "Accessible Locations",
        "description" => "We have numerous centers around Philadelphia, so help is always close when needed.",
        "image" => "images/icons/why/location.png"
    ],
    [
        "title" => "Commitment to Dignity",
        "description" => "We at Second Bloom encourage our seniors and those with disabilities to live an assured life, determined and bold with confidence.",
        "image" => "images/icons/why/relationship.png"
    ],
    [
        "title" => "Proven Experience",
        "description" => "We develop trusted service through our years of experience with our dedication towards improving the quality of life of those we care for.",
        "image" => "images/icons/why/expertise.png"
    ],
    [
        "title" => "Family Peace of Mind",
        "description" => "Knowing your loved ones are in caring and capable hands brings unparalleled reassurance to families.",
        "image" => "images/icons/why/mindful.png"
    ],
    [
        "title" => "Affordable and Accessible",
        "description" => "We strive to offer quality care at competitive rates, ensuring accessibility for everyone in need.",
        "image" => "images/icons/why/affordable.png"
    ]
]; ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us | Second Bloom</title>
    <meta name="description" content="" />
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <style>
        header {
            position: relative;
        }
    </style>
</head>

<body>
    <?php include 'include/header.php'; ?>
    <div class="wrapper">
        <div class="page-banner">
            <div class="banner-inner  ">
                <div class="containerFull w-100">
                    <h1 class="fontHeading heading text-white fontWeight600 ">
                        About Us
                    </h1>
                    <p class="mt-3 text-white-50 fontWeight600">
                        Home / About Us
                    </p>
                </div>
            </div>
        </div>
        <div class="container-xxl py-5">
            <div class="containerFull">
                <div class="row g-5">
                    <div class="col-lg-6 ">
                        <h6 class="text_secondary text-uppercase ">About Us</h6>
                        <h4 class="mb-4 heading fontHeading fontWeight600 mt-3 text_primary">Empowering Lives with Care
                        </h4>
                        <p class="mb-4">At Second Bloom, we strive to make a difference in the lives of the elderly and
                            disabled who may require the support to live safely and comfortably. We have multiple
                            locations throughout the city of Philadelphia, PA.
                        </p>

                        <p class="">
                            Our vision is to provide a network of
                            care that includes dignity, independence, and a sense of belonging for those we serve.

                        </p>
                        <!-- <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque laboriosam temporibus quia
                            blanditiis obcaecati quaerat necessitatibus molestiae repellat optio doloribus reiciendis
                            commodi ratione et, corporis ea magni sint iure accusantium?
                        </p> -->

                        <div>
                            <div class="mt-5">
                                <a class="btn_3" href="tel:+91-0123456789">
                                    <span class=" btn_icon bg-white circle pulse">
                                        <i class="fa-solid fa-phone   "></i>
                                    </span> <span>
                                        <p class="btn_letterspacing  ">
                                            Contact with us
                                        </p>
                                        <h4 class="fontWeight700">
                                            +91-0123456789
                                        </h4>
                                    </span> &nbsp;</a>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6 pt-4" style="min-height: 500px;">
                        <div class="position-relative h-100 ">
                            <img class="position-absolute img-fluid w-100 h-100" src="images/pexels-rdne-6646990.jpg"
                                style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                            <!-- <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50"
                                src="https://images.pexels.com/photos/27086771/pexels-photo-27086771/free-photo-of-an-older-man-sitting-on-a-couch-using-his-cell-phone.jpeg?auto=compress&cs=tinysrgb&w=300&h=300&dpr=1"
                                style="object-fit: cover;" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="bg_third">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6">
                        <div class=" about-section  pe-4">
                            <video autoplay="" loop="" muted="">
                                <source src="images/about.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                        </div>

                    </div>
                    <div class="col-lg-6">
                        <h4 class="heading fontHeading fontWeight600  text-light text-decoration-underline "
                            style="text-underline-offset: 10px;">
                            Our Purpose
                        </h4>

                        <p class="text-light mt-4">
                            With over 47 million senior citizens living alone in the United States, many face challenges
                            regarding maintaining their everyday lives due to health issues, mobility impairments, or
                            other unreliable sources of support. Following a series of discussions we held with social
                            workers from around Philadelphia, we realized there was an urgent need: the acquisition of
                            suitable housing and adequate care for seniors with disabilities or insecurities concerning
                            housing.
                            It was this realization that motivated Second Bloom. Our purpose is to connect people,
                            providing holistic care and advocating for those who need it most.
                        </p>

                        <h4 class="heading fontHeading fontWeight600 mt-4  text-light text-decoration-underline "
                            style="text-underline-offset: 10px;">
                            What We Do
                        </h4>
                        <p class="mt-4 text-light">


                            At Second Bloom, we offer more than just housing solutions. We
                            believe that everyone deserves a supportive environment that addresses both physical and
                            emotional needs. Our services include:
                        </p>

                    </div>


                </div>

            </div>
        </section>
        <section class="why-choose-us-area">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="heading fontHeading fontWeight600 why_choose_title">
                            <span class="text_secondary"> Why Choose</span> <span class="text_primary">Second
                                Bloom</span>
                        </h4>
                        <!-- <p class="mt-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, maiores? adipisicing
                            elit. Recusandae, maiores?
                        </p> -->
                        <div class="pe-5 mt-4">
                            <?php foreach ($whyChooseUs as $content): ?>
                                <div class="why-card-item mb-4">
                                    <div class="img_box">

                                        <img src="<?php echo $content['image']; ?>" alt="<?php echo $content['title']; ?>"
                                            class="why-card-image">
                                    </div>
                                    <div class="why_content mt-4">
                                        <h4 class="fontHeading  fontWeight600"><?php echo $content['title']; ?></h4>
                                        <p class="mt-3"><?php echo $content['description']; ?></p>
                                    </div>

                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                    <div class="col-lg-6 why-slider">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/why_img (1).jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/why_img (2).jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/why_img (3).jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fact-area fact-map bg_primary position-relative call-to-action1 ">
            <div class="containerFull">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="section-title pos-rel mb-45">
                            <div class="section-text section-text-white pos-rel">
                                <h5 class="text-white-50">We are available 24/7</h5>
                                <h3 class="white-color heading fontHeading fontWeight600 text_forth mt-3 ">We Always
                                    Ready For A Challenge.</h3>
                            </div>
                        </div>
                        <div class="section-button section-button-left mt-5">
                            <!-- <a data-animation="fadeInLeft" data-delay=".6s" href="#"
                                class="btn btn-icon ml-0"><span>+</span>Make Appointment</a> -->
                            <a href="tel:0123456789">
                                <div class=" mt-4 mt-lg-0 me-lg-n4 py-3 px-4 bg_secondary d-flex align-items-center"
                                    style="width:fit-content">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                        style="width: 45px; height: 45px;">
                                        <i class="fa fa-phone-alt text_primary"></i>
                                    </div>
                                    <div class="ms-3">
                                        <!-- <p class="mb-1 text-white">Emergency 24/7</p> -->
                                        <h5 class="m-0 text-secondary text-light">+012 345 6789</h5>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-md-8">
                        <div class="cta-satisfied">
                            <div class="single-satisfied mb-5">
                                <h4 class="h1">1M+</h4>
                                <h5> <i class="fas fa-user"></i> Satisfied Patients</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna
                                    aliqua.</p>
                            </div>
                            <div class="single-satisfied ">
                                <h4 class="h1">100+</h4>
                                <h5><i class="far fa-thumbs-up"></i> World Awards</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna
                                    aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-12 text-center mb-5">
                        <h4 class="heading fontHeading fontWeight800">Save your time and money by choosing Our highly
                            performant team.</h4>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="card text-center">
                            <div class="card-body py-5">
                                <figure class="mb-4">
                                    <img src="https://block.codescandy.com/assets/images/avatar/avatar-3.jpg"
                                        alt="avatar" class="avatar avatar-xxl rounded-circle" />
                                </figure>
                                <h5 class="mb-1">Anita Parmar</h5>
                                <small>Product Manager</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card text-center">
                            <div class="card-body py-5">
                                <figure class="mb-4">
                                    <img src="https://block.codescandy.com/assets/images/avatar/avatar-1.jpg"
                                        alt="avatar" class="avatar avatar-xxl rounded-circle" />
                                </figure>
                                <h5 class="mb-1">Sandip Chauhan</h5>
                                <small>Developer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card text-center">
                            <div class="card-body py-5">
                                <figure class="mb-4">
                                    <img src="https://block.codescandy.com/assets/images/avatar/avatar-2.jpg"
                                        alt="avatar" class="avatar avatar-xxl rounded-circle" />
                                </figure>
                                <h5 class="mb-1">Manasvi Suthar</h5>
                                <small>Co-Founder</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card text-center">
                            <div class="card-body py-5">
                                <figure class="mb-4">
                                    <img src="https://block.codescandy.com/assets/images/avatar/avatar-6.jpg"
                                        alt="avatar" class="avatar avatar-xxl rounded-circle" />
                                </figure>
                                <h5 class="mb-1">Shweta Singh</h5>
                                <small>Sales Team Lead</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card text-center">
                            <div class="card-body py-5">
                                <figure class="mb-4">
                                    <img src="https://block.codescandy.com/assets/images/avatar/avatar-4.jpg"
                                        alt="avatar" class="avatar avatar-xxl rounded-circle" />
                                </figure>
                                <h5 class="mb-1">Rohan Kacha</h5>
                                <small>UX Designer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card text-center">
                            <div class="card-body py-5">
                                <figure class="mb-4">
                                    <img src="https://block.codescandy.com/assets/images/avatar/avatar-7.jpg"
                                        alt="avatar" class="avatar avatar-xxl rounded-circle" />
                                </figure>
                                <h5 class="mb-1">Vallabh Sompura</h5>
                                <small>Product Designer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card text-center">
                            <div class="card-body py-5">
                                <figure class="mb-4">
                                    <img src="https://block.codescandy.com/assets/images/avatar/avatar-7.jpg"
                                        alt="avatar" class="avatar avatar-xxl rounded-circle" />
                                </figure>
                                <h5 class="mb-1">Vallabh Sompura</h5>
                                <small>Product Designer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card text-center">
                            <div class="card-body py-5">
                                <figure class="mb-4">
                                    <img src="https://block.codescandy.com/assets/images/avatar/fallback.jpg"
                                        alt="avatar" class="avatar avatar-xxl rounded-circle" />
                                </figure>
                                <h5 class="mb-1">Your Pic</h5>
                                <a href="#" class="icon-link">Join the team
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php include 'include/footer.php'; ?>
    </div>
    <?php include 'include/footer-links.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script type="text/javascript">
        Fancybox.bind("[data-fancybox]", {});
    </script>
</body>

</html>