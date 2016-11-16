<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <link rel="stylesheet" href="/Public/plugin/style/global/css/global.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/plugin/style/global/css/style.css" type="text/css"/>
    </head>
    <body>
        <div class="header lr10">
            <?php echo R('admin/headerment',array($ment));?>
        </div>

        <div class="bk10"></div>

        <div class="table-list lr10">
            <form name="myform" action="" method="post">
                <table width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10%">序号</th>
                            <th width="15%" align="left">用户名</th>
                            <th width="10%" align="left">所属角色</th>
                            <th width="10%" align="left">最后登录IP</th>
                            <th width="20%" align="left">最后登录时间</th>
                            <th width="15%" align="left">E-mail</th>
                            <th width="15%">管理操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($AdminList as $v){ ?>
                        <tr>
                            <td width="10%" align="center"><?php echo $v['uid']; ?></td>
                            <td width="15%"><?php echo $v['username']; ?></td>
                            <td width="10%"><?php if($v['xianzhi']==0){echo "超级管理员";}else{echo "普通管理员";} ?></td>
                            <td width="10%"><?php echo $v['loginip']; ?></td>
                            <td width="20%"><?php echo date("Y-m-d H:i:s",$v['logintime']); ?></td>
                            <td width="15%"><?php echo $v['useremail']; ?></td>
                            <td width="15%" align="center">
                                <a href="/admin/edit/id/<?php echo $v['uid']; ?>">修改</a>
                                <span class="span_fenge lr5">|</span>
                                <a href="/admin/edit1/id/<?php echo $v['uid']; ?>">编辑权限</a>
                                <span class="span_fenge lr5">|</span>
                                <?php if($v['uid']==1){ ?>
                                <font color="#cccccc">删除</font>
                                <?php }else{ ?>
                                <a onclick="return confirm('是否删除该管理员！');" href="/admin/del/id/<?php echo $v['uid']; ?>">删除</a>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div id="pages"><ul><li>共 <?php echo $zongji; ?> 条</li><?php echo $fenye->show('one','li'); ?></ul></div>
            </form>
        </div>

        <script>

        </script>
    </body>
</html>