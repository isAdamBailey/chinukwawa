<<<<<<< HEAD
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        fontFamily: {
            'body': ["figtree", "sans-serif"],
            'header': ["oswald", "sans-serif"],
        }
    },
  },
  plugins: [],
}

=======
import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                header: ["Oswald", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
>>>>>>> f152e93017fff2322d7580ec853df19cb26b0d27
