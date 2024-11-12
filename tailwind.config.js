import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                inter: ['Inter'],
                josefin: ['Josefin Sans'],
                alegreya: ['Alegreya'],
            },
            colors:{
                'cream': '#fdc094',
                'pink-cream': '#ff9190',
                'calm-blue': '#5e72eb',
                'dark-blue': '#120c6e',
                'darker-blue': '#0b0742',
                'c-white': '#FEFBF6',
            },
            height: {
                'homeh': 'calc(100vh - 7rem)',
              },
            boxShadow: {
                'inset-custom': 'inset 0 0 10px rgba(0, 0, 0, 0.3)',
            },
            animation: {
                shockwave: 'shockwave 1.5s ease-out infinite',
                shockwave2: 'shockwave 1.5s ease-out infinite',
              },
            keyframes: {
                shockwave: {
                  '0%': { transform: 'scale(1)', opacity: '0.2' },
                  '50%': { opacity: '0.1' },
                  '100%': { transform: ' scale(1.8)', opacity: '0' },
                },
                shockwave2: {
                    '0%': { transform: 'scale(1)', opacity: '0.2' },
                    '50%': { opacity: '0.1' },
                    '100%': { transform: ' scale(1.8)', opacity: '0' },
                  },
            },
            backgroundImage: {
                'instagram-gradient': 'linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888)',
            },
        },
    },
    plugins: [],
};
