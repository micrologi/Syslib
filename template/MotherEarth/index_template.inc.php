<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>

<!--
Copyright: Darren Hester 2006, http://www.designsbydarren.com
License: Released Under the 'Creative Commons License', 
http://creativecommons.org/licenses/by-nc/2.5/
-->

<head>

<!-- Meta Data -->
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<meta name='description' content='Short description of your site here.' />
<meta name='keywords' content='keywords, go, here, seperated, by, commas' />
<!-- script css standar senayan untuk porting -->
<link href="template/core.style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $sysconf['template']['css']; ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/gui.js"></script>
<!-- end of script css standar senayan untuk porting -->

<!-- Site Title -->
<!-- <title>Mother Earth | 3-Column Fixed Width CSS Design Template</title> -->

<!-- site title for Senayan -->
<title><?php echo $page_title; ?></title>

<!-- Link to Style External Sheet -->
<link href='style.css' type='css' rel='stylesheet' />

</head>


<body>

<div id='page_wrapper'>

  <div id='page_header'>
    <!-- <h1>Mother Earth</h1> -->
    <!-- Main Title -->
    <h1><?php echo $sysconf['library_name']; ?></h1>
    <!-- <h2>3-Column Fixed Width CSS Design Template</h2> -->
    <!-- Sub Title -->
    <h2><?php echo $sysconf['library_subname']; ?></h2>
  </div>
  
  <div id='menu_bar'>
    <div id='navcontainer'>
      <ul id='navlist'>
      <!-- <li><a href='#'>Item one</a></li>
      <li><a href='#'>Item two</a></li>
      <li><a href='#'>Item three</a></li>
      <li><a href='#'>Item four</a></li>
      <li><a href='#'>Item five</a></li> -->
      <li><a href="index.php"><?php echo __('Home'); ?></a></li>
      <li><a href="index.php?p=libinfo"><?php echo __('Library Information'); ?></a></li>
      <li><a href="index.php?p=help"><?php echo __('Help on Search'); ?></a></li>
      <li><a href="index.php?p=member"><?php echo __('Member Area'); ?></a></li>
      <li><a href="index.php?p=login"><?php echo __('Librarian LOGIN'); ?></a></li>
      </ul>
    </div>
  </div>

  <div id='content_wrapper'>

    <div id='left_side'>
      
      <!-- <h3>Recommended</h3>
      
      <div id='linkcontainer'>
        <ul id='linklist'>
        <li><a href='#'>Item one</a></li>
        <li><a href='#'>Item two</a></li>
        <li><a href='#'>Item three</a></li>
        <li><a href='#'>Item four</a></li>
        <li><a href='#'>Item five</a></li>
        <li><a href='#'>Item six</a></li>
        <li><a href='#'>Item seven</a></li>
        <li><a href='#'>Item eight</a></li>
        <li><a href='#'>Item nine</a></li>
        <li><a href='#'>Item ten</a></li>                              
        </ul>
      </div>
      
      <h3>Left Side</h3>
      
      <p>
      <a href='#'>Lorem ipsum</a> his ut explicari vituperata adversarium, 
      semper commune mediocrem eos ex. Vim solet consul vocibus ei. Facer 
      fuisset officiis vel ex, at vix <a href='#'>partem tractatos</a>, habeo 
      <a href='#'>maluisset</a> id mei. Ad duo sale munere facete. Ex vidit 
      brute feugiat qui, mei ullum zzril aliquam id, est ei tollit <a href='#'>
      munere persecuti</a>. Ius cu gloriatur constituto neglegentur, quem 
      scripta vulputate ne quo, qui in quem accumsan. Ad nominati sententiae 
      usu, <a href='#'>sit te commodo minimum</a>.
      </p> -->
      
      <!-- language selection -->
				<div class="header"><?php echo __('Select Language'); ?></div>
				<form name="langSelect" action="index.php" method="get">
				<select name="select_lang" style="width: 100%;" onchange="document.langSelect.submit();">
				<?php echo $language_select; ?>
				</select>
				</form>
			<!-- language selection end -->

			<!-- simple search -->
				<div class="header"><?php echo __('Simple Search'); ?></div>
				<form name="simpleSearch" action="index.php" method="get">
				<input type="text" name="keywords" style="width: 95%;" /><br />
				<input type="submit" name="search" value="<?php echo __('Search'); ?>" class="button marginTop" />
				</form>
			<!-- simple search end -->

			<!-- advanced search -->
				<div class="header"><?php echo __('Advanced Search'); ?></div><br />
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
			<!-- advanced search end -->     
     
    </div>

    <div id='right_side'>
      
      <!-- </p><h3>Right Side</h3>
      <p>
      Lorem ipsum his ut explicari vituperata adversarium, semper commune 
      mediocrem eos ex. Vim solet consul vocibus ei. Facer fuisset officiis 
      vel ex, at vix <a href='#'>partem tractatos</a>, habeo maluisset id mei. 
      Ad duo sale munere facete. Ex vidit brute feugiat qui, mei ullum zzril 
      aliquam id, est ei tollit <a href='#'>munere persecuti</a>. Ius cu 
      gloriatur constituto neglegentur, quem scripta vulputate ne quo, qui 
      in quem accumsan. Ad nominati sententiae usu, <a href='#'>sit te commodo 
      minimum</a>.
      </p>
      
      <h3>Right Side</h3>
      
      <p>
      Lorem ipsum his ut explicari vituperata adversarium, semper commune 
      mediocrem eos ex. Vim solet consul vocibus ei. Facer fuisset officiis 
      vel ex, at <a href='#'>vix partem tractatos</a>, habeo maluisset id mei. 
      Ad duo sale <a href='#'>munere facete</a>. Ex vidit brute feugiat qui, 
      mei ullum zzril aliquam id, est ei <a href='#'>tollit munere persecuti.</a> 
      </p> -->
      
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
		<img src="template/MotherEarth/img/logo-inaicta.png"
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

    <div id='center'>
    
      <!-- <h3>Center Content</h3> -->
      <h3 align='center'><?php echo $header_info; ?><br /></h3>
      <!-- <p>
      Lorem ipsum his ut explicari vituperata adversarium, semper commune 
      mediocrem eos ex. <a href='#'>Vim solet consul</a> vocibus ei. Facer 
      fuisset officiis vel ex, at vix partem tractatos, <a href='#'>habeo 
      maluisset</a> id mei. Ad duo sale munere facete. Ex vidit brute feugiat 
      qui, mei ullum zzril aliquam id, est ei tollit munere persecuti. Ius 
      cu gloriatur constituto neglegentur, quem scripta vulputate ne quo, qui 
      in quem accumsan. <a href='#'>Ad nominati</a> sententiae usu, sit te 
      commodo minimum. <a href='#'>Lorem ipsum</a> his ut explicari vituperata 
      adversarium, semper commune mediocrem eos ex. Vim solet consul vocibus ei. 
      Facer fuisset officiis vel ex, at vix partem tractatos, habeo maluisset 
      id mei. <a href='#'>Ad duo sale</a> munere facete. Ex vidit brute feugiat 
      qui, mei ullum zzril aliquam id, est ei tollit munere persecuti. Ius cu 
      gloriatur constituto neglegentur, quem scripta vulputate ne quo, qui in 
      quem accumsan. Ad nominati sententiae usu, sit te commodo minimum.
      </p>
      <p>
      Lorem ipsum his ut explicari vituperata adversarium, semper commune 
      mediocrem eos ex. Vim solet consul vocibus ei. Facer fuisset officiis 
      vel ex, at vix partem tractatos, habeo maluisset id mei. Ad duo sale 
      munere facete. Ex vidit brute feugiat qui, mei ullum zzril aliquam id, 
      est ei tollit munere persecuti. Ius cu gloriatur constituto neglegentur, 
      quem scripta vulputate ne quo, qui in quem accumsan. Ad nominati 
      sententiae usu, sit te commodo minimum.
      </p> -->
      
      <!-- <h3>Center Content</h3> -->
      <div id="infoBox"><?php echo $info; ?></div><br />
	  <?php echo $main_content; ?>
          
      <!-- <p>
      <img class='thumbnail_right' src='img/leaf.jpg' alt='leaf' />
      <a href='#'>Lorem ipsum</a> his ut explicari vituperata adversarium, 
      semper commune mediocrem eos ex. Vim solet consul vocibus ei. Facer fuisset 
      officiis vel ex, at vix <a href='#'>partem</a> tractatos, habeo maluisset 
      id mei. Ad duo sale munere facete. Ex vidit brute feugiat qui, mei ullum 
      zzril aliquam id, est ei tollit munere persecuti. Ius cu gloriatur constituto 
      neglegentur, quem scripta vulputate ne quo, qui in quem accumsan. Ad nominati 
      sententiae usu, sit te commodo minimum. Lorem ipsum his ut <a href='#'>
      explicari vituperata</a> adversarium, semper commune mediocrem eos ex. Vim 
      solet consul vocibus ei. Facer fuisset officiis vel ex, at vix partem tractatos, 
      habeo maluisset id mei. Ad duo sale munere facete. Ex <a href='#'>vidit brute</a> 
      feugiat qui, mei ullum zzril aliquam id, est ei tollit munere persecuti. Ius 
      cu gloriatur constituto neglegentur, quem scripta vulputate ne quo, qui in 
      quem accumsan. Ad nominati sententiae usu, sit te commodo minimum.      
      </p> -->                     
    </div>

  </div>

  <div id='page_footer'>
    <p>
    &copy; 2006 Darren Hester, <a href='http://www.designsbydarren.com' target='new'>DesignsByDarren.com</a>, Some Rights Reserved.<br/>
    <a href='http://validator.w3.org/check?uri=referer' target='new'>Valid XHTML 1.0 Transitional</a>. Ported to Senayan by Senayan Developer Community.
    </p>
  </div>

</div>

</body>
</html>
