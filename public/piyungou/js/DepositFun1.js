$(function(){
	function trim(s){
		if(s.length>0){
			if(s.charAt(0)==" ")
			s=s.substring(1,s.length);
			if(s.charAt(s.length-1)==" ")
			s=s.substring(0,s.length-1);
			 
			if(s.charAt(0)==" "||s.charAt(s.length-1)==" ")
				return trim(s);
		}
	  return s;
	}
  $("#J_amount").blur(function(){
     var Money=trim($("#J_amount").val());
	   if(Money==''){
	      $("#tip1").html("*&nbsp;&nbsp;请输入转积分");
	   }else if(Money>moneyacc){
	      $("#tip1").html("*&nbsp;&nbsp;输入额超出可转积分");
		  $(this).val("");
	   }else if(Money<=0){
	      $("#tip1").html("*&nbsp;&nbsp;0积分不可转换！");	
  		  $(this).val("");
	   }else{
	       $("#tip1").html("");
	   }     
	   
	});

	$("#exca1").click(function(){
		$("#exca2").parent('.ui-tab-item').removeClass("ui-tab-item-current");
		$("#exca2").css('cursor','pointer');
		$(this).css('cursor','default');
		$(this).parent('.ui-tab-item').addClass("ui-tab-item-current");
		$(this).removeClass("ui-tipbox-notselected");
		$("#exca2").addClass("ui-tipbox-notselected");
		$("#exca1 .ui-tipbox-icon .iconfont").html("");
		$("#exca2 .ui-tipbox-icon .iconfont").html("");
		memtion2();
		//ui-tab-item-current
	});
	$("#exca2").click(function(){
		$("#exca1").parent('.ui-tab-item').removeClass("ui-tab-item-current");
		$("#exca1").css('cursor','pointer');
		$(this).css('cursor','default');
		$(this).parent('.ui-tab-item').addClass("ui-tab-item-current");
		$(this).removeClass("ui-tipbox-notselected");
		$("#exca1").addClass("ui-tipbox-notselected");
		$("#exca2 .ui-tipbox-icon .iconfont").html("");
		$("#exca1 .ui-tipbox-icon .iconfont").html("");
		memtion1();
		//ui-tab-item-current
	});

	function memtion1(){
		var strboxtxt = '<input type="hidden" value="100" id="J_maxVal"><input type="hidden" value="150" id="J_canPurchaseAmount"><label for="J_amount" class="ui-label">提现积分：</label><input class="ui-input" type="text" name="amount" id="J_amount" seed="J_cashierSignDeposit-J_amount" smartracker="on" data-widget-cid="widget-2" data-explain="" onkeyup="value=value.replace(/\D/g,'+"''"+')"><span class="ui-form-other">元</span>&nbsp;<span id="tip1" style="color: red"></span><br/><br/><label for="J_amount1" class="ui-label">支付宝开户人姓名：</label><input class="ui-input" type="text" name="alipayname" id="J_amount1" seed="J_cashierSignDeposit-J_amount" smartracker="on" data-widget-cid="widget-2" data-explain="">&nbsp;<span id="tip2" style="color: red"></span><br/><br/><label for="J_amount2" class="ui-label">支付宝帐号：</label><input class="ui-input" type="text" name="alipayusername" id="J_amount2" seed="J_cashierSignDeposit-J_amount" smartracker="on" data-widget-cid="widget-2" data-explain="" style="width: 150px;">&nbsp;<span id="tip3" style="color: red">*&nbsp;&nbsp;</span><br/><br/><label for="" class="ui-label">到账时间：</label><div id="J-tenmin" class="ui-doubleradio-item-other"><label for="">最快<span class="text-red">当天内</span>到账<span class="text-small"></label></div><p class="ui-form-explain"></p>';
		$("#J_cashierSignDeposit").attr("action","mentionnow");
		$("#TZ_box").html(strboxtxt);
		$("#noticebox").html("每天只能提现一次积分哦");
		$("#J_amount").blur(function(){
			var Money=trim($("#J_amount").val());
			var feemoney = Money*0.01;
			if(feemoney > 10){
				feemoney = 10.00;
			}
			if(Money==''){
				$("#tip1").html("*&nbsp;&nbsp;请输入提现积分");
			}else if(Money>moneyacc){
				$("#tip1").html("*&nbsp;&nbsp;输入额超出可提现积分");
				$(this).val("");
			}else if(Money<100){
				$("#tip1").html("*&nbsp;&nbsp;微积分提现为100积分起步提现！");	
				$(this).val("");
			}else if((parseFloat(Money)+parseFloat(feemoney))>moneyacc){
				$("#tip1").html("*&nbsp;&nbsp;本次提现服务费为："+feemoney+"&nbsp;。余额不足扣除服务费.不可以提现！");	
				$(this).val("");
			}else{
				$("#tip1").html("*&nbsp;&nbsp;本金额提现服务费："+feemoney+"&nbsp;积分");
			}  			   
		});
		$("#J_amount1").blur(function(){
			var accname =trim($("#J_amount1").val()); 
			if(accname==''){
				$("#tip2").html("*&nbsp;&nbsp;请输入支付宝开户人姓名");
			}   
		});
		$("#J_amount2").blur(function(){
			var acctemp =trim($("#J_amount2").val()); 
			if(acctemp==''){
				$("#tip3").html("*&nbsp;&nbsp;请输入支付宝帐号");
			}
			   
		});
	}
	function memtion2(){
		var strboxtxt2 = '<input type="hidden" value="100" id="J_maxVal"><input type="hidden" value="150" id="J_canPurchaseAmount"><label for="J_amount" class="ui-label">转入金额：</label><input class="ui-input" type="text" name="amount" id="J_amount" seed="J_cashierSignDeposit-J_amount" smartracker="on" data-widget-cid="widget-2" data-explain="" onkeyup="value=value.replace(/\D/g,'+"''"+')"><span class="ui-form-other">元</span>&nbsp;<span id="tip1" style="color: red">*&nbsp;&nbsp;</span><br/><br/><label for="" class="ui-label">到账时间：</label><div id="J-tenmin" class="ui-doubleradio-item-other"><label for=""><span class="text-red">即时</span>到账<span class="text-small">(免费)</span></label></div><p class="ui-form-explain"></p>';
		$("#J_cashierSignDeposit").attr("action","");
		$("#TZ_box").html(strboxtxt2);
		$("#noticebox").html("积分充值到余额是马上到账的哦");
	  $("#J_amount").blur(function(){
		 var Money=trim($("#J_amount").val());
		   if(Money==''){
			  $("#tip1").html("*&nbsp;&nbsp;请输入转积分");
		   }else if(Money>moneyacc){
			  $("#tip1").html("*&nbsp;&nbsp;输入额超出可转积分");
			  $(this).val("");
		   }else if(Money<=0){
			  $("#tip1").html("*&nbsp;&nbsp;0积分不可转换！");	
			  $(this).val("");
		   }else{
			   $("#tip1").html("");
		   }     
		   
		});
	}

});
