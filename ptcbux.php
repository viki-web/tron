?><?php
error_reporting(0).
$Red2 ="\033[1;31m";    
$Blue2 ="\033[1;34m";   
$White ="\033[0;37m";
$Oren = "\033[01;38;5;208m";
$na =" \033[107m \033[1;90m1 \033[0m";
$na2 =" \033[107m \033[1;90m2 \033[0m";
$na3 =" \033[107m \033[1;90m3 \033[0m";
$na4 =" \033[107m \033[1;90m 4  \033[0m";
$na5 =" \033[107m \033[1;90m• \033[0m";
$nas =" \033[107m \033[1;90m✔️ \033[0m";
$green="\033[1;32m";
$n = "\n"; 
$yellow2="\033[1;33m";

function Slow($msg){
      $slow = str_split($msg);
      foreach( $slow as $slowmo ){ 
        echo $slowmo; 
        usleep(555);
      }
    }

system("clear");
echo $White . "──────────────────────────────────────────────────────────────────────\n";

$msg= $Blue2 . "                  ████████╗██████╗  ██████╗ ███╗   ██╗".$n.
$msg= $Blue2 . "                  ╚══██╔══╝██╔══██╗██╔═══██╗████╗  ██║".$n.
$msg= $Blue2 . "                     ██║   ██████╔╝██║   ██║██╔██╗ ██║".$n.
$msg= $White. "                     ██║   ██╔══██╗██║   ██║██║╚██╗██║".$n.
$msg= $White. "                     ██║   ██║  ██║╚██████╔╝██║ ╚████║".$n.
$msg= $White. "                     ╚═╝   ╚═╝  ╚═╝ ╚═════╝ ╚═╝  ╚═══╝".$n;
$slow = slow($msg);

echo $White . "──────────────────────────────────────────────────────────────────────\n";
$msg=$White."                     𝙲𝚁𝙴𝙰𝚃𝙾𝚁 : ".$Red2."𝚃𝚁𝙾𝙽 𝙾𝙵 𝚂𝚈𝚁𝙸𝙰 ".$yellow2." < 𝙽𝙰𝚂𝙷𝙰𝚃 >".$n.
$msg=$White."                     𝚃𝙴𝙻𝙴𝙶𝚁𝙰𝙼: ".$green."https://t.me/HELP_TERMUX  ".$n.
$msg=$White."                     SERVER  : ".$Red2."OFF       ".$n.
$msg=$White."                     𝚂𝙲𝚁𝙸𝙿𝚃  : ".$yellow2."PTCBUX         ".$n;
$slow = slow($msg);
$api = json_decode(file_get_contents("http://ip-api.com/json"),true);
$timezone=$api["timezone"];
$country=$api["country"];
$ip=$api["query"];
date_default_timezone_set("$timezone");


echo $White;


echo"                    \033[0;37m DATE    : ".$Blue2. date('D, d-m-Y');



echo "\n";
echo $White . "──────────────────────────────────────────────────────────────────────\n";
$msg=$na5." ".$White." NOTE  ".$Red2." THIS SCRIPT IS VALID FOR FOUR Days Only Free Of Charge ".$n;
$slow = slow($msg);
echo $White . "──────────────────────────────────────────────────────────────────────\n";


sleep(1);
system("xdg-open https://t.me/HELP_TERMUX");
sleep(3);

