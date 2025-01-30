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
$sql = "SELECT * FROM reservations";
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
                    <a class="nav-link" href="index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="admin/rooms.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Rooms
                    </a>
                    <a class="nav-link" href="admin/reservations.php">
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
            <div class="table-responsive">
                <table class="table table-bordered" id="rooms">
                    <thead>
                    <td>Room ID</td>
                    <td>Room Type</td>
                    <td>Room Price</td>
                    </thead>
                    <tbody>
                    <?php
                    foreach($arr_rooms as $rooms){ ?>
                        <tr>
                            <td><?php echo $rooms['roomsId']?></td>
                            <td><?php echo $rooms['type']?></td>
                            <td><?php echo $rooms['price']?></td>
                            <button>Update</button>
                            <button>Delete</button>
                        </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>
        </main>
    </div>
    <script>
        jQuery(document).ready(function($) {
            $('#rooms').DataTable();
        } );
    </script>
    <?php
    include('includes/script.php');
    include('includes/footer.php')
    ?>
