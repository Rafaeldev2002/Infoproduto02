<?php

	add_action( 'cmb2_admin_init', 'metaboxes_home' );

	function metaboxes_home() {

		// Método de especificação de página
		$homePage = get_page_by_path( 'home', OBJECT, 'page' );

		$post_id;

		if (isset($_GET['post'])) {
			$post_id = $_GET['post'];
		}else if(isset($_POST['post_ID'])) {
			$post_id = $_POST['post_ID'];
		}
		if( !isset( $post_id ) ) return;

		if($homePage && $homePage->ID != $post_id){
			return;
		}

		// Metabox Banner
		$banner = new_cmb2_box( array(
			'id'            => 'banner',
			'title'         => __( 'Banner' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );

		$banner->add_field( array(
			'name'       => __( 'Mostrar essa seção?' ),
			'id'         => 'wsg_banner_show',
			'type'       => 'checkbox',
		) );

		$banner->add_field( array(
			'name'       => __( 'Título do Banner' ),
			'id'         => 'wsg_banner_titulo_destaque',
			'type'       => 'wysiwyg',
		) );

		$banner->add_field( array(
			'name'       => __( 'Descrição do Banner' ),
			'id'         => 'wsg_banner_descricao',
			'type'       => 'wysiwyg',
		) );

		$banner->add_field( array(
			'name'       => __( 'Imagem do banner' ),
			'desc'       => __( 'Tamanho recomendado <strong>555x568</strong>' ),
			'id'         => 'wsg_banner_img',
			'type' => 'file',
			'preview_size' => array( 555/2, 568/2 ),
			'query_args' => array( 'type' => 'image' ),
		) );


		// Esquerda
		$banner_esq_items = $banner->add_field( array(
			'id'            => 'banner_esq_items',
			'name'			=> 'Itens ao lado esquerdo da imagem',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Item {#}' ),
				'add_button'    => __( 'Adicionar Outro Item' ),
				'remove_button' => __( 'Remover Item' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );

		$banner->add_group_field( $banner_esq_items, array(
			'name'       => __( 'Imagem do Ponto Chave' ),
			'desc'       => __( 'Tamanho recomendado <strong>30x30</strong>' ),
			'id'         => 'wsg_banner_esq_items_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );

		$banner->add_group_field( $banner_esq_items, array(
			'name'       => __( 'Texto' ),
			'id'         => 'wsg_banner_esq_items_texto',
			'type'       => 'wysiwyg',
		) );

		
		$banner_dir_items = $banner->add_field( array(
			'id'            => 'banner_dir_items',
			'name'			=> 'Itens ao lado direito da imagem',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Item {#}' ),
				'add_button'    => __( 'Adicionar Outro Item' ),
				'remove_button' => __( 'Remover Item' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );

		// Direita
		$banner->add_group_field( $banner_dir_items, array(
			'name'       => __( 'Imagem do Ponto Chave' ),
			'desc'       => __( 'Tamanho recomendado <strong>30x30</strong>' ),
			'id'         => 'wsg_banner_dir_items_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );

		$banner->add_group_field( $banner_dir_items, array(
			'name'       => __( 'Texto' ),
			'id'         => 'wsg_banner_dir_items_texto',
			'type'       => 'wysiwyg',
		) );

		$banner->add_field( array(
			'name'       => __( 'Texto do botão' ),
			'id'         => 'wsg_banner_btn_texto',
			'type'       => 'text',
		) );
		$banner->add_field( array(
			'name'       => __( 'Link do botão' ),
			'desc'		 => ('Se quiser que a página desça até a seção do produto, insira <strong>"#compraragora"</strong>'),
			'id'         => 'wsg_banner_btn_link',
			'type'       => 'text',
		) );
		$banner->add_field( array(
			'name'       => __( 'Selos de Segurança' ),
			'desc'       => __( 'Tamanho recomendado <strong>300x43</strong>' ),
			'id'         => 'wsg_banner_selos_seguranca_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );


		// Metabox Carrossel Resultados
		$carrossel_resultados = new_cmb2_box( array(
			'id'            => 'carrossel_resultados',
			'title'         => __( 'Carrossel Resultados' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$carrossel_resultados->add_field( array(
			'name'       => __( 'Mostrar essa seção?' ),
			'id'         => 'wsg_carrossel_resultados_show',
			'type'       => 'checkbox',
		) );
		$carrossel_resultados->add_field( array(
			'name'       => __( 'Título da Seção' ),
			'id'         => 'wsg_carrossel_resultados_titulo',
			'type'       => 'text',
		) );
		$carrossel_resultados->add_field( array(
			'name'       => __( 'Texto por trás do título' ),
			'id'         => 'wsg_carrossel_resultados_titulo_after',
			'type'       => 'text',
		) );
		$carrossel_resultados->add_field( array(
			'name'       => __( 'Texto' ),
			'id'         => 'wsg_carrossel_resultados_texto',
			'type'       => 'wysiwyg',
		) );

		$carrossel_resultados->add_field( array(
			'name'       => __( 'Imagens do Carrossel' ),
			'desc'       => __( 'Tamanho recomendado <strong>840x735</strong>' ),
			'id'         => 'wsg_carrossel_resultados_imgs',
			'type' => 'file_list',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );

		// Metabox Benefícios
		$beneficios = new_cmb2_box( array(
			'id'            => 'beneficios',
			'title'         => __( 'Benefícios' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$beneficios->add_field( array(
			'name'       => __( 'Mostrar essa seção?' ),
			'id'         => 'wsg_beneficios_show',
			'type'       => 'checkbox',
		) );

		$beneficios->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_beneficios_titulo',
			'type'       => 'text',
		) );
		$beneficios->add_field( array(
			'name'       => __( 'Texto por trás do título' ),
			'id'         => 'wsg_beneficios_titulo_after',
			'type'       => 'text',
		) );
		$beneficios->add_field( array(
			'name'       => __( 'Descrição da seção' ),
			'id'         => 'wsg_beneficios_desc',
			'type'       => 'wysiwyg',
		) );
		$beneficios->add_field( array(
			'name'    => __( 'Listagem de Benefícios' ),
			'desc'    => __( 'Arraste os itens da coluna da esquerda para a da direita para anexá-lo. <br/>Você pode reorganizar a ordem dos itens na coluna da direita arrastando e soltando.'),
			'id'      => 'wsg_beneficios_na_home',
			'type'    => 'custom_attached_posts',
			'column'  => true,
			'options' => array(
				'show_thumbnails' => true,
				'filter_boxes'    => true,
				'query_args'      => array(
					'posts_per_page' => '-1',
					'post_type'      => 'beneficios192',
				),
			),
		) );
	

		// Metabox pontos_chave
		$pontos_chave = new_cmb2_box( array(
			'id'            => 'pontos_chaves',
			'title'         => __( 'Pontos Chave' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$pontos_chave->add_field( array(
			'name'       => __( 'Mostrar essa seção?' ),
			'id'         => 'wsg_pontos_chave_show',
			'type'       => 'checkbox',
		) );
		$pontos_chave->add_field( array(
			'name'       => __( 'Título da Seção' ),
			'id'         => 'wsg_pontos_chave_titulo',
			'type'       => 'text',
		) );
		$pontos_chave->add_field( array(
			'name'       => __( 'Texto por trás do título' ),
			'id'         => 'wsg_pontos_chave_titulo_after',
			'type'       => 'text',
		) );

		$pontos_chave_items = $pontos_chave->add_field( array(
			'id'            => 'pontos_chave_items',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Item {#}' ),
				'add_button'    => __( 'Adicionar Outro Item' ),
				'remove_button' => __( 'Remover Item' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );

		$pontos_chave->add_group_field( $pontos_chave_items, array(
			'name'       => __( 'Imagem do Ponto Chave' ),
			'desc'       => __( 'Tamanho recomendado <strong>180x180</strong>' ),
			'id'         => 'wsg_pontos_chave_items_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );

		$pontos_chave->add_group_field( $pontos_chave_items, array(
			'name'       => __( 'Titulo do Ponto Chave' ),
			'id'         => 'wsg_pontos_chave_items_titulo',
			'type'       => 'text',
		) );
		$pontos_chave->add_group_field( $pontos_chave_items, array(
			'name'       => __( 'Texto do Ponto Chave' ),
			'id'         => 'wsg_pontos_chave_items_texto',
			'type'       => 'wysiwyg',
		) );


		// Metabox Comparação
		$comparacao = new_cmb2_box( array(
			'id'            => 'comparacao',
			'title'         => __( 'Comparação' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$comparacao->add_field( array(
			'name'       => __( 'Mostrar essa seção?' ),
			'id'         => 'wsg_comparacao_show',
			'type'       => 'checkbox',
		) );
		$comparacao->add_field( array(
			'name'       => __( 'Título da Seção' ),
			'id'         => 'wsg_comparacao_titulo',
			'type'       => 'text',
		) );
		$comparacao->add_field( array(
			'name'       => __( 'Texto por trás do título' ),
			'id'         => 'wsg_comparacao_titulo_after',
			'type'       => 'text',
		) );
		$comparacao->add_field( array(
			'name'       => __( 'Texto' ),
			'id'         => 'wsg_comparacao_texto',
			'type'       => 'wysiwyg',
		) );
			
		$comparacao->add_field( array(
			'name'       => __( 'Listagem de Benefícios ao lado' ),
			'id'         => 'wsg_comparacao_beneficios',
			'type'       => 'text',
			'repeatable' => true
		) );

		$comparacao->add_field( array(
			'name'       => __( 'Texto do Botão' ),
			'id'         => 'wsg_comparacao_btn_texto',
			'type'       => 'text',
		) );
		$comparacao->add_field( array(
			'name'       => __( 'Link do Botão' ),
			'desc'		 => ('Se quiser que a página desça até a seção do produto, insira <strong>"#compraragora"</strong>'),
			'id'         => 'wsg_comparacao_btn_link',
			'type'       => 'text',
		) );
		$comparacao->add_field( array(
			'name'       => __( 'Texto abaixo do botão com ícone de segurança' ),
			'id'         => 'wsg_comparacao_pos_btn',
			'type'       => 'text',
		) );
		$comparacao->add_field( array(
			'name'       => __( 'Selos de Segurança' ),
			'desc'       => __( 'Tamanho recomendado <strong>540x67</strong>' ),
			'id'         => 'wsg_comparacao_selos_seguranca_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );

		$comparacao->add_field( array(
			'name'       => __( 'Imagem Antes' ),
			'desc'       => __( 'Tamanho recomendado <strong>540x646</strong>' ),
			'id'         => 'wsg_comparacao_img_antes',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );
		$comparacao->add_field( array(
			'name'       => __( 'Imagem Depois' ),
			'desc'       => __( 'Tamanho recomendado <strong>540x646</strong>' ),
			'id'         => 'wsg_comparacao_img_depois',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );


		
		// Metabox Produtos
		$produtos = new_cmb2_box( array(
			'id'            => 'produtos',
			'title'         => __( 'Produtos' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$produtos->add_field( array(
			'name'       => __( 'Mostrar essa seção?' ),
			'id'         => 'wsg_produtos_show',
			'type'       => 'checkbox',
		) );

		$produtos->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_produtos_titulo',
			'type'       => 'text',
		) );
		$produtos->add_field( array(
			'name'       => __( 'Texto por trás do título' ),
			'id'         => 'wsg_produtos_titulo_after',
			'type'       => 'text',
		) );

		$produtos->add_field( array(
			'name'       => __( 'Descrição da seção' ),
			'id'         => 'wsg_produtos_desc',
			'type'       => 'wysiwyg',
		) );
		$produtos->add_field( array(
			'name'    => __( 'Listagem de Benefícios' ),
			'desc'    => __( 'Arraste os itens da coluna da esquerda para a da direita para anexá-lo. <br/>Você pode reorganizar a ordem dos itens na coluna da direita arrastando e soltando.'),
			'id'      => 'wsg_produtos_na_home',
			'type'    => 'custom_attached_posts',
			'column'  => true,
			'options' => array(
				'show_thumbnails' => true,
				'filter_boxes'    => true,
				'query_args'      => array(
					'posts_per_page' => '-1',
					'post_type'      => 'produtos192',
				),
			),
		) );
		$produtos->add_field( array(
			'name'       => __( 'Selos de Segurança' ),
			'desc'       => __( 'Tamanho recomendado <strong>540x67</strong>' ),
			'id'         => 'wsg_produtos_selos_seguranca_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );


		// Metabox faq
		$faq = new_cmb2_box( array(
			'id'            => 'faq',
			'title'         => __( 'Perguntas Frequentes' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$faq->add_field( array(
			'name'       => __( 'Mostrar essa seção?' ),
			'id'         => 'wsg_faq_show',
			'type'       => 'checkbox',
		) );
		$faq->add_field( array(
			'name'       => __( 'Título da Seção' ),
			'id'         => 'wsg_faq_titulo',
			'type'       => 'text',
		) );
		$faq->add_field( array(
			'name'       => __( 'Texto por trás do título' ),
			'id'         => 'wsg_faq_titulo_after',
			'type'       => 'text',
		) );
		$faq->add_field( array(
			'name'       => __( 'Descrição da Seção' ),
			'id'         => 'wsg_faq_desc',
			'type'       => 'wysiwyg',
		) );

		$faq_items = $faq->add_field( array(
			'id'            => 'faq_items',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Pergunta {#}' ),
				'add_button'    => __( 'Adicionar Outro Pergunta' ),
				'remove_button' => __( 'Remover Pergunta' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );
		$faq->add_group_field( $faq_items, array(
			'name'       => __( 'Pergunta' ),
			'id'         => 'wsg_faq_items_pergunta',
			'type'       => 'text',
		) );
		$faq->add_group_field( $faq_items, array(
			'name'       => __( 'Resposta' ),
			'id'         => 'wsg_faq_items_resposta',
			'type'       => 'wysiwyg',
		) );

		// Imagens ao lado do FAQ
		$faq->add_field( array(
			'name'       => __( 'Imagens ao lado' ),
			'id'         => 'wsg_faq_imagens_title',
			'type'       => 'title',
		) );
		$faq->add_field( array(
			'name'       => __( 'Imagem em destaque ao lado' ),
			'desc'       => __( 'Tamanho recomendado <strong>190x320</strong>' ),
			'id'         => 'wsg_faq_items_destaque_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );
		$faq->add_field( array(
			'name'       => __( 'Imagem objeto flutuante ao fundo' ),
			'desc'       => __( 'Tamanho recomendado <strong>64x64</strong>' ),
			'id'         => 'wsg_faq_items_flutuante_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );
		$faq->add_field( array(
			'name'       => __( 'Imagem objeto flutuante em destaque' ),
			'desc'       => __( 'Tamanho recomendado <strong>170x170</strong>' ),
			'id'         => 'wsg_faq_items_flutuante_destaque_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );
		$faq->add_field( array(
			'name'       => __( 'Imagem de fundo abaixo' ),
			'desc'       => __( 'Tamanho recomendado <strong>640x480</strong>' ),
			'id'         => 'wsg_faq_items_abaixo_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );
	
	

		// Metabox Comparação
		$garantia = new_cmb2_box( array(
			'id'            => 'garantia',
			'title'         => __( 'Garantia' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$garantia->add_field( array(
			'name'       => __( 'Mostrar essa seção?' ),
			'id'         => 'wsg_garantia_show',
			'type'       => 'checkbox',
		) );
		$garantia->add_field( array(
			'name'       => __( 'Título da Seção' ),
			'id'         => 'wsg_garantia_titulo',
			'type'       => 'text',
		) );
		$garantia->add_field( array(
			'name'       => __( 'Texto por trás do título' ),
			'id'         => 'wsg_garantia_titulo_after',
			'type'       => 'text',
		) );
		$garantia->add_field( array(
			'name'       => __( 'Texto da seção' ),
			'id'         => 'wsg_garantia_texto',
			'type'       => 'wysiwyg',
		) );

		$garantia->add_field( array(
			'name'       => __( 'Imagem ao lado' ),
			'desc'       => __( 'Tamanho recomendado <strong>435x305</strong>' ),
			'id'         => 'wsg_garantia_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );

		// Metabox Comparação
		$contato = new_cmb2_box( array(
			'id'            => 'contato',
			'title'         => __( 'Contato' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$contato->add_field( array(
			'name'       => __( 'Mostrar essa seção?' ),
			'id'         => 'wsg_contato_show',
			'type'       => 'checkbox',
		) );
		$contato->add_field( array(
			'name'       => __( 'Título da Seção' ),
			'id'         => 'wsg_contato_titulo',
			'type'       => 'text',
		) );
		$contato->add_field( array(
			'name'       => __( 'Texto por trás do título' ),
			'id'         => 'wsg_contato_titulo_after',
			'type'       => 'text',
		) );
		$contato->add_field( array(
			'name'       => __( 'Descrição' ),
			'id'         => 'wsg_contato_desc',
			'type'       => 'wysiwyg',
		) );

		$contato_items = $contato->add_field( array(
			'id'            => 'contato_items',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Contato {#}' ),
				'add_button'    => __( 'Adicionar Outro Contato' ),
				'remove_button' => __( 'Remover Contato' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );
		$contato->add_group_field( $contato_items, array(
			'name'       => __( 'Ícone do Contato' ),
			'id'         => 'wsg_contato_items_icone',
			'desc'         => 'Tamanho recomendado <strong>70x70</strong>',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );
		$contato->add_group_field( $contato_items, array(
			'name'       => __( 'Título do Contato' ),
			'id'         => 'wsg_contato_items_titulo',
			'type'       => 'text',
		) );
		$contato->add_group_field( $contato_items, array(
			'name'       => __( 'Texto do Contato' ),
			'id'         => 'wsg_contato_items_texto',
			'type'       => 'wysiwyg',
		) );


		$contato->add_field( array(
			'name'       => __( 'Formas de Pagamento' ),
			'id'         => 'wsg_contato_formas_pagamento_title',
			'type'       => 'title',
		) );
		$contato->add_field( array(
			'name'       => __( 'Título' ),
			'id'         => 'wsg_contato_formas_pagamento_titulo',
			'type'       => 'text',
		) );
		$contato->add_field( array(
			'name'       => __( 'Imagem das formas de pagamento' ),
			'desc'       => __( 'Tamanho recomendado <strong>450x170</strong>' ),
			'id'         => 'wsg_contato_formas_pagamento_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );

		$contato->add_field( array(
			'name'       => __( 'Texto do Botão' ),
			'id'         => 'wsg_contato_btn_texto',
			'type'       => 'text',
		) );
		$contato->add_field( array(
			'name'       => __( 'Link do Botão' ),
			'desc'		 => ('Se quiser que a página desça até a seção do produto, insira <strong>"#compraragora"</strong>'),
			'id'         => 'wsg_contato_btn_link',
			'type'       => 'text',
		) );
		$contato->add_field( array(
			'name'       => __( 'Texto abaixo do botão' ),
			'desc'		 => __( 'Ex: "Compra segura"' ),
			'id'         => 'wsg_contato_texto_pos_btn',
			'type'       => 'text',
		) );



		// Metabox Rodapé
		$rodape_formas_pagamento = new_cmb2_box( array(
			'id'            => 'rodape_formas_pagamento',
			'title'         => __( 'Rodapé - Formas de Pagamento' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$rodape_formas_pagamento->add_field( array(
			'name'       => __( 'Título' ),
			'id'         => 'wsg_rodape_formas_pagamento_titulo',
			'type'       => 'text',
		) );
		$rodape_formas_pagamento->add_field( array(
			'name'       => __( 'Imagem das formas de pagamento' ),
			'desc'       => __( 'Tamanho recomendado <strong>165x63</strong>' ),
			'id'         => 'wsg_rodape_formas_pagamento_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );

		// Metabox Política de Privacidade
		$politica_privacidade = new_cmb2_box( array(
			'id'            => 'politica_privacidade',
			'title'         => __( 'Política de Privacidade' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$politica_privacidade->add_field( array(
			'name'       => __( 'Mostrar essa seção?' ),
			'id'         => 'wsg_politica_privacidade_show',
			'type'       => 'checkbox',
		) );
		$politica_privacidade->add_field( array(
			'name'       => __( 'Texto da seção' ),
			'id'         => 'wsg_politica_privacidade_texto',
			'type'       => 'wysiwyg',
		) );

		// Metabox Termos de Uso
		$termos_de_uso = new_cmb2_box( array(
			'id'            => 'termos_de_uso',
			'title'         => __( 'Termos de Uso' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$termos_de_uso->add_field( array(
			'name'       => __( 'Mostrar essa seção?' ),
			'id'         => 'wsg_termos_de_uso_show',
			'type'       => 'checkbox',
		) );
		$termos_de_uso->add_field( array(
			'name'       => __( 'Texto da seção' ),
			'id'         => 'wsg_termos_de_uso_texto',
			'type'       => 'wysiwyg',
		) );

		// Metabox Exclarações Rodapé
		$footer_exclaracoes = new_cmb2_box( array(
			'id'            => 'footer_exclaracoes',
			'title'         => __( 'Exclarações Rodapé' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$footer_exclaracoes->add_field( array(
			'name'       => __( 'Mostrar essa seção?' ),
			'id'         => 'wsg_footer_exclaracoes_show',
			'type'       => 'checkbox',
		) );
		$footer_exclaracoes->add_field( array(
			'name'       => __( 'Texto da seção' ),
			'id'         => 'wsg_footer_exclaracoes_texto',
			'type'       => 'wysiwyg',
		) );
	}

?>