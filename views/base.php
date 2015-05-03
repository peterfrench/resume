<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Peter French's Resume</title>
<meta name="description" content="Peter French's Resume. Web Developer &amp; UX Designer, Peter French" />

<!-- CSS -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/vendor/twitter/bootstrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/vendor/fortawesome/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/css/core.css" />
</head>

<body>

	<?php echo $this->render('header'); ?>

	<?php echo $this->render('navigation'); ?>

	<?php echo $this->render('pages',[
		'pages' => [
			'welcome',
			['path'=>'role','params'=>['name'=>'designer']],
			['path'=>'role','params'=>['name'=>'developer']],
			['path'=>'role','params'=>['name'=>'marketer']],
			['path'=>'role','params'=>['name'=>'strategist']],
			'confession',
			'skills',
			'accounts',
			'posts',
		],
	]); ?>

<!-- Scripts -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/vendor/twitter/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/core.js"></script>

</body>
</html>