<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hope Foundation - Charity & Trust</title>

    <?php include_once './_templates/head.php'; ?>
</head>

<body class="bg-gray-50">

    <?php include_once './_templates/navbar.php'; ?>


    <!-- ======================== Banner Start ========================= -->
    <section class="relative w-full h-screen overflow-hidden" id="home">

        <!-- Track -->
        <div id="carousel" class="carousel-track flex w-full h-full">

            <!-- Slide 1 -->
            <div class="w-full h-full flex-shrink-0 relative">
                <img src="./imgs/b1.jpg" class="w-full h-full object-cover" alt="Slide 1">
                <div class="absolute inset-0 bg-black/50 flex flex-col justify-center items-center text-center">
                    <h1 class="text-xl md:text-4xl font-bold text-white max-w-4xl" data-aos="fade-up"
                        data-aos-duration="1500">End to End Aquaculture Solutions</h1>
                    <p class="text-sm md:text-[18px] text-gray-200 mt-3 max-w-6xl" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-delay="500">Almericus is a tech enabled
                        aquaculture business platform designed to give insights and access to, Climate resilient
                        Eco-friendly sites, High quality seeds and Consulting.</p>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="w-full h-full flex-shrink-0 relative">
                <img src="./imgs/b2.jpg" class="w-full h-full object-cover" alt="Slide 1">
                <div class="absolute inset-0 bg-black/50 flex flex-col justify-center items-center text-center">
                    <h1 class="text-xl md:text-4xl font-bold text-white max-w-4xl" data-aos="fade-up"
                        data-aos-duration="1500"> From Pond to Global Markets -
                        Traceable, Sustainable Aquaculture </h1>
                    <p class="text-sm md:text-[18px] text-gray-200 mt-3 max-w-6xl" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-delay="9000">Almericus delivers end-to-end
                        solutions across the aquaculture value chain — from climate resilient ponds, high-quality
                        genetic seeds, and farm inputs to sourcing, logistics, and international market access. Driving
                        transparency, sustainability, and impact at every step. </p>
                </div>
            </div>

            <!-- Slide 3 -->
            <!-- <div class="w-full h-full flex-shrink-0 relative">
                <img src="https://picsum.photos/id/1016/1920/1080" class="w-full h-full object-cover" alt="Slide 1">
                <div class="absolute inset-0 bg-black/50 flex flex-col justify-center items-center text-center">
                    <h1 class="text-xl md:text-4xl font-bold text-white max-w-4xl"> From Pond to Global Markets - Traceable, Sustainable Aquaculture </h1>
                    <p class="text-sm md:text-[18px] text-gray-200 mt-3 max-w-6xl">Almericus delivers end-to-end solutions across the aquaculture value chain — from climate resilient ponds, high-quality genetic seeds, and farm inputs to sourcing, logistics, and international market access. Driving transparency, sustainability, and impact at every step. </p>
                </div>
            </div> -->
        </div>

        <!-- Navigation -->
        <button id="prevBtn"
            class="absolute left-5 hidden sm:block md:top-1/2 -translate-y-1/2 bg-white/40 hover:bg-white/70 text-black p-3 rounded-full">❮</button>
        <button id="nextBtn"
            class="absolute right-5 hidden sm:block md:top-1/2 -translate-y-1/2 bg-white/40 hover:bg-white/70 text-black p-3 rounded-full">❯</button>
    </section>
    <!-- ========================== Banner End ======================== -->

    <!-- ========================= About Section Start =========================  -->

    <section class="w-full md:w-[90%] bg-gray-100 mx-auto py-8 px-4 lg:py-16 lg:px-6" id="about-us">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto md:mb-16 mb-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 bg-gradient-to-r from-indigo-600 to-[#2db1fd] bg-clip-text text-transparent"
                data-aos="fade-up" data-aos-duration="1500">
                About Us </h2>
            <div class="h-1 w-20 bg-gradient-to-r from-indigo-600 to-[#2db1fd] mx-auto mb-6 rounded-full"
                data-aos="fade-up" data-aos-duration="1800"></div>
            <p class="text-gray-600 text-lg" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
                Transforming Aquaculture Through Traceability and Innovation</p>
        </div>


        <div class="flex flex-col md:flex-row">
            <!-- can help image -->
            <div class="mr-0 md:mr-8 mb-6 md:mb-0">
                <img class="w-full max-md:aspect-square md:w-[550px] mx-auto" src="./imgs/about.jpeg"
                    alt="can_help_banner" data-aos="zoom-in" data-aos-duration="2000">
            </div>
            <!-- end can help image -->

            <div class="flex-1 flex flex-col sm:flex-row flex-wrap -mb-4 -mx-2">
                <div class="w-full sm:w-1/2 mb-4 px-2 ">
                    <div class="h-full  px-6 border border-[#2db1fd] border-t-0 border-l-0 rounded-br-xl">
                        <p class="text-md leading-[25px] text-justify text-gray-600" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-delay="500">Trusted by farmers, hatcheries, genetic
                            companies, farm input suppliers, and domestic and global
                            buyers, Almericus ensures transparent, traceable, sustainable, and resilient aquaculture
                            across the
                            entire value chain. </p>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 mb-4 px-2 ">
                    <div class="h-full  px-6 border border-[#2db1fd] border-t-0 border-l-0 rounded-br-xl">
                        <p class="text-md leading-[25px] text-justify text-gray-600" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-delay="800">Founded with a vision to revolutionize
                            aquaculture in India, Almericus is the country’s most trusted
                            traceability ecosystem platform, incubated at ICAR-CIBA, Chennai, and guided by CIBA
                            scientists. </p>
                    </div>
                </div>

                <div class="w-full sm:w-1/2 mb-4 px-2 ">
                    <div class="h-full  px-6 border border-[#2db1fd] border-t-0 border-l-0 rounded-br-xl">
                        <p class="text-md leading-[25px] text-justify text-gray-600" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-delay="800">Through our integrated traceability ecosystem
                            platform, we provide end-to-end, research-backed
                            solutions — from climate-resilient ponds, high-quality genetic seeds, and farm inputs to
                            sourcing,
                            processing, cold chain logistics, and international market access with traceability. </p>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- ============================ About Section End ======================= -->

    <!-- ====================== Soluations =============================    -->
    <section class="bg-white pb-6" id="soluation">
        <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
            <div class="container mx-auto px-6 p-6 bg-white">


                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto md:mb-16 mb-4">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 bg-gradient-to-r from-indigo-600 to-[#2db1fd] bg-clip-text text-transparent"
                        data-aos="fade-up" data-aos-duration="1500">
                        Comprehensive Aquaculture Solutions</h2>
                    <div class="h-1 w-20 bg-gradient-to-r from-indigo-600 to-[#2db1fd] mx-auto mb-6 rounded-full"
                        data-aos="fade-up" data-aos-duration="1800"></div>
                    <p class="text-gray-600 text-lg" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
                        Complete Solutions for a Resilient Aquaculture Ecosystem</p>
                </div>

                <div class="flex flex-wrap my-12">

                    <!-- Almericus -->
                    <div class="w-full border-b border-[#2db1fd] md:w-1/2 md:border-r lg:w-1/3 p-8">
                        <div data-aos="fade-up" data-aos-duration="1500">
                            <div class="flex items-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                    fill="currentColor" class="h-6 w-6 text-indigo-500">
                                    <path
                                        d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                    </path>
                                </svg>
                                <div class="ml-4 text-xl">Almericus</div>
                            </div>
                            <p class="leading-loose text-gray-500 text-justify">
                                The backbone of end-to-end shrimp traceability, empowering farmers, assuring global
                                buyers, and connecting all ecosystem partners in one seamless platform. Our Brood to
                                Bowl Traceability ecosystem ensures every step — from high-quality broodstock, certified
                                hatchery seeds, climate-smart farms, and farm inputs to certified processing, cold chain
                                logistics, and global market access — is fully verified, transparent, and
                                antibiotic-free.
                            </p>
                        </div>
                    </div>

                    <!-- Climate-Resilient Ponds -->
                    <div class="w-full border-b border-[#2db1fd] md:w-1/2 lg:w-1/3 lg:border-r p-8">
                        <div data-aos="fade-up" data-aos-duration="1500">
                            <div class="flex items-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                    fill="currentColor" class="h-6 w-6 text-indigo-500">
                                    <path
                                        d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                    </path>
                                </svg>
                                <div class="ml-4 text-xl">Climate-Resilient Ponds</div>
                            </div>
                            <p class="leading-loose text-gray-500 text-justify">
                                We identify eco-friendly, productive aquaculture sites using satellite and geospatial
                                tools,
                                ensuring sustainable and profitable farm operations.
                            </p>
                        </div>
                    </div>

                    <!-- Seed Solutions -->
                    <div class="w-full border-b border-[#2db1fd] md:w-1/2 md:border-r lg:w-1/3 lg:border-r-0 p-8">
                        <div data-aos="fade-up" data-aos-duration="1500">
                            <div class="flex items-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                    fill="currentColor" class="h-6 w-6 text-indigo-500">
                                    <path
                                        d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                    </path>
                                </svg>
                                <div class="ml-4 text-xl">Seed Solutions for Quality & Biosecurity</div>
                            </div>
                            <p class="leading-loose text-gray-500 text-justify">
                                Access high-quality, disease-free post-larvae from trusted genetic companies and
                                certified
                                hatcheries. BlueChain guarantees broodstock health, pathogen screening, and complete
                                seed
                                traceability, giving farmers confidence and buyers verified assurance.
                            </p>
                        </div>
                    </div>

                    <!-- Farm Inputs Marketplace -->
                    <div class="w-full border-b border-[#2db1fd] md:w-1/2 md:border-r lg:w-1/3 p-8">
                        <div data-aos="fade-up" data-aos-duration="1500">
                            <div class="flex items-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                    fill="currentColor" class="h-6 w-6 text-indigo-500">
                                    <path
                                        d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                    </path>
                                </svg>
                                <div class="ml-4 text-xl">Farm Inputs Marketplace</div>
                            </div>
                            <p class="leading-loose text-gray-500 text-justify">
                                Direct access to certified feeds, probiotics, and farm essentials, with expert guidance
                                to
                                maximize productivity, efficiency, and biosecurity across farms.
                            </p>
                        </div>
                    </div>

                    <!-- Farm-to-Buyer Traceability -->
                    <div class="w-full border-b border-[#2db1fd] md:w-1/2 lg:w-1/3 lg:border-r p-8">
                        <div data-aos="fade-up" data-aos-duration="1500">
                            <div class="flex items-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                    fill="currentColor" class="h-6 w-6 text-indigo-500">
                                    <path
                                        d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                    </path>
                                </svg>
                                <div class="ml-4 text-xl">Farm-to-Buyer Traceability</div>
                            </div>
                            <p class="leading-loose text-gray-500 text-justify">
                                QR-enabled Brood to Bowl traceability ensures full visibility from hatchery to plate.
                                BAP,
                                ASC, SAPHARI certifications, and verified antibiotic-free testing provide global buyers
                                with
                                trust, compliance, and transparency.
                            </p>
                        </div>
                    </div>

                    <!-- Certified Processing & Cold Chain -->
                    <div class="w-full border-b border-[#2db1fd] md:w-1/2 md:border-r lg:w-1/3 lg:border-r-0 p-8">
                        <div data-aos="fade-up" data-aos-duration="1500">
                            <div class="flex items-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                    fill="currentColor" class="h-6 w-6 text-indigo-500">
                                    <path
                                        d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                    </path>
                                </svg>
                                <div class="ml-4 text-xl">Certified Processing & Cold Chain Logistics</div>
                            </div>
                            <p class="leading-loose text-gray-500 text-justify">
                                End-to-end temperature-controlled logistics ensure product freshness and quality from
                                farm
                                to certified processing and onward to international markets.
                            </p>
                        </div>
                    </div>

                    <!-- Financial & Risk Solutions -->
                    <div class="w-full border-b border-[#2db1fd] md:w-1/2 lg:w-1/3 lg:border-r lg:border-b-0 p-8">
                        <div data-aos="fade-up" data-aos-duration="1500">
                            <div class="flex items-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                    fill="currentColor" class="h-6 w-6 text-indigo-500">
                                    <path
                                        d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                    </path>
                                </svg>
                                <div class="ml-4 text-xl">Financial & Risk Solutions</div>
                            </div>
                            <p class="leading-loose text-gray-500 text-justify">
                                Loans and insurance provide farmers, FPOs, and exporters with working capital and
                                protection
                                against disease, climate, and export risks — building confidence throughout the value
                                chain.
                            </p>
                        </div>
                    </div>

                    <!-- Blue Carbon Solutions -->
                    <div
                        class="w-full border-b border-[#2db1fd] md:w-1/2 md:border-r md:border-b-0 lg:w-1/3 lg:border-b-0 p-8">
                        <div data-aos="fade-up" data-aos-duration="1500">
                            <div class="flex items-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                    fill="currentColor" class="h-6 w-6 text-indigo-500">
                                    <path
                                        d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                    </path>
                                </svg>
                                <div class="ml-4 text-xl">Blue Carbon Solutions</div>
                            </div>
                            <p class="leading-loose text-gray-500 text-justify">
                                Climate-smart shrimp farming practices unlock verifiable blue carbon credits, creating
                                additional income streams for farmers and exporters while supporting biodiversity,
                                sustainable production, and global climate action.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- =================== Why Choose Us ====================    -->
    <section class="bg-[#ecf8fa]" id="why-us">
        <section class="py-16 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto md:mb-16 mb-4">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 bg-gradient-to-r from-indigo-600 to-[#2db1fd] bg-clip-text text-transparent"
                        data-aos="fade-up" data-aos-duration="1500">
                        Why Almericus?</h2>
                    <div class="h-1 w-20 bg-gradient-to-r from-indigo-600 to-[#2db1fd] mx-auto mb-6 rounded-full"
                        data-aos="fade-up" data-aos-duration="1800"></div>
                    <p class="text-gray-600 text-lg" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
                        Almericus in building trusted, sustainable shrimp supply chains.</p>
                </div>

                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">

                    <!-- Feature 1 -->
                    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300"
                        data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
                        <img src="./imgs/shrimp.png" class="w-10 mb-3" alt="ICAR-CIBA">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">ICAR-CIBA Backed</h3>
                        <p class="text-gray-600">
                            Research-driven credibility backed by ICAR-CIBA’s expertise in sustainable aquaculture.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300"
                        data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="300">
                        <img src="./imgs/shrimp.png" class="w-10 mb-3" alt="Traceability">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Pioneering Traceability</h3>
                        <p class="text-gray-600">
                            Brood to Bowl system connecting the entire aquaculture ecosystem seamlessly.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300"
                        data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="400">
                        <img src="./imgs/shrimp.png" class="w-10 mb-3" alt="Ecosystem">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Integrated Ecosystem</h3>
                        <p class="text-gray-600">
                            Genetic companies, hatcheries, farmers, input suppliers, processors, exporters, and buyers
                            in one platform.
                        </p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300"
                        data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="500">
                        <img src="./imgs/shrimp.png" class="w-10 mb-3" alt="Cold Chain">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Specialized Cold Chain Logistics</h3>
                        <p class="text-gray-600">
                            Ensuring farm-to-global market compliance with reliable cold chain logistics.
                        </p>
                    </div>

                    <!-- Feature 5 -->
                    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300"
                        data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="600">
                        <img src="./imgs/shrimp.png" class="w-10 mb-3" alt="Blue Carbon">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Blue Carbon Innovation</h3>
                        <p class="text-gray-600">
                            Climate-smart practices generating new revenue streams through verified carbon credits.
                        </p>
                    </div>

                    <!-- Feature 6 -->
                    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300"
                        data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="700">
                        <img src="./imgs/shrimp.png" class="w-10 mb-3" alt="Trust">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Sustainability, Transparency & Trust</h3>
                        <p class="text-gray-600">
                            Every shrimp is fully verified, antibiotic-free, and globally compliant.
                        </p>
                    </div>

                </div>

            </div>
        </section>
    </section>

    <!-- ==================== Vision Mission Section ==================== -->

    <section class="h-full w-full md:w-[90%] mx-auto bg-gray-100 py-12 p-4">

        <div class="grid gap-14 md:grid-cols-2 md:gap-5">
            <div class="rounded-xl bg-white p-6 text-center shadow-xl">
                <div
                    class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-teal-400 shadow-lg shadow-teal-500/40">
                    <svg viewBox="0 0 33 46" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white">
                        <path
                            d="M24.75 23H8.25V28.75H24.75V23ZM32.3984 9.43359L23.9852 0.628906C23.5984 0.224609 23.0742 0 22.5242 0H22V11.5H33V10.952C33 10.3859 32.7852 9.83789 32.3984 9.43359ZM19.25 12.2188V0H2.0625C0.919531 0 0 0.961328 0 2.15625V43.8438C0 45.0387 0.919531 46 2.0625 46H30.9375C32.0805 46 33 45.0387 33 43.8438V14.375H21.3125C20.1781 14.375 19.25 13.4047 19.25 12.2188ZM5.5 6.46875C5.5 6.07164 5.80766 5.75 6.1875 5.75H13.0625C13.4423 5.75 13.75 6.07164 13.75 6.46875V7.90625C13.75 8.30336 13.4423 8.625 13.0625 8.625H6.1875C5.80766 8.625 5.5 8.30336 5.5 7.90625V6.46875ZM5.5 12.2188C5.5 11.8216 5.80766 11.5 6.1875 11.5H13.0625C13.4423 11.5 13.75 11.8216 13.75 12.2188V13.6562C13.75 14.0534 13.4423 14.375 13.0625 14.375H6.1875C5.80766 14.375 5.5 14.0534 5.5 13.6562V12.2188ZM27.5 39.5312C27.5 39.9284 27.1923 40.25 26.8125 40.25H19.9375C19.5577 40.25 19.25 39.9284 19.25 39.5312V38.0938C19.25 37.6966 19.5577 37.375 19.9375 37.375H26.8125C27.1923 37.375 27.5 37.6966 27.5 38.0938V39.5312ZM27.5 21.5625V30.1875C27.5 30.9817 26.8847 31.625 26.125 31.625H6.875C6.11531 31.625 5.5 30.9817 5.5 30.1875V21.5625C5.5 20.7683 6.11531 20.125 6.875 20.125H26.125C26.8847 20.125 27.5 20.7683 27.5 21.5625Z"
                            fill="white"></path>
                    </svg>
                </div>
                <h1 class="text-darken mb-3 text-xl font-medium lg:px-14" data-aos="zoom-in" data-aos-duration="1000"
                    data-aos-delay="300">Vision</h1>
                <p class="px-4 text-gray-500" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="300">
                    Traceable, Sustainable Aquaculture </p>
            </div>
            <div data-aos-delay="150" class="rounded-xl bg-white p-6 text-center shadow-xl">
                <div
                    class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full shadow-lg bg-rose-500 shadow-rose-500/40">
                    <svg viewBox=" 0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white">
                        <path
                            d="M12 0C11.0532 0 10.2857 0.767511 10.2857 1.71432V5.14285H13.7142V1.71432C13.7142 0.767511 12.9467 0 12 0Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M36 0C35.0532 0 34.2856 0.767511 34.2856 1.71432V5.14285H37.7142V1.71432C37.7143 0.767511 36.9468 0 36 0Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M42.8571 5.14282H37.7143V12C37.7143 12.9468 36.9468 13.7143 36 13.7143C35.0532 13.7143 34.2857 12.9468 34.2857 12V5.14282H13.7142V12C13.7142 12.9468 12.9467 13.7143 11.9999 13.7143C11.0531 13.7143 10.2856 12.9468 10.2856 12V5.14282H5.14285C2.30253 5.14282 0 7.44535 0 10.2857V42.8571C0 45.6974 2.30253 48 5.14285 48H42.8571C45.6975 48 48 45.6974 48 42.8571V10.2857C48 7.44535 45.6975 5.14282 42.8571 5.14282ZM44.5714 42.8571C44.5714 43.8039 43.8039 44.5714 42.857 44.5714H5.14285C4.19605 44.5714 3.42854 43.8039 3.42854 42.8571V20.5714H44.5714V42.8571Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M13.7142 23.9999H10.2857C9.33889 23.9999 8.57138 24.7674 8.57138 25.7142C8.57138 26.661 9.33889 27.4285 10.2857 27.4285H13.7142C14.661 27.4285 15.4285 26.661 15.4285 25.7142C15.4285 24.7674 14.661 23.9999 13.7142 23.9999Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M25.7143 23.9999H22.2857C21.3389 23.9999 20.5714 24.7674 20.5714 25.7142C20.5714 26.661 21.3389 27.4285 22.2857 27.4285H25.7143C26.6611 27.4285 27.4286 26.661 27.4286 25.7142C27.4286 24.7674 26.6611 23.9999 25.7143 23.9999Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M37.7143 23.9999H34.2857C33.3389 23.9999 32.5714 24.7674 32.5714 25.7142C32.5714 26.661 33.3389 27.4285 34.2857 27.4285H37.7143C38.6611 27.4285 39.4286 26.661 39.4286 25.7142C39.4286 24.7674 38.661 23.9999 37.7143 23.9999Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M13.7142 30.8571H10.2857C9.33889 30.8571 8.57138 31.6246 8.57138 32.5714C8.57138 33.5182 9.33889 34.2857 10.2857 34.2857H13.7142C14.661 34.2857 15.4285 33.5182 15.4285 32.5714C15.4285 31.6246 14.661 30.8571 13.7142 30.8571Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M25.7143 30.8571H22.2857C21.3389 30.8571 20.5714 31.6246 20.5714 32.5714C20.5714 33.5182 21.3389 34.2857 22.2857 34.2857H25.7143C26.6611 34.2857 27.4286 33.5182 27.4286 32.5714C27.4286 31.6246 26.6611 30.8571 25.7143 30.8571Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M37.7143 30.8571H34.2857C33.3389 30.8571 32.5714 31.6246 32.5714 32.5714C32.5714 33.5182 33.3389 34.2857 34.2857 34.2857H37.7143C38.6611 34.2857 39.4286 33.5182 39.4286 32.5714C39.4285 31.6246 38.661 30.8571 37.7143 30.8571Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M13.7142 37.7142H10.2857C9.33889 37.7142 8.57138 38.4817 8.57138 39.4286C8.57138 40.3754 9.33889 41.1428 10.2857 41.1428H13.7142C14.661 41.1428 15.4285 40.3753 15.4285 39.4284C15.4285 38.4816 14.661 37.7142 13.7142 37.7142Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M25.7143 37.7142H22.2857C21.3389 37.7142 20.5714 38.4817 20.5714 39.4285C20.5714 40.3754 21.3389 41.1429 22.2857 41.1429H25.7143C26.6611 41.1429 27.4286 40.3754 27.4286 39.4285C27.4286 38.4817 26.6611 37.7142 25.7143 37.7142Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M37.7143 37.7142H34.2857C33.3389 37.7142 32.5714 38.4817 32.5714 39.4285C32.5714 40.3754 33.3389 41.1429 34.2857 41.1429H37.7143C38.6611 41.1429 39.4286 40.3754 39.4286 39.4285C39.4286 38.4817 38.661 37.7142 37.7143 37.7142Z"
                            fill="#F5F5FC"></path>
                    </svg>
                </div>
                <h1 class="text-darken mb-3 text-xl font-medium lg:px-14 " data-aos="zoom-in" data-aos-duration="1000"
                    data-aos-delay="300">Mission</h1>
                <p class="px-4 text-gray-500" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="300">
                    Delivering Brood to Bowl, verified, sustainable aquaculture solutions </p>
            </div>
        </div>

    </section>


    <!-- ========================= Contact Form =========================   -->
    <section class="py-16" id="contact">
        <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
            <div class="hidden lg:block md:w-1/2 lg:w-[80%] bg-cover" data-aos="zoom-in" data-aos-duration="1300"
                style="background-image:url('https://images.unsplash.com/photo-1546514714-df0ccc50d7bf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=667&q=80')">
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
                            class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Sumbit</button>
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