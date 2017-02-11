<?php

	register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
));
	add_theme_support( 'post-thumbnails' );
	add_image_size('blog-img',1024, 615, true);
	add_image_size('slider-img',1440, 500, true);


	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">',
		'after_widget' => '</section">',
		'before_title' => '<h2">',
		'after_title' => '</div">',
		));




add_action( 'init', 'create_post_type' );
function create_post_type() {



register_post_type( 'automotriz',
    array(
      'labels' => array(
        'name' => __( 'Automotriz' ),
        'singular_name' => __( 'Automotriz' )
      ),
      'taxonomies' => array('category'),
      'supports' => array('title','editor','thumbnail', 'author', 'comments','excerpt'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'automotriz'),
    )
  );

  register_post_type( 'refacciones',
      array(
        'labels' => array(
          'name' => __( 'Refacciones' ),
          'singular_name' => __( 'Refacciones' )
        ),
        'taxonomies' => array('category'),
        'supports' => array('title','editor','thumbnail', 'author', 'comments','excerpt'),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'refacciones'),
      )
    );

    register_post_type( 'autolavado',
        array(
          'labels' => array(
            'name' => __( 'Autolavado' ),
            'singular_name' => __( 'Autolavado' )
          ),
          'taxonomies' => array('category'),
          'supports' => array('title','editor','thumbnail', 'author', 'comments','excerpt'),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'autolavado'),
        )
      );

      register_post_type( 'tecnologia',
          array(
            'labels' => array(
              'name' => __( 'Tecnologia' ),
              'singular_name' => __( 'Tecnologia' )
            ),
            'taxonomies' => array('category'),
            'supports' => array('title','editor','thumbnail', 'author', 'comments','excerpt'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'tecnologia'),
          )
        );



}


?>
