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
    },
  },
  plugins: [],
}

