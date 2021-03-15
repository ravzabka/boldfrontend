<?php
	
	function ju_social_customizer_section($wp_customize){

	$wp_customize->add_setting('ju_facebook_handle', [
		'default' => ''
	]);

	$wp_customize->add_setting('ju_twitter_handle', [
		'default' => ''
	]);

	$wp_customize->add_setting('ju_instagram_handle', [
		'default' => ''
	]);


	$wp_customize->add_section('ju_social_section', [

		'title'		=> __('Bold Social Settings', 'bold'),
		'priority'	=> 10,
		'panel'		=>	'bold'

		]);




	$wp_customize->add_control( new WP_Customize_Control(
        
        $wp_customize,
        'ju_social_facebook_input',
        array(
            'label'          => __( 'Facebook Handle', 'newudemy' ),
            'section'        => 'ju_social_section',
            'settings'       => 'ju_facebook_handle'            
        )
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        
        $wp_customize,
        'ju_social_twitter_input',
        array(
            'label'          => __( 'Twitter Handle', 'newudemy' ),
            'section'        => 'ju_social_section',
            'settings'       => 'ju_twitter_handle',
            'type'			 =>	'text'

        )
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        
        $wp_customize,
        'ju_social_instagram_input',
        array(
            'label'          => __( 'Instagram Handle', 'newudemy' ),
            'section'        => 'ju_social_section',
            'settings'       => 'ju_instagram_handle',
            'type'			 =>	'text'           
        )
    ));    

}

?>