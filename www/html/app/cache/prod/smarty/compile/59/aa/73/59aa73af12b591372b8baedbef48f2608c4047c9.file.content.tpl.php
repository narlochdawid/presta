<?php /* Smarty version Smarty-3.1.19, created on 2017-11-03 21:29:59
         compiled from "/var/www/html/adminD/themes/new-theme/template/controllers/addons_catalog/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146168517659fcd1c718d7a5-68059098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59aa73af12b591372b8baedbef48f2608c4047c9' => 
    array (
      0 => '/var/www/html/adminD/themes/new-theme/template/controllers/addons_catalog/content.tpl',
      1 => 1509697774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146168517659fcd1c718d7a5-68059098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_addons_content' => 0,
    'addons_content' => 0,
    'iso_lang' => 0,
    'iso_currency' => 0,
    'iso_country' => 0,
    'parent_domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fcd1c71f5768_88092370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fcd1c71f5768_88092370')) {function content_59fcd1c71f5768_88092370($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }?>
<?php }} ?>
