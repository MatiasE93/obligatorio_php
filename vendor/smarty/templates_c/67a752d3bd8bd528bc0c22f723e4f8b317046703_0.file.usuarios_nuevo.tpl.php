<?php
/* Smarty version 3.1.29, created on 2016-06-05 07:09:03
  from "/Applications/MAMP/htdocs/obligatorio_php/vistas/usuarios_nuevo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5753b3efd10b31_26584252',
  'file_dependency' => 
  array (
    '67a752d3bd8bd528bc0c22f723e4f8b317046703' => 
    array (
      0 => '/Applications/MAMP/htdocs/obligatorio_php/vistas/usuarios_nuevo.tpl',
      1 => 1465103312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
  ),
),false)) {
function content_5753b3efd10b31_26584252 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    
    <title><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
 - Crear cuenta</title>
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8">
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/footer-distributed-with-address-and-phones.css">

    <!-- Javascript personales -->
    <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.validationEngine-en.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.validationEngine.js" type="text/javascript"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>  
    $(document).ready(function() {
      // SUCCESS AJAX CALL, replace "success: false," by:     success : function() { callSuccessFunction() }, 
      
      $("#formID").validationEngine()
    });
  <?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 type="text/javascript">
  
  $(document).ready(function(){
    $('#nickname').keyup(function(){
      var nick = $('#nickname').val();
      if (nick!=''){
        $.post('/obligatorio_php/usuario/check', {nickname:nick}, 
          function(result){
            console.log(result);
            $('#nickname_available').html(result);
        }); 
      } else {
        $('#nickname_available').html('');
      } 
    });
  });
  
  <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
  
  $(document).ready(function(){
    $('#email').keyup(function(){
      var e = $('#email').val();
      if (e!=''){
        $.post('/obligatorio_php/usuario/check', {email:e}, 
          function(result){
            console.log(result);
            $('#email_available').html(result);
        }); 
      } else {
        $('#email_available').html('');
      } 
    });
  });
  
  <?php echo '</script'; ?>
>
    
  </head>

  <body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container-fluid" style="height: 650px">
      <div class="main">
        <h1 class="page-header">Cuenta nueva</h1>
        <?php if ($_smarty_tpl->tpl_vars['mensaje']->value != '') {?>
        <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

        <?php }?>
        <div class="col-sm-3  col-md-3"></div>
        <div class="col-sm-6  col-md-6">
        <form id="formID" class="formular" method="POST" action="">
          <fieldset class="form-group">
            <label for="Nickname">Nickname</label>
            <input type="text" id="nickname" name="nickname" class="form-control validate[required,custom[noSpecialCaracters],length[0,30]]" placeholder="Nickname" value='' autocomplete="off">
            <div id="nickname_available"></div>
          </fieldset>
          <fieldset class="form-group">
            <label for="Password">Contraseña</label>
            <input type="password" id="pass" name="pass" class="form-control validate[required,length[6,30]] text-input" placeholder="Contraseña" value=''>
          </fieldset><fieldset class="form-group">
            <label for="Password">Repetir contraseña</label>
            <input type="password" id="repass" name="repass" class="form-control validate[required,confirm[pass]] text-input" placeholder="Repetir contraseña" value=''>
          </fieldset>
          <fieldset class="form-group">
            <label for="Email">Email</label>
            <input type="text" id="email" name="email" class="form-control validate[required,custom[email]] text-input" placeholder="Email" value=''>
            <div id="email_available"></div>
          </fieldset>
          <fieldset class="form-group">
            <label for="Remail">Confirmar email</label>
            <input type="text" id="reemail" name="reemail" class="form-control validate[required,confirm[email]] text-input" placeholder="Confirmar email" value='' autocomplete="off">
          </fieldset>
          <input type="submit" value="Comenzar ahora!" class="submit form-control btn btn-primary">
        </form>
        </div>
      </div>
    </div>
    <footer class="footer-distributed">
      <div class="footer-left"> 
        <br>
        <p>Copyrighterino</p>
      </div>
    </div>
  </body>
</html><?php }
}
