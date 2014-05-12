<?php
/*-------------------------------------------------------------------- 
	
	Theme Name	: Arjava 
	Version		: 1.0.0
	Author		: Eddy Subratha
	Tags		: arjava, slims, themes, template
	Copyright	: (c) 2011 Eddy Subratha - eddy.subratha{at}gmail.com
	
---------------------------------------------------------------------*/

// be sure that this file not accessed directly
if (!defined('INDEX_AUTH')) {
    die("can not access this file directly");
} elseif (INDEX_AUTH != 1) {
    die("can not access this file directly");
}

$base_url = "http://".$_SERVER['HTTP_HOST']. preg_replace('@/+$@','',dirname($_SERVER['SCRIPT_NAME'])).'/';


// menu list
// if you want to add some menu, add array item below
$menus['home'] = array('url' => 'index.php', 'text' => __('Home'));
$menus['libinfo'] = array('url' => 'index.php?p=libinfo', 'text' => __('Library Information'));
$menus['help'] = array('url' => 'index.php?p=help', 'text' => __('Help on Search'));
$menus['member'] = array('url' => 'index.php?p=member', 'text' => __('Member Area'));
$menus['login'] = array('url' => 'index.php?p=login', 'text' => __('Login'));
// $menus['guestbook'] = array('url' => 'index.php?p=guestbook', 'text' => __('Guestook'));

$p = 'home';
if (isset($_GET['p'])) {
	if ($_GET['p'] == 'libinfo') {
		$p = 'libinfo';
	} elseif ($_GET['p'] == 'help') {
		$p = 'help';
	} elseif ($_GET['p'] == 'guestbook') {
		$p = 'guestbook';		
		/* duoh ... need include this file to make this template work */
		include LIB_DIR.'content.inc.php';
		$content = new content();		
	} elseif ($_GET['p'] == 'member') {
		$p = 'member';
		/* duoh ... need include this file to make this template work */
		include LIB_DIR.'content.inc.php';
		$content = new content();		
		echo '	<script type="text/javascript" src="js/jquery.js"></script>
				<script type="text/javascript" src="js/form.js"></script>
				<script type="text/javascript" src="js/gui.js"></script>';
	} elseif ($_GET['p'] == 'login') {
		$p = 'login';
	}
}

/* not again, one more time ... need include this file to make this template work ... duoh */
if(isset($_GET['title']) || isset($_GET['author']) || isset($_GET['subject'])){
	include LIB_DIR.'content.inc.php';
	$content = new content();		
}

/* not again, one more time ... need include this file to make this template work ... duoh */
if(isset($_GET['page'])){
	include LIB_DIR.'content.inc.php';
	$content = new content();		
}

if($header_info == '')
{
	$header_info = __('<p>Welcome To <strong>Senayan Library\'s</strong> Online Public Access Catalog (OPAC). Use OPAC to search collection in our library.');
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<title><?php echo $page_title; ?></title>
<meta charset="utf-8" />
<meta name="description" content="Grid base template for Slims - Senayan Library Automation System, a free and open source application for your library. It's free and easy to use. Made with love by Eddy Subratha">
<meta name="keywords" content="slims, senayan, library, automation, system, opensource, foss, subratha, eddy, book, collection">
<link rel="shortcut icon" href="webicon.ico" type="image/x-icon" />
<link href="<?php echo $sysconf['template']['css']; ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo $sysconf['template']['css']; ?>/../assets/themes/jquery-ui.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $sysconf['template']['css']; ?>/../assets/themes/ui.selectmenu.css" rel="stylesheet" type="text/css" />

</head>
<body>
<header>
	<div class="container_16">
		<div id="language">
			<div class="language">&nbsp;</div>
			<form name="langSelect" action="index.php" method="get">
				<select name="select_lang" id="lang"  class="customicons" onchange="document.langSelect.submit();">
				<?php echo $language_select; ?>
				</select>
			</form> 		
		</div>
		<div class="grid_6" id="header">
			<h1><?php echo $sysconf['library_name']; ?></h1>
			<?php
				if(trim($sysconf['library_subname']) != '')
				{
					echo '<div class="subtitle">'.$sysconf['library_subname'].'</div>';
				}
			?>
		</div>
		<ul class="menu" id="menu">
			<?php 			
			foreach ($menus as $path => $menu) 
			{
				if($path == 'member')
				{
			?>
				<li><a href="<?php echo $menu['url']; ?>" title="<?php echo $menu['text']; ?>" <?php if ($p == $path) {echo ' class="active member"';} else { echo ' class="member"'; } ?>><span><?php echo $menu['text']; ?></span></a></li>			
			<?php	
				} else {
			?>
				<li><a href="<?php echo $menu['url']; ?>" title="<?php echo $menu['text']; ?>" <?php if ($p == $path) {echo ' class="active"';} ?>><span><?php echo $menu['text']; ?></span></a></li>
			<?php 
				}
			} ?>
		</ul>
	</div>
</header>
<div class="container_16" id="content">
	<?php if(!isset($_GET['p'])) { ?>
	<div id="greeting" class="grid_16">
		<?php echo $header_info; ?>
	</div>
	<h2 class="grid_16">
		<?php 
			if(isset($_GET['search']))
			{
				echo __('Search Results');
			} else {
				echo __('Latest Collections');
			}
		?>
	</h2>
	<a href="<?=$base_url?>index.php?resultXML=true" target="_blank" class="xmlfront">&nbsp;</a>
	<?php } ?>	
	<div class="collections grid_16">
		<?php 
		/* hide if this condition is true */
		if(!isset($_GET['p'])) : 
		?>
		<div class="search grid_8">
		<div class="type">&nbsp;</div>
	    <form action="index.php" method="get">
	    	<ul class="xform">
	    		<li>
	    			<label><?php echo __('Title'); ?></label>
	    			<input type="text" name="title" />
	    		</li>
				<li>
					<label><?php echo __('Author'); ?></label>
					<?php echo $advsearch_author; ?>
				</li>
			</ul>
			<input type="submit" name="search" style="display:none;" value="<?php echo __('Search'); ?>" />
		</form>
		<a href="#?w=400" class="poplight" rel="popup_name">Advance Search</a>
		<div id="popup_name" class="popup_block">
		<p><?php echo __('Advance Search'); ?></p>	
		<hr/>
		<form action="index.php" method="get">
			<div class="advance">
			<ul> 
	    		<li>
	    			<div class="label"><?php echo __('Title'); ?></div>
	    			<input type="text" name="title" />
	    		</li>
				<li>
					<div  class="label"><?php echo __('Author'); ?></div>
					<?php echo $advsearch_author; ?>
				</li>
				<li>
					<div  class="label"><?php echo __('Subject'); ?></div>
					<?php echo $advsearch_topic; ?>
				</li>
			    <li>
			    	<div  class="label"><?php echo __('ISBN/ISSN'); ?></div>
			    	<input type="text" name="isbn" />
			    </li>
			    <li>
				    <div  class="label"><?php echo __('GMD'); ?></div>
				    <select name="gmd" id="gmd">
				    	<?php echo $gmd_list; ?>
				    </select>
			    </li>
			    <li>
				    <div  class="label"><?php echo __('Collection Type'); ?></div> 
				    <select name="colltype" id="colltype">
				    	<?php echo $colltype_list; ?>
				    </select>
			    </li>
			    <li>
				    <div class="label"><?php echo __('Location'); ?></div>
				    <select name="location" id="loc">
				    	<?php echo $location_list; ?>
				    </select>
				</li>
				<li><input type="submit" name="search" value="<?php echo __('Search'); ?>" /></li>
	    	</ul>
	    	</div>		    
		</form>
		</div>
		</div>
		<?php endif; ?>
		<?php echo str_replace('w=42','w=175',$main_content); ?>
	</div>
	<br class="clear" />
</div>
<section>
	<div class="container_12">
		<?php
		/*-------------------------------------------------------------------------------/
			You may custom your own information here.
			Please create it before on System > Content and call the unique path here 
		/--------------------------------------------------------------------------------*/
		$i=0;
		$path = array('membership','opening', 'contact'); /* change as needed */
		$length = count($path)-1;
        foreach($path as $path) :		        				        
        	$content_data = $content->get($dbs, $path);
        	if($i == $length) 
        	{
        		$css_last = ' last';
        	} else {
        		$css_last = '';
        	}
		?>			
			<div class="grid_4 <?=$css_last?>">
				<div class="info_title"><?php echo $content_data['Title'];?></div>
				<p>
					<?php echo $content_data['Content']; ?>
				</p>		
			</div>
		<?php $i++; endforeach; ?>
	</div>

</section>
<br class="clear"/>
<footer>
	<div class="container_16">This software and this template are released Under GNU GPL License Version 3. Themes Designed By Eddy Subratha</div>
<div class="winner">&nbsp;</div>

</footer>
<script src="<?php echo $sysconf['template']['css']; ?>/../assets/scripts/jquery-1.5.1.min.js" type="text/javascript" language="javascript" charset="utf-8"></script>
<script src="<?php echo $sysconf['template']['css']; ?>/../assets/scripts/jquery-ui.min.js" type="text/javascript" language="javascript" charset="utf-8"></script>
<script src="<?php echo $sysconf['template']['css']; ?>/../assets/scripts/ui.selectmenu.js" type="text/javascript" language="javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript">
$(function(){
	$('#lang').selectmenu({
				style: 'dropdown'
			});	

	$('#gmd').selectmenu({
				style: 'dropdown',
				maxHeight: 150
			});	

	$('#colltype').selectmenu({
				style: 'dropdown'
			});	

	$('#loc').selectmenu({
				style: 'dropdown'
			});	
			
	/* for guestbook plugin */		
	$('#pekerjaan').selectmenu({
				style: 'dropdown',
				maxHeight: 150
			});	

});	
</script>

</body>
</html>

