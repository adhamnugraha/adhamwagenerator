<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous" />

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />

    <!-- my css -->
    <link href="style.css" rel="stylesheet" />

    <title>Adham | Web Portofolio</title>
    <link rel="shortcut icon" href="img/ANICONB.png" type="image/x-icon" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark shadow-sm fixed-top" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="#home">Adham Nugraha</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><i class="bi bi-list"></i>Menu</button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto navbar-nav-scroll">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php">BACK</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- jumbotron -->
    <section class="jumbotron text-center" id="home">
      <img src="img/siluet2.jpg" alt="adham nugraha" width="180" class="rounded-circle img-thumbnail" />
      <h1 class="display-4 fw-normal">Adham Nugraha</h1>
      <p class="lead"></p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffff"
          fill-opacity="1"
          d="M0,64L48,96C96,128,192,192,288,192C384,192,480,128,576,112C672,96,768,128,864,138.7C960,149,1056,139,1152,128C1248,117,1344,107,1392,101.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhir jumbotron -->

    <!-- about -->
    <section id="about">
      <div class="container">
        <div class="row text-center">
          <div class="col-md mb-3">
            <h2 data-aos="fade-in" data-aos-duration="700">About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-md-4 text-md-end">
            <p data-aos="fade-right">
              Saya seorang yang berpengalaman dalam 8 bulan bekerja sebagai pengelola website marketplace dan landing page. Saya memiliki kemampuan dalam bahasa pemrograman HTML, CSS, JavaScript, PHP dan saya bisa mengoperasikan komputer
              dengan baik.
            </p>
          </div>
          <div class="col-md-4 text-md-start">
            <p data-aos="fade-left" data-aos-delay="200">
              Saya juga seorang yang memiliki kemampuan dalam mendesain berbagai macam media promosi seperti banner dan desain promosi media social. Saya menguasai software desain Adobe Photoshop dan Adobe Ilustrator.
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#a2f8eec7"
          fill-opacity="1"
          d="M0,192L40,170.7C80,149,160,107,240,117.3C320,128,400,192,480,213.3C560,235,640,213,720,181.3C800,149,880,107,960,101.3C1040,96,1120,128,1200,154.7C1280,181,1360,203,1400,213.3L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhir about -->

    <!-- project -->
    <section id="projects">
      <div class="container">
        <div class="row text-center">
          <div class="col mb-3">
            <h2 data-aos="fade-in" data-aos-duration="700">My Projects</h2>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <div class="card" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
              <img src="img/project/WEB-PEMINJAMAN.jpg" id="imgproject" class="card-img-top" alt="web-inventaris" />

              <div class="card-body">
                <p class="card-text">Website Inventory</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="100">
              <img src="img/project/02desain-banner-kq.jpg" id="imgproject" class="card-img-top" alt="banner-kq" />
              <div class="card-body">
                <p class="card-text">Desain Banner Program UMKM</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="200">
              <img src="img/project/logo-iwarga-fix.png" id="imgproject" class="card-img-top" alt="iwarga" />
              <div class="card-body">
                <p class="card-text">Desain Logo I Warga</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-md-4">
            <div class="card" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="300">
              <img src="img/project/01project-tarkam.jpg" id="imgproject" class="card-img-top" alt="tarkam" />
              <div class="card-body">
                <p class="card-text">Aplikasi Dekstop Tarkam</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="400">
              <img src="img/project/logosoregasimerah.png" id="imgproject" class="card-img-top" alt="" style="width: 100%" />
              <div class="card-body">
                <p class="card-text">Desain Logo Soregasi Coffee</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="400">
              <img src="img/project/03-ui-adroid-op.jpg" class="pop" data-target="#modal" />
              <div class="card-body">
                <p class="card-text">Desain UI</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffff"
          fill-opacity="1"
          d="M0,64L48,96C96,128,192,192,288,192C384,192,480,128,576,112C672,96,768,128,864,138.7C960,149,1056,139,1152,128C1248,117,1344,107,1392,101.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhir project -->

    <!-- contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center">
          <div class="col mb-3 mt-3">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
              <strong>Terima Kasih</strong> Pesan anda sudah kami terima.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <form name="ngrha-contact-form">
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" name="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>

              <button class="btn btn-primary d-none btn-loading" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
              </button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0d9b8c"
          fill-opacity="1"
          d="M0,224L40,202.7C80,181,160,139,240,144C320,149,400,203,480,213.3C560,224,640,192,720,154.7C800,117,880,75,960,80C1040,85,1120,139,1200,165.3C1280,192,1360,192,1400,192L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir contact -->

    <!-- footer -->
    <footer class="text-center text-white pb-3">
      <p>&copy 2021 | Created With <i class="bi bi-heart-fill text-danger"></i> By <a href="https://www.instagram.com/adhamnugraha12/" class="text-white fw-bold"> Adham Nugraha</a></p>
      <p>
        <i class="sosmed">
          <a href="https://www.instagram.com/adhamngrha"><img src="img/project/Instagram_icon.png" style="width: 25px; height: 25px" /></a
        ></i>
        <i class="sosmed text-white">
          <a href="https://www.linkedin.com/in/adhamnugraha/"><img class="text-white" src="img/project/linkedin.png" style="width: 25px; height: 25px" /></a
        ></i>
      </p>
    </footer>

    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <img src="" class="imagepreview" style="width: 100%" />
          </div>
        </div>
      </div>
    </div>
    <!-- akhir footer -->

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script type="text/javascript">
      $(function () {
        $(".pop").on("click", function () {
          $(".imagepreview").attr("src", $(this).find("img").attr("src"));
          $("#imagemodal").modal("show");
        });
      });
    </script>

    <script>
      AOS.init({
        once: true,
        duration: 900,
      });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/TextPlugin.min.js"></script>

    <script>
      gsap.registerPlugin(TextPlugin);
      gsap.to(".lead", { duration: 3, delay: 1.5, text: "Junior Web Developer | Graphic Designer" });
      gsap.from(".navbar ", { duration: 1, y: -50, opacity: 0 });
      gsap.from(".jumbotron img", { duration: 1, opacity: 0, delay: 0.5 });
      gsap.from(".display-4", { duration: 1, x: -50, opacity: 0, delay: 1, ease: "back" });
    </script>

    <!-- submit contact form -->
    <script>
      const scriptURL = "https://script.google.com/macros/s/AKfycbytE2ioAlcz94bv0NzOPNLTDZOcY2mMcrvfjVVJ3VUFUdMxOWCyIE2tnEsmSzihYC1q6g/exec";
      const form = document.forms["ngrha-contact-form"];

      const btnKirim = document.querySelector(".btn-kirim");

      const btnLoading = document.querySelector(".btn-loading");

      const myAlert = document.querySelector(".my-alert");

      form.addEventListener("submit", (e) => {
        e.preventDefault();
        // ketika tombol submit di klik
        // tampilkan tombol loading hilangkan tombol kirim
        btnLoading.classList.toggle("d-none");
        btnKirim.classList.toggle("d-none");

        fetch(scriptURL, { method: "POST", body: new FormData(form) })
          .then((response) => {
            // tampilkan tombol kirim hilangkan atombol loading
            btnLoading.classList.toggle("d-none");
            btnKirim.classList.toggle("d-none");

            // tampilkan my alert
            myAlert.classList.toggle("d-none");

            // reset form
            form.reset();
            console.log("Success!", response);
          })
          .catch((error) => console.error("Error!", error.message));
      });
    </script>
  </body>
</html>
