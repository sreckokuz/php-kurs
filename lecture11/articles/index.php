<?php
	
	require_once('../helpers/database.php');
    $database = new Database();

	if (!isset($_GET['article']))
	{
		$articles = $database->getAllArticles();
		include_once 'articlesTemplate.php';		
	}
	else
	{
		$article = $database->getArticle($_GET['article']);
		include_once 'articleTemplate.php';
	}

?>