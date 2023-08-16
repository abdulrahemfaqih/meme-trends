const sunIcon = document.querySelector(".sun");
const moonIcon = document.querySelector(".moon");

// theme variable
const userTheme = localStorage.getItem("theme");
const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

// icon toggling
const iconToggle = () => {
   moonIcon.classList.toggle("display-none");
   sunIcon.classList.toggle("display-none");
};

// initial theme
const themeCheck = () => {
   if (userTheme === "dark" || (!userTheme && systemTheme)) {
      document.documentElement.classList.add("dark");
      sunIcon.classList.remove("display-none");
      moonIcon.classList.add("display-none");
      return;
   }
   document.documentElement.classList.remove("dark");
   sunIcon.classList.add("display-none");
   moonIcon.classList.remove("display-none");
};

// manual theme switch
const themeSwitch = () => {
   if (document.documentElement.classList.contains("dark")) {
      document.documentElement.classList.remove("dark");
      localStorage.setItem("theme", "light");
   } else {
      document.documentElement.classList.add("dark");
      localStorage.setItem("theme", "dark");
   }
   iconToggle();
};

// call theme switch on buttons
sunIcon.addEventListener("click", () => {
   themeSwitch();
});
moonIcon.addEventListener("click", () => {
   themeSwitch();
});

// invoke theme check on initial load
themeCheck();


