<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	require_once('env.php');

	require_once($_SERVER['DOCUMENT_ROOT'].$path.'php/vendor/Twig/Autoloader.php');

	Twig_Autoloader::register();

	$loader = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT'].$path.'views');
	$twig = new Twig_Environment($loader);

	require_once($_SERVER['DOCUMENT_ROOT'].$path.'config/content.php');

	echo $twig->render('layout.html', $data);

?>