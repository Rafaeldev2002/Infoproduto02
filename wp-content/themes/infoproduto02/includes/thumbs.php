<?php

	// tamanhos dinâmicos para thumbs
	function tamanhos_thumbs(){

		// Ativando suporte para imagem destacada
		add_theme_support('post-thumbnails');
		add_image_size( '1920x420', 1920, 420, true );
		add_image_size( '555x568', 555, 568, true );
		add_image_size( '540x495', 540, 495, true );
		add_image_size( '380x365', 380, 365, true );
		add_image_size( '350x546', 350, 546, true );
		add_image_size( '350x350', 350, 350, true );
		add_image_size( '300x43', 300, 43, true );
		add_image_size( '255x453', 255, 453, true );
		add_image_size( '255x255', 255, 255, true );
		add_image_size( '255x55', 255, 55, true );
		add_image_size( '225x176', 225, 176, true );
		add_image_size( '165x63', 165, 63, true );
		add_image_size( '100x95', 100, 95, true );
		add_image_size( '64x64', 64, 64, true );
	}
	add_action('after_setup_theme', 'tamanhos_thumbs');

?>