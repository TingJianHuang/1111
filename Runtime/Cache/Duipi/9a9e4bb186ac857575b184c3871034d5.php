<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台首页</title>
<link rel="stylesheet" href="/yyg/Public/plugin/style/global/css/global.css" type="text/css">
<link rel="stylesheet" href="/yyg/Public/plugin/style/global/css/style.css" type="text/css">
<link rel="stylesheet" href="/yyg/Public/plugin/calendar/calendar-blue.css" type="text/css"> 
<script type="text/javascript" charset="utf-8" src="/yyg/Public/css/css/calendar.js"></script>
<script src="/yyg/Public/plugin/style/global/js/jquery-1.8.3.min.js"></script>
<style>
body{ background-color:#fff}
tr{ text-align:center}
</style>
</head>
<body>
<div class="header lr10">
<?php echo R('admin/headerment',array($ment));?>
</div>
<div class="bk10"></div>


<div class="bk10"></div>
<form action="#" method="post" name="myform">
<div class="table-list lr10">


        <table width="100%" cellspacing="0">
     	<thead>
        		<tr>
                    <th width="5%">ID</th>        
                    <th width="25%">商品标题</th>    
                    <th width="8%">所属栏目</th>             
                    <th width="10%">已参与/总需</th>
                    <th width="5%">单价/元</th>
                    <th width="10%">期数/最大期数</th>
		    <th width="10%">所属商户</th>		
                    <th width="15%">管理</th>
				</tr>
        </thead>
        <tbody>				
        	<?php foreach($yyslist as $v) { ?>
            <tr>
                <td><?php echo $v['id'];?></td>
                <td><span style=""><?php echo R("Base/strcut",array($v['title'],30));?></span></td>
                <td><a href="<?php echo G_ADMIN_PATH; ?>/content/goods_list/<?php echo $v['cateid']; ?>"><?php echo $this->categorys[$v['cateid']]['name']; ?></a></td>
                <td><font color="#ff0000"><?php echo $v['canyurenshu'];?></font> / <?php echo $v['zongrenshu'];?></td>
                <td><?php echo $v['yunjiage'];?></td>
                <td><?php echo $v['qishu'];?>/<?php echo $v['maxqishu'];?></td>
                
                
                <td class="action">
				<?php echo R("Base/huode_user_name",array($v['seller_id']));?></td>
				<td class="action">
				[<a href="/yyg/seller/goods_audit_edit/id/<?php echo $v['id'];?>" >编辑商品</a>] 
				[<a href="/yyg/seller/goods_audit/id/<?php echo $v['id'];?>" onclick="return confirm('请仔细核对后再通过审核该商品！');">通过审核</a>]  
				</td>
            </tr>
            <?php } ?>
        </tbody>
     </table>     

    </form>
	

    	<div id="pages"><ul><li>共 <?php echo $zongji; ?> 条</li><?php echo $fenye->show('two','li'); ?></ul></div>
</div>



</body>
</html>