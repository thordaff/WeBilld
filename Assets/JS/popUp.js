setTimeout(function() {
  var flashMessage = document.getElementById('flashMessage');
  if (flashMessage) {
    flashMessage.style.opacity = 0;
    setTimeout(function() {
      flashMessage.style.display = 'none';
    }, 500); // Ubah angka 500 menjadi waktu (dalam milidetik) yang diinginkan sebelum pesan flash hilang sepenuhnya
  }
}, 5000); // Ubah angka 3000 menjadi waktu (dalam milidetik) yang diinginkan sebelum pesan flash mulai menghilang
