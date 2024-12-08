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
        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }
        
        .custom-shadow {
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        .select-custom {
            background-image: linear-gradient(to right, #4f46e5, #3b82f6);
            color: white;
            transition: all 0.3s ease;
        }
        
        .select-custom option {
            background-color: white;
            color: #1f2937;
        }
        
        .btn-gradient {
            background: linear-gradient(45deg, #4f46e5, #3b82f6);
            transition: all 0.3s ease;
        }
        
        .btn-gradient:hover {
            background: linear-gradient(45deg, #3b82f6, #4f46e5);
            transform: translateY(-2px);
        }

        /* Checkbox Styling */
        .checkbox-container {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 16px;
            user-select: none;
        }

        .checkbox-container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .checkbox-container:hover input ~ .checkmark {
            background-color: #ccc;
        }

        .checkbox-container input:checked ~ .checkmark {
            background: linear-gradient(to right, #4f46e5, #3b82f6);
        }

        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .checkbox-container input:checked ~ .checkmark:after {
            display: block;
        }

        .checkbox-container .checkmark:after {
            left: 9px;
            top: 5px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            transform: rotate(45deg);
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
<div class="container mx-auto max-w-4xl mt-24">
        <!-- Main Card -->
        <div class="glass-effect rounded-3xl custom-shadow p-8 mb-8 animate-float">
            <!-- Header -->
            <div class="text-center mb-12">
                <div class="inline-block p-2 px-4 rounded-full bg-gradient-to-r from-blue-50 to-indigo-50 mb-4">
                    <span class="text-blue-600 font-medium">Expert System</span>
                </div>
                <h1 class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent mb-4">
                    Sistem Pakar Diagnosa Hardware
                </h1>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Sistem pintar untuk mendiagnosa masalah pada perangkat keras komputer Anda dengan metode Certainty Factor
                </p>
            </div>

            <!-- Form Section -->
            <form id="diagnosaForm" class="space-y-8">
                <div class="form-control">
                    <label class="block mb-4">
                        <span class="text-lg font-semibold text-gray-700 mb-2 block">Pilih Gejala yang Dialami</span>
                        <span class="text-sm text-gray-500 block mb-4">
                            Centang satu atau lebih gejala yang Anda alami pada perangkat keras
                        </span>
                    </label>
                    
                    <!-- Dynamic Checkbox Symptoms -->
                    <div id="symptomsList" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @foreach($gejalas as $gejala)
                        <label class="checkbox-container text-gray-700">
                            {{ $gejala->nama_gejala }}
                            <input type="checkbox" name="gejala[]" value="{{ $gejala->id }}">
                            <span class="checkmark"></span>
                        </label>
                        @endforeach
                    </div>
                </div>

                <button type="submit" class="btn-gradient w-full py-4 rounded-xl text-white font-semibold text-lg custom-shadow flex items-center justify-center gap-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                    Mulai Diagnosa
                </button>
            </form>

            <!-- Results Section -->
            <div id="hasilDiagnosa" class="mt-12 hidden">
                <div class="border-t border-gray-100 pt-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Hasil Diagnosa
                    </h2>
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-6">
                        <ul id="diagnosaList" class="space-y-4"></ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="text-center text-gray-500 text-sm">
            <p>© 2024 Sistem Pakar Diagnosa Hardware. All rights reserved.</p>
            <p class="mt-2">Dibuat dengan ❤️ untuk kemudahan diagnosa hardware</p>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.getElementById('diagnosaForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('button[type="submit"]');
            submitBtn.disabled = true;
            submitBtn.innerHTML = `
                <svg class="animate-spin h-5 w-5 mr-3" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Menganalisa...
            `;

            const gejala = Array.from(document.querySelectorAll('input[name="gejala[]"]:checked')).map(option => option.value);

            axios.post('/diagnosa', { gejala })
                .then(response => {
                    const hasilDiagnosa = response.data;
                    const list = document.getElementById('diagnosaList');
                    list.innerHTML = '';

                    hasilDiagnosa.forEach((item, index) => {
                        const li = document.createElement('div');
                        li.className = 'bg-white rounded-xl p-6 custom-shadow';
                        li.innerHTML = `
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                    <span class="font-semibold text-blue-600">${index + 1}</span>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800 mb-2">${item.kerusakan}</h3>
                                    <div class="flex items-center gap-2 mb-3">
                                        <div class="text-sm font-medium text-gray-500">Certainty Factor:</div>
                                        <div class="px-3 py-1 rounded-full bg-blue-100 text-blue-600 text-sm font-semibold">
                                            ${(item.cf * 100).toFixed(1)}%
                                        </div>
                                    </div>
                                    <p class="text-gray-600">${item.deskripsi}</p>
                                </div>
                            </div>
                        `;
                        list.appendChild(li);
                    });

                    document.getElementById('hasilDiagnosa').classList.remove('hidden');
                    document.getElementById('hasilDiagnosa').scrollIntoView({ behavior: 'smooth' });
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan dalam proses diagnosa. Silakan coba lagi.');
                })
                .finally(() => {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = `
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        Mulai Diagnosa
                    `;
                });
        });
    </script>
</body>
</html>