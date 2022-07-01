<?php
echo  "Kode Coin  :";
$namacoin = trim(fgets(STDIN));

echo  "\nMata Uang  :";
$matauang = trim(fgets(STDIN));

echo "\nAPI KEY TELEGRAM  :";
$apitele = trim(fgets(STDIN));

echo "\nID TELEGRAM  :";
$idtele = trim(fgets(STDIN));
$clear = shell_exec('clear');
echo $clear;
$asli ="Harga $namacoin Dengan Mata Uang $matauang\n\n";
echo $asli;

awal:
$data  = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=$namacoin&tsyms=$matauang");
     	    $datas = json_decode($data);
            $harga = $datas->$matauang;
$rep =str_replace(".",",","$harga");
$hasil = "Harga ''$namacoin'' Sekarang adalah $rep";
$tele =file_get_contents("https://api.telegram.org/bot$apitele/sendMessage?chat_id=$idtele&text=$hasil");
echo "•";
sleep(300);
goto awal;
