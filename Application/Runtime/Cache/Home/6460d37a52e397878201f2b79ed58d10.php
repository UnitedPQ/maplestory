<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<style type="text/css">
table                                    {margin:40px auto;}
td                                       {height:40px;color:#666;font-size:20px;border-bottom:1px dotted #999999;}
.msg                                     {display:block;width:120px;height:40px;line-height:40px;text-align:left;}
.user_msg                                {border:1px solid #CCC;width:160px;height:20px;border-radius:5px;color:#666;font-size:17px;}
.page_msg                                {text-decoration:none;color:#666;}
.page_msg:hover                          {color:#3DEBED;}
.addr_button                             {border:none;width:90px;height:30px;border-radius:8px;font-size:18px;}
.addr_button:hover                       {background:#C1E9FA;}
</style> 
<script type="text/javascript" src="/Public/JS/jquery-1.8.3.min.js"></script>
</head>

<body>
<table id="table">
<form action="/index.php/Home/Myhome/modify" method="post" id="form">
<tr><td>姓名：</td><td><input  class="user_msg" name='xingming' maxlength='5' type="text" value="<?php echo ($result["xingming"]); ?>" /></td></tr>
<tr><td>省份：</td><td><input class="user_msg" name='shengfen'  maxlength='8' type="text" value="<?php echo ($result["shengfen"]); ?>" /></td></tr>
<tr><td>城市：</td><td><input  class="user_msg" name='city'  maxlength='8' type="text" value="<?php echo ($result["city"]); ?>" /></td></tr>
<tr><td>街道：</td><td><input  class="user_msg" name='street'  maxlength='20' type="text" value="<?php echo ($result["street"]); ?>" /></td></tr>
<tr><td>电话：</td><td><input class="user_msg" name='phone'  maxlength='11' type="text" value="<?php echo ($result["phone"]); ?>" /></td></tr>
<tr><td>邮箱：</td><td><input class="user_msg" name='mail' maxlength='20'  type="text" value="<?php echo ($result["mail"]); ?>" /></td></tr>
</form>
<tr>
<td align="right"><button class="addr_button">修改地址</button></td>
<td align="right"><button class="addr_button">确认修改</button></td>
</tr>
</table>

<script type="text/javascript">
$(function()                                               //默认表单不激活
{
	$('.user_msg').attr('disabled',true);
});

$('.addr_button').eq(0).toggle(                            //激活表单 
function()               
{$('.user_msg').attr('disabled',false);},
function() 
{$('.user_msg').attr('disabled',true);});

$('.addr_button').eq(1).click(function()                   //修改收货地址
{
	if ($('.user_msg').attr('disabled')!='disabled')
	{
		var msg=true;
		for (var i=0;i<$('.user_msg').length;i++)
		{
			if ($('.user_msg').eq(i).val()
			.length<1)
			{msg=false;}
		}
		if (!msg)
		{alert('请确保信息完整不为空');}
		else
		{
			var auth=confirm('您确定要修改吗');
			if (auth)
			{
				$('#form').trigger('submit');
			}
			else
			{return false;}
		}
	}
	else
	{return false;}
});                    
</script>
</body>
</html>