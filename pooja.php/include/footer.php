<div class="container-fluid bg-white mt-5">
    <div class="row">
      <div class="col-lg-4 p-4">
        <h3 class="fw-bold fs-3 mb-2">HOTEL</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis illo dolorem in natus cum, esse laborum eos
          vitae ut cumque!
        </p>

      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Links</h5>
        <a href="../index.php" class="d-inline-block mb-2  text-dark" style="text-decoration: none;">Home</a><br>
        <a href="../rooms.php" class="d-inline-block mb-2  text-dark" style="text-decoration: none;">Rooms</a><br>
        <a href="../facilities.php" class="d-inline-block mb-2  text-dark" style="text-decoration: none;">Facilities</a><br>
        <a href="../contact.php" class="d-inline-block mb-2  text-dark" style="text-decoration: none;">Contect</a><br>
        <a href="../about.php" class="d-inline-block mb-2 text-dark" style="text-decoration: none;">About</a>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Follow Us</h5>
        <a href="" class="d-inline-block mb-2 text-dark " style="text-decoration: none;"><i class="bi bi-twitter me-1 ">
            Twitter</i></a><br>
        <a href="" class="d-inline-block mb-2 text-dark " style="text-decoration: none;"><i
            class="bi bi-facebook me-1 "> Facebook </i></a><br>
        <a href="" class="d-inline-block mb-2 text-dark " style="text-decoration: none;"><i
            class="bi bi-instagram me-1 "> Instagram</i></a>
      </div>
    </div>
  </div>
  <h6 class="text-center bg-dark text-white pe-3 m-0 ">Designed and Doveloped bt Hotel</h6>

   <!-- bootstap js -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <!-- swiper js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  </script>
  <script>
    var swiper = new Swiper(".swiper-testimonals", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },


      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        }
      }

    });
  </script>
