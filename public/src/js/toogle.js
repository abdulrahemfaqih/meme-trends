const html = document.querySelector("html");
const sun = document.querySelector(".sun");
const moon = document.querySelector(".moon");
const iconLight = document.querySelector(".icon-light");
const iconDark = document.querySelector(".icon-dark");
const toogle = document.querySelector("#darkModeToggle");

toogle.addEventListener("change", () => {
   if (toogle.checked) {
      html.classList.add("dark");
      moon.classList.add("hidden");
      sun.classList.remove("hidden");
      iconLight.classList.add("hidden");
      iconDark.classList.remove("hidden");
      localStorage.theme = "dark";
   } else {
      html.classList.remove("dark");
      sun.classList.add("hidden");
      moon.classList.remove("hidden");
      iconDark.classList.add("hidden");
      iconLight.classList.remove("hidden");
      localStorage.theme = "light";
   }
});

// set toogle sesuai mode
if (
   localStorage.theme === "dark" ||
   (!("theme" in localStorage) &&
      window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
   toogle.checked = true;
} else {
   toogle.checked = false;
}
