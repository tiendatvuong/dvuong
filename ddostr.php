<?php
error_reporting(0);
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
//color
$ngblack="\033[40m"; 
$maufulldo= "\e[1;47;31m"; 
$ress="\033[0;32m";
$maufulldo= "\e[1;47;31m";
$res="\033[0m";
$red="\033[1;31m";
$green="\033[1;92m";
$yellow="\033[1;93m";
$white= "\033[1;97m";  
$banner="\r";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$trang="\033[1;97m";
$ngay = date("d-m-Y"); 
$TIME=`date "+%H:%M"`; 
$cuongdz = $do."[".$luc."πΈ".$do."] ".$trang."=> ";
$cuongvip = $do."[".$luc."πΈ".$do."]";
$thuong = $do."[".$luc."πΈ".$do."]".$trang." => ";
$thanhngang = $vang."-------------------------------------------------------------\n";
$ip = file_get_contents('http://kiemtraip.com/raw.php');
date_default_timezone_set("Asia/Ho_Chi_Minh");
$useragent="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36";
$wait = $green."Δα»£i";
$banner = "\033[1;36mββββββββββββββββββββββββββββββββββββββββββββββββββββββββββββββββββββββββ
\033[1;36mβ                                  \033[1;36m   β \033[1;33mCopyright: \033[1;31mtiendat    \033[1;36m  β
\033[1;36mβ \033[1;31mkey: \033[1;36aidkkfkfkffm  \033[1;36m     β
\033[1;36mβ                                  \033[1;36m   β \033[1;33mMomo: \033[1;35m0335102378      \033[1;36m        β
\033[1;36mββββββββββββββββββββββββββββββββββββββββββββββββββββββββββββββββββββββββ
\033[1;32m                     [\033[1;36mTool Ddos ChαΊ₯t LΖ°α»£ng\033[1;32m]
\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
@system('clear');
$string = strlen($banner);
for($i=0; $i<=$string; $i++){
echo $banner[$i];usleep(1000);}

echo $cuongdz.$luc."NhαΊ­p Url: $vang";
$khocookie = (string)trim(fgets(STDIN));

@system('clear');
$string = strlen($banner);
for($i=0; $i<=$string; $i++){
echo $banner[$i];usleep(1000);}

echo $cuongdz.$luc."Γc CHΓ Hα»I HOΓNG KKKK NGUU Hα»€I HΓN DAI KKKK BY TIENDATVUONG KKK DEP CHAI VO LO KKK BY TIENDATVUONG KKKKK K CΓ DDOS ΔΓU EM KKKK Δα»€ MΓ HOΓNG TRI K E KKKK EM αΊ  Tα»¦I BΓIcΓ³ Γc CHΓ Hα»I HOΓNG KKKK NGUU Hα»€I HΓN DAI KKKK BY TIENDATVUONG KKK DEP CHAI VO LO KKK BY TIENDATVUONG KKKKK K CΓ DDOS ΔΓU EM KKKK Δα»€ MΓ HOΓNG TRI K E KKKK EM αΊ  Tα»¦I BΓI";
echo "\n";
