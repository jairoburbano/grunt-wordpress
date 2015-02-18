<?php
/**
 * Plugins necesarios para este tema
 */
function ss_register_required_plugins() {

	$plugins = array(

		array(
			'name' 				=>	'WordPress SEO by Yoast',
			'slug' 				=>	'wordpress-seo',
		),
		array(
			'name' 				=>	'Advanced Custom Fields',
			'slug' 				=>	'advanced-custom-fields',
		),
		array(
			'name' 				=>	'Google Analytics for WordPress',
			'slug' 				=>	'google-analytics-for-wordpress',
		),
		array(
			'name'				=>	'Contact Form 7',
			'slug'				=>	'contact-form-7',
		)
	);

	// Change this to your theme text domain, used for internationalising strings
	$theme_text_domain = 'ssplugins';

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'domain'       		=> $theme_text_domain,         	// Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
		'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
		'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> false,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		'strings'      		=> array(
			'page_title'                       			=> __( 'Instalar los plugins requeridos', $theme_text_domain ),
			'menu_title'                       			=> __( 'Instalar Plugins', $theme_text_domain ),
			'installing'                       			=> __( 'Instalando plugin: %s', $theme_text_domain ), // %1$s = plugin name
			'oops'                             			=> __( 'Hubo un error con la API del plugin.', $theme_text_domain ),
			'notice_can_install_required'     			=> _n_noop( 'Este tema requiere el siguiente plugin: %1$s.', 'Este tema requiere los siguientes plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'			=> _n_noop( 'Este tema recomienda este plugin: %1$s.', 'Este tema recomienda estos plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Comenzar a instalar plugin', 'Comenzar a instalar los plugins' ),
			'activate_link' 				  			=> _n_noop( 'Activar el plugin instalado', 'Activar los plugins instalados' ),
			'return'                           			=> __( 'Return to Required Plugins Installer', $theme_text_domain ),
			'plugin_activated'                 			=> __( 'Plugins se activaron exitosamente.', $theme_text_domain ),
			'complete' 									=> __( 'Todos los plugins instalados y activados exitosamente.. %s', $theme_text_domain ), // %1$s = dashboard link
			'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)
	);

	tgmpa( $plugins, $config );

}