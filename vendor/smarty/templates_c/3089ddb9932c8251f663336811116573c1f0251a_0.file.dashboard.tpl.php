<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.29, created on 2016-05-25 23:41:29
=======
/* Smarty version 3.1.29, created on 2016-05-26 18:36:21
>>>>>>> antonio
=======
/* Smarty version 3.1.29, created on 2016-05-26 18:36:21
>>>>>>> Matias
  from "C:\wamp\www\obligatorio_php\vistas\dashboard.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_57463829df6781_28601696',
=======
  'unifunc' => 'content_57474225d5cad2_31788312',
>>>>>>> antonio
=======
  'unifunc' => 'content_57474225d5cad2_31788312',
>>>>>>> Matias
  'file_dependency' => 
  array (
    '3089ddb9932c8251f663336811116573c1f0251a' => 
    array (
      0 => 'C:\\wamp\\www\\obligatorio_php\\vistas\\dashboard.tpl',
<<<<<<< HEAD
<<<<<<< HEAD
      1 => 1464204150,
=======
      1 => 1464287778,
>>>>>>> antonio
=======
      1 => 1464287778,
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
function content_57463829df6781_28601696 ($_smarty_tpl) {
=======
function content_57474225d5cad2_31788312 ($_smarty_tpl) {
>>>>>>> antonio
=======
function content_57474225d5cad2_31788312 ($_smarty_tpl) {
>>>>>>> Matias
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
    

    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.4.2.min.js"><?php echo '</script'; ?>
>




  </head>

  <body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<<<<<<< HEAD
<<<<<<< HEAD
    
   <table align="center">
   <tr>
   
    <td id="div-btn1">
    <br>

   <?php
=======
    <div class="row">
        <div class="col-md-4 playlist">
          <table align="center">
            <tr>
             
              <td id="div-btn1">
              <br>

             <?php
>>>>>>> antonio
=======
    <div class="row">
        <div class="col-md-4 playlist">
          <table align="center">
            <tr>
             
              <td id="div-btn1">
              <br>

             <?php
>>>>>>> Matias
$_from = $_smarty_tpl->tpl_vars['datos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_videos_0_saved_item = isset($_smarty_tpl->tpl_vars['videos']) ? $_smarty_tpl->tpl_vars['videos'] : false;
$_smarty_tpl->tpl_vars['videos'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['videos']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['videos']->value) {
$_smarty_tpl->tpl_vars['videos']->_loop = true;
$__foreach_videos_0_saved_local_item = $_smarty_tpl->tpl_vars['videos'];
?>





<<<<<<< HEAD
<<<<<<< HEAD
    <ul>   
    <a class="btn btn-default" href="javascript:cargarvideo('<?php echo $_smarty_tpl->tpl_vars['videos']->value['id']['videoId'];?>
=======
              <ul>   
              <a class="btn btn-default" href="javascript:cargarvideo('<?php echo $_smarty_tpl->tpl_vars['videos']->value['id']['videoId'];?>
>>>>>>> Matias
')" ><span class="glyphicon glyphicon-play"></span> <?php echo $_smarty_tpl->tpl_vars['videos']->value['snippet']['title'];?>
 </a>    
              </ul>



<<<<<<< HEAD
  <?php
=======
              <ul>   
              <a class="btn btn-default" href="javascript:cargarvideo('<?php echo $_smarty_tpl->tpl_vars['videos']->value['id']['videoId'];?>
')" ><span class="glyphicon glyphicon-play"></span> <?php echo $_smarty_tpl->tpl_vars['videos']->value['snippet']['title'];?>
 </a>    
              </ul>



            <?php
>>>>>>> antonio
=======
            <?php
>>>>>>> Matias
$_smarty_tpl->tpl_vars['videos'] = $__foreach_videos_0_saved_local_item;
}
if ($__foreach_videos_0_saved_item) {
$_smarty_tpl->tpl_vars['videos'] = $__foreach_videos_0_saved_item;
}
?>
<<<<<<< HEAD
<<<<<<< HEAD
  
  </td>
  <td >
  <iframe id="videoplay" width="420" height="315" FRAMEBORDER ="0" src=""></iframe>
  </td>
  </tr>
    </table>
=======
            
            </td>
            </tr>
            </table>
        </div>
        <div class="col-md-7">
        <table>
        <tr>
        <td >
          <iframe id="videoplay" width="420" height="315" FRAMEBORDER ="0" src=""></iframe>
          </td>
          </tr>
            </table>
        </div>
    </div> 
   
  
>>>>>>> antonio
=======
            
            </td>
            </tr>
            </table>
        </div>
        <div class="col-md-7">
        <table>
        <tr>
        <td >
          <iframe id="videoplay" width="420" height="315" FRAMEBORDER ="0" src=""></iframe>
          </td>
          </tr>
            </table>
        </div>
    </div> 
   
  
>>>>>>> Matias

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript">
         
      function cargarvideo(id){
        document.getElementById("videoplay").src="http://www.youtube.com/embed/"+ id +"?autoplay=1&controls=0&modestbranding=1&rel=1&fs=0&frameborder=”0″&showinfo=0&disablekb=1&iv_load_policy=3&enablejsapi=1&rel=1&fs=0&frameborder=”0″&disablekb=1&iv_load_policy=3";
      }

      <?php echo '</script'; ?>
>
  </body>
</html>

<?php }
}
