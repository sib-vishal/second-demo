<?php $page = 'services'; ?>
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
    <title>Our Services | Second Bloom</title>
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
                        Our Services
                    </h1>
                    <p class="mt-3 text-white-50 fontWeight600">
                        Home / Our Services
                    </p>
                </div>
            </div>
        </div>

        <section class="bg-lightgray">
            <div class="containerFull">
                <h4 class="heading fontHeading fontWeight600">
                    <span class="text_primary"> Expert </span> <span class="text_secondary">Healthcare Services</span>
                </h4>
                <p class="mt-3">
                    Second Bloom offers a comprehensive range of services to help seniors navigate the complexities of
                    immigration, work, and living in the United States. We strive to provide a supportive,
                    accessible, and empathetic environment that fosters resilience and strengthens our clients'
                    relationships with their families and communities.
                </p>
                <div class="">
                    <div class=" ">
                        <div class="row mt-4">
                            <!-- Accompaniment to Medical Appointments -->
                            <div class="col-md-6  mb-4">
                                <div class="service-card">
                                    <div class="service-card-body">
                                        <h5 class="service-card-title"> <span class="text_forth">Accompaniment</span> to
                                            Medical Appointments</h5>
                                        <p class="service-card-text">The process of navigating medical appointments can
                                            be
                                            daunting, even for those elderly or disabled and in need of further
                                            assistance. Care attendants at Second Bloom offer tailored accompaniment
                                            support to clients, making them feel safe and secure when visiting the
                                            doctor. We help from appointment scheduling to even transportations. Our
                                            attendants also give clients a comforting presence during consultations to
                                            ensure all medical advice and instructions are understood and effectively
                                            communicated./p>
                                    </div>
                                </div>
                            </div>

                            <!-- Cooking & Laundry Service -->
                            <div class="col-md-6  mb-4">
                                <div class="service-card">
                                    <div class="service-card-body">
                                        <h5 class="service-card-title"> <span class="text_forth">Cooking</span> &
                                            Laundry Service</h5>
                                        <p class="service-card-text">To live a healthy and happy life, a body with good
                                            nutrition and a clean, comfortable place to be are a must. Our staff can
                                            provide culinary services designed for every client's needs and preferences,
                                            cooking nourishing and tasty meals for overall well-being. We also take care
                                            of the laundry, creating fresh and clean clothes and linens for use in an
                                            always clean and beautifully maintained space. We leave our clients free to
                                            do what is important: enjoying the day in comfort and serenity.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Personal Care (Bathing and Dressing) -->
                            <div class="col-md-6  mb-4">
                                <div class="service-card">
                                    <div class="service-card-body">
                                        <h5 class="service-card-title"> <span class="text_forth">Personal Care</span>,
                                            Such as Bathing and Dressing</h5>
                                        <p class="service-card-text">Even though hygiene is very essential for dignity
                                            and
                                            health, it is a challenge for those with less mobility or physical
                                            difficulties. Our caring caregivers assist with bathing, dressing, and
                                            personal grooming to enable clients to feel refreshed and self-assured every
                                            day. We treat our clients with dignity and compassion while instilling the
                                            confidence of independence in their lives.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Housekeeping and Running Errands -->
                            <div class="col-md-6  mb-4">
                                <div class="service-card">
                                    <div class="service-card-body">
                                        <h5 class="service-card-title"> <span class="text_forth">Housekeeping</span> and
                                            Running Errands</h5>
                                        <p class="service-card-text">Basic to a life free of stress is the cleanliness
                                            of living
                                            areas, as well as providing the means for daily errands. Light housekeeping
                                            services, in keeping living spaces clean and appealing, is just one of the
                                            things that Second Bloom is offering. Dusting, vacuuming, and organizing
                                            essentials for ease of access ensure that the homes of our clients are
                                            maintained as sanctuaries. Care attendants can also run errands such as
                                            picking up groceries, prescriptions, and other everyday duties for the
                                            betterment of life.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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




        <?php include 'include/footer.php'; ?>
    </div>
    <?php include 'include/footer-links.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script type="text/javascript">
        Fancybox.bind("[data-fancybox]", {});
    </script>
</body>

</html>