<?php
require_once './library/config.php';
require_once './library/functions.php';

$errorMessage = '&nbsp;';
if (isset($_POST['name']) && isset($_POST['pwd'])) {
	$result = doLogin();
	if ($result != '') {
		$errorMessage = $result;
	}
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>dist/css/AdminLTE.css">
    
	<link href="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>
	
	<link href="<?php echo WEB_ROOT; ?>library/spry/passwordvalidation/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo WEB_ROOT; ?>library/spry/passwordvalidation/SpryValidationPassword.js" type="text/javascript"></script>

   
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#">Gerenciador de evento online</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">SignIn para comecar a usar</p>
		<?php if($errorMessage != "&nbsp;" ) {?>
		<div class="alert alert-danger alert-dismissable">
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Alert!</h4><?php echo $errorMessage; ?>
		</div>
		<?php } ?>
        <form action="" method="post">
          <div class="form-group has-feedback">
		  	<span id="sprytf_name"> 
            <input type="text" name="name" class="form-control" placeholder="Username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
			<span class="textfieldRequiredMsg">Nome de usuario e requerido</span>
			<span class="textfieldMinCharsMsg">Nome de usuario precisa ser no maximo 4 caracteres</span>
			</span>
          </div>
          <div class="form-group has-feedback">
		  	<span id="sprytf_pwd"> 
            <input type="password" name="pwd" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
			<span class="passwordRequiredMsg">Senha e necessaria.</span>
			<span class="passwordMinCharsMsg">Voce precisa especificar pelo menos 6 caracteres.</span>
			<span class="passwordMaxCharsMsg">Voce precisa especifiar no maximo 10 caracteres.</span>
			</span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              
            </div>
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">SignIn</button>
            </div>
          </div>
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

  </body>
<script>
<!--
var sprytf_name = new Spry.Widget.ValidationTextField("sprytf_name", "none", {minChars:4, validateOn:["blur", "change"]});
var sprytf_pwd = new Spry.Widget.ValidationPassword("sprytf_pwd", {minChars:4, maxChars: 12, validateOn:["blur", "change"]});
//-->
</script>
</html>
