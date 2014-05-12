<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo $page_title; ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="webicon.ico" type="image/x-icon" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $sysconf['template']['css']; ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/gui.js"></script>
</head>

<body>
<div id="main">
    <div id="header">
      <a href="index.php"><div id="logo"></div></a>
    	<div id="libname"><?php echo $sysconf['library_name']; ?></div>
        <div id="libsubname"><?php echo $sysconf['library_subname']; ?></div>
        </div>
  	<div id="login">
  <?php echo $main_content; ?>
	</div>
  <div id="footer"><?php echo $sysconf['page_footer']; ?> | Template by <a href="https://www.facebook.com/mas.ido">'ido alit'</div>
</div>
</body>
</html>
