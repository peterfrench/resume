<div class="container"><div class="row row-grid">
<?php if($alt) { ?>
	<div class="col-md-2 text-center">
		<img class="avatar" src="/images/<?= $name; ?>.jpg" alt="<?= ucfirst($name); ?>" />
	</div>
<?php } ?>
	<div class="col-md-10">
		<?= $this->render('pages/role'.ucfirst($name)); ?>
	</div>
<?php if(!$alt) { ?>
	<div class="col-md-2 text-center">
		<img class="avatar" src="/images/<?= $name; ?>.jpg" alt="<?= ucfirst($name); ?>" />
	</div>
<?php } ?>
</div></div>