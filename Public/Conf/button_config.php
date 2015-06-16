<?php
$buy_button = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.'g=App&m=Index&a=index_info&refresh=1';
$jiazu_button = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.'g=App&m=Index&a=member&refresh=1';
$newmenu = '{
		 "button":[
			{	
			  "type":"view",
			  "name":"立即购买",
			  "url":"'.$buy_button.'"
			},
			{
				"name":"我的家族",
				
				"sub_button":[
				
				{
				   "type":"click",
				   "name":"获取二维码",
				   "key":"GET_PIC"
				},
				{
				   "name":"我的家族",
				"type":"view",
				"url":"'.$jiazu_button.'"
				}]
				
				
				
		   },
		   {
			   "name":"我的助手",
			   
			    "sub_button":[
			    	{	
				   "name":"团长新手指南",
				   "type":"view",
					"url":"http://mp.weixin.qq.com/s?__biz=MjM5ODMwNDc0MQ==&mid=215813392&idx=1&sn=5765fb75ba99170d4c18bb35f983958e#rd"
				},
				{	
				   "name":"玩转奔跑家族",
				   "type":"click",
					"key":"GET_INFO"
				},
				{
				   "type":"view",
				   "name":"联系我们",
				   "url":"http://mp.weixin.qq.com/s?__biz=MjM5ODMwNDc0MQ==&mid=215811538&idx=1&sn=b0295c5c815c28619a4d278ee7065168#rd"
				}]
		   }]
		}';		
		
$message_name = '玉米狗';
$link_config = 'http://mp.weixin.qq.com/s?__biz=MjM5ODMwNDc0MQ==&mid=215813633&idx=1&sn=b411d96624ed782e9dd3447c5fb9e95a#rd';
$config_good_pic = 'http://dev.yidaixi.avosapps.com/yidaixi/img/home/home-oneclick.jpg';
$headimgurl = 'http://dev.yidaixi.avosapps.com/yidaixi/img/home/home-oneclick.jpg';
?>