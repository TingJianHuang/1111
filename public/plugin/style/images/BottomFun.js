var mainHttp="http://www.yiyuansha.com";(function(){if(window.self!=window.top){var b=mainHttp;if(typeof(window.location)=="object"){b=window.location.href}var a=$("<form name='toTopUrl' method='get' action='"+b+"' target='_top'></form>");a.appendTo("body").ready(function(){a.submit()})}})();function GetJPData(d,c,a,b){$.getJSON(d+"/JPData?action="+c+(a!=""?"&":"")+a+"&fun=?",b)}var loadImgFun=function(){var e="src2";var b=$("#loadingPicBlock");if(b.length>0){var c=b.find("img");var d=function(){return Math.max(document.documentElement.scrollTop,document.body.scrollTop)};var a=function(){return document.documentElement.clientHeight+d()+100};var f=d();var g=f;var h=function(){c.each(function(){if($(this).parent().offset().top<=a()){var i=$(this).attr(e);if(i){$(this).attr("src",i).removeAttr(e).show()}}})};$(window).bind("scroll",function(){g=d();if(g-f>50){f=g;h()}});h()}};var _IsCartChanged=true;var _IsBuySubmiting=false;var _InsertIntoCart=function(){};(function(){var I="http://www.yiyuansha.com";var aa="https://www.yiyuansha.com";var m="http://member.1yyg.com";var R="http://skin.1yyg.com";var z="http://www.yiyuansha.com";var b=function(){if($.browser.msie&&$(window).width()<1190){if(parseInt($.browser.version)<9){$("body").addClass("f-width-change")}else{$("body").removeClass("f-width-change")}}else{$("body").removeClass("f-width-change")}};if($.browser.msie&&parseInt($.browser.version)==6){$("body").css("font",'12px/150% Arial,Verdana,"\5b8b\4f53"')}b();$(window).resize(b);loadImgFun();var t=$("#rightTool");var Y=$("#divRTool");var U=$("body").attr("rf");var C=!(U=="1"||U=="2");var G=function(){var ah=false;var ai=function(){if(ah||$(window).scrollTop()>0){t.children("div").height($(window).height());t.fadeIn("slow")}else{if(!ah){t.fadeOut("slow")}}};var aj=function(){if($(window).scrollTop()>0){Y.fadeIn("slow")}else{if(!ah){Y.fadeOut("slow")}}};var ag=function(){if(U=="2"){ah=true;ai()}else{if(U=="1"){ai()}else{aj()}}};$(window).scroll(ag).resize(function(){_IsCartChanged=true;ag()});ag()};var y=$("#ulTopRight");var e=$("#liTopUMsg");if(y.length>0){GetJPData(z,"logininfo","",function(ag){if(ag.code==1){y.prepend('<li><div class="u-menu-hd u-menu-login"><a href="http://u.1yyg.com/'+ag.userWeb+'" title="'+ag.username+'" class="blue"><span class="fl"><img src="http://faceimg.1yyg.com/userface/30/'+ag.userPhoto+'"><s></s></span>'+ag.username+'</a><a href="'+aa+'/Logout.html" title="退出">[退出]</a></div></li><li class="f-gap"><s></s></li>');e.attr("show","1").show().next("li.f-gap").show()}else{if(ag.code==0){y.prepend('<li><div class="u-menu-hd"><a href="'+aa+'/login.html?forward=rego" title="登录">登录</a></div></li><li class="f-gap"><s></s></li><li><div class="u-menu-hd"><a href="'+aa+'/register.html?forward=rego" title="注册">注册</a></div></li><li class="f-gap"><s></s></li>');e.attr("show","-1").hide()}}})}var a=$("#ulHTotalBuy");var j=$("#spFundTotal");
var O=0;var ab=2000;var h=function(){GetJPData(z,"totalBuyCount","",function(ak){if(ak.state==0){j.html("￥"+ak.fundTotal);if(O!=ak.count){if(O==0){O=ak.count;a.children("li.num").each(function(){var am='<cite style="top:-243px;">';for(var an=9;an>=0;an--){am+='<em t="'+an+'">'+an+"</em>"}am+="</cite><i></i>";$(this).html(am)});var ah=ak.count.toString();var aj=ah.length;var ai=ah.split("");a.find("cite").each(function(ap,am){var ao=$(this);var an=parseInt(ai[ap]);if(!(/^\d+$/.test(an))){an=0}ao.animate({top:"-"+(27*(9-an))+"px"},{queue:false,duration:ab,complete:function(){}})})}else{var al=O.toString().split("");var ag=ak.count.toString().split("");O=ak.count;a.find("cite").each(function(ar,ao){var at=0;var aq=parseInt(al[ar]);if(al[ar]<=ag[ar]){at=parseInt(ag[ar])-parseInt(al[ar])}else{at=10+parseInt(ag[ar])-parseInt(al[ar])}if(at!=0){var au=$(this).children('em[t="'+aq+'"]');var an=au.nextAll();for(var ap=an.length-1;ap>-1;ap--){$(this).prepend($(an[ap]))}var am=-(243-at*27);$(this).css({top:"-243px"}).animate({top:am},{queue:false,duration:ab,complete:function(){}})}})}}}});setTimeout(h,5000)};if(a.length>0||j.length>0){h()}var k=function(am){var al="汽车";var ah="输入“汽车”试试";var ag=50;var ak=function(){am.unbind("blur").bind("focus",aj);if(am.val()==""){am.val(ah).css({color:"#BBB",padding:"9px 130px 9px 5px",width:"145px"});am.next("span").css("zIndex","10").show()}};var aj=function(){am.unbind("focus").bind("blur",ak).css({color:"#333",padding:"9px 0px 9px 5px",width:"275px"});if(am.val()==ah){am.val("").next("span").css("zIndex","0").hide()}};var ai=function(){var an=$.trim(am.val());if(an==ah){an=al}location.href=mainHttp+"/search/?q="+encodeURIComponent(an.replace(/(\/)/g,""))};am.focus(aj).keydown(function(an){if(13==((window.event)?event.keyCode:an.keyCode)){ai()}}).keyup(function(){var an=$(this).val().trim();if(an.length>ag){$(this).val(an.substring(0,ag))}}).attr("placeholder","").css("color","#BBB").val(ah);$("#btnHSearch").click(function(){ai();return false})};var E=$("#txtHSearch");if(E.length>0){k(E)}var Q=$("#btnTFavorite");if(Q.length>0){var H=function(){var ai="1元云购";var ag="http://www.1yyg.com";try{window.external.addFavorite(ag,ai)}catch(ah){try{window.sidebar.addPanel(ai,ag,"")}catch(ah){alert("抱歉，您所使用的浏览器无法完成此操作。\r\n\r\n加入收藏失败，请使用Ctrl + D进行添加！")}}};Q.bind("click",function(){H()})}var ac=function(ag){if(ag&&ag.stopPropagation){ag.stopPropagation()}else{window.event.cancelBubble=true}};var p=function(){$("#liMobile").hover(function(){$(this).addClass("u-arr-hover")},function(){$(this).removeClass("u-arr-hover")});$("#liMember").hover(function(){$(this).addClass("u-arr-hover")},function(){$(this).removeClass("u-arr-hover")});e.hover(function(){$(this).addClass("u-arr-hover")},function(){$(this).removeClass("u-arr-hover")});var ah=$("#divSortList");if($("body.home").length==0){$("#divGoodsSort").hover(function(){ah.show()},function(){setTimeout(function(){if(!ag){ah.hide()}},200)})}var ag=false;ah.children("dl").each(function(){$(this).hover(function(ai){ag=true;ac(ai);$(this).addClass("hover");if($(this).next().length>0){$(this).append("<i></i>")}},function(ai){ag=false;$(this).removeClass("hover").children("i").remove()})})};var J=$("#pServerTime");if(J.length>0){var n=J.children("span");var P=function(aj){var ah=aj.getHours();var ag=aj.getMinutes();var ai=aj.getSeconds();return(ah>9?ah.toString():"0"+ah)+":"+(ag>9?ag.toString():"0"+ag)+":"+(ai>9?ai.toString():"0"+ai)};var u=0;var x=new Date();var V=x.getFullYear()+"-"+(x.getMonth()+1)+"-"+x.getDate()+" "+P(x);GetJPData(z,"servertime","time="+V,function(ah){if(ah.code==0){u=ah.num}var ag=function(){var ak=new Date();ak.setSeconds(ak.getSeconds()+u);var aj=ak.getHours();var ai=ak.getMinutes();var al=ak.getSeconds();n.eq(0).html(aj>9?aj.toString():"0"+aj);n.eq(1).html(ai>9?ai.toString():"0"+ai);n.eq(2).html(al>9?al.toString():"0"+al)};setInterval(ag,1000)})}var F=$("#spHCart");var q=function(){GetJPData(I,"cartnum","",function(ag){var ah=0;if(ag.code==0){ah=ag.num}else{if(ag.code==-1){ah=0}}if(ah>0){var ai=ah>99?"...":ah;F.html("("+ai+")");W.html(ai);if(ah>0){W.show()}}else{F.html("");W.html("0").hide()}})};var w=$("#ulRToolList");var o=w.children("li.f-shopping-cart");var W=o.find("em");if(o.length>0){var d=$("#divRTCartMain");var K=$("#divRTLogin");var i=false;var g=false;var v=function(){if(K.attr("isOpen")!="1"){g=false;setTimeout(function(){if(!g){o.removeClass("f-checked");d.animate({right:"-240px"},{duration:500,queue:false,complete:function(){o.removeClass("f-checked");d.hide()}})}},200)}};o.hover(function(){g=true;var ag=function(){i=true;d.miniCartTool();setTimeout(function(){d.hover(function(){g=true},v)},300)};if(!i){Base.getScript("http://skin.1yyg.com/js/cartTool.js?date=150203",ag)}else{d.miniCartTool()}},v);_InsertIntoCart=function(){q()}}var N=function(){var ag=[I];var ai=true;for(var ah=0;ah<ag.length;ah++){if(location.href.toLowerCase().indexOf(ag[ah])>-1){ai=false;break}}if(ai){q()}};N();var T=function(){if(location.href.toLowerCase().indexOf("passport.1yyg.com")==-1){var ai=$.cookie("_topNotice1");var ag="-1px";if(ai==null){var ah=$('<div class="banner-prompt clrfix"><div class="w1190"><span class="fl">2015年春节放假及发货安排公告：根据国家法定节假日规定并结合公司具体情况，1元云购2015年春节放假及发货时间安排……<a href="http://group.1yyg.com/topic-8874.html" target="_blank" class="ckxq">查看详情</a></span><span class="fr"><a href="javascript:;" class="close" title="关闭"></a></span></div></div>');ah.find("a.close").click(function(){ah.remove();$.cookie("_topNotice1","1",{domain:"1yyg.com",expires:10,path:"/"});$("body").attr("style","background:url(http://skin.1yyg.com/images/bg_2015.gif?v=150211) center -1px no-repeat !important");return false});$("div.g-toolbar").before(ah);ag="35px"}if($("body").hasClass("home")){$("body").attr("style","background:url(http://skin.1yyg.com/images/bg_2015.gif?v=150211) center "+ag+" no-repeat !important")}}};var B=function(){var ah=e.attr("show");if(ah!="-1"){if(ah=="1"){var ag=function(){var ak=$.cookie("_msgFApply");var ap=$.cookie("_msgSys");var aj=$.cookie("_msgFPriv");var am=0;if(ak&&parseInt(ak)>0){am+=parseInt(ak)}if(ap&&parseInt(ap)>0){am+=parseInt(ap)}if(aj&&parseInt(aj)>0){am+=parseInt(aj)}var ao="";var an=function(ar,at,aq){return'<span><a href="'+m+ar+'" title="'+at+'">'+at+(aq&&parseInt(aq)>0?"<em"+(parseInt(aq)>99?' class="three-digit">...':">"+aq)+"</em>":"")+"</a></span>"};var al="";al+=an("/FriendsApply.do","好友请求",ak);al+=an("/UserMessage.do","系统消息",ap);al+=an("/UserPrivMsg.do","私信",aj);e.children("div.u-select").html(al);if(am>0){if(e.children("div.u-menu-hd").find("em").length==0){e.children("div.u-menu-hd").append("<em></em>")}}else{e.children("div.u-menu-hd").find("em").remove()}};var ai=function(){GetJPData(z,"ckmsg","",function(aj){if(aj.code==0){$.cookie("_msgTip",null,{domain:"1yyg.com"});ag()}setTimeout(ai,30000)})};ai()}else{setTimeout(B,1000)}}};var Z=function(){T();G();p();B();var ag=function(aj){var ai=new Date();aj.attr("src",aj.attr("data")+"?v="+GetVerNum()).removeAttr("id").removeAttr("data")};var ah=$("#pageJS","head");if(ah.length>0){ag(ah)}else{ah=$("#pageJS","body");if(ah.length>0){ag(ah)}}};Base.getScript(R+"/JS/Comm.js?date=20120309",Z);if(C){Y.find("li").each(function(){$(this).hover(function(){$(this).addClass("cart-hover")},function(){$(this).removeClass("cart-hover")})})}else{GetJPData("http://poster.1yyg.com","getbysortid","ID=4",function(ah){if(ah.state==0){var ag=ah.listItems[0];if(ag.type==0){t.find("div.u-sentence").html("<cite><a "+(ag.url==""?"":'href="'+ag.url+'" target="_blank"')+' title="'+ag.alt+'"><img width="'+ag.width+'" height="'+ag.height+'" src="'+ag.src+'" /></a></cite>')}}});w.children("li:gt(0)").each(function(){$(this).hover(function(){$(this).addClass("cart-hover")},function(){$(this).removeClass("cart-hover")})})}var L="btnTopQQ";var D="btnRigQQ";var A="btnRigQQ2";var M="btnBtmQQ";var af=$("#"+L);var l=$("#"+D);var S=$("#"+A);var f=$("#"+M);if(af.length>0||l.length>0||f.length>0){var s=function(){var ag="4006859800";BizQQWPA.addCustom([{aty:"0",nameAccount:ag,selector:L},{aty:"0",nameAccount:ag,selector:D},{aty:"0",nameAccount:ag,selector:A},{aty:"0",nameAccount:ag,selector:M}])};var c=new Date();var ae=c.getHours();var ad=c.getMinutes();if((ae==8&&ad>30)||(ae>8&&ae<21)){af.removeClass("u-service-off").addClass("u-service-on");f.removeClass("u-service-off").addClass("u-service-on");l.attr("class","u-customer-on");S.attr("class","u-customer-on")}else{af.html("<i></i>离线留言").attr("title","离线留言");f.html("<i></i>离线留言").attr("title","离线留言")}var X=false;var r=function(){if(X){return false}X=true;Base.getScript("http://wpa.b.qq.com/cgi/wpa.php",s)};af.hover(r,null);l.hover(function(){$(this).addClass("cart-hover");r()},function(){$(this).removeClass("cart-hover")});f.hover(r,null);if(C){S.hover(function(){$(this).addClass("cart-hover");r()},function(){$(this).removeClass("cart-hover")})}}if(C){Y.find("li.f-back-to").click(function(){$("body,html").animate({scrollTop:0},0);return false})}else{w.children("li.f-back-to").click(function(){$("body,html").animate({scrollTop:0},0);return false})}})();