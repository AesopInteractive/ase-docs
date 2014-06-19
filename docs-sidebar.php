<aside class="ase-docs-left">

<div class="ase-docs-menu">

	<h6>Aesop Story Engine</h6>
	<ul>
	<?php

		$ase_query = wp_cache_get('ase_storyengine_docs_query');

		if ( false == $addon_query ) {

			$ase_args = array(
				'posts_per_page' => -1,
				'post_type' => 'ase_docs',
				'tax_query' => array(
					array(
						'taxonomy' => 'ase_topic',
						'field'		=> 'slug',
        				'terms' => 'aesop-story-engine',
					)
				)
			);
			$ase_query = new wp_query( $ase_args );
			wp_cache_set('ase_storyengine_docs_query', $ase_query, 3600);
		}

		if ( $ase_query->have_posts() ) : while( $ase_query->have_posts() ) : $ase_query->the_post();

			$ase_category = strtolower( get_the_title() );
			$ase_category_class = str_replace(' ', '', $ase_category);
			the_title('<li class="'.$ase_category_class.'"><a href="'.get_permalink().'">','</a></li>');

		endwhile;endif;wp_reset_query();
	?>
	</ul>

	<h6 class="ase-docs-title-elem">Themes</h6>
	<ul>
	<?php


		$theme_query = wp_cache_get('ase_docs_theme_query');

		if ( false == $theme_query ) {

			$theme_args = array(
				'posts_per_page' => -1,
				'post_type' => 'ase_docs',
				'tax_query' => array(
					array(
						'taxonomy' => 'ase_topic',
						'field'		=> 'slug',
        				'terms' => 'theme-docs',
					)
				)
			);
			$theme_query = new wp_query( $theme_args );
			wp_cache_set('ase_docs_theme_query', $theme_query, 3600);
		}

		if ( $theme_query->have_posts() ) : while( $theme_query->have_posts() ) : $theme_query->the_post();

			$theme_category = strtolower( get_the_title() );
			$theme_category_class = str_replace(' ', '', $theme_category);
			the_title('<li class="'.$theme_category_class.'"><a href="'.get_permalink().'">','</a></li>');

		endwhile;endif;wp_reset_query();
	?>
	</ul>

	<h6 class="ase-docs-title-elem">Add-Ons</h6>

	<ul>
	<?php


		$addon_query = wp_cache_get('ase_docs_addon_query');

		if ( false == $addon_query ) {

			$addon_args = array(
				'posts_per_page' => -1,
				'post_type' => 'ase_docs',
				'tax_query' => array(
					array(
						'taxonomy' => 'ase_topic',
						'field'		=> 'slug',
        				'terms' => 'add-on-docs',
					)
				)
			);
			$addon_query = new wp_query( $addon_args );
			wp_cache_set('ase_docs_addon_query', $addon_query, 3600);
		}

		if ( $addon_query->have_posts() ) : while( $addon_query->have_posts() ) : $addon_query->the_post();

			$addon_category = strtolower( get_the_title() );
			$addon_category_class = str_replace(' ', '', $addon_category);
			the_title('<li class="'.$addon_category_class.'"><a href="'.get_permalink().'">','</a></li>');

		endwhile;endif;wp_reset_query();
	?>
	</ul>
</div>
</aside>