<?php

class aesopDocsSearchTemplateLoader {

	function __construct() {

		add_filter( 'template_include', array($this,'search_template_loader'));

	}

	/**
	*
	* @since version 1.0
	* @param $template - return based on search
	* @return page template based on view
	*/
	function search_template_loader($template) {

		global $wp_query;

		$post_type = get_query_var('post_type');

		if( $wp_query->is_search && $post_type == 'ase_docs' ){

		      $template = ASE_DOCS_DIR.'templates/archive-search.php';

		}

		return $template;

	}

}
new aesopDocsSearchTemplateLoader;