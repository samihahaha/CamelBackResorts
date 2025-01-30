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

if(isset($_POST['submit'])){
    $type = $_POST['type'];
    $price = $_POST['price'];

    $sql = "INSERT INTO rooms (type,price)
            VALUES ($type,$price)";
    $result = $db->query($sql);
}
include('includes/header.php');
include('includes/navbar.php');
?>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="rooms.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Rooms
                    </a>
                    <a class="nav-link" href="reservations.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Reservations
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                CamelBack Resorts
            </div>
        </nav>
    </div>

    <div id="layoutSidenav_content">
        <main>
            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Add New Room</h2>
                            </div>
                            <div class="card-body">
                                <form action="rooms_insert.php" method="post">
                                    <div class="form-group col-md-6">
                                        <label for="roomsId">Room ID</label>
                                        <input type="text" name="roomsId" placeholder="Enter Room Id">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="type">Room Type</label>
                                        <input type="text" name="type" placeholder="Enter Room Type">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="price">Price</label>
                                        <input type="text" name="price" placeholder="Enter the price for room">
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
</div>
<?php
include('includes/script.php');
include('includes/footer.php');
?>