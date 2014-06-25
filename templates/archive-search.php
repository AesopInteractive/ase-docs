<?php

get_header();

	ase_docs_get_template_part('docs-search');

	?><div class="ase-content ase-docs ase-docs-search">

        <?php if ( have_posts() ) : 
        	while ( have_posts() ) : the_post();
        		?><a href="<?php the_permalink();?>"><?php the_title(); ?></a><?php
    		endwhile;
    	else:
    		?><p>We're sorry but nothing comes up for that search. Try searching again, or head <a href="/help">back</a> to the main help screen.</p><?php
    	endif;

    	?>
    </div>

<?php

get_footer();