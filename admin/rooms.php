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
$sql = "SELECT * FROM rooms";
$result = $db->query($sql);
$arr_rooms = [];

if($result->num_rows > 0){
    $arr_rooms = $result->fetch_all(MYSQLI_ASSOC);
}
?>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="index/index.php">
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
                Start Bootstrap
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
                <h2 class="card-title">Rooms Details</h2>
                <a class="btn btn-primary float-right" href="rooms_create.php">Add Rooms</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="rooms">
                    <thead>
                    <td>Room ID</td>
                    <td>Room Type</td>
                    <td>Room Price</td>
                    </thead>
                    <tbody>
                    <?php
                    foreach($arr_rooms as $rooms){ ?>
                            <?php
                        $roomsId = $rooms['roomsId'];
                        $type = $rooms['type'];
                        $price = $rooms['price'];
                        ?>
                        <tr>
                            <td><?php echo $rooms['roomsId']?></td>
                            <td><?php echo $rooms['type']?></td>
                            <td><?php echo $rooms['price']?></td>
                            <td>
                                <form action="" method="post">
                                <button type="submit" class="btn btn-primary"><a href="rooms_edit.php?editId=<?php echo $roomsId ?>">Update</a></button>
                                </form>
                            </td>
                            <td><button type="submit" class="btn btn-danger"><a href="rooms_delete.php?deleteId=<?php echo $roomsId ?>">Delete</a></button></td>
                        </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
        </div>
                </div>
            </section>
        </div>
    </main>
</div>
<?php
include('includes/script.php');
include('includes/footer.php')
?>
