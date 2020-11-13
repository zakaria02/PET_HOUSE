<?php
function accesspress_pagepost_setting($wp_customize){

    $wp_customize->add_section(
        'pagepost_setting',
        array(
          'title'           =>      __('Page/Post Settings', 'accesspress-store'),
          'description'           =>      __('If not defined from cutom metabox these settings will be applied.', 'accesspress-store'),
          'priority'        =>      '40',
          )
        );

    
    $wp_customize->add_setting(
        'single_page_layout',

        array(
            'default'       =>      '',
            'sanitize_callback' => 'accesspress_store_page_layouts'
            )
        );
    $imagepath =  get_template_directory_uri() . '/inc/images/';                           
    $wp_customize->add_control( new AccessPress_Store_WP_Customize_Radioimage_Control(
        $wp_customize,
        'single_page_layout',
        array(
            'section'       =>      'pagepost_setting',
            'label'         =>      __('Single Page Layout', 'accesspress-store'),
            'type'          =>      'radioimage',
            'choices'       =>      array( 
              'left-sidebar' => $imagepath.'left-sidebar.png',  
              'right-sidebar' => $imagepath.'right-sidebar.png', 
              'both-sidebar' => $imagepath.'both-sidebar.png',
              'no-sidebar' => $imagepath.'no-sidebar.png',
              )
            )
        ));
    $wp_customize->add_setting(
        'single_post_layout',

        array(
            'default'       =>      '',
            'sanitize_callback' => 'accesspress_store_page_layouts'
            )
        );
    $imagepath =  get_template_directory_uri() . '/inc/images/';                           
    $wp_customize->add_control( new AccessPress_Store_WP_Customize_Radioimage_Control(
        $wp_customize,
        'single_post_layout',
        array(
            'section'       =>      'pagepost_setting',
            'label'         =>      __('Single Post Layout', 'accesspress-store'),
            'type'          =>      'radioimage',
            'choices'       =>      array( 
              'left-sidebar' => $imagepath.'left-sidebar.png',  
              'right-sidebar' => $imagepath.'right-sidebar.png', 
              'both-sidebar' => $imagepath.'both-sidebar.png',
              'no-sidebar' => $imagepath.'no-sidebar.png', 
              )
            )
        ));
    $wp_customize->add_setting(
        'archive_page_layout',

        array(
            'default'       =>      '',
            'sanitize_callback' => 'accesspress_store_page_layouts'
            )
        );
    $imagepath =  get_template_directory_uri() . '/inc/images/';                           
    $wp_customize->add_control( new AccessPress_Store_WP_Customize_Radioimage_Control(
        $wp_customize,
        'archive_page_layout',
        array(
            'section'       =>      'pagepost_setting',
            'label'         =>      __('Archive Page Layout', 'accesspress-store'),
            'type'          =>      'radioimage',
            'choices'       =>      array( 
              'left-sidebar' => $imagepath.'left-sidebar.png',  
              'right-sidebar' => $imagepath.'right-sidebar.png', 
              'both-sidebar' => $imagepath.'both-sidebar.png',
              'no-sidebar' => $imagepath.'no-sidebar.png', 
              )
            )
        ));

    $wp_customize->add_setting(
        'archive_page_view_type',
        
        array(
            'default'       =>      'list',
            'sanitize_callback' => 'accesspress_store_radio_sanitize_archive_view'
            )
        );
    $imagepath =  get_template_directory_uri() . '/inc/images/';                           
    $wp_customize->add_control(
        'archive_page_view_type',
        array(
            'section'       =>      'pagepost_setting',
            'label'         =>      __('Archive Page Inner View', 'accesspress-store'),
            'type'          =>      'radio',
            'choices'       =>      array( 
              'list' => __('List', 'accesspress-store'),
              'grid' => __('Grid', 'accesspress-store') 
              )
            )
        );

  // post metadata
  $wp_customize->add_setting(
      'ap_store_post_feat_img',
      array(
          'default' => 1,
          'sanitize_callback' => 'accesspress_store_checkbox_sanitize'
      )
  );

  $wp_customize->add_control(
      'ap_store_post_feat_img',
      array(
          'label' => __('Enable/Disable (Featured Image)','accesspress-store'),
          'section'=>'pagepost_setting',
          'type'=>'checkbox'
      )
  );

  $wp_customize->add_setting(
      'ap_store_post_cat',
      array(
          'default' => 1,
          'sanitize_callback' => 'accesspress_store_checkbox_sanitize'
      )
  );

  $wp_customize->add_control(
      'ap_store_post_cat',
      array(
          'label' => __('Enable/Disable (Post Categories)','accesspress-store'),
          'section'=>'pagepost_setting',
          'type'=>'checkbox'
      )
  );
}
add_action('customize_register', 'accesspress_pagepost_setting');