<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <!-- remix icon -->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
   <!-- font -->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
   <!-- tailwidcss -->
   <link rel="stylesheet" href="../../../dist/output.css" />
   <!-- icon -->
   <link rel="shortcut icon" href="../../../public/src/img/icon/icon-dark.svg" type="image/x-icon" />
   <title>Meme Verse</title>
   <style>
      /* * {
         border: 1px solid rgb(196, 196, 196);
      } */
   </style>
</head>

<body class="overflow-y-scroll bg-coolWhite dark:bg-dark dark:text-slate-200 font-poppins scrollbar-thin scrollbar-thumb-cyan-800 custom-scrollbar">
   <!-- * section navbar -->
   <nav class="sticky top-[-1px] transition-all ease-in-out duration-300" id="navbar">
      <div class="bg-white/70 backdrop-blur-lg w-full py-[15px] lg:py-[18px] dark:bg-softDark/50 border-b-2 dark:border-slate-800">
         <div class="container flex items-center justify-between">
            <!-- logo -->
            <div class="flex items-center gap-1 lg:gap-2">
               <img src="../../../public/src/img/icon/icon-dark.svg" alt="logo" class="icon-light w-[35px] lg:w-[40px]" />
               <img src="../../../public/src/img/icon/icon-dark.svg" class="icon-dark w-[35px] lg:w-[40px] hidden" alt="logo" />
               <a href="welcome.php" class="font-semibold text-[20px] lg:text-[24px] text-softDark dark:text-gray-300">
                  MemeVerse
               </a>
            </div>
            <!-- end logo -->
            <!-- menu -->
            <div>
               <div class="flex items-center gap-4">
                  <!-- modal search-->
                  <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button">
                     <i class="ri-search-line text-[22px]"></i>
                  </button>
                  <!-- end modal search -->
                  <div for="darkModeToggle" class="px-2 border-2 border-gray-200 rounded-md cursor-pointer toogle dark:border-gray-700">
                     <i class="ri-moon-fill text-[20px] moon"></i>
                     <i class="ri-sun-fill text-[20px] sun display-none"></i>
                  </div>
               </div>
            </div>
            <!-- end menu -->
         </div>
      </div>
   </nav>
   <!-- * end section navbar -->

   <!-- *section hero -->
   <section class="container pt-12 pb-8 lg:pt-4 dark:border-gray-700">
      <div class="flex items-center justify-center gap-12 max-md:hidden ">
         <img src="../../../public/src/img/memes/memes1.jpg" alt="" class="floating1 w-[19%] rounded-lg shadow-xl border dark:border-gray-700">
         <img src="../../../public/src/img/memes/memes2.jpg" alt="" class="animation-hero-img w-[19%]  rounded-lg shadow-xl border dark:border-gray-700">
         <img src="../../../public/src/img/memes/memes3.png" alt="" class="floating2 w-[19%]  rounded-lg shadow-xl border dark:border-gray-700">
      </div>
      <div class="flex flex-col items-center justify-center gap-y-8 lg:hidden">
         <div class="all-center">
            <img src="../../../public/src/img/memes/memes2.jpg" alt="" class="animation-hero-img floating3 w-[45%]  rounded-lg shadow-xl border dark:border-gray-700">
         </div>
         <div class="flex items-center justify-around">
            <img src="../../../public/src/img/memes/memes1.jpg" alt="" class="floating-m-1 w-[30%]  rounded-lg shadow-xl border dark:border-gray-700">
            <img src="../../../public/src/img/memes/memes3.png" alt="" class="floating-m-2 w-[30%] h-[25%] rounded-lg shadow-xl border dark:border-gray-700">
         </div>
      </div>
      <div class="flex flex-col items-center justify-center pt-8 pb-5 lg:pt-20 ">
         <h1 class="text-3xl font-bold text-darkBlue dark:text-softBlue animation-h1">MemeVerse</h1>
         <p class="text-center text-[14px] font-normal p-3 ">Menyediakan Kumpulan memes terupdate dan terhubung dengan
            pengguna lainnya</p>
      </div>
      <div class="gap-6 all-center">
         <div class="gap-2 all-center">
            <i class="ri-group-fill "></i>
            <p class="text-sm">10 Penguna</p>
         </div>
         <div class="gap-2 all-center">
            <i class="ri-image-fill"></i>
            <p class="text-sm">6 Postingan</p>
         </div>
      </div>
      <div class="flex-col all-center">
         <a href="memes.php" class="flex items-center gap-2 px-3 py-2 mt-4 border-2 bg-white shadow-md dark:border-gray-700 dark:bg-softBlue rounded-3xl ">
            <i class="ri-rocket-2-fill"></i>
            <p class="text-base">Mulai Menjelajah</p>
         </a>
         <div class="flex items-center gap-2 m-2">
            <a href="register.php" class="text-[15px] border-2 bg-white dark:bg-transparent hover:bg-blue-500 dark:hover:bg-softBlue  dark:border-gray-700 rounded-2xl shadow-md py-2 px-3">Daftar</a>
            <a href="login.php" class="text-[15px] border-2 bg-white dark:bg-transparent hover:bg-500 dark:hover:bg-softBlue dark:border-gray-700 rounded-2xl shadow-md py-2 px-3">Masuk</a>
         </div>
      </div>
   </section>

   <!-- *end section hero -->
</body>
<script src="../../../public/src/js/toogle.js"></script>
<script src="../../../node_modules/flowbite/dist/flowbite.min.js"></script>

</html>