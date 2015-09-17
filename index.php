<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<link type="text/css" rel="stylesheet" href="css/commonAnimations.css" />
	<link rel="stylesheet" type="text/css" href="css/jqk.css" />
	<title>鲸奇客|不如禽兽姿势多</title>
	<!--移动端版本兼容 -->
	<script type="text/javascript">
	         var phoneWidth =  parseInt(window.screen.width);
	         var phoneScale = phoneWidth/640;
	         var ua = navigator.userAgent;
	         if (/Android (\d+\.\d+)/.test(ua)){
	                   var version = parseFloat(RegExp.$1);
	                   if(version>2.3){
	                            document.write('<meta name="viewport" content="width=640, minimum-scale = '+phoneScale+', maximum-scale = '+phoneScale+', target-densitydpi=device-dpi">');
	                   }else{
	                            document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
	                   }
	         } else {
	                   document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');
	         }
	</script>
	<!--移动端版本兼容 end -->
</head>
<body style="overflow: hidden">
	<!-- 预加载 -->
	<div id="loading">
		<div class="loadingbox">
			<div id="loadingCover"></div>
			<div class="loadingimg"></div>
		</div>
		<div id="percentWrap" >0%</div>
	</div>
	<!-- 预加载  end -->
	<!-- 手机竖屏提醒 -->
	<div id="orientLayer" class="mod-orient-layer">
		<div class="mod-orient-layer__content"> <i class="icon-wx mod-orient-layer__icon-orient"></i>
			<div class="mod-orient-layer__desc">为了更好的体验，请使用竖屏浏览</div>
		</div>
	</div>
	<!-- 手机竖屏提醒  end-->
	<!-- 背景音乐 -->
	<div class="music-on" style="display: none;"></div>
	<div class="music-off" style="display: none;"></div>
	<!-- 背景音乐  end-->
	<!-- 页面内容-->
	<div id="pageWrap">
		<div class="page page-1-1 page-current">
			<div class="zoom-page">
				<div class="img0-1"></div>
				<div class="img0-2"></div>
				<div class="pt-page-heartbeat img0-3"></div>
				<div class=" pt-page-shake img0-4" ></div>
				<div class="img0-5"></div>
			</div>
			
		</div>
		<div class="page page-2-1 hide" audioId = "1">
			<div class="hide img2">
				<img src="img/1.gif" class="background" style="top:12%;z-index:-1;" ></div>
			<div class="zoom-page">
				<div class="pt-page-scaleUpIcon img1-1"></div>
				<div class="pt-page-scaleUpIcon img1-2"></div>
				<div class="pt-page-scaleUpIcon img1_1 img1"></div>
				<div class="arrowleft arrower hand1" style="top:463px;left:320px"></div>
				<div class="pt-page-scaleUpIcon img1-3"></div>
				<div class="pt-page-scaleUpIcon img1-4"></div>
				<div class="pt-page-scaleUpIcon img1-5"></div>
				<div class="arrow pt-page-moveIconUp img-arrow"></div>
			</div>
			
		</div>
		<div class="page page-3-1 hide" audioId = "2">
			<div class="hide img2">
				<img src="img/2.gif" class="background" style="top:13%;z-index:-1;" />
			</div>
			<img class=" pt-page-moveIconUp"/>
			<div class="zoom-page">
				<div class="pt-page-scaleUpIcon img2-1"></div>
				<div class="pt-page-scaleUpIcon img2-2"></div>
				<div class="pt-page-scaleUpIcon img2_2 img1"></div>
				<div class="arrowleft arrower hand1" style="top:493px;left:385px"></div>
				<div class="pt-page-scaleUpIcon img2-3"></div>
				<div class="pt-page-scaleUpIcon img2-4"></div>
				<div class="pt-page-scaleUpIcon img2-5"></div>
				<div class="pt-page-scaleUpIcon img2-6"></div>
				<div class="arrow pt-page-moveIconUp img-arrow"></div>
			</div>
		</div>
		<div class="page page-4-1 hide" audioId = "3">
			<div class="hide img2">
				<img src="img/3.gif" class="background" style="top:9%;z-index:-1;" />
			</div>
			<img class=" pt-page-moveIconUp"/>
			<div class="zoom-page">
				<div class="pt-page-scaleUpIcon img3-1"></div>
				<div class="pt-page-scaleUpIcon img3-2"></div>
				<div class="pt-page-scaleUpIcon img3_3 img1"></div>
				<div class="arrowleft arrower hand1" style="top:475px;left:320px"></div>
				<div class="pt-page-scaleUpIcon img3-3"></div>
				<div class="pt-page-scaleUpIcon img3-4"></div>
				<div class="pt-page-scaleUpIcon img3-5"></div>
				<div class="pt-page-scaleUpIcon img3-6"></div>
				<div class="arrow pt-page-moveIconUp img-arrow"></div>
			</div>
		</div>
		<div class="page page-5-1 hide" audioId = "4">
			<div class="hide img2">
				<img src="img/4.gif" class="background" style="top:12%;z-index:-1;" />
			</div>
			<img class=" pt-page-moveIconUp"/>
			<div class="zoom-page">
				<div class="pt-page-scaleUpIcon img4-1"></div>
				<div class="pt-page-scaleUpIcon img4_4 img1"></div>				
				<div class="arrowleft arrower hand1" style="top:423px;left:300px"></div>
				<div class="pt-page-scaleUpIcon img4-2"></div>
				<div class="pt-page-scaleUpIcon img4-3"></div>
				<div class="pt-page-scaleUpIcon img4-4"></div>
				<div class="pt-page-scaleUpIcon img4-5"></div>
				<div class="arrow pt-page-moveIconUp img-arrow"></div>
			</div>
		</div>
		<div class="page page-6-1 hide" audioId = "5">
			<div class="hide img2">
				<img src="img/5.gif" class="background" style="top:15%;z-index:-1;" />
			</div>
			<img class=" pt-page-moveIconUp"/>
			<div class="zoom-page">
				<div class="pt-page-scaleUpIcon img5-1"></div>
				<div class="pt-page-scaleUpIcon img5-2"></div>
				<div class="pt-page-scaleUpIcon img5_5 img1"></div>
				<div class="arrowleft arrower hand1" style="top:363px;left:320px"></div>
				<div class="pt-page-scaleUpIcon img5-3"></div>
				<div class="pt-page-scaleUpIcon img5-4"></div>
				<div class="pt-page-scaleUpIcon img5-5"></div>
				<div class="arrow pt-page-moveIconUp img-arrow"></div>				
			</div>			
		</div>
		<div class="page page-7-1 hide" audioId = "6">
			<div class="hide img2">
				<img src="img/6.gif" class="background" style="top:9%;z-index:-1;" />
			</div>
			<img class=" pt-page-moveIconUp"/>
			<div class="zoom-page">
				<div class="pt-page-scaleUpIcon img6-1"></div>
				<div class="pt-page-scaleUpIcon img6-2"></div>
				<div class="pt-page-scaleUpIcon img6_6 img1"></div>
				<div class="arrowleft arrower hand1" style="top:353px;left:250px"></div>
				<div class="pt-page-scaleUpIcon img6-3"></div>
				<div class="pt-page-scaleUpIcon img6-4"></div>
				<div class="pt-page-scaleUpIcon img6-5"></div>
				<div class="pt-page-scaleUpIcon img6-6"></div>
				<div class="pt-page-scaleUpIcon img6-7"></div>
				<div class="arrow pt-page-moveIconUp img-arrow"></div>	
			</div>
		</div>
		<div class="page page-8-1 hide" audioId = "7">
			<div class="hide img2">
				<img src="img/7.gif" class="background" style="top:10%;z-index:-1;" />
			</div>
			<img class=" pt-page-moveIconUp"/>
			<div class="zoom-page">
				<div class="pt-page-scaleUpIcon img7-1"></div>
				<div class="pt-page-scaleUpIcon img7-2"></div>
				<div class="pt-page-scaleUpIcon img7_7 img1"></div>
				<div class="arrowleft arrower hand1" style="top:323px;left:480px"></div>
				<div class="pt-page-scaleUpIcon img7-3"></div>
				<div class="pt-page-scaleUpIcon img7-4"></div>
				<div class="pt-page-scaleUpIcon img7-5"></div>
				<div class="arrow pt-page-moveIconUp img-arrow"></div>	
			</div>
		</div>
		<div class="page page-9-1 hide" audioId = "8">
			<div class="hide img2">
				<img src="img/8.gif" class="background" style="top:13%;z-index:-1;" />
			</div>
			<img class=" pt-page-moveIconUp"/>
			<div class="zoom-page">
				<div class="pt-page-scaleUpIcon img8-1"></div>
				<div class="pt-page-scaleUpIcon img8-2"></div>
				<div class="pt-page-scaleUpIcon img8-3"></div>
				<div class="pt-page-scaleUpIcon img8_8 img1"></div>
				<div class="arrowleft arrower hand1" style="top:386px;left:412px;"></div>
				<div class="pt-page-scaleUpIcon img8-4"></div>
				<div class="pt-page-scaleUpIcon img8-5"></div>
				<div class="pt-page-scaleUpIcon img8-6"></div>
				<div class="arrow pt-page-moveIconUp img-arrow"></div>
			</div>
		</div>
		<div class="page page-10-1 hide" audioId = "9">
			<div class="hide img2">
				<img src="img/9.gif" class="background" style="top:14%;z-index:-1;" />
			</div>
			<img class=" pt-page-moveIconUp"/>
			<div class="zoom-page">
				<div class="pt-page-scaleUpIcon img9-1"></div>
				<div class="pt-page-scaleUpIcon img9-2"></div>
				<div class="pt-page-scaleUpIcon img9_9 img1"></div>
				<div class="arrowleft arrower hand1" style="top:523px;left:320px"></div>
				<div class="pt-page-scaleUpIcon img9-3"></div>
				<div class="pt-page-scaleUpIcon img9-4"></div>
				<div class="pt-page-scaleUpIcon img9-5"></div>
				<div class="arrow pt-page-moveIconUp img-arrow"></div>
			</div>
		</div>
		<div class="page page-11-1 hide" >
			<img class=" pt-page-moveIconUp"/>
			<div class="zoom-page">
				<div class="pt-page-scaleUpIcon img10-0"></div>
				<div class="pt-page-scaleUpIcon img10-1"></div>
				<div class="pt-page-scaleUpIcon img10-2"></div>
				<div class="pt-page-scaleUpIcon img10-3" id="img103"></div>	
				<img class="pt-page-heartbeat" style="position: absolute;top: 66%;left: 30%;width: 40%;" src="img/10-04.png" />				
				<div class="pt-page-scaleUpIcon img5ab img10-5" id="img105"></div>
				<div class="pt-page-scaleUpIcon img10-6"></div>
				<div class="hide img107"><img class="im7ab" src="img/10-07.png" class="background" style="width:100%;left:0%;position:absolute;z-index:999;"  /></div>
			</div>
					
		</div>
		<audio id="audio" loop="loop" src="img/sound.mp3" style="display:none;"></audio>
	</div>
	<!-- 页面内容  end-->
	<!-- 统计访问量-->
	<div style="display:none">
		<script src="http://s95.cnzz.com/z_stat.php?id=1256185849&web_id=1256185849 " language="JavaScript"></script>
	</div>
	<!-- 统计访问量 end-->
			
</body>
	<script src="js/zepto.min.js"></script>
	<script src="js/hammer.min.js"></script>
	<script src="js/pxloader-all.min.js"></script>
	<script src="js/init.js"></script>
	<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>	
	<?php
	require_once "jssdk.php";
	$jssdk = new JSSDK("wxcaf39b453c29c206", "8b21db2889cc803ad8ef09e09176b599");
	$signPackage = $jssdk->GetSignPackage();
	?>	
	<script>
		var wxTitle = "鲸奇客|不如禽兽姿势多";
		var wxLink = "http:\/\/h5.whaledream.com/jqk/";
		var imgUrl = "http:\/\/h5.whaledream.com/jqk/icon.jpg";
		var wxDesc = "本H5内容可能令人欲罢不能，建议在年满18岁美骚年的陪同下观看效果更佳。";
		wx.config({
			debug: false,
			appId: '<?php echo $signPackage["appId"];?>',
			timestamp: <?php echo $signPackage["timestamp"];?>,
			nonceStr: '<?php echo $signPackage["nonceStr"];?>',
			signature: '<?php echo $signPackage["signature"];?>',
			jsApiList: [
			"onMenuShareTimeline",
			"onMenuShareAppMessage"
			]
		});
		wx.ready(function() {
			wx.onMenuShareTimeline({
				title : wxTitle, // 分享标题
				link : wxLink, // 分享链接
				imgUrl : imgUrl, // 分享图标
				cancel : function() {
					// 用户取消分享后执行的回调函数
				}
			});
			wx.onMenuShareAppMessage({
				title : wxTitle, // 分享标题
				desc : wxDesc, // 分享描述
				link : wxLink, // 分享链接
				imgUrl : imgUrl, // 分享图标
				cancel : function() {
					// 用户取消分享后执行的回调函数
				}
			});

		});		
	</script>	
    <script>
		var basePath = "img/";
		var audio = document.getElementById("audio");
		$(document).ready(function() {	
			var loader = new PxLoader();
			var fileList = [
				"content.png",
				"content2.png",
				"10-04.png",
    			"10-07.png",
    			"sound.mp3"
				];			
			for (var i = 0; i < fileList.length; i++) {
				var pxImage = basePath + fileList[i];
				pxImage.imageNumber = i + 1;
				loader.addImage(pxImage);
			}
			loader.addCompletionListener(function() {
				$("#loading").remove();
				$("#pageWrap").css("display", "block");
				$(".music-on").show();
				audio.play();
			});
			loader.addProgressListener(function(e) {
				var percent = Math.round((e.completedCount / e.totalCount) * 100);
				$("#percentWrap").html(percent + "%");
			});
			loader.start();
		});
	</script>

	<script src="js/init.js"></script>
</html>
