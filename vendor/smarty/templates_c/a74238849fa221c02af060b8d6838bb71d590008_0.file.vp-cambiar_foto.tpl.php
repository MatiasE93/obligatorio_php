<?php
/* Smarty version 3.1.29, created on 2016-07-12 00:18:38
  from "/Applications/MAMP/htdocs/obligatorio_php/vistas/vp-cambiar_foto.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57841b3e345324_03265246',
  'file_dependency' => 
  array (
    'a74238849fa221c02af060b8d6838bb71d590008' => 
    array (
      0 => '/Applications/MAMP/htdocs/obligatorio_php/vistas/vp-cambiar_foto.tpl',
      1 => 1468269210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
  ),
),false)) {
function content_57841b3e345324_03265246 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta charset="utf-8">
    
    <title><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/perfil-user.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/footer-distributed-with-address-and-phones.css">

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/funciones.js"><?php echo '</script'; ?>
>

  </head>

  <body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1 lateral-perfil">
        </div>
        <div class="col-md-3 perfil-1">
          <img class="avatar-user" src="<?php echo $_smarty_tpl->tpl_vars['nickvista']->value->getImg();?>
" width="150" height="150">
          <h2 id="h2-title"><?php echo $_smarty_tpl->tpl_vars['usuario_nick']->value;?>
</h2>
          <br>
          <hr id="side-menu">
          <a href="usuario/my_profile/" id="menu-option">Descripción general</a>
          <hr id="side-menu">
          <a href="usuario/edit_profile/" style="color: white; text-decoration: none;">Editar perfil</a>
          <hr id="side-menu">
          <a id="menu-option">Playlists</a>
          <hr id="side-menu">
          <a href="usuario/followers/" id="menu-option">Siguiendo/Seguidores</a>
          <hr id="side-menu">
          <a href="usuario/logout/" id="menu-option">Cerrar sesión</a>
        </div>
        <div class="col-md-7 perfil-2">
          <div class="col-md-11 desc-gral">
            <?php if ($_smarty_tpl->tpl_vars['msgerror']->value != '') {?>
            <div class="col-md-12 error-message"><br><?php echo $_smarty_tpl->tpl_vars['msgerror']->value;?>
</div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['msgok']->value != '') {?>
            <div class="col-md-12 ok-message"><br><?php echo $_smarty_tpl->tpl_vars['msgok']->value;?>
</div>
            <?php }?>
            <h3 id="h3-title">Cambiar avatar de perfil</h3>
            <hr id="side-perfil">
            <div class="col-md-12 extra-perfil">
              <h4 id="h4-title">Imagen</h4>
              <h5 style="text-align: center;">Avatar actual</h5>
              <img class="show-perfil" src="<?php echo $_smarty_tpl->tpl_vars['nickvista']->value->getImg();?>
" width="100" height="100">
              <br>
              <form enctype="multipart/form-data" action="" method="POST">
                <input name="uploadedfile" type="file">
                <input type="submit" value="Subir archivo">
              </form> 
              <br>
            </div>
          </div>
        </div>
        <div class="col-md-1 lateral-perfil">
        </div>
      </div>
    </div>
    <footer class="footer-distributed">
      <div class="footer-left"> 
        <br>
        <a id="copyright">Copyrighterino</a>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>

  </body>
</html><?php }
}
