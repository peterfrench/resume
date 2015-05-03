<?php
// Auto loader
spl_autoload_register(function($class){
	include 'classes/' . str_replace('app\\','',$class) . '.php';
});

// Build view
$view = new app\View();

echo $view->render('base');