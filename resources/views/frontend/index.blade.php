<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Haber Sitesi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('../frontend/assets/css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('../frontend/assets/css/swiper.css') }}" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
</head>
<body>
<!-- Header section -->
<!-- Header section -->
<div class="bg-white">
    <div class="w-full border-b bg-white">
        <div
            class="container max-w-[1098px] flex items-center justify-between p-4 lg:p-0 xl:justify-between h-full m-auto"
        >
            <h2 class="font-medium text-sm text-[#434343]">
                27 ŞUBAT 2023 PAZARTESİ
            </h2>
            <div class="w-[70%] h-[50px] hidden lg:block">
                <ul class="flex flex-row gap-4 h-full justify-center">
                    <li class="flex flex-row items-center h-full gap-1 text-base">
                        <span class="text-sm font-bold">ALTIN</span>
                        <i class="fas fa-sort-up mt-2 text-green-600"></i>
                        <span class="text-sm text-green-600 font-extrabold">1098.687</span>
                        <span class="text-sm font-light">%0.02</span>
                    </li>
                    <li class="flex flex-row items-center h-full gap-1 text-base">
                        <span class="text-sm font-bold">DOLAR</span>
                        <i class="fas fa-sort-down mb-2 text-red-600"></i>
                        <span class="text-sm text-red-600 font-extrabold">1098.687</span>
                        <span class="text-sm font-light">%0.02</span>
                    </li>
                    <li class="flex flex-row items-center h-full gap-1 text-base">
                        <span class="text-sm font-bold">EURO</span>
                        <i class="fas fa-sort-up mt-2 text-green-600"></i>
                        <span class="text-sm text-green-600 font-extrabold">1098.687</span>
                        <span class="text-sm font-light">%0.02</span>
                    </li>
                </ul>
            </div>
            <ul class="flex justify-between items-center gap-4">
                <a href="">
                    <li
                        class="rounded-full text-center text-blue-800 hover:scale-110 duration-700"
                    >
                        <i class="fa-brands fa-square-facebook"></i>
                    </li>
                </a>
                <a href="">
                    <li
                        class="rounded-full justify-center text-center text-red-600 hover:scale-110 duration-700"
                    >
                        <i class="fa-brands fa-square-instagram"></i>
                    </li>
                </a>
                <a href="">
                    <li
                        class="rounded-full text-center text-blue-500 hover:scale-110 duration-700"
                    >
                        <i class="fa-brands fa-square-twitter"></i>
                    </li>
                </a>
                <a href="">
                    <li
                        class="rounded-full text-center text-red-600 hover:scale-110 duration-700"
                    >
                        <i class="fa-brands fa-youtube"></i>
                    </li>
                </a>
            </ul>
        </div>
    </div>
    <!-- Logo section  -->
    <div class="border-b bg-white">
        <div class="h-[90px] flex flex-row max-w-[1098px] container my-2 md:mx-[290px]">
            <div>
                <a href="/">
                    <img
                        class="h-[90px] align-middle aspect-auto overflow-clip absolute "
                        src="https://anatolianhaber.fra1.digitaloceanspaces.com/2022/12/logo.jpg"
                        alt="/"
                    />
                </a>
                <div
                    class="flex flex-col justify-center absolute top-[90px] right-[160px] max-sm:right-14 max-md:hidden md:mx-[100px]"
                >
                    <ul
                        class="grid grid-cols-4 grid-rows-4 font-bold items-center text-sm md:mr-14"
                    >
                        <li>


                            <!-- Search Input  -->

                            <div class="relative">
                                <button
                                    type="button"
                                    class="absolute -right-0 -top-3 focus:outline-none"
                                    id="search-icon"
                                >
                                    <!--- Arama ikonu --->
                                    <i class="fa-solid fa-magnifying-glass"></i>

                                </button>
                                <a href="{{ route('admin.login') }}"
                                    type="button"
                                    class="absolute -right-8 -top-3 focus:outline-none"
                                    id="search-icon"
                                >
                                    <!--- Arama ikonu --->
                                    <i class="fa-regular fa-user"></i>

                                </a>


                                <div
                                    class="absolute right-14 -top-[75px] mt-16 w-56 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
                                    id="search-menu"
                                >
                                    <!--- Arama kutusu --->
                                    <input
                                        type="text"
                                        class="w-full absolute bg-gray-200 py-1 -gray-300"
                                        placeholder="Ara..."
                                    />
                                </div>
                            </div>
                        </li>
                        <script>
                            const searchIcon = document.getElementById("search-icon");
                            const searchMenu = document.getElementById("search-menu");
                            const searchInput = searchMenu.querySelector("input");

                            searchIcon.addEventListener("click", () => {
                                const expanded = searchMenu.classList.contains("hidden");

                                searchMenu.classList.toggle("hidden", !expanded);

                                if (expanded) {
                                    searchInput.blur();
                                } else {
                                    searchInput.focus();
                                }
                            });

                            searchInput.addEventListener("keydown", (event) => {
                                if (event.key === "Escape") {
                                    searchMenu.classList.add("hidden");
                                }
                            });
                        </script>

                        <li>

                        </li>
                        <li class="text-xl">12°</li>
                        <li class="flex flex-col ">
                            İstanbul <span class="text-gray-600 font-medium">Açık</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar section  -->
    <div
        class="flex justify-start text-center w-full mx-4 md:mx-52 my-4 bg-white"
    >
        <div class="font-medium items-center md:mx-[90px]">
            <ul
                class="flex flex-row justify-center items-center gap-4 text-gray-800 text-center pb-3"
            >
                <a href="/"
                ><li class="hover:text-red-600">
                        <i class="fa-solid fa-house"></i></li
                    ></a>
                @foreach($categories as $category)
                    <a href=""{{ route('category', $category->slug) }}"><li class="hover:text-red-600">{{ $category->category_name }}</li></a>
                @endforeach
                <div class="relative inline-block text-left z-30">
                    <!-- Dropdown menu  -->
                    <div class="relative inline-block text-left">
                        <button
                            type="button"
                            class="inline-flex justify-center w-full px-4 pt-2 bg-white font-medium text-gray-700 hover:text-red-600 ml-6"
                            id="dropdown-button"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            DİĞER
                            <!--- Aşağı ok sembolü --->
                            <svg
                                class="text-center -mr-1 ml-4 h-8 w-8"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M6.293 6.293a1 1 0 0 1 1.414 0L10 8.586l2.293-2.293a1 1 0 1 1 1.414 1.414l-3 3a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 0-1.414z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </button>
                        <div
                            class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
                            id="dropdown-menu"
                            role="menu"
                            aria-orientation="vertical"
                            aria-labelledby="dropdown-button"
                        >
                            <div class="py-1 text-center" role="none">
                                <a
                                    href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 border-b hover:text-gray-900"
                                    role="menuitem"
                                >KORONAVİRÜS</a
                                >
                                <a
                                    href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 border-b hover:text-gray-900"
                                    role="menuitem"
                                >YEMEK TARİFLERİ</a
                                >
                                <a
                                    href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 border-b hover:text-gray-900"
                                    role="menuitem"
                                >SAĞLIK</a
                                >
                                <a
                                    href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 border-b hover:text-gray-900"
                                    role="menuitem"
                                >KÜLTÜR SANAT</a
                                >
                                <a
                                    href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 border-b hover:text-gray-900"
                                    role="menuitem"
                                >KARAR NEDİR</a
                                >
                                <a
                                    href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 border-b hover:text-gray-900"
                                    role="menuitem"
                                >KARAR BİYOGRAFİ</a
                                >
                                <a
                                    href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                    role="menuitem"
                                >İLANLAR</a
                                >
                            </div>
                        </div>
                    </div>

                    <script>
                        const dropdownButton =
                            document.getElementById("dropdown-button");
                        const dropdownMenu = document.getElementById("dropdown-menu");

                        dropdownButton.addEventListener("click", () => {
                            const expanded =
                                dropdownButton.getAttribute("aria-expanded") === "true";

                            dropdownButton.setAttribute("aria-expanded", !expanded);
                            dropdownMenu.classList.toggle("hidden");
                        });
                    </script>
                </div>
            </ul>
        </div>
    </div>
</div>


<!-- Slider adet sayma kısmı
    @for($i=0;$i<count($product_slider);$i++)
        <li data-target="#carousel-example-generic" data-slide-to="{{ $i }}" class="{{$i == 0 ? 'active':''}}"></li>
    @endfor
-->
<!-- Swiper -->
<div class="container m-auto w-[96%] lg:max-w-[1098px] ">
    <!-- İkili Slider Kapsayıcı div -->
    <div class="flex flex-col lg:flex-row gap-8">
        <!-- İkili Slider Slider 1 -->
        <div class="swiper mySwiper w-[1/2] kucuk_slider">
            <div class="swiper-wrapper bg-[rgba(0,0,0,.35)]">
                @foreach($product_slider as $product)
                <div class="swiper-slide">
                    <a href="">
                        <img src="{{asset('/backend/images/'.$product->product_img)}}" alt="" />
                        <div class="absolute w-[100%] bottom-0 p-3 bg-[linear-gradient(0deg,#000,transparent);]">
                            <h1 class="relative font-bold text-2xl text-white w-[70%] p-1">{{ $product->product->product_name }}</h1>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination swp-vertical bg-[rgba(0,0,0,.35)]"></div>
        </div>
        <!-- İkili Slider Slider 1 -->
        <!-- İkili Slider Slider 2 -->
        <div class="swiper mySwiper w-[1/2] kucuk_slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="">
                        <img src="https://cdn.karar.com/news/1528597.jpg" alt="" />
                        <div class="absolute w-[100%] bottom-0 p-3 bg-[linear-gradient(0deg,#000,transparent);]">
                            <h1 class="relative font-bold text-2xl text-white w-[70%] p-1">Deneme manşet 1</h1>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img src="https://cdn.karar.com/news/1528600.jpg" alt="" />
                        <div class="absolute w-[100%] bottom-0 p-3 bg-[linear-gradient(0deg,#000,transparent);]">
                            <h1 class="relative font-bold text-2xl text-white w-[70%] p-1">Deneme manşet 2</h1>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img src="https://cdn.karar.com/news/1528606.jpg" alt="" />
                        <div class="absolute w-[100%] bottom-0 p-3 bg-[linear-gradient(0deg,#000,transparent);]">
                            <h1 class="relative font-bold text-2xl text-white w-[70%] p-1">Deneme manşet 3</h1>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img src="https://cdn.karar.com/news/1528612.jpg" alt="" />
                        <div class="absolute w-[100%] bottom-0 p-3 bg-[linear-gradient(0deg,#000,transparent);]">
                            <h1 class="relative font-bold text-2xl text-white w-[70%] p-1">Deneme manşet 4</h1>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img src="https://cdn.karar.com/news/1528612.jpg" alt="" />
                        <div class="absolute w-[100%] bottom-0 p-3 bg-[linear-gradient(0deg,#000,transparent);]">
                            <h1 class="relative font-bold text-2xl text-white w-[70%] p-1">Deneme manşet 5</h1>
                        </div>
                    </a>
                </div>
            </div>
            <div class="swiper-pagination swp-vertical bg-[rgba(0,0,0,.35)]"></div>
        </div>
        <!-- İkili Slider Slider 2 -->
    </div>
    <!-- Büyük Slider -->
    <div class="swiper mySwiper w-full mt-8 buyuk_slider">
        <div class="swiper-wrapper">
            @if (isset($product_gunun_firsati))
                @foreach($product_gunun_firsati as $gunun_firsati)
            <div class="swiper-slide">
                <a href="{{ route('product', $gunun_firsati->slug ?? '') }}">
                    <div class="absolute w-[90%] bg-[#ffffff93] bottom-20 p-4 left-[5%] border-l-4 border-l-red-700">
                        <h1 class="font-bold text-4xl">{{ $gunun_firsati->product_name }}</h1>
                    </div>
                    <img src="{{asset('/backend/images/'.$gunun_firsati->product->product_img)}}" alt="" />
                </a>
            </div>
                @endforeach
            @endif
        </div>
        <div class="swiper-pagination swp-horizontal bg-[#d10912]"></div>
    </div>
    <!-- Büyük Slider -->
    <!-- Author Slider -->
    <div class="swiper authorSwiper my-8">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="w-70 h-36 border bg-white">

                    <h1 class="box-border short-text-2 font-semibold mx-2 my-3"><a href="">Yazarın yazdığı yazının başlığı
                            Yazarın
                            yazdığı
                            yazının başlığı 1</a></h1>

                    <div class="w-70">
                        <span class="block pt-1 border-t-4 border-red-600 w-2/3 h-1"></span>
                        <span class="float-left p-3">Taha AKYOL 1</span>
                    </div>
                    <img src="https://cdn.karar.com/author/86_s.jpg"
                         class="relative w-[66px!important] h-[65px!important] bottom-[9px] float-right object-contain" />
                </div>
            </div>
            <div class="swiper-slide">
                <div class="w-70 h-36 border bg-white">

                    <h1 class="short-text-2 font-semibold my-3"><a href="">Yazarın yazdığı yazının başlığı Yazarın yazdığı
                            yazının başlığı 2</a>
                    </h1>
                    <div class="w-70">
                        <span class="block pt-1 border-t-4 border-red-600 w-2/3 h-1"></span>
                        <span class="float-left p-3">Taha AKYOL 2</span>
                    </div>
                    <img src="https://cdn.karar.com/author/86_s.jpg"
                         class="relative w-[66px!important] h-[65px!important] bottom-[9px] float-right object-contain" />
                </div>
            </div>
            <div class="swiper-slide">
                <div class="w-70 h-36 border bg-white">

                    <h1 class="short-text-2 font-semibold my-3"><a href="">Yazarın yazdığı yazının başlığı Yazarın yazdığı
                            yazının başlığı 3</a>
                    </h1>
                    <div class="w-70">
                        <span class="block pt-1 border-t-4 border-red-600 w-2/3 h-1"></span>
                        <span class="float-left p-3">Taha AKYOL 3</span>
                    </div>
                    <img src="https://cdn.karar.com/author/86_s.jpg"
                         class="relative w-[66px!important] h-[65px!important] bottom-[9px] float-right object-contain" />
                </div>
            </div>
        </div>
    </div>
    <!-- Author Slider -->
    <div class="flex flex-row justify-between lg:mb-64">
        <!-- Left -->
        <div class="w-full m-auto lg:m-0 lg:w-[65%]">
            <!-- Küçük Slider-->
            <div class="swiper mySwiper w-full mb-12 ortanca_slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="" class="h-full">
                            <div class="absolute w-[90%] bg-[#ffffff93] bottom-20 p-4 left-[5%] border-l-4 border-l-red-700">
                                <h1 class="font-bold text-3xl">Deneme manşet 1</h1>
                            </div>
                            <img src="https://cdn.karar.com/news/1528597.jpg" alt="" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="h-full">
                            <div class="absolute w-[90%] bg-[#ffffff93] bottom-20 p-4 left-[5%] border-l-4 border-l-red-700">
                                <h1 class="font-bold text-3xl">Deneme manşet 2</h1>
                            </div>
                            <img src="https://cdn.karar.com/news/1528600.jpg" alt="" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="h-full">
                            <div class="absolute w-[90%] bg-[#ffffff93] bottom-20 p-4 left-[5%] border-l-4 border-l-red-700">
                                <h1 class="font-bold text-3xl">Deneme manşet 3</h1>
                            </div>
                            <img src="https://cdn.karar.com/news/1528606.jpg" alt="" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="h-full">
                            <div class="absolute w-[90%] bg-[#ffffff93] bottom-20 p-4 left-[5%] border-l-4 border-l-red-700">
                                <h1 class="font-bold text-3xl">Deneme manşet 4</h1>
                            </div>
                            <img src="https://cdn.karar.com/news/1528612.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination swp-horizontal bg-[#d10912]"></div>
            </div>
            <!-- Küçük Slider-->
            <!-- Slider altı card -->
            <div class=" flex flex-col flex-wrap lg:flex-row justify-between gap-4">
                <!-- card -->
                <a href="">
                    <div class="w-full lg:w-[300px] border h-max flex flex-row bg-white">
                        <img src="https://cdn.karar.com/news/1529015.jpg" alt="" class="w-[150px]">
                        <div class="absolute bg-red-700 p-[2px] text-white">Güncel</div>
                        <span class="short-text-2 p-2 h-14">Eskişehir Büyükşehir'den afet bölgesini 81 tır yardımı
                gönderildi.</span>
                    </div>
                </a>
                <a href="">
                    <div class="w-full lg:w-[300px] border h-max flex flex-row bg-white">
                        <img src="https://cdn.karar.com/news/1529015.jpg" alt="" class="w-[150px]">
                        <div class="absolute bg-red-700 p-[2px] text-white">Güncel</div>
                        <span class="short-text-2 p-2 h-14">Eskişehir Büyükşehir'den afet bölgesini 81 tır yardımı
                gönderildi.</span>
                    </div>
                </a>
                <a href="">
                    <div class="w-full lg:w-[300px] border h-max flex flex-row bg-white">
                        <img src="https://cdn.karar.com/news/1529015.jpg" alt="" class="w-[150px]">
                        <div class="absolute bg-red-700 p-[2px] text-white">Güncel</div>
                        <span class="short-text-2 p-2 h-14">Eskişehir Büyükşehir'den afet bölgesini 81 tır yardımı
                gönderildi.</span>
                    </div>
                </a>
                <a href="">
                    <div class="w-full lg:w-[300px] border h-max flex flex-row bg-white">
                        <img src="https://cdn.karar.com/news/1529015.jpg" alt="" class="w-[150px]">
                        <div class="absolute bg-red-700 p-[2px] text-white">Güncel</div>
                        <span class="short-text-2 p-2 h-14">Eskişehir Büyükşehir'den afet bölgesini 81 tır yardımı
                gönderildi.</span>
                    </div>
                </a>
                <!-- card -->
            </div>
            <!-- Slider altı card -->
        </div>
        <!-- Left -->
        <!-- Right -->
        <div class="hidden lg:block w-[30%] h-7">
            <a href="">
                <div class="relative box-border mb-4">
                    <div class="absolute w-[100%] bottom-0 bg-[linear-gradient(0deg,#000,transparent);]">
                        <h2 class="text-white font-bold p-2 text-lg">Son dakika! Taksim saldırısında yeni gelişme:</h2>
                    </div>
                    <img src="https://cdn.karar.com/news/1529192.jpg" alt="">
                </div>
            </a>
            <a href="">
                <div class="relative box-border mb-4">
                    <div class="absolute w-[100%] bottom-0 bg-[linear-gradient(0deg,#000,transparent);]">
                        <h2 class="text-white font-bold p-2 text-lg">Son dakika! Taksim saldırısında yeni gelişme:</h2>
                    </div>
                    <img src="https://cdn.karar.com/news/1529192.jpg" alt="">
                </div>
            </a>
            <a href="">
                <div class="relative box-border mb-4">
                    <div class="absolute w-[100%] bottom-0 bg-[linear-gradient(0deg,#000,transparent);]">
                        <h2 class="text-white font-bold p-2 text-lg">Son dakika! Taksim saldırısında yeni gelişme:</h2>
                    </div>
                    <img src="https://cdn.karar.com/news/1529192.jpg" alt="">
                </div>
            </a>
            <a href="">
                <div class="relative box-border mb-4">
                    <div class="absolute w-[100%] bottom-0 bg-[linear-gradient(0deg,#000,transparent);]">
                        <h2 class="text-white font-bold p-2 text-lg">Son dakika! Taksim saldırısında yeni gelişme:</h2>
                    </div>
                    <img src="https://cdn.karar.com/news/1529192.jpg" alt="">
                </div>
            </a>
        </div>
        <!-- Right -->
    </div>
</div>


<!-- Comments section  -->
<!-- Comments section  -->
<div class="container m-auto w-[96%] lg:max-w-[1098px] my-8 flex flex-row flex-wrap justify-center">
    <h1
        class="flex justify-start text-center text-5xl font-extrabold w-full mx-4 md:mx-32 my-4"
    >
        GÖRÜŞLER
        <span class="bg-black ml-10 w-[780px] h-10 items-center mt-1"></span>
    </h1>


    <div class="max-w-xs rounded overflow-hidden shadow-lg m-4">
        <img
            class="w-full h-48 object-cover"
            src="https://cdn.karar.com/news/1529142.jpg"
            alt="Nature"
        />
        <div class="px-6 py-4">
            <div class="font-semibold text-lg mb-2">
                Lionel Trilling ve ahlaki gerçekçilik
            </div>
            <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non
                risus.
            </p>
        </div>
    </div>

    <div class="max-w-xs rounded overflow-hidden shadow-lg m-4">
        <img
            class="w-full h-48 object-cover"
            src="https://cdn.karar.com/news/1528850.jpg"
            alt="Travel"
        />
        <div class="px-6 py-4">
            <div class="font-semibold text-lg mb-2">Boş vere vere ...</div>
            <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non
                risus.
            </p>
        </div>
    </div>

    <div class="max-w-xs rounded overflow-hidden shadow-lg m-4">
        <img
            class="w-full h-48 object-cover"
            src="https://cdn.karar.com/news/1528273.jpg"
            alt="Food"
        />
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">
                Medreseden üniversiteye ne değişti?
            </div>
            <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non
                risus.
            </p>
        </div>
    </div>

</div>
<!-- Video section  -->
<div class="container m-auto w-[96%] lg:max-w-[1098px] my-8">
    <div
        class="w-full h-14 bg-[#275ba6] px-4 flex flex-row justify-between items-center"
    >
        <div class="text-white">HABER SİTESİ TV</div>
        <ul class="flex-row gap-x-4 hidden lg:flex">
            <li class="text-white text-base font-semibold hover:underline">
                <a href="">GÜNDEM</a>
            </li>
            <li class="text-white text-base font-semibold hover:underline">
                <a href="">DİZİ</a>
            </li>
            <li class="text-white text-base font-semibold hover:underline">
                <a href="">SİNEMA</a>
            </li>
            <li class="text-white text-base font-semibold hover:underline">
                <a href="">KOMİK</a>
            </li>
            <li class="text-white text-base font-semibold hover:underline">
                <a href="">İLGİNÇ</a>
            </li>
            <li class="text-white text-base font-semibold hover:underline">
                <a href="">TEKNOLOJİ</a>
            </li>
            <li class="text-white text-base font-semibold hover:underline">
                <a href="">SPOR</a>
            </li>
            <li class="text-white text-base font-semibold hover:underline">
                <a href="">TÜM VİDEOLAR</a>
            </li>
        </ul>
        <span class="lg:hidden block text-white text-4xl">
          <BiMenu />
        </span>
    </div>
    <a href="">
        <div class="mt-4 flex flex-col justify-center items-center">
            <div
                class="absolute bg-[#413f3f98] p-8 rounded-full text-white text-6xl"
            >
                <i class="fa-solid fa-play"></i>
            </div>
            <img src="https://cdn.karar.com/news/1529144.jpg" alt="/" />
        </div>
    </a>

    <div
        class="w-full min-h-72 bg-black flex flex-row flex-wrap md:flex-nowrap justify-around px-4"
    >
        <div class="w-[45%] md:w-[23%]">
            <div class="flex flex-col justify-center items-center">
                <div
                    class="absolute bg-[#413f3f98] p-3 rounded-full text-white text-xl"
                >
                    <i class="fa-solid fa-play"></i>
                </div>
                <img src="https://cdn.karar.com/news/1529087.jpg" alt="" />
            </div>
            <div class="bg-red-600 p-2 text-white">7.5lik ikinci depremde</div>
            <p class="text-white text-xl mt-2">
                Depremde çocuklarını unutup kendilerini sokağa attılar!
            </p>
        </div>

        <div class="w-[45%] md:w-[23%]">
            <div class="flex flex-col justify-center items-center">
                <div
                    class="absolute bg-[#413f3f98] p-3 rounded-full text-white text-xl"
                >
                    <i class="fa-solid fa-play"></i>
                </div>
                <img src="https://cdn.karar.com/news/1529087.jpg" alt="" />
            </div>
            <div class="bg-red-600 p-2 text-white">7.5lik ikinci depremde</div>
            <p class="text-white text-xl mt-2">
                Depremde çocuklarını unutup kendilerini sokağa attılar!
            </p>
        </div>

        <div class="w-[45%] md:w-[23%]">
            <div class="flex flex-col justify-center items-center">
                <div
                    class="absolute bg-[#413f3f98] p-3 rounded-full text-white text-xl"
                >
                    <i class="fa-solid fa-play"></i>
                </div>
                <img src="https://cdn.karar.com/news/1529087.jpg" alt="" />
            </div>
            <div class="bg-red-600 p-2 text-white">7.5lik ikinci depremde</div>
            <p class="text-white text-xl mt-2">
                Depremde çocuklarını unutup kendilerini sokağa attılar!
            </p>
        </div>

        <div class="w-[45%] md:w-[23%]">
            <div class="flex flex-col justify-center items-center">
                <div
                    class="absolute bg-[#413f3f98] p-3 rounded-full text-white text-xl"
                >
                    <i class="fa-solid fa-play"></i>
                </div>
                <img src="https://cdn.karar.com/news/1529087.jpg" alt="" />
            </div>
            <div class="bg-red-600 p-2 text-white">7.5lik ikinci depremde</div>
            <p class="text-white text-xl mt-2">
                Depremde çocuklarını unutup kendilerini sokağa attılar!
            </p>
        </div>
    </div>
</div>

<!-- Box section  -->
<div class="flex justify-center w-full mx-4 md:mx-auto my-6">
    <div class="grid md:grid-cols-3 flex-rows-3 relative items-center gap-8">
        <div class="w-[340px] h-auto bg-white shadow-xl">
            <h1
                class="w-24 py-2 px-2 bg-red-600 text-center text-white font-extrabold mb-1 deg"
            >
                GÜNCEL
            </h1>
            <a href="">
                <img src="https://cdn.karar.com/news/1528912.jpg" alt="/" />
                <h3 class="py-4 px-2 text-xl font-bold short-text-2">
                    Bu bankaya borcu olanlar dikkat! Bu haber size: Borçlar ...
                </h3>
            </a>

            <ul
                class="grid grid-col-2 w-full relative my-2 px-2 h-full gap-2 pb-3"
            >
                <a href="">
                    <li class="text-sm font-medium py-2">
                        <img
                            class="w-[50%] h-auto float-left pr-2"
                            src="https://cdn.karar.com/news/1528910.jpg"
                        />
                        <span class="short-text-3 hover:text-red-700">
                  Sedat Peker sessizliğini bozdu! Canlı yayında depremzedelere
                  öyle...
                </span>
                    </li>
                </a>
                <a href="">
                    <li class="text-sm font-medium py-2">
                        <img
                            class="w-[50%] h-auto float-left pr-2"
                            src="https://cdn.karar.com/news/1528910.jpg"
                        />
                        <span class="short-text-3 hover:text-red-700">
                  Sedat Peker sessizliğini bozdu! Canlı yayında depremzedelere
                  öyle...
                </span>
                    </li>
                </a>
                <a href="">
                    <li class="text-sm font-medium py-2">
                        <img
                            class="w-[50%] h-auto float-left pr-2"
                            src="https://cdn.karar.com/news/1528910.jpg"
                        />
                        <span class="short-text-3 hover:text-red-700">
                  Sedat Peker sessizliğini bozdu! Canlı yayında depremzedelere
                  öyle...
                </span>
                    </li>
                </a>
                <a href="">
                    <li class="text-sm font-medium py-2">
                        <img
                            class="w-[50%] h-auto float-left pr-2"
                            src="https://cdn.karar.com/news/1528910.jpg"
                        />
                        <span class="short-text-3 hover:text-red-700">
                  Sedat Peker sessizliğini bozdu! Canlı yayında depremzedelere
                  öyle...
                </span>
                    </li>
                </a>
            </ul>
        </div>
        <div class="w-[340px] relative h-auto bg-white shadow-xl">
            <h1
                class="w-24 py-2 px-2 bg-red-600 text-center text-white font-extrabold mb-1 overflow-hidden"
            >
                EKONOMİ
            </h1>
            <a href="">
                <img src="https://cdn.karar.com/news/1529295.jpg" alt="/" />
                <h3 class="py-4 px-2 text-xl font-bold">
                    Depremzedeler için yeni nakit desteği başladı! Artık günlük ...
                </h3>
            </a>

            <ul
                class="grid grid-col-2 w-full relative my-2 px-2 h-full gap-2 pb-3"
            >
                <a href="">
                    <li class="text-sm font-medium py-2">
                        <img
                            class="w-[50%] h-auto float-left pr-2"
                            src="https://cdn.karar.com/news/1528910.jpg"
                        />
                        <span class="short-text-3 hover:text-red-700">
                  Sedat Peker sessizliğini bozdu! Canlı yayında depremzedelere
                  öyle...
                </span>
                    </li>
                </a>
                <a href="">
                    <li class="text-sm font-medium py-2">
                        <img
                            class="w-[50%] h-auto float-left pr-2"
                            src="https://cdn.karar.com/news/1528910.jpg"
                        />
                        <span class="short-text-3 hover:text-red-700">
                  Sedat Peker sessizliğini bozdu! Canlı yayında depremzedelere
                  öyle...
                </span>
                    </li>
                </a>
                <a href="">
                    <li class="text-sm font-medium py-2">
                        <img
                            class="w-[50%] h-auto float-left pr-2"
                            src="https://cdn.karar.com/news/1528910.jpg"
                        />
                        <span class="short-text-3 hover:text-red-700">
                  Sedat Peker sessizliğini bozdu! Canlı yayında depremzedelere
                  öyle...
                </span>
                    </li>
                </a>
                <a href="">
                    <li class="text-sm font-medium py-2">
                        <img
                            class="w-[50%] h-auto float-left pr-2"
                            src="https://cdn.karar.com/news/1528910.jpg"
                        />
                        <span class="short-text-3 hover:text-red-700">
                  Sedat Peker sessizliğini bozdu! Canlı yayında depremzedelere
                  öyle...
                </span>
                    </li>
                </a>
            </ul>
        </div>
        <div class="w-[340px] relative h-auto bg-white shadow-xl">
            <h1
                class="w-24 py-2 px2 bg-red-600 text-center text-white font-extrabold mb-1"
            >
                SPOR
            </h1>
            <a href="#">
                <img src="https://cdn.karar.com/news/1529263.jpg" alt="/" />
                <h3 class="py-4 px-2 text-xl font-bold">
                    Taner Savut'un cenaze töreninde annesinden yürek yakan sözler ...
                </h3>
            </a>
            <ul
                class="grid grid-col-2 w-full relative my-2 px-2 h-full gap-2 pb-3"
            >
                <a href="">
                    <li class="text-sm font-medium py-2">
                        <img
                            class="w-[50%] h-auto float-left pr-2"
                            src="https://cdn.karar.com/news/1528910.jpg"
                        />
                        <span class="short-text-3 hover:text-red-700">
                  Sedat Peker sessizliğini bozdu! Canlı yayında depremzedelere
                  öyle...
                </span>
                    </li>
                </a>
                <a href="">
                    <li class="text-sm font-medium py-2">
                        <img
                            class="w-[50%] h-auto float-left pr-2"
                            src="https://cdn.karar.com/news/1528910.jpg"
                        />
                        <span class="short-text-3 hover:text-red-700">
                  Sedat Peker sessizliğini bozdu! Canlı yayında depremzedelere
                  öyle...
                </span>
                    </li>
                </a>
                <a href="">
                    <li class="text-sm font-medium py-2">
                        <img
                            class="w-[50%] h-auto float-left pr-2"
                            src="https://cdn.karar.com/news/1528910.jpg"
                        />
                        <span class="short-text-3 hover:text-red-700">
                  Sedat Peker sessizliğini bozdu! Canlı yayında depremzedelere
                  öyle...
                </span>
                    </li>
                </a>
                <a href="">
                    <li class="text-sm font-medium py-2">
                        <img
                            class="w-[50%] h-auto float-left pr-2"
                            src="https://cdn.karar.com/news/1528910.jpg"
                        />
                        <span class="short-text-3 hover:text-red-700">
                  Sedat Peker sessizliğini bozdu! Canlı yayında depremzedelere
                  öyle...
                </span>
                    </li>
                </a>
            </ul>
        </div>
    </div>
</div>

<!-- Footer section  -->
<!-- Footer 2  -->
<div class="footer mt-12">
    <div class="py-2">
        <a href="#">
            <img
                class="w-[147px] h-[80px] md:mx-20 mt-10"
                src="https://anatolianhaber.fra1.digitaloceanspaces.com/2022/12/logo.jpg"
                alt=""
            />
        </a>
    </div>

    <div class="contain">
        <div class="col">
            <h1>İLETİŞİM</h1>
            <ul>
                <li>About</li>
                <li>Mission</li>
                <li>Services</li>
                <li>Social</li>
                <li>Get in touch</li>
            </ul>
        </div>
        <div class="col">
            <h1>KÜNYE</h1>
            <ul>
                <li>About</li>
                <li>Mission</li>
                <li>Services</li>
                <li>Social</li>
                <li>Get in touch</li>
            </ul>
        </div>
        <div class="col">
            <h1>KULLANIM ŞARTLARI</h1>
            <ul>
                <li>About</li>
                <li>Mission</li>
                <li>Services</li>
                <li>Social</li>
                <li>Get in touch</li>
            </ul>
        </div>
        <div class="col">
            <h1 class="">GİZLİLİK BİLDİRİMİ</h1>
            <ul>
                <li>Webmail</li>
                <li>Redeem code</li>
                <li>WHOIS lookup</li>
                <li>Site map</li>
                <li>Web templates</li>
                <li>Email templates</li>
            </ul>
        </div>
        <div class="col">
            <h1>VERİ POLİTİKASI</h1>
            <ul>
                <li>Contact us</li>
                <li>Web chat</li>
                <li>Open ticket</li>
            </ul>
        </div>
        <div class="col social">
            <ul class="text-4xl">
                <li><i class="fa-brands fa-facebook"></i></li>
                <li><i class="fa-brands fa-twitter"></i></li>
                <li><i class="fa-brands fa-youtube"></i></li>
                <li><i class="fa-brands fa-linkedin"></i></li>
                <li><i class="fa-brands fa-instagram"></i></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>


<script src="{{ asset('../frontend/assets/js/index.js') }}"></script>
</body>
</html>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".authorSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        slidesPerGroup: 1,
        freeMode: true,
        breakpoints: {
            768: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            }
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>
<script>


    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + "</span>";
            },
        },
    });
    document.querySelector('.swiper-pagination-bullet').hover(function () {
        document.querySelector(this).trigger("click");
    });
</script>
