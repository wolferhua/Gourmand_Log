<?php


session_start();
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta name='HandheldFriendly' content='True'/>
    <meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;'/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="format-detection" content="telephone=no"/>
    <title>分享连接</title>
    <style>
        html,body{
            width: 100%;
            height: 100%;
        }

        body {
            background: url(resource/share-bg.png) no-repeat center;
        }

        .share-tip {
            height: 180px;
            width: 100%;
            position: relative;
            margin-top: 20px;
        }
        .share-tip .share-img {
            display: block;
            position: absolute;
            width: 301px;
            height: 80px;
            background: url(resource/tips.png) no-repeat center;
            background-size: 301px 80px;
            top: 5px;
            right: 10px;
        }
        .share-bd {
            width: 100%;
            min-height: 150px;
            background-color: rgba(255, 255, 255, .2);
            border-bottom: 1px solid #fff;
            border-top: 1px solid #fff;
        }
        .share-bd .text {
            width: 90%;
            margin: 10px auto;
            text-align: center;
            color: #fff;
            font-size: 20px;
        }
        .share-bd .person-img {
            display: block;
            width: 78px;
            height: 79px;
            background: url(resource/icon_who.png) no-repeat center;
            background-size: 78px 79px;
            margin: 20px auto;
        }
    </style>
</head>
<body>
<div class="share-tip">
    <span class="share-img"></span>
</div>
<div class="share-bd">
    <p class="text">你居然如此...</p>
    <span class="person-img"></span>
</div>

<?php
/**
 * Created by PhpStorm.
 * User: 35827_000
 * Date: 2014/12/30 0030
 * Time: 下午 15:27
 */

if (isset($_POST['yang']) && $yang = intval($_POST['yang'])) {
    $_SESSION['yang'] = $yang;
    ?>
    <script src="WeixinApi.js"></script>
    <script>

        function onBridgeReady() {
            WeixinApi.enableDebugMode();
            WeixinApi.shareToTimeline({
                appid: 'wx6bacb1056d03fe3c',
                img_url: 'http://log.cdlymh.com/mcyj/resource/gift.png',
                link: 'http://log.cdlymh.com/mcyj/home.html',
                desc: '通过挑选宠物看你是否受欢迎',
                title: '通过挑选宠物看你是否受欢迎'
            }, {
                confirm: function (resp) {
                    window.location.href = "http://log.cdlymh.com/mcyj/ret.php";
                }
            });
        }

        if (typeof WeixinJSBridge == "undefined") {
            if (document.addEventListener) {
                document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
            } else if (document.attachEvent) {
                document.attachEvent('WeixinJSBridgeReady', onBridgeReady);
                document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
            }
        } else {
            onBridgeReady();
        }


    </script>
<?php
} else {
    header('Location: test.html?msg=' . urlencode('请选择您想养的宠物!'));
}
?></body>
</html>