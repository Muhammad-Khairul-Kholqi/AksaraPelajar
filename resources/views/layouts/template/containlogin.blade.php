<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div class="text-center px-[30px] py-[50px]">
        <p class="text-[25px] font-bold text-red-600">Kenapa Aksara Pelajar?</p>
        <p class="text-[20px] mt-[10px]">Membantu Guru dan Murid Bersatu, Belajar, Berkembang Bersama</p>
    </div>

    <div class="px-[30px] py-[20px] flex flex-wrap justify-center gap-[70px]">
        <div class="flex gap-[10px] items-center flex-wrap">
            <div class="border p-[5px] rounded-[5px] shadow-lg">
                <img  
                    class="w-[70px]"
                    src="{{ asset('assets/united.png') }}"
                >
            </div>
            <p class="font-bold w-[100px]">Meningkatkan Kolaborasi</p>
        </div>

         <div class="flex gap-[10px] items-center flex-wrap">
            <div class="border p-[5px] rounded-[5px] shadow-lg">
                <img  
                    class="w-[70px]"
                    src="{{ asset('assets/book.png') }}"
                >
            </div>
            <p class="font-bold w-[100px]">Pengembangan Sumber Daya</p>
        </div>

         <div class="flex gap-[10px] items-center flex-wrap">
            <div class="border p-[5px] rounded-[5px] shadow-lg">
                <img  
                    class="w-[70px]"
                    src="{{ asset('assets/bar-graph.png') }}"
                >
            </div>
            <p class="font-bold w-[100px]">Monitoring Kemajuan</p>
        </div>
    </div>

    <div class="px-[30px] py-[50px] flex flex-wrap justify-center gap-[70px]">
        <div class="flex gap-[10px] items-center flex-wrap">
            <div class="border p-[5px] rounded-[5px] shadow-lg">
                <img  
                    class="w-[70px]"
                    src="{{ asset('assets/speech-bubble.png') }}"
                >
            </div>
            <p class="font-bold w-[100px]">Fasilitas Komunikasi</p>
        </div>

         <div class="flex gap-[10px] items-center flex-wrap">
            <div class="border p-[5px] rounded-[5px] shadow-lg">
                <img  
                    class="w-[70px]"
                    src="{{ asset('assets/admin-panel.png') }}"
                >
            </div>
            <p class="font-bold w-[100px]">Pembelajaran Berbasis Teknologi</p>
        </div>

         <div class="flex gap-[10px] items-center flex-wrap">
            <div class="border p-[5px] rounded-[5px] shadow-lg">
                <img  
                    class="w-[70px]"
                    src="{{ asset('assets/authorization.png') }}"
                >
            </div>
            <p class="font-bold w-[100px]">Kemudahan Akses</p>
        </div>
    </div>


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="mt-[-50px]">
        <path 
            fill="#DC2626" 
            fill-opacity="1" 
            d="M0,224L24,202.7C48,181,96,139,144,117.3C192,96,240,96,288,122.7C336,149,384,203,432,234.7C480,267,528,277,576,272C624,267,672,245,720,234.7C768,224,816,224,864,229.3C912,235,960,245,1008,261.3C1056,277,1104,299,1152,277.3C1200,256,1248,192,1296,170.7C1344,149,1392,171,1416,181.3L1440,192L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
        </path>
    </svg>
    @yield('containtLogin')
</body>
</html>