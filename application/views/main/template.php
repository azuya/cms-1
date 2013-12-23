<?php
/*
 * Основной шаблон Администрирования
 * =================================
 * $site_name - название сайта
 * $title - заголовок
 * $page_title - дополнительный заголовок
 * $block_center - центральный основной контент
 */
?>

<!DOCTYPE html>
<html>
<head>
<title><?= $title ? "$site_name | $title" : $site_name ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?= $site_description ?>">
<meta name="Keywords" content="<?= $site_keywords ?>">
<meta name="author" content="ProT" />
<? // Подключаем стили.
foreach($styles as $style): ?>
<?= HTML::style($style) ?>

<? endforeach; ?>
<? // Подключаем скрипты.
foreach($scripts as $script): ?>
<?= HTML::script($script) ?>

<? endforeach; ?>
<script type="text/javascript">var $nc = jQuery.noConflict();</script>
<script type="text/javascript">if (typeof $ == 'undefined') $ = jQuery;</script>
</head>
<body>
<div class="container">
    <?= $menu_main ?>
    
    <? if (isset($block_center) && !isset($block_right)): ?>
    <!-- Центральный блок-->
    <div class="row" style="margin-bottom: 20px;">
        <div class="span12"><h3><?= $page_title ?></h3></div>
        <div class="span12">
            <? foreach ($block_center as $cblock): ?>
            <?= $cblock ?>
            <? endforeach; ?>
        </div>
    </div>
    <!-- /Центральный блок-->
    <? endif; ?>
    
    <? if (isset($block_center) && isset($block_right)): ?>
    <!-- Центральный блок-->
    <div class="row" style="margin-bottom: 20px;">
        <div class="span12"><h3><?= $page_title ?></h3></div>
        <div class="span9">
            <? foreach ($block_center as $cblock): ?>
            <?= $cblock ?>
            <? endforeach; ?>
        </div>
    <!-- /Центральный блок-->
    <!-- Правый блок-->
        <div class="span3">
            <? foreach ($block_right as $rblock): ?>
            <?= $rblock ?>
            <? endforeach; ?>
        </div>
    <!-- /Правый блок-->
    </div>
    <? endif; ?>
    
    <footer class="modal-footer ">
        Все права защищены. 2013
    </footer>
</div>
</body>
</html>