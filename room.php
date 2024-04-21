<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel-home</title>
    <link rel="stylesheet" href="css/style.css">
    <?php include_once('include/links.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
 
</head>


<body class="bg-light">

    <?php include_once('include/header.php'); ?>

    <?php
    include_once('include/header.php');
    ?>

    <div class="my-5 px-4 ">
        <h2 class="mt-4 pt-4 mb-4 text-center fw-bold ">OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="me-2">FILTERS</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#filterDropdawn" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filterDropdawn">
                            <form action="room.php" method="get"> 
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 16px;">FACILITIES</h5>
                                    <div class="mb-2">
                                        <input type="checkbox" id="wi" class="form-check-input shadow-none mb-1" name="wi" value="wi">
                                        <label class="form-check-label" for="wi">Wi-Fi</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="air" class="form-check-input shadow-none mb-1" name="air" value="air">
                                        <label class="form-check-label" for="air">Air Conditioning</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="tele" class="form-check-input shadow-none mb-1" name="tele" value="tele">
                                        <label class="form-check-label" for="tele">Television</label>
                                    </div>
                                </div>

                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 16px;">GUEST</h5>
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <label class="form-label" style="font-weight:500;" for="adults">Adults</label>
                                            <input type="number" class="form-control shadow-none" name="adults" id="adults">
                                        </div>
                                        <div>
                                            <label class="form-label" style="font-weight:500;" for="children">Children</label>
                                            <input type="number" class="form-control shadow-none" name="children" id="children">
                                        </div>
                                    </div>
                                </div>

                                <button type="" class="btn btn-primary" onclick="applyFilters()">Apply Filters</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 mb-0" id="room">
                <?php
                if(isset($_GET['wi'])){
                $query = "SELECT * FROM rooms where wi='Wifi'";
                }
                else{
                $query = "SELECT * FROM rooms ";
                }

                $result = mysqli_query($cn, $query);
                while ($chotu = mysqli_fetch_array($result)) {
                    $id = $chotu['id'];
                    $name = $chotu['name'];
                    $area = $chotu['area'];
                    $adult = $chotu['adult'];
                    $children = $chotu['children'];
                    $price = $chotu['price'];
                    $quantity = $chotu['quantity'];
                    $img = $chotu['img'];
                    $bedroom = $chotu['bedroom'];
                    $balcony = $chotu['balcony'];
                    $kitchen = $chotu['kitchen'];
                    $wi = $chotu['wi'];
                    $air = $chotu['air'];
                    $tele = $chotu['tele'];
                    $gey = $chotu['gey'];
                    $spa = $chotu['spa'];
                    $heat = $chotu['heat'];
                    $desc = $chotu['desc'];
                ?>
                    <div class="card mb-2 border-0 shadow">
                        <div class="row g-0 p-3 ">
                            <div class="col-md-5 mb-lg-0   mb-md-0 ">
                                <img src="<?php echo $img ?>" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-md-5 px-lg-3 p-md-3 px-0">
                                <h5 class="mb-3"><?php echo $name ?></h5>
                                <div class="features mb-1">
                                    <h6 class="mb-1"> Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                        2 <?php echo $bedroom ?>
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                        <?php echo $balcony ?>
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                        <!-- <?php echo $kitchen ?> -->
                                    </span>
                                </div>
                                <div class="features mb-1">
                                    <h6 class="mb-1 ">Facilities</h6>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                        <?php echo $wi ?>
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                        <?php echo $spa ?>
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                        <?php echo $air ?>
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                        <?php echo $tele ?>
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                        <?php echo $gey ?>
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                        <?php echo $heat ?>
                                    </span>
                                </div>

                                <div class="Guests">
                                    <h6 class="mb-1 ">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                        <?php echo $adult ?> Adult
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                        <?php echo $children ?> Children
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2  mt-md-0  text-center mt-lg-0  ">
                                <h6 class="mb-2"><?php echo $price ?> per night</h6>
                                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                                <a href="room_details.php?id=<?php echo $id ?>" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            
        </div>
    </div>

    <?php include_once('include/footer.php'); ?>

    <script>
     function applyFilters() {
        // Get selected filter values
        var wiChecked = document.getElementById("wi").checked;
        var wiChecked = document.getElementById("tele").checked;
        var adultsValue = document.getElementById("adults").value;
        var childrenValue = document.getElementById("children").value;
        console.log("Wi-Fi Checked:", wiChecked);
        console.log("Television Checked:",eleChecked);
        console.log("Adults:", adultsValue);
        console.log("Children:", childrenValue);
    }
</script>
</script>
</body>

</html>
