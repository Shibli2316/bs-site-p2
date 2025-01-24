<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Bahujan Scholars</title>
</head>

<style>
    #dropdownMenu1,
    #dropdownMenu2,
    #dropdownMenu3 {
        background-color: white;
        /* Explicit background */
        z-index: 50;
        /* Ensure above other elements */
        opacity: 1;
        /* Remove any inherited transparency */
    }

    /* Optional Overlay for Better Experience on Mobile */
    .mobile-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.5);
        /* Semi-transparent overlay */
        z-index: 40;
        /* Below dropdown but above body */
    }
</style>

<body class="bg-gray-100 text-gray-800">
    <header class="sticky top-0 z-50 bg-opacity-80 backdrop-blur-lg bg-white shadow-md">
        <div class="container mx-auto flex items-center justify-between px-6 py-4">
            <!-- Logo and Name (aligned to top-left) -->
            <a href="index.php">
                <div class="flex items-center space-x-3">
                    <img src="assets/web/logo.png" alt="Bahujan Scholars Logo" class="w-10 h-10">
                    <div class="flex flex-col">
                        <span class="text-xl font-bold text-blue-500">Bahujan Scholars</span>
                        <span class="text-sm text-gray-500">Mentoring for Social Transformation</span>
                    </div>
                </div>

            </a>

            <!-- Hamburger Button and Navigation Menu (aligned to top-right) -->
            <div class="flex items-center space-x-4">
                <!-- Hamburger Button (visible on mobile) -->
                <button id="menu-toggle" class="block lg:hidden text-gray-800 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>

                <!-- Navigation Menu -->
                <nav id="menu"
                    class="hidden lg:flex lg:space-x-6 absolute lg:static top-16 left-0 w-full bg-white shadow-lg lg:shadow-none lg:bg-transparent lg:top-auto lg:left-auto z-40">
                    <ul class="flex flex-col lg:flex-row lg:items-center lg:space-x-6">
                        <li><a href="index.php" class="hover:text-blue-500 block px-4 py-2">Home</a></li>
                        <li><a href="antiCast.php" class="hover:text-blue-500 block px-4 py-2">Anti Cast Campaign</a>
                        </li>

                        <li class="relative">
                            <button id="dropdownButton1"
                                class="hover:text-blue-500 block px-4 py-2 focus:outline-none bg-transparent z-50">
                                Initiatives
                            </button>

                            <ul id="dropdownMenu1"
                                class="hidden absolute left-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg">
                                <li><a href="program.php"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Program</a></li>
                                <li><a href="event.php"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Events</a></li>
                                <li><a href="archeives.php"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Archeives</a>
                                </li>
                                <li><a href="testimonial.php"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Testimonials</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="about.php" class="hover:text-blue-500 block px-4 py-2">About</a></li>
                        <li><a href="faq.php" class="hover:text-blue-500 block px-4 py-2">FAQ</a></li>
                        <li><a href="contact.php" class="hover:text-blue-500 block px-4 py-2">Contact</a></li>

                        <li>
                            <a href="https://www.youtube.com/@BahujanScholars-up6ek"
                                class="hover:text-red-600 block px-4 py-2">
                                <i class="fab fa-youtube text-red-600 hover:text-red-800"></i>
                            </a>
                        </li>

                        <!-- Dropdown Menu 1 -->


                        <!-- Dropdown Menu 2 -->




                        <!-- Dropdown Menu 3 -->
                        <li><a href="auth/authenticate.php"
                                class="inline-block rounded bg-blue-600 px-5 py-2 text-sm font-medium text-white transition hover:bg-blue-700 focus:outline-none focus:ring focus:ring-yellow-400">Sign
                                Up</a>
                        </li>



                    </ul>
                </nav>




            </div>
        </div>
    </header>