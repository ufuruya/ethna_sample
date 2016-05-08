<?php /* Smarty version 2.6.26, created on 2016-05-08 08:54:55
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'message', 'index.tpl', 19, false),array('function', 'form_input', 'index.tpl', 25, false),array('function', 'form_submit', 'index.tpl', 29, false),array('block', 'form', 'index.tpl', 23, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['config']['url']; ?>
css/ethna.css" type="text/css" />
</head>
<body>

<div id="header">
    <h1>Myproject</h1>
</div>

<div id="main">
    <h2>Index Page</h2>
    <p>hello, world!</p>

<?php if (count ( $this->_tpl_vars['errors'] ) > 0): ?>
  入力内容にエラーがあります。
  <?php echo smarty_function_message(array('name' => 'name'), $this);?>
<br>
  <?php echo smarty_function_message(array('name' => 'comment'), $this);?>

<?php endif; ?>

        <?php $this->_tag_stack[] = array('form', array('name' => 'form_comment','ethna_action' => 'menu')); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
  メニュー:
  <?php echo smarty_function_form_input(array('name' => 'name'), $this);?>
<br>
  投稿内容:
  <?php echo smarty_function_form_input(array('name' => 'comment'), $this);?>


  <?php echo smarty_function_form_submit(array(), $this);?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php echo $this->_tpl_vars['form']['comment']; ?>


</div>

<ul>
　<?php $_from = $this->_tpl_vars['app']['greetingWord']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
　<li><?php echo $this->_tpl_vars['key']; ?>
:<?php echo $this->_tpl_vars['item']; ?>
</li>
　<?php endforeach; endif; unset($_from); ?>
</ul>
<div id="footer">
    Powered By <a href="http://ethna.jp">Ethna</a>-<?php echo @ETHNA_VERSION; ?>
.
</div>

</body>
</html>