<?php

	if(isset($_GET['table'])) {
		$table = $_GET['table'];
		if ($table == 'posts') {
			if(isset($_GET['action'])) {
			$action = $_GET['action'];
				if ($action == 'new') {
					$title = $_POST['title'];
					$message = $_POST['message'];
					$date_added = $_POST['date_added'];
					mysql_query("INSERT INTO news (title, message, posted_by, date_added) VALUES ('$title', '$message', '$posted_by', '$date_added')");
					header("Location: news/");
				} elseif ($action == 'edit') {
					if(isset($_GET['newsid'])) {
						$newsid = $_GET['newsid'];
						$title = $_POST['title'];
						$message = $_POST['message'];
						mysql_query("UPDATE news SET title = '$title', message = '$message' WHERE newsid='$newsid' LIMIT 1");
						header("Location: news/");
					}
				} elseif ($action == 'delete') {
					if(isset($_GET['newsid'])) {
						$newsid = $_GET['newsid'];
						mysql_query("DELETE FROM news WHERE newsid='$newsid'");  
						header("Location: news/");
					}
				}
			}
		}
	}
?>