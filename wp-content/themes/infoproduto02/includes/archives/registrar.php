<?php

// Meus posts types
	function meus_post_types(){

		// Produtos
		register_post_type('produtos192',
			array(
				'labels' 			=> array(
					'name' 			=> __('Produtos'),
					'singular_name'	=> _x('Produto', 'post type singular name'),
					'add_new'		=> _x('Novo Produto', 'portfolio item'),
					'add_new_item'	=> _x('Adicionar novo Produto', 'portfolio item'),
					'edit_item'		=> _x('Editar Produto', 'portfolio item'),
				),
				'rewrite' 			=> array('slug' => 'produtos'),
				'public' 			=> true,
				'has_archive' 		=> true,
				'menu_icon' 		=> 'dashicons-products',
				'supports' 			=> array('title', 'page-attributes'),
			)
		);

		
		// Representantes
		register_post_type('representantes192',
			array(
				'labels' 			=> array(
					'name' 			=> __('Representantes'),
					'singular_name'	=> _x('Representante', 'post type singular name'),
					'add_new'		=> _x('Novo Representante', 'portfolio item'),
					'add_new_item'	=> _x('Adicionar novo Representante', 'portfolio item'),
					'edit_item'		=> _x('Editar Representante', 'portfolio item'),
				),
				'rewrite' 			=> array('slug' => 'representantes'),
				'public' 			=> true,
				'has_archive' 		=> true,
				'menu_icon' 		=> 'dashicons-groups',
				'supports' 			=> array('title', 'page-attributes'),
			)
		);

	}
	add_action('init', 'meus_post_types');

?>