<?php
include 'curl.php';
$init = new RndyTech;
echo
"  
  \33[31;1m  \33[1;33m* \33[0;36mCreator 𝖋𝖆𝖗𝖊𝖑 𝖍𝖔𝖘𝖙𝖎𝖓𝖌                   
  \33[31;1m  \33[1;33m* \33[32;1mPT 𝖋𝖆𝖗𝖊𝖑 𝖍𝖔𝖘𝖙𝖎𝖓𝖌 ?  Yosoka                     
  \33[31;1m  \33[1;33m* \33[0;36mSpam Curl 𝖋𝖆𝖗𝖊𝖑 𝖍𝖔𝖘𝖙𝖎𝖓𝖌                    
  \33[37;1m
   \33[37;1m
  \33[37;1m                                                                                                                                   ";
echo "\n";
$z = 0;
$h = "\e[0;32m";
$p = "\e[1;37m";
sleep(2);
echo "\33[37;1m┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
echo "\33[37;1m┃\n";
echo "\33[37;1m┃--> link nya deck : ";
$website = trim(fgets(STDIN));
echo "\33[37;1m┃--> nama pt 𝖋𝖆𝖗𝖊𝖑 𝖍𝖔𝖘𝖙𝖎𝖓𝖌 siapa ? : ";
$pesan = trim(fgets(STDIN));
echo "\33[37;1m┃--> mau brp res ? : ";
$batas = trim(fgets(STDIN));
echo "\33[37;1m┃\n";
echo "\33[37;1m┃\n";
echo "\33[37;1m┣━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
echo "\33[37;1m┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
echo "\33[37;1m┃\n";
echo "\33[37;1m┃--> Url Anda : $website \n";
echo "\33[37;1m┃--> Ip Location : Tidak Terbaca \n";
echo "\33[37;1m┃--> Status : \33[0;32mUnlimed Send \n";
echo "\33[37;1m┃--> Reason : OK \n";
echo "\33[37;1m┃--> Running Send : $h Yes $p\n";
echo "\33[37;1m┃\n";
echo "\33[37;1m┣━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
echo "\33[37;1m┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
echo "\33[37;1m┃\n";
echo "\33[37;1m┃--> Jasteb Akan Di Mulai ? \33[37;1mY/N : ";
$Jwb = trim(fgets(STDIN));
echo "\33[37;1m┃\n";
echo "\33[37;1m┣━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
sleep(2);
$y = 1;
$msg = "\33[0;36mAutoRessByLimune";
while($y <= $batas)
{
    echo ''.$init->RndySpam($website,$msg);
    if($y == $batas){
    echo "+\n";
    echo "=> \33[0;36m$batas Result Terkirim ® Limuneezz \n";
    echo "+\n";
    echo "\33[37;1m+++++++++++++++++++++++++++++++++++++++++++++++++++\n";
    }
 $y++;
}
?>