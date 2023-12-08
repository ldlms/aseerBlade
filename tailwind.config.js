/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      screens: {
        'sm': '640px',  // Petit écran (mobile)
        'md': '768px',  // Écran moyen (tablettes)
        'lg': '1024px', // Grand écran (ordinateur de bureau)
        'xl': '1280px', // Très grand écran (grandes résolutions)
      },
    },
  },
  plugins: [],
}

