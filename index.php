<?php
    require_once './logic/partners.php';
    require_once './libs/smarty/Smarty.class.php';

    define('BASE_VIEWS_PATH', 'views/');

    $smarty = new Smarty();
    $smarty->template_dir = BASE_VIEWS_PATH . 'templates/';
    $smarty->compile_dir = BASE_VIEWS_PATH . 'templates_c/';
    $smarty->config_dir = BASE_VIEWS_PATH . 'configs/';
    $smarty->cache_dir = BASE_VIEWS_PATH . 'cache/';

    $partners = new PartnerKeeper();
    $partners->generatePartners(12);

    $smarty->assign('partners', $partners->getPartners());
    $smarty->assign('tpl_name', 'partners');
    $smarty->assign('generalSponsors', 'Our general sponsors');
    $smarty->assign('sponsors', 'Our sponsors');
    $smarty->assign('ourPartners', 'Our partners');
    $smarty->display('index.tpl');
?>