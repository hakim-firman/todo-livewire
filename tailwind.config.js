/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {
        boxShadow:{
            DEFAULT :"3px 3px 0px 0px #000",
            active:"1px 1px 0px 0px #000"
          }
    },
  },
  plugins: [],
}

