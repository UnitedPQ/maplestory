<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>欢迎来到冒险岛</title>
<link rel="stylesheet" href="/Public/CSS/Head.css" />
<link rel="stylesheet" href="/Public/CSS/login.css" />
<script type="text/javascript" src="/Public/JS/jquery-1.8.3.min.js"></script>
</head>

<body>
<canvas id="canvas">您的浏览器版本过低</canvas>
<canvas id="canvas_2">您的浏览器版本过低</canvas>
<!--背景图-->
<div id="bgcolor"></div>

<!--头部标题-->
<div id="head_tag">
<div><a href="/index.php/Home/liu/liushuo" id="head_pic"></a></div>
<a href="/index.php/Home/Index/index" id="mxd_logo"><img src="/Public/IMAGES/hope.PNG" /></a>
</div>

<!--右侧固定标志-->
<div class="fix_logo"></div>
<div id="login_logo">
<?php if(isset($_COOKIE['user'])): ?><a href="/index.php/Home/Myhome/index" class="right_pic"><img id="user_photo" title="个人中心" src="/Public/IMAGES/<?php echo (session('photo')); ?>" /></a>
<span></span>
<a href="/index.php/Home/login/quit" class="right_pic" title="退出" >退出</a>
<?php else: ?>
<a href="#1" class="right_pic" id="login_button">登陆</a>
<a href="/index.php/Home/Index/register" class="right_pic" target="_blank">注册</a><?php endif; ?>
</div>

<!--登陆界面-->
<div id='black_cover'></div>
<div id="login_window">
<div>
<a href="javascript:" id="close_pic"><img src="/Public/IMAGES/close.png" /></a>
<table height="300" id="table1">
<form id='login_form' action="/index.php/Home/Login/index" method="post">
<tr><td align="center" colspan="2"><h1 id="dl">Maple Story</h1></td></tr>
<tr><td class="prefix">用户名:</td><td><input class='text' type="text" name="user"/></td></tr>
<tr><td class="prefix">密码:</td><td><input class='text' type="password" name="password" /></td></tr>
<tr><td colspan="2"><a href="javascript:" id="submit">登陆</a></td></tr>
</form>
</table>
</div>
</div>

<!--广告轮播效果-->
<div id="ad_animate">
<a href="/index.php/Home/Index/register" class="login_pic" target="_blank"><img src="/Public/IMAGES/fresh2014.png" /></a>
<?php if(is_array($ad_path)): foreach($ad_path as $key=>$vo): ?><a href="" class="ad_ad_animate_bg"><img class="ad_pic" src="/Public/IMAGES/<?php echo ($vo["pathname"]); ?>" width="1200" height="430" /></a><?php endforeach; endif; ?>
<span id="change_left"><img src="/Public/IMAGES/gallery_button_left.png" /></span>           
<span id="change_right"><img src="/Public/IMAGES/gallery_button_right.png" /></span>

<ul>
<?php if(is_array($ad_path)): foreach($ad_path as $key=>$vo): ?><li class="ad_li"></li><?php endforeach; endif; ?>
</ul>
</div>

<!--酷炫装备-->
<div class="commodity">
<p id="com_title">酷炫装备</p>
<?php if(is_array($kxzb_path)): foreach($kxzb_path as $key=>$vo): ?><div class="com_pic">
<div class="color_show"></div>
<a href="/index.php/Home/Pay/index" target="_blank"><img class='com_gif' src="/Public/IMAGES/<?php echo ($vo["path"]); ?>" /></a>
<span class="com_span1">
<a href="/index.php/Home/Pay/index" target="_blank"><?php echo ($vo["name"]); ?></a>
</span>
<span class="com_span2">
<img src="/Public/IMAGES/dot.gif" />
<span><?php echo ($vo["price"]); ?>点</span>
</span>
<span class="com_span3">
<img src="/Public/IMAGES/cart.png" />
<a href="/index.php/Home/Pay/index" target="_blank">购买</a>
</span>
</div><?php endforeach; endif; ?>
</div>

<!--商品展示-->
<div class='commodity_show'>
<div class="bg_pic">
<?php if(is_array($xpzs_path)): foreach($xpzs_path as $key=>$vo): ?><div>
<a class='commodity_show_pic' href=""><img src="/Public/IMAGES/<?php echo ($vo["path"]); ?>" /></a>
<a href=""><img src="/Public/IMAGES/a2_chrm_1.png" /><?php echo ($vo["name"]); ?></a>
</div><?php endforeach; endif; ?>
</div>
</div>

<!--实用消耗-->
<div class="commodity">
<p id="com_title">实用消耗</p>
<?php if(is_array($syxh_path)): foreach($syxh_path as $key=>$vo): ?><div class="com_pic">
<div class="color_show"></div>
<a href="/index.php/Home/Pay/syxh" target="_blank"><img class='com_gif' src="/Public/IMAGES/<?php echo ($vo["path"]); ?>" /></a>
<span class="com_span1">
<a href="/index.php/Home/Pay/syxh" target="_blank"><?php echo ($vo["name"]); ?></a>
</span>
<span class="com_span2">
<img src="/Public/IMAGES/dot.gif" />
<span><?php echo ($vo["price"]); ?>点</span>
</span>
<span class="com_span3">
<img src="/Public/IMAGES/cart.png" />
<a href="/index.php/Home/Pay/syxh" target="_blank">购买</a>
</span>
</div><?php endforeach; endif; ?>
</div>

<!--宠物中心-->
<div class="commodity">
<p id="com_title">宠物中心</p>
<?php if(is_array($cwzx_path)): foreach($cwzx_path as $key=>$vo): ?><div class="com_pic">
<div class="color_show"></div>
<a href="/index.php/Home/Pay/cwzx" target="_blank"><img class='com_gif' src="/Public/IMAGES/<?php echo ($vo["path"]); ?>" /></a>
<span class="com_span1">
<a href="/index.php/Home/Pay/cwzx" target="_blank"><?php echo ($vo["name"]); ?></a>
</span>
<span class="com_span2">
<img src="/Public/IMAGES/dot.gif" />
<span><?php echo ($vo["price"]); ?>点</span>
</span>
<span class="com_span3">
<img src="/Public/IMAGES/cart.png" />
<a href="/index.php/Home/Pay/cwzx" target="_blank">购买</a>
</span>
</div><?php endforeach; endif; ?>
</div>

<!--底部背景图-->
<div id="bottom_bgcolor">
<div class="bottom_bg"></div>
</div>

<!--底部介绍-->
<div class="bottom_bg_2">
</div>

<?php if(isset($_COOKIE['user'])): else: ?>
<script type="text/javascript" src="/Public/JS/digit.js"></script>
<script type="text/javascript" src="/Public/JS/HeadCanvas.js"></script><?php endif; ?>
<script type="text/javascript" src="/Public/JS/Head.js"></script>
<script type="text/javascript">
var module='/index.php/Home';
</script>
<script type="text/javascript" src="/Public/JS/login.js"></script>
</body>
</html>