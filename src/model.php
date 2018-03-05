<?php
require_once "./Feed.php";
require_once "./Service.php";
require_once "./config.php";

$feed = new Feed;
$service = new Service;
$title = array();
$pubDate = array();
$description = array();

// 複数のrssに対応
foreach (ARR_URL as $url) {
	try {
		$rss = $feed->loadRss( $url );	

		foreach( $rss->item as $item ){
			// タイトル
			$title = array_merge($title, array($service->createTitle($item->title)));
			// タイトル表示対応
			if(!TITLE_ONLY){
				// 発行日
				$pubDate = array_merge(
						$pubDate, array($service->createPubDate($item->pubDate)));
				// 本文
				$description = array_merge(
					$description, array(
						$service->createDescription($item->description)));
			}
		}
	} catch (FeedException $e) {
		throw new FeedException("URLが間違っている可能性があります。: 【 ".$url." 】");
	} catch (Exception $e) {
		throw new Exception("RSS取得中にエラーが起きました。: 【 ".$url." 】");
	}
}
?>