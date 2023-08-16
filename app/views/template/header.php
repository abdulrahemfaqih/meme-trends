<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <!-- remix icon -->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
   <!-- font -->
   <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet" />
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
      <div
         class="bg-white/70 backdrop-blur-lg w-full py-[15px] lg:py-[18px] dark:bg-softDark/50 border-b-2 dark:border-slate-800">
         <div class="container flex items-center justify-between">
            <!-- logo -->
            <div class="flex items-center gap-1 lg:gap-2">
               <img src="../../../public/src/img/icon/icon-dark.svg" alt="logo"
                  class="icon-light w-[35px] lg:w-[40px]" />
               <img src="../../../public/src/img/icon/icon-dark.svg" class="icon-dark w-[35px] lg:w-[40px] hidden"
                  alt="logo" />
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
                  <div for="darkModeToggle"
                     class="px-2 border-2 border-gray-200 rounded-md cursor-pointer toogle dark:border-gray-700">
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