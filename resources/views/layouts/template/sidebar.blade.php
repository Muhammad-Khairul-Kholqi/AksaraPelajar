<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="h-screen flex">
    <div class="fixed bg-white shadow-lg border flex flex-col items-center h-full w-[90px] px-[5px] overflow-x-auto z-10">
        <div class="flex flex-col items-center w-full py-[15px]">
            <div class="logo bg-red-600 p-[5px] rounded-[10px] flex justify-center items-center">
                <img
                    class="w-[30px]"    
                    src="{{ asset('assets/logo-white.png') }}"
                    alt="Logo"
                >
            </div>

            <hr class="w-full border-t-2 border-gray-300 mt-[15px]">

            <nav class="mt-[12px] w-full">
                <a href="">
                    <div class="flex flex-col items-center hover:text-red-600 hover:bg-red-50 p-[5px] rounded-[3px]">
                        <i class="bi bi-house-door"></i>
                        <p class="text-[10px]">Rumah</p>
                    </div>
                </a>

                <a href="">
                    <div class="mt-[12px] flex flex-col items-center hover:text-red-600 hover:bg-red-50 p-[5px] rounded-[3px]">
                        <i class="bi bi-calendar4-week"></i>
                        <p class="text-[10px]">Absen</p>
                    </div>
                </a>

                <a href="">
                    <div class="mt-[12px] flex flex-col items-center hover:text-red-600 hover:bg-red-50 p-[5px] rounded-[3px]">
                        <i class="bi bi-card-checklist"></i>
                        <p class="text-[10px]">Tugas</p>
                    </div>
                </a>

                <a href="">
                    <div class="mt-[12px] flex flex-col items-center hover:text-red-600 hover:bg-red-50 p-[5px] rounded-[3px]">
                        <i class="bi bi-check-square"></i>
                        <p class="text-[10px]">Penilaian</p>
                    </div>
                </a>

                <a href="">
                    <div class="mt-[12px] flex flex-col items-center hover:text-red-600 hover:bg-red-50 p-[5px] rounded-[3px]">
                        <i class="bi bi-wallet2"></i>
                        <p class="text-[10px]">Pembayaran</p>
                    </div>
                </a>

                <a href="">
                    <div class="mt-[12px] flex flex-col items-center hover:text-red-600 hover:bg-red-50 p-[5px] rounded-[3px]">
                        <i class="bi bi-chat-dots"></i>
                        <p class="text-[10px]">Pesan</p>
                    </div>
                </a>

                {{-- untuk guru --}}
                <a href="">
                    <div class="mt-[12px] flex flex-col items-center hover:text-red-600 hover:bg-red-50 p-[5px] rounded-[3px]">
                        <i class="bi bi-clipboard-data"></i>
                        <p class="text-[10px] text-center">Data<br>Siswa</p>
                    </div>
                </a>

                <a href="">
                    <div class="mt-[12px] flex flex-col items-center hover:text-red-600 hover:bg-red-50 p-[5px] rounded-[3px]">
                        <i class="bi bi-person"></i>
                        <p class="text-[10px]">Profil</p>
                    </div>
                </a>

                <a href="">
                    <div class="mt-[35px] flex flex-col items-center hover:text-red-600 hover:bg-red-50 p-[5px] rounded-[3px]">
                        <i class="bi bi-box-arrow-left"></i>
                        <p class="text-[10px]">Keluar</p>
                    </div>
                </a>
            </nav>
        </div>
    </div>

    <div class="flex flex-col flex-1 pl-[90px]">
        <!-- Include Header -->
        @include('layouts.template.header')

        <!-- Content -->
        <div class="flex-1 px-4 py-3 overflow-y-auto">
            @yield('content')
        </div>
    </div>
</body>
</html>
