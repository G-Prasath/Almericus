<!-- Navigation -->

<div class="fixed top-0 z-50 w-full">
    <nav class="w-full shadow-lg z-50 h-auto py-2 relative" style="background-color: #125b93;">
        <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="javascript:;">
                            <img style="width: 200px" src="./imgs/logo.png" alt="logo">
                        </a>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center justify-between">
                    <div class="ml-10 flex items-baseline">
                        <a href="#home"
                            class="nav-link mx-3 text-white hover:border-2 hover:border-white rounded-md px-3 py-2 text-sm font-medium transition-all duration-200 ">
                            Home
                        </a>

                        <a href="#about-us"
                            class="nav-link mx-3 text-white hover:border-2 hover:border-white rounded-md px-3 py-2 text-sm font-medium transition-all duration-200 ">
                            About us
                        </a>

                        <a href="#soluation"
                            class="nav-link mx-3 text-white hover:border-2 hover:border-white rounded-md px-3 py-2 text-sm font-medium transition-all duration-200 ">
                            Soluations
                        </a>

                        <a href="#gallery"
                            class="nav-link mx-3 text-white hover:border-2 hover:border-white rounded-md px-3 py-2 text-sm font-medium transition-all duration-200 ">
                            Gallery
                        </a>
                        <a href="#contact"
                            class="nav-link mx-3 text-white hover:border-2 hover:border-white rounded-md px-3 py-2 text-sm font-medium transition-all duration-200 ">
                            Contact us
                        </a>
                    </div>
                </div>


                <!-- Mobile menu button -->
                <div class="lg:hidden">
                    <button
                        class="hamburger inline-flex items-center justify-center p-2 rounded-md text-white hover:text-[#125b93] hover:bg-blue-50 transition-all duration-200"
                        id="mobile-menu-button">
                        <span class="sr-only">Open main menu</span>
                        <div class="space-y-1">
                            <span class="block w-6 h-0.5 bg-current"></span>
                            <span class="block w-6 h-0.5 bg-current"></span>
                            <span class="block w-6 h-0.5 bg-current"></span>
                        </div>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="mobile-menu lg:hidden bg-[#125b93] border-t border-gray-200" id="mobile-menu">
            <div class="px-4 pt-2 pb-3 space-y-1">
                <a href="#home"
                    class="text-white hover:text-[#125b93] hover:bg-blue-50 block px-3 py-2 text-base font-medium transition-all duration-200">
                    Home
                </a>

                <a href="#about-us"
                    class="text-white hover:text-[#125b93] hover:bg-blue-50 block px-3 py-2 text-base font-medium transition-all duration-200">
                    About Us
                </a>

                <a href="#soluation"
                    class="text-white hover:text-[#125b93] hover:bg-blue-50 block px-3 py-2 text-base font-medium transition-all duration-200">
                    Soluations
                </a>


                <a href="#gallery"
                    class="text-white hover:text-[#125b93] hover:bg-blue-50 block px-3 py-2 text-base font-medium transition-all duration-200">
                    Gallery
                </a>
                <a href="#contact"
                    class="text-white hover:text-[#125b93] hover:bg-blue-50 block px-3 py-2 text-base font-medium transition-all duration-200">
                    Contact us
                </a>
            </div>
        </div>
    </nav>
</div>