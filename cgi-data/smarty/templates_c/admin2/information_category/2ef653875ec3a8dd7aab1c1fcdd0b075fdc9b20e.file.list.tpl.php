<?php /* Smarty version Smarty-3.1.18, created on 2019-10-24 15:13:59
         compiled from "/virtual/119.245.151.134/home/admin/contents/information_category/template/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10759296765db14127d560f6-01563428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ef653875ec3a8dd7aab1c1fcdd0b075fdc9b20e' => 
    array (
      0 => '/virtual/119.245.151.134/home/admin/contents/information_category/template/list.tpl',
      1 => 1571378802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10759296765db14127d560f6-01563428',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_pagenavi' => 0,
    't_information_category' => 0,
    'information_category' => 0,
    '_CONTENTS_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5db14127de9574_81271848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5db14127de9574_81271848')) {function content_5db14127de9574_81271848($_smarty_tpl) {?>			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
				<thead>
					<tr>
						<th>お知らせカテゴリ名</th>
						<th class="showhide">表示</th>
						<th class="delete">削除</th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars["information_category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["information_category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t_information_category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["information_category"]->key => $_smarty_tpl->tpl_vars["information_category"]->value) {
$_smarty_tpl->tpl_vars["information_category"]->_loop = true;
?>
					<tr>
						<td><a href="./edit.php?id=<?php echo $_smarty_tpl->tpl_vars['information_category']->value['id_information_category'];?>
"><?php echo $_smarty_tpl->tpl_vars['information_category']->value['name'];?>
</a></td>
						<td class="pos_ac">
							<div class="switch">
								<div class="onoffswitch">
									<input type="checkbox" value="1" class="onoffswitch-checkbox btn_display" id="display<?php echo $_smarty_tpl->tpl_vars['information_category']->value['id_information_category'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['information_category']->value['id_information_category'];?>
"<?php if ($_smarty_tpl->tpl_vars['information_category']->value['display_flg']==1) {?> checked<?php }?>>
									<label class="onoffswitch-label" for="display<?php echo $_smarty_tpl->tpl_vars['information_category']->value['id_information_category'];?>
">
										<span class="onoffswitch-inner"></span>
										<span class="onoffswitch-switch"></span>
									</label>
								</div>
							</div>
						</td>
						<td class="pos_ac" style="text-align:unset;">
							<a href="javascript:void(0)" class="btn btn-sm btn-danger btn_delete" data-id="<?php echo $_smarty_tpl->tpl_vars['information_category']->value['id_information_category'];?>
">削除</a>
						</td>
					</tr>
					<?php }
if (!$_smarty_tpl->tpl_vars["information_category"]->_loop) {
?>
					<tr>
						<td colspan="6"><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
は見つかりません。</td>
					</tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="10"><ul class="pagination pull-right">
							</ul></td>
					</tr>
				</tfoot>
			</table>
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
