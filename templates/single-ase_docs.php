<?php

get_header();

	echo '<div class="ase-content ase-docs">';

		ase_docs_get_template_part('docs-sidebar');

		echo '<div class="ase-docs-right">';

			if ( have_posts() ) : while( have_posts() ) : the_post();

				the_content();

			endwhile; endif;

		echo '</div>';

	echo '</div>';

get_footer();