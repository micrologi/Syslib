<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title><?php echo $page_title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Senayan, open source library management system" />
<meta name="keywords" content="senayan, library management system, open source, library, free software" />
<link href="template/DesignCreek02/style.css" rel="stylesheet" type="text/css" media="screen" />
	
</head>

<body>

<div id="outer">

	<div id="upbg"></div>

	<div id="inner">
	<!-- <div class="content">
		<div id="top">
			<div class="topright">
			 	<a href="#"><img src="template/DesignCreek02/images/sitemap.png" alt="Sitemap" /></a> ^ 
			 	<a href="#"><img src="images/rss.png" alt="RSS" /></a>				
			</div>
		</div>
		<div id="header"> -->
			
			<div class="headings">
				<!--<h1>DesignCreek02</h1>-->
				<h1><?php echo $sysconf['library_name']; ?></h1>
				<!--<h2>Website Slogan</h2>-->
				<h2><?php echo $sysconf['library_subname']; ?></h2>
			</div>
		
			<div id="splash"></div>
	
			<div id="menu">
			  	<ul>
					<li class="first"><a href="index.php"><?php echo __('Home'); ?></a></li>
					<li><a href="index.php?p=libinfo"><?php echo __('Library Information'); ?></a></li>
					<li><a href="index.php?p=help"><?php echo __('Help on Search'); ?></a></li>
					<li><a href="index.php?p=member"><?php echo __('Member Area'); ?></a></li>
					<li><a href="index.php?p=login"><?php echo __('Librarian LOGIN'); ?></a></li>
					
			<!--	<li><a href="#">link.one</a></li>
					<li><a href="#">link.two</a></li>
					<li><a href="#">link.three</a></li>
					<li><a href="#">link.four</a></li>
      				<li><a href="#">link.five</a></li>
      				<li><a href="#">link.six</a></li> -->
      			</ul>
			</div>	
			
		
		<div id="main">
			<div class="right">
				
				
				<!-- simple search -->
					<form name="simpleSearch" id="simpleSearch" action="index.php" method="get">
					<strong>Quick Search :</strong> <input type="text" name="keywords" id="simpleKeywords" style="width: 95%;" />
					<input type="submit" name="search" value="<?php echo __('Search'); ?>" class="button marginTop" />
					<script type="text/javascript">$('simpleKeywords').focus();</script>
					</form><br />
				<!-- simple search end -->
				
				<!-- language selection -->
                    <h3><?php echo __('Select Language'); ?></h3>
                    <form name="langSelect" action="index.php" method="get">
                    <select name="select_lang" style="width: 99%;" onchange="document.langSelect.submit();">
                    <?php echo $language_select; ?>
                    </select>
                    </form>
                    <br />
                <!-- language selection end -->
                
                <!-- advanced search -->
                    <h3><?php echo __('Advanced Search'); ?></h3>
                    <form name="advSearchForm" id="advSearchForm" action="index.php" method="get">
                    <?php echo __('Title'); ?> :
                    <input type="text" name="title" class="ajaxInputField" /><br />
                    <?php echo __('Author(s)'); ?> :
                    <?php echo $advsearch_author; ?><br />
                    <?php echo __('Subject(s)'); ?> :
                    <?php echo $advsearch_topic; ?><br />
                    <?php echo __('ISBN/ISSN'); ?> :
                    <input type="text" name="isbn" class="ajaxInputField" /><br />
                    <?php echo __('GMD'); ?> :
                    <select name="gmd" class="ajaxInputField" />
                    <?php echo $gmd_list; ?>
                    </select>
                    <?php echo __('Collection Type'); ?> :
                    <select name="colltype" class="ajaxInputField" />
                    <?php echo $colltype_list; ?>
                    </select>
                    <?php echo __('Location'); ?> :
                    <select name="location" class="ajaxInputField" />
                    <?php echo $location_list; ?>
                    </select>
                    <br />
                    <input type="submit" name="search" value="<?php echo __('Search'); ?>" class="button marginTop" />
                    <!-- <input type="button" value="More Options" onclick="" class="button marginTop" /> -->
                    </form>
                    <br />
                    <!-- advanced search end -->
                    
                    <!-- award -->
        <h3>Award</h3>
        <p align="center">
        The Winner in the Category of OSS
        <img src="template/default/media/logo-inaicta.png"
            alt="Indonesia ICT Award 2009" border="0" />
        </p>
    <!-- award -->

    <!-- license -->
        <h3>License</h3>
        <p>
        This Software is Released Under <a href="http://www.gnu.org/copyleft/gpl.html" title="GNU GPL License" target="_blank">GNU GPL License</a>
        Version 3.
        </p>
    <!-- license end -->
               				
			<!--	<div class="nav">
				<h2>Right Column</h2>
				<div class="text">
			You could use this space to display the latest news, a calendar, random photos, the choice is yours, its here if you need it.
				</div>
				<h2>More Links?</h2>
					<ul>
						<li><a href="http://www.openwebdesign.org">OWD</a></li>
						<li><a href="http://www.designcreek.com">DesignCreek</a></li>
						<li><a href="#">Link.three</a></li>
						<li><a href="#">Link.four</a></li>
						
					</ul> -->
				</div>
			</div>
			<div class="left">
			<div id="primarycontent">
			
			<div id="infoBox"><?php echo $info; ?></div><br />
						
				<!-- <h2><a href="#">DesignCreek02</a></h2>
				<h3>Template # 2 for you</h3>
			<div class="img_left"><img src="images/img.jpg" alt="" /></div>				
			<p>Hello, Craig from <a href="http://www.designcreek.com">DesignCreek</a> again.  A colourful template because colour is great. This template is:</p>
		<ul>
			<li>Valid xHTML</li>
			<li>Valid CSS</li>
			<li>Tested in all modern browsers</li>
			<li>A Fixed Width layout</li>
			<li>52kb in size including all images</li>
		</ul>
				<p class="comments"><a href="#">2 Comments</a></p>
				
				<h2><a href="#">Thank you</a></h2>
				<h3>A little request</h3>
				<div class="img_right"><img src="images/img.jpg" alt="" /></div>
<p>There are two image classes to align left or right, you can choose to use them or not.</p>
<p>Since this is being released into the OpenSource community feel free to modify or change whatever you like to suit your own specific needs.</p>	
<p>If you choose to use this template please kindly leave the link at the bottom of the page, I would be most grateful.</p>
<p>I hope you enjoy using this template</p>
				<p class="comments"><a href="#">0 Comments</a></p>-->
<?php echo $main_content; ?>
			</div>
			
		</div>
		
		
		<div id="footer">
			<div class="info">
				&copy; 2006 Your Site<br />
				Site Design - <a href="http://www.designcreek.com">DesignCreek</a>
			</div>
		</div>
	</div>
</body>
</html>
