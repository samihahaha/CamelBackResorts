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
        $rooms = $_POST['roomsId'];
        $type = $_POST['type'];
        $price = $_POST['price'];

        $editId = $_GET['editId'];


        $sql = "UPDATE rooms set roomsId='$rooms',price='$price'  WHERE roomsId='$editId'";
        $result = $db->query($sql);

        if($result){
            header('location:rooms.php');
        }
    }

?>