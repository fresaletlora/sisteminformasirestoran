<?php
include 'koneksi.php';
include 'header-reservasi.php';
?>
  <body>
    <div class="container">
      <!-- Top box -->
      <!-- Logo & Site Name -->
      <div class="placeholder">
        <div
          class="parallax-window"
          data-parallax="scroll"
          data-image-src="img/head.jfif"
        >
          <div class="tm-header">
            <div class="row tm-header-inner">
              <div class="col-md-6 col-12">
                <img
                  src="img/simple-house-logo.png"
                  alt="Logo"
                  class="tm-site-logo"
                />
                <div class="tm-site-text-box">
                  <h1 class="tm-site-title">Kampung Bunga</h1>
                  <h6 class="tm-site-description">Makan Enak, Harga Pas!</h6>
                </div>
              </div>
              <nav class="col-md-6 col-12 tm-nav">
                <ul class="tm-nav-ul">
                  <li class="tm-nav-li">
                    <a href="index.php" class="tm-nav-link">Home</a>
                  </li>
                  <li class="tm-nav-li">
                    <a href="menu.php" class="tm-nav-link">Menu</a>
                  </li>
                  <li class="tm-nav-li">
                    <a href="reservasi.php" class="tm-nav-link active"
                      >Reservasi</a
                    >
                  </li>
                  <li class="tm-nav-li">
                    <a href="tentang_kami.php" class="tm-nav-link"
                      >Tentang</a
                    >
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>

      <main>
        <header class="row tm-welcome-section">
          <h2 class="col-12 text-center tm-section-title">Reservasi dan Pemesanan</h2>
          <p class="col-12 text-center">
            Untuk reservasi tempat dapat dilakukan dengan menghubungi nomor Whatsapp 081592102342
          </p>
        </header>

        <header class="row tm-welcome-section">
          <h2 class="col-12 text-center tm-section-title">Jadwal Reservasi</h2>
          <p class="col-12 text-center">
            Di bawah ini merupakan list jadwal yang sudah di booking sebelumnya melalui chat Whatsapp
          </p>
        </header>

        <table border="1" align="center" class="table">
          <tr>
            <th style="background-color: grey; color: white;">No</th>
            <th style="background-color: grey; color: white;">Kode Reservasi</th>
            <th style="background-color: grey; color: white;">Nama Pemesan</th>
            <th style="background-color: grey; color: white;">Tanggal</th>
            <th style="background-color: grey; color: white;">Jam</th>
            <th style="background-color: grey; color: white;">Kegiatan</th>
          </tr>
        <?php
          $no=1;
          $ambil = mysqli_query($connect,"SELECT * FROM reservasi");
          while ($data = mysqli_fetch_array($ambil)){
        ?>
          <tr>
            <td align="center"><?php echo $no; ?></td>
            <td align="center">KB-<?php echo $data['kode_reservasi'] ?></td>
            <td align="center"><?php echo $data['nama'] ?></td>
            <td align="center"><?php echo $data['tanggal'] ?></td>
            <td align="center"><?php echo $data['jam'] ?></td>
            <td align="center"><?php echo $data['kegiatan'] ?></td>
          </tr>
                  <?php
        $no++;
        }
        ?>	
        
        </table>

        <br>
        <br>

        <header class="row tm-welcome-section">
          <h2 class="col-12 text-center tm-section-title">Lokasi Kami</h2>
          <p class="col-12 text-center">
            Lokasi kami terletak di Sektor 9 Bintaro, Jl. Tegal Rotan Raya No.72, Sawah Baru, Kec. Ciputat, Kota Tangerang Selatan, Banten 15413.
          </p>
        </header>

        <div class="tm-container-inner-2 tm-map-section">
          <div class="row">
            <div class="col-12">
              <div class="tm-map">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8755420746284!2d106.71953921402823!3d-6.280088495454588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f47477efd771%3A0x1c93395101abace8!2sResto%20Taman%20Kampung%20Bunga!5e0!3m2!1sid!2sid!4v1610166317758!5m2!1sid!2sid"
                  frameborder="0"
                  style="border: 0"
                  allowfullscreen=""
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </main>
<?php
include 'footer-reservasi.php'
?>