<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php wp_title(); ?></title>
    <meta name="language" content="ru">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
 
<!-- Обёртка -->
<div id="wrapper">

    <!-- Шапка -->
    <div class="header">
        <!-- Название блога и описание -->
        <div class="bloginfo">
            <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
            <p><?php bloginfo('description'); ?></p>
        </div>
        <!-- Навигация -->
        <div class="nav">
            <?php wp_nav_menu('theme_location=top-navigation'); ?>
        </div>
    </div>