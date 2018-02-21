<?php
$access_token = 'PHFldviBJ/qamEIG61IfAzWTEZ9A9LG61yQQ5T+bmJcWGBKPqDFFrSi4oHTjDehhDnZk1uAOLfMmQmhBZUBzmKFrqSypHAJzh7OLd5pcVS5fhh650O1plVRDy762lEnqn+zXwIJNAjXLo57hj3nGsQdB04t89/1O/w1cDnyilFU=';

			$messages = [
				'type' => 'text',
				'text' => 'ทดสอบการส่งข้อความ  Monitor อัตโนมัติ'
			];
			
			$users = 'U469230caba2ef08d36698ad5c9da23a0';

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/multicast';
			$data = [
				'to' => ['U469230caba2ef08d36698ad5c9da23a0','U4254a3c6d2074189c2493d7de48f687a','Uae57c199f38e72f37c56208231ef1e9a'],
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
