<?php
/*解析音频文件*/
header("Content-Type: text/html; charset=UTF-8");
include_once "../getID3-1.9.10/getid3/getid3.php";
if(isset($_GET['musicname']) && $_GET['musicname']){
	$musicname = $_GET['musicname'];
	$filename = "../audio/".$musicname;
	$getID3 = new getID3;
	$audio = $getID3->analyze($filename);
	$a = $audio['tags']['id3v2'];
	$b = $audio['playtime_string'];
	$arr = ['time'=>$b];
	array_push($a,$arr);
	echo json_encode($a,JSON_UNESCAPED_SLASHES);
}else{
	echo -1;
}
?>