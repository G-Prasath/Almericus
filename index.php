<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hope Foundation - Charity & Trust</title>

    <?php include_once './_templates/head.php'; ?>
</head>

<body class="bg-gray-50">
    <?php
    $images = [
        "./imgs/gallery-1.avif",
        "./imgs/gallery-2.avif",
        "./imgs/gallery-3.avif",
        "./imgs/gallery-4.avif",
        "./imgs/gallery-5.avif",
        "./imgs/gallery-6.avif",
        "./imgs/gallery-7.avif",
        "./imgs/gallery-8.avif",
        "./imgs/gallery-9.avif",

    ];

    $sdg_goals = [
        "No Poverty",
        "Zero Hunger",
        "Good Health & Well Being",
        "Sustainable cities & communities",
        "Responsible consumption and production",
        "Climate Action",
        "Life below Water",
        "Life on Land"
    ];
    ?>

    <?php include_once './_templates/navbar.php'; ?>


    <!-- ======================== Banner Start ========================= -->
    <section class="relative h-screen flex flex-col items-center justify-center text-center text-white" id="home">
        <!-- Video background -->
        <div class="absolute inset-0 overflow-hidden">
            <video class="w-full h-full object-cover" src="./imgs/banner.mp4" type="video/mp4" autoplay muted
                loop></video>
            <!-- Dark overlay -->
            <div class="absolute inset-0 bg-black/70"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 space-y-4 max-w-6xl px-4">
            <h1 class="font-bold text-3xl" data-aos="fade-up" data-aos-duration="1500">
                Pioneering Brood-to-Bowl Traceability in Aquaculture
            </h1>
            <h3 class="font-medium text-md max-w-xl mx-auto" data-aos="fade-up" data-aos-duration="1500"
                data-aos-delay="500">
                Certified, antibiotic-free, and fully traceable — delivering trust from farms to global markets.
            </h3>
        </div>
    </section>

    <!-- ========================== Banner End ======================== -->

    <!-- ========================= About Section Start =========================  -->

    <section class="w-full md:w-[90%] bg-gray-100 mx-auto py-8 px-4 lg:py-16 lg:px-6" id="about-us">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto md:mb-16 mb-4">
            <h2 class="text-xl md:text-4xl font-bold mb-4 text-[#22a6e5]" data-aos="fade-up" data-aos-duration="1500">
                About Us </h2>
            <div class="h-1 w-20 bg-[#22a6e5] mx-auto mb-6 rounded-full" data-aos="fade-up" data-aos-duration="1800">
            </div>
            <p class="text-gray-600 md:text-lg text-md" data-aos="fade-up" data-aos-duration="1500"
                data-aos-delay="500">
                Transforming Aquaculture Through Traceability and Innovation</p>
        </div>


        <!-- Hero Section -->
        <section class="bg-gary-100 px-4">
            <div class="container mx-auto flex flex-col md:space-x-10 md:flex-row justify-between items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">

                    <p class="text-md text-gray-600 mb-4 text-justify leading-[28px]" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-delay="500">Founded to revolutionize aquaculture in India,
                        Almericus is ICAR-CIBA
                        incubated and guided by leading
                        scientists. Our platform connects every partner — genetic companies, hatcheries, farmers, input
                        suppliers, processors, exporters, and global buyers — into a fully traceable, transparent, and
                        sustainable ecosystem. </p>

                    <p class="text-md text-gray-600 mb-4 text-justify leading-[28px]" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-delay="500">Through our Brood to Bowl Traceability system, we
                        provide end-to-end,
                        research-backed solutions
                        that ensure high-quality, disease-free shrimp, climate-smart farming practices, and globally
                        compliant
                        supply chains. Almericus builds trust, sustainability, and resilience across the entire
                        aquaculture value
                        chain. </p>

                </div>
                <div class="md:w-1/2 w-full aspect-video overflow-hidden rounded-lg">
                    <img src="./imgs/about.jpg" alt="Hero Image" class="w-full rounded-lg transition-transform duration-500 scale-x-[-1]"
                        data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="500">
                </div>
            </div>
        </section>
    </section>
    <!-- ============================ About Section End ======================= -->

    <!-- ====================== Soluations =============================    -->
    <section id="soluation">
        <div class="bg-[url('./imgs/soluation.avif')] bg-cover bg-center bg-fixed bg-no-repeat">
            <div class="bg-black/60 w-full h-full">
                <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
                    <div class="container mx-auto md:px-6 md:p-6 bg-transparent">


                        <!-- Section Header -->
                        <div class="text-center max-w-3xl mx-auto md:mb-16">
                            <h2 class="text-xl md:text-4xl font-bold mb-4 text-[#22a6e5]" data-aos="fade-up"
                                data-aos-duration="1500">
                                Comprehensive Aquaculture Solutions</h2>
                            <div class="h-1 w-20 bg-[#22a6e5] mx-auto mb-6 rounded-full" data-aos="fade-up"
                                data-aos-duration="1800"></div>
                            <p class="text-white md:text-lg text-md" data-aos="fade-up" data-aos-duration="1500"
                                data-aos-delay="500">
                                Complete Solutions for a Resilient Aquaculture Ecosystem</p>
                        </div>

                        <div class="flex flex-wrap my-12 text-white">

                            <!-- Climate-Resilient Ponds -->
                            <div class="w-full border-b border-[#2db1fd] md:w-1/2 md:border-r lg:w-1/3 md:p-8">
                                <div data-aos="fade-up" data-aos-duration="1500">
                                    <div class="flex items-center mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20"
                                            height="20" fill="currentColor" class="h-6 w-6 text-white">
                                            <path
                                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                            </path>
                                        </svg>
                                        <div class="ml-4 text-xl">Climate-Resilient Ponds</div>
                                    </div>
                                    <p class="leading-loose text-white text-justify">
                                        We identify eco-friendly aquaculture sites through satellite and geospatial
                                        intelligence, ensuring climate-smart, productive, and sustainable ponds that
                                        enhance resilience, optimize yields, and secure long-term profitability for
                                        farmers and investors.
                                    </p>
                                </div>
                            </div>

                            <!-- Seed Solutions -->
                            <div
                                class="w-full border-b border-[#2db1fd] md:w-1/2 lg:w-1/3 lg:border-r md:p-8 max-md:py-8">
                                <div data-aos="fade-up" data-aos-duration="1500">
                                    <div class="flex items-center mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20"
                                            height="20" fill="currentColor" class="h-6 w-6 text-white">
                                            <path
                                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                            </path>
                                        </svg>
                                        <div class="ml-4 text-xl">Seed Solutions</div>
                                    </div>
                                    <p class="leading-loose text-white text-justify">
                                        BlueChain connects farmers with high quality post-larvae from trusted genetic
                                        companies and certified hatcheries, ensuring broodstock health, pathogen
                                        screening, and seed traceability. This guarantees confidence for farmers and
                                        verified assurance for global buyers.
                                    </p>
                                </div>
                            </div>

                            <!-- Farm Inputs Marketplace -->
                            <div
                                class="w-full border-b border-[#2db1fd] md:w-1/2 md:border-r lg:w-1/3 lg:border-r-0 md:p-8 max-md:py-8">
                                <div data-aos="fade-up" data-aos-duration="1500">
                                    <div class="flex items-center mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20"
                                            height="20" fill="currentColor" class="h-6 w-6 text-white">
                                            <path
                                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                            </path>
                                        </svg>
                                        <div class="ml-4 text-xl">Farm Inputs Marketplace</div>
                                    </div>
                                    <p class="leading-loose text-white text-justify">
                                        Our marketplace connects farmers with certified feeds, probiotics, and farm
                                        essentials. Supported by expert guidance, it maximizes productivity, improves
                                        biosecurity, and strengthens farm efficiency, ensuring responsible practices and
                                        better profitability.
                                    </p>
                                </div>
                            </div>

                            <!-- Scientific Expertise & Advisory -->
                            <div
                                class="w-full border-b border-[#2db1fd] md:w-1/2 md:border-r lg:w-1/3 md:p-8 max-md:py-8">
                                <div data-aos="fade-up" data-aos-duration="1500">
                                    <div class="flex items-center mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20"
                                            height="20" fill="currentColor" class="h-6 w-6 text-white">
                                            <path
                                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                            </path>
                                        </svg>
                                        <div class="ml-4 text-xl">Scientific Advisory</div>
                                    </div>
                                    <p class="leading-loose text-white text-justify">
                                        Incubated with ICAR-CIBA, Almericus delivers expert guidance from leading
                                        aquaculture scientists. Farmers benefit from proven, research-backed solutions
                                        that enhance productivity, ensure sustainability, and build trust across the
                                        entire value chain.
                                    </p>
                                </div>
                            </div>

                            <!-- Farm-to-Buyer Traceability -->
                            <div
                                class="w-full border-b border-[#2db1fd] md:w-1/2 lg:w-1/3 lg:border-r md:p-8 max-md:py-8">
                                <div data-aos="fade-up" data-aos-duration="1500">
                                    <div class="flex items-center mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20"
                                            height="20" fill="currentColor" class="h-6 w-6 text-white">
                                            <path
                                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                            </path>
                                        </svg>
                                        <div class="ml-4 text-xl">Farm-to-Buyer Traceability</div>
                                    </div>
                                    <p class="leading-loose text-white text-justify">
                                        QR-enabled Brood to Bowl traceability ensures full visibility from hatchery to
                                        plate. BAP, ASC, SAPHARI, certifications and validated antibiotic-free testing
                                        builds global buyer trust, compliance, and transparency in every shrimp
                                        delivery.
                                    </p>
                                </div>
                            </div>

                            <!-- FCold Chain Logistics -->
                            <div
                                class="w-full border-b border-[#2db1fd] md:w-1/2 md:border-r lg:w-1/3 lg:border-r-0 md:p-8 max-md:py-8">
                                <div data-aos="fade-up" data-aos-duration="1500">
                                    <div class="flex items-center mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20"
                                            height="20" fill="currentColor" class="h-6 w-6 text-white">
                                            <path
                                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                            </path>
                                        </svg>
                                        <div class="ml-4 text-xl">Cold Chain Logistics</div>
                                    </div>
                                    <p class="leading-loose text-white text-justify">
                                        End-to-end temperature-controlled logistics safeguard product freshness and
                                        quality. From farms to certified processing facilities and international buyers,
                                        our integrated system ensures seamless exports, minimized losses, and stronger
                                        global market confidence.
                                    </p>
                                </div>
                            </div>

                            <!-- Financial & Risk Solutions -->
                            <div
                                class="w-full border-b border-[#2db1fd] md:w-1/2 lg:w-1/3 lg:border-r lg:border-b-0 md:p-8 max-md:py-8">
                                <div data-aos="fade-up" data-aos-duration="1500">
                                    <div class="flex items-center mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20"
                                            height="20" fill="currentColor" class="h-6 w-6 text-white">
                                            <path
                                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                            </path>
                                        </svg>
                                        <div class="ml-4 text-xl">Financial & Risk Solutions</div>
                                    </div>
                                    <p class="leading-loose text-white text-justify">
                                        We facilitate loans and insurance to farmers, FPOs, and exporters, ensuring
                                        working capital access and risk protection against diseases, climate risks, and
                                        export challenges, while enabling confidence and long-term financial resilience.
                                    </p>
                                </div>
                            </div>

                            <!-- Blue Carbon Solutions -->
                            <div
                                class="w-full border-b border-[#2db1fd] md:w-1/2 md:border-r md:border-b-0 lg:w-1/3 lg:border-b-0 md:p-8 max-md:py-8">
                                <div data-aos="fade-up" data-aos-duration="1500">
                                    <div class="flex items-center mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20"
                                            height="20" fill="currentColor" class="h-6 w-6 text-white">
                                            <path
                                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                            </path>
                                        </svg>
                                        <div class="ml-4 text-xl">Blue Carbon Solutions</div>
                                    </div>
                                    <p class="leading-loose text-white text-justify">
                                        Climate-smart shrimp farming generates verifiable blue carbon credits, unlocking
                                        extra income for farmers and exporters. This supports biodiversity, global
                                        climate goals, and sustainable production while creating additional economic and
                                        environmental value.
                                    </p>
                                </div>
                            </div>

                            <!-- Global Market Access -->
                            <div
                                class="w-full border-b border-[#2db1fd] md:w-1/2 md:border-b-0 lg:w-1/3 lg:border-b-0 md:p-8 max-md:py-8">
                                <div data-aos="fade-up" data-aos-duration="1500">
                                    <div class="flex items-center mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20"
                                            height="20" fill="currentColor" class="h-6 w-6 text-white">
                                            <path
                                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                            </path>
                                        </svg>
                                        <div class="ml-4 text-xl">Global Market Access</div>
                                    </div>
                                    <p class="leading-loose text-white text-justify">
                                        Almericus connects farmers and exporters directly to certified international
                                        buyers, streamlining compliance, ensuring fair pricing, and creating sustainable
                                        supply chains. This enables farmers to reach premium markets with verified
                                        traceability.
                                    </p>
                                </div>
                            </div>

                        </div>

                        <p class="text-center text-white font-extrabolde text-md md:text-lg" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-delay="500">“Traceable, sustainable aquaculture with
                            global reach — that's the Almericus promise.”</p>

                    </div>
                </div>
            </div>
        </div>


        <!-- =================== Why Choose Us ====================    -->
        <div class="bg-gray-100">
            <section class="py-16 px-4 sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto">
                    <!-- Section Header -->
                    <div class="text-center max-w-3xl mx-auto md:mb-16">
                        <h2 class="text-xl md:text-4xl font-bold mb-4 text-[#22a6e5]" data-aos="fade-up"
                            data-aos-duration="1500">
                            Why Almericus?</h2>
                        <div class="h-1 w-20 bg-[#22a6e5] mx-auto mb-6 rounded-full" data-aos="fade-up"
                            data-aos-duration="1800"></div>
                        <p class="text-gray-600 md:text-lg text-md" data-aos="fade-up" data-aos-duration="1500"
                            data-aos-delay="500">
                            Almericus in building trusted, sustainable shrimp supply chains.</p>
                    </div>

                    <section class="">
                        <div class="container max-w-xl mx-auto space-y-12 lg:px-8 lg:max-w-7xl">
                            <div class="grid lg:gap-8 lg:grid-cols-2 lg:items-center">
                                <div>
                                    <div class="mt-4 space-y-8">
                                        <div class="flex" data-aos="fade-up" data-aos-duration="1500"
                                            data-aos-delay="600">
                                            <div class="flex-shrink-0">
                                                <div class="flex items-center justify-center w-10 h-10 rounded-md">
                                                    <img src="./imgs/choose.png" alt="">
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                <h4 class="text-lg font-medium  ">ICAR-CIBA Backed</h4>
                                                <p class="mt-2 text-gray-600 text-justify max-md:text-sm">
                                                    Research-driven credibility.</p>
                                            </div>
                                        </div>
                                        <div class="flex" data-aos="fade-up" data-aos-duration="1500"
                                            data-aos-delay="700">
                                            <div class="flex-shrink-0">
                                                <div class="flex items-center justify-center w-10 h-10 rounded-md">
                                                    <img src="./imgs/choose.png" alt="">
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                <h4 class="text-lg font-medium  ">Pioneering Traceability
                                                </h4>
                                                <p class="mt-2 text-gray-600 text-justify max-md:text-sm">Brood to Bowl
                                                    system connecting the entire
                                                    aquaculture ecosystem. </p>
                                            </div>
                                        </div>
                                        <div class="flex" data-aos="fade-up" data-aos-duration="1500"
                                            data-aos-delay="800">
                                            <div class="flex-shrink-0">
                                                <div class="flex items-center justify-center w-10 h-10 rounded-md">
                                                    <img src="./imgs/choose.png" alt="">
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                <h4 class="text-lg font-medium ">Integrated Ecosystem</h4>
                                                <p class="mt-2 text-gray-600 text-justify max-md:text-sm">Genetic
                                                    companies, hatcheries, farmers,
                                                    input suppliers, processors, exporters, and buyers in one platform.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex" data-aos="fade-up" data-aos-duration="1500"
                                            data-aos-delay="900">
                                            <div class="flex-shrink-0">
                                                <div class="flex items-center justify-center w-10 h-10 rounded-md">
                                                    <img src="./imgs/choose.png" alt="">
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                <h4 class="text-lg font-medium ">Sustainability, Transparency & Trust
                                                </h4>
                                                <p class="mt-2 text-gray-600 text-justify max-md:text-sm">Every shrimp
                                                    is fully verified,
                                                    antibiotic-free, and globally compliant.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div aria-hidden="true" class="mt-10 lg:mt-0">
                                    <img src="./imgs/why.avif" class="mx-auto rounded-md" data-aos="zoom-in"
                                        data-aos-duration="3000" data-aos-delay="1000">
                                </div>
                            </div>
                        </div>
                    </section>


                </div>
            </section>
        </div>
    </section>

    <!-- ====================== Gallery Section ====================   -->
    <section id="gallery">
        <div class="w-full md:w-[90%] mx-auto py-8 px-4 lg:py-16 lg:px-6">
            <div class="text-center max-w-3xl mx-auto md:mb-16 mb-4">
                <h2 class="text-xl md:text-4xl font-bold mb-4 text-[#22a6e5]" data-aos="fade-up"
                    data-aos-duration="1500">
                    Gallery </h2>
                <div class="h-1 w-20 bg-[#22a6e5] mx-auto mb-6 rounded-full" data-aos="fade-up"
                    data-aos-duration="1800"></div>
                <p class="text-gray-600 md:text-lg text-md" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-delay="500">
                    Transforming Shrimp Farming with Innovation</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-5">
                <?php foreach ($images as $src): ?>
                    <div class="overflow-hidden rounded-lg" data-aos="zoom-in" data-aos-duration="1500">
                        <img class="h-auto max-w-full rounded-lg transition-transform duration-300 hover:scale-110"
                            src="<?= $src ?>" alt="Gallery image" />
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- ==================== Vision Mission Section ==================== -->
        <div class="h-full w-full md:w-[90%] mx-auto bg-gray-100 py-12 p-4">

            <div class="grid gap-14 md:grid-cols-2 md:gap-5">
                <div class="rounded-xl bg-white p-6 text-center shadow-xl">
                    <div
                        class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-teal-400 shadow-lg shadow-teal-500/40">
                        <img src="./imgs/vision.png" class="w-10" alt="">
                    </div>
                    <h1 class="text-darken mb-3 text-xl font-medium lg:px-14" data-aos="zoom-in"
                        data-aos-duration="1000" data-aos-delay="300">Vision</h1>
                    <p class="px-4 text-gray-500" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="300">
                        Traceable, Sustainable Aquaculture </p>
                </div>
                <div data-aos-delay="150" class="rounded-xl bg-white p-6 text-center shadow-xl">
                    <div
                        class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full shadow-lg bg-rose-500 shadow-rose-500/40">
                        <img src="./imgs/mission.png" class="w-10" alt="">
                    </div>
                    <h1 class="text-darken mb-3 text-xl font-medium lg:px-14 " data-aos="zoom-in"
                        data-aos-duration="1000" data-aos-delay="300">Mission</h1>
                    <p class="px-4 text-gray-500" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="300">
                        Delivering Brood to Bowl, verified, sustainable aquaculture solutions </p>
                </div>
            </div>

        </div>
    </section>

    <!-- ============================ SDG Sections ========================= -->
    <section class="relative bg-fixed bg-center bg-cover py-20 md:min-h-screen"
        style="background-image: url('./imgs/sdg-bg.jpg');" id="sdg">

        <!-- Dark overlay for readability -->
        <div class="absolute inset-0 bg-black/40  bg-opacity-70"></div>

        <div class="container relative z-10 md:max-w-[90%] mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">

                <!-- Left Content -->
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <p class="text-[#22a6e5] text-xl md:text-2xl mb-8 font-bold text-medium">
                        UN SDG
                    </p>

                    <p class="text-white font-bold md:text-5xl text-2xl leading-tight mb-6">
                        We are aligned with UN SDG’s on below:
                    </p>
                    <ul class="text-sm md:text-md font-medium text-gray-700 text-white sm:text-base md:mx-auto">
                        <?php foreach ($sdg_goals as $goal): ?>
                            <li class="my-4 flex items-center">
                                <svg class="mr-2 flex-shrink-0 text-[#22a6e5] font-bold" width="24" height="24"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#22a6e5">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 
                         01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 
                         1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <?= htmlspecialchars($goal) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                </div>

                <!-- Right Image -->
                <div class="md:w-1/2 flex justify-center">
                    <img src="./imgs/sdg.jpg" alt="Coffee beans"
                        class="md:w-[50%] w-full rounded-lg shadow-lg filter grayscale hover:grayscale-0 transition duration-500">
                </div>
            </div>
        </div>
    </section>



    <!-- ========================= Videos ========================  -->
    <!-- <section class="relative text-white overflow-hidden section-padding md:py-16 py-10" id="video">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-3xl mx-auto md:mb-14 mb-4">
                <h2 class="text-xl md:text-4xl font-bold mb-4 text-[#22a6e5]" data-aos="fade-up"
                    data-aos-duration="1500">
                    Shrimp Pond Tour
                </h2>
                <div class="h-1 w-20 bg-[#22a6e5] mx-auto mb-6 rounded-full" data-aos="fade-up"
                    data-aos-duration="1800"></div>
                <p class="text-gray-600 md:text-lg text-md" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-delay="500">
                    A closer look at sustainable farming practices and healthy growth.
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="relative overflow-hidden shadow-2xl" id="video-container">
                    <div id="thumbnail" class="relative">
                        <img src="./imgs/video.jpg" alt="Video thumbnail" class="w-full aspect-video object-cover" />
                        <div class="absolute inset-0 bg-black/30 flex items-center justify-center cursor-pointer"
                            id="play-button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-18 w-18" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" fill="white" />
                                <polygon points="10,8 16,12 10,16" fill="#22a6e5" />
                            </svg>
                        </div>
                    </div>

                    <div id="video-cnt" class="hidden aspect-video relative">
                        <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/vlCxhqDrkWM"
                            title="The Artist Barefoot Showcase" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section> -->





    <!-- ========================= Contact Form =========================   -->
    <section class="py-16" id="contact">
        <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
            <div class="hidden lg:block md:w-1/2 lg:w-[80%] bg-cover" data-aos="zoom-in" data-aos-duration="1300"
                style="background-image:url('./imgs/form.avif')">
            </div>
            <div class="w-full p-8 md:w-1/2 lg:w-[80%]">
                <h2 class="text-2xl font-semibold text-gray-700 text-center" data-aos="fade-up"
                    data-aos-duration="1000">Welcome</h2>
                <div class="mt-4 flex items-center justify-between" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="300">
                    <span class="border-b w-1/5 lg:w-1/4"></span>
                    <a href="#" class="text-xs text-center text-gray-500 uppercase">Send Your Enquiry via Email</a>
                    <span class="border-b w-1/5 lg:w-1/4"></span>
                </div>
                <form method="POST" action="mail.php" class="mt-6" data-aos="zoom-in" data-aos-duration="1000"
                    data-aos-delay="600">
                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                        <input
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                            type="text" name="name" autocomplete="off" required />
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                            type="email" name="email" autocomplete="off" required />
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
                        <input
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                            type="text" name="phone" autocomplete="off" required />
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                        <textarea
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                            name="message" rows="4" autocomplete="off"></textarea>
                    </div>

                    <div class="mt-8">
                        <button type="submit"
                            class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">submit</button>
                    </div>

                </form>

            </div>
        </div>
    </section>























    <?php include_once './_templates/cta.php'; ?>

    <?php include_once './_templates/footer.php'; ?>

    <?php include_once './_templates/floating.php'; ?>

    <?php include_once './_templates/script.php'; ?>


</body>

</html>