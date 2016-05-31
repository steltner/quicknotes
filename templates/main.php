<?php
vendor_script('quicknotes', 'handlebars');
vendor_script('quicknotes', 'isotope.pkgd');
vendor_script('quicknotes', 'rangy-core');
vendor_script('quicknotes', 'rangy-classapplier');
vendor_script('quicknotes', 'undo');
vendor_script('quicknotes', 'medium');
script('quicknotes', 'script');
style('quicknotes', 'style');
style('quicknotes', 'medium');
?>

<div id="app">
	<div id="app-navigation">
		<?php print_unescaped($this->inc('part.navigation')); ?>
		<?php print_unescaped($this->inc('part.settings')); ?>
	</div>

	<div id="app-content">
		<div id="app-content-wrapper">
			<?php print_unescaped($this->inc('part.content')); ?>
		</div>
	</div>
</div>
