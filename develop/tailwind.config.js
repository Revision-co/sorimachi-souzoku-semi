/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/assets/scss/**/*.scss", "./resources/**/*.ejs"],
  theme: {
    extend: {
      fontFamily: {
      },
      colors: {
      },
    },
    screens: {
      'sp': {'max': '767px'},
      'pc': "768px",
    },
  },
  plugins: [],
}

