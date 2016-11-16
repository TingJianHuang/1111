<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>后台首页</title>
        <link rel="stylesheet" href="/Public/plugin/style/global/css/global.css" type="text/css"/>
        <link rel="stylesheet" href="/Public/plugin/style/global/css/style.css" type="text/css"/>
        <style>
            body{ background-color:#fff}
            .a_button{color:#fff; font-weight:bold; cursor:pointer; text-decoration:none;border:1px solid #090;padding:5px; background-color:#0c0}
        </style>
    </head>
    <body>
        <div class="bk10"></div>
        <div class="header-data lr10">
            <b>商品&nbsp;&nbsp;&nbsp;ID:</b><b style="color:red;padding-left:10px;"><?php echo $ginfo['id']; ?></b><br/>
            <b>商品期数:</b><b style="color:red; padding-left:10px;">第(<?php echo $ginfo['qishu']; ?>)期, 最大期数<?php echo $ginfo['maxqishu']; ?>期</b><br/>
            <b>商品标题:</b><b style="color:red;padding-left:10px;"><?php echo $ginfo['title']; ?></b><br/>
            <b>商品信息:</b><b style="color:red;padding-left:10px;"><?php  echo "总价格:".$ginfo['money']."&nbsp;&nbsp;&nbsp;&nbsp;"; echo "单价:".$ginfo['yunjiage']."&nbsp;&nbsp;&nbsp;&nbsp;"; echo "总需人次:".$ginfo['zongrenshu']."&nbsp;&nbsp;&nbsp;&nbsp;"; echo "参与人次:".$ginfo['canyurenshu']."&nbsp;&nbsp;&nbsp;&nbsp;"; echo "剩余人次:".$ginfo['shenyurenshu']."&nbsp;&nbsp;&nbsp;&nbsp;"; ?></b><br/>
            <b>开奖状态:</b><b style="color:red;padding-left:10px;">
                <?php if($ginfo['q_uid'] && $ginfo['shenyurenshu']==0){ echo "已揭晓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; echo "中奖人: ".R("Base/huode_user_name",array($ginfo['q_uid'],'username','all'))."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; echo "中奖云购码: ".$ginfo['q_user_code']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; echo "揭晓时间: ".date("Y-m-d H:i:s",$ginfo['q_end_time']); }else if($ginfo['shenyurenshu']!=0 && $ginfo['xsjx_time'] == 0){ echo "商品还在进行中..."; }else if($ginfo['shenyurenshu']==0 && $ginfo['xsjx_time'] != 0){ echo "限时揭晓商品味道揭晓时间..."; }else if($ginfo['shenyurenshu']==0 && $ginfo['xsjx_time'] == 0){ echo "<a href='/goods/goods_one_ok/id/".$ginfo['id']."' class='a_button'>手动揭晓</a>"; } ?>

            </b>
        </div>
        <div class="bk10"></div>
        <div class="table-list lr10">
            <table width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="10%">订单号</th>
                        <th width="20%">购买时间</th>        
                        <th width="5%"><a href="/goods/goods_go_one/id/<?php echo $yonghuid?>/key/renci">购买次数<a></th>    
                                    <th width="25%">购买人(uid)</th>             
                                    <th width="20%">来自</th>
                                    </tr>
                                    </thead>
                                    <tbody style="text-align:center">
                                        <?php  foreach($go_list as $go){ ?>
                                        <tr>
                                            <td><?php echo $go['code']; ?></td>
                                            <td><?php echo date("Y-m-d H:i:s",$go['time']); ?></td>
                                            <td><?php echo $go['gonumber']; ?></td>
                                            <td>昵称:<?php echo $go['username']; ?>(uid:<?php echo $go['uid']; ?>)<?php if ($go['huiyuan']==1){echo "(机器人)";}else{echo "(真实用户)";} ?></td>
                                            <td><?php echo $go['ip']; ?></td>
                                        </tr>
                                        <?php } ?>
                                        <?php if(!$go_list){ ?>
                                        <tr>
                                            <td colspan="5">还没有购买记录！</td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    </table>     


                                    </div><!--table_list end-->
                                    <div id="pages"><ul><li>共 <?php echo $zongji; ?> 条</li><?php echo $fenye->show('one','li'); ?></ul></div>
                                    </body>
                                    </html>