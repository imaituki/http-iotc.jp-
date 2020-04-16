<?php /* Smarty version Smarty-3.1.18, created on 2020-04-14 16:21:04
         compiled from "/data/domain/D0D0EB10-7A01-11EA-9321-048C0C460029/html/common/include/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8284340465e956460a7c155-60637887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e93824db9bfa2093f75e2a2a82f0d216b213ca6' => 
    array (
      0 => '/data/domain/D0D0EB10-7A01-11EA-9321-048C0C460029/html/common/include/header.tpl',
      1 => 1586845731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8284340465e956460a7c155-60637887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mst_siteconf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e956460a81d78_26254464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e956460a81d78_26254464')) {function content_5e956460a81d78_26254464($_smarty_tpl) {?><header>
<div id="head">
	<div class="center">
		<h1 class="site_logo"><a class="ov" href="/"><img src="/common/image/head/logo.png" alt="みんなのIoT"></a></h1>
		<div id="head_navi">
			<ul>
				<li class=""><a href="/information/">お知らせ</a></li>
				<li class=""><a href="/flow/">ご相談の流れ</a></li>
				<li class=""><a href="/case/">実績紹介</a></li>
				<li class=""><a href="/partner/">連携パートナー</a></li>
				<li class="head_contact">
					<span class="tel" data-tel="<?php echo $_smarty_tpl->tpl_vars['mst_siteconf']->value['tel2'];?>
"><i class="fa fa-phone-alt"></i> <?php echo $_smarty_tpl->tpl_vars['mst_siteconf']->value['tel'];?>
<span class="visible-only click"><i class="fa fa-hand-point-up"></i> CLICK</span></span>
					<a href="/contact/" class="button _circle bg_or"><i class="fa fa-paper-plane"></i> お問い合わせ</a>
				</li>
			</ul>
		</div>
		<div id="btn_open"><a href="javascript:void(0);"><i class="fa fa-bars"></i></a></div>
	</div>
</div>
</header>
<?php }} ?>
