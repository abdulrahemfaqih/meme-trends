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

   <!-- * section content -->
   <section class="h-[70vh] flex justify-center items-center mb-12">
      <div class="container max-w-screen-md">
         <h1 class="pt-6 pb-3 text-center text-2xl font-bold">Daftar</h1>
         <div class="px-6 py-4 border-2 rounded-lg shadow-md dark:border-slate-800">
            <form method="post">
               <div class="mb-6">
                  <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                     Nama pengguna <span class="text-red-500">*</span>
                  </label>
                  <input type="username" id="username" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="inputkan nama pengguna" required>
               </div>
               <div class="mb-6">
                  <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                     Kata Sandi <span class="text-red-500">*</span>
                  </label>
                  <input type="password" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="inputkan kata sandi" required>
               </div>
               <div class="mb-6">
                  <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                     Konformasi kata sandi <span class="text-red-500">*</span>
                  </label>
                  <input type="password" id="repeat-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Konfirmasi kata sandi" required>
               </div>
               <div class="flex items-start mb-6">
                  <div class="flex items-center h-5">
                     <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                  </div>
                  <label for="terms" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                     Saya setuju dengan <a href="ketentuanDanKebijakan.php" class="text-blue-600 hover:underline dark:text-blue-500">kebijakan dan ketentuan</a>
                  </label>
               </div>
               <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  Daftar
               </button>
               <div class="pt-2 text-sm text-gray-900 dark:text-gray-400 font-medium">
                  Sudah punya akun? <a href="login.php" class="text-blue-500 hover:underline dark:text-blue-600">Masuk disini</a>
               </div>
            </form>
         </div>
      </div>
   </section>
   <!-- * end section content -->


   <!-- * section modal -->
   <div class="allmodal">
      <!-- modal more cards meme -->
      <div id="modal-more-memes" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
         <div class="relative w-full max-w-lg max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white/70 backdrop-blur-[100px] rounded-lg shadow dark:bg-gray-700/30">
               <!-- Modal header -->
               <div class="flex items-center justify-between p-5 border-b-2 rounded-t-2 dark:border-gray-600">
                  <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                     <p class="text-gray-800 dark:text-gray-200">Menu Postingan</p>
                  </h3>
                  <button type="button" class="inline-flex items-center justify-center w-8 h-8 ml-auto text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-more-memes">
                     <svg class="w-3 h-3 text-dark dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                     </svg>
                  </button>
               </div>
               <!-- Modal body -->
               <div class="p-6 space-y-6">
                  <a href="" class="flex items-center gap-3">
                     <i class="ri-download-2-line text-modal-icon"></i>
                     <p class="text-modal">Unduh</p>
                  </a>
                  <a href="" class="flex items-center gap-3">
                     <i class="ri-error-warning-fill text-modal-icon"></i>
                     <p class="text-modal">Laporkan</p>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <!-- end modal more memes -->
      <!-- modal search -->
      <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full transition-all ease-in-out duration-300">
         <div class="relative w-full max-w-md max-h-full">
            <div class="relative">
               <form autocomplete="off">
                  <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                  <div class="relative">
                     <input type="search" id="search" class="block w-full p-4 pl-5 text-sm text-gray-900 border border-gray-300 rounded-lg backdrop-blur-3xl bg-white/70 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700/70 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan kata kunci" required>
                     <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-softBlue hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-softBlue  dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- end modal search -->
      <!-- modal more -->
      <div id="more-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
         <div class="relative w-full max-w-lg max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white/70 backdrop-blur-[100px] rounded-lg shadow dark:bg-gray-700/30">
               <!-- Modal header -->
               <div class="flex items-center justify-between p-5 border-b-2 rounded-t-2 dark:border-gray-600">
                  <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                     <p class="text-gray-800 dark:text-gray-200">Lainnya</p>
                  </h3>
                  <button type="button" class="inline-flex items-center justify-center w-8 h-8 ml-auto text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="more-modal">
                     <svg class="w-3 h-3 text-dark dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                     </svg>
                  </button>
               </div>
               <!-- Modal body -->
               <div class="p-6 space-y-6">
                  <a href="developer.php" class="flex items-center gap-3">
                     <i class="ri-user-5-fill text-modal-icon"></i>
                     <p class="text-modal">Developer</p>
                  </a>
                  <a href="hubungi.php" class="flex items-center gap-3">
                     <i class="ri-phone-fill text-modal-icon"></i>
                     <p class="text-modal">Hubungi Kami</p>
                  </a>
                  <a href="ketentuanDanKebijakan.php" class="flex items-center gap-3">
                     <i class="ri-phone-lock-fill text-modal-icon"></i>
                     <p class="text-modal">Ketentuan, Kebijakan dan Privasi</p>
                  </a>
                  <a href="faq.php" class="flex items-center gap-3">
                     <i class="ri-questionnaire-fill text-modal-icon"></i>
                     <p class="text-modal">FAQ</p>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <!-- end modal more -->
      <!-- modal user -->
      <div id="user-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
         <div class="relative w-full max-w-lg max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white/70 backdrop-blur-[100px] rounded-lg shadow dark:bg-gray-700/30">
               <!-- Modal header -->
               <div class="flex items-center justify-between p-5 border-b-2 border-gray-400 dark:border-gray-600">
                  <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                     <p class="text-gray-800 dark:text-gray-200">Profil</p>
                  </h3>
                  <button type="button" class="inline-flex items-center justify-center w-8 h-8 ml-auto text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="user-modal">
                     <svg class="w-3 h-3 text-dark dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                     </svg>
                  </button>
               </div>
               <!-- Modal body -->
               <div class="p-6 space-y-6">
                  <a href="profile.php" class="flex items-center gap-3">
                     <i class="ri-user-3-fill text-modal-icon"></i>
                     <p class="text-modal">Profil</p>
                  </a>
                  <a href="notifikasi.php" class="flex items-center gap-3">
                     <i class="ri-notification-4-fill text-modal-icon"></i>
                     <p class="text-modal">Notifikasi</p>
                  </a>
                  <a href="pengaturan.php" class="flex items-center gap-3">
                     <i class="ri-settings-4-fill text-modal-icon"></i>
                     <p class="text-modal">Pengaturan Akun</p>
                  </a>
                  <button id="logout" data-modal-target="modal-logout" data-modal-toggle="modal-logout" class="flex items-center gap-3">
                     <i class="ri-logout-box-fill text-[20px] text-red-600"></i>
                     <p class="text-modal">Keluar</p>
                  </button>
                  <!-- * modal logout -->
                  <div id="modal-logout" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                     <div class="relative w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                           <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-logout">
                              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                              </svg>
                              <span class="sr-only">Close modal</span>
                           </button>
                           <div class="p-6 text-center">
                              <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                              </svg>
                              <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah kamu yakin ingin
                                 menghapus akun secara permanen?</h3>
                              <a href="logout.php""
                                 class=" text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                 Iya, saya yakin
                              </a>
                              <button data-modal-hide="modal-logout" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                 Tidak</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- * end modal logout -->
               </div>
            </div>
         </div>
      </div>
      <!-- end modal user -->
      <!-- add modal -->
      <div id="add-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full ">
         <div class="relative w-full max-w-lg max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white/70 backdrop-blur-[100px] rounded-lg shadow dark:bg-gray-700/30">
               <!-- Modal header -->
               <div class="flex items-center justify-between p-5 border-b-2 border-gray-400 dark:border-gray-600">
                  <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                     <p class="text-gray-800 dark:text-gray-200">Posting Meme</p>
                  </h3>
                  <button type="button" class="inline-flex items-center justify-center w-8 h-8 ml-auto text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="add-modal">
                     <svg class="w-3 h-3 text-dark dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                     </svg>
                  </button>
               </div>
               <!-- Modal body -->
               <form action="">
                  <div class="p-6">
                     <div class="flex flex-col justify-center w-full gap-y-3">
                        <p class="text-lg font-medium text-gray-800 dark:text-gray-200">Pilih gambar <span class="text-red-700">*</span></p>
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 rounded-lg cursor-pointer bg-transparent dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600 overflow-auto scrollbar-w-1.5">
                           <div class="flex flex-col items-center justify-center pt-5 pb-6" id="upload-text">
                              <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                              </svg>
                              <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold text-center">Click to upload</span> or drag and drop</p>
                              <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 5Mb)</p>
                           </div>
                           <input id="dropzone-file" type="file" class="hidden" accept="image/png, image/jpeg, image/jpg, image/gif" onchange="previewFile(event)" />
                           <div id="image-preview" class="hidden">
                              <img id="preview-img" src="#" alt="Preview" class="mx-auto" />
                           </div>
                        </label>
                     </div>
                     <button type="reset" onclick="deleteImage()"><i class="ri-delete-bin-7-fill text-[20px] absolute right-10 bottom-52 text-red-700 py-1 px-2 rounded-lg bg-gray-300"></i></button>
                     <div class="flex flex-col gap-y-3">
                        <p class="text-lg font-medium text-gray-800 dark:text-gray-200">Caption Meme <span class="text-red-700">*</span></p>
                        <div class="mb-6">
                           <input type="text" id="default-input" class="bg-transparent border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ketikkan caption kamu disini">
                        </div>
                     </div>
                     <div class="flex justify-end">
                        <button type="submit" class="py-2 bg-blue-700/60 rounded-lg border-gray-700 w-[90px] text-center">Posting</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- end add modal -->
   </div>
   <!-- * end section modal -->

   <!-- * section footer -->
   <footer class="fixed bottom-0 left-[-1px] right-0 py-3 bg-white/70 backdrop-blur-xl border-t border-slate-200 dark:border-gray-700 dark:bg-gray-700/30 transition-all ease-in-out duration-300" id="footer">
      <div class="container flex justify-around items-center text-[20px]">
         <a href="memes.php">
            <i class="ri-image-line"></i>
         </a>
         <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button">
            <i class="ri-search-line text-[22px]"></i>
         </button>

         <!--
            *jika belum login dan register akan jika mengklik icon akan langsung di arahkan ke form.
            *jika sudah login dan register akan muncul modalnya
         -->
         <button data-modal-target="add-modal" data-modal-toggle="add-modal" type="button">
            <i class="ri-add-box-line"></i>
         </button>

         <button data-modal-target="more-modal" data-modal-toggle="more-modal" type="button">
            <i class="ri-more-fill"></i>
         </button>

         <!--
            *jika belum login dan register akan jika mengklik icon akan langsung di arahkan ke form.
            *jika sudah login dan register akan muncul modalnya
         -->
         <button data-modal-target="user-modal" data-modal-toggle="user-modal" type="button">
            <i class="ri-user-line"></i>
         </button>
      </div>
   </footer>
   <!-- * end section footer -->
</body>
<script src="../../../public/src/js/toogle.js"></script>
<script src="../../../public/src/js/tambah.js"></script>
<script src="../../../public/src/js/navbarFooter.js"></script>
<script src="../../../node_modules/flowbite/dist/flowbite.min.js"></script>

</html>