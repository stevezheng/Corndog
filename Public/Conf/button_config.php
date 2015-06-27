<?php
$buy_button = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.'g=App&m=Index&a=index_info&refresh=1';
$jiazu_button = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.'g=App&m=Index&a=member&refresh=1';
$newmenu = '{
		 "button":[
			{	
			  "type":"view",
			  "name":"参与招募",
			  "url":"'.$buy_button.'"
			},
			{
				"name":"招募中心",
				
				"sub_button":[
				
				{
				   "type":"click",
				   "name":"获取推广图片",
				   "key":"GET_PIC"
				},
			    	{
				   "name":"招募指引",
				   "type":"view",
			  "url": "http://mp.weixin.qq.com/s?__biz=MzAxNTYzMTMzNQ==&mid=207913742&idx=1&sn=6333bdcb136eb339a5ede863b7fbc0e3#rd"
				},
				{
				   "name":"招商手册",
				   "type":"view",
			  "url": "http://mp.weixin.qq.com/s?__biz=MzAxNTYzMTMzNQ==&mid=208087853&idx=1&sn=aeb74f5f58676a23aa2126ad987b6cdc#rd"
				},
				{
				   "name":"加盟城市",
				   "type":"view",
			  "url": "http://mp.weixin.qq.com/s?__biz=MzAxNTYzMTMzNQ==&mid=208204024&idx=1&sn=9d6bde030d3c3a3cba603a1781780167#rd"
				},
				{
				   "name":"个人中心",
				"type":"view",
			  "url": "'.$jiazu_button.'"
				}]
		   },
		   {
			   "name":"健康生活",

			    "sub_button":[
			    	{
				   "name":"山姆品牌",
				   "type":"view",
			  "url": "http://mp.weixin.qq.com/s?__biz=MzAxNTYzMTMzNQ==&mid=208087762&idx=1&sn=be2af861b8635107a9d8813c9a94fca7#rd"
				},
				{
				   "name":"公信资质",
				   "type":"view",
			  "url": "http://mp.weixin.qq.com/s?__biz=MzAxNTYzMTMzNQ==&mid=208087689&idx=1&sn=3057497ebc5140cd471a1737ea56b0e5#rd"
				},
				{
				   "name":"售后服务",
				   "type":"view",
			  "url": "http://mp.weixin.qq.com/s?__biz=MzAxNTYzMTMzNQ==&mid=208087826&idx=1&sn=c3564c2416b6a1c6cbeac239b10f9e7f#rd"
				},
				{
				   "name":"百问百答",
				"type":"view",
			  "url": "http://mp.weixin.qq.com/s?__biz=MzAxNTYzMTMzNQ==&mid=208087488&idx=1&sn=523e72bd27b29827e2800c1b3385ebd3#rd"
				},
			    	{
				   "name":"免责声明",
				   "type":"view",
			  "url": "http://mp.weixin.qq.com/s?__biz=MzAxNTYzMTMzNQ==&mid=208087735&idx=1&sn=1f2e7321960a716d87b8bb2f0213c451#rd"
				}]
		   }
		   ]
		}';

$message_name = '玉米狗';
$link_config = 'http://mp.weixin.qq.com/s?__biz=MjM5ODMwNDc0MQ==&mid=215813633&idx=1&sn=b411d96624ed782e9dd3447c5fb9e95a#rd';
$config_good_pic = 'http://fenxiao.stevezheng.com/Public/Plugin/umeditor/php/upload/20150616/14344451966275.png';
$headimgurl = 'http://fenxiao.stevezheng.com/Public/Plugin/umeditor/php/upload/20150616/14344451966275.png';
?>