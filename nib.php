<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost/api/tes.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"tokoid\"\r\n\r\n14\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"attrib\"\r\n\r\nfoto_nib\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"file\"; filename=\"foto_nib.jpg\"\r\nContent-Type: image/jpeg\r\n\r\n\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Authorization: Bearer O2HeoBVXjCm5i_33lr4h17__htHKpZA_KcKiN8pA3jedINk8FtL4ruFTmgZBzoCe",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Length: 7673",
    "Content-Type: multipart/form-data; boundary=--------------------------145266582048122053345371",
    "Host: malltik.com",
    "Postman-Token: 525bedd7-949e-4c5e-9aa7-ea4f7aeaaab1,e2d8a3cd-9fff-4c16-a505-27e2776146c8",
    "User-Agent: PostmanRuntime/7.15.2",
    "X-Client-ID: web",
    "cache-control: no-cache",
    "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}