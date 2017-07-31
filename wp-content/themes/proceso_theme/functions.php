<?php

	add_action( 'wp_enqueue_scripts', 'add_my_script' );
	function add_my_script() {
		wp_enqueue_script(
				'main', // name your script so that you can attach other scripts and de-register, etc.
				get_template_directory_uri() . '/js/main.js?v=1.0.4', // this is the location of your script file
				array('jquery') // this array lists the scripts upon which your script depends
		);
		wp_enqueue_script(
				'plugins', // name your script so that you can attach other scripts and de-register, etc.
				get_template_directory_uri() . '/js/plugins.js?v=0.1.6', // this is the location of your script file
				array('jquery') // this array lists the scripts upon which your script depends
		);
		wp_enqueue_script(
				'scrolloverflow', // name your script so that you can attach other scripts and de-register, etc.
				get_template_directory_uri() . '/js/plugins/scrolloverflow.js', // this is the location of your script file
				array('jquery') // this array lists the scripts upon which your script depends
		);
		wp_enqueue_script(
				'fullpage', // name your script so that you can attach other scripts and de-register, etc.
				get_template_directory_uri() . '/js/plugins/fullpage.js', // this is the location of your script file
				array('jquery') // this array lists the scripts upon which your script depends
		);
		wp_enqueue_script(
				'owl', // name your script so that you can attach other scripts and de-register, etc.
				get_template_directory_uri() . '/js/plugins/owl.js', // this is the location of your script file
				array('jquery') // this array lists the scripts upon which your script depends
		);
	}

	//Making jQuery to load from Google Library
	function replace_jquery() {
		if (!is_admin()) {
			// comment out the next two lines to load the local copy of jQuery
			wp_deregister_script('jquery');
			wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', true, '3.2.1');
			wp_enqueue_script('jquery');
		}
	}
	add_action('init', 'replace_jquery');

?>
