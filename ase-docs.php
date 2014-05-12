<?php

/*
*
* Plugin Name: Aesop Docs
*/

class aesopDocs {

	function __construct(){

		define('ASE_DOCS_DIR', plugin_dir_path( __FILE__ ));
		define('ASE_DOCS_URL', plugins_url( '', __FILE__ ));

		require_once(ASE_DOCS_DIR.'/type.php');
		require_once(ASE_DOCS_DIR.'/template-loader.php');
		require_once(ASE_DOCS_DIR.'/ase-docs-helpers.php');
	}

}

new aesopDocs;
