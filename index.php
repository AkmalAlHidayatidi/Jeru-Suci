<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jeru & Suci</title>
    <link rel="shortcut icon" href="foto/J.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:wght@100;400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <link rel="stylesheet" href="countdown/simplyCountdown.theme.default.css"/>
    <script src="countdown/simplyCountdown.min.js"></script>

    <link rel="stylesheet" href="style.css">
  </head>
  <body>


    <section id="hero" class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
        <main>
            <h3>Maimbau Baralek</h3>
            <h1>Jeru & Suci</h1>
            <p>Akan Melangsungkan resepsi pernikahan dalam:</p>
            <div class="simply-countdown"></div>
            <h4>Kepada Bapak/Ibu/Saudara/i</h4>
            <h5><script>
              const mykeysvalues = window.location.search;
              const urlparams = new URLSearchParams(mykeysvalues);
              const param = urlparams.get('name'); 
              document.write(param);
            </script></h5>
            <p>Mohon Maaf Apabila Ada Kesalahan Penulisan Nama dan Gelar</p>
            <a href="#home" class="btn btn-lg mt-2" onClick="enableScroll()">Lihat Undangan</a>
        </main>
    </section>
    
    <nav class="navbar navbar-expand-md bg-transparent sticky-top mynavbar">
      <div class="container">
        <a class="navbar-brand" href="#">Jeru & Suci</a>
        <button class="navbar-toggler" id="tUbahwarna" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header" id="heading">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Jeru & Suci</h5>
            <button type="button" id="close" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body" id="badan">
            <div class="navbar-nav ms-auto">
              <a class="nav-link" href="#home">Home</a>
              <a class="nav-link" href="#info">Information</a>
              <a class="nav-link" href="#gallery">Gallery</a>
              <a class="nav-link" href="#rsvp">RSVP</a>
              <a class="nav-link" href="#gift">Gift</a>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <section id="home" class="home">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <h2>Acara Pernikahan</h2>
            <h3>Diselenggarakan pada 22, 23, 24 Desember 2023 di Pesisir Selatan, Sumatera Barat.</h3>
            <p>Oleh karena itu, dengan segala hormat, kami bermaksud untuk mengundang Bapak/Ibu, Saudara/i, untuk hadir pada acara pernikahan kami. </p>
          </div>
        </div>
        <div class="row couple">
          <div class="cowok text-end" data-aos="fade-down" data-aos-duration="3000">
            <h3>Jeru Satria</h3>
            <p>Putra dari Bapak. Taufik<br> dan <br> Ibu. Yelvarinda</p>
          </div>
          <div class="cewek" data-aos="fade-up" data-aos-duration="3000">
            <h3>Suci Ariesta Dianti, A.Md</h3>
            <p>Putri dari Bapak. Syamsurizal<br> dan <br> Ibu. Erni Reflita</p>
          </div>
        </div>
      </div>
    </section>

    <section id="info" class="info">
      <div class="container">
        <div class="row justify-content-center mt-5">
          <div class="col-md-8 col-10 text-center">
            <h2>Informasi Acara</h2>
            <p class="description">Diharapkan untuk tidak salah alamat dan tanggal. Manakala tiba di tujuan namun tidak
              ada tanda-tanda sedang dilangsungkan pernikahan, boleh jadi Anda salah jadwal, atau salah tempat.</p>
          </div>
        </div>
        <div class="row justify-content-center mt-5" >
          <div class="col-md-8 col-10 text-center">
            <div class="card text-center">
              <div class="card-header">
                Akad Nikah
              </div>
              <div class="card-body">
                <div class="row justify-content-center m-2">
                  <div class="col-6">
                    <i class="bi bi-clock-fill d-block"></i>
                    <span>16.00 - 18.00</span>
                  </div>
                  <div class="col-6">
                    <i class="bi bi-calendar2-heart"></i><br>
                    <span>22 Desember 2023</span>
                  </div>
                </div>
                <a href="https://maps.app.goo.gl/y6oSSLmu2Lzza9N87" target="_blank" class="btn btn-info">Menuju Lokasi</a>
              </div>
              <div class="card-footer text-body-secondary">
                <p>Saat acara akad diharapkan untuk kondusif menjaga kekhidmatan dan kekhusyuan seluruh prosesi.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center mt-5" >
          <div class="col-md-5 col-10 text-center">
            <div class="card text-center">
              <div class="card-header">
                Resepsi Suci
              </div>
              <div class="card-body">
                <div class="row justify-content-center m-2">
                  <div class="col-md-6">
                    <i class="bi bi-clock-fill d-block"></i>
                    <span>10.00 - Selesai</span>
                  </div>
                  <div class="col-md-6">
                    <i class="bi bi-calendar2-heart"></i><br>
                    <span>23 Desember 2023</span>
                  </div>
                </div>
                <a href="https://maps.app.goo.gl/y6oSSLmu2Lzza9N87" target="_blank" class="btn btn-info">Menuju Lokasi</a>
              </div>
              <div class="card-footer text-body-secondary">
                <p>Saat acara akad diharapkan untuk kondusif menjaga kekhidmatan dan kekhusyuan seluruh prosesi.</p>
              </div>
            </div> 
          </div>

          <div class="col-md-5 col-10 text-center mb-5">
            <div class="card text-center">
              <div class="card-header">
                Resepsi Jeru
              </div>
              <div class="card-body">
                <div class="row justify-content-center m-2">
                  <div class="col-md-6">
                    <i class="bi bi-clock-fill d-block"></i>
                    <span>10.00 - Selesai</span>
                  </div>
                  <div class="col-md-6">
                    <i class="bi bi-calendar2-heart"></i><br>
                    <span>24 Desember 2023</span>
                  </div>
                </div>
                <a href=https://maps.app.goo.gl/LphvGWbC9hWYknmK7 target="_blank" class="btn btn-info">Menuju Lokasi</a>
              </div>
              <div class="card-footer text-body-secondary">
                <p>Saat acara akad diharapkan untuk kondusif menjaga kekhidmatan dan kekhusyuan seluruh prosesi.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="gallery" id="gallery">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-10 text-center">
            <span>Memori Kisah Kami</span>
            <h2>Gallery Foto</h2>
          </div>
        </div>

        <div class="row row-col-xl-5 row-col-lg-4 row-col-md-3 row-col-sm-2 row-col-1">
          <div class="col mt-3">
            <img src="foto/IMG_1679.jpg" data-aos="fade-down" data-aos-duration="3000">
            <img src="foto/IMG_1680.JPG" data-aos="fade-down" data-aos-duration="3000">
            <img src="foto/IMG_1683.jpg" data-aos="fade-down" data-aos-duration="3000">
            <img src="foto/IMG_1703.JPG" data-aos="fade-down" data-aos-duration="3000">
            <img src="foto/IMG_1712.JPG" data-aos="fade-down" data-aos-duration="3000">
            <img src="foto/IMG_1769.jpg" data-aos="fade-up" data-aos-duration="3000">
            <img src="foto/IMG_1775.jpg" data-aos="fade-up" data-aos-duration="3000">
            <img src="foto/IMG_1776.jpg" data-aos="fade-up" data-aos-duration="3000">
            <img src="foto/IMG_1777.JPG" data-aos="fade-up" data-aos-duration="3000">
            <img src="foto/IMG_1782.jpg" data-aos="fade-up" data-aos-duration="3000">
            
          </div>
        </div>
      </div>
    </section>

    <section id="rsvp" class="rsvp">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-10 text-center">
            <span>Tiada Kesan Tanpa Kehadiranmu</span>
            <h2>Konfirmasi Kehadiran</h2>
            <p>Isi form di bawah ini untuk melakukan konfirmasi kehadiran.</p>
          </div>
        </div>

        <form class="row row-cols-md-auto g-3 align-items-center justify-content-center" 
        method="POST" action="https://script.google.com/macros/s/AKfycbxjZoNQtZkubFJhRPPPyvum4E8WoHGeyQuGEXWd4T-evl1RQPglV4jP7EjjVJAmz7To/exec"
        id="FORM_ID">
          <div class="col-12">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
          </div>
          <div class="col-12">
            <div class="mb-3">
              <label for="jumlah" class="form-label">Jumlah Kehadiran</label>
              <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" max="5" length="1" value="1">
            </div>
          </div>
          <div class="col-12">
            <div class="mb-3">
              <label for="status" class="form-label">Jumlah Kehadiran</label>
              <select name="status" id="status" class="form-select">
                <option selected>Pilih Salah Satu</option>
                <option value="Hadir">Hadir</option>
                <option value="Tidak Hadir">Tidak Hadir</option>
              </select>
            </div>
          </div>
          <div class="col-12">
            <button class="btn">Kirim</button>
          </div>
        </form>

        <div class="row justify-content-center mt-5">
          <div class="col-md-8 col-10 text-center">
            <p>Silahkan Isi Pesan Disini...</p>
            <div class="mb-2">
              <label for="nama-pesan" class="form-pesan">Nama</label>
              <input type="text" id="nama-pesan" class="form-control">
            </div>
            <div class="mb-2">
              <label for="email-pesan" class="form-pesan">Email</label>
              <input type="email" id="email-pesan" class="form-control">
            </div>
            <div class="mb-2 mt-3">
              <label for="validationTextarea" class="form-label">Pesan</label>
              <textarea class="form-control" id="validationTextarea" required></textarea>
            </div>
            <div class="col-12 mb-3">
              <button class="btn">Kirim</button>
            </div>
          </div>
        </div>
        
        
      </div>
    </section>

    <section class="gift" id="gift">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-10 text-center">
            <span>Ungkapan Tanda Kasih</span>
            <h2>Kirim Hadiah</h2>
          </div>
        </div>

        <div class="row justify-content-center text-center">
          <div class="col-md-6">
            <ul class="list-group">
              <li class="list-group-item">
                <div class="fw-bold">BRI</div>
                Jeru Satria - 7652-01-020008-53-9<br>
                <img src="foto/7652-01-020008-53-9_qrcode.png" alt="BRI QR" class="img-thumbnail" width="200">
              </li>
            </ul>
            <ul class="list-group">
              <li class="list-group-item">
                <div class="fw-bold">BSI</div>
                Suci Ariesta Dianti - 7225036459<br>
                <img src="foto/7225036459_qrcode.png" alt="BSI QR" class="img-thumbnail" width="200">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <small class="block">&copy; 2023 Jeru&Suci Wedding . All Rights Reserved.</small>
            <small class="block">Design By <a href="https://instagram.com/al_tidhy27?igshid=OGQ5ZDc2ODk2ZA==">@AkmalAlHidayatidhy</a></small>
          </div>
        </div>
      </div>
    </footer>

    <div id="audio-container">
      <audio id="song" loop>
        <source src="audio/Shane_Filan_-_Beautiful_In_White__Official_Video_(256k) (mp3cut.net).mp3" type="audio/mp3">
      </audio>
  
      <div class="audio-icon-wrapper" style="display: none;">
        <i class="bi bi-disc"></i>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script>
        simplyCountdown('.simply-countdown', {
            year: 2023, // required
            month: 12, // required
            day: 23, // required
            hours: 8, // Default is 0 [0-23] integer
            minutes: 0, // Default is 0 [0-59] integer
            seconds: 0, // Default is 0 [0-59] integer
            words: { //words displayed into the countdown
                days: { singular: 'Hari', plural: 'Hari' },
                hours: { singular: 'Jam', plural: 'Jam' },
                minutes: { singular: 'Menit', plural: 'Menit' },
                seconds: { singular: 'Detik', plural: 'Detik' }
            },
    });
    </script>

    <script>
      const rootElement = document.querySelector(":root");
      const audioIconWrapper = document.querySelector('.audio-icon-wrapper');
      const audioIcon = document.querySelector('.audio-icon-wrapper i');
      const song = document.querySelector('#song');
      let isPlaying = false;

      function disableScroll() {
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

        window.onscroll = function () {
          window.scrollTo(scrollTop, scrollLeft);
        }

        rootElement.style.scrollBehavior = 'auto';
      }

      function enableScroll() {
        window.onscroll = function () { }
        rootElement.style.scrollBehavior = 'smooth';
        // localStorage.setItem('opened', 'true');
        playAudio();
      }

      function playAudio() {
        song.volume = 0.2;
        audioIconWrapper.style.display = 'flex';
        song.play();
        isPlaying = true;
      }

      audioIconWrapper.onclick = function () {
        if (isPlaying) {
          song.pause();
          audioIcon.classList.remove('bi-disc');
          audioIcon.classList.add('bi-pause-circle');
        } else {
          song.play();
          audioIcon.classList.add('bi-disc');
          audioIcon.classList.remove('bi-pause-circle');
        }

        isPlaying = !isPlaying;
      }

      if (!localStorage.getItem('opened')) {
        disableScroll();
      }
      disableScroll();
    </script>

    <script type = "text/javascript" >
      window.addEventListener("DOMContentLoaded", function() {
          const yourForm = document.getElementById('FORM_ID');
          yourForm.addEventListener("submit", function(e) {
              e.preventDefault();
              const data = new FormData(yourForm);
              const action = e.target.action;
              fetch(action, {
                  method: 'POST',
                  body: data,
              }).then(() => {
                  alert("Konfirmasi Kehadiran Sukses!!");
              })
          })
      }); 
    </script>

    <script src="script.js"></script>
  </body>
</html>