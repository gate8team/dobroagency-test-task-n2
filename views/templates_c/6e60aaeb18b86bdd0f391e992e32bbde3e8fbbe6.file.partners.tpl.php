<?php /* Smarty version Smarty-3.1.16, created on 2014-02-20 18:17:56
         compiled from "views\templates\partners.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32237530602f0cd3e16-21179249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e60aaeb18b86bdd0f391e992e32bbde3e8fbbe6' => 
    array (
      0 => 'views\\templates\\partners.tpl',
      1 => 1392905873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32237530602f0cd3e16-21179249',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530602f0d5c9b6_41001856',
  'variables' => 
  array (
    'generalSponsors' => 0,
    'partners' => 0,
    'partner' => 0,
    'sponsors' => 0,
    'ourPartners' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530602f0d5c9b6_41001856')) {function content_530602f0d5c9b6_41001856($_smarty_tpl) {?>
<h1 class="dark"><?php echo $_smarty_tpl->tpl_vars['generalSponsors']->value;?>
</h1>
<ul class="partnersTwoCols">
    <?php  $_smarty_tpl->tpl_vars['partner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['partner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['partners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['partner']->key => $_smarty_tpl->tpl_vars['partner']->value) {
$_smarty_tpl->tpl_vars['partner']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['partner']->value->isImportant) {?>
        <li>
            <img src='http://placehold.it/450x120' />
            <p>
                <b class="companyName dark"><?php echo $_smarty_tpl->tpl_vars['partner']->value->name;?>
</b><br/>
                <?php echo $_smarty_tpl->tpl_vars['partner']->value->description;?>

            </p>
        </li>
        <?php }?>
    <?php } ?>
</ul>

<br/><br/>

<h1 class="dark"><?php echo $_smarty_tpl->tpl_vars['sponsors']->value;?>
</h1>
<ul class="partnersThreeCols">
    <?php  $_smarty_tpl->tpl_vars['partner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['partner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['partners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['partner']->key => $_smarty_tpl->tpl_vars['partner']->value) {
$_smarty_tpl->tpl_vars['partner']->_loop = true;
?>
        <?php if (!$_smarty_tpl->tpl_vars['partner']->value->isImportant) {?>
            <li>
                <img src='http://placehold.it/310x120' />
                <p>
                    <b class="companyName dark"><?php echo $_smarty_tpl->tpl_vars['partner']->value->name;?>
</b>
                </p>
            </li>
        <?php }?>
    <?php } ?>
</ul>

<br/><br/>

<h1 class="dark"><?php echo $_smarty_tpl->tpl_vars['ourPartners']->value;?>
</h1>
<ul class="partnersFourCols">
    <?php  $_smarty_tpl->tpl_vars['partner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['partner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['partners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['partner']->key => $_smarty_tpl->tpl_vars['partner']->value) {
$_smarty_tpl->tpl_vars['partner']->_loop = true;
?>
        <?php if (!$_smarty_tpl->tpl_vars['partner']->value->isPartner) {?>
            <li>
                <img src='http://placehold.it/230x120' />
            </li>
        <?php }?>
    <?php } ?>
</ul><?php }} ?>
