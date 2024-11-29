<?php $page = 'home'; ?>
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
    <title>Second Bloom </title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body onload="createCaptcha();">
    <div class="wrapper ">
        <?php include 'include/header.php'; ?>
        <div class="banner-wrapper">
            <div class="swiper banner_swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url('images/banner.jpg')">
                        <div class="banner-slide slide-1">
                            <div class="containerFull w-100">
                                <div class="slide_inner row pt-5 mt-4 align-items-center">

                                    <div class="col-lg-6  pe-5">
                                        <h1 class="mt-4 fontHeading  sub_heading fontWeight700  fade-up fade-up-2">
                                            <span class="text_primary">Because every life deserves care,</span>
                                            <span class="text_secondary">comfort, and a second bloom.</span>
                                        </h1>
                                        <!-- <div class="d-flex justify-content-center"> -->
                                        <p class="mt-3 fontWeight500   fade-up fade-up-3 pe-lg-5">
                                            With years of experience and an expert team, Second Bloom is dedicated to
                                            providing compassionate care and tailored support to ensure every client
                                            lives safely and comfortably
                                        </p>
                                        <!-- </div> -->

                                        <div class="mt-5 d-flex  gap-2 fade-up fade-up-4">
                                            <a class="btn_2" href="#">Know More</a>
                                            <a class="btn_4" href="#">Contact Us</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ">
                                        <div class="bannerForm_main">
                                            <form action="" class="bg-white bannerForm">
                                                <h5 class="fontHeading text_primary fontWeight700 px-3 pt-4 text">
                                                    Speak To A Our Expert
                                                </h5>

                                                <div class="p-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="tel" class="form-control" id="floatingName"
                                                            placeholder="Name">
                                                        <label for="floatingName">Name</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input type="email" class="form-control" id="floatingInput"
                                                            placeholder="name@example.com">
                                                        <label for="floatingInput">Email address</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input type="tel" class="form-control" id="floatingPassword"
                                                            placeholder="Phone No.">
                                                        <label for="floatingPassword">Phone No.</label>
                                                    </div>
                                                    <div class="form-floating">
                                                        <textarea class="form-control"
                                                            placeholder="Leave a message here" style="height: 100px"
                                                            id="floatingTextarea"></textarea>
                                                        <label for="floatingTextarea">Message</label>
                                                    </div>
                                                    <button class="btn_1 border-0 header-btn w-100 py-3 mt-3  "
                                                        type="submit">
                                                        Connent With Us
                                                    </button>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Repeat the same for the next slides -->
                </div>
                <div class="swiper-pagination"></div>
            </div>


        </div>


        <!-- section about -->
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

                        <!-- <h4 class="heading fontHeading fontWeight600 mt-4  text-light text-decoration-underline "
                            style="text-underline-offset: 10px;">
                            What We Do
                        </h4>
                        <p class="mt-4 text-light">


                            At Second Bloom, we offer more than just housing solutions. We
                            believe that everyone deserves a supportive environment that addresses both physical and
                            emotional needs. Our services include:
                        </p> -->

                    </div>


                </div>

            </div>
        </section>
        <section class="bg_forth">
            <div class="containerFull">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h4 class="heading fontHeading fontWeight600  ">
                            What We Do

                        </h4>
                        <p class="mt-3">
                            At Second Bloom, we offer more than just housing solutions. We believe that everyone
                            deserves a supportive environment that addresses both physical and emotional needs.
                        </p>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <a href="#" class="btn_2">
                            Connect with Us for Appointment
                        </a>
                    </div>

                </div>

            </div>
        </section>

        <!-- infographics -->
        <!-- <section>
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="info_card">
                            <div class="img_box">
                                <img src="images/icons/24-hours.png" alt="" />
                            </div>
                            <h4>
                                24-Hour Live-In Care
                            </h4>
                            <p>
                                Dedicated care attendants assist clients with daily living tasks, ensuring their comfort
                                and well-being at all times.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="info_card">
                            <div class="img_box">
                                <img src="images/icons/community.png" alt="" />
                            </div>
                            <h4>
                                Community Support
                            </h4>
                            <p>
                                We actively help clients integrate into the community, offering guidance and support for
                                activities and social interactions that promote a fulfilling lifestyle.
                            </p>
                        </div>
                    </div>



                    <div class="col-lg-4">
                        <div class="info_card">
                            <div class="img_box">
                                <img src="images/icons/medical-team.png" alt="" />
                            </div>
                            <h4>
                                Medical Assistance
                            </h4>
                            <p>
                                Our team works closely with healthcare professionals, to coordinate medical care, manage
                                medications, and address health concerns promptly.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section> -->
        <section>
            <div class="containerFull">

                <div class="row">
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
                    <div class="col-lg-6 ps-lg-5">
                        <h4 class="fontHeading heading fontWeight600 text_primary">
                            What We <span class="text_forth">offer</span>
                        </h4>
                        <p class="mt-3">

                            We are committed to providing compassionate, accessible healthcare services that promote
                            overall well-being and resilience. Our team offers comprehensive care, including primary
                            care, mental health support, and specialized services tailored to each patient's needs.
                        </p>
                        <div class="row row-cols-2 mt-3 offerGrid">
                            <div class="item_offer">
                                <div class="img_box">
                                    <img src="images/icons/24-hours.png" alt="" />
                                </div>
                                <h4>
                                    24-Hour Live-In Care
                                </h4>
                            </div>
                            <div class="item_offer">
                                <div class="img_box">
                                    <img src="images/icons/community.png" alt="" />
                                </div>
                                <h4>
                                    Community Support
                                </h4>
                            </div>
                            <div class="item_offer">
                                <div class="img_box">
                                    <img src="images/icons/medical-team.png" alt="" />
                                </div>
                                <h4>
                                    Medical Assistance
                                </h4>
                            </div>
                            <div class="item_offer">
                                <div class="img_box">
                                    <img src="images/icons/qualification.png" alt="" />
                                </div>
                                <h4>
                                    Qualified doctors
                                </h4>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>
        <section class="ftco-intro img">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 text-center">
                        <h2>Your Health is Our Priority</h2>
                        <p class="mt-3 text-white">We can manage your dream building A small river named Duden flows by
                            their place</p>
                        <p class="mb-0 mt-5"><a href="#" class="btn_1 text_primary px-4 py-3">Contact Us</a></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-lightgray">
            <div class="containerFull">
                <h4 class="heading fontHeading fontWeight600">
                    <span class="text_primary"> Our </span> <span class="text_secondary">Services</span>
                </h4>
                <p class="mt-3">
                    Second Bloom offers a comprehensive range of services to help seniors navigate the complexities of
                    immigration, work, and living in the United States. We strive to provide a supportive,
                    accessible, and empathetic environment that fosters resilience and strengthens our clients'
                    relationships with their families and communities.
                </p>
                <div class="">
                    <div class=" ">
                        <div class="services_grid mt-4">
                            <!-- Accompaniment to Medical Appointments -->
                            <div class="item_img">
                                <div class="item_img_inner">
                                    <img src="https://img.freepik.com/free-photo/senior-woman-showing-her-doctor-photo-frame_23-2148962335.jpg?t=st=1732777435~exp=1732781035~hmac=2cc71ccb3b182f1ae5d4b90c5c3395b7735d0537522869f26ea9504aaea8145a&w=740"
                                        alt="">
                                </div>

                            </div>
                            <div class=" item_grid_services">
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
                                            communicated.</p>
                                        <div class="mt-4">
                                            <a href="#" class="text_forth fontWeight600">Learn More <i
                                                    class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Cooking & Laundry Service -->
                            <div class=" item_grid_services">
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
                                        <div class="mt-4">
                                            <a href="#" class="text_forth fontWeight600">Learn More <i
                                                    class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item_img">
                                <div class="item_img_inner">
                                    <img src="images/man-holding-pile-clean-clothes.jpg"
                                        alt="">
                                </div>

                            </div>




                            <div class="item_img">
                                <div class="item_img_inner">
                                    <img src="images/bathing.png"
                                        alt="">
                                </div>

                            </div>

                            <!-- Personal Care (Bathing and Dressing) -->
                            <div class=" item_grid_services">
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
                                        <div class="mt-4">
                                            <a href="#" class="text_forth fontWeight600">Learn More <i
                                                    class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Housekeeping and Running Errands -->
                            <div class=" item_grid_services">
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
                                        <div class="mt-4">
                                            <a href="#" class="text_forth fontWeight600">Learn More <i
                                                    class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item_img">
                                <div class="item_img_inner">
                                    <img src="https://img.freepik.com/free-photo/senior-woman-showing-her-doctor-photo-frame_23-2148962335.jpg?t=st=1732777435~exp=1732781035~hmac=2cc71ccb3b182f1ae5d4b90c5c3395b7735d0537522869f26ea9504aaea8145a&w=740"
                                        alt="">
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section>

        <!-- cta -->
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
                        <div class="mt-5">
                            <a class="btn_5" href="tel:+91-0123456789">
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

        <!-- why choose -->
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


        <!-- contact  -->
        <section class="contact-form">
            <div class="containerFull">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <small class="fontWeight600 text-white-50 ">
                            GET IN TOUCH
                        </small>
                        <h4 class="mt-3 fontHeading  heading text-light ">
                            Contact with us for <span class="text_forth">for an Appointment</span>
                        </h4>

                        <p class="mt-3 pe-lg-5 text-light">
                            At Second Bloom, we are committed to giving elderly and disabled people care and support in
                            a way that ensures they live safely, comfortably, and with dignity. We are located in
                            Philadelphia, PA, and offer services such as housing, 24/7 care, medical assistance, and
                            daily living support. Let us help you or your loved ones bloom again with a trusted
                            partner in care.

                        </p>


                        <div class="mt-5">
                            <a class="btn_5" href="tel:+91-0123456789">
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
                    <div class="col-lg-6 ps-5">
                        <form action="">
                            <div class="form_grid">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="name" placeholder="name">
                                    <label for="name">Name *</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="tel" class="form-control" id="phoneno" placeholder="phone no">
                                    <label for="phoneno">Contact No. *</label>
                                </div>
                                <div class="form-floating ">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Email Address *</label>
                                </div>

                            </div>
                            <div class="form-floating mt-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                    style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Additional Information </label>
                            </div>
                            <button type="submit" class="btn_1 border-0 w-100 mt-4">
                                Submit
                            </button>


                        </form>
                    </div>

                </div>

            </div>

        </section>

    </div>
    <?php include 'include/footer.php'; ?>

    </div>
    <?php include 'include/footer-links.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- <script>
        $('.carousel').carousel({
            interval: 2000
        })

    </script> -->
    <script>
        var swiper = new Swiper(".banner_swiper", {
            spaceBetween: 0,
            // centeredSlides: true,
            slidesPerView: 1,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            // breakpoints: {

            //     320: {
            //         slidesPerView: 2,
            //         spaceBetween: 10
            //     },

            //     480: {
            //         slidesPerView: 2,
            //         spaceBetween: 20
            //     },

            //     640: {
            //         slidesPerView: 3,
            //         spaceBetween: 30
            //     },

            //     768: {
            //         slidesPerView: 4,
            //         spaceBetween: 30
            //     }
            // }
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".value_slider", {
            spaceBetween: 0,
            // centeredSlides: true,
            slidesPerView: 3,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            // breakpoints: {

            //     320: {
            //         slidesPerView: 1,
            //         spaceBetween: 10
            //     },

            //     480: {
            //         slidesPerView: 1,
            //         spaceBetween: 20
            //     },

            //     640: {
            //         slidesPerView: 2,
            //         spaceBetween: 30
            //     },

            //     768: {
            //         slidesPerView: 2,
            //         spaceBetween: 30
            //     }
            //     1024: {
            //         slidesPerView: 3,
            //         spaceBetween: 30
            //     }
            // }
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            navigation: {
                nextEl: ".next_1",
                prevEl: ".prev_1",
            },
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const slides = document.querySelectorAll('.swiper-slide .fade-up');

            // Create an IntersectionObserver to detect when the slide is in view
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-up'); // Trigger animation
                        observer.unobserve(entry.target); // Stop observing once the animation is triggered
                    }
                });
            }, { threshold: 0.5 }); // Trigger when 50% of the element is in the viewport

            // Observe each fade-up element
            slides.forEach(slide => observer.observe(slide));
        });
    </script>
</body>

</html>