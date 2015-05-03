<div class="pages">
<?php
$alt = true;
foreach($pages as $page) {
	$id = null;
	$path = null;
	$params = [];
	$alt = $alt ? false : true;
	if(is_array($page))
	{
		$path = $page['path'];
		$params = $page['params'];
		$id = $path .'-'. $params['name'];
	}
	else
	{
		$path = $page;
		$id = $page;
	}
?>
<section class="page valign" id="page-<?= $id ?>">
<div class="valign-inner">
	<?= $this->render('pages/'.$path,array_merge($params,['alt' => $alt])); ?>
</section>
<?php } ?>
</div>