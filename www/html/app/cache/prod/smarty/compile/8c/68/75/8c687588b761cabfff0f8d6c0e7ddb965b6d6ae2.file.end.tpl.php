<?php /* Smarty version Smarty-3.1.19, created on 2017-11-03 16:19:38
         compiled from "/var/www/html/modules/welcome/views/contents/end.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170321640559fc890a01a115-26771564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c687588b761cabfff0f8d6c0e7ddb965b6d6ae2' => 
    array (
      0 => '/var/www/html/modules/welcome/views/contents/end.tpl',
      1 => 1509697775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170321640559fc890a01a115-26771564',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fc890a0475c1_75020751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fc890a0475c1_75020751')) {function content_59fc890a0475c1_75020751($_smarty_tpl) {?>

<div id="onboarding-welcome" class="modal-header">
  <button class="onboarding-button-next pull-right close" type="button">&times;</button>
  <h2 class="text-center text-md-center"><?php echo smartyTranslate(array('s'=>'Over to you!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</h2>
  <p class="text-center text-md-center">
    <?php echo smartyTranslate(array('s'=>'You\'ve seen the essential, but there\'s a lot more to explore.','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
<br />
    <?php echo smartyTranslate(array('s'=>'Some ressources can help you go further:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

  </p>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 text-center text-md-center link-container">
        <a class="final-link" href="http://doc.prestashop.com/display/PS17/Getting+Started" target="_blank">
          <div class="starter-guide"></div>
          <span class="link"><?php echo smartyTranslate(array('s'=>'Starter Guide','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</span>
        </a>
      </div>
      <div class="col-md-6 text-center text-md-center link-container">
        <a class="final-link" href="https://www.prestashop.com/forums/" target="_blank">
          <div class="forum"></div>
          <span class="link"><?php echo smartyTranslate(array('s'=>'Forum','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</span>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 text-center text-md-center link-container">
        <a class="final-link" href="https://www.prestashop.com/en/training-prestashop" target="_blank">
          <div class="training"></div>
          <span class="link"><?php echo smartyTranslate(array('s'=>'Training','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</span>
        </a>
      </div>
      <div class="col-md-6 text-center text-md-center link-container">
        <a class="final-link" href="https://www.youtube.com/user/prestashop" target="_blank">
          <div class="video-tutorial"></div>
          <span class="link"><?php echo smartyTranslate(array('s'=>'Video tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</span>
        </a>
      </div>
    </div>
  </div>
  <br />
  <div class="text-center text-md-center">
      <button class="btn btn-primary onboarding-button-next"><?php echo smartyTranslate(array('s'=>'I\'m ready','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
</div>
<?php }} ?>
