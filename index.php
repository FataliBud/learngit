<?php 

/*
 * $token  //用户的token
 * $method //GET或POST
 * $url url
 * $arrContent //请求参数(包括GET和POST的所有参数，不含计算的signature)
 * return $sign string
 **/
// http://mall.fenfenriji.com/act/checkin/2.0?timestamp=1413529763&expires=1413616163&v=1&uid=4040400
/*function genSign($token, $method, $url, $arrContent) {
	$gather = $method.$url;
	ksort($arrContent);
	foreach($arrContent as $key => $value) {
		$gather .= $key.'='.$value;
	}
	$gather .= $token;
	echo "str:$gather ";
	$sign = md5(urlencode($gather));
	return $sign;
}

$token = '8777F555E8C16715EBA5C85341684C58';//此处替换为用户的token
$method = 'GET';
$url = 'http://mall.fenfenriji.com/act/checkin/2.0';
$timestamp = time();
//$timestamp = 1313293563; //测试代码
$arrContent = array(
	'uid'=>'4040400',
	'timestamp'=>$timestamp,
	'expires'=>$timestamp+3600*24,
);
$sign = genSign($token , $method, $url, $arrContent);
echo "sign:$sign";


$a1=array("a","b","c","d");
$a2=array("Cat","Dog","Horse","Cow");
print_r(array_combine($a1,$a2));
 */
function more($arr){
	$arr0 = array();
	$arr0 = array_count_values($arr);
	$arr0 = array_flip($arr0);
	$str="";
	foreach ($arr0 as $k => $v){
		if(1 != $k)
			$str = $v ;
	}
	return $str;
}
$a1=array("a","b","c","d","a","a");
print_r(more($a1));
?>