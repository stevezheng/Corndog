<?php
$buy_button = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.'g=App&m=Index&a=index_info&refresh=1';
$jiazu_button = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.'g=App&m=Index&a=member&refresh=1';
$newmenu = '{
		 "button":[
			{	
			  "type":"click",
			  "name":"参与招募",
			  "url":"'.$buy_button.'"
			},
			{
				"name":"招商中心",
				
				"sub_button":[
				
				{
				   "type":"click",
				   "name":"获取山姆推广图片",
				   "key":"GET_PIC"
				},
				{
				   "name":"招商指引",
				"type":"view",
			  "url": "http://mp.weixin.qq.com/s?__biz=MzAxNTYzMTMzNQ==&mid=207913742&idx=1&sn=6333bdcb136eb339a5ede863b7fbc0e3#rd"
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
			  "url": "http://mp.weixin.qq.com/s?__biz=MzAxNTYzMTMzNQ==&mid=207913742&idx=1&sn=6333bdcb136eb339a5ede863b7fbc0e3#rd"
				},
				{
				   "name":"公信资质",
				   "type":"view",
			  "url": "http://mp.weixin.qq.com/s?__biz=MzAxNTYzMTMzNQ==&mid=207913742&idx=1&sn=6333bdcb136eb339a5ede863b7fbc0e3#rd"
				},
				{
				   "name":"招商手册",
				   "type":"view",
			  "url": "http://mp.weixin.qq.com/s?__biz=MzAxNTYzMTMzNQ==&mid=207913742&idx=1&sn=6333bdcb136eb339a5ede863b7fbc0e3#rd"
				},
				{
				   "name":"加盟城市",
				   "type":"view",
			  "url": "http://mp.weixin.qq.com/s?__biz=MzAxNTYzMTMzNQ==&mid=207913742&idx=1&sn=6333bdcb136eb339a5ede863b7fbc0e3#rd"
				},
				{
				   "name":"售后服务",
				   "type":"view",
			  "url": "http://mp.weixin.qq.com/s?__biz=MzAxNTYzMTMzNQ==&mid=207913742&idx=1&sn=6333bdcb136eb339a5ede863b7fbc0e3#rd"
				}]
		   }
		   ]
		}';

$message_name = '玉米狗';
$link_config = 'http://mp.weixin.qq.com/s?__biz=MjM5ODMwNDc0MQ==&mid=215813633&idx=1&sn=b411d96624ed782e9dd3447c5fb9e95a#rd';
$config_good_pic = 'http://fenxiao.stevezheng.com/Public/Plugin/umeditor/php/upload/20150616/14344451966275.png';
$headimgurl = 'http://fenxiao.stevezheng.com/Public/Plugin/umeditor/php/upload/20150616/14344451966275.png';
?>