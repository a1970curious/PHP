<!DOCTYPE html>
<html>
	<head>
		<title>
			PHP Navigation
		</title>
	</head>
	<body>
		<div id="header">
			<a href="?page=Homepage">Homepage</a>
			<a href="?page=Contact">Contact</a>
		</div>
		<div id="container">
			<?php
				//include("post_title.php"); If using post title uncomment this line and remove text
				if(empty($page)) 
				{
					$page = $_GET['page'];
					switch($page) 
					{
						case 'Contact':
							if(file_exists('contact.php'))
							{
								include('contact.php');
							} else
							{
								include('home.php');
							}
							break;
						default:
							include('home.php');
							break;
					} 
				} else 
				{
					include('home.php');
				}
			?>
		</div>
		<div id="footer">
		
		</div>
	</body>
</html>