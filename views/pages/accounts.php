<?php
	$accounts = [
		[
			'name' => 'Github',
			'url' => 'https://github.com/peterfrench',
			'icon' => 'github',
		],
		[
			'name' => 'Linkedin',
			'url' => 'http://www.linkedin.com/in/peterbfrench',
			'icon' => 'linkedin',
		],
		[
			'name' => 'Coderwall',
			'url' => 'https://coderwall.com/p/u/peterfrench',
			'icon' => 'code',
		],
		[
			'name' => 'Twitter',
			'url' => 'https://twitter.com/peterbfrench',
			'icon' => 'twitter',
		],
		[
			'name' => 'Google Plus',
			'url' => 'https://plus.google.com/+peterfrenchie/posts',
			'icon' => 'google-plus',
		],
		[
			'name' => 'Flickr',
			'url' => 'https://www.flickr.com/photos/peterfrench/',
			'icon' => 'flickr',
		],
	];
?>
<div class="valign"><div class="valign-inner"><div class="container">
<div class="jumbotron">
	<h2 class="text-center row-grid">Network</h2>
	<?php
	$count = 0;
	foreach($accounts as $account) {
		if($count == 0)
			echo '<div class="row row-grid">';
	?>
	<div class="col-sm-4 text-center">
	<a class="btn" href="<?= $account['url'] ?>" title="<?= $account['name'] ?>" data-toggle="tooltip" data-placement="bottom" target="_blank">
		<i class="fa fa-<?= $account['icon'] ?> fa-5x"></i>
	</a>
	</div>
	<?php
		$count++;
		if(count($accounts) == $count)
			echo '</div>';
		else if($count % 3 == 0) {
			echo '</div><div class="row row-grid">';
		}
	}
	?>

</div></div></div>