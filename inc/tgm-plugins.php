<?php 
add_action( 'tgmpa_register', 'radirty_register_required_plugins' );

function radirty_register_required_plugins() {
	$plugins = array(

		array(
			'name'               => 'WPBakery Page Builder',
			'slug'               => 'js_composer', 
			'source'             => dirname( __FILE__ ) . '/plugins/js_composer.zip', 
			'required'           => true, 
			'version'            => '6.2.0', 
			'force_activation'   => false, 
			'force_deactivation' => false, 
			'external_url'       => '', 
			'is_callable'        => '', 
		),
		array(
			'name'               => 'Contact Form 7', 
			'slug'               => 'contact-form-7', 
			'source'             => dirname( __FILE__ ) . '/plugins/contact-form-7.5.2.zip', 
			'required'           => true, 
			'version'            => '5.2',
			'force_activation'   => false, 
			'force_deactivation' => false, 
			'external_url'       => '', 
			'is_callable'        => '', 
                ),
                array(
			'name'               => 'MC4WP: Mailchimp for WordPress', 
			'slug'               => 'mailchimp-for-wp',
			'source'             => dirname( __FILE__ ) . '/plugins/mailchimp-for-wp.4.8.zip', 
			'required'           => true, 
			'version'            => '4.8', 
			'force_activation'   => false,
			'force_deactivation' => false, 
			'external_url'       => '',
			'is_callable'        => '', 
		),
	);
	$config = array(
		'id'           => 'radity',                
		'default_path' => '',                     
		'menu'         => 'raditian-plugins', 
		'parent_slug'  => 'plugins.php',            
		'capability'   => 'manage_options',    
		'has_notices'  => true,                    
		'dismissable'  => true,                    
		'dismiss_msg'  => '',                      
		'is_automatic' => false,                   
		'message'      => '',   
	);
	tgmpa( $plugins, $config );
}
?>