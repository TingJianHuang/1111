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

        <div class="header-data lr10">

            <span class="lr5"></span><input class="button" type="button" onclick="window.location.href = '/member/lists/type/day_new'" value=" 今日新增 "/>	
            <span class="lr5"></span><input class="button" type="button" onclick="window.location.href = '/member/lists/type/day_shop'" value=" 今日消费 "/>
            <span class="lr5"></span><input class="button" type="button" onclick="window.location.href = '/member/lists/type/noreg'" value=" 未认证 "/>
            <span class="lr5"></span><input class="button" type="button" onclick="window.location.href = '/member/lists/type/del'" value=" 已删除 "/>	
            <span class="lr5"></span>
            账号绑定:
            <select name="sousuo">
                <option value="b_qq">绑定QQ账户</option>					
            </select>
            <input class="button" type="button" onclick="window.location.href = '/member/lists/type/b_qq'"  value="查看"/>

            <span class="lr10"></span>
            排序:
            <select id="user_paixu">
                <option value="uid">会员uid</option>
                <option value="money" >账户金额</option>
                <option value="score">会员福分</option>
                <option value="jingyan">会员经验</option>
                <option value="login_time">登陆时间</option>
                <option value="time">注册时间</option>
            </select>
            <input class="button" type="button" onclick="order_fun_sub('desc')" value="倒序"/>
            <input class="button" type="button" onclick="order_fun_sub('asc')" value="正序"/>

            <script>
                var user_paixu_value = 'uid';
                function order_fun_sub(type) {
                    window.location.href = "/member/lists/type/<?php echo ($weer_type); ?>/ziduan/" + user_paixu_value + "/order/" + type;
                }
                document.getElementById("user_paixu").onchange = function () {
                    user_paixu_value = this.value;
                }
            </script>	


            <form id="form" name="form" method="post" action="" onsubmit="" style="float:left">  
                排序:
                <select name="sousuo">
                    <option value="id">会员uid</option>
                    <option value="nickname" >会员昵称</option>
                    <option value="email">会员邮箱</option>
                    <option value="mobile">会员手机</option>
                </select>
                <input type="text" name="content" class="input-text"/>
                <input type="submit" class="button" name="submit" value="确认搜索" />
            </form>

            <div class="lr10" style="display:inline-block;margin-left:0px;">
                共有会员: <font color="#0c0"> <?php echo $zongji; ?> </font>人
                <span class="lr10"></span>
                今日注册: <font color="#f60"> <?php echo $member_new_num; ?> </font>人
                <span class="lr10"></span>
                删除会员: <font color="red"> <?php echo $member_del_num; ?> </font>人
            </div>
        </div>

        <div class="lr10" style="line-height:30px;color:#f60">
            <b>会员列表:</b> <?php echo $select_where; ?> &nbsp;&nbsp;&nbsp; 共找到 <?php echo $zongji; ?> 个会员
        </div>
        


            <div class="table-list lr10">        
                <!--start-->
                <table width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th align="center"> </th>
                            <th align="center">UID</th>
                            <th align="center">用户名</th>
                            <th align="center">邮箱</th>
                            <th align="center">手机</th>
                            <th align="center">金额</th>
                            <th align="center">福分</th> 
                            <th align="center">经验值</th>			
                            <th align="center">登陆时间,地址,IP</th>
                            <th align="center">1级</th>
                            <th align="center">2级</th>
                            <th align="center">3级</th>
                            <th align="center">注册时间</th>		
                            <th align="center">账户绑定</th>
                            <th align="center">机器人</th>
                            <th align="center">冻结</th>
                            <th align="center">模拟登陆</th>
                            <th align="center">管理</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($huiyuans as $v){ ?>
                        <tr>
                            <td align="center"><input type="checkbox" name="id[]" value="<?php echo $v['uid'];?>" style="background:none; border:none;" /> </td>
                            <td align="center"><?php echo $v['uid']; ?></td>
                            <td align="center"><?php echo $v['username']; ?></td>	
                            <td align="center"><?php echo $v['email']; ?> <?php if($v['emailcode']==1){?><span style="color:#0c0">√</span><?php }else{ ?><span style="color:red">×</span><?php } ?></td>	
                            <td align="center"><?php echo $v['mobile']; ?> <?php if($v['mobilecode']==1){?><span style="color:#0c0">√</span><?php }else{ ?><span style="color:red">×</span><?php } ?></td>	
                            <td align="center"><?php echo $v['money']; ?></td>
                            <td align="center"><?php echo $v['score']; ?></td>
                            <td align="center"><?php echo $v['jingyan']; ?></td>				
                            <td align="center"><?php echo R('base/buy_time',array($v['login_time'],"未登录"));?>,<?php echo trim($v['user_ip'],","); ?></td>	
                            <td align="center"><?php echo ($v['yaoqing']); ?></td>
                            <td align="center"><?php echo ($v['yaoqing2']); ?></td>
                            <td align="center"><?php echo ($v['yaoqing3']); ?></td>
                            <td align="center"><?php echo R('base/buy_time',array($v['time']));?></td>
                            <td align="center"><?php echo trim($v['band'],","); ?></td>
                            <td align="center"><?php
 if($v['huiyuan']==1){ echo '<font color="#ff0000">已加入机器人</font>'; }else{ echo "<a href='/goods/goods_set/type/huiyuan/value/".$v['uid']."'>加入机器人</a>"; } ?>
                                <?php
 if($v['huiyuan']==0){ echo '<font color="#ff0000">未加入机器人</font>'; }else{ echo "<a href='/goods/goods_set/type/huiyuan1/value/".$v['uid']."'>取消机器人</a>"; } ?></td>
                            <td align="center"><?php
 if($v['dongjie']==0){ echo '帐号正常'; } ?>
                                <?php
 if($v['dongjie']==1){ echo '<font color="#ff0000">帐号冻结</font>'; } ?></td>
                            <td align="center">
                                <a target="_blank" href="/member/moni/id/<?php echo $v['uid'];?>">模拟登陆</a>	
                            </td>
                            <td align="center">
                                <?php if($table=='yys_yonghu_del'): ?>
                                <a href="/member/huifu/id/<?php echo $v['uid'];?>">恢复</a>				
                                <a href="/member/del_true/id/<?php echo $v['uid'];?>" onClick="return confirm('是否真的删除！');">删除</a>
                                <?php else: ?>
                                [<a href="/member/modify/id/<?php echo $v['uid'];?>">改</a>]					
                                [<a href="/member/del/id/<?php echo $v['uid'];?>" onClick="return confirm('是否真的删除！');">删</a>]
                                <?php endif; ?>
                            </td>            	
                        </tr>

                        <?php } ?>
                    </tbody>

                </table>
            </div><!--table-list end-->
          
      
        <script type="text/javascript" language="javascript">
            function selectBox(selectType) {
                var checkboxis = document.getElementsByName("id[]");
                if (selectType == "reverse") {
                    for (var i = 0; i < checkboxis.length; i++) {

                        checkboxis[i].checked = !checkboxis[i].checked;
                    }
                } else if (selectType == "all")
                {
                    for (var i = 0; i < checkboxis.length; i++) {
                        //alert(checkboxis[i].checked);  
                        checkboxis[i].checked = true;
                    }
                }
            }
        </script>  
        <div id="pages" style="margin:10px 10px">		
            <ul><li>共 <?php echo $zongji; ?> 条</li><?php echo $fenye->show('one','li'); ?></ul>
        </div>
        <script>
        </script>
    </body>
</html>