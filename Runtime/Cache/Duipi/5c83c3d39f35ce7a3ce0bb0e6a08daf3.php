<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <link rel="stylesheet" href="/Public/plugin/style/global/css/global.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/plugin/style/global/css/style.css" type="text/css"/>
        <style>
            .t-cache{padding:20px;}
            .t-cache li{ border-bottom:1px solid #eee; line-height:35px;}
        </style>
    </head>
    <body>
        <div class="bk10"></div>
        <div class="header-data lr10">
            <b>清空缓存</b> 
        </div>
        <div class="bk10"></div>

        <div class="t-cache">
            <form method="post" action="">
                <li><input name="cache[Cache]" value="Cache" type="checkbox" checked />&nbsp;模板缓存 </li>
                <li><input name="cache[Data]" value="Data" type="checkbox" checked />&nbsp;数据缓存 </li>
                <li><input name="cache[Temp]" value="Temp" type="checkbox" checked />&nbsp;数据目录</li>
                <li><input name="cache[Logs]" value="Logs" type="checkbox" checked/>&nbsp;日志文件</li>
                <div class="bk10"></div>
                <input name="dosubmit" value="开始清除" type="submit" class="button" style="width:60px; text-align:center" />
            </form>
        </div>

        <div class="bk30"></div>
    </body>
</html>