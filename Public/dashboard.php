<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
        .hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://source.unsplash.com/random/1920x1080/?electronics');
            background-size: cover;
            background-position: center;
        }
        .feature-card {
            transition: all 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
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
                    <a href="prestasi.php" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Achievment</a>
                    <a href="berita.php" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">News</a>
                    <a href="konsentrasi.php" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Field</a>
                    <a href="pengajar.php" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Teachers</a>
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
<!-- Hero Section -->
<section class="hero-section h-screen flex items-center justify-center text-white">
        <div class="text-center">
            <h1 class="text-5xl font-bold mb-4">Welcome to Electronics Department</h1>
            <p class="text-xl mb-8">Innovating the Future Through Technology</p>
            <a href="#features" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full transition duration-300">Explore More</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Why Choose Electronics?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="text-blue-600 text-4xl mb-4">🔬</div>
                    <h3 class="text-xl font-bold mb-2">Modern Facilities</h3>
                    <p class="text-gray-600">State-of-the-art laboratories equipped with the latest technology.</p>
                </div>
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="text-blue-600 text-4xl mb-4">👨‍🏫</div>
                    <h3 class="text-xl font-bold mb-2">Expert Faculty</h3>
                    <p class="text-gray-600">Learn from industry professionals and experienced educators.</p>
                </div>
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="text-blue-600 text-4xl mb-4">🚀</div>
                    <h3 class="text-xl font-bold mb-2">Career Ready</h3>
                    <p class="text-gray-600">Industry-aligned curriculum preparing you for success.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News & Events -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Latest Updates</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Latest News -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <img src="https://source.unsplash.com/random/800x400/?technology" alt="News" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Robotics Competition Success</h3>
                        <p class="text-gray-600">Our students secured top positions in the national robotics competition.</p>
                        <a href="berita.php" class="text-blue-600 mt-4 inline-block hover:underline">Read More →</a>
                    </div>
                </div>
                <!-- Latest Achievement -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <img src="https://source.unsplash.com/random/800x400/?achievement" alt="Achievement" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Innovation Award 2023</h3>
                        <p class="text-gray-600">Department receives recognition for innovative teaching methods.</p>
                        <a href="prestasi.php" class="text-blue-600 mt-4 inline-block hover:underline">Read More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
</body>
</html>