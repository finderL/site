<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="user-scalable=no,minimum-scale=1,maximum-scale=1,width=device-width" name="viewport" />
	<meta content="telephone=no" name="format-detection" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="finder">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<title>finder</title>
	<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body>
<script type="text/javascript">
function callback(){
  var config = {
    'appId': 'wx067279168c3d8bed', // 必填，公众号的唯一标识
    'title':'finder', // 标题
    'desc':'关于技术，关于互联网，关于自己', // 描述
    'link':'http://www.liubeismx.cn', // 点击后连接地址
    'img_url': 'http://www.liubeismx.cn/favicon.ico' // 分享到朋友/朋友圈的缩略图url

  };
  WeixinJSBridge.on("menuitem:share:appmessage",function() {
    // body...
    WeixinJSBridge.invoke('sendAppMessage',{
      'appid': config.appid, // 公众号appID
      'type': 'link', // 非必填，music,vido或link,默认为link。
      'data_url': '', // 非必填，连接地址,如音乐的mp3数据地址,供内置播放器使用
      'img_url': config.img_url, // 缩略图地址
      'img_height':100, // 缩略图高度
      'img_width':100, // 缩略图宽度
      'link':config.link, // 链接地址
      'desc':config.desc, // 描述
      'title':config.title // 标题
    },function(res){
        //alert(res.err_msg);
    });
  });
  WeixinJSBridge.on("menuitem:share:appmessage",function(){
    WeixinJSBridge.invoke('shareTimeline',{
      'appid': config.appid, // 公众号appID
      'title':config.title, // 分享标题
      'desc':config.desc, // 描述
      'link':config.link, // 点击后连接地址
      'img_width':100, // 图片宽度
      'img_height':100, // 图片高度
      'img_url': config.img_url // 分享到朋友圈的缩略图url
    },function(res){
        //alert(res.err_msg);
    });
  });
}
if (typeof WeixinJSBridge == "object" && typeof WeixinJSBridge.invoke == "function") {
    callback();
} else {
    if (document.addEventListener) {
        document.addEventListener("WeixinJSBridgeReady", callback, false);
    } else if (document.attachEvent) {
        document.attachEvent("WeixinJSBridgeReady", callback);
        document.attachEvent("onWeixinJSBridgeReady", callback);
    }
}


</script>
</body>
</html>