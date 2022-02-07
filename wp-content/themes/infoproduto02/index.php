<?php get_header();
    $id_page = get_page_by_path( 'home', OBJECT, 'page' )->ID;
?>

    <?php if(get_post_meta( $id_page, 'wsg_banner_show', true )){ ?>
        <section class="banner">
            <div class="container">
                <div class="cto">
                    <div class="title-01">
                        <?php echo wpautop(get_post_meta( $id_page, 'wsg_banner_titulo_destaque', true )); ?>
                        <?php echo wpautop(get_post_meta( $id_page, 'wsg_banner_descricao', true )); ?>
                    </div>
                </div>
                <div class="wrapper">
                    <ul>
                        <?php $banner_esq_items = get_post_meta( $id_page, "banner_esq_items", true );
                            if( $banner_esq_items ){
                                foreach( $banner_esq_items as $key => $entry ){ ?>
                                <li>
                                    <div><?php echo wpautop($entry['wsg_banner_esq_items_texto']); ?> <span><?php getImageThumb( $entry['wsg_banner_esq_items_img_id'], "30x30"); ?></span>
                                </li>
                        <?php }} ?>
                    </ul>

                    <figure><?php getImageThumb( get_post_meta( $id_page, 'wsg_banner_img_id', true ), "555x568"); ?></figure>

                    <ul>
                        <?php $banner_dir_items = get_post_meta( $id_page, "banner_dir_items", true );
                            if( $banner_dir_items ){
                                foreach( $banner_dir_items as $key => $entry ){ ?>
                                <li>
                                    <div><?php echo wpautop($entry['wsg_banner_dir_items_texto']); ?> <span><?php getImageThumb( $entry['wsg_banner_dir_items_img_id'], "30x30"); ?></span>
                                </li>
                        <?php }} ?>
                    </ul>
                </div>

                <div class="cto">
                    <?php if($wsg_banner_btn_texto = get_post_meta( $id_page, 'wsg_banner_btn_texto', true )){ ?>
                        <a href="<?php echo get_post_meta( $id_page, 'wsg_banner_btn_link', true ); ?>" class="btn"> <?php echo $wsg_banner_btn_texto; ?></a>
                    <?php } ?>
                    <figure class="selos-de-compra">
                        <?php getImageThumb( get_post_meta( $id_page, 'wsg_banner_selos_seguranca_img_id', true ), "300x43"); ?>
                    </figure>
                </div>
            </div>
        </section>
    <?php } ?>


    <?php if(get_post_meta( $id_page, 'wsg_introducao_show', true )){ ?>
        <section class="wq-01">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                        <div class="conteudo">
                            <div class="title-01">
                                <?php echo wpautop(get_post_meta( $id_page, 'wsg_introducao_titulo', true )); ?>
                                <hr>
                            </div>
                            <?php echo wpautop(get_post_meta( $id_page, 'wsg_introducao_texto', true )); ?>
                            
                            <?php $wsg_introducao_checklist = get_post_meta( $id_page, "wsg_introducao_checklist", true );
                                if( $wsg_introducao_checklist ){ ?>
                                <ul>
                                    <?php foreach( $wsg_introducao_checklist as $key => $entry ){ ?>
                                    <li><?php echo $entry; ?></li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                            <?php echo wpautop(get_post_meta( $id_page, 'wsg_introducao_texto_pos_checklist', true )); ?>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                        <figure>
                            <?php getImageThumb( get_post_meta( $id_page, 'wsg_introducao_img_id', true ), "445x734"); ?>
                        </figure>
                        <div class="cto">
                            <?php if($wsg_introducao_btn_texto = get_post_meta( $id_page, 'wsg_introducao_btn_texto', true )){ ?>
                                <a href="<?php echo get_post_meta( $id_page, 'wsg_introducao_btn_link', true ); ?>" class="btn"> <?php echo $wsg_introducao_btn_texto; ?></a>
                            <?php } ?>
                            <figure class="selos-de-compra">
                                <?php getImageThumb( get_post_meta( $id_page, 'wsg_introducao_selos_seguranca_img_id', true ), "300x43"); ?>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <?php if(get_post_meta( $id_page, 'wsg_pontos_chave_show', true )){ ?>
        <section class="wq-02">
            <div class="container">
                <div class="cto">
                    <div class="title-01">
                        <?php echo wpautop(get_post_meta( $id_page, 'wsg_pontos_chave_titulo', true )); ?>
                        <?php echo wpautop(get_post_meta( $id_page, 'wsg_pontos_chave_desc', true )); ?>
                    </div>
                </div>
                <div class="row">
                    <?php $pontos_chave_items = get_post_meta( $id_page, "pontos_chave_items", true );
                        if( $pontos_chave_items ){
                            foreach( $pontos_chave_items as $key => $entry ){ ?>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="wq-02-item">
                                    <figure><?php getImageThumb( $entry['wsg_pontos_chave_items_img_id'], "255x255"); ?></figure>
                                    <h3><?php echo $entry['wsg_pontos_chave_items_titulo']; ?></h3>
                                    <?php echo wpautop($entry['wsg_pontos_chave_items_texto']); ?>
                                </div>
                            </div>
                    <?php }} ?>
                    
                </div>
            </div>
        </section>
    <?php } ?>

    <?php if(get_post_meta( $id_page, 'wsg_componentes_show', true )){ ?>
        <section class="wq-03">
            <div class="container">
                <div class="title-01 cto">
                    <?php echo wpautop(get_post_meta( $id_page, 'wsg_componentes_titulo', true )); ?>
                    <hr>
                </div>

                <div class="row">
                    <?php $componentes_items = get_post_meta( $id_page, "componentes_items", true );
                        if( $componentes_items ){
                            foreach( $componentes_items as $key => $entry ){ ?>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="wq-03-item">
                                    <figure><?php getImageThumb( $entry['wsg_componentes_items_img_id'], "85x85"); ?></figure>
                                    <h3><?php echo $entry['wsg_componentes_items_titulo']; ?></h3>
                                    <?php echo wpautop($entry['wsg_componentes_items_texto']); ?>
                                </div>
                            </div>
                    <?php }} ?>
                </div>
            </div>
        </section>
    <?php } ?>


    <?php if(get_post_meta( $id_page, 'wsg_produtos_show', true )){ ?>
        <section class="wq-04">
            <div class="container">
                <div class="title-01 cto">
                    <?php echo wpautop(get_post_meta( $id_page, 'wsg_produtos_titulo', true )); ?>
                    <?php echo wpautop(get_post_meta( $id_page, 'wsg_produtos_desc', true )); ?>
                </div>

                <div class="row">
                    <?php $wsg_produtos_na_home = get_post_meta( $id_page, "wsg_produtos_na_home", true );
                        if( $wsg_produtos_na_home ){
                            foreach( $wsg_produtos_na_home as $attached_post ){
                            $post = get_post($attached_post); ?>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="wq-04-item <?php echo get_post_meta( $post->ID, 'wsg_produtos_item_principal', true ) ? 'wq-black' : ''; ?>">
                                    <div class="wq-04-item-header">
                                        <h2><?php echo get_the_title( $post->ID ); ?></h2>
                                        <?php echo wpautop(get_post_meta( $post->ID, 'wsg_produtos_item_resumo', true )); ?>
                                    </div>
                                    <figure>
                                        <?php getImageThumb( get_post_meta( $post->ID, 'wsg_produtos_item_img_id', true ), "225x176"); ?>
                                        <figcaption>
                                            <?php echo wpautop(get_post_meta( $post->ID, 'wsg_produtos_item_desconto', true )); ?>
                                        </figcaption>
                                    </figure>
                                    <div class="valor">
                                        <?php echo wpautop(get_post_meta( $post->ID, 'wsg_produtos_item_de_valor', true )); ?>
                                        <?php echo wpautop(get_post_meta( $post->ID, 'wsg_produtos_item_por_valor', true )); ?>
                                        <div>
                                            <span class="medio"><?php echo get_post_meta( $post->ID, 'wsg_produtos_item_parcelas', true ); ?></span>
                                            <span class="grande"><?php echo get_post_meta( $post->ID, 'wsg_produtos_item_reais', true ); ?></span>
                                            <span class="medio"><?php echo get_post_meta( $post->ID, 'wsg_produtos_item_centavos', true ); ?></span>
                                        </div>
                                    </div>
                                    <span class="avista"><?php echo wpautop(get_post_meta( $post->ID, 'wsg_produtos_item_a_vista', true )); ?></span>
                                    
                                    <?php if($wsg_produtos_item_btn_texto = get_post_meta( $post->ID, 'wsg_produtos_item_btn_texto', true )){ ?>
                                        <div class="cto">
                                            <a href="<?php echo get_post_meta( $post->ID, 'wsg_produtos_item_btn_link', true ); ?>" class="btn"><?php echo $wsg_produtos_item_btn_texto; ?></a>
                                        </div>
                                    <?php } ?>

                                    <?php if($wsg_produtos_item_envio_info = get_post_meta( $post->ID, 'wsg_produtos_item_envio_info', true )){ ?>
                                        <p class="frete">
                                            <img src="<?php bloginfo( 'template_url' ); ?>/img/entrega.png" alt="icon frete"> 
                                            <?php echo $wsg_produtos_item_envio_info ?>
                                        </p>
                                    <?php } ?>
                                </div>
                            </div>
                    <?php }} ?>
                </div>
            </div>
        </section>
    <?php } ?>


    <?php if(get_post_meta( $id_page, 'wsg_depoimentos_show', true )){ ?>
        <section class="wq-05">
            <div class="container">
                <div class="title-01 cto">
                    <h2><?php echo wpautop(get_post_meta( $id_page, 'wsg_depoimentos_titulo', true )); ?></h2>
                    <hr>
                    <?php echo wpautop(get_post_meta( $id_page, 'wsg_depoimentos_texto', true )); ?>
                </div>

                <div class="row menor">
                    <?php $wsg_depoimentos_destaque_na_home = get_post_meta( $id_page, "wsg_depoimentos_destaque_na_home", true );
                        if( $wsg_depoimentos_destaque_na_home ){
                            foreach( $wsg_depoimentos_destaque_na_home as $attached_post ){
                            $post = get_post($attached_post); ?>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="wq-05-item">
                                    <div class="content">
                                        <h3><?php get_post_meta( $post->ID, 'wsg_depoimentos_item_titulo', true ); ?></h3>
                                        <figure>
                                            <?php getImageThumb( get_post_meta( $post->ID, 'wsg_depoimentos_item_img_id', true ), "380x365"); ?>
                                        </figure>
                                    </div>
                                    <?php echo wpautop(get_post_meta( $post->ID, 'wsg_depoimentos_item_depoimento', true )); ?>
                                </div>
                            </div>
                    <?php }} ?>

                </div>
                <div class="row">

                    <?php $wsg_depoimentos_normais_na_home = get_post_meta( $id_page, "wsg_depoimentos_normais_na_home", true );
                        if( $wsg_depoimentos_normais_na_home ){
                            foreach( $wsg_depoimentos_normais_na_home as $attached_post ){
                            $post = get_post($attached_post); ?>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                <figure><?php getImageThumb( get_post_meta( $post->ID, 'wsg_depoimentos_item_img_id', true ), ""); ?></figure>
                            </div>
                    <?php }} ?>
                </div>

                <div class="cto">
                    <?php if($wsg_depoimentos_btn_texto = get_post_meta( $id_page, 'wsg_depoimentos_btn_texto', true )){ ?>
                        <a href="<?php echo get_post_meta( $id_page, 'wsg_depoimentos_btn_link', true ); ?>" class="btn"> <?php echo $wsg_depoimentos_btn_texto; ?></a>
                    <?php } ?>
                    <figure class="selos-de-compra">
                        <?php getImageThumb( get_post_meta( $id_page, 'wsg_depoimentos_selos_seguranca_img_id', true ), "300x43"); ?>
                    </figure>
                </div>
            </div>
        </section>
    <?php } ?>


    <?php if(get_post_meta( $id_page, 'wsg_mais_informacoes_show', true )){ ?>
        <section class="wq-06">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
                        <div class="conteudo">
                            <h2><?php echo wpautop(get_post_meta( $id_page, 'wsg_mais_informacoes_titulo', true )); ?></h2>
                            <?php echo wpautop(get_post_meta( $id_page, 'wsg_mais_informacoes_texto', true )); ?>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <figure>
                            <?php getImageThumb( get_post_meta( $id_page, 'wsg_mais_informacoes_img_id', true ), "350x546"); ?>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>


    <?php if(get_post_meta( $id_page, 'wsg_demonstracao_show', true )){ ?>
        <section class="wq-07">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="conteudo-esq">
                            <div class="wrapper">
                                <?php $demonstracao_items = get_post_meta( $id_page, "demonstracao_items", true );
                                    if( $demonstracao_items ){
                                        foreach( $demonstracao_items as $key => $entry ){ ?>
                                        <div>
                                            <?php getImageThumb( $entry['wsg_demonstracao_items_img_id'], "100x95"); ?>
                                            <span><?php echo wpautop($entry['wsg_demonstracao_items_texto']); ?></span>
                                        </div>
                                <?php }} ?>
                            </div>

                            <figure><?php getImageThumb( $entry['wsg_demonstracao_destaque_img_id'], ""); ?></figure>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="conteudo">
                            <div class="title-01">
                                <h2><?php echo wpautop(get_post_meta( $id_page, 'wsg_demonstracao_titulo', true )); ?></h2>
                                <hr>
                            </div>
                            <?php echo wpautop(get_post_meta( $id_page, 'wsg_demonstracao_texto', true )); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <?php if(get_post_meta( $id_page, 'wsg_garantia_show', true )){ ?>
        <section class="wq-08">
            <div class="container">
                <div class="title-01 cto">
                    <h2><?php echo wpautop(get_post_meta( $id_page, 'wsg_garantia_titulo', true )); ?></h2>
                    <p><?php echo get_post_meta( $id_page, 'wsg_garantia_titulo_after', true ); ?></p>
                </div>

                <div class="row">
                    <?php $garantia_items = get_post_meta( $id_page, "garantia_items", true );
                        if( $garantia_items ){
                            foreach( $garantia_items as $key => $entry ){ ?>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <figure><?php getImageThumb( $entry['wsg_garantia_items_img_id'], "255x55"); ?></figure>
                                <?php echo wpautop($entry['wsg_garantia_items_texto']); ?>
                            </div>
                    <?php }} ?>
                </div>

                <div class="cto">
                    <?php if($wsg_introducao_btn_texto = get_post_meta( $id_page, 'wsg_introducao_btn_texto', true )){ ?>
                        <a href="<?php echo get_post_meta( $id_page, 'wsg_introducao_btn_link', true ); ?>" class="btn"> <?php echo $wsg_introducao_btn_texto; ?></a>
                    <?php } ?>
                    <figure class="selos-de-compra">
                        <?php getImageThumb( get_post_meta( $id_page, 'wsg_introducao_selos_seguranca_img', true ), "300x43"); ?>
                    </figure>
                </div>
            </div>
        </section>
    <?php } ?>


    <?php if(get_post_meta( $id_page, 'wsg_faq_show', true )){ ?>
        <section class="wq-09">
            <div class="container">
                <div class="title-01 cto">
                    <h2><?php echo get_post_meta( $id_page, 'wsg_faq_titulo', true ); ?></h2>
                    <p><?php echo get_post_meta( $id_page, 'wsg_faq_subtitulo', true ); ?></p>
                </div>

                <div class="accordion row" id="accordionParent1">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <?php $faq_items_esq = get_post_meta( $id_page, "faq_items_esq", true );
                            if( $faq_items_esq ){
                                $count = 0;
                                foreach( $faq_items_esq as $key => $entry ){ ?>
                                <div class="card">
                                    <div class="card-header" id="heading<?php echo $count; ?>">
                                        <h2 class="collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo $count; ?>" aria-expanded="false" aria-controls="collapse<?php echo $count; ?>">
                                            <?php echo $entry['wsg_faq_items_esq_pergunta'] ?>
                                        </h2>
                                    </div>
                                    <div id="collapse<?php echo $count; ?>" class="collapse" aria-labelledby="heading<?php echo $count; ?>" data-parent="#accordionParent1" style="">
                                        <div class="card-body">
                                            <?php echo wpautop($entry['wsg_faq_items_esq_resposta']); ?>
                                        </div>
                                    </div>
                                </div>
                        <?php $count++;}} ?>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <?php $faq_items_dir = get_post_meta( $id_page, "faq_items_dir", true );
                            if( $faq_items_dir ){
                                $count = 0;
                                foreach( $faq_items_dir as $key => $entry ){ ?>
                                <div class="card">
                                    <div class="card-header" id="heading<?php echo $count; ?>">
                                        <h2 class="collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo $count; ?>" aria-expanded="false" aria-controls="collapse<?php echo $count; ?>">
                                            <?php echo $entry['wsg_faq_items_dir_pergunta'] ?>
                                        </h2>
                                    </div>
                                    <div id="collapse<?php echo $count; ?>" class="collapse" aria-labelledby="heading<?php echo $count; ?>" data-parent="#accordionParent1" style="">
                                        <div class="card-body">
                                            <?php echo wpautop($entry['wsg_faq_items_dir_resposta']); ?>
                                        </div>
                                    </div>
                                </div>
                        <?php $count++;}} ?>
                    </div>

                </div>
            </div>
        </section>
    <?php } ?>

    <?php if(get_post_meta( $id_page, 'wsg_cta_footer_show', true )){ ?>
        <section class="wq-10">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="conteudo">
                            <h2><?php echo get_post_meta( $id_page, 'wsg_cta_footer_titulo', true ); ?></h2>
                            <?php echo wpautop(get_post_meta( $id_page, 'wsg_cta_footer_texto', true )); ?>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <figure><?php getImageThumb( get_post_meta( $id_page, 'wsg_cta_footer_img_id', true ), "350x350"); ?></figure>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <?php
		$arrayQueryRepresentantes = array(
			'post_type'				=> array( 'representantes192' ),
			'orderby' => 'menu_order',
			'order' => 'ASC',
			'posts_per_page'		=> '-1',
		);
		$queryRepresentantes = new WP_Query($arrayQueryRepresentantes);
		if($queryRepresentantes->have_posts()){ 
	?>
		<div class="whatsapp-multiples-btn">
			<label for="open-close-btn" class="wq-open-close-btn">
				<div class="btn-item"><img src="<?php bloginfo( 'template_url' ); ?>/img/whatsapp.png" alt="WhatsApp" title="WhatsApp"></div>
			</label>
			<input class="input-hide" id="open-close-btn" name="open-close-btn" type="checkbox">
			<ul class="btns-whatsapp">
				<?php
					while ( $queryRepresentantes->have_posts()) {
						$queryRepresentantes->the_post();
				?>
					<li class="whatsapp-item"><a href="<?php echo get_post_meta( get_the_ID(), 'wsg_representante_link', true ); ?>" target="_blank"><span><?php getImageThumb( get_post_meta( get_the_ID(), 'wsg_representante_icone_id', true ), "64x64"); ?></span>	<?php the_title(); ?></a></li>
				<?php } ?>
			</ul>
		</div>
	<?php } ?>

    
    <!-- Modal -->
    <div class="modal fade" id="politica-privacidade" tabindex="-1" role="dialog" aria-labelledby="politica-privacidadeLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Políticas de Privacidade</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <div class="modal-body">
                    <?php echo wpautop(get_post_meta( $id_page, 'wsg_politica_privacidade_texto', true )); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="termos-de-uso" tabindex="-1" role="dialog" aria-labelledby="termos-de-usoLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Termos de Uso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <div class="modal-body">
                    <?php echo wpautop(get_post_meta( $id_page, 'wsg_termos_de_uso_texto', true )); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>

<!----col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12----->