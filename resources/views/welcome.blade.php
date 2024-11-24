<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechDiagnose Pro | PC Hardware Expert System</title>
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
                <li><a href="#features" class="hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:bg-clip-text hover:text-transparent transition-colors duration-200">Features</a></li>
                <li><a href="/diagnosa" class="hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:bg-clip-text hover:text-transparent transition-colors duration-200">Diagnosis</a></li>
                <li><a href="#how-it-works" class="hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:bg-clip-text hover:text-transparent transition-colors duration-200">How it Works</a></li>
                <li><a href="#faq" class="hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:bg-clip-text hover:text-transparent transition-colors duration-200">FAQ</a></li>
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
                <a href="#features" class="px-4 font-medium hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:bg-clip-text hover:text-transparent transition-all duration-300 rounded-lg">
                    Features
                </a>
            </li>
            <li>
                <a href="/diagnosa" class="px-4 font-medium hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:bg-clip-text hover:text-transparent transition-all duration-300 rounded-lg">
                    Diagnosis
                </a>
            </li>
            <li>
                <a href="#how-it-works" class="px-4 font-medium hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:bg-clip-text hover:text-transparent transition-all duration-300 rounded-lg">
                    How it Works
                </a>
            </li>
            <li>
                <a href="#faq" class="px-4 font-medium hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:bg-clip-text hover:text-transparent transition-all duration-300 rounded-lg">
                    FAQ
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
                        <span>Sign In to Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/help" class="flex items-center gap-3 hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:bg-clip-text hover:text-transparent transition-all duration-200">
                        <i class="fas fa-question-circle text-base"></i>
                        <span>Help & Support</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/contact" class="flex items-center gap-3 hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:bg-clip-text hover:text-transparent transition-all duration-200">
                        <i class="fas fa-headset text-base"></i>
                        <span>Contact Admin</span>
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
                    <img src="/storage/images/hero.jpeg" alt="Computer Diagnosis"
                         class="rounded-lg shadow-lg w-full h-auto object-cover" />

                    <!-- Floating Stats Cards -->
                    <div class="hero-card absolute top-1/2 -right-20 transform -translate-y-1/2 p-4 bg-gray-800/90 text-white rounded-lg shadow-lg">
                        <div class="flex items-center gap-3">
                            <div class="bg-primary/20 p-3 rounded-full">
                                <i class="fas fa-microchip text-primary text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm opacity-80">Hardware Fixed</p>
                                <p class="font-bold text-lg">10,000+</p>
                            </div>
                        </div>
                    </div>

                    <div class="hero-card absolute bottom-4 -left-20 p-4 bg-gray-800/90 text-white rounded-lg shadow-lg">
                        <div class="flex items-center gap-3">
                            <div class="bg-success/20 p-3 rounded-full">
                                <i class="fas fa-check-circle text-success text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm opacity-80">Success Rate</p>
                                <p class="font-bold text-lg">80.9%</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left Side - Text Content -->
                <div class="lg:w-1/2 text-center lg:text-left text-white z-10 slide-up">
                    <h1 class="text-3xl lg:text-5xl xl:text-6xl font-bold leading-tight mb-4">
                        <span class="typing-title">Expert PC Hardware</span>
                        <span class="block mt-2 text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-400">
                            <span class="typing-subtitle">Diagnosis System</span>
                        </span>
                    </h1>
                    
                    <p class="py-6 text-lg opacity-90">
                        Get instant, accurate diagnoses for your PC or laptop hardware issues using our advanced expert system. 
                        Powered by sophisticated algorithms and years of technical expertise.
                    </p>

                    <div class="flex gap-4 justify-center lg:justify-start">
                        <a href="/diagnosa" class="btn btn-primary btn-lg group">
                            <i class="fas fa-stethoscope mr-2 group-hover:rotate-12 transition-transform"></i>
                            Start Diagnosis
                        </a>
                        <a href="#how-it-works" class="btn btn-ghost btn-lg border-white text-white group">
                            <i class="fas fa-arrow-down mr-2 group-hover:translate-y-1 transition-transform"></i>
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-20 bg-base-100">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16">Why Choose Our System?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow">
                    <div class="card-body items-center text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-brain text-3xl text-primary"></i>
                        </div>
                        <h3 class="card-title">Smart Analysis</h3>
                        <p>Advanced expert system algorithms for accurate hardware problem identification</p>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow">
                    <div class="card-body items-center text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-bolt text-3xl text-primary"></i>
                        </div>
                        <h3 class="card-title">Quick Results</h3>
                        <p>Get instant diagnosis and solutions for your hardware issues</p>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow">
                    <div class="card-body items-center text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-tools text-3xl text-primary"></i>
                        </div>
                        <h3 class="card-title">Detailed Solutions</h3>
                        <p>Step-by-step repair guides and recommendations</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- How It Works Section -->
    <div id="how-it-works" class="py-20 bg-base-200">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16">How It Works</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="stats shadow">
                        <div class="stat">
                            <div class="stat-figure text-primary">
                                <i class="fas fa-laptop-medical text-3xl"></i>
                            </div>
                            <div class="stat-title">Step 1</div>
                            <div class="stat-value text-lg">Describe Symptoms</div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="stats shadow">
                        <div class="stat">
                            <div class="stat-figure text-primary">
                                <i class="fas fa-search-plus text-3xl"></i>
                            </div>
                            <div class="stat-title">Step 2</div>
                            <div class="stat-value text-lg">Analysis</div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="stats shadow">
                        <div class="stat">
                            <div class="stat-figure text-primary">
                                <i class="fas fa-clipboard-check text-3xl"></i>
                            </div>
                            <div class="stat-title">Step 3</div>
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
                            <div class="stat-title">Step 4</div>
                            <div class="stat-value text-lg">Solution</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Diagnosis Section -->
    <div class="hero min-h-[60vh] bg-base-100">
        <div class="hero-content text-center">
            <div class="max-w-xl">
                <h2 class="text-4xl font-bold mb-8">Ready to Diagnose Your PC?</h2>
                <p class="mb-8">Get started with our advanced diagnostic system and find solutions to your hardware problems in minutes.</p>
                <a href="/diagnosa" class="btn btn-primary btn-lg">
                    Start Free Diagnosis
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer p-10 bg-neutral text-neutral-content">
        <div>
            <i class="fas fa-microchip text-3xl"></i>
            <p>TechMedix<br/>Providing reliable PC hardware diagnosis since 2024</p>
        </div> 
        <div>
            <span class="footer-title">Services</span> 
            <a class="link link-hover">Hardware Diagnosis</a> 
            <a class="link link-hover">Expert System</a> 
            <a class="link link-hover">Technical Support</a> 
            <a class="link link-hover">Documentation</a>
        </div> 
        <div>
            <span class="footer-title">Company</span> 
            <a class="link link-hover">About us</a> 
            <a class="link link-hover">Contact</a> 
            <a class="link link-hover">Privacy Policy</a> 
            <a class="link link-hover">Terms of Service</a>
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
                        strings: ['Expert PC Hardware'],
                        typeSpeed: 50,
                        showCursor: false,
                        onComplete: () => {
                            typedSubtitle = new Typed('.typing-subtitle', {
                                strings: ['Diagnosis System'],
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