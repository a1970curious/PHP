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