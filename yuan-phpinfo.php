<?php
/**
 * Yuan PHPInfo 
 * @author Kang Chen <dreamneverfall@gmail.com>
 * @copyright GPL
 */
//Dev version
error_reporting(E_ALL);
define('YUANSTART', microtime_float());
define('NAME','Yuan PHPINFO');
define('V','0.1');
if(isset($_GET['q']) && $_GET['q']=='phpinfo'){	phpinfo();exit;}
/**
 * translated messages
 */
$en=array(
	//Section 1:serverOverview
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
	
	'HARDWARE'=>'Server Hardware',
	'CPU_NUM'=>'CPU Number',
	'CPU_NAME'=>'CPU Name',
	'MEMORY'=>'Memory',
	'UPTIME'=>'Uptime',
	
	//time and date
	'DAY'=>'day(s)',
	'HOUR'=>'hour(s)',
	'MINUTE'=>'minute(s)',
	

	'MAIL_TEST'=>'mail() test',
	'MAIL_TO'=>'Email',
	'MAIL_OK'=>'<font color="green">Your message has been sent.</font>',
	'MAIL_BAD'=>'<font color="red">Your message sent failed.</font>',

	'MYSQL_CLIENT_VERSION'=>'Mysql client',
	
	'MYSQL_CONNECTION_TEST'=>'MySQL Connection Test',
	'MYSQL_HOST'=>'Host',
	'MYSQL_HOST_PORT'=>'Port',
	'MYSQL_USERNAME'=>'Username',
	'MYSQL_PASSWORD'=>'Password',
	'SUBMIT'=>'Submit',
	'MYSQL_CONNECTION_OK'=>'<font color="green">Successful connection</font>',
	'MYSQL_SERVER_VERSION'=>'MySQL Sever Version',
	'MYSQL_CONNECTION_FAILED'=>'<font color="red">Connectin failed.</font>',
	
	'FUNCTION_CHECK'=>'Function check',
	'FUNCTION_NAME'=>'Function name',
	'FUNCTION_EXISTS'=>'<font color="green">function exists</font>',
	'FUNCTION_NOT_EXISTS'=>'<font color="red">function not exists</font>',
	
	// Exception
	'UNKNOWN'=>'Unknown',
	'FUNCTION_MAIL_DISABLE'=>'mail() has been disabled',
);
$zh_cn=array(
	//第一部分：服务器信息
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
	
	'HARDWARE'=>'服务器硬件信息',
	'CPU_NUM'=>'CPU 数量',
	'CPU_NAME'=>'CPU 型号',
	'MEMORY'=>'物理内存',
	'UPTIME'=>'已运行时间',
	
	//time and date
	'DAY'=>'天',
	'HOUR'=>'小时',
	'MINUTE'=>'分钟',
	
	'MAIL_TEST'=>'mail() 测试',
	'MAIL_TO'=>'Email地址',
	'MAIL_OK'=>'<font color="green">信息发送成功。</font>',
	'MAIL_BAD'=>'<font color="red">信息发送失败。</font>',

	'MYSQL_CLIENT_VERSION'=>'Mysql 客户端版本',
	
	'MYSQL_CONNECTION_TEST'=>'MySQL 连接测试',
	'MYSQL_HOST'=>'地址',
	'MYSQL_HOST_PORT'=>'端口',
	'MYSQL_USERNAME'=>'用户名',
	'MYSQL_PASSWORD'=>'密码',
	'SUBMIT'=>'提交',
	'MYSQL_CONNECTION_OK'=>'<font color="green">连接成功</font>',
	'MYSQL_SERVER_VERSION'=>'MySQL 服务器版本',
	'MYSQL_CONNECTION_FAILED'=>'<font color="red">连接失败.</font>',
	
	'FUNCTION_CHECK'=>'函数检查',
	'FUNCTION_NAME'=>'函数名',
	'FUNCTION_EXISTS'=>'<font color="green">函数存在</font>',
	'FUNCTION_NOT_EXISTS'=>'<font color="red">函数不存在</font>',
	
	// Exception
	'UNKNOWN'=>'未知',
	'FUNCTION_MAIL_DISABLE'=>'函数 mail() 被禁用',
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
#ft{text-align:center;clear:both;}
input.btn {    background: none repeat scroll 0 0 #10AF7B;    border-color: #65DAB4 #1A664E #1A664E #65DAB4;    border-style: solid;    border-width: 1px;    color: #FFFFFF;    font-size: 12px;    font-weight: bold;    height: 20px;    line-height: 20px;    padding: 0 6px;}
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
        array( t('SERVER_FREESPACE'), (strpos(get_cfg_var("disable_functions"),'disk_free_space') === false)?round(disk_free_space(".")/(1024*1024*1024)).'&nbsp;G':t('UNKNOWN'), ),
        array( t('SERVER_ADMIN'), @$_SERVER['SERVER_ADMIN'], ),
        array( t('SERVER_PORT'), $_SERVER['SERVER_PORT'], ),
        array( t('SERVER_DOCUMENTROOT'), $_SERVER['DOCUMENT_ROOT'], ),
        array( t('SCRIPT_FILENAME'), $_SERVER['SCRIPT_FILENAME'], ),
    );
    ?>
    
    <!-- Section 1 Server Information -->
    <table class="result">
        <tr><th colspan="2"><?php echo t('SERVER_INFO');?></th></tr>
        <?php foreach ($server_info as $info): ?>
        <tr>
            <td><?php echo $info[0];?></td><td><?php echo $info[1];?></td>
        </tr>
        <?php endforeach;?>
    </table>
	
	<?php
	//目前只支持 WINNT Linux FreeBSD
	$current_supported_os=array('WINNT','Linux','FreeBSD');
	if(in_array(PHP_OS,$current_supported_os)):
	
		// 根据不同系统取得CPU相关信息
		switch(PHP_OS) {
			case "Linux":
				$sysInfo = sys_linux();
				break;
			case "FreeBSD":
				$sysInfo = sys_freebsd();
				break;
			case "WINNT":
				$sysInfo = sys_windows();
				break;
			default:
				break;
		}
		if($sysInfo):
		$hardware_info=array(
			array( t('CPU_NUM'), $sysInfo['cpu']['num'], ),
			array( t('CPU_NAME'), $sysInfo['cpu']['model'], ),
			array( t('UPTIME'), $sysInfo['uptime'], ),
			array( t('MEMORY'), round($sysInfo['memTotal']/1024,2).' G', ),//test
		);
    ?>
    
    <!-- Section 1-b Server Hardware -->
    <table class="result">
        <tr><th colspan="2"><?php echo t('HARDWARE');?></th></tr>
        <?php foreach ($hardware_info as $info): ?>
        <tr>
            <td><?php echo $info[0];?></td><td><?php echo $info[1];?></td>
        </tr>
        <?php endforeach;?>
    </table>
	<?php endif;?>
	<?php endif;?>
	
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
        array( t('PHP_DISABLE_FUNCTIONS'), get_cfg_var("disable_functions")?get_cfg_var("disable_functions"):  t('NONE'), )
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
	$sqlite_version=function_exists('sqlite_libversion')?t('VERSION').':'.sqlite_libversion():'';
	$mysql_client_version=function_exists('mysql_get_client_info')?t('MYSQL_CLIENT_VERSION').':'.mysql_get_client_info():'';
    $databases=array(
        array(t('DBA_SUPPORT'),isfun('dba_close')),
        array(t('DBX_SUPPORT'),isfun('dbx_close')),
        array(t('ODBC_SUPPORT'),isfun('odbc_close')),
        array(t('PDO_SUPPORT'),class_exists('PDO')?t('SUPPORT'):t('NOTSUPPORT')),
        array(t('SQLITE_SUPPORT'),isfun("sqlite_close").'&nbsp;'.$sqlite_version),
        array(t('MYSQL_SUPPORT'),isfun("mysql_close").'&nbsp;'.$mysql_client_version),
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
	
	<!-- Section 5b MySQL connection test  -->
    <?php
	if(in_array('mysql',$extensions)):		
    ?>
	<form action="<?php echo $_SERVER['PHP_SELF'].'#mysql_test';?>" method="post">
    <table class="result">
        <tr><th><a name="mysql_test"><?php echo t('MYSQL_CONNECTION_TEST');?></a></th></tr>
        <tr>
            <td>
				<input type="hidden" name="mysql_test" value="mysql_test" />
				<?php echo t('MYSQL_HOST');?>:<input type="text" name="mysql_host" size="10" value="localhost" />&nbsp;
				<?php echo t('MYSQL_HOST_PORT');?>:<input type="text" name="mysql_host_port" size="4" value="3306" />&nbsp;
				<?php echo t('MYSQL_USERNAME');?>:<input type="text" name="mysql_username" size="10" />&nbsp;
				<?php echo t('MYSQL_PASSWORD');?>:<input type="password" name="mysql_password" size="6" />&nbsp;
				<input type="submit" value="<?php echo t('SUBMIT');?>" />
				<?php
				if(isset($_POST['mysql_test'])){
					echo '<div align="center">';
								
					$mysql_host=trim($_POST['mysql_host']);
					$mysql_port=(int)trim($_POST['mysql_host_port']);
					$mysql_user=trim($_POST['mysql_username']);
					$mysql_pass=trim($_POST['mysql_password']);
					if(!empty($mysql_host)&&!empty($mysql_port)&&!empty($mysql_user)){
						$link=@mysql_connect($mysql_host.':'.$mysql_port,$mysql_user,$mysql_pass);
						if($link){
							echo t('MYSQL_CONNECTION_OK').'<br />';
							echo t('MYSQL_SERVER_VERSION').':'.mysql_get_server_info();
						}else{
							echo t('MYSQL_CONNECTION_FAILED');
						}
					}
					echo '</div>';
				}
				?>
			</td>
        </tr>
    </table>
	</form>
	<?php endif;?>
	
	<!-- Section 6 mail() test -->
	<form action="<?php echo $_SERVER['PHP_SELF'].'#mail';?>" method="post">
	<table class="result">
        <tr><th><a name="mail"><?php echo t('MAIL_TEST');?></a></th></tr>
        <tr>
            <td>
			<?php
			if(!in_array('mail',explode(',',get_cfg_var("disable_functions")))):
				if(isset($_POST['mailto']) && is_email($_POST['mailto'])):
					echo '<div align="center">';
					$mailto=$_POST['mailto'];
					$subject='mail() test sent by Yuan PHPINFO';
					$message="I guest you are happy to see this email.:)";
					if(@mail($mailto,$subject,$message))
						echo t('MAIL_OK');
					else
						echo t('MAIL_BAD');
					echo '</div>';
				endif;
				?>
				<?php echo t('MAIL_TO');?>&nbsp;<input type="text" name="mailto" /><input class="btn" type="submit" value="<?php echo t('SUBMIT');?>" />
			<?php
			else:
				echo t('FUNCTION_MAIL_DISABLE');
			endif;
			?>
			</td>
        </tr>
    </table>
	</form>
	
	<!-- Section 7 function check -->
	<form action="<?php echo $_SERVER['PHP_SELF'].'#functioncheck';?>" method="post">
	<table class="result">
        <tr><th><a name="functioncheck"><?php echo t('FUNCTION_CHECK');?></a></th></tr>
		<tr>
			<td>
				<?php
					if(isset($_POST['functionname']) && !empty($_POST['functionname'])){
						echo '<div align="center">';
						if(function_exists($_POST['functionname'])){
							echo $_POST['functionname'].'&nbsp;'.t('FUNCTION_EXISTS');
						}else{
							echo $_POST['functionname'].'&nbsp;'.t('FUNCTION_NOT_EXISTS');
						}
						echo '</div>';
					}
				?>
				<?php echo t('FUNCTION_NAME');?>&nbsp;<input type="text" name="functionname" /><input class="btn" type="submit" value="<?php echo t('SUBMIT');?>" />
			</td>
		</tr>
	</table>
	</form>
	
	<?php
	define('YUANSTOP', microtime_float());
	$time=YUANSTOP-YUANSTART;
	?>

	<!-- Section Footer -->
	<div id="ft">
		Powered by <a href="http://y-projects.tk/yuan-phpinfo" target="_blank">Yuan PHPINFO</a><br />
		<?php echo t('TIME_ELAPSED').':';printf("%.4f",$time);echo t('SECOND');?>
	</div>
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
            return '<font color="red">'.t('NOTSUPPORT').'</font>';
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
//linux系统探测
function sys_linux()
{
    // CPU
    if (false === ($str = @file("/proc/cpuinfo"))) return false;
    $str = implode("", $str);
    @preg_match_all("/model\s+name\s{0,}\:+\s{0,}([\w\s\)\(\@.-]+)([\r\n]+)/s", $str, $model);
    @preg_match_all("/cpu\s+MHz\s{0,}\:+\s{0,}([\d\.]+)[\r\n]+/", $str, $mhz);
    @preg_match_all("/cache\s+size\s{0,}\:+\s{0,}([\d\.]+\s{0,}[A-Z]+[\r\n]+)/", $str, $cache);
    @preg_match_all("/bogomips\s{0,}\:+\s{0,}([\d\.]+)[\r\n]+/", $str, $bogomips);
    if (false !== is_array($model[1]))
	{
		$res['cpu']['num'] = sizeof($model[1]);
		for($i = 0; $i < $res['cpu']['num']; $i++)
		{
			$res['cpu']['model'][] = $model[1][$i];
			$res['cpu']['mhz'][] = $mhz[1][$i];
			$res['cpu']['cache'][] = $cache[1][$i];
			$res['cpu']['bogomips'][] = $bogomips[1][$i];
		}
		if (false !== is_array($res['cpu']['model'])) $res['cpu']['model'] = implode("<br />", $res['cpu']['model']);
		if (false !== is_array($res['cpu']['mhz'])) $res['cpu']['mhz'] = implode("<br />", $res['cpu']['mhz']);
		if (false !== is_array($res['cpu']['cache'])) $res['cpu']['cache'] = implode("<br />", $res['cpu']['cache']);
		if (false !== is_array($res['cpu']['bogomips'])) $res['cpu']['bogomips'] = implode("<br />", $res['cpu']['bogomips']);
	}

    // NETWORK

    // UPTIME
    if (false === ($str = @file("/proc/uptime"))) return false;
    $str = explode(" ", implode("", $str));
    $str = trim($str[0]);
    $min = $str / 60;
    $hours = $min / 60;
    $days = floor($hours / 24);
    $hours = floor($hours - ($days * 24));
    $min = floor($min - ($days * 60 * 24) - ($hours * 60));
    if ($days !== 0) $res['uptime'] = '&nbsp;'.$days.t('DAY');
    if ($hours !== 0) $res['uptime'] .= '&nbsp;'.$hours.t('HOUR');
    $res['uptime'] .= '&nbsp;'.$min.t('MINUTE');

    // MEMORY
    if (false === ($str = @file("/proc/meminfo"))) return false;
    $str = implode("", $str);
    preg_match_all("/MemTotal\s{0,}\:+\s{0,}([\d\.]+).+?MemFree\s{0,}\:+\s{0,}([\d\.]+).+?Cached\s{0,}\:+\s{0,}([\d\.]+).+?SwapTotal\s{0,}\:+\s{0,}([\d\.]+).+?SwapFree\s{0,}\:+\s{0,}([\d\.]+)/s", $str, $buf);

    $res['memTotal'] = round($buf[1][0]/1024, 2);
    $res['memFree'] = round($buf[2][0]/1024, 2);
    $res['memCached'] = round($buf[3][0]/1024, 2);
    $res['memUsed'] = ($res['memTotal']-$res['memFree']);
    $res['memPercent'] = (floatval($res['memTotal'])!=0)?round($res['memUsed']/$res['memTotal']*100,2):0;
    $res['memRealUsed'] = ($res['memTotal'] - $res['memFree'] - $res['memCached']);
    $res['memRealPercent'] = (floatval($res['memTotal'])!=0)?round($res['memRealUsed']/$res['memTotal']*100,2):0;

    $res['swapTotal'] = round($buf[4][0]/1024, 2);
    $res['swapFree'] = round($buf[5][0]/1024, 2);
    $res['swapUsed'] = ($res['swapTotal']-$res['swapFree']);
    $res['swapPercent'] = (floatval($res['swapTotal'])!=0)?round($res['swapUsed']/$res['swapTotal']*100,2):0;

    // LOAD AVG
    if (false === ($str = @file("/proc/loadavg"))) return false;
    $str = explode(" ", implode("", $str));
    $str = array_chunk($str, 4);
    $res['loadAvg'] = implode(" ", $str[0]);

    return $res;
}
//FreeBSD系统探测
function sys_freebsd() {
	//CPU
	if (false === ($res['cpu']['num'] = get_key("hw.ncpu"))) return false;
	$res['cpu']['model'] = get_key("hw.model");

	//LOAD AVG
	if (false === ($res['loadAvg'] = get_key("vm.loadavg"))) return false;

	//UPTIME
	if (false === ($buf = get_key("kern.boottime"))) return false;
	$buf = explode(' ', $buf);
	$sys_ticks = time() - intval($buf[3]);
	$min = $sys_ticks / 60;
	$hours = $min / 60;
	$days = floor($hours / 24);
	$hours = floor($hours - ($days * 24));
	$min = floor($min - ($days * 60 * 24) - ($hours * 60));
	if ($days !== 0) $res['uptime'] = '&nbsp;'.$days.t('DAY');
	if ($hours !== 0) $res['uptime'] .= '&nbsp;'.$hours.t('HOUR');
	$res['uptime'] .= '&nbsp;'.$min.t('MINUTE');

	//MEMORY
	if (false === ($buf = get_key("hw.physmem"))) return false;
	$res['memTotal'] = round($buf/1024/1024, 2);

	$str = get_key("vm.vmtotal");
	preg_match_all("/\nVirtual Memory[\:\s]*\(Total[\:\s]*([\d]+)K[\,\s]*Active[\:\s]*([\d]+)K\)\n/i", $str, $buff, PREG_SET_ORDER);
	preg_match_all("/\nReal Memory[\:\s]*\(Total[\:\s]*([\d]+)K[\,\s]*Active[\:\s]*([\d]+)K\)\n/i", $str, $buf, PREG_SET_ORDER);

	$res['memRealUsed'] = round($buf[0][2]/1024, 2);
	$res['memCached'] = round($buff[0][2]/1024, 2);
	$res['memUsed'] = round($buf[0][1]/1024, 2) + $res['memCached'];
	$res['memFree'] = $res['memTotal'] - $res['memUsed'];
	$res['memPercent'] = (floatval($res['memTotal'])!=0)?round($res['memUsed']/$res['memTotal']*100,2):0;

	$res['memRealPercent'] = (floatval($res['memTotal'])!=0)?round($res['memRealUsed']/$res['memTotal']*100,2):0;

	return $res;
}
//取得参数值 FreeBSD
function get_key($keyName) {
	return do_command('sysctl', "-n $keyName");
}

//确定执行文件位置 FreeBSD
function find_command($commandName) {
	$path = array('/bin', '/sbin', '/usr/bin', '/usr/sbin', '/usr/local/bin', '/usr/local/sbin');
	foreach($path as $p) {
		if (@is_executable("$p/$commandName")) return "$p/$commandName";
	}
	return false;
}

//执行系统命令 FreeBSD
function do_command($commandName, $args) {
	$buffer = "";
	if (false === ($command = find_command($commandName))) return false;
	if ($fp = @popen("$command $args", 'r')) {
		while (!@feof($fp)){
			$buffer .= @fgets($fp, 4096);
		}
		return trim($buffer);
	}
	return false;
}
//windows系统探测
function sys_windows() {
	if (PHP_VERSION >= 5) {
		$objLocator = new COM("WbemScripting.SWbemLocator");
		$wmi = $objLocator->ConnectServer();
		$prop = $wmi->get("Win32_PnPEntity");
	} else {
		return false;
	}

	//CPU
	$cpuinfo = GetWMI($wmi,"Win32_Processor", array("Name","L2CacheSize","NumberOfCores"));
	$res['cpu']['num'] = $cpuinfo[0]['NumberOfCores'];
	if (null == $res['cpu']['num']) {
		$res['cpu']['num'] = 1;
	}
	$res['cpu']['model']=$res['cpu']['cache']='';//初始化
	for ($i=0;$i<$res['cpu']['num'];$i++){
		$res['cpu']['model'] .= iconv('GBK', 'UTF-8',$cpuinfo[0]['Name'])."<br />";
		$res['cpu']['cache'] .= $cpuinfo[0]['L2CacheSize']."<br />";
	}
	// SYSINFO
	$sysinfo = GetWMI($wmi,"Win32_OperatingSystem", array('LastBootUpTime','TotalVisibleMemorySize','FreePhysicalMemory','Caption','CSDVersion','SerialNumber','InstallDate'));
	$sysinfo[0]['Caption']=iconv('GBK', 'UTF-8',$sysinfo[0]['Caption']);
	$sysinfo[0]['CSDVersion']=iconv('GBK', 'UTF-8',$sysinfo[0]['CSDVersion']);
	$res['win_n'] = $sysinfo[0]['Caption']." ".$sysinfo[0]['CSDVersion']." <b>序列号</b>:{$sysinfo[0]['SerialNumber']} 于".date('Y年m月d日H:i:s',strtotime(substr($sysinfo[0]['InstallDate'],0,14)))."安装";
	//UPTIME
	$res['uptime'] = $sysinfo[0]['LastBootUpTime'];

	$sys_ticks = 3600*8 + time() - strtotime(substr($res['uptime'],0,14));
	$min = $sys_ticks / 60;
	$hours = $min / 60;
	$days = floor($hours / 24);
	$hours = floor($hours - ($days * 24));
	$min = floor($min - ($days * 60 * 24) - ($hours * 60));
	if ($days !== 0) $res['uptime'] = '&nbsp;'.$days.t('DAY');
	if ($hours !== 0) $res['uptime'] .= '&nbsp;'.$hours.t('HOUR');
	$res['uptime'] .= '&nbsp;'.$min.t('MINUTE');

	//MEMORY
	$res['memTotal'] = $sysinfo[0]['TotalVisibleMemorySize'];
	$res['memFree'] = $sysinfo[0]['FreePhysicalMemory'];
	$res['memUsed'] = $res['memTotal'] - $res['memFree'];
	$res['memPercent'] = round($res['memUsed'] / $res['memTotal']*100,2);

	$swapinfo = GetWMI($wmi,"Win32_PageFileUsage", array('AllocatedBaseSize','CurrentUsage'));

	// LoadPercentage
	$loadinfo = GetWMI($wmi,"Win32_Processor", array("LoadPercentage"));
	$res['loadAvg'] = $loadinfo[0]['LoadPercentage'];

	return $res;
}
/**
 * 
 * @param $wmi
 * @param $strClass
 * @param $strValue
 * @return array
 *
 */
function GetWMI($wmi,$strClass, $strValue = array()) {
	$arrData = array();

	$objWEBM = $wmi->Get($strClass);
	$arrProp = $objWEBM->Properties_;
	$arrWEBMCol = $objWEBM->Instances_();
	foreach($arrWEBMCol as $objItem) {
		@reset($arrProp);
		$arrInstance = array();
		foreach($arrProp as $propItem) {
			eval("\$value = \$objItem->" . $propItem->Name . ";");
			if (empty($strValue)) {
				$arrInstance[$propItem->Name] = trim($value);
			} else {
				if (in_array($propItem->Name, $strValue)) {
					$arrInstance[$propItem->Name] = trim($value);
				}
			}
		}
		$arrData[] = $arrInstance;
	}
	return $arrData;
}
function is_email($value){
	return preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i', $value);
}
?>
