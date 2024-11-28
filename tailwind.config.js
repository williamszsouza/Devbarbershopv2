/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [ "./index.html",        // Arquivo HTML principal
    "./src/**/*.{html,js}"], // Todos os arquivos HTML e JS na pasta src],
  theme: {
    extend: {
      fontFamily:{
        montserrat:["montserrat","sans-serif"],
        poppins:["Poppins","sans-serif"],
        inter:["Inter","sans-serif"]
      },
      animation:{
        'fade-in': 'fadeIn 2s ease-out normal'
      },
      keyframes:{
        fadeIn:{
          '0%': {opacity:'0'},
          '100%': {opacity:'1'}
        },
      },
    },
  },
  plugins: [],
}

