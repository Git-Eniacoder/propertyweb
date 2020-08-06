<?php
// Account details
$apiKey = urlencode("+tnkyt2mkYg-5bbCwuqI4TyLPnUfMMCo9SQfPf4Klh");
// Message details
$numbers = urlencode("8949715939");
$sender = urlencode("TXTLCL");
$message = rawurlencode("This is your message");
 
 
// Prepare data for POST request
$data = array("apikey" => $apiKey, "numbers" => $numbers, "sender" => $sender, "message" => $message);
// Send the POST request with cURL
$ch = curl_init("https://api.textlocal.in/send/");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
// Process your response here
echo $response;
?>