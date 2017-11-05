<?php /* Smarty version Smarty-3.1.19, created on 2017-11-03 16:19:41
         compiled from "/var/www/html/adminD/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31364778159fc890d782596-90507445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3eafa1f926c258cfa68c8da8ba9a3e80be00c02a' => 
    array (
      0 => '/var/www/html/adminD/themes/default/template/content.tpl',
      1 => 1509697773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31364778159fc890d782596-90507445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fc890d7e7be8_90127680',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fc890d7e7be8_90127680')) {function content_59fc890d7e7be8_90127680($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
