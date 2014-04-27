<?php
	include 'include/config.php';

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>e-Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<br><br>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="./">e-Shop</a>
		
    <ul id="topMenu" class="nav pull-right">
    	<li class=""><a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-primary">Registro</span></a></li>
	 <li class="">
	 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Login Block</h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm">
			  <div class="control-group">								
				<input type="text" id="inputEmail" placeholder="Email">
			  </div>
			  <div class="control-group">
				<input type="password" id="inputPassword" placeholder="Password">
			  </div>
			</form>		
			<button type="submit" class="btn btn-success">Sign in</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		  </div>
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li><a href="belleza"> Belleza</a></li>
			<li><a href="electrodomesticos"> Electrodom&eacute;sticos</a></li>
			<li><a href="joyeria"> Joyer&iacute;a</a></li>
			<li><a href="libros"> Libros</a></li>
			<li><a href="moda"> Moda</a></li>
			<li><a href="musica"> M&uacute;sica</a></li>
			<li><a href="oficina"> Oficina</a></li>
			<li><a href="perfumes"> Perfumes</a></li>
			<li><a href="tecnologia"> Tecnolog&iacute;a</a></li>
			<li><a href="vinos"> Vinos</a></li>
		</ul>
		<br/>
			<div class="thumbnail">
				<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
			  </div>
	</div>
<!-- Sidebar end=============================================== -->
		<div class="span9">
			<div>
				<h1 class="text-info">Libros</h1>
			</div>
		</div>
			<ul class="thumbnails">
			<?php
				$sql = 'SELECT * FROM articulo WHERE idcategoria = 4 ORDER BY fecha_registro';
				$result = mysql_query($sql) or die(mysql_error());
				while ($rows = mysql_fetch_array($result)) {
			?>
					<li class="span3">
				  		<div class="thumbnail">
							<a  href="product_details.html"><img src="<?php echo $rows[8]; ?>" alt=""/></a>
							<div class="caption">
					  			<h5><?php echo $rows[2]; ?></h5>				 
					  			<h4 style="text-align:center">
					  				<a class="btn btn-primary" href="">$<?php echo $rows[5]; ?></a>
					  			</h4>
							</div>
				  		</div>
					</li>
			<?php
				}
			?>
			</ul>	

		</div>
		</div>
	</div>
</div>

<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
</body>
</html>