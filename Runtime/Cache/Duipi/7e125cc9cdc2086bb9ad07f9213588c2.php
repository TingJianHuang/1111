<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>登录-<?php echo C("web_name");?></title>
<link type="text/css" rel="stylesheet" href="/Public/App/Css/us.css" />
<!--[if lte IE 6]>

<script src="/App/Js/iepng.js" type="text/javascript"></script>
<script type="text/javascript">
        DD_belatedPNG.fix('div,ul,img,li,p,a,i,span,em,h3,th,td');
</script>
<![endif]-->
<script type="text/javascript" src="/Public/piyungou/js/jquery-1.8.3.min.js"></script>
<script src="/Public/piyungou/js/jquery.JPlaceholder.js"></script>
</head>
<body>
<div class="top_bar">
	<a class="logo" href="/index/index" style="background: url(/Public/uploads/<?php echo R('base/Getlogo',array());?>) no-repeat;"><h1><?php echo C('web_name_two');?>网</h1></a>
    
    <p class="clear"></p>
</div>
<script type="text/javascript">
$(function(){
	var demo=$(".registerform").Validform({
		tiptype:2,
	});
})
</script>
<div class="log_reg_wrap"  style="background-image:url(/Public/App/Img/login_bg.jpg);">
	<div class="log_reg_box">
    	<h2>登录<?php echo C('web_name_two');?>网</h2>
        <p class="blank30"></p>
        <form class="registerform" method="post" action="">
            <table width="260" border="0" cellspacing="0" cellpadding="0" class="form_table2" align="center">
              <tr>
                <td >
                		<div class="form_input_wrap">
							<input class="form_input" name="username" type="text" placeholder="手机号/邮箱！" datatype="m | e" nullmsg="请填写帐号！" errormsg="手机号/邮箱！" />
                            <div class="Validform_checktip"></div>
                            <div class="info">请输入您账号！<span class="dec"><s class="dec1">&#9670;</s><s class="dec2">&#9670;</s></span></div>
                        </div>
                 </td>
              </tr>
              <tr>
                <td>
                		<div class="form_input_wrap">
							<input class="form_input" name="password" type="password" placeholder="密码" datatype="*6-20" nullmsg="请设置密码！" errormsg="密码范围在6~20位之间！"/>
                            <div class="Validform_checktip"></div>
                            <div class="info">请输入您的密码！<span class="dec"><s class="dec1">&#9670;</s><s class="dec2">&#9670;</s></span></div>
                        </div>
                 </td>
              </tr>
              <tr>
                <td><input name="submit" type="submit" value="登录" class="login_btn" ></td>
              </tr>
            </table>
        </form>
        <div class="text_bar"><a href="/user/register" class="ceb4">[免费注册]</a> | <a href="/user/findpassword" class="c999">[忘记密码]</a></div>
        <div class="cooperative_logging"><p>第三方登录</p><a href="/Qqlogin/index" class="qq_ico"></a> 
		<a href="/user/wxloginpc" class="qq_ico1"></a>
		</div>
    </div>
</div>
<div class="footer_jian_wrap footer_jian_nbg">
	<div class="footer_jian">
		<p><a target="_blank" href="/index/help/code/15">关于我们</a><em class="line"></em>
		<a target="_blank" href="/index/help/code/16">加入我们</a><em class="line"></em>
		<a target="_blank" href="/index/help/code/13">投诉建议</a><em class="line"></em>
		<a target="_blank" href="/index/help/code/3">服务协议</a><em class="line"></em>
		<a target="_blank" href="/index/help/code/18">联系我们</a></p>
             <p><a href="" target="_blank" title="wangzhi"><?php echo C("web_name");?></a> &nbsp;<?php echo C('web_copyright');?></p>
    </div>
</div>
</body>
</html>