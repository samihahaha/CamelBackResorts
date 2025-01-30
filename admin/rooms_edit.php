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
include('includes/header.php');
include('includes/navbar.php');

if (isset($_GET['editId'])) {
    $EditId = $_GET['editId'];

//    echo $id;

    $sql = "SELECT * FROM rooms WHERE roomsId='$EditId'";
    $result = $db->query($sql);
    $rooms = mysqli_fetch_assoc($result);
//
//
//    if ($result->num_rows > 0) {
//        $arr_rooms = $result->fetch_all(MYSQLI_ASSOC);
//    }
//
    $roomsId = $rooms['roomsId'];
    $type = $rooms['type'];
    $price = $rooms['price'];
}
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
                                <h2 class="card-title">Update Rooms Details</h2>
                            </div>
                            <div class="card-body">
                                <form action="rooms_update.php?editId=<?php echo $roomsId ?>" method="post">
                                <div class="form-group mb-3">
                                    <div class="form-group row">
                                        <label for="roomsId" class="col-sm-2 col-form-label">Room ID</label>
                                        <input type="text" class="col-sm-10" name="roomsId" placeholder="<?php echo $roomsId ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group row mb-3">
                                        <label for="type"class="col-sm-2 col-form-label">Room Type</label>
                                        <input type="text" name="type"class="col-sm-10" placeholder="<?php echo $type ?>">
                                    </div>
                                </div>
                                    <div class="form-group">
                                    <div class="form-group row mb-3">
                                        <label for="price"class="col-sm-2 col-form-label">Price</label>
                                        <input type="text" name="price"class="col-sm-10" placeholder="<?php echo $price ?>">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary" type="submit" name="submit">Update</button>
                                </div>
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