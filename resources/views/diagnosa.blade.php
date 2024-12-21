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
                <li><a href="/" class="hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:bg-clip-text hover:text-transparent transition-colors duration-200">Home</a></li>
                <li><a href="/diagnosa" class="hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:bg-clip-text hover:text-transparent transition-colors duration-200">Diagnosis</a></li>
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
                    <span class="text-blue-600 font-medium">Sistem Pakar</span>
                </div>
                <h1 class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent mb-4">
                    Sistem Pakar Diagnosa Hardware
                </h1>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Sistem pintar untuk mendiagnosa masalah pada hardware atau perangkat keras laptop anda dengan metode Certainty Factor
                </p>
            </div>

            <!-- Form Section -->
            <form id="diagnosaForm" class="space-y-8">
                <div class="form-control">
                    <label class="block mb-4">
                        <span class="text-lg font-semibold text-gray-700 mb-2 block">Pilih Gejala yang Dialami</span>
                        <span class="text-sm text-gray-500 block mb-4">
                            Centang satu atau lebih gejala yang Anda alami pada laptop
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
            <p>Sistem Pakar Diagnosa Hardware Pada Laptop | Developed by TechMedix Team</p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
// Add search and history UI elements
document.querySelector('#symptomsList').insertAdjacentHTML('beforebegin', `
    <div class="mb-4">
        <div class="relative">
            <input type="text" id="searchSymptoms" 
                   class="w-full p-3 pl-10 pr-4 text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                   placeholder="Cari gejala...">
            <span class="absolute left-3 top-3 text-gray-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </span>
        </div>
    </div>
`);

document.querySelector('.navbar-end').insertAdjacentHTML('beforeend', `
    <button id="historyBtn" class="btn btn-ghost btn-circle mr-2">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
    </button>
`);

// Search functionality
const searchSymptoms = () => {
    const searchInput = document.getElementById('searchSymptoms');
    const filter = searchInput.value.toLowerCase();
    const symptoms = document.querySelectorAll('.checkbox-container');

    symptoms.forEach(symptom => {
        const text = symptom.textContent.toLowerCase();
        symptom.style.display = text.includes(filter) ? '' : 'none';
    });
};

document.getElementById('searchSymptoms').addEventListener('input', searchSymptoms);

// Modified save function to store symptom names
const saveToHistory = (diagnosis, selectedSymptoms) => {
    const history = JSON.parse(localStorage.getItem('diagnosisHistory') || '[]');
    
    // Get symptom names from selected checkboxes
    const symptomNames = Array.from(document.querySelectorAll('input[name="gejala[]"]:checked'))
        .map(checkbox => checkbox.closest('.checkbox-container').textContent.trim());

    const newEntry = {
        date: new Date().toISOString(),
        diagnosis: diagnosis,
        symptoms: symptomNames, // Store the actual symptom names
        id: Date.now()
    };
    
    history.unshift(newEntry);
    localStorage.setItem('diagnosisHistory', JSON.stringify(history.slice(0, 10)));
};

// Updated history display function
const showHistory = () => {
    const history = JSON.parse(localStorage.getItem('diagnosisHistory') || '[]');
    const modalHTML = `
        <div id="historyModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
            <div class="bg-white rounded-lg p-6 max-w-2xl w-full m-4 max-h-[80vh] overflow-y-auto">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold">Riwayat Diagnosa</h2>
                    <button onclick="document.getElementById('historyModal').remove()" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                ${history.length === 0 ? '<p class="text-gray-500">Belum ada riwayat diagnosa</p>' : 
                    history.map(entry => `
                        <div class="border-b border-gray-200 py-4 last:border-0">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm text-gray-500">
                                    ${new Date(entry.date).toLocaleDateString('id-ID', {
                                        day: 'numeric',
                                        month: 'long',
                                        year: 'numeric',
                                        hour: '2-digit',
                                        minute: '2-digit'
                                    })}
                                </span>
                            </div>
                            <div class="space-y-4">
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <h3 class="text-sm font-medium text-gray-600 mb-2">Gejala yang Dialami:</h3>
                                    <div class="flex flex-wrap gap-2">
                                        ${entry.symptoms.map(symptom => `
                                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700">
                                                ${symptom}
                                            </span>
                                        `).join('')}
                                    </div>
                                </div>
                                <div class="space-y-3">
                                    ${entry.diagnosis.map(d => `
                                        <div class="bg-white border border-gray-200 rounded-lg p-4">
                                            <div class="flex items-center justify-between mb-2">
                                                <p class="font-semibold text-gray-800">${d.kerusakan}</p>
                                                <span class="px-2.5 py-1 rounded-full text-xs font-medium ${
                                                    d.cf * 100 > 70 ? 'bg-red-100 text-red-700' : 
                                                    d.cf * 100 > 40 ? 'bg-yellow-100 text-yellow-700' : 
                                                    'bg-green-100 text-green-700'
                                                }">
                                                    CF: ${(d.cf * 100).toFixed(1)}%
                                                </span>
                                            </div>
                                            ${d.deskripsi ? `
                                                <p class="text-sm text-gray-600 mt-2">${d.deskripsi}</p>
                                            ` : ''}
                                        </div>
                                    `).join('')}
                                </div>
                            </div>
                        </div>
                    `).join('')}
            </div>
        </div>
    `;
    document.body.insertAdjacentHTML('beforeend', modalHTML);
};

document.getElementById('historyBtn').addEventListener('click', showHistory);

// Form submission handler
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

    const selectedGejala = Array.from(document.querySelectorAll('input[name="gejala[]"]:checked')).map(option => option.value);

    axios.post('/diagnosa', { gejala: selectedGejala })
        .then(response => {
            const hasilDiagnosa = response.data;
            saveToHistory(hasilDiagnosa, selectedGejala);
            const list = document.getElementById('diagnosaList');
            list.innerHTML = '';

            // Group diagnoses by kerusakan
            const diagnosisGroups = hasilDiagnosa.reduce((groups, diagnosis) => {
                const group = groups[diagnosis.kerusakan] || [];
                group.push(diagnosis);
                groups[diagnosis.kerusakan] = group;
                return groups;
            }, {});

            // Determine which diagnoses to show
            let diagnosesToShow = [];
            
            if (selectedGejala.length === 1) {
                // For single symptom, show all related diagnoses
                diagnosesToShow = hasilDiagnosa;
            } else {
                // For multiple symptoms, show the highest CF for each unique kerusakan
                Object.values(diagnosisGroups).forEach(group => {
                    const highestCF = Math.max(...group.map(d => d.cf));
                    const bestDiagnosis = group.find(d => d.cf === highestCF);
                    if (bestDiagnosis) {
                        diagnosesToShow.push(bestDiagnosis);
                    }
                });
            }

            // Add header for multiple diagnoses
            if (diagnosesToShow.length > 1) {
                const header = document.createElement('div');
                header.className = 'mb-6 p-4 bg-blue-50 border border-blue-200 rounded-lg';
                header.innerHTML = `
                    <div class="flex items-center gap-2 text-blue-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <p class="font-medium">Ditemukan ${diagnosesToShow.length} kemungkinan kerusakan berbeda.</p>
                    </div>
                `;
                list.appendChild(header);
            }

            // Display the diagnoses
            diagnosesToShow.forEach((diagnosis, index) => {
                const li = document.createElement('div');
                li.className = 'bg-gradient-to-br from-blue-50 to-white rounded-2xl p-6 shadow-2xl border border-blue-100 hover:shadow-xl transition-all duration-300 mb-6 last:mb-0';

                const solusiList = diagnosis.solusi.map(solusi => `
                    <li class="bg-white border border-blue-100 rounded-lg p-4 mb-3 last:mb-0 hover:shadow-md transition-all duration-200">
                        <div class="flex items-start space-x-3">
                            <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-1">${solusi.nama_solusi}</h4>
                                <p class="text-gray-600 text-sm">${solusi.langkah_solusi}</p>
                            </div>
                        </div>
                    </li>
                `).join('');

                const displayedCF = Math.min(diagnosis.cf * 100, 100);

                li.innerHTML = `
                    <div class="flex flex-col space-y-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-4">
                                    <h3 class="text-2xl font-bold text-gray-900">
                                        ${diagnosesToShow.length > 1 
                                            ? `Kerusakan ${index + 1}: ${diagnosis.kerusakan}`
                                            : diagnosis.kerusakan
                                        }
                                    </h3>
                                    <div class="px-3 py-1 rounded-full ${
                                        displayedCF > 70 ? 'bg-red-100 text-red-600' : 
                                        displayedCF > 40 ? 'bg-yellow-100 text-yellow-600' : 
                                        'bg-green-100 text-green-600'
                                    } text-sm font-semibold">
                                        CF: ${displayedCF.toFixed(1)}%
                                    </div>
                                </div>
                                <div class="mb-2 text-sm text-gray-600">
                                    Berdasarkan ${selectedGejala.length} gejala yang dipilih
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 bg-gray-50 p-3 rounded-lg border border-gray-200">
                                    ${diagnosis.deskripsi}
                                </p>
                            </div>
                        </div>
                        
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800 mb-3">Solusi Penanganan:</h4>
                            <ul class="space-y-2">${solusiList}</ul>
                        </div>
                    </div>
                `;
                list.appendChild(li);
            });

            const hasilDiagnosaSection = document.getElementById('hasilDiagnosa');
            hasilDiagnosaSection.classList.remove('hidden');
            hasilDiagnosaSection.scrollIntoView({ behavior: 'smooth' });
        })
        .catch(error => {
            console.error('Error:', error);
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Terjadi kesalahan dalam proses diagnosa. Silakan coba lagi.',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Coba Lagi'
            });
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = `
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                </svg>
                Mulai Diagnosa
            `;
        });
});
   </script>
</body>
</html>
