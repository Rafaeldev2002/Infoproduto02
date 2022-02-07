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
			'name'       => __( 'Imagem do Item' ),
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
			'name'       => __( 'Imagem do Item' ),
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
			// 'desc'		 => ('Se quiser que a página desça até a seção do produto, insira <strong>"#compraragora"</strong>'),
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
		$introducao = new_cmb2_box( array(
			'id'            => 'introducao',
			'title'         => __( 'Introdução ao Produto' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$introducao->add_field( array(
			'name'       => __( 'Mostrar essa seção?' ),
			'id'         => 'wsg_introducao_show',
			'type'       => 'checkbox',
		) );
		$introducao->add_field( array(
			'name'       => __( 'Título da Seção' ),
			'id'         => 'wsg_introducao_titulo',
			'type'       => 'wysiwyg',
		) );
		$introducao->add_field( array(
			'name'       => __( 'Texto' ),
			'id'         => 'wsg_introducao_texto',
			'type'       => 'wysiwyg',
		) );
		$introducao->add_field( array(
			'name'       => __( 'Checklist' ),
			'id'         => 'wsg_introducao_checklist',
			'type'       => 'text',
			'repeatable' => true
		) );
		$introducao->add_field( array(
			'name'       => __( 'Texto abaixo da checklist' ),
			'id'         => 'wsg_introducao_texto_pos_checklist',
			'type'       => 'wysiwyg',
		) );

		$introducao->add_field( array(
			'name'       => __( 'Imagens ao lado' ),
			'desc'       => __( 'Tamanho recomendado <strong>445x734</strong>' ),
			'id'         => 'wsg_introducao_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );
		$introducao->add_field( array(
			'name'       => __( 'Texto do botão' ),
			'id'         => 'wsg_introducao_btn_texto',
			'type'       => 'text',
		) );
		$introducao->add_field( array(
			'name'       => __( 'Link do botão' ),
			// 'desc'		 => ('Se quiser que a página desça até a seção do produto, insira <strong>"#compraragora"</strong>'),
			'id'         => 'wsg_introducao_btn_link',
			'type'       => 'text',
		) );
		$introducao->add_field( array(
			'name'       => __( 'Selos de Segurança' ),
			'desc'       => __( 'Tamanho recomendado <strong>300x43</strong>' ),
			'id'         => 'wsg_introducao_selos_seguranca_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
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
			'type'       => 'wysiwyg',
		) );
		$pontos_chave->add_field( array(
			'name'       => __( 'Descrição' ),
			'id'         => 'wsg_pontos_chave_desc',
			'type'       => 'wysiwyg',
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
			'desc'       => __( 'Tamanho recomendado <strong>255x255</strong>' ),
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



		// Metabox Componentes
		$componentes = new_cmb2_box( array(
			'id'            => 'componentes',
			'title'         => __( 'Componentes' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$componentes->add_field( array(
			'name'       => __( 'Mostrar essa seção?' ),
			'id'         => 'wsg_componentes_show',
			'type'       => 'checkbox',
		) );

		$componentes->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_componentes_titulo',
			'type'       => 'wysiwyg',
		) );
		$componentes_items = $componentes->add_field( array(
			'id'            => 'componentes_items',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Item {#}' ),
				'add_button'    => __( 'Adicionar Outro Item' ),
				'remove_button' => __( 'Remover Item' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );

		$componentes->add_group_field( $componentes_items, array(
			'name'       => __( 'Imagem do Componente' ),
			'desc'       => __( 'Tamanho recomendado <strong>85x85</strong>' ),
			'id'         => 'wsg_componentes_items_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );

		$componentes->add_group_field( $componentes_items, array(
			'name'       => __( 'Titulo do Componente' ),
			'id'         => 'wsg_componentes_items_titulo',
			'type'       => 'text',
		) );
		$componentes->add_group_field( $componentes_items, array(
			'name'       => __( 'Texto do Componente' ),
			'id'         => 'wsg_componentes_items_texto',
			'type'       => 'wysiwyg',
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
			'type'       => 'wysiwyg',
		) );

		$produtos->add_field( array(
			'name'       => __( 'Descrição da seção' ),
			'id'         => 'wsg_produtos_desc',
			'type'       => 'wysiwyg',
		) );
		$produtos->add_field( array(
			'name'    => __( 'Listagem de Produtos' ),
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

		// Metabox Depoimentos
		$depoimentos = new_cmb2_box( array(
			'id'            => 'depoimentos',
			'title'         => __( 'Depoimentos' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$depoimentos->add_field( array(
			'name'       => __( 'Mostrar essa seção?' ),
			'id'         => 'wsg_depoimentos_show',
			'type'       => 'checkbox',
		) );
		$depoimentos->add_field( array(
			'name'       => __( 'Título da Seção' ),
			'id'         => 'wsg_depoimentos_titulo',
			'type'       => 'wysiwyg',
		) );
		$depoimentos->add_field( array(
			'name'       => __( 'Texto' ),
			'id'         => 'wsg_depoimentos_texto',
			'type'       => 'wysiwyg',
		) );
		$depoimentos->add_field( array(
			'name'    => __( 'Listagem de Depoimentos DESTAQUE' ),
			'desc'    => __( 'Arraste os itens da coluna da esquerda para a da direita para anexá-lo. <br/>Você pode reorganizar a ordem dos itens na coluna da direita arrastando e soltando.'),
			'id'      => 'wsg_depoimentos_destaque_na_home',
			'type'    => 'custom_attached_posts',
			'column'  => true,
			'options' => array(
				'show_thumbnails' => true,
				'filter_boxes'    => true,
				'query_args'      => array(
					'posts_per_page' => '-1',
					'post_type'      => 'depoimentos192',
				),
			),
		) );

		$depoimentos->add_field( array(
			'name'    => __( 'Listagem de Depoimentos NORMAIS' ),
			'desc'    => __( 'Arraste os itens da coluna da esquerda para a da direita para anexá-lo. <br/>Você pode reorganizar a ordem dos itens na coluna da direita arrastando e soltando.'),
			'id'      => 'wsg_depoimentos_normais_na_home',
			'type'    => 'custom_attached_posts',
			'column'  => true,
			'options' => array(
				'show_thumbnails' => true,
				'filter_boxes'    => true,
				'query_args'      => array(
					'posts_per_page' => '-1',
					'post_type'      => 'depoimentos192',
				),
			),
		) );

		
		$depoimentos->add_field( array(
			'name'       => __( 'Texto do botão' ),
			'id'         => 'wsg_depoimentos_btn_texto',
			'type'       => 'text',
		) );
		$depoimentos->add_field( array(
			'name'       => __( 'Link do botão' ),
			// 'desc'		 => ('Se quiser que a página desça até a seção do produto, insira <strong>"#compraragora"</strong>'),
			'id'         => 'wsg_depoimentos_btn_link',
			'type'       => 'text',
		) );
		$depoimentos->add_field( array(
			'name'       => __( 'Selos de Segurança' ),
			'desc'       => __( 'Tamanho recomendado <strong>300x43</strong>' ),
			'id'         => 'wsg_depoimentos_selos_seguranca_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );
			


		// Metabox Mais Informações
		$mais_informacoes = new_cmb2_box( array(
			'id'            => 'mais_informacoes',
			'title'         => __( 'Mais Informações' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$mais_informacoes->add_field( array(
			'name'       => __( 'Mostrar essa seção?' ),
			'id'         => 'wsg_mais_informacoes_show',
			'type'       => 'checkbox',
		) );
		$mais_informacoes->add_field( array(
			'name'       => __( 'Título da Seção' ),
			'id'         => 'wsg_mais_informacoes_titulo',
			'type'       => 'text',
		) );
		$mais_informacoes->add_field( array(
			'name'       => __( 'Texto' ),
			'id'         => 'wsg_mais_informacoes_texto',
			'type'       => 'wysiwyg',
		) );
		$mais_informacoes->add_field( array(
			'name'       => __( 'Imagem' ),
			'desc'       => __( 'Tamanho recomendado <strong>350x546</strong>' ),
			'id'         => 'wsg_mais_informacoes_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );
			

		
		// Metabox Demonstração
		$demonstracao = new_cmb2_box( array(
			'id'            => 'demonstracao',
			'title'         => __( 'Demonstração' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$demonstracao->add_field( array(
			'name'       => __( 'Mostrar essa seção?' ),
			'id'         => 'wsg_demonstracao_show',
			'type'       => 'checkbox',
		) );

		$demonstracao_items = $demonstracao->add_field( array(
			'id'            => 'demonstracao_items',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Especificação {#}' ),
				'add_button'    => __( 'Adicionar Outro Especificação' ),
				'remove_button' => __( 'Remover Especificação' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );
		$demonstracao->add_group_field( $demonstracao_items, array(
			'name'       => __( 'Imagem do Item' ),
			'desc'       => __( 'Tamanho recomendado <strong>100x95</strong>' ),
			'id'         => 'wsg_demonstracao_items_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );
		$demonstracao->add_group_field( $demonstracao_items, array(
			'name'       => __( 'Texto do Item' ),
			'id'         => 'wsg_demonstracao_items_texto',
			'type'       => 'wysiwyg',
		) );
		$demonstracao->add_field( array(
			'name'       => __( 'Imagem em Destaque da Seção' ),
			'desc'       => __( 'Tamanho recomendado <strong>540x495</strong>' ),
			'id'         => 'wsg_demonstracao_destaque_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );

		$demonstracao->add_field( array(
			'name'       => __( 'Texto ao lado' ),
			'id'         => 'wsg_demonstracao_texto_title',
			'type'       => 'title',
		) );
		$demonstracao->add_field( array(
			'name'       => __( 'Título da Seção' ),
			'id'         => 'wsg_demonstracao_titulo',
			'type'       => 'wysiwyg',
		) );
		$demonstracao->add_field( array(
			'name'       => __( 'Texto' ),
			'id'         => 'wsg_demonstracao_texto',
			'type'       => 'wysiwyg',
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
			'type'       => 'wysiwyg',
		) );
		$garantia->add_field( array(
			'name'       => __( 'Subtítulo' ),
			'id'         => 'wsg_garantia_titulo_after',
			'type'       => 'text',
		) );
		$garantia_items = $garantia->add_field( array(
			'id'            => 'garantia_items',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Garantia {#}' ),
				'add_button'    => __( 'Adicionar Outro Garantia' ),
				'remove_button' => __( 'Remover Garantia' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );
		$garantia->add_group_field( $garantia_items, array(
			'name'       => __( 'Imagem do Item' ),
			'desc'       => __( 'Tamanho recomendado <strong>255x55</strong>' ),
			'id'         => 'wsg_garantia_items_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
		) );
		$garantia->add_group_field( $garantia_items, array(
			'name'       => __( 'Texto do Item' ),
			'id'         => 'wsg_garantia_items_texto',
			'type'       => 'wysiwyg',
		) );

		$garantia->add_field( array(
			'name'       => __( 'Texto do botão' ),
			'id'         => 'wsg_garantia_btn_texto',
			'type'       => 'text',
		) );
		$garantia->add_field( array(
			'name'       => __( 'Link do botão' ),
			// 'desc'		 => ('Se quiser que a página desça até a seção do produto, insira <strong>"#compraragora"</strong>'),
			'id'         => 'wsg_garantia_btn_link',
			'type'       => 'text',
		) );
		$garantia->add_field( array(
			'name'       => __( 'Selos de Segurança' ),
			'desc'       => __( 'Tamanho recomendado <strong>300x43</strong>' ),
			'id'         => 'wsg_garantia_selos_seguranca_img',
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
			'name'       => __( 'Subtítulo' ),
			'id'         => 'wsg_faq_subtitulo',
			'type'       => 'text',
		) );

		$faq_items_esq = $faq->add_field( array(
			'id'            => 'faq_items_esq',
			'name'			=> 'Perguntas à esquerda',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Pergunta {#}' ),
				'add_button'    => __( 'Adicionar Outro Pergunta' ),
				'remove_button' => __( 'Remover Pergunta' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );
		$faq->add_group_field( $faq_items_esq, array(
			'name'       => __( 'Pergunta' ),
			'id'         => 'wsg_faq_items_esq_pergunta',
			'type'       => 'text',
		) );
		$faq->add_group_field( $faq_items_esq, array(
			'name'       => __( 'Resposta' ),
			'id'         => 'wsg_faq_items_esq_resposta',
			'type'       => 'wysiwyg',
		) );

		$faq_items_dir = $faq->add_field( array(
			'id'            => 'faq_items_dir',
			'name'			=> 'Perguntas à Direita',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Pergunta {#}' ),
				'add_button'    => __( 'Adicionar Outro Pergunta' ),
				'remove_button' => __( 'Remover Pergunta' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );
		$faq->add_group_field( $faq_items_dir, array(
			'name'       => __( 'Pergunta' ),
			'id'         => 'wsg_faq_items_dir_pergunta',
			'type'       => 'text',
		) );
		$faq->add_group_field( $faq_items_dir, array(
			'name'       => __( 'Resposta' ),
			'id'         => 'wsg_faq_items_dir_resposta',
			'type'       => 'wysiwyg',
		) );

		// Metabox Call to Action Rodapé
		$cta_footer = new_cmb2_box( array(
			'id'            => 'cta_footer',
			'title'         => __( 'Call to Action Rodapé' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$cta_footer->add_field( array(
			'name'       => __( 'Mostrar essa seção?' ),
			'id'         => 'wsg_cta_footer_show',
			'type'       => 'checkbox',
		) );
		$cta_footer->add_field( array(
			'name'       => __( 'Título da Seção' ),
			'id'         => 'wsg_cta_footer_titulo',
			'type'       => 'text',
		) );
		$cta_footer->add_field( array(
			'name'       => __( 'Título da Seção' ),
			'id'         => 'wsg_cta_footer_texto',
			'type'       => 'wysiwyg',
		) );
		$cta_footer->add_field( array(
			'name'       => __( 'Selos de Segurança' ),
			'desc'       => __( 'Tamanho recomendado <strong>350x350</strong>' ),
			'id'         => 'wsg_cta_footer_img',
			'type' => 'file',
			'preview_size' => 'medium',
			'query_args' => array( 'type' => 'image' ),
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