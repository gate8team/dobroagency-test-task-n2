<?php /* Smarty version Smarty-3.1.16, created on 2014-02-20 17:55:12
         compiled from "views\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202385306083be70056-67203849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed94496dc18daeb4c444e2a41ffb3137bd874918' => 
    array (
      0 => 'views\\templates\\index.tpl',
      1 => 1392904511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202385306083be70056-67203849',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5306083beae861_65008415',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5306083beae861_65008415')) {function content_5306083beae861_65008415($_smarty_tpl) {?><!doctype html>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="stylesheet" href="./views/styles/style.css" />
</head>
<body>
    <section class="keeper">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_name']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </section>
</body>
</html><?php }} ?>
