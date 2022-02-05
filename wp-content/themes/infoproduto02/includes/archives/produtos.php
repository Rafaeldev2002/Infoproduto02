<?php

	add_action( 'cmb2_admin_init', 'metaboxes_produtos' );

	function metaboxes_produtos() {

		// Detalhes do Produto na home
		$produtos_item = new_cmb2_box( array(
			'id'            => 'produtos_item',
			'title'         => __( 'Detalhes do Produto' ),
			'object_types'  => array( 'produtos192', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => false,
		) );

        $produtos_item->add_field( array(
			'name'       => __( 'Esse é o produto principal?' ),
			'id'         => 'wsg_produtos_item_principal',
			'type'       => 'checkbox',
		) );

		$produtos_item->add_field( array(
			'name'       => __( 'Resumo do Produto' ),
			'id'         => 'wsg_produtos_item_resumo',
			'type'       => 'wysiwyg',
		) );

		$produtos_item->add_field( array(
			'name'       => __( 'Imagem do Produto' ),
			'desc'       => __( 'Tamanho recomendado <strong>225x176</strong>' ),
			'id'         => 'wsg_produtos_item_img',
			'type' => 'file',
			'preview_size' => array( 225/1, 176/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );

		
		$produtos_item->add_field( array(
			'name'       => __( 'Desconto' ),
			'id'         => 'wsg_produtos_item_desconto',
			'type'       => 'text',
		) );
		$produtos_item->add_field( array(
			'name'       => __( 'De (Valor)' ),
			'id'         => 'wsg_produtos_item_de_valor',
			'type'       => 'wysiwyg',
		) );
		$produtos_item->add_field( array(
			'name'       => __( 'Por (Valor)' ),
			'id'         => 'wsg_produtos_item_por_valor',
			'type'       => 'wysiwyg',
		) );
		$produtos_item->add_field( array(
			'name'       => __( 'Parcelas ou R$' ),
			'id'         => 'wsg_produtos_item_parcelas',
			'type'       => 'text_small',
		) );
		$produtos_item->add_field( array(
			'name'       => __( 'Reais' ),
			'id'         => 'wsg_produtos_item_reais',
			'type'       => 'text_small',
		) );
		$produtos_item->add_field( array(
			'name'       => __( 'Centavos' ),
			'id'         => 'wsg_produtos_item_centavos',
			'type'       => 'text_small',
		) );
		$produtos_item->add_field( array(
			'name'       => __( 'Preço à Vista' ),
			'id'         => 'wsg_produtos_item_a_vista',
			'type'       => 'wysiwyg',
		) );

        // Botão
        $produtos_item->add_field( array(
			'name'       => __( 'Botão' ),
			'id'         => 'wsg_produtos_item_botao_title',
			'type'       => 'title',
		) );
        $produtos_item->add_field( array(
			'name'       => __( 'Texto do Botão' ),
			'id'         => 'wsg_produtos_item_btn_texto',
			'type'       => 'text',
		) );
        $produtos_item->add_field( array(
			'name'       => __( 'Link do Botão' ),
			'id'         => 'wsg_produtos_item_btn_link',
			'type'       => 'text',
		) );

		$produtos_item->add_field( array(
			'name'       => __( 'Informações sobre o Envio' ),
			'id'         => 'wsg_produtos_item_envio_info',
			'type'       => 'textarea_small',
		) );

	}

?>