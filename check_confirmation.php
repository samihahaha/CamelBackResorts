<?php
require('database.php');
include('confirmation.php');
$reservationId = $_GET['reservationId'];
if (isset($reservationId)) {
    $stmt = $db->prepare('SELECT * FROM rooms JOIN
reservations ON rooms.roomsId =
reservations.roomsId WHERE
reservationId = ?');
    $stmt->bind_param('s', $reservationId);
    $stmt->execute();
    $result = $stmt->get_result();
    $confirmation = $result->fetch_assoc();
    if (isset($confirmation)) {
        extract($confirmation);
    }
}
?>
