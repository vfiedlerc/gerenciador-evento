<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$self = WEB_ROOT . 'admin/index.php';
?>
<!DOCTYPE html>
<html>
<head>
<?php include('head.php'); ?>
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo WEB_ROOT; ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-lg"><b>Gerenciador de evento</b></span> </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <?php include('nav.php'); ?>
    </nav>
  </header>
 
  <aside class="main-sidebar">
   <?php include('sidebar.php'); ?>
  </aside>

  <div class="content-wrapper">
   
    <section class="content-header">
      <h1> Gerenciador de eventos <small>Gerencie seus eventos facilmente.</small> </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Calendario</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      
	  <div class="row">
	  	<div class="col-md-12">
		<?php include('messages.php'); ?>
		</div>
	  </div>
	  
	  <div class="row">
	  	<?php
			require_once $content;	 
		?>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
		<?php include('footer.php'); ?>
	</footer>
</div>
<!-- ./wrapper -->
</body>
</html>
