
<?= $this->extend('templates/templateuser') ?>

<?= $this->section('navuser') ?>
<?= $this->include('templates/navbar'); ?>
    <!-- ======= Services Section ======= -->
    <section id="services" class="services d-flex align-items-center mt-5">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Proyek Selesai - Sosial</p>
        </header>

        <div class="row gy-4 justify-content-center">
          <div
            class="col-lg-5 col-md-6"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="service-box red">
              <h3>Jaminan Sosial</h3>
              <h4>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="235"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                Proyek
              </h4>
              <a href="sosial-jaminan-sosial.html" class="read-more"
                ><span>Lihat Selengkapnya</span>
                <i class="bi bi-arrow-right"></i
              ></a>
            </div>
          </div>

          <div
            class="col-lg-5 col-md-6"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="service-box orange">
              <h3>Rehabilitas Sosial</h3>
              <h4>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="167"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                Proyek
              </h4>
              <a href="#" class="read-more"
                ><span>Lihat Selengkapnya</span>
                <i class="bi bi-arrow-right"></i
              ></a>
            </div>
          </div>

          <div
            class="col-lg-5 col-md-6"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="service-box green">
              <h3>Pemberdayaan Sosial</h3>
              <h4>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="192"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                Proyek
              </h4>
              <a href="#" class="read-more"
                ><span>Lihat Selengkapnya</span>
                <i class="bi bi-arrow-right"></i
              ></a>
            </div>
          </div>

          <div
            class="col-lg-5 col-md-6"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="service-box blue">
              <h3>Lainnya</h3>
              <h4>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="150"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                Proyek
              </h4>
              <a href="#" class="read-more"
                ><span>Lihat Selengkapnya</span>
                <i class="bi bi-arrow-right"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Services Section -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <?= $this->endSection() ?>