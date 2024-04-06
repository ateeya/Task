/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",

  ],
  theme: {

    extend: {

      colors: {
        'customnav' :    '#D8BFD8',
        'customhover' :    '#997A8D',

        'customside' :    '#301934',
    },


       fontFamily: {
      'Cairo' : ['Cairo', 'sans-serif'],

       },
           },


    },

  plugins: [],
}

