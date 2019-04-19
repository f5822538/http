<?php
header('Content-type:text/html;charset=utf-8');
echo '項目入口文件';

// 引入Composer自動加載文件
require_once __DIR__ .'/vendor/autoload.php';
// 使用http類的請求方法,查看返回字符串長度
var_dump(strlen(f5822538\http\Http::requestByGet('http://github.com')));