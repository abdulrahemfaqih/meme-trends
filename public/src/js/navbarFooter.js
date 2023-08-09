
let prevScrollpos = window.pageYOffset;

window.onscroll = function () {
   let currentScrollPos = window.pageYOffset;

   if (prevScrollpos > currentScrollPos) {
      document.getElementById("navbar").style.top = "0";
      document.getElementById("footer").style.bottom = "0"
   } else {
      document.getElementById("navbar").style.top = "-100px"; // Ukuran navbar
      document.getElementById("footer").style.bottom = "-76px"; // Ukuran navbar
   }

   prevScrollpos = currentScrollPos;
};
