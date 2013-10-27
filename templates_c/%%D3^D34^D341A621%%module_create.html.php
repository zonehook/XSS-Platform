<?php /* Smarty version 2.6.26, created on 2013-08-22 20:52:03
         compiled from module_create.html */ ?>
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
		ShowError("模块名称不能为空");
		return false;
	}
	$("#contentForm").submit();
}
function ShowError(content){
	$("#contentShow").attr("class","error");
	$("#contentShow").html(content);
}
function AddKey(obj,keyname){
	var liObj=document.createElement("li");
	$(obj).parent().before(liObj);
	var input=document.createElement("input");
	$(liObj).append(input);
	var btn=document.createElement("input");
	$(liObj).append(btn);
	$(liObj).append(document.createTextNode(" "));
	btn.type="button";
	$(btn).val("添加");
	$(liObj).append(document.createTextNode(" "));
	var del=document.createElement("a");
	$(liObj).append(del);
	$(del).attr("href","javascript:void(0)");
	$(del).html("删除");
	$(btn).click(function(){
		var txt=$(input).val();
		if(txt==""){
			alert("请输入参数名");
		}else{
			$(input).remove();
			$(btn).remove();
			var checkObj=document.createElement("input");
			$(del).before(checkObj);
			checkObj.type="checkbox";
			checkObj.checked="checked";
			var keyName=keyname!=null ? keyname : "keys[]";
			$(checkObj).attr("name",keyName);
			$(checkObj).attr("value",txt);
			$(del).before(document.createTextNode(" "+txt+" "));
		}
	});
	$(del).click(function(){
		$(liObj).remove();
	});
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
<div class="span-19 right">
<p>当前位置： <a href="<?php echo $this->_tpl_vars['url']['root']; ?>
">首页</a> > 创建模块</p>
<form id="contentForm" action="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=module&act=create_submit" method="post">
<input type="hidden" name="token" value="<?php echo $this->_tpl_vars['show']['user']['token']; ?>
" />
<fieldset> 
	<legend>创建模块</legend>
	<div id="contentShow"></div>
	<p> 
		<label for="title">模块名称</label><br> 
		<input type="text" class="title" name="title" id="title"> 
	</p>
	<p> 
		<label for="description">模块描述</label><br> 
		<textarea style="height:80px" name="description" id="description"></textarea>
	</p>
    <p> 
		<label for="description">参数 (需要服务器接收的参数名)</label><br> 
        <ul id="keyList">
        	<?php $_from = $this->_tpl_vars['keys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
        	<li> <input name="keys[]" value="<?php echo $this->_tpl_vars['v']['key']; ?>
" type="checkbox" checked="checked" /> <?php echo $this->_tpl_vars['v']['key']; ?>
 (<?php echo $this->_tpl_vars['v']['value']; ?>
)</li>
            <?php endforeach; endif; unset($_from); ?>
            <li><a href="javascript:void(0)" onclick="AddKey(this)">添加</a></li>
        </ul>
	</p>
	<p> 
		<label for="description">配置参数 (使用此模块时需要配置的参数，如参数名为user，则代码引用：<?php echo '{set.user}'; ?>
)</label><br> 
        <ul id="setkeyList">
            <li><a href="javascript:void(0)" onclick="AddKey(this,'setkeys[]')">添加</a></li>
        </ul>
	</p>
    <p> 
		<label for="description">代码</label> (<?php echo '{projectId}为项目id,{set.***}为***配置参数'; ?>
)<br> 
		<textarea name="code" id="code" style="width:700px"></textarea>
	</p>
    <p> 
		<label for="description">是否公开</label>  
        <input type="radio" name="isOpen" value="0" checked="checked" /> 私有 
        <input type="radio" name="isOpen" value="1" /> 公开 
        <br> 
	</p>
	<p> 
		<input type="button" value="创建" onclick="SubmitContent()"> &nbsp;&nbsp;
		<input type="button" value="取消" onclick="history.go(-1)"> 
	</p> 
</fieldset> 
</form>
</div>
</div>
</body>
</html>