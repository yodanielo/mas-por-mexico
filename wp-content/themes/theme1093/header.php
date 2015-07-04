<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/11001/xhtml" <?php language_attributes(); ?>>
    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php if (is_singular ())
            wp_enqueue_script('comment-reply'); ?>
        <?php //comments_popup_script(600, 600); ?>
        <?php wp_head(); ?>

        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.3.2.min.js"></script>
        <script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script.js"></script>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/drop-down-menu.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/flashobject.js" type="text/javascript"></script>



    </head><body >
        <div id="logofloat"></div>
        <div class="bg-top">
            <div id="header">
                <div class="main">
                    <?php get_search_form(); ?>
                    <div class="indent1">

                    </div>
                    <div class="menu-bg">
                        <div id="dropmenu">
                            <?php
                            /* wp_page_menu(array(
                              "show_home" => "1",
                              "sort_column" => "menu_order, post_title",
                              "link_before" => "<span><span>",
                              "link_after" => "</span></span>",
                              "exclude" => "37,35"
                              )); */
                            /* Display Wordpress 3.0 menu */
                            $menuwalker = new ThemeDutchMenuWalker;
                            wp_nav_menu(array('theme_location' => 'screen-main-menu', 'container_class' => 'menu', 'depth' => 2, 'walker' => $menuwalker, 'fallback_cb' => 'oldSchoolWordpressMenu'));
                            ?>
                        </div>
                    </div>
                    <div class="logo"><h1 onclick="location.href='<?php echo get_option('home'); ?>/'"><?php bloginfo('name'); ?></h1></div>
                </div>
            </div>
            <div id="content">
                <div class="main">
                    <?php if (is_home ()) {
                    ?>
                                <div class="flash">





                                    <div id="head">
                                        <div class="alignCenter"><a href="http://www.adobe.com/go/EN_US-H-GET-FLASH"><img src="http://www.adobe.com/images/shared/download_buttons/get_adobe_flash_player.png" alt="" /></a></div>
                                    </div>
                                    <script type="text/javascript">
                                        //var fo = new FlashObject("<?php //bloginfo('stylesheet_directory');       ?>/header_v8.swf", "head", "100%", "504", "7", "");

                                        var fo = new FlashObject("<?php bloginfo('stylesheet_directory'); ?>/flash/header_v8.swf?xmlUrl=<?php bloginfo('stylesheet_directory'); ?>/flash/tfile_main.xml", "play", "100%", "454", "10", "");
                                        fo.addParam("quality", "high");
                                        fo.addParam("wmode", "transparent");
                                        fo.addParam("scale", "noscale");
                                        fo.write("head");
                                    </script>


                                </div>
                    <?php } else {
                    ?>
                                <div class="noflash">
                        <?php
                                if (!is_category()) {
                                    if ($post->post_type == 'page') {
                                        $r = get_post_meta($post->ID, "banner", true);
                                        echo '<img src="' . $r . '"/>';
                                    } else {
                                        $mcats = wp_get_post_categories($post->ID);
                                        $mcat = $mcats[0];
                                        if ($mcat >= 4 && $mcat <= 7) {
                                            $r = get_post_meta(21, "banner", true);
                                            echo '<img src="' . $r . '"/>';
                                        }
                                    }
                                } else {
                                    //categorias
                                    if ($cat >= 4 && $cat <= 7) {
                                        $r = get_post_meta(21, "banner", true);
                                        echo '<img src="' . $r . '"/>';
                                    }
                                }
                        ?>
                            </div>
                    <?php } ?>
                            <div id="barraregistro">
                                <div id="lsiganos">
                                    <div id="icosiganos">                                    <img src="<?= bloginfo("template_directory") ?>/images/ic002-siganos.png"/>
SIGANOS</div>
                                    <a id="icotwitter" target="_blank" href="http://twitter.com/maspormexico">
                                    </a>
                                    <a id="icofacebook" target="_blank" href="http://www.facebook.com/pages/Mas-por-Mexico/139067649485277">
                                    </a>
                                </div>
                                <a id="lregistro" href="<?= get_permalink(17) ?>">
                                    INSCRIPCIÓN
                                    <img src="<?= bloginfo("template_directory") ?>/images/ico01-registrarse.png"/>
                                </a>
                                <script type="text/javascript">
                                    $("#lsiganos").hover(function(){
                                        $("#lscuadrosiganos").fadeIn(450, function(){});
                                    }, function(){
                                        $("#lscuadrosiganos").fadeOut(450, function(){});
                                    });
                                </script>
                            </div>
                    <?php if (is_home ()) {
                    ?>
                                <div class="block">
                                    <div class="container bg">
                                        <div class="container bg1">
                                            <div class="col-1">
                                                <div class="indent-col">
                                                    <h3>ORGANIZADORES</h3>
                                                    <p>Somos una Red de organizaciones que, con el apoyo de la Embajada de México, queremos pensar, analizar e invitarte al debate y la reflexión para delimitar contigo un proyecto sólido, inclusivo y competitivo del México que todos queremos.</p>
                                                    <a href="<?= get_permalink(9) ?>" class="but1">LEER MÁS</a>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="indent-col">
                                                    <h3>APOYAN A MÁS POR MÉXICO</h3>
                                                    <p>Más por México no sería posible sin la ayuda y colaboración de estas instituciones dedicadas al fomento de un México mejor.</p>
                                                    <a href="<?= get_permalink(176) ?>" class="but2">LEER MÁS</a>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="indent-col">
                                                    <h3>MÁS POR MÉXICO</h3>
                                                    <p>Más por México agradece tu interés en participar de su ciclo de encuentros y te garantiza un espacio para la reflexión, el análisis y el debate sobre el proyecto de país que juntos podemos delinear. </p>
                                                    <a href="<?= get_permalink(17) ?>" class="but3">LEER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <?PHP } ?>
                            <div class="indent-main">
                                <div class="container bg">
                                    <div class="container bg1 <?= (!is_home() ? 'containerdentro' : '') ?>">
                                <?php get_sidebar(1); ?>