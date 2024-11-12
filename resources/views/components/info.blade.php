<div class="fixed bottom-10 right-14 hidden lg:block">
    <a href="#" class="relative flex items-center justify-center flex-col group transition-all duration-300">
        {{-- Hover Text --}}
        <p
            class="opacity-0 group-hover:opacity-100 text-white font-semibold text-sm py-4 px-6 mb-2 border-2 border-darker-blue group-hover:border-[#01db0f] rounded-xl absolute -top-16 shadow-lg bg-darker-blue group-hover:bg-[#01db0f] text-center transition-all duration-300 ease-out transform translate-y-8 group-hover:-translate-y-7 z-40">
            Order sekarang!
        </p>

        {{-- Button Whatsapp with shockwave effect --}}
        <div class="relative flex items-center justify-center">
            <img src="{{ asset('images/logo/whatsapp.png') }}" alt=""
                class="w-24 p-5 bg-darker-blue rounded-full group-hover:bg-[#01db0f] transition-all duration-400 ease-in z-50 relative">
            <!-- Centered shockwave circles -->
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-24 h-24 rounded-full animate-shockwave bg-darker-blue group-hover:bg-[#01db0f] opacity-30 transition-all duration-100"></div>
            </div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-24 h-24 rounded-full animate-shockwave2 bg-darker-blue group-hover:bg-[#01db0f] opacity-30 delay-500 transition-all duration-100"></div>
            </div>
        </div>
        
    </a>
</div>
