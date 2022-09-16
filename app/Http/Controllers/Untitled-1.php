<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://qrickit-qr-code-qreator.p.rapidapi.com/api/qrickit.php?d=YourData",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: qrickit-qr-code-qreator.p.rapidapi.com",
		"X-RapidAPI-Key: e157abf57cmsh4da2c2f0c047861p1e119ajsnd4e0671bd1fd"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}