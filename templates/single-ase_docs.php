<?php

get_header();

	ase_docs_get_template_part('docs-search');

	echo '<div class="ase-content ase-docs">';

		ase_docs_get_template_part('docs-sidebar');

		echo '<div class="ase-docs-right">';

			if ( function_exists('ase_docs_crumbs') ) {
				ase_docs_crumbs();
			}

			if ( have_posts() ) : while( have_posts() ) : the_post();

				the_content();

			endwhile; endif;

		echo '</div>';

	echo '</div>';

get_footer();