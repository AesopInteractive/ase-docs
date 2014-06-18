<?php

get_header();

	echo '<div class="ase-content ase-docs">';

		ase_docs_get_template_part('docs-sidebar');

		echo '<div class="ase-docs-right">';
			?>
			<div class="ase-docs-welcome-block ase-docs-core-welcome">
				<h5>ASE Owners Manual</h5>
				<p>All the information you could possibly need about Aesop Story Engine and it's options</p>
			</div>
			<div class="ase-docs-welcome-block ase-docs-theme-welcome">
				<h5>ASE Theme Documentation</h5>
				<p>Here you'll find documentation for the various themes developed by Aesopinteractive.</p>
			</div>
			<div class="ase-docs-welcome-block ase-docs-addon-welcome">
				<h5>ASE Addon Documentation</h5>
				<p>Addons from the library and all of their documentation can be found here.</p>
			</div>
			<div class="ase-docs-welcome-block ase-docs-dev-welcome">
				<h5>Information for Developers</h5>
				<p>If you're a developer looking for filters and actions, this is the place for you.</p>
			</div>
			<?php
		echo '</div>';

	echo '</div>';

get_footer();