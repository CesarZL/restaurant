import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
import colors from 'tailwindcss/colors';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'selector',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Josefin Sans', ...defaultTheme.fontFamily.sans],
                secondary: ['Cormorant Infant', 'serif'],
            },
            colors: {
                primary: '#292d36',      // Dark Background
                accent: '#E1B168',       // Highlight
                secondary: '#555555',    // Secondary Text
                background: '#FFF8F5'    // Base Background
          },
        },
    },

    plugins: [forms, typography],
};

