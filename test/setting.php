<?php
// 管理者のパスワード。MD5形式へ変更
define('ADMIN_PASSWORD', 'b9b7c289a0e002654a62ef568cc9314c');
// 板設置ディレクトリ
define('DEPLOY_DIR','/var/www/html/bbs/');
// コピー元板ディレクトリ
define('ORG_BBS_DIR','bbs');
// 共通処理の移動、後々別ファイルに切り分けた方がいいかもしれない
function PrintError($str){
	header("Cache-Control: no-cache");
	header("Content-type: text/html; charset=shift_jis");

	print "<html><!-- 2ch_X:error --><head><title>ＥＲＲＯＲ！</title>\n</head>";
	print "<body><b>ＥＲＲＯＲ：$str</b>\n";
	print "<br><a href=\"javascript:history.back()\">戻る</a></body></html>";

	exit;
}

function PrintSucess($str){
	header("Cache-Control: no-cache");
	header("Content-type: text/html; charset=shift_jis");

	print "<html><!-- 2ch_X:error --><head><title>ＳＵＣＥＳＳ！</title>\n</head>";
	print "<body><b>ＳＵＣＥＳＳ：$str</b>\n";
	print "<br><a href=\"javascript:history.back()\">戻る</a></body></html>";

	exit;
}
