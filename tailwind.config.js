/** @type {import('tailwindcss').Config} */
module.exports = {
   content: [
      "./app/views/*.html",
      "./app/views/**/*.html",
      "./app/views/**/**/*.html",
      "./app/views/**/**/**/*.html",
      "./node_modules/flowbite/**/*.js",
   ],
   theme: {
      container: {
         center: true,
         padding: "28px",
      },
      extend: {
         fontFamily: {
            poppins: "Poppins",
            jakarta: "Plus Jakarta Sans",
         },
         screens: {
            "2xl": "1260px",
         },
      },
   },
   plugins: [require("flowbite/plugin")],
};
