<?php

// RSSの複数対応
const ARR_URL = array(
	"http://takujiro.net/feed/",
	);

// タイトル文字の最小、最大値
const TITLE_MIN_LENGTH = 0;
const TITLE_MAX_LENGTH = 10;

// 本文の最小、最大値
const DES_MIN_LENGTH = 0;
const DES_MAX_LENGTH = 30;

// 切り捨て文字コード
const CODE = "utf-8";

// 改行文字コード
const ARR_LINE = array("\r\n", "\r", "\n");

// 表示処理
const TITLE_ONLY = false;

// 曜日一覧
const WEEK = array( "日","月","火","水","木","金","土" );

// timezone
date_default_timezone_set('Asia/Tokyo');
?>