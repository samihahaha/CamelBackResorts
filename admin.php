<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <title>Homepage</title>
    <link href="indexStyle.css" rel="stylesheet"
          type="text/css">
    <style>
        body {
            margin: 0;
            font-family: "Lato", sans-serif;
        }

        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }

        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .sidebar a {float: left;}
            div.content {margin-left: 0;}
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>
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
                            <a class="nav-link" href="ReservationPage.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
</header>
<div class="sidebar">
    <a class="active" href="#home">Home</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
</div>

<div class="content">
    <h2>Responsive Sidebar Example</h2>
    <p>This example use media queries to transform the sidebar to a top navigation bar when the screen size is 700px or less.</p>
    <p>We have also added a media query for screens that are 400px or less, which will vertically stack and center the navigation links.</p>
    <h3>Resize the browser window to see the effect.</h3>
</div>
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