@php
    // Database Peralatan Makan & Minum
    $mkn = ([
        [
            // 1
        "gmbr" => "images/produk/alatMakanMinum/1.png",
        "title"=> "Piring Kayu ",
        "harga"=> "Rp. 40.000",
        "desc"=> "lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum."
        ],
        [
            // 2
        "gmbr" => "images/produk/alatMakanMinum/2.png",
        "title"=> "Gelas Kaca",
        "harga"=> "Rp. 20.000",
        "desc"=> "lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum."
        ],
        [
            // 3
        "gmbr" => "images/produk/alatMakanMinum/3.png",
        "title"=> "Mangkok",
        "harga"=> "Rp. 35.000",
        "desc"=> "lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum."
        ],
        [
            // 4
        "gmbr" => "images/produk/alatMakanMinum/4.png",
        "title"=> "Sendok dan Garpu",
        "harga"=> "Rp. 15.000",
        "desc"=> "lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum."
        ],
        [
            // 5
        "gmbr" => "images/produk/alatMakanMinum/5.png",
        "title"=> "Sumpit Stainless Steel",
        "harga"=> "Rp. 27.500",
        "desc"=> "lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum."
        ],
        [
            // 6
        "gmbr" => "images/produk/alatMakanMinum/6.png",
        "title"=> "Botol Minum Stainless",
        "harga"=> "Rp. 50.000",
        "desc"=> "lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum."
        ],
        [
            // 7
        "gmbr" => "images/produk/alatMakanMinum/7.png",
        "title"=> "Teko Air",
        "harga"=> "Rp. 90.000",
        "desc"=> "lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum."
        ],
        [
            // 8
        "gmbr" => "images/produk/alatMakanMinum/8.png",
        "title"=> "Mug Kopi",
        "harga"=> "Rp. 35.000",
        "desc"=> "lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum."
        ],
        [
            // 9
        "gmbr" => "images/produk/alatMakanMinum/9.png",
        "title"=> "Kotak Makan",
        "harga"=> "Rp. 28.000",
        "desc"=> "lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum."
        ],
        [
            // 10
        "gmbr" => "images/produk/alatMakanMinum/10.png",
        "title"=> "Toples Makanan",
        "harga"=> "Rp. 26.500",
        "desc"=> "lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum."
        ],
    ])
@endphp

{{-- Main Container --}}
<div id="mySwiper3" class="scroller mySwiper3 relative w-full max-w-7xl xl:max-w-full mx-auto overflow-hidden px-5 mt-5 py-5 rounded-xl border-solid ">
    {{-- Wrapper --}}
      <div class="swiper-wrapper flex transition-transform duration-300 ease-in-out">
        {{-- Cards --}}
        @foreach ( $mkn as $mkn )
            <div class="cards3 swiper-slide w-full  flex-shrink-0 px-2 flex flex-col">
                <div class="bg-c-white rounded-3xl flex flex-col justify-center items-center border border-darker-blue shadow-inner p-4 h-100 md:flex-col xl:flex-col lg:flex-row md:justify-around truncate">
                    <div class="w-full sm:max-w-[70%]  md:w-[50%] xl:max-w-full lg:h-56 lg:w-56 xl:h-56 xl:w-56  bg-c-white mb-4 aspect-square">
                        <img src="{{ asset($mkn['gmbr']) }}" alt="Bersih 1" class="w-full sm:max-w-[100%]  md:w-full xl:max-w-full lg:h-56 lg:w-56 xl:w-56 xl:h-56 object-cover aspect-square">
                    </div>
                    <div class="text-center ">
                        <h1 class=" font-semibold text-xs text-ellipsis  w-[90%] sm:w-100 sm:text-base md:text-lg lg:text-xl">{{ $mkn['title'] }}</h1>
                        <h2 class="text-gray-600 mt-2 text-xs sm:text-sm md:text-base lg:text-lg">{{ $mkn['harga'] }}</h2>
                    </div>
                </div>
            </div>
        @endforeach
      </div>
      {{-- Navigation Buttons --}}
      <button id="prevBtn3" class="prevBtn3 absolute left-1 top-1/2 transform -translate-y-1/2 bg-darker-blue text-c-white  p-2 rounded-full shadow-md z-20 lg:scale-125 xl:scale lg:left-3">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
      </button>
      <button id="nextBtn3" class=" nextBtn3 absolute right-1 top-1/2 transform -translate-y-1/2 bg-darker-blue text-c-white  p-2 rounded-full shadow-md z-20 lg:scale-125 lg:right-3">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
      </button>
</div>
  
{{-- Js For Swipper --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    const swiper3 = new Swiper(".mySwiper3", {
    loop: true,
      navigation: {
        nextEl: "#nextBtn3",
        prevEl: "#prevBtn3",
      },

      breakpoints: {
        320:{
            slidesPerView: 1,
            spaceBetween: 10,
        },
        425:{
            slidesPerView: 2,
            spaceBetween: 10,
        },
        768:{
            slidesPerView: 2,
            spaceBetween: 10,
        },
        1024:{
            slidesPerView: 2,
            spaceBetween: 10,
        },
        1280:{
            slidesPerView: 3,
            spaceBetween: 10,
        },
        1440:{
            slidesPerView: 4,
            spaceBetween: 10,
        },
      }
    });
</script>
