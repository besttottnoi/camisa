<?php
$access_token = 'PHFldviBJ/qamEIG61IfAzWTEZ9A9LG61yQQ5T+bmJcWGBKPqDFFrSi4oHTjDehhDnZk1uAOLfMmQmhBZUBzmKFrqSypHAJzh7OLd5pcVS5fhh650O1plVRDy762lEnqn+zXwIJNAjXLo57hj3nGsQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;