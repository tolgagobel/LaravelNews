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
                @foreach($categorys as $category)
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

<div class="container m-auto max-w-[1098px]">
    <h1 class="text-3xl font-bold mb-8 mt-14">
        {{ $product->product_name }}
    </h1>
    <a rel="noopener noreferrer" href="#"
       class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
        <img role="presentation" class=" mix-blend-hard-light dark:bg-gray-500 mb-8"
             src="{{ asset('/backend/images/' . $product->product->product_img) }}">
        <p class="mb-8">
            {!! $product->description !!}</p>
        <div class="flex flex-row justify-between">
        </div></a>
</div>
<div class="text-lg font-bold text-gray-100"></div>
<div class="flex items-center space-x-5 text-gray-100">
</div>
</div>
</div>
<button
    class="block uppercase mx-auto shadow bg-red-800 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-10 rounded">ÖNE
    ÇIKANLAR</button>
<div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
    <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <a rel="noopener noreferrer" href="#"
           class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                 src="https://cdn.karar.com/news/1529537.jpg">
            <div class="p-6 space-y-2">
                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Bu ilacı ağzınıza bile
                    sürmeyin! Demans hastalığına yol açıyor: İlaç dolabınızı hemen kontrol edin</h3>


            </div>
        </a>
        <a rel="noopener noreferrer" href="#"
           class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                 src="https://cdn.karar.com/news/1529538.jpg">
            <div class="p-6 space-y-2">
                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Ev almak isteyenlere müjde!
                    Tarihin en düşük faiz kampanyalarından biri geliyor: Şimdi al 15 yılda öde!</h3>


            </div>
        </a>
        <a rel="noopener noreferrer" href="#"
           class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">


        </a>
        <a rel="noopener noreferrer" href="#"
           class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">
            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                 src="https://cdn.karar.com/news/1529536.jpg">
            <div class="p-6 space-y-2">
                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Doğal gaz ve elektrik
                    faturasında o parayı sakın ödemeyin! Resmi olarak duyuruldu: Artık ücretsiz</h3>

            </div>
        </a>
        <a rel="noopener noreferrer" href="#"
           class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">
            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                 src="https://cdn.karar.com/news/1529534.jpg">
            <div class="p-6 space-y-2">
                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Normale dönüş haftasında
                    zirveyi o dizi kaptı! Ekranlara dönüşü muhteşem oldu!</h3>


            </div>
        </a>
        <a rel="noopener noreferrer" href="#"
           class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">

        </a>
        <a rel="noopener noreferrer" href="#"
           class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">
            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                 src="https://cdn.karar.com/news/1529535.jpg">
            <div class="p-6 space-y-2">
                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">İş arayanlar dikkat! O illerde
                    100 bin kişi işe alınacak: Firmalar tek tek sıraya girdi!</h3>


            </div>
        </a>
        <a rel="noopener noreferrer" href="#"
           class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">
            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                 src="https://cdn.karar.com/news/1527500.jpg">
            <div class="p-6 space-y-2">
                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Tuvalet kağıdında hem ucuzluk
                    hem de kalite arayana müjde! 100 TL'den 45 TL'ye düştü! Hem de en iyi marka</h3>

            </div>
        </a>
        <a rel="noopener noreferrer" href="#"
           class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">

        </a>
    </div>
</div>
<button
    class="block uppercase mx-auto shadow bg-red-800 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-10 rounded">İLGİNİZİ
    ÇEKEBİLİR</button>
<div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
    <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <a rel="noopener noreferrer" href="#"
           class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                 src="https://s-img.idealmedia.io/n/10383844/492x277/123x0x1083x609/aHR0cDovL2ltZ2hvc3RzLmNvbS90LzIwMjMtMDIvNDI3MjMzL2Y5MTk4ZTc1Y2ExMWU4ZmI2MGE3YzZhNGYwNjRlNzljLmpwZWc.webp?v=1677321050-4iVRqvysnqAcgitO8c2nm9umSWtzB39lfb-humPOuGM">
            <div class="p-6 space-y-2">
                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Emekliye Müjde!</h3>

            </div>
        </a>
        <a rel="noopener noreferrer" href="#"
           class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                 src="https://s-img.idealmedia.io/n/10383850/492x277/128x0x663x373/aHR0cDovL2ltZ2hvc3RzLmNvbS90LzIwMjMtMDIvNDI3MjMzLzEyYTA0YmMxZDExZmZhY2ZlNTc1ZjJlZGQ0MDJlOGQzLnBuZw.webp?v=1677321050-IkE6ZYb_DB1LJIJofY0LJZ6zoFT23yaxr6CJgfGdEyQ">
            <div class="p-6 space-y-2">
                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Ünlü sanatçıdan şok sözler!
                </h3>

            </div>
        </a>
        <a rel="noopener noreferrer" href="#"
           class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                 src="https://s-img.idealmedia.io/n/10388168/492x277/69x0x599x337/aHR0cDovL2ltZ2hvc3RzLmNvbS90LzIwMjMtMDIvNzU1NTE3LzljNTExMGI1MTVlNmIzZGFhMmU4MzkxNjlhMzAzMzRlLmpwZWc.webp?v=1677321050-GyEYIwG1A8gIG081JW3_I1A-OhJxJO5uecZ2Y1GckYc">
            <div class="p-6 space-y-2">
                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Eski Millletvekili evinde ökü
                    bulundu!</h3>

            </div>
        </a>
        <a rel="noopener noreferrer" href="#"
           class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">
            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                 src="https://s-img.idealmedia.io/n/10378843/492x277/240x0x1624x914/aHR0cDovL2ltZ2hvc3RzLmNvbS90LzIwMjMtMDIvNzU4ODQ4LzU2MzFmMmMyODg5Njk5YWQ2OTUzN2Q5OGRhMjUzMWY3LmpwZWc.webp?v=1677321050-4plPshYFhHFV7_qSU5pRGxC7Ypr8kYHO0Hq8-2EmFlg">
            <div class="p-6 space-y-2">
                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Kemal Kılıçdaroğlu'nun maaşı
                    kaç TL?</h3>

            </div>
        </a>
        <a rel="noopener noreferrer" href="#"
           class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">
            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                 src="https://s-img.idealmedia.io/n/10385318/492x277/0x0x527x296/aHR0cDovL2ltZ2hvc3RzLmNvbS90LzIwMjMtMDIvNzY5NDQ4L2NjNTBkNzQ1YzNhMjgzYWFhYmU5ZmY0NzI4ZGNiM2Q5LmpwZWc.webp?v=1677321050-XGyLXr0uVLgMWiiILMNgPLVlxbYtanVFaog7WhqhJSo">
            <div class="p-6 space-y-2">
                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Ünlü sanatçı Burcu Biricik'ten
                    üzen haber.</h3>

            </div>
        </a>
        <a rel="noopener noreferrer" href="#"
           class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">
            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                 src="https://s-img.idealmedia.io/n/10384089/492x277/68x0x864x486/aHR0cDovL2ltZ2hvc3RzLmNvbS90LzIwMjMtMDIvNzUyNzA1L2ZiMjQxOTk3OWE3ZWEzNjM5YjViMGY3MTY0MjE1MmRhLnBuZw.webp?v=1677321050-nNBd4SsCG9ho9I_1Z1b1jjSLl6uKt2YAtZxrvZfbvHk">
            <div class="p-6 space-y-2">
                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Fatih Altaylı Kendisine 'Sen
                    Kimin Çocuğusun?'</h3>

            </div>
        </a>
    </div>
</div>

<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">

        <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
            <form action="" class="space-y-4">
                <div>
                    <label class="sr-only" for="name">Ad Soyad</label>
                    <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Ad Soyad" type="text"
                           id="first name" />
                </div>

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">



                </div>


                <div>
                    <label class="sr-only" for="message">Yorumunuzu Yazın</label>

                    <textarea class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Yorumunuzu Yazın" rows="8"
                              id="message"></textarea>
                </div>

                <div class="mt-4">
                    <button type="submit"
                            class="inline-block w-full rounded-lg bg-red-800 px-5 py-3 font-medium text-white sm:w-auto">
                        Yorumu Gönder
                    </button>
                    <div class="mx-auto sm:grid-cols-2">
                        <p>UYARI: Hakaret, küfür, rencide edici cümleler veya imalar, inançlara saldırı içeren, imla kuralları ile
                            yazılmamış, Türkçe karakter kullanılmayan ve büyük harflerle yazılmış yorumlar onaylanmamaktadır. (!)
                            işaretine tıklayarak yorumla ilgili şikayetinizi editöre bildirebilirsiniz.</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- Footer 2  -->
<!-- FOOTER START -->
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
<!-- END OF FOOTER -->
<!-- END OF FOOTER -->
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
