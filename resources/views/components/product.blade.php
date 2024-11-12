<div id="product" class="h-full w-full bg-c-white font-inter">
    <div class="py-40 px-5 w-full h-full">
        {{-- Introduction Product --}}
        <div class="w-[100%] h-[100%]">
            <h1 class="jdl text-pink-cream text-5xl font-extrabold text-center lg:text-6xl">PRODUK KAMI</h1>
            <p
                class="jdl text-darker-blue text-justify text-xs leading-5 mt-10 w-[85%] mx-auto lg:w-[70%] lg:text-lg xl:text-xl">
                Di Dewata Goods, kami menawarkan pilihan produk yang sangat beragam, sehingga Anda dapat menemukan
                berbagai kebutuhan rumah tangga sesuai selera dan gaya Anda. Selain itu, kami berkomitmen untuk
                memberikan harga yang terjangkau, memungkinkan Anda mendapatkan produk berkualitas tanpa harus
                mengeluarkan biaya yang besar. Kami percaya bahwa setiap rumah layak mendapatkan sentuhan istimewa tanpa
                perlu mengorbankan biaya yang besar</p>
        </div>

        {{-- Product Section --}}
        <div class="flex flex-col py-10 px-5 gap-10 lg:px-40 xl">
            <div>
                <div class="kategori flex align-middle justify-start text-darker-blue items-center">
                    <span
                        class="material-symbols-outlined text-3xl bg-pink-cream rounded-full py-2 px-[8.5px] mr-3 text-c-white flex justify-center items-center">skillet</span>
                    <h1 class="text-3xl font-semibold">Peralatan Dapur</h1>
                </div>
                <x-dapur></x-dapur>
            </div>
            <div>
                <div class="kategori flex align-middle justify-start text-darker-blue items-center">
                    <span
                        class="material-symbols-outlined text-3xl bg-pink-cream rounded-full py-2 px-[8.5px] mr-3 text-c-white flex justify-center items-center">cleaning_services</span>
                    <h1 class="text-3xl font-semibold">Peralatan Kebersihan</h1>
                </div>
                <x-kebersihan></x-kebersihan>
            </div>
            <div>
                <div class="kategori flex align-middle justify-start text-darker-blue items-center">
                    <span
                        class="material-symbols-outlined text-3xl bg-pink-cream rounded-full py-2 px-[8.5px] mr-3 text-c-white flex justify-center items-center">restaurant</span>
                    <h1 class="text-3xl font-semibold">Alat Makan & Minum</h1>
                </div>
                <x-makanminum></x-makanminum>
            </div>
        </div>
    </div>
</div>
