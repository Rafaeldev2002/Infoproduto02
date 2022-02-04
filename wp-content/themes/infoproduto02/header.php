<?php 
    $id_logo = get_page_by_path( 'configuracoes-da-logo', OBJECT, 'gerais' )->ID;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php wp_title(); ?></title>

    
    <?php
        $wsg_favicon_img_id = get_post_meta( $id_logo, 'wsg_favicon_img_id', true );
        if ($wsg_favicon_img_id !== NULL && strlen($wsg_favicon_img_id) > 0) {
            $wsg_favicon = wp_get_attachment_image_src($wsg_favicon_img_id);
            if ($wsg_favicon !== NULL && count($wsg_favicon) > 0) {
                ?>
                    <link rel="icon" href="<?php echo $wsg_favicon[0]; ?>" type="image/x-icon"/>
                <?php
            }
        }
    ?>


    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/bootstrap/dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/lity.min.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/aos.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/slick.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/mobile.css">
</head>


<body>
