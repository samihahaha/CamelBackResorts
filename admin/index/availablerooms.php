<?php
require 'database.php';
$contentType = isset($_SERVER["CONTENT_TYPE"]) ?
    trim($_SERVER["CONTENT_TYPE"]) : '';
if ($contentType === "application/json") {
//Receive the RAW post data.
    $content =
        trim(file_get_contents("php://input"));
    $decoded = json_decode($content, true);
    $checkInDate = $decoded['checkInDate'];
    $checkOutDate = $decoded['checkOutDate'];
    $type = $decoded['type'];
    if ($type = 'double') {
        $type = 'Double Queen';
    }
    $stmt = $db->prepare('SELECT *, rooms.roomsId
FROM rooms
LEFT JOIN reservations ON rooms.roomsId =
reservations.roomsId
WHERE type = ? ORDER BY rooms.roomsId');
    $stmt->bind_param('s', $type);
    $stmt->execute();
    $result = $stmt->get_result();
    $no_of_rooms = 0;
    while ($row = $result->fetch_assoc()) {
        if (isset($row['checkIn']) && $row['checkIn'] >
            $checkInDate) {
            $no_of_rooms -= $row['number_of_rooms'];
        } else if (isset($row['checkOut']) &&
            $row['checkOut'] > $checkOutDate) {
            $no_of_rooms -= $row['number_of_rooms'];
        } else {
            $no_of_rooms++;
        }
    }
    echo json_encode($no_of_rooms);
}