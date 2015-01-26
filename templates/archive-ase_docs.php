<?php

get_header();


	ase_docs_get_template_part('docs-search');

	echo '<div class="ase-content ase-docs">';

		echo '<div class="ase-docs-welcome">';
			?>
			<p class="lead">Welcome to the <em>Aesop Help Center</em>. Find documentation for the Aesop Story Engine plugin, as well as our <a href="/library">add-ons and themes</a> here.</p>

			<?php
		echo '</div>';

		ase_docs_get_template_part('docs-sidebar');
	echo '</div>';


		?>
		<div class="ase-content ase-docs-resources">
		<h5 class="ase-docs-more-resources">Additional Resources</h5>
		<ul class="unstyled tac">
			<li><a href="/quick-start-guide">Quick Start Guide</a></li>
			<li><a href="/forums">Product Support Forum</a></li>
			<li><a href="/developers">Developer Documentation</a></li>
		</ul>
		</div>
		<?php

get_footer();
