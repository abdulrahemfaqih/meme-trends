function previewFile(event) {
   const uploadText = document.getElementById("upload-text");
   const preview = document.getElementById("image-preview");
   const img = document.getElementById("preview-img");
   const file = event.target.files[0];

   if (file) {
      uploadText.style.display = "none"; // Menyembunyikan teks setelah file diupload

      const reader = new FileReader();

      reader.onload = function (e) {
         img.src = e.target.result;
         preview.style.display = "block";
      };

      reader.readAsDataURL(file);
   }
}

function deleteImage() {
   const uploadText = document.getElementById("upload-text");
   const preview = document.getElementById("image-preview");
   const img = document.getElementById("preview-img");

   img.src = ""; // Clear the image source
   preview.style.display = "none"; // Hide the preview
   uploadText.style.display = "block"; // Show the upload text
   document.getElementById("dropzone-file").value = ""; // Reset the file input
}
