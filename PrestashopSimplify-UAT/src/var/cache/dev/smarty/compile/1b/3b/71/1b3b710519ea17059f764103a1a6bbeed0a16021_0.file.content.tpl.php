<?php
/* Smarty version 3.1.32, created on 2018-08-22 12:11:19
  from '/var/www/html/admin8388earpn/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7d8b27576012_46413975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b3b710519ea17059f764103a1a6bbeed0a16021' => 
    array (
      0 => '/var/www/html/admin8388earpn/themes/default/template/content.tpl',
      1 => 1534953858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7d8b27576012_46413975 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
