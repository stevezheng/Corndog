<?php
/**
 * 其它版本
 * 使用方法：
 * $post_string = "app=request&version=beta";
 * request_by_other('http://facebook.cn/restServer.php',$post_string);
 */
function request_by_other($remote_server, $post_string)
{
	$context = array(
			'http' => array(
					'method' => 'POST',
					'header' => 'Content-type: application/x-www-form-urlencoded' .
					'\r\n'.'User-Agent : Jimmy\'s POST Example beta' .
					'\r\n'.'Content-length:' . strlen($post_string) + 8,
					'content' => 'mypost=' . $post_string)
	);
	$stream_context = stream_context_create($context);
	$data = file_get_contents($remote_server, false, $stream_context);
	return $data;
}
/**
 * Goofy 2011-11-30
 * getDir()去文件夹列表，getFile()去对应文件夹下面的文件列表,二者的区别在于判断有没有“.”后缀的文件，其他都一样
 */

//获取文件目录列表,该方法返回数组
function getDir($dir) {
	$dirArray[]=NULL;
	if (false != ($handle = opendir ( $dir ))) {
		$i=0;
		while ( false !== ($file = readdir ( $handle )) ) {
			//去掉"“.”、“..”以及带“.xxx”后缀的文件
			if ($file != "." && $file != ".." && !strpos($file,".") && $file != '.DS_Store') {
				$dirArray[$i]=$file;
				$i++;
			}
		}
		//关闭句柄
		closedir ( $handle );
	}
	return $dirArray;
}

//获取文件列表
function getFile($dir) {
	$fileArray[]=NULL;
	if (false != ($handle = opendir ( $dir ))) {
		$i=0;
		while ( false !== ($file = readdir ( $handle )) ) {
			//去掉"“.”、“..”以及带“.xxx”后缀的文件
			if ($file != "." && $file != ".."&&strpos($file,".")) {
				$fileArray[$i]="./imageroot/current/".$file;
				if($i==100){
					break;
				}
				$i++;
			}
		}
		//关闭句柄
		closedir ( $handle );
	}
	return $fileArray;
}

//调用方法getDir("./dir")……
function displayDir($str) {
	if (! is_dir ( $str ))
		die ( '不是一个目录！' );
	$files = array ();
	if ($hd = opendir ( $str )) {
		while ( $file = readdir ( $hd ) ) {
			if ($file != '.' && $file != '..') {
				if (is_dir ( $str . '/' . $file )) {
					$files [$file] = displayDir ( $str . '/' . $file );
				} else {
					$files [] = $file;
				}
			}
		}
	}
	return $files;
}

/**
 * 相加，供模板使用
 * @param <type> $a
 * @param <type> $b
 */
function template_add($a,$b){
    echo(intval($a)+intval($b));
}
/**
 * 相减，供模板使用
 * @param <type> $a
 * @param <type> $b
 */
function template_substract($a,$b){
    echo(intval($a)-intval($b));
}
?>