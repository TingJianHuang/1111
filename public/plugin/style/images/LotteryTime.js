$.fn.StartTimeOut=function(s,d){var r=$(this);var a=new Date();a.setSeconds(a.getSeconds()+d);var l=0;var o=0;var n=0;var k=function(){var u=new Date();if(a>u){var v=parseInt((a.getTime()-u.getTime())/1000);var t=v%60;l=parseInt(v/60);o=parseInt(t);if(t>=o){n=parseInt((t-o)*10)}else{n=0}setTimeout(k,3000)}};var b=r.find("span.minute");var j=r.find("span.second");var e=r.find("i.millisecond");var q=r.find("i.last");var g=9;var m=function(){g--;if(g<0){g=9}q.html(g);setTimeout(m,10)};var c=function(){q.html("0");r.find("dd.z-jx-time").html("<strong>正在计算中....</strong>").animate({height:45},{queue:false,duration:500});var u=null;var t=function(){GetJPData("http://api555.1yyg.com","GetBarcodernoInfo","codeID="+s,function(z){if(z.code==0){var A=parseInt($("#divLottery").children("div").index($(r)[0]))+1;var v=$(window).width()<1175;if(v){if(A%2!=0){r.prev("div").addClass("m-lottery-bor-rb");r.next("div").addClass("m-lottery-special")}}else{if(A%2==0){r.prev("div").addClass("m-lottery-bor-rb");r.next("div").addClass("m-lottery-special")}}var w='<ul><li class="f-lott-comm"><a href="http://www.1yyg.com/lottery/'+s+'.html" target="_blank" title="'+z.goodsName+'"><img src="http://goodsimg.1yyg.com/goodspic/pic-200-200/'+z.goodsPic+'"></a></li><li class="f-lott-detailed"><div class="u-user-info"><p class="fl"><a href="http://u.1yyg.com/'+z.userWeb+'" target="_blank" title="'+z.userName+'"><img type="userPhoto" src="http://faceimg.1yyg.com/UserFace/'+z.userPhoto+'"><s></s></a></p><dl class="fl"><dt><em>获得者：</em><span><a href="http://u.1yyg.com/'+z.userWeb+'" target="_blank" title="'+z.userName+'">'+z.userName+'</a></span></dt><dd class="z-lott-lz">来自：'+z.ipAddr+'</dd><dd>幸运云购码：<strong class="orange">'+z.codeRNO+'</strong></dd><dd>本期云购：<i class="orange">'+z.buyCount+'</i>人次</dd></dl></div><div class="u-comm-info"><dl><dt><a href="http://www.1yyg.com/lottery/'+s+'.html" target="_blank" title="(第'+z.codePeriod+"期)"+z.goodsName+'">(第'+z.codePeriod+"期)"+z.goodsName+"</a></dt><dd>商品价值：￥"+z.price+'</dd><dd>揭晓时间：刚刚</dd><dd class="z-lott-btn"><span><a href="http://www.1yyg.com/lottery/'+s+'.html" target="_blank" title="查看详情">查看详情</a></span></dd></dl></div></li></ul>';r.attr("type","isRaff").attr("class","m-lottery-list").html(w);if(u!=null){clearInterval(u);u=null}bindLotteryItemHover(r);resetLotteryListStyle();var y=$("#lotteryCount");var x=parseInt(y.html())+1;y.hide().html(x).fadeIn("1000")}})};u=setInterval(t,2000)};var i=function(){n--;if(n<1){if(o<1){if(l<1){c();return}else{l--}o=59}else{o--}n=9}setTimeout(i,100)};var f=0,p=0;var h=function(){e.html(n);if(f!=o){if(o<10){j.html("0"+o)}else{j.html(o)}f=o}if(p!=l){if(l<10){b.html("0"+l)}else{b.html("00")}p=l}setTimeout(h,100)};k();i();m();h()};