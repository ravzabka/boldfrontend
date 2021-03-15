<?php 

function ju_customize_register($wp_customize){

	$wp_customize->add_panel('bold', [

	'title'			=> __('Bold Settings', 'bold'),
	'description'	=> '<p>Bold Theme Settings</p>',
	'priority'		=>	160


	]);


	ju_social_customizer_section($wp_customize);
	ju_misc_customize_section($wp_customize);

}