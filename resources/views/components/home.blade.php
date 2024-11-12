<style>
    #slider {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    #slider img {
        flex: 0 0 100%;
    }
</style>
<div id='home' class="h-homeh flex flex-col justify-center lg:flex-row overflow-x-hidden">
    {{-- Left Content / Top --}}
    <div class=" w-full lg:w-[50%] z-40 p-10 lg:my-auto xl:ml-10">
        {{-- Opening Text --}}
        <h1 class="judul text-6xl leading-none font-bold text-dark-blue md:text-7xl lg:text-8xl xl:text-9xl">Temukan
            Seluruh</h1>
        <h1 class="judul text-6xl leading-none  font-bold text-dark-blue md:text-7xl lg:text-8xl xl:text-9xl"><span
                class="text-pink-cream text-7xl md:text-8xl lg:text-9xl">Kebutuhan Rumah</span> Anda!</h1>
        <p class="judul text-xl text-calm-blue mt-4 lg:text-3xl">Pusat Katalog Perabotan Rumah Tangga Terlengkap!</p>
    </div>
    {{-- Right Content / Bottom --}}
    <div class="flex flex-col-reverse lg:flex-col lg:my-auto lg:max-w-[50%] xl:my-auto">
        {{-- Image Preview Product --}}
        <div
            class="cover container lg:max-w-[100%] lg:max-h-[60%] mx-auto mt-10 xl:mt-0 relative overflow-hidden md:max-h-100 sm:rounded-lg lg:rounded-l-3xl lg:rounded-r-none">
            <div id="slider" class="flex transition-transform duration-500 ease-in-out">
                <img src="{{ asset('images/dashboard/1.jpg') }}" alt=""
                    class="w-full h-full object-cover flex-shrink-0 md:aspect-video lg:aspect-[1/1] xl:aspect-[11/8]">
                <img src="{{ asset('images/dashboard/2.jpg') }}" alt=""
                    class="w-full h-full object-cover flex-shrink-0 md:aspect-video lg:aspect-[1/1] xl:aspect-[11/8]">
                <img src="{{ asset('images/dashboard/3.jpg') }}" alt=""
                    class="w-full h-full object-cover flex-shrink-0 md:aspect-video lg:aspect-[1/1] xl:aspect-[11/8]">
                <img src="{{ asset('images/dashboard/4.jpg') }}" alt=""
                    class="w-full h-full object-cover flex-shrink-0 md:aspect-video lg:aspect-[1/1] xl:aspect-[11/8]">
                <img src="{{ asset('images/dashboard/5.jpg') }}" alt=""
                    class="w-full h-full object-cover flex-shrink-0 md:aspect-video lg:aspect-[1/1] xl:aspect-[11/8]">
                <img src="{{ asset('images/dashboard/6.jpg') }}" alt=""
                    class="w-full h-full object-cover flex-shrink-0 md:aspect-video lg:aspect-[1/1] xl:aspect-[11/8]">

                <img src="{{ asset('images/dashboard/1.jpg') }}" alt=""
                    class="w-full h-full object-cover flex-shrink-0 md:aspect-video lg:aspect-[1/1] xl:aspect-[11/8]">
            </div>
        </div>

        {{-- Button Go To Product --}}
        <div class="btn-produk mx-auto lg:mt-5 xl:block xl:mt-10">
            <a href="#product"
                class="p-4 px-7 text-xs font-semibold border-2 border-dark-blue text-dark-blue bg-c-white rounded-full hover:bg-calm-blue hover:text-c-white ease-in-out duration-300 shadow-lg text-center flex items-center lg:text-xl ">SEE
                PRODUCT <i class='ml-2 bx bx-chevron-down text-xl lg:text3-xl z-[70]'></i></a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('slider');
            const slides = slider.children;
            let currentSlide = 0;
            const totalSlides = slides.length - 1; // Subtract 1 because of the duplicated first slide

            function nextSlide() {
                currentSlide++;
                updateSlider();
            }

            function updateSlider() {
                slider.style.transition = 'transform 0.5s ease-in-out';
                slider.style.transform = `translateX(-${currentSlide * 100}%)`;

                // If we've moved past the last slide, reset to first slide without transition
                if (currentSlide === totalSlides) {
                    setTimeout(() => {
                        slider.style.transition = 'none';
                        currentSlide = 0;
                        slider.style.transform = `translateX(0)`;
                    }, 500); // This should match the transition duration
                }
            }

            // Change slide every 3 seconds
            setInterval(nextSlide, 3000);
        });
    </script>

</div>
