<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-gradient-to-b from-red-300">
        <div class="flex fle-wrap items-center gap-[5px] py-[20px] ml-[5%]">
            <img 
                class="w-[60px]"
                src="{{ asset('assets/logo.png') }}"
            >

            <div class="text-[20px] font-bold text-[#33495D] mb-[-5px]">
                <p>Aksara</p>
                <p class="mt-[-10px] text-[25px]">Pelajar</p>
            </div>
        </div>

        <div class="tittle-form-login flex flex-wrap items-center justify-between px-[5%] py-[100px] gap-[30px]">
            <div>
                <p class="tittle-login text-[60px] font-bold">
                    Guru dan Murid <br> 
                    <span class="text-red-600">
                        Bersatu, Belajar, <br> 
                        Berkembang 
                    </span>
                    Bersama
                </p>
            </div>

            <div class="shadow-md border rounded-[10px] p-[30px] bg-white">
                <p class="tittle-form font-bold text-[30px]">Masuk Untuk Memulai</p>
                <form action="" class=" mt-[30px]">
                    <div>
                        <span for="usename" class="text-[20px] font-bold">Username </span>
                        <input 
                            id="username"
                            class="border w-[500px] block rounded-[5px] h-[40px] px-[5px] mt-[10px]"
                            type="text"
                            placeholder="Ketik Username"
                            autocomplete="off"
                        >
                    </div>

                    <div class="mt-[20px]">
                        <span for="usename" class="text-[20px] font-bold">Password </span>
                        <input 
                            id="username"
                            class="border w-[500px] block rounded-[5px] h-[40px] px-[5px] mt-[10px]"
                            type="password"
                            placeholder="Ketik Password"
                            autocomplete="off"
                        >
                    </div>

                    <button class="bg-red-600 hover:bg-red-700 text-white h-[50px] text-[25px] py-[5px] px-[10px] rounded-[5px] w-full mt-[20px]">Masuk</button>
                </form>
            </div>
        </div>
    </div>

    <div>
        @extends('.layouts.template.containlogin')
    </div>

<style>
    @media (max-width: 1365px) {
        input[type=text],
        input[type=password] {
            width: 400px;
        }
    }  
    
    @media (max-width: 1255px) {
        .tittle-login {
            font-size: 50px;
        }
    } 

    @media (max-width: 1135px) {
        .tittle-login {
            font-size: 40px;
        }
    } 

    @media (max-width: 1020px) {
        input[type=text],
        input[type=password] {
            width: 300px;
        }
    }  

    @media (max-width: 925px) {
        .tittle-login {
            font-size: 30px;
        }
    } 

    @media (max-width: 805px) {
        input[type=text],
        input[type=password] {
            width: 250px;
        }

        .tittle-form {
            font-size: 20px
        }
    }  

    @media (max-width: 735px) {
        .tittle-form-login {
            display: flex;
            flex-direction: column;
            margin-top: -50px;
        }

        input[type=text],
        input[type=password] {
            width: 300px;
        }
    }  

    @media (max-width: 425px) {
        input[type=text],
        input[type=password] {
            width: 200px;
        }
    }  
</style>
</body>
</html>