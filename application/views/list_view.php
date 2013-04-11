<html>
<body style="font-family:Arial;background:#EFE">
	<h1>Things To-Du</h1>
	<h2>Listing</h2>
	<?php if(count($todos) < 1) print "There is nothing to do!"; ?>
	<ol>
		<?php foreach($todos as $todo): ?>
		<li>
			<?php print anchor('todo/detail/'.$todo->id, $todo->name); ?>
		</li>
		<?php endforeach; ?>
	</ol>
	<p>
		<strong><?php print anchor('todo/create', 'Create Item'); ?></strong>
	</p>
</body>
</html>