<?php
/*获取文件
 * */	
header("Content-Type: text/html; charset=UTF-8");
$myflie = scandir("../audio");
$myflie = array_splice($myflie,1);
$myflie = array_splice($myflie,1);
for($i=0;$i<count($myflie);$i++){
	$myflie[$i]=iconv('gbk', 'utf-8',$myflie[$i]) ;
}
echo json_encode($myflie,JSON_UNESCAPED_SLASHES);
?>