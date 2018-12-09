<?php
/* Smarty version 3.1.34-dev-7, created on 2018-12-09 08:55:14
  from '/var/www/html/learningProcess/smarty/templates/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5c0c67f2b07dc6_47108191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c813f8adc96e16ce2dc79c5e1abe444cb8143ad' => 
    array (
      0 => '/var/www/html/learningProcess/smarty/templates/view.tpl',
      1 => 1544316734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0c67f2b07dc6_47108191 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
    p{
        margin:50px auto;
        text-align:center;
    }
    table{
        margin:100px auto;
        border:2px solid red;
    }
    tr,td{
        border:1px solid black;
        text-align:center;
        margin:5px;
    }
    input[name="query"]{
        width:95%;
    }
    </style>
</head>
<body>
    <p>近期目标 latex  vim  apache  mysql  js  php</p>
    <table>
        <form id="form_createClass">
            <tr>
                <td>create new class</td>
                <td>
                    <input type="text" name="newClass">
                    <td><input id="createClass" type="button" value="createClass"></td>
                </td>
            </tr>
        </form>
        <form id="form_insertData">
            <tr>
                <td>课程</td>
                <td>
                    <select name="class">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                            <option><?php echo $_smarty_tpl->tpl_vars['value']->value['class'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </td>
                <td>
                    <span id="classMsg">请在下拉单中选择</span>
                </td>
            </tr>
            <tr>
                <td>进度</td>
                <td><input type='text' name="process" ></td>
                <td><span id="processMsg">第几页</span></td>
            </tr>
            <tr>
                <td colspan="3"><input type="button" value="latest process" id="insertData"></td>
            </tr>
        </form>
    <tr>
        <td><input id="cleanData" type="button" value="clean" ></td>
        <form id="form_selectData">
        <td>
                <select name="class">
                    <option value="all">all</option>
                    <option value="india latex 读本">india latex 读本</option>
                    <option value="linux就该这样学">linux就该这样学</option>
                    <option value="learning vim the hard way">learning vim the hard way</option>
                    <option value="php">php</option>
                    <option value="js">js</option>
                </select>       
        </td>
        <td><input type="button" value="select" id="selectData"></td>
        </form>
    </tr>
    </table>
    <p id="showInfo"></p>
    <?php echo '<script'; ?>
 src="ajax.js">    
    <?php echo '</script'; ?>
>
</body>
</html>



<?php }
}
