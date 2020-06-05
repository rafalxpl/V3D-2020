<?php
/* Smarty version 3.1.33, created on 2019-07-23 16:49:45
  from '/home1/rafalxpl/public_html/v3d/templates/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3780f9edb871_28205575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e8d9c329717816676a379222f6f16d2725b0655' => 
    array (
      0 => '/home1/rafalxpl/public_html/v3d/templates/head.tpl',
      1 => 1563918426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 4,
    'file:scripts.tpl' => 1,
  ),
),false)) {
function content_5d3780f9edb871_28205575 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="I’m a Design Director with 17 years of graphic design and leadership experience in the branding, marketing,
advertising and webdesign." />
    <title>Visual3design.com</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="system/favicon.png" />
    <!-- Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700" />
    <!-- Stylesheets -->
    <link rel='stylesheet' href='system/css/flexslider.css' type='text/css' media='all' />
    <link rel='stylesheet' href='system/css/jquery.fancybox-1.3.4.css' type='text/css' media='all' />
    <link rel='stylesheet' href='system/css/epicslider.css' type='text/css' media='all' />
    <link rel='stylesheet' href='system/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='system/css/udt_shortcodes.css' type='text/css' media='all' />
    <link rel='stylesheet' href='system/css/skin.css' type='text/css' media='all' />
    <link rel='stylesheet' href='system/css/udt_media_queries.css' type='text/css' media='all' />
    <link rel='stylesheet' href='system/css/r-style.css' type='text/css' media='all' />
    <!-- Stop animation scroll  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <?php echo '<script'; ?>
 src="https://unpkg.com/aos@2.3.1/dist/aos.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 type='text/javascript' src='system/js/jquery-1.11.0.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src='system/js/jquery-migrate-1.2.1.min.js'><?php echo '</script'; ?>
>


</head>

<body class="page">
    <div id="header-wrapper">
        <div id="header-inner">
            <header>
                <!-- Logo -->
                <div id="logo">
                    <a href="index.php" title="Visual3design"><img src="system/images/logo_web_1.jpg" alt="Visual3design.com"></a>
                </div>

                <div class="language">
                    <a href="index.php?chapter_id=1" class="btn">EN</a> /
                    <a href="index.php?chapter_id=2" class="btn">PL</a> /
                    <a href="index.php?chapter_id=3" class="btn">RU</a>
                </div>

                </br>
                <!-- Mobile Menu Toggle -->
                <div class="mobile-menu-toggle">
                    <a href=""></a>
                </div>
                <!-- Navigation -->
                <nav id="primary-nav">
                    <div class="menu-container">
                        <?php if ($_smarty_tpl->tpl_vars['chapter_id']->value == 0) {?>
                        <?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "en.conf", null, 0);
?>

                        <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php } elseif ($_GET['chapter_id'] == "2") {?>
                        <?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "pl.conf", null, 0);
?>

                        <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php } elseif ($_GET['chapter_id'] == "1") {?>
                        <?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "en.conf", null, 0);
?>

                        <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php } elseif ($_GET['chapter_id'] == "3") {?>
                        <?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "ru.conf", null, 0);
?>

                        <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php }?>
                    </div>
                </nav>
        </div>
        </header>
        <div style="clear:both;"></div>
        <div style="clear:both;"></div>
        <ul class="connect white">
            <!-- <li><a href="http://rafalxpl.deviantart.com/" title="DeviantArt" class="deviantart">DeviantArt</a></li> -->
            <li><a href="https://www.behance.net/rafalxpl" title="Behance" class="behance">Behance</a></li>
            <li><a href="https://dribbble.com/rafalxpl" title="Dribbble" class="dribbble">Dribbble</a></li>
                        <li><a href="https://www.linkedin.com/in/rafal-karluk-a141b149/" title="LinkedIn"
                    class="linkedin">LinkedIn</a></li>
            <li><a href="https://twitter.com/rafalxpl" title="twitter"class="twitter">Twitter</a></li>
        </ul> 
        <div style="clear:both;"></div>
    </div>
    <?php $_smarty_tpl->_assignInScope('page_tpl', ((string)$_smarty_tpl->tpl_vars['data']->value['subpage']).".tpl");?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['page_tpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo '<script'; ?>
>
        new SmoothScroll();

        function SmoothScroll(el) {
            var t = this,
                h = document.documentElement;
            el = el || window;
            t.rAF = false;
            t.target = 0;
            t.scroll = 0;
            t.animate = function () {
                t.scroll += (t.target - t.scroll) * 0.1;
                if (Math.abs(t.scroll.toFixed(5) - t.target) <= 0.47131) {
                    cancelAnimationFrame(t.rAF);
                    t.rAF = false;
                }
                if (el == window) scrollTo(0, t.scroll);
                else el.scrollTop = t.scroll;
                if (t.rAF) t.rAF = requestAnimationFrame(t.animate);
            };
            el.onmousewheel = function (e) {
                e.preventDefault();
                e.stopPropagation();
                var scrollEnd = (el == window) ? h.scrollHeight - h.clientHeight : el.scrollHeight - el.clientHeight;
                t.target += (e.wheelDelta > 0) ? -70 : 70;
                if (t.target < 0) t.target = 0;
                if (t.target > scrollEnd) t.target = scrollEnd;
                if (!t.rAF) t.rAF = requestAnimationFrame(t.animate);
            };
            el.onscroll = function () {
                if (t.rAF) return;
                t.target = (el == window) ? pageYOffset || h.scrollTop : el.scrollTop;
                t.scroll = t.target;
            };
        }
    <?php echo '</script'; ?>
>

    <!-- <section>
  <div class="content">Page Loaded!</div>
</section> -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
>
        $(window).load(function () { // makes sure the whole site is loaded
            $("#status").fadeOut(); // will first fade out the loading animation
            $("#preloader").delay(500).fadeOut("slow"); // will fade out the white DIV that covers the website.
        })

        // Animated CSS preloader from http://tobiasahlin.com/spinkit/
        // Excellent preloader example found here: http://ismet.me/index.html
    <?php echo '</script'; ?>
><?php }
}
