<?php

$programming = [
	'agile development' => 2,
	'php' => 4,
	'jquery' => 4,
	'c++' => 1,
	'json' => 4,
	'c#' => 2,
	'html5' => 3,
	'mysql' => 3,
	'subversion' => 2,
	'yii2' => 3,
	'mvc' => 3,
	'css' => 4,
	'sql' => 3,
	'unit testing' => 2,
	'ajax' => 4,
	'xml' => 2,
	'java' => 1,
	'mvvm' => 2,
	'javascript' => 4,
	'git' => 3,
	'python' => 1,
	'rest' => 3,
	'soap' => 2,
	'oop' => 4,
	'responsive design' => '3',
];
$systems = [
	'linux' => '2',
	'ubuntu' => '3',
	'os x' => '4',
	'windows' => '3',
	'debian' => '2',
];
?>
<div class="container">
<div class="jumbotron text-center">
	<h2 data-toggle="tooltip" data-placement="top" title="Look at dem skillz!!">Skills</h2>
	<?php foreach($programming as $tag => $strength) { ?>
	<div class="tag tag-strength-<?= $strength; ?>"><?= $tag; ?></div>
	<?php } ?>
	<h2>Systems</h2>
	<?php foreach($systems as $tag => $strength) { ?>
	<div class="tag tag-strength-<?= $strength; ?>"><?= $tag; ?></div>
	<?php } ?>
</div>
</div>