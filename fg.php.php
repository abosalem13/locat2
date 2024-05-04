<?php
$latitude = $_GET['lat'];
$longitude = $_GET['long'];

$to ="imobilejordan@gmail.com";
$subject = "Location Information";
$message = "Latitude: $latitude, Longitude: $longitude";
$headers = "From:imobilejordan@gmail.com";

mail($to, $subject, $message, $headers);
?>
