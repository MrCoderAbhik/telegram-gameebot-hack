<html><head>
<title>GAME HACK | LegitNoobs</title>
<meta name="viewport" content="width=device-width">
<link href="https://fonts.googleapis.com/css?family=Allura|Rancho|Mr+Dafoe|Nothing+You+Could+Do|Oleo+Script|Pinyon+Script|Yatra+One|Jacques+Francois+Shadow" rel="stylesheet">
<link href="style2.css" rel="stylesheet">

<link href="style.css" rel="stylesheet">
</head>
<body style='font-family: Yatra One;'>

<?php
function abhik($string, $start, $end) {
	$str = explode($start, $string);
	$str = explode($end, $str[1]);
	return $str[0];
}
error_reporting(0);

$number= $_REQUEST['number'];
$pwd= $_REQUEST['pwd'];

if(isset($number))

{
	//https://tbot.xyz/lumber/#eyJ1Ijo5MDc4MjM1MjgsIm4iOiLhtI3KgC7htIvhtIsgIiwiZyI6Ikx1bWJlckphY2siLCJjaSI6Ii04NTAyMjE4MDkxNTM0NTQ4NDY2IiwiaSI6IkJRQUFBT3FQQVFBcnJxd2NxdTUwbHEyOUQ5VSJ9MDFmNWFlNTlhYTVkYTQ0MDFjYjQ5OTBlMTEyMzhhY2I=&tgShareScoreUrl=tgb%3A%2F%2Fshare_game_score%3Fhash%3DmWyHmMvogExjYsQfGxrB
	$game = abhik($number,'tbot.xyz/','/#');
	$auth = abhik($number,'#','&tgShareScoreUrl');
$url1="https://tbot.xyz/api/setScore";

$data1="data=$auth&score=$pwd";

$headers1 = ['Host: tbot.xyz','Connection: keep-alive','Content-Length: '.strlen($data1).'
','Save-Data: on
','User-Agent: Dalvik/2.1.0 (Linux; U; Android 6.0.1; Redmi Note 3 MIUI/V10.2.1.0.MHOMIXM)','Content-Type: text/plain;charset=UTF-8
','Accept: */*
','Origin: https://tbot.xyz
','Sec-Fetch-Site: same-origin
','Sec-Fetch-Mode: cors
','Sec-Fetch-Dest: empty
','Referer: https://tbot.xyz/'.$game.'/
','Accept-Encoding: gzip, deflate, br
','Accept-Language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7'];
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,$url1);
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);
$one=curl_exec($ch);


$raw1=json_decode($one,1);
echo '<br><br><br><div class="menu"><center><level><font color="forestgreen"><b>GameName :</b></font></level><br>';
echo '<center><level><font color="#FF4C00"><font size="+5"><b>'.$game.'</b></font></level><br>';
echo $one;
} 

        

if(!isset($number)){
echo '<br><br><br><div class="menu"><center><level><font color="forestgreen"><b>Gamebot hack</b></font></level><br><form method="get" action="tggame.php">
    <input type="text" name="number" placeholder="Enter Url..">
    <input type="text" name="pwd" placeholder="Enter Score.."><br>
   <input type="submit" value="HACK" name="HACK">
  </form>
  </center>
</div>';}

?>

</body>
</html>