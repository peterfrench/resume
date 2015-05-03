<?php

$programming = [
	'Agile Development' => 2,
	'php' => 4,
	'jquery' => 4,
	'C++' => 1,
	'json' => 4,
	'C#' => 2,
	'html5' => 3,
	'MySQL' => 3,
	'Subversion' => 2,
	'Yii2' => 3,
	'MVC' => 3,
	'css' => 4,
	'SQL' => 3,
	'Unit Testing' => 2,
	'AJAX' => 4,
	'XML' => 2,
	'Java' => 1,
	'javascript' => 4,
	'Git' => 3,
	'Python' => 1,
	'REST' => 3,
	'SOAP' => 2,
	'OOP' => 4,
	'Responsive Design' => '3',
];
$systems = [
	'linux' => '2',
	'ubuntu' => '3',
	'os x' => '4',
	'windows' => '3',
	'debian' => '2',
];
?>
<div class="valign"><div class="valign-inner">
<div class="container">
<div class="jumbotron text-center">
	<h2>Skills</h2>
	<?php foreach($programming as $tag => $strength) { ?>
	<div class="tag tag-strength-<?= $strength; ?>"><?= $tag; ?></div>
	<?php } ?>
	<h2>Systems</h2>
	<?php foreach($systems as $tag => $strength) { ?>
	<div class="tag tag-strength-<?= $strength; ?>"><?= $tag; ?></div>
	<?php } ?>
</div>
</div>
</div>