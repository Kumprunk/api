<?php

$request = new HttpRequest();
$request->setUrl('http://malltik.com/malltik_api/toko/submitdokumen');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'cache-control' => 'no-cache',
  'Connection' => 'keep-alive',
  'Content-Length' => '7673',
  'Content-Type' => 'multipart/form-data; boundary=--------------------------891018891026087015271959',
  'Accept-Encoding' => 'gzip, deflate',
  'Host' => 'malltik.com',
  'Postman-Token' => '78c29900-e44a-43cf-be71-d74e9efe0d4d,cea51ce2-dea7-4faf-9a29-cb0d7971f8d6',
  'Cache-Control' => 'no-cache',
  'Accept' => '*/*',
  'User-Agent' => 'PostmanRuntime/7.15.2',
  'Authorization' => 'Bearer O2HeoBVXjCm5i_33lr4h17__htHKpZA_KcKiN8pA3jedINk8FtL4ruFTmgZBzoCe',
  'X-Client-ID' => 'web',
  'content-type' => 'multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW'
));

$request->setBody('------WebKitFormBoundary7MA4YWxkTrZu0gW
Content-Disposition: form-data; name="tokoid"

14
------WebKitFormBoundary7MA4YWxkTrZu0gW
Content-Disposition: form-data; name="attrib"

foto_nib
------WebKitFormBoundary7MA4YWxkTrZu0gW
Content-Disposition: form-data; name="file"; filename="foto_nib.jpg"
Content-Type: image/jpeg


------WebKitFormBoundary7MA4YWxkTrZu0gW--');

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}