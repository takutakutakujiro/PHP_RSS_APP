<?php

class Service {

	public static function createTitle($val){
		$title = "---タイトル無し---";
		if($val != ""){
			$title = mb_substr($val, TITLE_MIN_LENGTH , TITLE_MAX_LENGTH, CODE);
		}
		return $title;
	}

	public static function createDescription($val){
		$description = "---本文無し---";
		if($val != ""){
			$description = mb_substr(
								str_replace( ARR_LINE, '', strip_tags($val)),
								DES_MIN_LENGTH,
								DES_MAX_LENGTH,
								CODE
							);
		}
		return $description;
	}

	public static function createPubDate($val){
		$day = "---日付無し---";
		if($val != ""){
			$week = WEEK[(int)date("w", strtotime($val))];
			$day = date("Y年m月d日(".$week.") H:i:s", strtotime($val));
		}
		return $day;
	}

}
?>