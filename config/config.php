
<!-- indonesia -->
<?php

$url = curl_init();
curl_setopt($url, CURLOPT_URL, 'https://covid19.mathdro.id/api/countries/Indonesia');
curl_setopt($url, CURLOPT_RETURNTRANSFER, 1);
$hasil = curl_exec($url);
curl_close($url);

$hasil = json_decode($hasil, true);

$diketahui =  $hasil['confirmed']['value'];
$sembuh = $hasil['recovered']['value'];
$meninggal = $hasil['deaths']['value'];
$update = $hasil['lastUpdate'];

?>


<!-- world  -->
<?php

$urlw = curl_init();
curl_setopt($urlw, CURLOPT_URL, 'https://covid19.mathdro.id/api');
curl_setopt($urlw, CURLOPT_RETURNTRANSFER, 1);
$hasilw = curl_exec($urlw);
curl_close($urlw);

$hasilw = json_decode($hasilw, true);

$diketahuiw = $hasilw['confirmed']['value'];
$sembuhw = $hasilw['recovered']['value'];
$meninggalw = $hasilw['deaths']['value'];

?>