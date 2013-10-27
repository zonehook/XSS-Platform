<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>xsser.me for sae  齐迹</title>
</head>

<body>
<h1>xsser.me for sae</h1>
<h2 style="color:#F00">特别注意，此版本仅用于SAE平台，你非要本地使用我表示你肯定用不了！</h2>
<h3>step1：导入数据库文件</h3>
<h3>step2：执行sql 替换数据库中写死的xsser.me sql:UPDATE oc_module SET code=REPLACE(code, 'http://xsser.me', 'http://你懂的.sinaapp.com');</h3>
<h3>step3：修改配置文件中的 发送邮件的邮箱和密码，config.php文件倒数2-3行。。修改$config['urlroot']为你的域名</h3>
<h3>step4：请确定可以已经初始化了你的sae上的mysql和memcache</h3>
<h3>如果你还有问题，请关注我的微博并<a href="http://weibo.com/qiji2010" target="_blank">@齐迹2010</a></h3>
<p>你确定已经关注我的微博了？那就开始下载把<a href="" target="_blank">click</a></p>
</body>
</html>

UPDATE oc_module SET code=REPLACE(code, 'http://xsser.me', 'http://xss.alisec.cn');