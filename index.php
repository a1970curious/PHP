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
				$page= $_GET['page'];
				if($page == "")
				{
					$page=Homepage;
					echo $page;
					unset($page);
				} else
				{
					echo $_GET['page'];
					unset($page);
				}			
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
								include('content/home.php');
							}
							break;
						default:
							include('content/home.php');
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
