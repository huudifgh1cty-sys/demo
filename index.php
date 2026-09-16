<!DOCTYPE >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css.css" />
<title>3D Phone Store</title>
<link rel="icon" href="image/phonestore.png">
</head>
<style>
* {
  box-sizing: border-box;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}
/*---------dau trang--------*/
.dautrang {
	top:0px;
	position: relative;
	color: black;
}
.dautrang a {
	width:100%;
}
</style>
<body>
<?php
	include('config.php');
	include('modules/menu.php');
	?>
	<!-tren dau trang->
	<br/>
	<div class="dautrang">
       <a href="index.php?xem=trangchu"><img src="image/bnlogo.png" alt="Trulli" width="100%"></a>
  	</div>
	<?php
	include('modules/content.php');
	include('modules/footer.php');
?>
</body>
</html>