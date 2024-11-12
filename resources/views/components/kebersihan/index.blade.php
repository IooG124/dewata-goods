@php
    // Database Peralatan Kebersihan
    $bersih = [
        [
            // 1
            'gmbr' => 'images/produk/kebersihan/1.png',
            'title' => 'Sapu Ijuk',
            'harga' => 'Rp. 20.000',
            'desc' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ],
        [
            // 2
            'gmbr' => 'images/produk/kebersihan/2.png',
            'title' => 'Pel Lantai',
            'harga' => 'Rp. 50.000',
            'desc' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ],
        [
            // 3
            'gmbr' => 'images/produk/kebersihan/3.png',
            'title' => 'Gayung',
            'harga' => 'Rp. 30.000',
            'desc' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ],
        [
            // 4
            'gmbr' => 'images/produk/kebersihan/4.png',
            'title' => 'Lap Microfiber',
            'harga' => 'Rp. 15.000',
            'desc' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ],
        [
            // 5
            'gmbr' => 'images/produk/kebersihan/5.png',
            'title' => 'Ember',
            'harga' => 'Rp. 15.000',
            'desc' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ],
        [
            // 6
            'gmbr' => 'images/produk/kebersihan/6.png',
            'title' => 'Sabun Pembersih Lantai',
            'harga' => 'Rp. 47.000',
            'desc' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ],
        [
            // 7
            'gmbr' => 'images/produk/kebersihan/7.png',
            'title' => 'Sikat WC',
            'harga' => 'Rp. 24.000',
            'desc' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ],
        [
            // 8
            'gmbr' => 'images/produk/kebersihan/8.png',
            'title' => 'Pembersih Kaca',
            'harga' => 'Rp. 25.000',
            'desc' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ],
        [
            // 9
            'gmbr' => 'images/produk/kebersihan/9.png',
            'title' => 'Tempat Sampah',
            'harga' => 'Rp. 16.000',
            'desc' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ],
        [
            // 10
            'gmbr' => 'images/produk/kebersihan/10.png',
            'title' => 'Sapu Lidi',
            'harga' => 'Rp. 15.000',
            'desc' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ],
    ];
@endphp

{{-- Main Container --}}
<div id="mySwiper2"
    class="mySwiper2 scroller relative w-full max-w-7xl xl:max-w-full mx-auto overflow-hidden px-5 mt-5 py-5 rounded-xl border-solid ">
    {{-- Wrapper --}}
    <div class="swiper-wrapper flex transition-transform duration-300 ease-in-out">
        {{-- Cards --}}
        @foreach ($bersih as $bersih)
            <div class="cards2 swiper-slide w-full  flex-shrink-0 px-2 flex flex-col">
                <div
                    class="bg-c-white rounded-3xl flex flex-col justify-center items-center border border-darker-blue shadow-inner p-4 h-100 md:flex-col xl:flex-col lg:flex-row md:justify-around truncate">
                    <div
                        class="w-full sm:max-w-[70%]  md:w-[50%] xl:max-w-full lg:h-56 lg:w-56 xl:h-56 xl:w-56  bg-c-white mb-4 aspect-square">
                        <img src="{{ asset($bersih['gmbr']) }}" alt="Bersih 1"
                            class="w-full sm:max-w-[100%]  md:w-full xl:max-w-full lg:h-56 lg:w-56 xl:w-56 xl:h-56 object-cover aspect-square">
                    </div>
                    <div class="text-center ">
                        <h1
                            class=" font-semibold text-xs  text-ellipsis  w-[90%] whitespace-nowrap sm:w-100  sm:text-base md:text-lg lg:text-xl">
                            {{ $bersih['title'] }}</h1>
                        <h2 class="text-gray-600 mt-2 text-xs sm:text-sm md:text-base lg:text-lg">{{ $bersih['harga'] }}
                        </h2>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{-- Navigation Button --}}
    <button id="prevBtn2"
        class="prevBtn2 absolute left-1 top-1/2 transform -translate-y-1/2 bg-darker-blue text-c-white  p-2 rounded-full shadow-md z-20 lg:scale-125 xl:scale lg:left-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </button>
    <button id="nextBtn2"
        class=" extBtn2 absolute right-1 top-1/2 transform -translate-y-1/2 bg-darker-blue text-c-white  p-2 rounded-full shadow-md z-20 lg:scale-125 lg:right-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>
</div>

{{-- Js For Swipper --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    const swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        navigation: {
            nextEl: "#nextBtn2",
            prevEl: "#prevBtn2",
        },

        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            425: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            1280: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            1440: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
        }
    });
</script>
