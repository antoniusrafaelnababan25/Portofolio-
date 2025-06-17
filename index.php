<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rafael Clinic - Layanan Kesehatan Modern</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/785/785116.png" type="image/svg+xml">
    <!-- untuk header -->
    <img src="https://cdn-icons-png.flaticon.com/512/785/785116.png" alt="Healthcare" class="w-8 h-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<style>
    body {
        font-family: 'Poppins', sans-serif;
        scroll-behavior: smooth;
    }

    .hero-gradient {
        background: linear-gradient(135deg, #f0f7ff 0%, #e6f0ff 100%);
    }

    .btn-primary {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px -5px rgba(59, 130, 246, 0.4);
    }

    .feature-card {
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
    }

    .feature-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px -5px rgba(0, 0, 0, 0.1);
    }

    .doctor-image {
        border-radius: 20px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
    }

    .nav-blur {
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.85);
    }

    .section-title {
        position: relative;
        display: inline-block;
    }

    .section-title:after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 50%;
        height: 4px;
        background: linear-gradient(90deg, #3b82f6, #8b5cf6);
        border-radius: 2px;
    }
</style>

<body class="bg-white text-gray-800">
    <!-- Navigation -->
    <header class="fixed top-0 left-0 w-full z-50 nav-blur shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center">
                    <i class="fas fa-stethoscope text-white text-lg"></i>
                </div>
                <h1 class="text-2xl font-bold text-blue-800">Rafael<span class="text-blue-600">Clinic</span></h1>
            </div>
            <nav class="hidden md:flex space-x-8">
                <a href="#home" class="text-blue-800 font-medium hover:text-blue-600 transition">Beranda</a>
                <a href="#features" class="text-gray-600 font-medium hover:text-blue-600 transition">Layanan</a>
                <a href="#about" class="text-gray-600 font-medium hover:text-blue-600 transition">Tentang</a>
                <a href="#contact" class="text-gray-600 font-medium hover:text-blue-600 transition">Kontak</a>
            </nav>
            <div class="flex items-center space-x-4">
                <a href="auth/login.php" class="btn-primary text-white px-5 py-2.5 rounded-full font-medium shadow-md">
                    Masuk
                </a>
                <button class="md:hidden text-gray-600 focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-20 hero-gradient">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-12 md:mb-0">
                    <h2 class="text-4xl md:text-5xl font-bold leading-tight mb-6 text-blue-900">
                        Perawatan Kesehatan <span class="text-blue-600">Terbaik</span> untuk Anda
                    </h2>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Rafael Clinic menyediakan layanan kesehatan berkualitas dengan teknologi modern dan dokter
                        profesional siap melayani kebutuhan kesehatan Anda dan keluarga.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="auth/login.php"
                            class="btn-primary text-white px-6 py-3 rounded-full font-medium shadow-md text-center">
                            Mulai Konsultasi
                        </a>
                        <a href="#features"
                            class="border-2 border-blue-600 text-blue-600 px-6 py-3 rounded-full font-medium hover:bg-blue-50 transition text-center">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 relative">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Doctor with patient" class="doctor-image w-full max-w-lg mx-auto">
                        <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-xl shadow-lg z-10 hidden md:block">
                            <div class="flex items-center">
                                <div class="bg-blue-100 p-3 rounded-full mr-3">
                                    <i class="fas fa-user-md text-blue-600 text-xl"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-blue-900">100+</p>
                                    <p class="text-sm text-gray-500">Dokter Spesialis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h3 class="section-title text-3xl font-bold text-blue-900 inline-block">Layanan Kami</h3>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                    Berbagai layanan kesehatan berkualitas yang kami sediakan untuk memenuhi kebutuhan medis Anda
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="feature-card p-8 rounded-2xl border border-gray-100">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-calendar-check text-blue-600 text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3 text-blue-900">Janji Medis Online</h4>
                    <p class="text-gray-600 mb-4">
                        Buat janji konsultasi dengan dokter pilihan Anda secara online tanpa perlu antri.
                    </p>
                    <a href="#" class="text-blue-600 font-medium inline-flex items-center">
                        Selengkapnya <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card p-8 rounded-2xl border border-gray-100">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-comment-medical text-blue-600 text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3 text-blue-900">Konsultasi Dokter</h4>
                    <p class="text-gray-600 mb-4">
                        Konsultasi langsung dengan dokter spesialis melalui chat, video call, atau kunjungan klinik.
                    </p>
                    <a href="#" class="text-blue-600 font-medium inline-flex items-center">
                        Selengkapnya <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card p-8 rounded-2xl border border-gray-100">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-file-medical text-blue-600 text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3 text-blue-900">Rekam Medis Digital</h4>
                    <p class="text-gray-600 mb-4">
                        Akses riwayat kesehatan dan hasil pemeriksaan Anda kapan saja secara online.
                    </p>
                    <a href="#" class="text-blue-600 font-medium inline-flex items-center">
                        Selengkapnya <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-12 md:mb-0 md:pr-10">
                    <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Clinic interior" class="rounded-2xl shadow-xl w-full">
                </div>
                <div class="md:w-1/2">
                    <h3 class="section-title text-3xl font-bold text-blue-900 inline-block">Tentang Rafael Clinic</h3>
                    <p class="mt-6 text-gray-600 mb-6">
                        Rafael Clinic adalah penyedia layanan kesehatan modern yang berkomitmen untuk memberikan
                        perawatan medis terbaik dengan menggabungkan keahlian medis dan teknologi terkini.
                    </p>

                    <div class="space-y-6">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 text-blue-600">
                                    <i class="fas fa-award"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-blue-900">Dokter Profesional</h4>
                                <p class="mt-1 text-gray-600">
                                    Tim dokter spesialis berpengalaman dan bersertifikat.
                                </p>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 text-blue-600">
                                    <i class="fas fa-clinic-medical"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-blue-900">Fasilitas Modern</h4>
                                <p class="mt-1 text-gray-600">
                                    Peralatan medis terkini untuk diagnosis dan perawatan yang akurat.
                                </p>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 text-blue-600">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-blue-900">Pelayanan Ramah</h4>
                                <p class="mt-1 text-gray-600">
                                    Staf kami siap memberikan pelayanan terbaik dengan penuh perhatian.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h3 class="section-title text-3xl font-bold text-blue-900 inline-block">Apa Kata Pasien Kami</h3>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                    Testimoni dari pasien yang telah merasakan pelayanan Rafael Clinic
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 p-8 rounded-2xl">
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/women/32.jpg"
                                alt="">
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-blue-900">Sarah Wijaya</h4>
                            <div class="flex text-yellow-400 mt-1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "Pelayanan sangat memuaskan, dokter sangat profesional dan sabar menjelaskan kondisi kesehatan
                        saya. Proses pendaftaran online juga sangat mudah."
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gray-50 p-8 rounded-2xl">
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/men/54.jpg"
                                alt="">
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-blue-900">Budi Santoso</h4>
                            <div class="flex text-yellow-400 mt-1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "Fasilitas sangat lengkap dan modern. Proses pemeriksaan cepat dan hasilnya akurat. Sangat
                        merekomendasikan Rafael Clinic."
                    </p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-gray-50 p-8 rounded-2xl">
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/women/68.jpg"
                                alt="">
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-blue-900">Dewi Anggraeni</h4>
                            <div class="flex text-yellow-400 mt-1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "Sangat terbantu dengan layanan rekam medis digital, bisa mengakses hasil lab kapan saja.
                        Stafnya juga sangat ramah dan membantu."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 gradient-bg">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="mb-6 md:mb-0 md:mr-6">
                        <h3 class="text-2xl font-bold text-blue-900 mb-2">Siap Memulai Perawatan Kesehatan Anda?</h3>
                        <p class="text-gray-600">
                            Daftar sekarang dan dapatkan konsultasi pertama dengan dokter spesialis kami.
                        </p>
                    </div>
                    <a href="auth/login.php"
                        class="btn-primary text-white px-8 py-3 rounded-full font-medium shadow-md whitespace-nowrap">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-blue-900 text-white pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 mb-12">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 rounded-full bg-blue-700 flex items-center justify-center">
                            <i class="fas fa-stethoscope text-white text-lg"></i>
                        </div>
                        <h2 class="text-xl font-bold">Rafael<span class="text-blue-300">Clinic</span></h2>
                    </div>
                    <p class="text-blue-200 mb-4">
                        Layanan kesehatan modern dengan teknologi terkini dan dokter profesional.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-blue-300 hover:text-white transition">
                            <i class="fab fa-facebook-f text-lg"></i>
                        </a>
                        <a href="#" class="text-blue-300 hover:text-white transition">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                        <a href="#" class="text-blue-300 hover:text-white transition">
                            <i class="fab fa-twitter text-lg"></i>
                        </a>
                        <a href="#" class="text-blue-300 hover:text-white transition">
                            <i class="fab fa-linkedin-in text-lg"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4">Layanan</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Konsultasi Dokter</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Medical Check Up</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Rawat Jalan</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Fisioterapi</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Laboratorium</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4">Perusahaan</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Dokter Kami</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Karir</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Blog</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Kontak</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4">Kontak Kami</h3>
                    <ul class="space-y-3 text-blue-200">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-blue-300"></i>
                            <span>Jl. Kesehatan No. 123, Jakarta Selatan, Indonesia</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-3 text-blue-300"></i>
                            <span>(021) 1234-5678</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-blue-300"></i>
                            <span>info@rafaelclinic.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-blue-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-blue-300 text-sm mb-4 md:mb-0">
                    © 2023 Rafael Clinic. All rights reserved.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-blue-300 hover:text-white text-sm transition">Kebijakan Privasi</a>
                    <a href="#" class="text-blue-300 hover:text-white text-sm transition">Syarat & Ketentuan</a>
                    <a href="#" class="text-blue-300 hover:text-white text-sm transition">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>