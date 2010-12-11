<?php
if(isset($_GET['q']) && $_GET['q']=='phpinfo'){	phpinfo();exit;}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>My PHPINFO</title>
<style type="text/css">
* {font-family: Tahoma, "Microsoft Yahei", Arial; }
body{text-align: center; margin: 0 auto; padding: 0; background-color:#FFFFFF;font-size:12px;font-family:Tahoma, Arial}
#page {width: 920px; padding: 0 20px; margin: 0 auto; text-align: left;}
table{clear:both;padding: 0; margin: 0 0 10px;border-collapse:collapse; border-spacing: 0;}
th{padding: 3px 6px; font-weight:bold;background:#D7E9FB;color:#000;}
tr{padding: 0; background:#FFF;}
td{padding: 3px 6px; border:1px solid #D7E9FB;}
#header{
	float:right;
	clear:both;
}
#welcome{
	float:left;
	clear:both;
}
</style>
</head>

<body>
<?php 
define('NAME','MyPHPINFO');
define('V','1.0');
$en=array(
	'SERVER_INFO'=>'Server Informartion',
	'SERVER_SOFTWARE'=>'Server Software',
	'SERVER_FREESPACE'=>'Disk Free Space',
	'SERVER_PORT'=>'Server Port',
	'SERVER_DOCUMENTROOT'=>'Document Root',
	'SERVER_ZENDOPTIMIZER_SUPPORT'=>'Zend Optimizer',
	'LOADEDEXTENSIONS'=>'Loaded Extensions',
	'PHPINFO'=>'PHP Information',
	'PHP_INFO'=>'phpinfo()',
	'PHP_VERSION'=>'PHP Version',
	'PHP_MEMORY_LIMIT'=>'Memory Limit',
	'PHP_SAFEMODE'=>'Safe Mode',
	'PHP_UPLOAD_MAX_FILESIZE'=>'Upload Max Filesize',
	'PHP_MAX_EXECUTION_TIME'=>'Max Execution Time',
	'PHP_DISPLAY_ERRORS'=>'Display Errors',
	'PHP_REGISTER_GLOBALS'=>'Register Globals',
	'PHP_MAGIC_QUOTES_GPC'=>'Magic Quotes GPC',
	'PHP_MAGIC_QUOTES_RUNTIME'=>'Magic Quotes Runtime',
	'PHP_ALLOW_URL_FOPEN'=>'Allow URL Fopen',
	'PHP_DISABLE_FUNCTIONS'=>'Disable Funtions',

	'MODULES'=>'Modules',
	'SESSION_SUPPORT'=>'Session Support',
	'GD_SUPPORT'=>'gd Support',
	'XML_SUPPORT'=>'XML Support',
	'ZLIB_SUPPORT'=>'Zlib Support',
	'IAMP_SUPPORT'=>'IAMP Support',
	'PREG_SUPPORT'=>'PREG Support',
	'ICONV_SUPPORT'=>'iconv Support',
	'MBSTRING_SUPPORT'=>'mbstring Support',
	'LDAP_SUPPORT'=>'LDAP Support',
	'HASH_SUPPORT'=>'hash Support',
	'MCRYPT_SUPPORT'=>'mcrypt Support',

	'DB_SUPPORT'=>'Database Support',
	'SQLITE_SUPPORT'=>'SQLite Support',
	'MYSQL_SUPPORT'=>'MySQL Support',

	'WELCOME'=>"Thank you for using %s Version: %s" ,

	'NOTSUPPORT'=>'Not Support',
	'SUPPORT'=>'Support',
	'NONE'=>'None',

	'VERSION'=>'Version',
);
$zh=array(
	'SERVER_INFO'=>'服务器信息',
	'SERVER_SOFTWARE'=>'服务器软件',
	'SERVER_FREESPACE'=>'磁盘剩余空间',
	'SERVER_PORT'=>'端口',
	'SERVER_DOCUMENTROOT'=>'文档根目录',
	'SERVER_ZENDOPTIMIZER_SUPPORT'=>'Zend Optimizer',
	'LOADEDEXTENSIONS'=>'载入的扩展',
	'PHPINFO'=>'PHP 信息',
	'PHP_INFO'=>'phpinfo()',
	'PHP_VERSION'=>'PHP 版本',
	'PHP_MEMORY_LIMIT'=>'内存限制',
	'PHP_SAFEMODE'=>'安全模式',
	'PHP_UPLOAD_MAX_FILESIZE'=>'上传最大的文件大小',
	'PHP_MAX_EXECUTION_TIME'=>'最长执行时间',
	'PHP_DISPLAY_ERRORS'=>'显示错误',
	'PHP_REGISTER_GLOBALS'=>'注册全局变量',
	'PHP_MAGIC_QUOTES_GPC'=>'魔术引用 GPC',
	'PHP_MAGIC_QUOTES_RUNTIME'=>'魔术引用 Runtime',
	'PHP_ALLOW_URL_FOPEN'=>'允许打开远程文件',
	'PHP_DISABLE_FUNCTIONS'=>'禁用的函数',

	'MODULES'=>'Modules',
	'SESSION_SUPPORT'=>'Session 支持',
	'GD_SUPPORT'=>'gd 支持',
	'XML_SUPPORT'=>'XML 支持',
	'ZLIB_SUPPORT'=>'Zlib 支持',
	'IAMP_SUPPORT'=>'IAMP 支持',
	'PREG_SUPPORT'=>'PREG 支持',
	'ICONV_SUPPORT'=>'iconv 支持',
	'MBSTRING_SUPPORT'=>'mbstring 支持',
	'LDAP_SUPPORT'=>'LDAP 支持',
	'HASH_SUPPORT'=>'hash 支持',
	'MCRYPT_SUPPORT'=>'mcrypt 支持',

	'DB_SUPPORT'=>'数据库支持',
	'SQLITE_SUPPORT'=>'SQLite 支持',
	'MYSQL_SUPPORT'=>'MySQL 支持',
	
	'WELCOME'=>"感谢选择 %s 版本： %s" ,

	'NOTSUPPORT'=>'不支持',
	'SUPPORT'=>'支持',
	'NONE'=>'无',
	'VERSION'=>'版本',
);
$languages=array('en','zh');
if(!isset($_GET['l']) || !in_array($_GET['l'],$languages) || $_GET['l']=='en')
	$language='en';
else
	$language='zh';
function t($str)
{
	global $language,$zh,$en;
	return str_replace(array_keys($$language),array_values($$language),$str); 
}
?>
<div id="page">
<div id="header">
<a href="?l=en">English</a>&nbsp;<a href="?l=zh">中文</a></div>
<div id="welcome"><?php printf(t("WELCOME"),NAME,V);?></div>
<table align="center" border="1px">
<?php 
//检测PHP设置参数
function show($varName) {
	switch($result = get_cfg_var($varName)) {
		case 0:
			return t('NOTSUPPORT');
			break;
		case 1:
			return t('SUPPORT');
			break;
		default:
			return t($result);
			break;
	}
}
// 检测函数支持
function isfun($funName = '') {
    if (!$funName || trim($funName) == '' || preg_match('~[^a-z0-9\_]+~i', $funName, $tmp)) return t('ERROR');
	return (false !== function_exists($funName)) ? t('SUPPORT') :'<font color="red">'.t('NOTSUPPORT').'</font>';
}
$server_software=$_SERVER['SERVER_SOFTWARE'];
$server_system=php_uname();
$server_freespace=round(disk_free_space(".")/(1024*1024*1024));
$server_port=$_SERVER['SERVER_PORT'];
$server_documentroot=$_SERVER['DOCUMENT_ROOT'];
$server_zendoptimizer_support=(get_cfg_var("zend_optimizer.optimization_level")||get_cfg_var("zend_extension_manager.optimizer_ts")||get_cfg_var("zend_extension_ts"))?"SUPPORT":"NOTSUPPORT";
$extensions=get_loaded_extensions();
$server_extensions='';
foreach ($extensions as $key=>$value) {
	if ($key!=0 && $key%13==0) {
		$server_extensions.='<br />';
	}
	$server_extensions.=$value."&nbsp;&nbsp;";
}
$main=<<<EOD
<tr>
	<th colspan="2">SERVER_INFO</th>
</tr>
<tr>
	<td>SERVER_SOFTWARE</td><td>$server_software</td>
</tr>
<tr>
	<td>SERVER_SOFTWARE</td><td>$server_system</td>
</tr>
<tr>
	<td>SERVER_FREESPACE</td><td>{$server_freespace}&nbsp;G</td>
</tr>
<tr>
	<td>SERVER_PORT</td><td>$server_port</td>
</tr>
<tr>
	<td>SERVER_DOCUMENTROOT</td><td>$server_documentroot</td>
</tr>
<tr>
	<td>SERVER_ZENDOPTIMIZER_SUPPORT</td><td>$server_zendoptimizer_support</td>
</tr>
EOD;
echo str_replace(array_keys($$language),array_values($$language),$main);
?>
</table>

<table align="center" border="1px">
<?php 
$ext_main=<<<EOT
<tr>
	<th>LOADEDEXTENSIONS</th>
</tr>
<tr>
	<td>$server_extensions</td>
</tr>
EOT;
echo str_replace(array_keys($$language),array_values($$language),$ext_main);
?>
</table>

<table align="center" border="1px" width="600px">
<?php 
$php_version=PHP_VERSION;
$php_sapi=php_sapi_name();
$php_memory_limit=show("memory_limit");
$php_safemode=show("safe_mode");
$php_upload_max_filesize=show("upload_max_filesize");
$php_max_execution_time=show("max_execution_time");
$php_display_errors=show("display_errors");
$php_register_globals=show("register_globals");
$php_magic_quotes_gpc=show("magic_quotes_gpc");
$magic_quotes_runtime=show("magic_quotes_runtime");
$php_allow_url_fopen=show("allow_url_fopen");
$php_disable_functions="NONE";
if(""!=$disFuns=get_cfg_var("disable_functions"))
{
	$php_disable_functions=str_replace(",",", ",$disFuns);
}
$php_main=<<<EOT
<tr>
	<th colspan="4">PHPINFO</th>
</tr>
<tr>
	<td>PHP_INFO</td><td><a href="?q=phpinfo" target="_blank">phpinfo()</a></td><td>PHP_VERSION</td><td>$php_version</td>
</tr>
<tr>
	<td>PHP_MEMORY_LIMIT</td><td>$php_memory_limit</td><td>PHP_SAFEMODE</td><td>$php_safemode</td>
</tr>
<tr>
	<td>PHP_UPLOAD_MAX_FILESIZE</td><td>$php_upload_max_filesize</td><td>PHP_MAX_EXECUTION_TIME</td><td>$php_max_execution_time</td>
</tr>
<tr>
	<td>PHP_DISPLAY_ERRORS</td><td>$php_display_errors</td><td>PHP_REGISTER_GLOBALS</td><td>$php_register_globals</td>
</tr>
<tr>
	<td>PHP_MAGIC_QUOTES_GPC</td><td>$php_magic_quotes_gpc</td><td>PHP_MAGIC_QUOTES_RUNTIME</td><td>$magic_quotes_runtime</td>
</tr>
<tr>
	<td>PHP_ALLOW_URL_FOPEN</td><td>$php_allow_url_fopen</td><td>PHP_DISABLE_FUNCTIONS</td><td>$php_disable_functions</td>
</tr>
EOT;
echo str_replace(array_keys($$language),array_values($$language),$php_main);
?>
</table>


<table border="1px" align="center" width="600px">
<?php 
$session_support=isfun("session_start");
$xml_support=isfun("xml_set_object");
$gd_support=isfun("gd_info");
$zlib_support=isfun("gzclose");
$imap_support=isfun("imap_close");
$preg_support=isfun("preg_match");
$iconv_support=isfun("iconv");
$mb_support=isfun("mb_eregi");
$ldap_support=isfun("ldap_close");
$mcrypt_support=isfun("mcrypt_cbc");
$hash_support=isfun("mhash_count");
$gd_info=gd_info();
if (defined(GD_VERSION))
	$gd_version=GD_VERSION;
elseif ($gd_info)
	$gd_version=$gd_info['GD Version'];
else
	$gd_version='<font color="red">UNKNOWN</font>';

$modules_main=<<<EOT
<tr>
	<th colspan="4">MODULES</th>
</tr>
<tr>
	<td>SESSION_SUPPORT</td><td>$session_support</td><td>GD_SUPPORT</td><td>$gd_support VERSION:$gd_version</td>
</tr>
<tr>
	<td>XML_SUPPORT</td><td>$xml_support</td><td>ZLIB_SUPPORT</td><td>$zlib_support</td>
</tr>
<tr>
	<td>IAMP_SUPPORT</td><td>$imap_support</td><td>PREG_SUPPORT</td><td>$preg_support</td>
</tr>
<tr>
	<td>ICONV_SUPPORT</td><td>$iconv_support</td><td>MBSTRING_SUPPORT</td><td>$mb_support</td>
</tr>
<tr>
	<td>LDAP_SUPPORT</td><td>$ldap_support</td><td>HASH_SUPPORT</td><td>$hash_support</td>
</tr>
<tr>
	<td>MCRYPT_SUPPORT</td><td>$mcrypt_support</td><td></td><td></td>
</tr>
EOT;
echo str_replace(array_keys($$language),array_values($$language),$modules_main);
?>
</table>

<table width="600px" align="center" border="1px">
<?php
$sqlite_support=isfun("sqlite_close");
$mysql_support=isfun("mysql_close");
$db_main=<<<EOT
<tr>
	<th colspan="2">DB_SUPPORT</th>
</tr>
<tr>
	<td>SQLITE_SUPPORT</td><td>$sqlite_support</td>
</tr>
<tr>
	<td>MYSQL_SUPPORT</td><td>$mysql_support</td>
</tr>
EOT;
echo str_replace(array_keys($$language),array_values($$language),$db_main);
?>
</table>
</div>
</body>
</html>