<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechMedix | PC Hardware Expert System</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.0/dist/full.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        /* Navbar Styles */
        .navbar {
            transition: all 0.5s ease;
            background: transparent;
        }

        .navbar-scrolled {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        /* Hero Section Styles */
        .hero-wrapper {
            opacity: 0;
            transform: translateY(50px);
            transition: all 1s cubic-bezier(0.4, 0, 0.2, 1);
            min-height: 100vh;
            position: relative;
            background-color: #000842;
            overflow: hidden;
        }

        .hero-wrapper.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .hero-pattern {
            background-color: #000842;
            background-image: 
                radial-gradient(at 47% 33%, hsl(240.00, 100%, 15%) 0, transparent 59%),
                radial-gradient(at 82% 65%, hsl(218.00, 39%, 11%) 0, transparent 55%);
            position: relative;
        }

        .hero-pattern::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.1;
            animation: move-background 20s linear infinite;
        }

        /* Animation Keyframes */
        @keyframes move-background {
            0% { transform: translate(0, 0); }
            100% { transform: translate(-50%, -50%); }
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        /* Hero Card Styles */
        .hero-card {
            backdrop-filter: blur(8px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hero-card.visible {
            opacity: 1;
            transform: translateY(0);
            animation: float 6s ease-in-out infinite;
        }

        /* Content Animation Styles */
        .slide-up {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .slide-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .fade-in {
            opacity: 0;
            transition: opacity 1s ease;
        }

        .fade-in.visible {
            opacity: 1;
        }

        /* Features Section Animation */
        .feature-card {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .feature-card.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="navbar bg-base-100 fixed top-0 z-50 shadow-lg backdrop-blur-lg bg-opacity-90">
    <!-- Navbar Start -->
    <div class="navbar-start">
        <!-- Mobile Menu -->
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden hover:bg-base-200 transition-all duration-200">
                <i class="fas fa-bars text-lg bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent"></i>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow-lg bg-base-100 rounded-lg w-52 gap-1">
                <li><a href="/" class="hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:bg-clip-text hover:text-transparent transition-colors duration-200">Home</a></li>
                <li><a href="/diagnosa" class="hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:bg-clip-text hover:text-transparent transition-colors duration-200">Diagnosis</a></li>
                <li><a href="#how-it-works" class="hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:bg-clip-text hover:text-transparent transition-colors duration-200">Cara Kerja Sistem</a></li>
                <li><a href="#developer" class="hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:bg-clip-text hover:text-transparent transition-colors duration-200">Developer</a></li>
            </ul>
        </div>
        <!-- Logo -->
        <a href="/" class="btn btn-ghost normal-case text-xl font-bold hover:bg-base-200 transition-all duration-200">
            <i class="fas fa-microchip text-2xl bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent mr-2"></i>
            <span class="bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">TechMedix</span>
        </a>
    </div>

    <!-- Desktop Menu -->
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-2 gap-2">
            <li>
                <a href="/" class="px-4 font-medium hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:bg-clip-text hover:text-transparent transition-all duration-300 rounded-lg">
                    Home
                </a>
            </li>
            <li>
                <a href="/diagnosa" class="px-4 font-medium hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:bg-clip-text hover:text-transparent transition-all duration-300 rounded-lg">
                    Diagnosis
                </a>
            </li>
            <li>
                <a href="#how-it-works" class="px-4 font-medium hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:bg-clip-text hover:text-transparent transition-all duration-300 rounded-lg">
                   Cara Kerja Sistem
                </a>
            </li>
            <li>
                <a href="#developer" class="px-4 font-medium hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:bg-clip-text hover:text-transparent transition-all duration-300 rounded-lg">
                   Developer
                </a>
            </li>
        </ul>
    </div>

    <!-- Admin Access -->
    <div class="navbar-end">
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle p-0 hover:bg-base-200 transition-all duration-200">
                <div class="w-10 h-10 rounded-full flex items-center justify-center bg-gradient-to-r from-primary/10 to-secondary/10 border-2 border-base-300 hover:border-primary/30 transition-all duration-300">
                    <i class="fas fa-user-shield bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent text-lg"></i>
                </div>
            </label>
            <ul tabindex="0" class="mt-3 z-[1] p-2 shadow-lg menu menu-sm dropdown-content bg-base-100 rounded-lg w-60 gap-1">
                <li class="menu-title px-4 py-2">
                    <span class="text-sm font-bold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent uppercase tracking-wider">Admin Portal</span>
                </li>
                <div class="divider my-0"></div>
                <li>
                    <a href="/admin/login" class="flex items-center gap-3 hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:bg-clip-text hover:text-transparent transition-all duration-200">
                        <i class="fas fa-sign-in-alt text-base"></i>
                        <span>Login Ke Dashboard</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

   <!-- Hero Section -->
<div class="hero-wrapper hero-pattern">
    <div class="hero min-h-screen">
        <div class="hero-content flex-col lg:flex-row-reverse container mx-auto px-4 relative">
            <!-- Right Side - Image & Stats -->
            <div class="relative bg-gradient-to-r from-blue-600/20 to-violet-600/20 rounded-xl p-4 max-w-md mx-auto slide-up">
                <img src="/storage/images/hero.jpeg" alt="Computer Diagnosis" class="rounded-lg shadow-lg w-full h-auto object-cover" />

                <!-- Floating Stats Cards -->
                <div class="hero-card absolute top-1/2 -right-20 transform -translate-y-1/2 p-4 bg-gray-800/90 text-white rounded-lg shadow-lg">
                    <div class="flex items-center gap-3">
                        <div class="bg-primary/20 p-3 rounded-full">
                            <i class="fas fa-microchip text-primary text-xl"></i>
                        </div>
                        <div>
                            <p class="text-sm text-opacity-80">Hardware yang sudah diperbaiki</p>
                            <p class="font-bold text-lg">1.000+</p>
                        </div>
                    </div>
                </div>

                <div class="hero-card absolute bottom-4 -left-20 p-4 bg-gray-800/90 text-white rounded-lg shadow-lg">
                    <div class="flex items-center gap-3">
                        <div class="bg-success/20 p-3 rounded-full">
                            <i class="fas fa-check-circle text-success text-xl"></i>
                        </div>
                        <div>
                            <p class="text-sm text-opacity-80">Success Rate</p>
                            <p class="font-bold text-lg">90.9%</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left Side - Text Content -->
            <div class="lg:w-1/2 text-center lg:text-left text-white z-10 slide-up">
                <h1 class="text-2xl lg:text-4xl xl:text-5xl font-bold leading-tight mb-4">
                    <span>Sistem Pakar Diagnosis Kerusakan</span>
                    <span class="block mt-2 text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-400">
                        Hardware pada Laptop
                    </span>
                </h1>
                
                <p class="py-6 text-lg text-opacity-90">
                    Dapatkan diagnosis instan dan akurat untuk setiap masalah yang terjadi pada perangkat keras PC atau laptop Anda dengan
                    menggunakan sistem pakar kami yang dirancang khusus untuk memberikan solusi terbaik. Dengan teknologi ini, Anda dapat
                    menghemat waktu dan tenaga dalam mengidentifikasi serta memperbaiki kerusakan perangkat keras dengan hasil yang terpercaya.
                </p>

                <div class="flex gap-4 justify-center lg:justify-start">
                    <a href="/diagnosa" class="btn btn-primary btn-lg group">
                        <i class="fas fa-stethoscope mr-2 group-hover:rotate-12 transition-transform"></i>
                        Mulai Diagnosis
                    </a>
                    <a href="#how-it-works" class="btn btn-ghost btn-lg border-white text-white group">
                        <i class="fas fa-arrow-down mr-2 group-hover:translate-y-1 transition-transform"></i>
                        Pelajari Lagi
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Bagian Fitur -->
    <div id="sistem" class="py-20 bg-base-100">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16">Kenapa Memilih Sistem Kami?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow">
                    <div class="card-body items-center text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-brain text-3xl text-primary"></i>
                        </div>
                        <h3 class="card-title">Analisis Cerdas</h3>
                        <p>Algoritma sistem pakar canggih untuk identifikasi masalah perangkat keras secara akurat</p>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow">
                    <div class="card-body items-center text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-bolt text-3xl text-primary"></i>
                        </div>
                        <h3 class="card-title">Hasil Cepat</h3>
                        <p>Dapatkan diagnosis dan solusi instan untuk masalah perangkat keras Anda</p>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow">
                    <div class="card-body items-center text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-tools text-3xl text-primary"></i>
                        </div>
                        <h3 class="card-title">Solusi Kerusakan</h3>
                     <p>Panduan perbaikan pada kerusakan dan rekomendasi terbaik</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bagian Cara Kerja -->
    <div id="how-it-works" class="py-20 bg-base-200">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16">Bagaimana Cara Kerjanya</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="stats shadow">
                        <div class="stat">
                            <div class="stat-figure text-primary">
                                <i class="fas fa-laptop-medical text-3xl"></i>
                            </div>
                            <div class="stat-title">Langkah 1</div>
                            <div class="stat-value text-lg">Checkbox Gejala</div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="stats shadow">
                        <div class="stat">
                            <div class="stat-figure text-primary">
                                <i class="fas fa-search-plus text-3xl"></i>
                            </div>
                            <div class="stat-title">Langkah 2</div>
                            <div class="stat-value text-lg">Analisis</div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="stats shadow">
                        <div class="stat">
                            <div class="stat-figure text-primary">
                                <i class="fas fa-clipboard-check text-3xl"></i>
                            </div>
                            <div class="stat-title">Langkah 3</div>
                            <div class="stat-value text-lg">Diagnosis</div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="stats shadow">
                        <div class="stat">
                            <div class="stat-figure text-primary">
                                <i class="fas fa-wrench text-3xl"></i>
                            </div>
                            <div class="stat-title">Langkah 4</div>
                            <div class="stat-value text-lg">Solusi</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Developer Showcase Section -->
    <div id="developer" class="py-16 bg-base-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-center mb-5">Para Pengembang Sistem</h2>
                <p class="text-xl text-base-content/70 max-w-2xl mx-auto">
                    Kami adalah tim pengembang yang berdedikasi di balik pengembangan Sistem Diagnosis Kerusakan Hardware Laptop ini. 
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-4 gap-8 justify-center">
                <!-- Developer 1 -->
                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <figure class="px-10 pt-10">
                        <div class="avatar">
                            <div class="w-48 h-48 rounded-full ring ring-primary ring-offset-base-100 ring-offset-30">
                                <img src="storage/images/dev-1.jpg" alt="Developer 1" class="object-cover w-full h-full rounded-full"/>
                            </div>
                        </div>
                    </figure>
                    <div class="card-body items-center text-center">
                        <h3 class="card-title text-xl font-bold text-primary">M Fajar Alfad</h3>
                        <p class="text-base-content/70">Frontend Developer</p>
                        <div class="flex justify-center space-x-4 mt-4">
                            <a href="https://www.instagram.com/fajaralfad/" class="btn btn-circle btn-ghost hover:bg-primary/10">
                                <i class="fab fa-instagram text-xl text-primary"></i>
                            </a>
                            <a href="https://github.com/fajaralfad" class="btn btn-circle btn-ghost hover:bg-primary/10">
                                <i class="fab fa-github text-xl text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>


                <!-- Developer 2 -->
                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <figure class="px-10 pt-10">
                    <div class="avatar">
                            <div class="w-48 h-48 rounded-full ring ring-primary ring-offset-base-100 ring-offset-30">
                                <img src="storage/images/dev-2.jpg" alt="Developer 1" class="object-cover w-full h-full rounded-full"/>
                            </div>
                        </div>
                    </figure>
                    <div class="card-body items-center text-center">
                        <h3 class="card-title text-xl font-bold text-primary">Arip Saputra</h3>
                        <p class="text-base-content/70">Frontend Developer</p>
                        <div class="flex justify-center space-x-4 mt-4">
                            <a href="https://www.instagram.com/aripsaputra_22?igsh=MXE4anlyZG81N2V1MQ==" class="btn btn-circle btn-ghost hover:bg-primary/10">
                                <i class="fab fa-instagram text-xl text-primary"></i>
                            </a>
                            <a href="https://github.com/4rip22?fbclid=PAZXh0bgNhZW0CMTEAAaZWMoWehqFQqoBa3mR4Cs-kIgeyju1XwOv-FG9gskxRqULvIEK4nsYKOg8_aem_dLSjZoY62Vu5Iztt3aQ6DQ" class="btn btn-circle btn-ghost hover:bg-primary/10">
                                <i class="fab fa-github text-xl text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Developer 3 -->
                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <figure class="px-10 pt-10">
                    <div class="avatar">
                            <div class="w-48 h-48 rounded-full ring ring-primary ring-offset-base-100 ring-offset-30">
                                <img src="storage/images/dev-3.jpg" alt="Developer 1" class="object-cover w-full h-full rounded-full"/>
                            </div>
                        </div>
                    </figure>
                    <div class="card-body items-center text-center">
                        <h3 class="card-title text-xl font-bold text-primary">M ibnu Muhtar</h3>
                        <p class="text-base-content/70">Backend Developer</p>
                        <div class="flex justify-center space-x-4 mt-4">
                            <a href="https://www.instagram.com/ibnumhtr_/" class="btn btn-circle btn-ghost hover:bg-primary/10">
                                <i class="fab fa-instagram text-xl text-primary"></i>
                            </a>
                            <a href="https://github.com/IbnuMuhtar" class="btn btn-circle btn-ghost hover:bg-primary/10">
                                <i class="fab fa-github text-xl text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Developer 4 -->
                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <figure class="px-10 pt-10">
                    <div class="avatar">
                            <div class="w-48 h-48 rounded-full ring ring-primary ring-offset-base-100 ring-offset-30">
                                <img src="storage/images/dev-4.jpg" alt="Developer 1" class="object-cover w-full h-full rounded-full"/>
                            </div>
                        </div>
                    </figure>
                    <div class="card-body items-center text-center">
                        <h3 class="card-title text-xl font-bold text-primary">Nurwahid Muslim</h3>
                        <p class="text-base-content/70">Backend Developer</p>
                        <div class="flex justify-center space-x-4 mt-4">
                            <a href="https://www.instagram.com/muss28_/" class="btn btn-circle btn-ghost hover:bg-primary/10">
                                <i class="fab fa-instagram text-xl text-primary"></i>
                            </a>
                            <a href="https://github.com/nurwahidmuslim" class="btn btn-circle btn-ghost hover:bg-primary/10">
                                <i class="fab fa-github text-xl text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

       <!-- Footer -->
<footer class="bg-gray-100 py-6 mt-8 border-t border-gray-200">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <div class="text-center md:text-left">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Sistem Pakar Diagnosa Hardware</h3>
                <p class="text-gray-600 text-sm">© 2024 TechMedix. All rights reserved.</p>
            </div>
            
            <div class="flex space-x-4 text-gray-600">
                <a href="#" class="hover:text-blue-600 transition duration-300">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/>
                    </svg>
                </a>
                <a href="#" class="hover:text-blue-600 transition duration-300">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.148 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.148-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
                <a href="#" class="hover:text-blue-600 transition duration-300">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                </a>
                <a href="#" class="hover:text-blue-600 transition duration-300">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                    </svg>
                </a>
            </div>
            
            <div class="text-center md:text-right">
                <p class="text-sm text-gray-600">Kontak: <a href="mailto:techmedix@gmail.com" class="hover:text-blue-600">support@techmedix.com</a></p>
                <p class="text-sm text-gray-600 mt-1">Telepon: +62 123 4567 890</p>
            </div>
        </div>
        
        <div class="text-center text-xs text-gray-500 mt-6 border-t border-gray-200 pt-4">
            <p>Sistem Pakar Diagnosa Hardware Pada laptop | Developed by TechMedix Team</p>
        </div>
    </div>
</footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Initial animations setup
            const heroWrapper = document.querySelector('.hero-wrapper');
            const navbar = document.querySelector('.navbar');
            const slideUpElements = document.querySelectorAll('.slide-up');
            const heroCards = document.querySelectorAll('.hero-card');
            let typedTitle, typedSubtitle;

            // Function to start animations
            const startAnimations = () => {
                // Show hero wrapper
                setTimeout(() => {
                    heroWrapper.classList.add('visible');
                }, 100);

                // Animate slide-up elements
                setTimeout(() => {
                    slideUpElements.forEach((el, index) => {
                        setTimeout(() => {
                            el.classList.add('visible');
                        }, index * 200);
                    });
                }, 500);

                // Animate hero cards
                setTimeout(() => {
                    heroCards.forEach((card, index) => {
                        setTimeout(() => {
                            card.classList.add('visible');
                        }, index * 300 + 800);
                    });
                }, 800);

                // Initialize Typed.js
                setTimeout(() => {
                    typedTitle = new Typed('.typing-title', {
                        strings: ['Sistem Pakar Diagnosis Kerusakan'],
                        typeSpeed: 50,
                        showCursor: false,
                        onComplete: () => {
                            typedSubtitle = new Typed('.typing-subtitle', {
                                strings: ['Hardware Pada Laptop'],
                                typeSpeed: 50,
                                showCursor: false
                            });
                        }
                    });
                }, 1200);
            };

            // Scroll handler for navbar
            const handleScroll = () => {
                const scrollPosition = window.scrollY;
                
                if (scrollPosition > 50) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            };

            // Intersection Observer for scroll animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, observerOptions);

            // Observe feature cards and other animated elements
            document.querySelectorAll('.feature-card, .fade-in').forEach((el) => {
                observer.observe(el);
            });

            // Smooth scroll functionality
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Initialize
            window.addEventListener('scroll', handleScroll);
            startAnimations();

            // GSAP animations
            gsap.to('.hero-card', {
                y: -20,
                duration: 2,
                repeat: -1,
                yoyo: true,
                ease: "power1.inOut",
                stagger: {
                    each: 0.5
                }
            });
        });
    </script>

</body>
</html>