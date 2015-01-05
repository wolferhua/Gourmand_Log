<?php
session_start();

$yang = isset($_SESSION['yang']) ? $_SESSION['yang'] : 1;


$yangs = array(
    '1' => array('title' => '狼犬', 'contents' => '你是一个喜欢团体生活的人，在团体中，你会不由自主的想和大家接近，因此养成你合群的性格，你的人缘也因此多半不差，想必你一定有许多好朋友吧！但是一旦你真正遭遇挫折，你多半的处理方式，是一个人独自思索、调适、解决，非必要不会向其他人求救，这种形象是不同于你平时给别人的感觉喔。'),
    '2' => array('title' => '波斯猫', 'contents' => '平时你给人的印象是温和的，一副柔弱的模样，但其实你的内心深处刚强，你有自己固执不易动摇的原则，简言之，你的“外柔内刚”有时会吓到某些人，有时会使某些人对你刮目相看。你的朋友不多，但是个个绝对是你知心的好友；一旦你恋爱了，你会因此缩小了你的社交圈，得失要自己衡量一下啰。'),
    '3' => array('title' => '变色龙', 'contents' => '你有许多朋友，但你会不自觉地与他们保持一些些距离，多保留一点心灵的自由给自己；你心情不好或遭遇挫折，会孤坐咖啡馆一下午、或一个人到海边，比和朋友倾诉更能让你平静。你不甘于平淡，你的神秘、特别，是吸引朋友的主因，因此有许多人欣赏你喔。'),
    '4' => array('title' => '不养任何动物', 'contents' => '简言之，你把时间切为两部分，和朋友在一起时，你是一个合群热情的人，你也享受其中；回到家，你是一个安静寡言的人，其实你也颇能享受这种空白的时刻。其实你有一点精神洁癖，属于自己的空间，你不希望受到一点束缚，如果你在人情中感到压力，你比一般人更不能忍受，你是一个外表热情内心冷静的人。'),
);

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="resource/style.css">
    <title>测一测你家的宠物</title>
</head>
<div class="result">
    <div class="result-wrap">
        <span class="title"><?php echo $yangs[$yang]['title']; ?></span>
        <span class="content"><?php echo $yangs[$yang]['contents']; ?></span>
    </div>
</div>
<div class="gift">
    <div class="gift-wrap">
        <span class="gift-img"></span>
        <span class="gift-tip">为狗狗<span class="change-color">免费</span>领取一份礼物</span>
        <a href="http://mp.weixin.qq.com/s?__biz=MzAwNDE1OTU2NQ==&mid=201853588&idx=1&sn=6ee2d7c1248a8faf83668eec84eab34a#rd"
           class="gift-btn">立即领取</a>
    </div>
</div>


</body> </html>