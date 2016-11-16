<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="">
<script type="text/javascript" src="/Public/piyungou/js/jquery-1.8.3.min.js"></script>
<script src="/Public/piyungou/js/jquery.JPlaceholder.js"></script>
<title>注册<?php echo C('web_name_two');?>网</title>
<link type="text/css" rel="stylesheet" href="/Public/App/Css/us.css" />
<!--[if lte IE 6]>
<script src="/App/Js/iepng.js" type="text/javascript"></script>
<script type="text/javascript">
        DD_belatedPNG.fix('div,ul,img,li,p,a,i,span,em,h3,th,td');
</script>
<![endif]-->
</head>
<body>
<div class="top_bar">
	<a class="logo" href="/index/index" style="background: url(/Public/uploads/<?php echo R('base/Getlogo',array());?>) no-repeat;"><h1><?php echo C('web_name_two');?></h1></a>
   
    <p class="clear"></p>
</div>
<script type="text/javascript" src="/Public/piyungou/js/jquery.Validform.min.js"></script>
<script type="text/javascript" src="/Public/piyungou/js/passwordStrength-min.js"></script>
<script type="text/javascript">

$(function(){
	var demo=$(".login_ConInput").Validform({
		tiptype:2,
		usePlugin:{
			passwordstrength:{
				minLen:6,
				maxLen:20,
				trigger:function(obj,error){
					if(error){
						obj.parent().next().find(".Validform_checktip").show();
						obj.parent().next().find(".passwordStrength").hide();
					}else{
						obj.parent().next().find(".Validform_checktip").hide();
						obj.parent().next().find(".passwordStrength").show();
					}
				}
			}
		}

	});

})
</script>


<div class="log_reg_wrap"  style="background-image:url(/Public/App/img/register_bg.jpg);">
	<div class="log_reg_box">
    	<h2 class="reg_tt">注册<?php echo C('web_name_two');?>网</h2>
        <p class="blank30"></p>
        <form method="post" action="" enctype="application/x-www-form-urlencoded">
           <input type="hidden" name="regcount" value="1" />
            <table width="260" border="0" cellspacing="0" cellpadding="0" class="form_table2" align="center">
              <tr>
                <td >
                		<div class="form_input_wrap">
							<input id="ipyanz" datatype="m | e" sucmsg="帐号验证通过！" placeholder="手机号或邮箱" nullmsg="请填写帐号！" errormsg="手机号或邮箱！" type="text" name="name" class="form_input" />
                            <div class="Validform_checktip"></div>
                            <div class="info">请输入您的邮箱或手机号码！<span class="dec"></span></div>
                        </div>
                 </td>
              </tr>
              <tr>
                <td>
                		<div class="form_input_wrap">
							<input datatype="*6-20" plugin="passwordStrength" nullmsg="请设置密码！" placeholder="密码" errormsg="密码范围在6~20位之间！" type="password" name="userpassword" class="form_input strength_input" maxlength="20"/>
                            <div class="Validform_checktip"></div>
                            <div class="passwordStrength" style="display:none"><b>密码强度：</b><span>弱</span><span>中</span><span class="last">强</span><span class="dec"><s class="dec1">&#9670;</s><s class="dec2">&#9670;</s></span></div>
                            <div class="info">请输入6-18位字母和数字的组合。<br>不推荐使用纯数字、纯字母、纯符号做密码<span class="dec"></span></div>
                        </div>
                 </td>
              </tr>
              <tr>
                <td>
                		<div class="form_input_wrap">
							<input tip="test"  datatype="*" recheck="userpassword"  placeholder="确认密码" nullmsg="请再输入一次密码！" errormsg="您两次输入的账号密码不一致！" type="password" name="userpassword2" class="form_input" maxlength="20"/>
                            <div class="Validform_checktip"></div>
                            <div class="info">请再输入一次密码！<span class="dec"></span></div>
                        </div>
                 </td>
              </tr>

			                <tr>
                <td><input name="submit" type="submit" class="reg_btn" value="注册"></td>
              </tr>
            </table>
        <div class="text_bar">已有账号，<a href="/user/login" class="blue_link">[请登录]</a></div>
    <div class="agree_to_the_terms form_input_wrap"><input name="haveread" id="haveread" type="checkbox" value="1" checked class="check_input" datatype="*"  nullmsg="请先阅读并接受本网服务条款！" errormsg="请先阅读并接受本网服务条款！" /><a href="/help/3" target="_blank">&nbsp;我已阅读并接受本网服务条款</a> <div class="info">请先阅读并接受本网服务条款！<span class="dec"><s class="dec1">&#9670;</s><s class="dec2">&#9670;</s></span></div><div class="Validform_checktip"></div></div>
         </form>
    </div>
</div>
<div class="footer_jian_wrap footer_jian_nbg">
	<div class="footer_jian">
		<p><a target="_blank" href="/help/15">关于我们</a><em class="line"></em>
		<a target="_blank" href="/help/16">加入我们</a><em class="line"></em>
		<a target="_blank" href="/help/13">投诉建议</a><em class="line"></em>
		<a target="_blank" href="/help/3">服务协议</a><em class="line"></em>
		<a target="_blank" href="/help/18">联系我们</a></p>
             <p><a href="" target="_blank" title="wangzhi"><?php echo C("web_name");?></a> &nbsp;<?php echo C('web_copyright');?></p>
    </div>
</div>
<p style="display:none">
</p>
<!--购物车底部结束-->
</body>
</html>