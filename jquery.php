
<!DOCTYPE html>
<html>
<head>
  <title> </title>
</head>
<body>

<script src="jquery.js"></script>


<script>
var form = new FormData();
form.append("tokoid", "14");
form.append("attrib", "foto_nib");
form.append("file", "/D:/Kerja/Foto/mallaptiknas/foto_nib.jpg");

var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://malltik.com/malltik_api/toko/submitdokumen",
  "method": "POST",
  "headers": {
    "X-Client-ID": "web",
    "Authorization": "Bearer O2HeoBVXjCm5i_33lr4h17__htHKpZA_KcKiN8pA3jedINk8FtL4ruFTmgZBzoCe",
    "User-Agent": "PostmanRuntime/7.15.2",
    "Accept": "*/*",
    "Cache-Control": "no-cache",
    "Postman-Token": "78c29900-e44a-43cf-be71-d74e9efe0d4d,6504fe35-7270-45dd-9e77-e2ecc525803d",
    "Host": "malltik.com",
    "Accept-Encoding": "gzip, deflate",
    "Content-Type": "multipart/form-data; boundary=--------------------------891018891026087015271959",
    "Content-Length": "7673",
    "Connection": "keep-alive",
    "cache-control": "no-cache"
  },
  "processData": false,
  "contentType": false,
  "mimeType": "multipart/form-data",
  "data": form
}

$.ajax(settings).done(function (response) {
  console.log(response);
});
</script>
</body>
</html>






