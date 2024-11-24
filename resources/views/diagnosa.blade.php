<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar Diagnosa Hardware</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f6f9fc 0%, #ecf0f5 100%);
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
    </style>
</head>

<body class="min-h-screen py-12 px-4">
    <!-- Background Decoration -->
    <div class="fixed inset-0 -z-10 overflow-hidden">
        <div class="absolute -top-1/2 -left-1/2 w-full h-full bg-gradient-to-br from-blue-50 to-indigo-50 transform rotate-12"></div>
        <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_50%_120%,rgba(120,119,198,0.1),rgba(255,255,255,0))]"></div>
    </div>

    <div class="container mx-auto max-w-4xl">
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
                            Silakan pilih satu atau lebih gejala yang Anda alami pada perangkat keras
                        </span>
                    </label>
                    <select id="gejala" name="gejala[]" multiple 
                            class="w-full py-3 px-4 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200 min-h-[200px]">
                        @foreach($gejalas as $gejala)
                        <option value="{{ $gejala->id }}" class="py-2 px-4 hover:bg-blue-50">
                            {{ $gejala->nama_gejala }}
                        </option>
                        @endforeach
                    </select>
                    <p class="mt-3 text-sm text-gray-500 flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                        Tahan <kbd class="px-2 py-1 text-xs font-semibold text-gray-800 bg-gray-100 border border-gray-200 rounded-lg">Ctrl</kbd> atau 
                        <kbd class="px-2 py-1 text-xs font-semibold text-gray-800 bg-gray-100 border border-gray-200 rounded-lg">⌘</kbd> 
                        untuk memilih multiple gejala
                    </p>
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

            const gejala = Array.from(document.getElementById('gejala').selectedOptions).map(option => option.value);

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