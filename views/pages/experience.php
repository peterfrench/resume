<?php
$jobs = [
	[
		'title' => 'Programmer Analyst II',
		'company' => 'Good Samaritan Society',
		'dates' => 'February 2015 - Present',
		'url' => 'http://good-sam.com',
	],
	[
		'title' => 'Owner, Lead Developer',
		'company' => 'EdSolio',
		'dates' => 'July 2010 - Present',
		'url' => 'https://edsolio.com',
	],
	[
		'title' => 'Senior Developer',
		'company' => 'Prairie Oak Partners',
		'dates' => 'July 2013 - February 2015',
		'url' => 'http://prairieoakpartners.com',
	],
	[
		'title' => 'Technical Advisor',
		'company' => 'GunUp',
		'dates' => 'April 2013 - October 2014',
		'url' => 'https://gunup.com',
	],
	[
		'title' => 'Developer',
		'company' => 'GunUp',
		'dates' => 'July 2012 - February 2013',
		'url' => 'https://gunup.com',
	],
	[
		'title' => 'Web Developer',
		'company' => '44 Interactive',
		'dates' => 'November 2011 - July 2012',
		'url' => 'http://44interactive.com',
	],
	[
		'title' => 'Web Developer',
		'company' => 'Glynlyon',
		'dates' => 'February 2011 - November 2011',
		'url' => 'http://www.glynlyon.com',
	],
	[
		'title' => 'Internet Support Technician',
		'company' => 'Lawrence & Schiller',
		'dates' => 'December 2008 - February 2011',
		'url' => 'http://www.l-s.com',
	],
	[
		'title' => 'Web Developer',
		'company' => 'University of Sioux Falls',
		'dates' => 'December 2007 - December 2008',
		'url' => 'http://www.usiouxfalls.edu',
	],
	[
		'title' => 'IT Tech Support',
		'company' => 'University of Sioux Falls',
		'dates' => 'May 2006 - December 2007',
		'url' => 'http://www.usiouxfalls.edu',
	],
];
?>
<div class="container well">
<div class="jumbotron">
	<h2 class="row-grid">Experience</h2>
	<div class="row-grid">
	<?php foreach($jobs as $job) { ?>
	<p>
		<strong><?= $job['title'] ?></strong> @ <a href="<?= $job['url'] ?>" target="_blank"><?= $job['company'] ?></a>
		<span class="pull-right text-muted"><?= $job['dates'] ?></span>
	</p>
	<?php } ?>
	</div>
	<h2 class="row-grid">Projects</h2>
	<div class="row-grid">
	<p>
		<a href="http://sidenote.it" target="_blank"><strong>Sidenote.It</strong></a>
		<span class="pull-right text-muted">December 2010 - Present</span>
	</p>
	</div>
</div>
</div>