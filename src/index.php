<!DOCTYPE html>
<html lang = “ja”>
<head>
<meta charset = “UFT-8”>
<title>RSS取得課題</title>
</head>
<body>
<?php
require_once "./model.php";
require_once "./viewMessage.php";

for ($i = 0; $i < count($title); $i++) {
	
	if(TITLE_ONLY){
		// タイトル
		echo showTitle($title[$i]);
	} else {
		// タイトル
		echo showTitle($title[$i]);
		// 発行日
		echo showPubDate($pubDate[$i]);
		// 本文
		echo showDescription($description[$i]);
	}
}

?>
</body>
</html>