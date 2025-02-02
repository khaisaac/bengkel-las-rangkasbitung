@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
<section id="home" class="relative h-screen overflow-hidden">
    <!-- Carousel Container -->
    <div class="absolute inset-0 z-0">
        <div class="relative h-full w-full">
            <!-- Carousel Items -->
            <div class="absolute inset-0 transition-opacity duration-1000 ease-in-out" id="carousel">
                <!-- Image 1 -->
                <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000 ease-in-out opacity-100" 
                    style="background-image: url('{{ asset('images/1.png') }}')"></div>
                
                <!-- Image 2 -->
                <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000 ease-in-out opacity-0" 
                    style="background-image: url('{{ asset('images/2.png') }}')"></div>
                
                <!-- Image 3 -->
                <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000 ease-in-out opacity-0" 
                    style="background-image: url('{{ asset('images/3.png') }}')"></div>
            </div>
            
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        </div>
    </div>

    <!-- Content -->
    <div class="relative z-10 h-full flex items-center">
        <div class="container mx-auto px-6">
            <div class="max-w-2xl">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Bengkel Las Profesional
                </h1>
                <p class="text-lg text-gray-200 mb-8">
                    Menjual dan melayani pasang baja ringan, aluminium, plafon, kanopi, pagar dan lain-lain.
                </p>
                <a href="https://wa.me/6281297336407" 
                   class="bg-green-500 text-white px-8 py-3 rounded-full hover:bg-green-600 transition">
                    <i class="fab fa-whatsapp mr-2"></i> Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>

    <!-- Services Section -->
    <!-- Services Section -->
<section id="services" class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Layanan Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Layanan Utama -->
            <div class="p-6 border rounded-lg hover:shadow-lg transition">
                <i class="fas fa-cubes text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Baja Ringan</h3>
                <p class="text-gray-600">Jasa pasang dan jual bahan baja ringan berkualitas tinggi</p>
            </div>
            
            <div class="p-6 border rounded-lg hover:shadow-lg transition">
                <i class="fas fa-shield-alt text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Aluminium</h3>
                <p class="text-gray-600">Pembuatan dan pemasangan partisi aluminium untuk rumah dan gedung</p>
            </div>

            <div class="p-6 border rounded-lg hover:shadow-lg transition">
                <i class="fas fa-paint-roller text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Plafon</h3>
                <p class="text-gray-600">Pemasangan plafon gypsum, PVC, dan material modern lainnya</p>
            </div>

            <div class="p-6 border rounded-lg hover:shadow-lg transition">
                <i class="fas fa-umbrella text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Kanopi</h3>
                <p class="text-gray-600">Pembuatan kanopi dengan berbagai model dan bahan berkualitas</p>
            </div>

            <div class="p-6 border rounded-lg hover:shadow-lg transition">
                <i class="fas fa-solid fa-xmarks-lines text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Pagar</h3>
                <p class="text-gray-600">Desain dan pemasangan pagar besi, stainless, atau kombinasi</p>
            </div>

            <div class="p-6 border rounded-lg hover:shadow-lg transition">
                <i class="fas fa-drafting-compass text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Desain Custom</h3>
                <p class="text-gray-600">Konsultasi dan implementasi desain sesuai kebutuhan Anda</p>
            </div>
        </div>
        
        <!-- Tambahan Lainnya -->
        <div class="mt-12 text-center">
            <p class="text-gray-600">Dan berbagai jenis pekerjaan lainnya!</p>
            <div class="mt-4 flex justify-center space-x-4">
                <i class="fas fa-wrench text-blue-600"></i>
                <i class="fas fa-hammer text-blue-600"></i>
                <i class="fas fa-toolbox text-blue-600"></i>
            </div>
        </div>
    </div>
</section>

<!-- Clients Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Klien Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
            <!-- Client 1 -->
            <div class="relative group flex justify-center">
                <img src="{{ asset('images/wika.png') }}" alt="Client 1" 
                     class="h-20 object-contain transition-all duration-300">
                <div class="absolute bottom-full mb-2 hidden group-hover:block bg-black bg-opacity-75 text-white text-sm px-3 py-1 rounded whitespace-nowrap">
                    PT Wijaya Karya
                </div>
            </div>
            
            <!-- Client 2 -->
            <div class="relative group flex justify-center">
                <img src="{{ asset('images/pupr.png') }}" alt="Client 2" 
                     class="h-20 object-contain transition-all duration-300">
                <div class="absolute bottom-full mb-2 hidden group-hover:block bg-black bg-opacity-75 text-white text-sm px-3 py-1 rounded whitespace-nowrap">
                    Kementerian Pekerjaan Umum dan Perumahan Rakyat
                </div>
            </div>

            <!-- Client 3 -->
            <div class="relative group flex justify-center">
                <img src="{{ asset('images/daelim.png') }}" alt="Client 3" 
                     class="h-20 object-contain transition-all duration-300">
                <div class="absolute bottom-full mb-2 hidden group-hover:block bg-black bg-opacity-75 text-white text-sm px-3 py-1 rounded whitespace-nowrap">
                    PT Daelim Indonesia
                </div>
            </div>
        </div>
        
        <!-- Additional Text -->
        <div class="mt-12 text-center">
            <p class="text-gray-600">Dan berbagai perusahaan lainnya</p>
            <div class="mt-4 flex justify-center space-x-4">
                <i class="fas fa-building text-blue-600"></i>
                <i class="fas fa-industry text-blue-600"></i>
                <i class="fas fa-handshake text-blue-600"></i>
            </div>
        </div>
    </div>
</section>

    <!-- Location Section -->
    <section id="location" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Lokasi Kami</h2>
            <div class="rounded-lg overflow-hidden shadow-xl">
                <iframe 
                    src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3927233845734!2d106.24540049999999!3d-6.343157199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e421736b178fe85%3A0xdd50b43088d106be!2sRidho%20Jaya%20Logam!5e0!3m2!1sid!2sid!4v1738465415008!5m2!1sid!2sid" 
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-8">Siap Bekerja Sama?</h2>
            <p class="mb-8 text-xl">Hubungi kami sekarang untuk konsultasi proyek Anda</p>
            <a href="https://wa.me/6281297336407" 
               class="bg-white text-blue-600 px-8 py-3 rounded-full hover:bg-gray-100 transition">
                <i class="fab fa-whatsapp mr-2"></i> WhatsApp Sekarang
            </a>
        </div>
    </section>
@endsection