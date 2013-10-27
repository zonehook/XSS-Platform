<?php
/**
 * config.php 系统配置：数据库连接、显示信息等
 * ----------------------------------------------------------------
 * OldCMS,site:http://www.oldcms.com
 */

/* 数据库连�?*/
$config['dbHost']		= "localhost";			//数据库地址
$config['dbUser']		= "xss";				//用户
$config['dbPwd']		= "sunshine";				//密码
$config['database']		= "xss";			//数据库名
$config['charset']		='utf8';				//数据库字符集
$config['tbPrefix']		='oc_';					//表名前缀
$config['dbType']		='mysql';				//数据库类 目前只支持mysql)

/* 注册配置 */
$config['register']		='close';				//normal,正常;invite,只允许邀请注�?close,关闭注册功能
$config['mailauth']		=false;					//注册时是否邮箱验 

/* url配置 */
$config['urlroot']		='http://xss.alisec.cn';//访问的url起始
$config['urlrewrite']	=false;					//是否启用Url Rewrite

/* 存储配置 */
$config['filepath']		=ROOT_PATH.'/upload';	//文件存储目录,结尾�?/'
$config['fileprefix']	=$config['urlroot'].'/upload'; //访问文件起始,结尾�?/'

/* 主题选择 */
$config['theme']		='default';				//主题选择
$config['template']		='default';				//模板选择

/* 显示设置 */
$config['show']=array(
	'sitename'			=>'xss',											//网站�?
	'sitedesc'			=>'xss',								//一句话简�?
	'keywords'			=>'xss',			//keywords
	'description'		=>'xss',	//description
	'adminmail'			=>'zone@rootkit.us'
);

/* 积分等级设置 */
$config['point']=array(
	'award'=>array(
		'publish'		=>2,
		'comment'		=>2,
		'invitereg'		=>10 					//邀请注册奖�?
	)
);

/* 其它设置 */
$config['timezone']		='Asia/Shanghai';		//时区，如UTC
$config['expires']		=3600;					//过期时长(�?
$config['debug']		=false;					//调试模式(是否显示程序、数据库等错�?
//邮箱配置
$config['email']		="";
$config['emailpwd']		="";
?>