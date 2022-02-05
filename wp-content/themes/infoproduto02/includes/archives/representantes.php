<?php

	add_action( 'cmb2_admin_init', 'metaboxes_representantes' );

	function metaboxes_representantes() {

		// Metabox Números
		$representante = new_cmb2_box( array(
			'id'            => 'representante',
			'title'         => __( 'Representantes' ),
			'object_types'  => array( 'representantes192', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
		) );

		// $representante_items = $representante->add_field( array(
		// 	'id'			=> 'wsg_representante_items',
		// 	'type'			=> 'group',
		// 	'options'       => array(
		// 		'group_title'   => __( 'Pessoa {#}' ),
		// 		'add_button'    => __( 'Adicionar nova Pessoa' ),
		// 		'remove_button' => __( 'Remover Pessoa' ),
		// 	),
		// ) );
        $representante->add_field( array(
			'desc'       => __( 'Esse item aparecerá ao clicar no WhatsApp do rodapé.' ),
			'id'         => 'wsg_representante_title_desc',
			'type' => 'title',
		) );
        $representante->add_field( array(
			'name'       => __( 'Foto' ),
			'desc'       => __( 'Tamanho recomendado <strong>64x64</strong>' ),
			'id'         => 'wsg_representante_icone',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );
        
		$representante->add_field( array(
			'name'			=> __( 'Número do Representante' ),
			'id'			=> 'wsg_representante_nmr',
			'type'			=> 'text',
		) );

		$representante->add_field( array(
			'name'			=> __( 'Link do Representante' ),
			'desc'			=> __( 'Este campo é editável para que você possa colocar um link diferente, exemplo link para rastreamento de lead.' ),
			'id'			=> 'wsg_representante_link',
			'type'			=> 'textarea_small',
			'default'		=> 'https://wa.me/5562999999999'
		) );


	}

?>