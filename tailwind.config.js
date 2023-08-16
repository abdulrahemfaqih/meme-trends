/** @type {import('tailwindcss').Config} */
module.exports = {
   content: [
      "./app/views/*.php",
      "./app/views/**/*.php",
      "./app/views/**/**/*.php",
      "./app/views/**/**/**/*.php",
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
            dark: "#111827",
            softDark: "#1F2937",
            borderDark: "#4B5563",
            softBlue: "#366998",
            darkBlue: "#134A7D",
            coolWhite: "rgb(248,249,250)",
         },
      },
   },
   plugins: [require("flowbite/plugin"), require("tailwind-scrollbar")],
};
