<div class="sticky top-0 flex flex-row justify-between align-middle px-10 lg:px-20 shadow-lg w-full bg-c-white z-[100]">
    <div class="my-auto flex flex-row justify-center h-[83px] items-center">
        <img src="{{ asset('images/logo/logopink.png') }}" alt="" class="w-16 h-16 lg:w-[4.5rem] lg:h-[4.5rem]">
        <h1 class=" block text-3xl font-extrabold text-pink-cream px-3 font-alegreya italic my-auto lg:text-4xl">DEWATA
            GOODS</h1>
    </div>
    <div class="align-items-center my-auto hidden lg:block">
        <x-nav-link href="#">HOME</x-nav-link>
        <x-nav-link href="#about">ABOUT</x-nav-link>
        <x-nav-link href="#product">PRODUCT</x-nav-link>
        <x-nav-link href="#contact">CONTACT</x-nav-link>
    </div>

    {{-- Hamburger --}}
    <div class="lg:hidden flex items-center">
        <button id="hamburger"
            class="text-calm-blue hover:text-pink-cream focus:outline-none transition-all ease-linear duration-300">
            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>
</div>

{{-- Mobile Menu --}}
<div id="mobile-menu"
    class="fixed top-0 left-0 w-full bg-white shadow-lg transform -translate-y-full transition-transform duration-300 ease-in-out z-[60] lg:hidden rounded-xl">
    <div class="pt-28 pb-4">
        <x-nav-link href="#" class="block py-4 px-6 text-sm hover:bg-gray-200 mobile-link">HOME</x-nav-link>
        <x-nav-link href="#about" class="block py-4 px-6 text-sm hover:bg-gray-200 mobile-link">ABOUT</x-nav-link>
        <x-nav-link href="#product" class="block py-4 px-6 text-sm hover:bg-gray-200 mobile-link">PRODUCT</x-nav-link>
        <x-nav-link href="#contact" class="block py-4 px-6 text-sm hover:bg-gray-200 mobile-link">CONTACT</x-nav-link>
    </div>
</div>

{{-- Overlay --}}
<div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden lg:hidden"></div>


<script>
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('overlay');
    const mobileLinks = document.querySelectorAll('.mobile-link');
    let isMenuOpen = false;

    // When Hamburger is Clicked
    function toggleMenu() {
        isMenuOpen = !isMenuOpen;
        if (isMenuOpen) {
            mobileMenu.classList.remove('-translate-y-full');
            hamburger.classList.add('text-pink-cream');
            overlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        } else {
            mobileMenu.classList.add('-translate-y-full');
            hamburger.classList.remove('text-pink-cream');
            overlay.classList.add('hidden');
            document.body.style.overflow = '';
        }
    }

    hamburger.addEventListener('click', toggleMenu);
    overlay.addEventListener('click', toggleMenu);

    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (isMenuOpen) {
                toggleMenu();
            }
        });
    });
</script>
