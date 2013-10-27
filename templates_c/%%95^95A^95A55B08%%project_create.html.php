<?php /* Smarty version 2.6.26, created on 2013-08-22 20:45:55
         compiled from project_create.html */ ?>
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
<script type="text/javascript">
function SubmitContent(){
	if($("#title").val()==""){
		ShowError("项目名称不能为空");
		return false;
	}
	$("#contentForm").submit();
}
function ShowError(content){
	$("#contentShow").attr("class","error");
	$("#contentShow").html(content);
}
</script>
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
<div style="span-19 right">
<p>当前位置： <a href="<?php echo $this->_tpl_vars['url']['root']; ?>
">首页</a> > 创建项目</p>
<form id="contentForm" action="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=project&act=create_submit" method="post">
<input type="hidden" name="token" value="<?php echo $this->_tpl_vars['show']['user']['token']; ?>
" />
<fieldset> 
	<legend>创建项目</legend>
	<div id="contentShow"></div>
	<p> 
		<label for="title">项目名称</label><br> 
		<input type="text" class="title" name="title" id="title"> 
	</p> 
	
	<p> 
		<label for="description">项目描述</label><br> 
		<textarea name="description" id="description"></textarea>
	</p>
	<p> 
		<input type="button" value="下一步" onclick="SubmitContent()"> &nbsp;&nbsp;
		<input type="button" value="取消" onclick="history.go(-1)"> 
	</p> 
</fieldset> 
</form>
</div>
</div>
</body>
</html>