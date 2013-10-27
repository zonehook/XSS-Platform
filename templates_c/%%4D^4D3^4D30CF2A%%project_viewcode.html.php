<?php /* Smarty version 2.6.26, created on 2013-08-22 20:46:47
         compiled from project_viewcode.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>XSS Platform</title>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/style/screen.css" type="text/css" media="screen, projection"> 
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/style/print.css" type="text/css" media="print"> 
<!--[if lt IE 8]><link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/style/ie.css" type="text/css" media="screen, projection"><![endif]-->
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/style/style.css" type="text/css" media="screen, projection">
<script type="text/javascript" src="<?php echo $this->_tpl_vars['url']['root']; ?>
/source/js/jquery.js"></script>
<?php echo '
<style>
ul { margin:0}
</style>
'; ?>

</head>
<body>
<div class="container">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menus.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="span-19 right">
<p>当前位置： <a href="<?php echo $this->_tpl_vars['url']['root']; ?>
">首页</a> > 项目代码</p>
<caption><h3>项目名称: <?php echo $this->_tpl_vars['project']['title']; ?>
</h3></caption>
<p>
<label>项目代码：</label>
<code>
<?php echo $this->_tpl_vars['code']; ?>

</code>
</p>
<label>如何使用：</label>
<p>将如下代码植入怀疑出现xss的地方（注意'的转义），即可在 <a href="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=project&act=view&id=<?php echo $this->_tpl_vars['project']['id']; ?>
">项目内容</a> 观看XSS效果。</p>
<code>
<?php echo $this->_tpl_vars['scriptShow1']; ?>

</code>
</p>
<p>
或者
</p>
<p>
<code>
<?php echo $this->_tpl_vars['scriptShow2']; ?>

</code>
</p>

<p>

再或者以你任何想要的方式插入

</p>

<p>
<code>
<?php echo $this->_tpl_vars['codeurl']; ?>

</code>
</p>
<p>
<?php if ($this->_tpl_vars['ty'] == 'create'): ?>
<input type="button" value="完成" onclick="location.href='<?php echo $this->_tpl_vars['url']['root']; ?>
'" />
<?php else: ?>
<input type="button" value="返回首页" onclick="location.href='<?php echo $this->_tpl_vars['url']['root']; ?>
'" />
<?php endif; ?>
</p>
</div>
</div>
</body>
</html>