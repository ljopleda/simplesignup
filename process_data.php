<?php
	if($_SERVER['REQUEST_METHOD']!=='POST')
		die('Access denied!');
	if(!empty($_POST['action'])&&!empty($_POST['name'])&&!empty($_POST['birthday'])&&!strcasecmp($_POST['action'],'saveData')){
		if (!file_exists('data.txt')) {   
			$file = fopen('data.txt', 'w') or die("Can't create file");   
			fwrite($file, $_POST['name'].'|'.$_POST['birthday']."\n");     
			fclose($file);
		}else{
			$file = fopen('data.txt', 'a') or die("Can't create file");   
			fwrite($file, $_POST['name'].'|'.$_POST['birthday']."\n");     
			fclose($file);
		}
		header("Location: index.php"); 
	}else if(!empty($_POST['action'])&&!strcasecmp($_POST['action'],'exportData')){
		echo 'export data';
	}
	
