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
        }

        .hero-pattern {
            background-color: #000842;
            background-image: 
                radial-gradient(at 47% 33%, hsl(240.00, 100%, 15%) 0, transparent 59%),
                radial-gradient(at 82% 65%, hsl(218.00, 39%, 11%) 0, transparent 55%);
            position: relative;
            overflow: hidden;
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

        @keyframes move-background {
            0% { transform: translate(0, 0); }
            100% { transform: translate(-50%, -50%); }
        }

        .typing-container {
            display: inline-block;
            margin-left: 8px;
        }

        .glow-effect {
            position: relative;
        }

        .glow-effect::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(56, 189, 248, 0.3) 0%, transparent 70%);
            transform: translate(-50%, -50%);
            filter: blur(40px);
            z-index: 0;
        }

        .hero-card {
            backdrop-filter: blur(8px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        .slide-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .slide-in.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>


<body>
    <!-- Navbar -->
    <div class="navbar bg-base-100 fixed top-0 z-50 shadow-lg backdrop-blur-lg bg-opacity-90">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <i class="fas fa-bars"></i>
                </label>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a href="#features">Features</a></li>
                    <li><a href="/diagnosa">Diagnosis</a></li>
                    <li><a href="#how-it-works">How it Works</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>
            </div>
            <a href="/" class="btn btn-ghost normal-case text-xl">
                    <i class="fas fa-microchip text-primary mr-2"></i>
                    TechDiagnose Pro
                </a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="#features">Features</a></li>
                <li><a href="/diagnosa">Diagnosis</a></li>
                <li><a href="#how-it-works">How it Works</a></li>
                <li><a href="#faq">FAQ</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <a href="/admin/login" class="btn btn-primary">Login Admin</a>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="hero min-h-screen hero-pattern">
        <div class="hero-content flex-col lg:flex-row-reverse container mx-auto px-4">
            <!-- Right Side - Image & Stats -->
            <div class="lg:w-1/2 relative glow-effect slide-in">
                <img src="/api/placeholder/600/400" alt="Computer Diagnosis" 
                     class="rounded-lg shadow-2xl max-w-sm mx-auto lg:max-w-full hero-card" />
                
                <!-- Floating Stats Cards -->
                <div class="hero-card absolute -right-4 top-4 p-4 rounded-lg slide-in">
                    <div class="flex items-center gap-3">
                        <div class="bg-primary/20 p-3 rounded-full">
                            <i class="fas fa-microchip text-primary text-xl"></i>
                        </div>
                        <div class="text-white">
                            <p class="text-sm opacity-80">Hardware Fixed</p>
                            <p class="font-bold text-lg">10,000+</p>
                        </div>
                    </div>
                </div>

                <div class="hero-card absolute -left-4 bottom-4 p-4 rounded-lg slide-in">
                    <div class="flex items-center gap-3">
                        <div class="bg-success/20 p-3 rounded-full">
                            <i class="fas fa-check-circle text-success text-xl"></i>
                        </div>
                        <div class="text-white">
                            <p class="text-sm opacity-80">Success Rate</p>
                            <p class="font-bold text-lg">99.9%</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left Side - Text Content -->
            <div class="lg:w-1/2 text-center lg:text-left text-white z-10">
                <div class="slide-in">
                    <h1 class="text-3xl lg:text-5xl xl:text-6xl font-bold leading-tight mb-4">
                        <span class="typing-title"></span>
                        <span class="block mt-2 text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-400">
                            <span class="typing-subtitle"></span>
                        </span>
                    </h1>
                </div>
                
                <div class="slide-in">
                    <p class="py-6 text-lg opacity-90">
                        Get instant, accurate diagnoses for your PC or laptop hardware issues using our advanced expert system. 
                        Powered by sophisticated algorithms and years of technical expertise.
                    </p>
                </div>

                <div class="flex gap-4 justify-center lg:justify-start slide-in">
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
            <p>TechDiagnose Pro<br/>Providing reliable PC hardware diagnosis since 2024</p>
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
            // Initialize Typed.js for the main title
            new Typed('.typing-title', {
                strings: ['Expert PC Hardware'],
                typeSpeed: 50,
                showCursor: false,
                onComplete: (self) => {
                    // Start subtitle typing after title is complete
                    new Typed('.typing-subtitle', {
                        strings: ['Diagnosis System'],
                        typeSpeed: 50,
                        showCursor: false
                    });
                }
            });

            // Slide-in animations
            const slideIns = document.querySelectorAll('.slide-in');
            let delay = 0;

            slideIns.forEach((element) => {
                setTimeout(() => {
                    element.classList.add('active');
                }, delay);
                delay += 200; // Increment delay for each element
            });

            // Parallax effect on scroll
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const hero = document.querySelector('.hero-pattern');
                hero.style.backgroundPositionY = -(scrolled * 0.5) + 'px';
            });

            // Hover effects for buttons
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(btn => {
                btn.addEventListener('mouseover', () => {
                    btn.style.transform = 'translateY(-2px)';
                });
                btn.addEventListener('mouseout', () => {
                    btn.style.transform = 'translateY(0)';
                });
            });
        });
    </script>

</body>
</html>