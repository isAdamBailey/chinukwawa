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

