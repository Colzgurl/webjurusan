<?php
$current_page = basename($_SERVER['PHP_SELF']);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </body>
    <title>Document</title>
    <style>
            .bio-overlay {
        opacity: 0;
        background: rgba(37, 99, 235, 0.9);
        transition: all 0.3s ease;
    }
    .teacher-card:hover .bio-overlay {
        opacity: 1;
    }

    .teacher-card {
        transition: all 0.3s ease;
    }
    .teacher-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    .teacher-card img {
        transition: all 0.3s ease;
    }
    .teacher-card:hover img {
        transform: scale(1.1);
    }
   
    
    .social-icon {
        transition: all 0.3s ease;
    }
    .social-icon:hover {
        transform: scale(1.2);
        color: #2563EB;
    }
</style>
</style>
</head>
<body>
<nav x-data="{ isOpen: false }" class="relative bg-white shadow dark:bg-gray-800">
    <div class="container px-6 py-4 mx-auto">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex items-center justify-between">
                <a href="#">
                    <img class="w-auto h-6 sm:h-7" src="https://merakiui.com/images/full-logo.svg" alt="">
                </a>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>
                
                        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-800 lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center">
                <div class="flex flex-col -mx-6 lg:flex-row lg:items-center lg:mx-8">
                    <a href="prestasi.php" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Achievement</a>
                    <a href="berita.php" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">News</a>
                    <a href="konsentrasi.php" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Field</a>
                    <a href="pengajar.php" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 <?php echo ($current_page == 'pengajar.php') ? 'bg-gray-100 ' : ''; ?>">Teachers</a>
                </div>

                <div class="flex items-center mt-4 lg:mt-0">
                    <button class="hidden mx-4 text-gray-600 transition-colors duration-300 transform lg:block dark:text-gray-200 hover:text-gray-700 dark:hover:text-gray-400 focus:text-gray-700 dark:focus:text-gray-400 focus:outline-none" aria-label="show notifications">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <button type="button" class="flex items-center focus:outline-none" aria-label="toggle profile dropdown">
                        <div class="w-8 h-8 overflow-hidden border-2 border-gray-400 rounded-full">
                            <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" class="object-cover w-full h-full" alt="avatar">
                        </div>

                        <h3 class="mx-2 text-gray-700 dark:text-gray-200 lg:hidden">Khatab wedaa</h3>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
<main class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Our Teaching Staff</h1>
        
        <!-- Teachers Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Teacher Card 1 -->
            <div class="teacher-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="relative">
                    <img src="https://source.unsplash.com/random/400x400/?professor" alt="Teacher" class="w-full h-64 object-cover">
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                        <h3 class="text-white text-xl font-bold">Dr. John Smith</h3>
                        <p class="text-gray-200">Digital Electronics</p>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600">Ph.D in Electronic Engineering with 15 years of teaching experience.</p>
                    <div class="mt-4 flex gap-4">
                        <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Circuit Design</span>
                        <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Microcontrollers</span>
                    </div>
                    <div class="mt-6 flex justify-center gap-4">
                        <a href="#" class="social-icon text-gray-600"><i class="fab fa-linkedin text-xl"></i></a>
                        <a href="#" class="social-icon text-gray-600"><i class="fab fa-twitter text-xl"></i></a>
                        <a href="#" class="social-icon text-gray-600"><i class="fas fa-envelope text-xl"></i></a>
                    </div>
                </div>
                <div class="bio-overlay absolute inset-0 p-6 flex items-center justify-center">
            <div class="text-white text-center">
                <h4 class="text-xl font-bold mb-2">Dr. John Smith</h4>
                <p class="mb-2">Ph.D from MIT University</p>
                <p class="mb-2">15+ years teaching experience</p>
                <p class="mb-2">Research focus: Digital Systems</p>
                <p>Published 20+ research papers</p>
            </div>
        </div>
            </div>

            <!-- Teacher Card 2 -->
            <div class="teacher-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="relative">
                    <img src="https://source.unsplash.com/random/400x400/?teacher" alt="Teacher" class="w-full h-64 object-cover">
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                        <h3 class="text-white text-xl font-bold">Prof. Sarah Johnson</h3>
                        <p class="text-gray-200">Robotics & Automation</p>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600">Specializes in robotics and automation systems with industry experience.</p>
                    <div class="mt-4 flex gap-4">
                        <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Robotics</span>
                        <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">AI</span>
                    </div>
                    <div class="mt-6 flex justify-center gap-4">
                        <a href="#" class="social-icon text-gray-600"><i class="fab fa-linkedin text-xl"></i></a>
                        <a href="#" class="social-icon text-gray-600"><i class="fab fa-twitter text-xl"></i></a>
                        <a href="#" class="social-icon text-gray-600"><i class="fas fa-envelope text-xl"></i></a>
                    </div>
                </div>
                <div class="bio-overlay absolute inset-0 p-6 flex items-center justify-center">
            <div class="text-white text-center">
                <h4 class="text-xl font-bold mb-2">Dr. John Smith</h4>
                <p class="mb-2">Ph.D from MIT University</p>
                <p class="mb-2">15+ years teaching experience</p>
                <p class="mb-2">Research focus: Digital Systems</p>
                <p>Published 20+ research papers</p>
            </div>
        </div>
            </div>

            <!-- Teacher Card 3 -->
            <div class="teacher-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="relative">
                    <img src="https://source.unsplash.com/random/400x400/?engineer" alt="Teacher" class="w-full h-64 object-cover">
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                        <h3 class="text-white text-xl font-bold">Eng. Michael Chen</h3>
                        <p class="text-gray-200">Embedded Systems</p>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600">Expert in embedded systems and IoT applications development.</p>
                    <div class="mt-4 flex gap-4">
                        <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">IoT</span>
                        <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Programming</span>
                    </div>
                    <div class="mt-6 flex justify-center gap-4">
                        <a href="#" class="social-icon text-gray-600"><i class="fab fa-linkedin text-xl"></i></a>
                        <a href="#" class="social-icon text-gray-600"><i class="fab fa-twitter text-xl"></i></a>
                        <a href="#" class="social-icon text-gray-600"><i class="fas fa-envelope text-xl"></i></a>
                    </div>
                </div>
                <div class="bio-overlay absolute inset-0 p-6 flex items-center justify-center">
            <div class="text-white text-center">
                <h4 class="text-xl font-bold mb-2">Dr. John Smith</h4>
                <p class="mb-2">Ph.D from MIT University</p>
                <p class="mb-2">15+ years teaching experience</p>
                <p class="mb-2">Research focus: Digital Systems</p>
                <p>Published 20+ research papers</p>
            </div>
        </div>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="mt-12 bg-blue-50 rounded-xl p-8">
            <div class="max-w-2xl mx-auto text-center">
                <h3 class="text-2xl font-bold text-gray-800">Stay Updated</h3>
                <p class="text-gray-600 mt-2">Subscribe to our newsletter for the latest news and updates.</p>
                <div class="mt-4 flex gap-2 justify-center">
                    <input type="email" placeholder="Enter your email" class="px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">Subscribe</button>
                </div>
                <div class="text-center mt-4">
                    <p class="text-gray-600">Copyright &copy; <a href="#home" class="text-blue-600 hover:text-blue-800 no-underline">D'best Our</a> - All rights reserved</p>
                </div>
            </div>
        </div>
    </main>



   

</body>
</html>