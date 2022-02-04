<?php

	add_action( 'cmb2_admin_init', 'metaboxes_sobre' );

	function metaboxes_sobre() {

		// Método de especificação de página
		$sobrePage = get_page_by_path( 'sobre', OBJECT, 'page' );

		$post_id;

		if (isset($_GET['post'])) {
			$post_id = $_GET['post'];
		}else if(isset($_POST['post_ID'])) {
			$post_id = $_POST['post_ID'];
		}
		if( !isset( $post_id ) ) return;

		if($sobrePage && $sobrePage->ID != $post_id){
			return;
		}

		// Metabox Sobre
		$sobre_01 = new_cmb2_box( array(
			'id'            => 'sobre_01',
			'title'         => __( 'Sobre nós' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );

		$sobre_01->add_field( array(
			'name'       => __( 'Imagem da seção' ),
			'desc'       => __( 'Tamanho recomendado <strong>950x650</strong>' ),
			'id'         => 'wsg_sobre_01_img',
			'type' => 'file',
			'preview_size' => array( 950/5, 650/5 ),
			'query_args' => array( 'type' => 'image' ),
		) );

		$sobre_01->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_sobre_01_titulo',
			'type'       => 'text',
		) );
		$sobre_01->add_field( array(
			'name'       => __( 'Subtítulo da seção' ),
			'id'         => 'wsg_sobre_01_subtitulo',
			'type'       => 'text',
		) );

		$sobre_01->add_field( array(
			'name'       => __( 'Texto de sobre nós' ),
			'id'         => 'wsg_sobre_01_conteudo',
			'type'       => 'wysiwyg',
		) );

		$sobre_01_items = $sobre_01->add_field( array(
			'name'			=> __( 'Items sobre nós' ),
			'id'            => 'sobre_01_items',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Item {#}' ),
				'add_button'    => __( 'Adicionar Outro Item' ),
				'remove_button' => __( 'Remover Item' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );

		$sobre_01->add_group_field( $sobre_01_items, array(
			'name'       => __( 'Imagem do item' ),
			'desc'       => __( 'Tamanho recomendado <strong>32x32</strong>' ),
			'id'         => 'wsg_sobre_01_items_img',
			'type' => 'file',
			'preview_size' => array( 32/1, 32/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );

		$sobre_01->add_group_field( $sobre_01_items, array(
			'name'       => __( 'Título do item' ),
			'id'         => 'wsg_sobre_01_items_titulo',
			'type' => 'Text',
		) );

		$sobre_01->add_group_field( $sobre_01_items, array(
			'name'       => __( 'Texto do item' ),
			'id'         => 'wsg_sobre_01_items_texto',
			'type' => 'wysiwyg',
		) );

		$sobre_01->add_field( array(
			'name'       => __( 'Texto abaixo da imagem de sobre nós' ),
			'id'         => 'wsg_sobre_01_conteudo_img',
			'type'       => 'wysiwyg',
		) );

		// Metabox sobre_02
		$sobre_02 = new_cmb2_box( array(
			'id'            => 'sobre_02',
			'title'         => __( 'Missão, visão e valores' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );

		$sobre_02_items = $sobre_02->add_field( array(
			'id'            => 'sobre_02_items',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Item {#}' ),
				'add_button'    => __( 'Adicionar Outro Item' ),
				'remove_button' => __( 'Remover Item' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );

		$sobre_02->add_group_field( $sobre_02_items, array(
			'name'       => __( 'Título do item' ),
			'id'         => 'wsg_sobre_02_items_titulo',
			'type' => 'Text',
		) );

		$sobre_02->add_group_field( $sobre_02_items, array(
			'name'       => __( 'Texto do item' ),
			'id'         => 'wsg_sobre_02_items_texto',
			'type' => 'wysiwyg',
		) );

		$sobre_02->add_field( array(
			'name'       => __( 'Imagem da seção' ),
			'desc'       => __( 'Tamanho recomendado <strong>576x360</strong>' ),
			'id'         => 'wsg_sobre_02_img',
			'type' => 'file',
			'preview_size' => array( 576/5, 360/5 ),
			'query_args' => array( 'type' => 'image' ),
		) );

		// Metabox Sobre
		$sobre_footer = new_cmb2_box( array(
			'id'            => 'sobre_footer',
			'title'         => __( 'Rodapé' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );

		$sobre_footer->add_field( array(
			'name'       => __( 'Resumo do rodapé' ),
			'id'         => 'wsg_sobre_footer_texto',
			'type'       => 'wysiwyg',
		) );
		$sobre_footer->add_field( array(
			'name'       => __( 'Copyright do rodapé' ),
			'id'         => 'wsg_sobre_footer_copyright',
			'type'       => 'wysiwyg',
		) );


	}

?>