<?php

get_header();

	ase_docs_get_template_part('docs-search');

	?><div class="ase-content ase-docs ase-docs-search">

		<?php echo ase_docs_crumbs();?>
		
		<ul class="unstyled">
	        <?php if ( have_posts() ) : 
	        	while ( have_posts() ) : the_post();
	        		?><li>
	        				<a href="<?php the_permalink();?>">
	        					<?php the_title('<h6>','</h6>'); ?>
	        					<div class="ase-docs-search-result-content">
	        						<?php echo wp_trim_words(get_the_content(), 38, '...');?>
	        					</div>
	        				</a>
	        			</li><?php
	    		endwhile;
	   	?></ul><?php
	    	else:
	    		?><p>We're sorry but nothing comes up for that search. Try searching again, or head <a href="/help">back</a> to the main help screen.</p><?php
	    	endif;
	    	?>
    </div>

<?php

get_footer();