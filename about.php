<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel-home</title>
    <link rel="stylesheet" href="css/style.css">
    <?php
  include_once('include/links.php');
  ?>


    <!-- swiper cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .custom-bg {
            border: 1px solid rgb(115, 138, 177);
            background: rgb(115, 138, 177);
        }

        .custom-bg:hover {
            background: rgb(85, 95, 111);
        }

        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;

        }

        @media screen and(max-width:575px) {
            .availability-form {
                margin-top: 0px;
                padding: 0px;

            }
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .h-line {
            width: 170px;
            margin: 0 auto;
            height: 1.7px;
        }

        .box {
            border-top-color: rgb(85, 95, 111) !important;
        }
    </style>
</head>


<body class="bg-light">

    <?php
  include_once('include/header.php');
  ?>

    <div class="my-5 px-4 ">
        <h2 class="mt-4 pt-4 mb-4 text-center fw-bold ">About Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ipsum dolorem eius iusto,<br> assumenda quam
            recusandae autem repellendus numquam et.
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4  order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo, sapiente sunt laudantium
                    reprehenderit voluptatum excepturi exercitationem, possimus blanditiis nam vero aliquam fugit hic in
                    architecto amet. Suscipit amet explicabo eos.
                </p>
            </div>

            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-1 order-1">
                <img src="images/about/1.png" alt="" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5 ">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/hotel.png" width="70px">
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/cus.png" width="75px">
                    <h4 class="mt-3" style="  font-size: 22px;">200+ CUSTOMERS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/review.png" width="70px">
                    <h4 class="mt-3">150+ REVIEWS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/staff.jpeg" width="70px">
                    <h4 class="mt-3">200+ STAFFS</h4>
                </div>
            </div>
        </div>
    </div>


    <h3 class="my-5 fw-bold text-center ">Management Team</h3>
    <div class="container px-4">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/tem.jpeg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/tem.jpeg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/tem.jpeg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/tem.jpeg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/tem.jpeg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <?php
 include_once('include/footer.php');
 ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
           spaceBetween:40,
           
            breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 3,
        }
      }

        });
    </script>


</body>

</html>