<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.29, created on 2016-05-15 23:03:42
=======
/* Smarty version 3.1.29, created on 2016-05-27 20:40:54
>>>>>>> antonio
=======
/* Smarty version 3.1.29, created on 2016-05-31 01:24:47
>>>>>>> Matias
  from "C:\wamp\www\obligatorio_php\vistas\usuarios_nuevo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5739004eaedeb7_60446921',
=======
  'unifunc' => 'content_5748b0d6439833_39131871',
>>>>>>> antonio
=======
  'unifunc' => 'content_574ce7df61eb57_24130004',
>>>>>>> Matias
  'file_dependency' => 
  array (
    'e532878ff992638570b6acfd8fb981f0506baad9' => 
    array (
      0 => 'C:\\wamp\\www\\obligatorio_php\\vistas\\usuarios_nuevo.tpl',
<<<<<<< HEAD
<<<<<<< HEAD
      1 => 1463353380,
=======
      1 => 1464381651,
>>>>>>> antonio
=======
      1 => 1464657845,
>>>>>>> Matias
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
<<<<<<< HEAD
function content_5739004eaedeb7_60446921 ($_smarty_tpl) {
=======
function content_5748b0d6439833_39131871 ($_smarty_tpl) {
>>>>>>> antonio
=======
function content_574ce7df61eb57_24130004 ($_smarty_tpl) {
>>>>>>> Matias
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    
    <title><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
<<<<<<< HEAD
<<<<<<< HEAD
</title>

=======
 - Crear cuenta</title>
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8">
    
>>>>>>> antonio
=======
 - Crear cuenta</title>
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8">
    
>>>>>>> Matias
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
    <link href="css/check-disponible.css" rel="stylesheet">
>>>>>>> Matias

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
<<<<<<< HEAD
    
    // JUST AN EXAMPLE OF VALIDATIN CUSTOM FUNCTIONS : funcCall[validate2fields]
    function validate2fields(){
      if($("#nombre").val() =="" || $("#apellido").val() == ""){
        return true;
      }else{
        return false;
      }
    }
  <?php echo '</script'; ?>
>
>>>>>>> antonio
=======
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
>>>>>>> Matias
    
  </head>

  <body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container-fluid">
      <div class="main">
<<<<<<< HEAD
<<<<<<< HEAD
        <h1 class="page-header">Crear usuario</h1>
=======
        <h1 class="page-header">Cuenta nueva</h1>
>>>>>>> antonio
=======
        <h1 class="page-header">Cuenta nueva</h1>
>>>>>>> Matias
        <?php if ($_smarty_tpl->tpl_vars['mensaje']->value != '') {?>
        <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

        <?php }?>
        <div class="col-sm-3  col-md-3"></div>
        <div class="col-sm-6  col-md-6">
<<<<<<< HEAD
<<<<<<< HEAD
        <form method="POST">
=======
        <form id="formID" class="formular" method="POST" action="">
>>>>>>> Matias
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
<<<<<<< HEAD
          <input type="submit" value="Comenzar ahora!" class="form-control btn btn-primary">
=======
        <form id="formID" class="formular" method="POST" action="">
          <fieldset class="form-group">
            <label for="Nickname">Nickname</label>
            <input type="text" id="nickname" name="nickname" class="form-control validate[required,custom[noSpecialCaracters],length[0,30]]" placeholder="Nickname" value=''>
          </fieldset>
          <fieldset class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control validate[required,custom[onlyLetter],length[0,30]] text-input" placeholder="Nombre" value=''>
          </fieldset>
          <fieldset class="form-group">
            <label for="Apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" class="form-control validate[required,custom[onlyLetter],length[0,30]] text-input" placeholder="Apellido" value=''>
          </fieldset>
          <fieldset class="form-group">
            <label for="Password">Contraseña</label>
            <input type="password" id="pass" name="pass" class="form-control validate[required,length[6,30]] text-input" placeholder="Contraseña" value=''>
          </fieldset><fieldset class="form-group">
            <label for="Password">Repetir contraseña</label>
            <input type="password" id="repass" name="repass" class="form-control validate[required,confirm[password]] text-input" placeholder="Repetir contraseña" value=''>
          </fieldset>
          <fieldset class="form-group">
            <label for="Email">Email</label>
            <input type="text" id="email" name="email" class="form-control validate[required,custom[email]] text-input" placeholder="Email" value=''>
          </fieldset>
          <fieldset class="form-group">
            <label for="Remail">Confirmar email</label>
            <input type="text" id="reemail" name="reemail" class="form-control validate[required,confirm[email]] text-input" placeholder="Confirmar email" value=''>
          </fieldset>
          <input type="submit" value="Comenzar ahora!" class="submit form-control btn btn-primary">
>>>>>>> antonio
=======
          <input type="submit" value="Comenzar ahora!" class="submit form-control btn btn-primary">
>>>>>>> Matias
        </form>
        </div>
      </div>
    </div>
  </body>
</html><?php }
}
