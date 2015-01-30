<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>変換結果</title>
</head>
<body>

<h2> 変換結果 </h2>
<?php 

if(isset($_POST)){
	$blockstr = $_POST['block'];

	$url = 'http://interactive.blockdiag.com/image?encoding=base64&src=';
	$url = $url . urlencode(base64_encode($blockstr));

	$contents = file_get_contents($url);

	if(strlen($contents) > 0){
		echo $contents;
	}else{
		echo '<h3>構文エラー!</h3>';
		
	}
}
?>
<br>
<?php 
if(strlen($contents) > 0)
	echo '<a href="'.$url.'"> ダウンロード(SVG) </a>';
?>
</body>
</html>
