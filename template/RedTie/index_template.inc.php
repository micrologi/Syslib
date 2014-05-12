<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="author" content="Wink Hosting (www.winkhosting.com)" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title><?php echo $page_title; ?></title>
	<?php echo $metadata; ?>
    <!-- script css standar senayan untuk porting -->
	<link href="template/core.style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $sysconf['template']['css']; ?>" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/prototype.js"></script>
	<script type="text/javascript" src="js/form.js"></script>
	<script type="text/javascript" src="js/gui.js"></script>
	<!-- end of script css standar senayan untuk porting -->
</head>
<body>
	<div id="page" align="center">
		<div id="content" style="width:800px">
			<div id="logo">
				<div style="margin-top:70px" class="whitetitle">RedTie</div>
			</div>
			<div id="topheader">
				<div align="left" class="bodytext">
					<br />
					<!--<strong>Your Company Name</strong><br />
					Evergreen Terrace 742<br />
					Kansas Missouri<br />
					Phone: 432-653-3121<br />
					sales@thetiecompany.com -->
					<strong><?php echo $sysconf['library_name']; ?></strong><br />
				    <?php echo $sysconf['library_subname']; ?> 
				</div>
				<!-- <div id="toplinks" class="smallgraytext">
					<a href="#">Home</a> | <a href="#">Sitemap</a> | <a href="#">Contact Us</a>
				</div> -->
			</div>
			<div id="menu">
				<div align="right" class="smallwhitetext" style="padding:9px;">
					<!-- <a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Our Services</a> | <a href="#">Contact Us</a> -->
					<a href="index.php"><?php echo __('Home'); ?></a> | <a href="index.php?p=libinfo"><?php echo __('Library Information'); ?></a> | <a href="index.php?p=help"><?php echo __('Help on Search'); ?></a> | <a href="index.php?p=member"><?php echo __('Member Area'); ?></a>
				</div>
			</div>
				<div id="submenu">
				<div align="right" class="smallgraytext" style="padding:9px;">
					<a href="index.php?p=login"><?php echo __('Librarian LOGIN'); ?></a>
				</div>
			</div>
			<div id="contenttext">
				<div style="padding:10px">
					<!-- <span class="titletext">Welcome to RedTie!</span> -->
					<!-- 
					<strong>Hi! This is my third design for OSWD, with CSS and XHTML 1.0 Transitional Validation. You can do whatever you want with this template, just keep the Hosting Colombia link	at the bottom. Enjoy!			  </strong><br />
					<br />
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur id est   tincidunt nisl pellentesque tincidunt. Donec in mauris. Mauris neque magna,   consectetuer id, malesuada vitae, tincidunt sit amet, mi. Aliquam lacinia.   Suspendisse potenti. Proin justo lorem, rutrum ac, facilisis in, malesuada sed,   ligula. Mauris lobortis lacus at nibh. Aenean vitae odio vel odio placerat   hendrerit. Suspendisse lacus lacus, tempor id, pharetra eget, ornare sit amet,   pede. Sed aliquet, justo ac elementum pretium, arcu leo placerat est, a luctus   purus diam eget arcu. Nam augue diam, mollis a, scelerisque eget, aliquet   condimentum, pede. Vestibulum tristique lectus sed augue.<br /><br />
					Aenean ut mauris luctus mauris interdum convallis. Nunc vestibulum sodales nulla. Nulla vitae massa. Maecenas vel tellus vitae elit mattis adipiscing. In pulvinar felis sed est. Mauris non mi. Duis ultrices dolor ut orci. Quisque lacinia arcu et purus. Sed euismod metus nec augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc dolor leo, aliquam a, placerat sit amet, accumsan eget, dolor. Sed lacinia augue in magna. Fusce sed enim. Vestibulum et mauris. Phasellus in lectus. Pellentesque eu elit in dolor ullamcorper sodales. Vestibulum interdum ornare ligula. Mauris felis odio, rhoncus sed, adipiscing fermentum, tincidunt eu, metus. Suspendisse viverra rhoncus purus. -->
					<div class="bodytext" style="padding:12px;" align="justify">
						<?php echo $header_info; ?><br />
						<div id="infoBox"><?php echo $info; ?></div><br />
						<?php echo $main_content; ?>
					</div>
				</div>
			</div>
			<div id="leftpanel">
				<div align="justify" class="graypanel bodytext">

				<!-- <div align="justify" class="graypanel">
					<span class="smalltitle">News</span><br /><br />
					<span class="smallredtext">September 27, 2006</span><br />
					<span class="bodytext">Curabitur arcu tellus, suscipit in, aliquam eget, ultricies id, sapien. Nam est.</span><br />
					<a href="#" class="smallgraytext">More...</a><br /><br />
					<span class="smallredtext">September 27, 2006</span><br />
					<span class="bodytext">Curabitur arcu tellus, suscipit in, aliquam eget, ultricies id, sapien. Nam est.</span><br />
					<a href="#" class="smallgraytext">More...</a><br /><br />
					<span class="smallredtext">September 27, 2006</span><br />
					<span class="bodytext">Curabitur arcu tellus, suscipit in, aliquam eget, ultricies id, sapien. Nam est.</span><br />
					<a href="#" class="smallgraytext">More...</a><br /><br />
				</div> -->
			
					<!-- language selection -->
					<p><span class="smalltitle"><?php echo __('Select Language'); ?></span>
					<form name="langSelect" action="index.php" method="get">
					<select name="select_lang" style="width: 90%;" onchange="document.langSelect.submit();">
					<?php echo $language_select; ?>
					</select>
					</form>
					<!-- language selection end -->

					<!-- simple search -->
					<p><span class="smalltitle"><?php echo __('Simple Search'); ?></span>
					<form name="simpleSearch" action="index.php" method="get">
					<input type="text" name="keywords" style="width: 90%;" /><br />
					<input type="submit" name="search" value="<?php echo __('Search'); ?>" class="button marginTop" />
					</form>
					<!-- simple search end -->

					<!-- advanced search -->
					<p><span class="smalltitle"><?php echo __('Advanced Search'); ?></span>
					<form name="advSearchForm" id="advSearchForm" action="index.php" method="get">
					<div><?php echo __('Title'); ?> :</div>
					<input type="text" name="title" class="ajaxInputField" /><br />
					<div><?php echo __('Author(s)'); ?>:</div>
					<?php echo $advsearch_author; ?><br />
					<div><?php echo __('Subject(s)'); ?>:</div>
					<?php echo $advsearch_topic; ?><br />
					<div><?php echo __('ISBN/ISSN'); ?>:</div>
					<input type="text" name="isbn" class="ajaxInputField" /><br /><p>
					<div><?php echo __('GMD'); ?> :</div>
					<select name="gmd" class="ajaxInputField" />
					<?php echo $gmd_list; ?>
					</select>
					<?php echo __('Collection Type'); ?> :
					<select name="colltype" class="ajaxInputField" />
					<?php echo $colltype_list; ?>
					</select>
					<div><?php echo __('Location'); ?> :</div>
					<select name="location" class="ajaxInputField" />
					<?php echo $location_list; ?>
					</select>
					<br />
					<input type="submit" name="search" value="<?php echo __('Search'); ?>" class="button marginTop" />
					<!-- <input type="button" value="More Options" onclick="" class="button marginTop" /> -->
					</form>
					<!-- advanced search end -->

					<!-- license -->
					<span class="smalltitle">License</span>
					<p>
					This Software is Released Under <a href="http://www.gnu.org/copyleft/gpl.html" title="GNU GPL License" target="_blank">GNU GPL License</a>
					Version 3.
					</p>
					<!-- license end -->

					<!-- award -->
					<span class="smalltitle">Award</span>
					<p align="center">
					The Winner in the Category of OSS
					<img src="template/default/media/logo-inaicta.png"
						alt="Indonesia ICT Award 2009" border="0" />
					<br />
					</p>
					<!-- award -->

					<!-- w3c validate -->
					<span class="smalltitle">Validated</span>
					<p align="center">
					<a href="http://validator.w3.org/check?uri=referer"><img
						src="template/valid-xhtml10.png"
						alt="Valid XHTML 1.0 Transitional" border="0" /></a>
					<br />
					<img src="template/valid-css.png" alt="Valid CSS" />
					</p>
					<!-- w3c validate end -->
				</div>
			</div>
			<div id="footer" class="smallgraytext">
				<!-- <a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Our Services</a> | <a href="#">Contact Us</a>
				| --> Your Company Name 
				&copy; 2007 | Ported to Senayan By Senayan Developer Community. 
			</div>
		</div>
	</div>
</body>
</html>
