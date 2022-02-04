<?php

	// tamanhos dinâmicos para thumbs
	function tamanhos_thumbs(){

		// Ativando suporte para imagem destacada
		add_theme_support('post-thumbnails');
		add_image_size( '1920x420', 1920, 420, true );
		add_image_size( '555x568', 555, 568, true );
		add_image_size( '300x43', 300, 43, true );
		add_image_size( '165x63', 165, 63, true );
		add_image_size( '64x64', 64, 64, true );
	}
	add_action('after_setup_theme', 'tamanhos_thumbs');

?>