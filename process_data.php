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
		if (file_exists('data.txt')) {  
			$file = fopen('data.txt', 'r');
			$dom = new DOMDocument('1.0');
			$community = $dom->appendChild($dom->createElement('community'));

			while ($line = fgetcsv($file,0,'|')) {
				$member = $dom->createElement('member');
    			$community->appendChild($member);

    			$name = $dom->createElement('name');
    			$c_name = $dom->createTextNode($line[0]);
    			$name->appendChild($c_name);
    			$member->appendChild($name);

    			$birthday = $dom->createElement('birthday');
    			$c_birthday = $dom->createTextNode($line[1]);
    			$birthday->appendChild($c_birthday);
    			
    			$member->appendChild($birthday);
			}
			$dom->formatOutput = TRUE;

			$dom->save('data.xml');

			$file_url = 'data.xml';
			header('Content-Type: application/octet-stream');
			header("Content-Transfer-Encoding: Binary"); 
			header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
			readfile($file_url);
		}else{
			header("Location: index.php"); 
		}
	}
	
