<?php

get_header();

	echo '<div class="ase-content">';

		ase_docs_get_template_part('docs-sidebar');

		echo '<div class="ase-docs-content">';
		echo 'docs archive';
		echo '</div>';

	echo '</div>';

get_footer();