<?php 	function ju_misc_customize_section($wp_customize){

       

        $wp_customize->add_setting('ju_footer_desc_text', [

			'default'	=> 'Lorem ipsum dolor sit amet consectetur apiliscit est'
		]);

	

		$wp_customize->add_setting('ju_footer_copyright_text', [

			'default'	=> '&copy;2021 Bold_test'
		]);

	

		$wp_customize->add_section('ju_misc_section', [
			'title'		=> __('Bold Misc Settings', 'bold'),
			'priority'	=> 30,
			'panel'		=>	'bold'
		]);
		

		
		$wp_customize->add_control(new WP_Customize_Control(

			$wp_customize,
			'ju_footer_copyright_text_input',
			array(

				'label'			=> 	__('Copyright Text', 'bold'),
				'section'		=>	'ju_misc_section',
				'settings'		=>	'ju_footer_copyright_text'

			)
		));

        $wp_customize->add_control(new WP_Customize_Control(

			$wp_customize,
			'ju_footer_desc_text_input',
			array(

				'label'			=> 	__('Desc Text', 'bold'),
				'section'		=>	'ju_misc_section',
				'settings'		=>	'ju_footer_desc_text'

			)
		));


		
	


		


	

		




	}