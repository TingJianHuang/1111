<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <link rel="stylesheet" href="/Public/plugin/style/global/css/global.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/plugin/style/global/css/style.css" type="text/css"/>
        <script src="/Public/plugin/style/global/js/jquery-1.8.3.min.js"></script>
        <script src="/Public/plugin/uploadify/api-uploadify.js" type="text/javascript"></script> 
        <style>
            tr{height:40px;line-height:40px}
        </style>
    </head>
    <body>
        <div class="header lr10">
            <?php echo R('admin/headerment',array($ment));?>
        </div>
        <div class="bk10"></div>
        <div class="table-list lr10">
            <!--start-->
            <form name="myform" action="" method="post">
                <table width="100%" cellspacing="0">
                    <tr>
                        <td width="220" align="right">网站地址：</td>
                        <td><input type="text" name="" value="<?php echo C('URL_DOMAIN');?>"  class="input-text wid200"></td>
                    </tr>
                    <tr>
                        <td width="220" align="right">网站logo：</td>
                        <td>
                            <input type="text" id="imagetext" value="<?php echo C('web_logo');?>" name="web_logo" class="input-text wid300">
                                <input type="button" class="button"
                                       onClick="GetUploadify('<?php echo C("URL_DOMAIN");?>', 'uploadify', 'LOGO上传', 'image', 'banner', 1, 500000, 'imagetext')" 
                                       value="上传LOGO"/>
                                图片大小：105*63
                        </td>
                    </tr>
                    <tr>
                        <td width="220" align="right">微信公共号二维码：</td>
                        <td>
                            <input type="text" id="imagetext1" value="<?php echo C('web_logo1');?>" name="web_logo1" class="input-text wid300">
                                <input type="button" class="button"
                                       onClick="GetUploadify('<?php echo C("URL_DOMAIN");?>', 'uploadify', 'LOGO上传', 'image', 'banner', 1, 500000, 'imagetext1')" 
                                       value="上传LOGO"/>
                                图片大小：105*63
                        </td>
                    </tr>
<tr>
                        <td width="220" align="right">邀请二维码背景图：</td>
                        <td>
                            <input type="text" id="imagetext3" value="<?php echo C('web_logo2');?>" name="web_logo2" class="input-text wid300">
                                <input type="button" class="button"
                                       onClick="GetUploadify('<?php echo C("URL_DOMAIN");?>', 'uploadify', 'LOGO上传', 'image', 'banner', 1, 500000, 'imagetext3')" 
                                       value="上传LOGO"/>
                                图片大小：105*63
                        </td>
                    </tr>
                    <tr>
                        <td width="220" align="right">网站名称：</td>
                        <td><input type="text" value="<?php echo C('web_name');?>" name="web_name" class="input-text wid200"></td>
                    </tr>
                    <tr>
                        <td width="220" align="right">网站短名称：</td>
                        <td><input type="text" value="<?php echo C('web_name_two');?>" name="web_name_two" class="input-text wid200"></td>
                    </tr>
                    <tr>
                        <td width="220" align="right">网站关键字：</td>
                        <td><input type="text" value="<?php echo C('web_key');?>" name="web_key" class="input-text wid300"></td>
                    </tr>
                    <tr>
                        <td width="220" align="right">网站描述：</td>
                        <td><textarea name="web_des" class="wid300" style="height:80px"><?php echo C('web_des');?></textarea>
                        </td>
                    </tr>	

                    <tr>
                        <td width="220" align="right">版权信息：</td>
                        <td><textarea name="web_copyright" class="wid300" style="height:80px"><?php echo C('web_copyright');?></textarea>
                        </td>
                    </tr>	
                    <tr>
                        <td width="220" align="right"></td>
                        <td><input type="submit" class="button" name="dosubmit"  value=" 提交 " ></td>
                    </tr>
                </table>
            </form>

        </div><!--table-list end-->

        <script>

        </script>
    </body>
</html>