<?php
define('YUANSTART', microtime_float());
define('NAME','Yuan PHPINFO');
define('V','1.0');
if(isset($_GET['q']) && $_GET['q']=='phpinfo'){	phpinfo();exit;}
/**
 * translated messages
 */
$en=array(
        'NAME'=>'Name',
        'RESULT'=>'Result',
	'SERVER_INFO'=>'Server Informartion',
	'SERVER_SOFTWARE'=>'Server Software',
	'SERVER_OS'=>'Server OS',
	'SERVER_NAME'=>'Server Name',
	'SERVER_ADDR'=>'Server IP',
	'SERVER_TIME'=>'Server Time',
	'SERVER_FREESPACE'=>'Disk Free Space',
	'SERVER_ADMIN'=>'Server Admin',
	'SERVER_PORT'=>'Server Port',
	'SERVER_DOCUMENTROOT'=>'Document Root',
	'SCRIPT_FILENAME'=>'Script FileName',
	'SERVER_ZENDOPTIMIZER_SUPPORT'=>'Zend Optimizer',
	'LOADEDEXTENSIONS'=>'Loaded Modules',
	'PHPINFO'=>'PHP Information',
	'PHP_INFO'=>'phpinfo()',
	'PHP_VERSION'=>'PHP Version',
	'PHP_SERVER_API'=>'Server API',
	'PHP_ZEND_ENGINE'=>'Zend Engine',
	'PHP_SHORT_OPEN_TAG'=>'Short Tag(&lt;? ?&gt;)',
	'PHP_ENABLE_DL'=>'Enable dl',
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
	'SMTP_SUPPORT'=>'SMTP Support',
	'ICONV_SUPPORT'=>'iconv Support',
	'MBSTRING_SUPPORT'=>'mbstring Support',
	'LDAP_SUPPORT'=>'LDAP Support',
	'HASH_SUPPORT'=>'hash Support',
	'MCRYPT_SUPPORT'=>'mcrypt Support',
	'FTP_SUPPORT'=>'FTP Support',
        'SOKET_SUPPORT'=>'Socket Support',
        'PCRE_SUPPORT'=>'Regular Expressions (Perl-Compatible)',
        'PDF_SUPPORT'=>'PDF',
        'MHASH_SUPPORT'=>'Mhash',
        'BCMATH_SUPPORT'=>'BCMath Arbitrary Precision Mathematics',
        'CALENDAR_SUPPORT'=>'Calendar',

	'DB_SUPPORT'=>'Database Support',
        'DBX_SUPPORT'=>'dbx module',
	'SQLITE_SUPPORT'=>'SQLite Support',
	'MYSQL_SUPPORT'=>'MySQL Support',
        'MYSQLI_SUPPORT'=>'MySQL Improved Extension',
	'DBASE_SUPPORT'=>'dBase Support',
	'DBA_SUPPORT'=>'DBA Support',
        'ODBC_SUPPORT'=>'ODBC Support',
        'PDO_SUPPORT'=>'PDO Support',
	'PGSQL_SUPPORT'=>'Postgre Support',
        'MSSQL_SUPPORT'=>'Microsoft SQL Server',
        'OCI8_SUPPORT'=>'Oracle Database',

	'WELCOME'=>"Thank you for using {soft} Version: {version}" ,

	'NOTSUPPORT'=>'Not Support',
	'SUPPORT'=>'Support',
	'NONE'=>'None',

	'VERSION'=>'Version',

	'dateFormat'=>'F d Y, H:i:s',

        'TIME_ELAPSED'=>'Time Elapsed',
        'SECOND'=>'second',
);
$zh_cn=array(
        'NAME'=>'项目名称',
        'RESULT'=>'结果',
	'SERVER_INFO'=>'服务器信息',
	'SERVER_SOFTWARE'=>'服务器软件',
	'SERVER_OS'=>'服务器操作系统',
	'SERVER_NAME'=>'服务器域名',
	'SERVER_TIME'=>'服务器时间',
	'SERVER_ADDR'=>'服务器 IP',
	'SERVER_FREESPACE'=>'磁盘剩余空间',
	'SERVER_ADMIN'=>'服务器管理员',
	'SERVER_PORT'=>'端口',
	'SERVER_DOCUMENTROOT'=>'文档根目录',
	'SCRIPT_FILENAME'=>'当前文件名',
	'SERVER_ZENDOPTIMIZER_SUPPORT'=>'Zend Optimizer',
	'LOADEDEXTENSIONS'=>'载入的扩展',
	'PHPINFO'=>'PHP 信息',
	'PHP_INFO'=>'phpinfo()',
	'PHP_VERSION'=>'PHP 版本',
	'PHP_SERVER_API'=>'PHP运行方式',
	'PHP_ZEND_ENGINE'=>'Zend引擎版本',
	'PHP_SHORT_OPEN_TAG'=>'短标记(&lt;? ?&gt;)',
	'PHP_ENABLE_DL'=>'动态加载链接库 enable_dl',
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

	'MODULES'=>'模块',
	'SESSION_SUPPORT'=>'Session 支持',
	'GD_SUPPORT'=>'gd 支持',
	'XML_SUPPORT'=>'XML 支持',
	'ZLIB_SUPPORT'=>'Zlib 支持',
	'IAMP_SUPPORT'=>'IAMP 支持',
	'SMTP_SUPPORT'=>'SMTP 支持',
	'ICONV_SUPPORT'=>'iconv 支持',
	'MBSTRING_SUPPORT'=>'mbstring 支持',
	'LDAP_SUPPORT'=>'LDAP 支持',
	'HASH_SUPPORT'=>'hash 支持',
	'MCRYPT_SUPPORT'=>'mcrypt 支持',
	'FTP_SUPPORT'=>'FTP 支持',
        'SOKET_SUPPORT'=>'Socket支持',
        'PCRE_SUPPORT'=>'Perl兼容正则表达式',
        'PDF_SUPPORT'=>'PDF',
        'MHASH_SUPPORT'=>'哈稀计算 MHash',
        'BCMATH_SUPPORT'=>'高精度数学运算 BCMath',
        'CALENDAR_SUPPORT'=>'历法运算 Calendar',

	'DB_SUPPORT'=>'数据库支持',
        'DBX_SUPPORT'=>'dbx 模块',
	'SQLITE_SUPPORT'=>'SQLite 支持',
	'MYSQL_SUPPORT'=>'MySQL 支持',
        'MYSQLI_SUPPORT'=>'MySQL 改进扩展',
	'DBASE_SUPPORT'=>'dBase 支持',
	'DBA_SUPPORT'=>'DBA 支持',
        'ODBC_SUPPORT'=>'ODBC 支持',
        'PDO_SUPPORT'=>'PDO 支持',
	'PGSQL_SUPPORT'=>'Postgre 支持',
        'MSSQL_SUPPORT'=>'微软 SQL Server',
        'OCI8_SUPPORT'=>'Oracle 数据库',

	'WELCOME'=>"感谢选择 {soft} 版本： {version}" ,

	'NOTSUPPORT'=>'不支持',
	'SUPPORT'=>'支持',
	'NONE'=>'无',
	'VERSION'=>'版本',

	'dateFormat'=>'Y年n月j日 H:i:s',

        'TIME_ELAPSED'=>'花费时间',
        'SECOND'=>'秒',
);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Yuan PHPINFO</title>
<style type="text/css">
* {font-family: Tahoma, "Microsoft Yahei", Arial; }
body{text-align: center; margin: 0 auto; padding: 0; background-color:#FFFFFF;font-size:12px;font-family:Tahoma, Arial}
#page {width: 920px; padding: 0 20px; margin: 0 auto; text-align: left;}
table{clear:both;padding: 0; margin: 0 0 10px;border-collapse:collapse; border-spacing: 0;width:850px;margin-left: auto;    margin-right: auto;    text-align: left;}
th{padding: 3px 6px; font-weight:bold;background:#D7E9FB;color:#000;}
tr{padding: 0; background:#FFF;}
td{padding: 3px 6px; border:1px solid #D7E9FB;}
#welcome{ text-align: center;}
table.result{	background:#E6ECFF none repeat scroll 0% 0%;	border-collapse:collapse;	width:600px; }
table.result th{	background:#CCD9FF none repeat scroll 0% 0%;	text-align:left;}
table.result th, table.result td{	border:1px solid #BFCFFF;	padding:0.2em;}
</style>
</head>

<body>
<div id="page">
    <div id="welcome"><strong><?php echo t('WELCOME',array('{soft}'=>NAME,'{version}'=>V));?></strong></div>
    <?php
    $server_info=array(
        array( t('SERVER_SOFTWARE'), $_SERVER['SERVER_SOFTWARE'], ),
        array( t('SERVER_OS'), php_uname(), ),
        array( t('SERVER_NAME').'/'.t('SERVER_ADDR'), $_SERVER['SERVER_NAME'].'/'.$_SERVER['SERVER_ADDR'], ),
        array( t('SERVER_TIME'), date('Y-m-d H:i:s',time()), ),
        array( t('SERVER_FREESPACE'), round(disk_free_space(".")/(1024*1024*1024)).'&nbsp;G', ),
        array( t('SERVER_ADMIN'), $_SERVER['SERVER_ADMIN'], ),
        array( t('SERVER_PORT'), $_SERVER['SERVER_PORT'], ),
        array( t('SERVER_DOCUMENTROOT'), $_SERVER['DOCUMENT_ROOT'], ),
        array( t('SCRIPT_FILENAME'), $_SERVER['SCRIPT_FILENAME'], ),
    );
    ?>
    
    <!-- Section 1 Server Information -->
    <table class="result">
        <tr><th><?php echo t('NAME');?></th><th><?php echo t('RESULT');?></th></tr>
        <?php foreach ($server_info as $info): ?>
        <tr>
            <td><?php echo $info[0];?></td><td><?php echo $info[1];?></td>
        </tr>
        <?php endforeach;?>
    </table>

    <!-- Section 2 Loaded extensions -->
    <table class="result">
        <tr>
                <th><?php echo t('LOADEDEXTENSIONS');?></th>
        </tr>
        <tr>
            <td><?php $extensions=get_loaded_extensions(); echo implode(' ', $extensions); ?></td>
        </tr>
    </table>

    <!-- Section 3 PHP Information -->
    <?php
    $php_info=array(
        array( t('PHP_INFO'), '<a href="?q=phpinfo" target="_blank">phpinfo()</a>', ),
        array( t('PHP_VERSION'), phpversion(), ),
        array( t('PHP_SERVER_API'), php_sapi_name(), ),
        array( t('PHP_ZEND_ENGINE'), zend_version(), ),
        array( t('PHP_SHORT_OPEN_TAG'), show("short_open_tag"), ),
        array( t('PHP_ENABLE_DL'), show('enable_dl'), ),
        array( t('PHP_MEMORY_LIMIT'), show("memory_limit"), ),
        array( t('PHP_SAFEMODE'), show("safe_mode"), ),
        array( t('PHP_UPLOAD_MAX_FILESIZE'), show("upload_max_filesize"), ),
        array( t('PHP_MAX_EXECUTION_TIME'), show("max_execution_time"), ),
        array( t('PHP_DISPLAY_ERRORS'), show("display_errors"), ),
        array( t('PHP_REGISTER_GLOBALS'), show("register_globals"), ),
        array( t('PHP_MAGIC_QUOTES_GPC'), show("magic_quotes_gpc"), ),
        array( t('PHP_MAGIC_QUOTES_RUNTIME'), show("magic_quotes_runtime"), ),
        array( t('PHP_ALLOW_URL_FOPEN'), show("allow_url_fopen"), ),
        array( t('PHP_DISABLE_FUNCTIONS'), get_cfg_var("disable_functions"), )
    );
    ?>
    <table class="result">
        <tr>
            <th colspan="2"><?php echo t('PHPINFO');?></th>
        </tr>
        <?php foreach ($php_info as $info) :?>
        <tr>
            <td><?php echo $info[0];?></td><td><?php echo $info[1];?></td>
        </tr>
        <?php endforeach;?>
    </table>

    <!-- Section 4 Modules -->
    <?php
    $modules=array(
        array(t('SESSION_SUPPORT'),isfun("session_start")),
        array(t('XML_SUPPORT'),isfun("xml_set_object")),
        array(t('GD_SUPPORT'),isfun("gd_info")),
        array(t('ZLIB_SUPPORT'),isfun("gzclose")),
        array(t('IAMP_SUPPORT'),isfun("imap_close")),
        array(t('SMTP_SUPPORT'),show('SMTP')),
        array(t('ICONV_SUPPORT'),isfun("iconv")),
        array(t('MBSTRING_SUPPORT'),isfun("mb_eregi")),
        array(t('LDAP_SUPPORT'),isfun("ldap_close")),
        array(t('MCRYPT_SUPPORT'),isfun("mcrypt_cbc")),
        array(t('MHASH_SUPPORT'),isfun("mhash_count")),
        array(t('PCRE_SUPPORT'),isfun('preg_match')),
        array(t('SOKET_SUPPORT'),isfun("socket_accept")),
        array(t('PDF_SUPPORT'),isfun('PDF_end_document')),
        array(t('BCMATH_SUPPORT'),isfun("bcadd")),
        array(t('CALENDAR_SUPPORT'),isfun("cal_days_in_month")),
        array(t('FTP_SUPPORT'),isfun("ftp_login")),
    );
    ?>
    <table class="result">
        <tr><th colspan="2"><?php echo t('MODULES');?></th></tr>
        <?php foreach($modules as $module):?>
        <tr>
            <td><?php echo $module[0];?></td><td><?php echo $module[1];?></td>
        </tr>
        <?php endforeach;?>
    </table>

    <!-- Section 5 Database Support  -->
    <?php
    $databases=array(
        array(t('DBA_SUPPORT'),isfun('dba_close')),
        array(t('DBX_SUPPORT'),isfun('dbx_close')),
        array(t('ODBC_SUPPORT'),isfun('odbc_close')),
        array(t('PDO_SUPPORT'),class_exists('PDO')?t('SUPPORT'):t('NOTSUPPORT')),
        array(t('SQLITE_SUPPORT'),isfun("sqlite_close")),
        array(t('MYSQL_SUPPORT'),isfun("mysql_close")),
        array(t('MYSQLI_SUPPORT'),class_exists('MySQLi')?t('SUPPORT'):t('NOTSUPPORT')),
        array(t('DBASE_SUPPORT'),isfun('dbase_close')),
        array(t('PGSQL_SUPPORT'),isfun('pg_close')),
        array(t('MSSQL_SUPPORT'),isfun('mssql_close')),
        array(t('OCI8_SUPPORT'),isfun('oci_close')),
    );
    ?>
    <table class="result">
        <tr><th colspan="2"><?php echo t('DB_SUPPORT');?></th></tr>
        <?php foreach($databases as $database):?>
        <tr>
            <td><?php echo $database[0];?></td><td><?php echo $database[1];?></td>
        </tr>
        <?php endforeach;?>
    </table>

<?php
define('YUANSTOP', microtime_float());
$time=YUANSTOP-YUANSTART;
?>
    <!-- Section 6 Footer -->
<table class="result">
    <tr>
        <td><?php echo t('TIME_ELAPSED').':';printf("%.4f",$time);echo t('SECOND');?></td>
    </tr>
</table>
</div>
</body>
</html>
<?php
/** 函数列表 **/
/**
 * Simple function to replicate PHP 5 behaviour
 */
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
// 检测函数支持
function isfun($funName = '') {
    if (!$funName || trim($funName) == '' || preg_match('~[^a-z0-9\_]+~i', $funName, $tmp)) return t('ERROR');
	return (false !== function_exists($funName)) ? t('SUPPORT') :'<font color="red">'.t('NOTSUPPORT').'</font>';
}
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
/**
 * Returns a localized message according to user preferred language.
 * @param string message to be translated
 * @param array parameters to be applied to the translated message
 * @return string translated message
 */
function t($message,$params=array()){
    static $messages;
    global $en,$zh_cn;
    if($messages===null){
        $messages=array();
        if(($lang =  getPreferredLanguage()) !== false){
            if(isset ($$lang))
                $messages=$$lang;
        }
        $messages=($messages==array())?$en:$messages;
    }
    if(empty ($message))
        return $message;
    if(isset ($messages[$message]) && $messages[$message]!=='')
        $message=$messages[$message];
    return $params!==array()?strtr($message, $params):$message;
}
function getPreferredLanguage(){
    if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) && ($n=preg_match_all('/([\w\-]+)\s*(;\s*q\s*=\s*(\d*\.\d*))?/',$_SERVER['HTTP_ACCEPT_LANGUAGE'],$matches)) > 0)
    {
        $languages=array();
        for($i=0; $i < $n; ++$i)
                $languages[$matches[1][$i]]=empty($matches[3][$i]) ? 1.0 : floatval($matches[3][$i]);
        arsort($languages);
        foreach($languages as $language=>$pref)
            return strtolower(str_replace('-','_',$language));
    }
    return false;
}
?>