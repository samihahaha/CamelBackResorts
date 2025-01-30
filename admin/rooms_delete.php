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
if(isset($_GET['deleteId'])){
    $id = $_GET['deleteId'];
//    echo $id;

    $sql = "DELETE FROM rooms WHERE roomsId = $id";

//    echo $sql['roomsId'];
    $result = $db->query($sql);
    if($result) {
        header('location:rooms.php');
    }
}

?>