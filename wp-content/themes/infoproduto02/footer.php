<?php 
    $id_page = get_page_by_path( 'home', OBJECT, 'page' )->ID;
    $id_logo = get_page_by_path( 'configuracoes-da-logo', OBJECT, 'gerais' )->ID;
    $id_admin = get_page_by_path( 'slug-outras-info', OBJECT, 'adminpanel' )->ID;
?>
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="wrapper">
                    <figure><?php getImageThumb( get_post_meta( $id_logo, 'wsg_logo_footer_img_id', true ), "full"); ?></figure>
                    <div>
                        <h3>LINKS</h3>

                        <ul>
                            <?php if(get_post_meta( $id_page, 'wsg_politica_privacidade_show', true )){ ?>
                                <li class="nav-item">
                                    <button class="nav-link" type="button" data-toggle="modal" data-target="#politica-privacidade">
                                        Políticas de Privacidade
                                    </button>
                                </li>
                            <?php } ?>

                            <?php if(get_post_meta( $id_page, 'wsg_termos_de_uso_show', true )){ ?>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" data-toggle="modal" data-target="#termos-de-uso">
                                        Termos de Uso
                                    </button>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                    <?php if(get_post_meta( $id_page, 'wsg_footer_exclaracoes_show', true )){ ?>
                        <div>
                            <?php echo wpautop(get_post_meta( $id_page, 'wsg_footer_exclaracoes_texto', true )); ?>
                        </div>
                    <?php } ?>

                    <?php if($wsg_rodape_formas_pagamento_img_id = get_post_meta( $id_page, 'wsg_rodape_formas_pagamento_img_id', true )){ ?>
                        <div>
                            <h3><?php echo get_post_meta( $id_page, 'wsg_rodape_formas_pagamento_titulo', true ); ?></h3>
                            <figure><?php getImageThumb( $wsg_rodape_formas_pagamento_img_id, "165x63"); ?></figure>
                        </div>
                    <?php } ?>

                    <div>
                        <h3>Site seguro</h3>
                        <figure><img src="<?php bloginfo( 'template_url' ); ?>/img/selo-seguranca.png" alt="" title=""></figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy">
            <?php echo wpautop(get_post_meta( $id_admin, 'agency_setting_footer_site_content', true )); ?>
        </div>
    </footer>

    <?php wp_footer(); ?>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/bootstrap/dist/js/bootstrap.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/lity.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/slick.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.mask.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/carousel.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/efeitos.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/aos.js"></script>
</body>

</html>

