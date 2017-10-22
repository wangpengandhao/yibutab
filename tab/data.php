<?php
	$arr = [
			['title' => 'js语言' , 'content' => '单线程异步机制'],
			['title' => 'html语言' , 'content' => '超文本标记语言'],
			['title' => 'css语言' , 'content' => '层叠样式表'],
			['title' => 'jQuery语言' , 'content' => 'js库，事件，dom，动画，ajax'],
	];
	$news = [
			['title' => '新闻' , 'content' => '单线程异步机制'],
			['title' => '娱乐' , 'content' => '超文本标记语言'],
			['title' => '科技' , 'content' => '层叠样式表'],
			['title' => '教育' , 'content' => 'js库，事件，dom，动画，ajax'],
	];
	$web = [
			['title' => '前端' , 'content' => '单线程异步机制'],
			['title' => 'UI' , 'content' => '超文本标记语言'],
			['title' => '后台' , 'content' => '层叠样式表'],
			['title' => 'AI' , 'content' => 'js库，事件，dom，动画，ajax'],
	];
	$pe = [
			['title' => '火影忍者' , 'content' => '单线程异步机制'],
			['title' => '死神' , 'content' => '超文本标记语言'],
			['title' => '画江湖' , 'content' => '层叠样式表'],
			['title' => '秦时明月' , 'content' => 'js库，事件，dom，动画，ajax'],
	];
	// var_dump($_GET);
	// echo json_encode($arr);
	// if($_GET['name']=='pe'){
	// 	echo json_encode($pe);
	// }else if($_GET['name']=='web'){
	// 	echo json_encode($web);
	// }else if($_GET['name']=='news'){
	// 	echo json_encode($news);
	// }else if($_GET['name']=='arr'){
	// 	echo json_encode($arr);
	// }
	if($_POST['name']=='pe'){
		echo json_encode($pe);
	}else if($_POST['name']=='web'){
		echo json_encode($web);
	}else if($_POST['name']=='news'){
		echo json_encode($news);
	}else if($_POST['name']=='arr'){
		echo json_encode($arr);
	}
?>
