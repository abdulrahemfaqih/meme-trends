/** @type {import('tailwindcss').Config} */
module.exports = {
   content: [
      "./app/views/*.html",
      "./app/views/**/*.html",
      "./app/views/**/**/*.html",
      "./app/views/**/**/**/*.html",
      "./node_modules/flowbite/**/*.js",
   ],
   darkMode: "class",
   theme: {
      container: {
         center: true,
         padding: "15px",
      },
      extend: {
         fontFamily: {
            poppins: "Poppins",
            jakarta: "Plus Jakarta Sans",
            OpenSans: "Open Sans",
         },
         screens: {
            "2xl": "1260px",
         },
         colors: {
            dark: "#0A1219",
            softBlue: "#366998",
            darkBlue: "#134A7D",
         },
      },
   },
   plugins: [require("flowbite/plugin")],
};
