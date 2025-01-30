<?php
$host = "localhost";
$username = "camelbackresorts";
$password = "abc";
$db_name = "camelbackresortsdb";
$db = mysqli_connect("$host", "$username",
    "$password", "$db_name") or die("cannot connect");
if (mysqli_connect_errno()) {
    echo "Failed to Connect Database: " .
        mysqli_connect_error();
    exit();
}

if(isset($_GET['submit'])){
    $check_reservation = $_GET['reservationId'];

    $sql = "SELECT * reservations WHERE reservationId=$check_reservation";

    $result = $db->query($sql);
    $reservations = mysqli_fetch_assoc($result);

    $checkin = $reservations['checkIn'];
    $checkout = $reservations['checkOut'];
    $firstname = $reservations['first_name'];
    $lastname = $reservations['last_name'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="./customerInfoStyle.css"
          rel="stylesheet" type="text/css">
    <link href="./confirmation.css" rel="stylesheet"
          type="text/css">
    <title>Confirmation</title>
</head>
<body>
<header>
    <section>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-none justify-content-between">
                <a href="index.html">
                    <img src="logo.jpg" alt="Camelback" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div>
                    <ul class="navbar-nav">
                        <li class="nav-item active mr-4">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link" href="aboutUs.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Reservationpage.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
</header>
<div class="title">
    <h1>THANK YOU FOR BOOKING WITH US!</h1>
</div>
<br>
<hr>
<br>
<div class="main">
    <img src="./logo.jpg" alt="Camelback resorts"
         class="logo">
    <div class="booking-information">
        <div class="input">
            <p class="label">CHECK-IN: </p>
            <p class="value"><?php echo date('Y/m/d',
                    strtotime($checkin)); ?></p>
        </div>
        <div class="input">
            <p class="label">CHECK-OUT: </p>
            <p class="value"><?php echo date('Y/m/d',
                    strtotime($checkout)); ?></p>
        </div>
        <div class="input">
            <p class="label">ROOM TYPE: </p>
            <p class="value"><?php echo $type; ?></p>
        </div>
        <div class="input">
            <p class="label"># OF ROOMS: </p>
            <p class="value"><?php echo $rooms; ?></p>
        </div>
        <div class="input">
            <p class="label">NUMBER OF ADULTS: </p>
            <p class="value"><?php echo $adults; ?></p>
        </div>
        <div class="input">
            <p class="label">NUMBER OF CHILDREN: </p>
            <p class="value"><?php echo $children; ?></p>
        </div>
    </div>
    <div class="more-booking-information">
        <div class="more-input">
            <p class="more-label">CONFIRMATION NUMBER:
            </p>
            <p class="more-value"><?php echo
                $reservationId; ?></p>
        </div>
        <div class="more-input">
            <p class="more-label">FIRST NAME: </p>
            <p class="more-value"><?php echo $firstname; ?></p>
        </div>
        <div class="more-input">
            <p class="more-label">LAST NAME: </p>
            <p class="more-value"><?php echo $lastname; ?></p>
        </div>
        <div class="more-input">
            <p class="more-label">EMAIL ADDRESS: </p>
            <p class="more-value"><?php echo $email; ?></p>
        </div>
        <div class="more-input">
            <p class="more-label">ADDRESS: </p>
            <p class="more-value"><?php echo $address;
                ?></p>
        </div>
        <div class="more-input">
            <p class="more-label">STATE: </p>
            <p class="more-value"><?php echo $state;
                ?></p>
        </div>
        <div class="more-input">
            <p class="more-label">CITY: </p>
            <p class="more-value"><?php echo $city;
                ?></p>
        </div>
        <div class="more-input">
            <p class="more-label">ZIP CODE: </p>
            <p class="more-value"><?php echo $zipcode;
                ?></p>
        </div>
        <div class="more-input" style="margin-top:
4em;">
            <h2 class="more-label" style="width:
200px;">TOTAL COST: </h2>
            <h2 class="more-value">$<?php echo $total;
                ?>.00</h2>
        </div>
    </div>
</div>
<br>
<!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-facebook-f"></i
                ></a>
            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-twitter"></i
                ></a>
            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-google"></i
                ></a>
            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-instagram"></i
                ></a>
            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-linkedin-in"></i
                ></a>
            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-github"></i
                ></a>
        </section>
        <!-- Section: Social media -->
        <!-- Section: Form -->
        <section class="">
            <form action="">
                <!--Grid row-->
                <div class="row d-flex justify-content-center">
                    <!--Grid column-->
                    <div class="col-auto">
                        <p class="pt-2">
                            <strong>Sign up for our newsletter</strong>
                        </p>
                    </div>
                    <!--Grid column-->
                    <div class="col-md-5 col-12">
                        <!-- Email input -->
                        <div class="form-outline form-white mb-4">
                            <input type="email" id="form5Example21" class="form-control" />
                            <label class="form-label" for="form5Example21">Email address</label>
                        </div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-auto">
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-outline-light mb-4">
                            Subscribe
                        </button>
                    </div>
                </div>
            </form>
        </section>
        <!-- Section: Text -->
        <section class="mb-4">
            <p>
                Experience Winter in the Poconos with a Getaway to Camelback Resort. Only 90 Min from NYC. Splash at Aquatopia, USA's #1 Indoor Waterpark + Endless Outdoor Adventure. On-site dining options. Plan your getaway. Featured hotels: Specials & Packages, Plan Your Stay.
            </p>
        </section>
    </div>
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white">camelbackresort</a>
    </div>
    <!-- Copyright -->
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
