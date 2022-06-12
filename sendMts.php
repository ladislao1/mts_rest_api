<?php

$curl = curl_init();

$phone = '79110000000';
$text = 'text';
$sender = 'your_sender';

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://omnichannel.mts.ru/http-api/v1/messages',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "messages": [
    {
      "content": {
        "short_text": "'.$text.'"
      },
      "to": [
        {
          "msisdn": "'.$phone.'"
        }
      ],
      "from": {
      "sms_address": "'.$sender.'"
      }
    }
  ]
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Basic xxxxxxxxxxx'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>
