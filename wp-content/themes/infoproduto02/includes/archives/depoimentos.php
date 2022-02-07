<?php

	add_action( 'cmb2_admin_init', 'metaboxes_depoimentos' );

	function metaboxes_depoimentos() {

		// Detalhes do Produto na home
		$depoimentos_item = new_cmb2_box( array(
			'id'            => 'depoimentos_item',
			'title'         => __( 'Detalhes do Depoimento' ),
			'object_types'  => array( 'depoimentos192', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => false,
		) );

        $depoimentos_item->add_field( array(
			'name'       => __( 'Imagem do Produto' ),
			'desc'       => __( 'Tamanho recomendado para depoimento destaque: <strong>380x365</strong>,<br>Para depoimentos normais: <strong>255x453</strong>' ),
			'id'         => 'wsg_depoimentos_item_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );

		$depoimentos_item->add_field( array(
			'name'       => __( 'Os depoimentos principais usarão os seguintes campos' ),
			'id'         => 'wsg_depoimentos_item_destaque_title',
			'type'       => 'title',
		) );
		$depoimentos_item->add_field( array(
			'name'       => __( 'Título do Depoimento' ),
            'desc'       => 'Acima da imagem',
			'id'         => 'wsg_depoimentos_item_titulo',
			'type'       => 'wysiwyg',
		) );

		$depoimentos_item->add_field( array(
			'name'       => __( 'Resumo do depoimento' ),
			'id'         => 'wsg_depoimentos_item_depoimento',
			'type'       => 'wysiwyg',
		) );

	}

?>