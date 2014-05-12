<?php

class aesopDocsTemplateLoader {

	function __construct() {

		add_filter( 'template_include', array($this,'template_loader'));

	}

	/**
	*
	* @since version 1.0
	* @param $template - return based on view
	* @return page template based on view
	*/
	function template_loader($template) {

	    // override single
	    if ( 'ase_docs' == get_post_type() ):

	    	if ( $overridden_template = locate_template( 'single-ase_docs.php', true ) ) {

			   $template = load_template( $overridden_template );

			} else {

			    $template = ASE_DOCS_DIR.'templates/single-ase_docs.php';
			}

	    endif;

	    // override archive
	    if ( is_post_type_archive('ase_docs')):

	    	if ( $overridden_template = locate_template( 'archive-ase_docs.php', true ) ) {

			   $template = load_template( $overridden_template );

			} else {

	        	$template = ASE_DOCS_DIR.'templates/archive-ase_docs.php';
	        }

		endif;

	    return $template;

	}

}
new aesopDocsTemplateLoader;