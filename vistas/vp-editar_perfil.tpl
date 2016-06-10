<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="{$url_base}">
    <meta charset="utf-8">
    
    <title>{$proyecto}</title>
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/perfil-user.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/footer-distributed-with-address-and-phones.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
    <script src="js/jquery.validationEngine.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
    <script type="text/javascript">
    {literal}
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
    {/literal}
    </script>

  </head>

  <body>
    {include file="cabezal.tpl"}
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1 lateral-perfil">
        </div>
        <div class="col-md-3 perfil-1">
          <img class="avatar-user" src="{$usuario_imagen}" width="150" height="150">
          <h2>{$usuario_nick}</h2>
          <br>
          <hr id="side-menu">
          <a href="usuario/perfil/" id="menu-option">Descripción general</a>
          <hr id="side-menu">
          <a href="usuario/edit_profile/" style="color: white; text-decoration: none;">Editar perfil</a>
          <hr id="side-menu">
          <a id="menu-option">Playlists</a>
          <hr id="side-menu">
          <a href="usuario/logout/" id="menu-option">Cerrar sesión</a>
        </div>
        <div class="col-md-7 perfil-2">
          <div class="col-md-11 desc-gral">
            <h3>Editar perfil</h3>
            <hr id="side-perfil">
            <div class="col-md-5 desc-gral-perfil">
              <h4 id="h4-title">Perfil</h4>
              <p>Muestrale al mundo como te llamas y hazte de más amigos con tus mismos gustos musicales.</p>
              <form id="formID" class="formular" method="POST" action="">
                <fieldset class="form-group">
                  <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" value=''>
                </fieldset>
                <fieldset class="form-group">
                  <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido" value=''>
                </fieldset>
                <button type="submit" class="submit form-control btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
                <br>
                <br>
              </form>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 desc-gral-perfil">
              <h4 id="h4-title">Datos de cuenta</h4>
              <h5>Cambiar correo</h5>
              <hr>
              <p>Recuerda de ingresar un correo válido, de lo contrario no podrás validar tu cuenta.</p>
              <form id="formID2" class="formular" method="POST" action="">
              <fieldset class="form-group">
                  <input type="text" id="old-email" name="old-email" class="form-control" placeholder="Email actual" value=''>
                </fieldset>
                <fieldset class="form-group">
                  <input type="text" id="email" name="email" class="form-control validate[required,custom[email]] text-input" placeholder="Nuevo email" value=''>
                  <div id="email_available"></div>
                </fieldset>
                <fieldset class="form-group">
                  <input type="text" id="reemail" name="reemail" class="form-control validate[required,confirm[email]] text-input" placeholder="Confirmar email" value='' autocomplete="off">
                </fieldset>
                <h5>Cambiar contraseña</h5>
                <hr>
                <p>Para cambiar tu contraseña se te enviará un correo de confirmación para que puedas completar esta acción.</p>
                <a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-envelope"></span> Solicitar cambio</a>
                <br>
                <br>
              </form>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  </body>
</html>