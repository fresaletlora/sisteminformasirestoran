<?php
    include 'koneksi.php';
    include 'header.php';
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
                    <a href="menu.php" class="tm-nav-link active">Menu</a>
                  </li>
                  <li class="tm-nav-li">
                    <a href="reservasi.php" class="tm-nav-link">Reservasi</a>
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
          <h2 class="col-12 text-center tm-section-title">
            Daftar Menu
          </h2>
          <p class="col-12 text-center">
            Berikut adalah daftar menu yang ada disini.
          </p>
        </header>
        <header class="row tm-welcome-section">
          <h2 class="col-12 text-center tm-section-title">
            Makanan
          </h2>
        </header>
        <!-- Gallery -->
          
        <div class="row tm-gallery">
          <!-- gallery page 1 -->
          <div id="tm-gallery-page-pizza" class="tm-gallery-page">
            <?php
          $ambil = mysqli_query($connect,"SELECT * FROM menu");
          while ($data = mysqli_fetch_array($ambil)){
            ?>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
              <figure>
                <img
                  src="img/gallery/<?php echo $data['gambar'] ?>"
                  alt="Image"
                  class="tm-gallery-img"
                />
                <figcaption>
                  <h4 class="tm-gallery-title"><?php echo $data['nama'] ?></h4>
                  <p class="tm-gallery-description">
                    <?php echo $data['deskripsi'] ?>
                  </p>
                  <p class="tm-gallery-price"><?php echo "Rp. ". number_format($data['harga'], 0, ",", "."); ?></p>
                </figcaption>
              </figure>
            </article>
                  <?php
                  }
                  ?>
          </div>
        </div>
        <header class="row tm-welcome-section">
          <h2 class="col-12 text-center tm-section-title">
            Minuman
          </h2>
        </header>
        <!-- Gallery -->
          
        <div class="row tm-gallery">
          <!-- gallery page 1 --><?php
          $ambil = mysqli_query($connect,"SELECT * FROM minuman");
          while ($data = mysqli_fetch_array($ambil)){
            ?>
          <div id="tm-gallery-page-pizza" class="tm-gallery-page">
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
              <figure>
                <img
                  src="img/gallery/<?php echo $data['gambar'] ?>"
                  alt="Image"
                  class="tm-gallery-img"
                />
                <figcaption>
                  <h4 class="tm-gallery-title"><?php echo $data['nama'] ?></h4>
                  <p class="tm-gallery-description">
                    <?php echo $data['deskripsi'] ?>
                  </p>
                  <p class="tm-gallery-price"><?php echo "Rp. ". number_format($data['harga'], 0, ",", "."); ?></p>
                </figcaption>
              </figure>
            </article>
                  <?php
                  }
                  ?>
          </div>
        </div>
      </main>
<?php
  include 'footer.php';
?>