<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
	<title><?php echo $page_title; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" href="webicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="webicon.ico" type="image/x-icon" />
	<link href="template/core.style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $sysconf['template']['css']; ?>" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/form.js"></script>
	<script type="text/javascript" src="js/gui.js"></script>
	<script type="text/javascript" src="template/metro/slidshow.js"></script>
</head>

<body>
<div id="main">
    <div id="header">
      <a href="index.php"><div id="logo"></div></a>
    	<div id="libname"><?php echo $sysconf['library_name']; ?></div>
        <div id="libsubname"><?php echo $sysconf['library_subname']; ?></div>
        <div id="language">
			<form name="langSelect" action="index.php" method="get">
				<select name="select_lang" style="width:99%;" onchange="document.langSelect.submit();">
					<?php echo $language_select; ?>
				</select>
			</form>
        </div>
    </div>
	
	<div id="nav_left">
		<a href="index.php"><abbr title="<?php echo __('Home'); ?>"><div id="side_home"><img src="template/metro/image/home.png"/></div></abbr></a>
		<a href="index.php?p=help"><abbr title="<?php echo __('Help on Search'); ?>"><div id="side_help"><img src="template/metro/image/help.png"/></div></abbr></a>
		<a href="index.php?p=member"><abbr title="<?php echo __('Member Area'); ?>"><div id="side_member"><img src="template/metro/image/android.png"/></div></abbr></a>
		<a href="index.php?p=libinfo"><abbr title="<?php echo __('Library Information'); ?>"><div id="side_info"><img src="template/metro/image/info.png"/></div></abbr></a>
		<div id="side_award"></div>
		
		<div id="advance-search">
		<h2><?php echo __('Advanced Search'); ?></h2>
			<form name="advSearchForm" id="advSearchForm" action="index.php" method="get">
			<?php echo __('Title'); ?> :<br/>
			<input type="text" name="title" /><br/>
			<?php echo __('Author(s)'); ?> :<br/>
			<?php echo $advsearch_author; ?><br/>
			<?php echo __('Subject(s)'); ?> :<br/>
			<?php echo $advsearch_topic; ?><br/>
			<input type="submit" name="search" value="<?php echo __('Search'); ?>" class="button margin-top" />
			</form>
		</div>
	</div>
	
	<div id="nav_right">
		<div id="side_image">
		
		<div id="divImage">
			<div id="div1"><img src="template/metro/image/1.jpg" align="left" /></div>
			<div id="div2"><img src="template/metro/image/2.jpg" align="left" /></div>
			<div id="div3"><img src="template/metro/image/3.jpg" align="left" /></div>
			<div id="div4"><img src="template/metro/image/4.jpg" align="left" /></div>
			<div id="div5"><img src="template/metro/image/5.jpg" align="left" /></div>
			<div id="div6"><img src="template/metro/image/6.jpg" align="left" /></div>
			<div id="div7"><img src="template/metro/image/7.jpg" align="left" /></div>
			<div id="div8"><img src="template/metro/image/8.jpg" align="left" /></div>
			<div id="div9"><img src="template/metro/image/9.jpg" align="left" /></div>
			<div id="div10"><img src="template/metro/image/10.jpg" align="left" /></div>
		</div>


		<div id="divTrigger">
			<a href="javascript:;" onClick="openContent(this,'div1')" id="firstSlide">&nbsp;</a>
			<a href="javascript:;" onClick="openContent(this,'div2')">&nbsp;</a>
			<a href="javascript:;" onClick="openContent(this,'div3')">&nbsp;</a>
			<a href="javascript:;" onClick="openContent(this,'div4')">&nbsp;</a>
			<a href="javascript:;" onClick="openContent(this,'div5')">&nbsp;</a>
			<a href="javascript:;" onClick="openContent(this,'div6')">&nbsp;</a>
			<a href="javascript:;" onClick="openContent(this,'div7')">&nbsp;</a>
			<a href="javascript:;" onClick="openContent(this,'div8')">&nbsp;</a>
			<a href="javascript:;" onClick="openContent(this,'div9')">&nbsp;</a>
			<a href="javascript:;" onClick="openContent(this,'div10')">&nbsp;</a>
		</div>
		
		</div>
		
		<a href="index.php?p=login"><abbr title="<?php echo __('Librarian LOGIN'); ?>">
		<div id="side_login"><img src="template/metro/image/login.png"/></div></abbr></a>
    </div> 
		
	<div id="welcome"><?php echo $header_info; ?></div>
  
	<div id="simple-search">
		<form action="index.php" accept-charset="UTF-8" method="get" id="search-theme-form">
			<div class="container-inline">
			<div class="form-item" id="edit-search-theme-form-1-wrapper">
				<label for="edit-search-theme-form-1">Search</label>
				<input type="search" maxlength="128" name="keywords" id="edit-search-theme-form-1" size="15" value=""  title="Enter the terms you wish to search for." class="form-text" placeholder="<?php echo __('Simple Search'); ?>"/>
			</div>
				<input type="submit" name="search" id="edit-submit" value="<?php echo __('Search'); ?>"  class="form-submit" />
			</div>
		</form>
	</div>

	<div id="content">
		<div id="contentiner">
			<div id="contentiner2">
			<h1 class="info-box"><?php echo $info; ?></h1>
			<?php echo $main_content; ?>
			</div>
		</div>
	</div>
    
    <div class="clear"></div>

	<div id="footer"><?php echo $sysconf['page_footer']; ?> | Template by <a href="https://www.facebook.com/mas.ido">'ido alit'</div>
	
</div>
</body>
</html>