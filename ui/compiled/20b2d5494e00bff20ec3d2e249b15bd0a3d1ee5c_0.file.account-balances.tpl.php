<?php
/* Smarty version 3.1.39, created on 2023-01-02 15:58:01
  from 'C:\xampp\htdocs\ui\theme\ibilling\account-balances.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63b2b8b905aaf0_70001588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20b2d5494e00bff20ec3d2e249b15bd0a3d1ee5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ui\\theme\\ibilling\\account-balances.tpl',
      1 => 1630414806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b2b8b905aaf0_70001588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2508114663b2b8b9048061_40675015', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_2508114663b2b8b9048061_40675015 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2508114663b2b8b9048061_40675015',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Financial Balances'];?>
</h5>

                </div>
                <div class="ibox-content">

                    <table class="table table-striped table-bordered">
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
</th>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>
                                <td class="text-right"><span <?php if ($_smarty_tpl->tpl_vars['ds']->value['balance'] < 0) {?>class="text-red"<?php }?>><?php echo ib_money_format($_smarty_tpl->tpl_vars['ds']->value['balance'],$_smarty_tpl->tpl_vars['_c']->value);?>
</span> </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                        <tr>
                            <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
:</strong></td>
                            <td class="text-right"><strong><span <?php if ($_smarty_tpl->tpl_vars['tbal']->value < 0) {?>class="text-red"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tbal']->value;?>
</span></strong></td>
                        </tr>
                    </table>

                </div>
            </div>



        </div>



    </div>


<?php
}
}
/* {/block "content"} */
}
