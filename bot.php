<?php

error_reporting(0);
system("clear");
const
title = "autobitco",
versi = "1.0",
status = "online",
host = "https://autobitco.in/",
q = "\033[01;38;5;208m",b = "\033[1;31m",c = "\033[0;37m",h = "\033[1;34m",n="\n";


function curl($url, $ua, $data = null) {$ch = curl_init();curl_setopt_array($ch, array(CURLOPT_URL => $url,CURLOPT_FOLLOWLOCATION => 1,));if ($data) {curl_setopt_array($ch, array(CURLOPT_POST => 1,CURLOPT_POSTFIELDS => $data,));}curl_setopt_array($ch, array(CURLOPT_HTTPHEADER => $ua,CURLOPT_SSL_VERIFYPEER => 1,CURLOPT_RETURNTRANSFER => 1,CURLOPT_ENCODING => 'gzip',));$run = curl_exec($ch);curl_close($ch);return $run;}



function na()
{
	print c . "──────────────────────────────────────────────────────────────────────" ."\n";
}


function Tmr($tmr){$timr=time()+$tmr; while(true): print "\r                         \r"; $res=$timr-time(); if($res < 1){break;} 
print "\033[0;37m PLEASE WAITING : \033[1;34m".date('i:s',$res)." ";sleep(1); endwhile;}



function Simpan($n){if(file_exists($n)) {$d = file_get_contents($n);}else{$d = readline(c." ".$n.q." : ".h.n);print n;file_put_contents($n,$d);}return $d;}



function Slow($msg){$slow = str_split($msg);foreach( $slow as $slowmo ){print $slowmo; usleep(700);}}

function h(){
	$h = [
	"cookie: ".simpan("Cookie"),
	"user-agent: ".simpan("User_Agent")
	];
	return $h;
}
function token(){
	$r = curl(host.'dashboard/claim/auto',h());
	$bal=explode('<span>',explode('<p class="amount">',$r)[1])[0];
	return $bal;
}

cookie:
simpan("Cookie");
simpan("User_Agent");
system("clear");
print na();
$msg= h . "████████╗██████╗  ██████╗ ███╗   ██╗".q."   𝙱𝙴 𝙷𝙰𝙿𝙿𝚈 𝙰𝙽𝙳 𝚁𝙴𝙻𝙰𝚇𝙴𝙳 𝙻𝙸𝙵𝙴 𝙸𝚂 𝚂𝙷𝙾𝚁𝚃".n.
$msg= h . "╚══██╔══╝██╔══██╗██╔═══██╗████╗  ██║".h."           𝚅𝙸𝙲𝚃𝙾𝚁𝚈 𝚃𝙾 𝚁𝚄𝚂𝚂𝙸𝙰".n.
$msg= h . "   ██║   ██████╔╝██║   ██║██╔██╗ ██║".c."   𝙲𝚁𝙴𝙰𝚃𝙾𝚁 : 𝚃𝚁𝙾𝙽 𝙾𝙵 𝚂𝚈𝚁𝙸𝙰 ".$Yellow2." < 𝙽𝙰𝚂𝙷𝙰𝚃 >".n.
$msg= c. "   ██║   ██╔══██╗██║   ██║██║╚██╗██║".c."   𝚃𝙴𝙻𝙴𝙶𝚁𝙰𝙼: https://t.me/HELP_TERMUX  ".n.
$msg= c. "   ██║   ██║  ██║╚██████╔╝██║ ╚████║".c."   𝚂𝚄𝙿𝙿𝙾𝚁𝚃 :X____X️       ".n.
$msg= c. "   ╚═╝   ╚═╝  ╚═╝ ╚═════╝ ╚═╝  ╚═══╝".c."   𝚂𝙲𝚁𝙸𝙿𝚃  :nashat
         ".n;
$slow = slow($msg);
print na();

//sleep(3);

/*$api = json_decode(file_get_contents("http://ip-api.com/json"),true);
$timezone=$api["timezone"];
$country=$api["country"];
$ip=$api["query"];
date_default_timezone_set("$timezone");


print c;


print" \033[107m \033[1;90mDATE \033[0m ";


print.h. date('D, d-m-Y');


print"                             \033[107m \033[1;90mTime \033[0m  ".h .date('H:i:s')."\n";
*/
sleep(1);
system("xdg-open https://t.me/HELP_TERMUX");
sleep(3);





$r = curl(host."dashboard",h());
$user = explode('</p>',explode('<p class="username">',$r)[1])[0];
if(!$user){
	unlink("Cookie");
	goto cookie;
}
print c." USERNAME ".b.": ".h.$user.n;
print c." TOKEN    ".b.": ".h.token().n;
print na();


while(true){
	$r = curl(host.'dashboard/claim/auto/start',h());
	if(preg_match('/Cloudflare/',$r)){
		print b." CLOUDFLARE DETECT".n;
		print na();
		unlink("Cookie");
		goto cookie;
	}
	$warn=explode('</p>',explode('<p class="warning">',$r)[1])[0];
	if($warn){
		if(preg_match('/insufficient FCT token balance/',$r)){
			$warn = str_replace('! ',"!\n",$warn);
			print b.$warn.n;
			
			
			print na();
exit;
		}
		if(preg_match('/Please wait until time is up!/',$r)){
			$warn = str_replace('! ',"!\n",$warn);
			print b.$warn.n;
			print na();
		}
	}
	preg_match_all('#<p class="message"><i class="fas fa-check green"></i>(.*?)</p>#is',$r,$has);
	if($has[1]){
		for($i=0;$i<count($has[1]);$i++){
			
			
			print c." ".$has[1][$i].n;
		}
		
		print na();
		
		print c." TOKEN    : ".h.token().n;
		
		
		
		print na();
	}
	$r = curl(host.'dashboard/claim/auto/start',h());
	$tm = trim(strip_tags(explode('</span>',explode('Next payout in',$r)[1])[0]));
	if($tm){
		$minut=explode('m',$tm);
		if(strpos($minut[0],'s')==''){
			$tmr=$minut[0]*60;
			if($minut[1]){
				$tmr=$tmr+trim(str_replace('s','',$minut[1]));
			}
			if($tmr){
				tmr($tmr);
			}
		}else{
			$tmr=trim(str_replace('s','',$minut[0]));
			if($tmr){
				tmr($tmr);
			}
		}
	}
}

