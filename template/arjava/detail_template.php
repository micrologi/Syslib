<?php
/* not again, one more time ... need include this file to make this template work ... duoh */
include LIB_DIR.'content.inc.php';
$content = new content();

// biblio/record detail
// output the buffer
ob_start(); /* <- DONT REMOVE THIS COMMAND */
?>
<script type="text/javascript" src="js/jquery.js"></script>
<script>
/* Javasript function to open pop-up window floating div  */
var htmlPop = null;
var blocker = null;
var openHTMLpop = function(strURL, intWidth, intHeight, strPopTitle) {
    // calculate the center of the page
    var yPos = 30;
    var xPos = ($(window).width() - intWidth)/2;
    htmlPop = $('#htmlPop');
    blocker = $('#blocker');
    var htmlPopFrame = $('iframe#htmlPopFrame');
    if (htmlPop.length > 0 && blocker.length > 0) {
        if (htmlPopFrame.length) {
            htmlPopFrame[0].src = strURL;
        } else {
            $('#htmlPopContainer').html(strURL);
        }
        $('#htmlPopTitle', htmlPop).text(strPopTitle);
        htmlPop.css({'left': xPos+'px', 'width': intWidth+'px'}).fadeIn();
        blocker.fadeIn();
    } else {
        // set pop content
        var popContent = '<iframe id="htmlPopFrame" src="' + strURL + '" frameborder="0"></iframe>';
        // if the 5th argument is set then it is straight content not URL
        if (arguments[4] != undefined) { popContent = strURL; }
        // append content to pop window
        var toAdded = $('<div id="blocker"></div>'
            + '<div id="htmlPop">'
            + '<div id="htmlPopTitle" style="float: left; width: 70%">' + strPopTitle + '</div>'
            + '<div style="float: right; width: 20%; text-align: right;">'
            + '<a href="#" id="closePop" style="color: red; font-weight: bold;">Close</a>'
            + '</div>'
            + '<div id="htmlPopContainer">' + popContent + '</div>'
            + '</div>').hide().appendTo('body');
        htmlPopFrame = $('iframe#htmlPopFrame');
        htmlPop = $('#htmlPop').css({'position': 'fixed', 'top': yPos+'px', 'left': xPos+'px', 'margin': 'auto', 'width': intWidth+'px', 'z-index': 99}).fadeIn();
        blocker = $('#blocker').css({'top': 0, 'left': 0, 'width': '100%', 'height': screen.height+'px', 'position': 'fixed', 'background-color': '#000', 'opacity': 0.5, 'z-index': 98}).fadeIn();
    }
    if (htmlPopFrame.length) { htmlPopFrame.css({'width': '100%', 'height': intHeight+'px'}); }
    // register ESC button event handler
    $('#closePop').click(function(evt) { evt.preventDefault(); closeHTMLpop(); });
}

var closeHTMLpop = function() { htmlPop.fadeOut(); blocker.fadeOut(); }

</script>
<div class="grid_4 cover">
{image}
	<a class="back" href="javascript: history.back();">&nbsp;</a>
	<a target="_blank" href="index.php?p=show_detail&inXML=true&id=<?=$_GET['id']?>" class="xml" style="margin-top:10px;margin-right:20px;">&nbsp;</a>
</div>
<div class="detail grid_12">
	<table id="review" width="100%">
		<tr>
			<th colspan="2">
			{title}
			</th>
		</tr>
		<tr>
			<td class="abstract" colspan="2">
			<p>{notes}</p>
			</td>
		</tr>		
		<tr>
			<td class="key"><?php print __('Author(s)'); ?></td>		
			<td class="value">{authors}</td>
		</tr>
		<tr>
			<td class="key"><?php print __('Edition'); ?></td>
			<td class="value">{edition}</td>
		</tr>
		<tr>
			<td class="key"><?php print __('Call Number'); ?></td>
			<td class="value">{call_number}</td>		
		</tr>
		<tr class="isbn">
			<td class="key"><?php print __('ISBN/ISSN'); ?></td>
			<td class="value">{isbn_issn}</td>
		</tr>
		<tr>
			<td class="key"><?php print __('Subject(s)'); ?></td>		
			<td class="value">{subjects}</td>
		</tr>
		<tr>
			<td class="key"><?php print __('Classification'); ?></td>		
			<td class="value">{classification}</td>
		</tr>
		<tr>
			<td class="key"><?php print __('Series Title'); ?></td>		
			<td class="value">{series_title}</td>
		</tr>
		<tr>
			<td class="key"><?php print __('GMD'); ?></td>		
			<td class="value">{gmd_name}</td>
		</tr>
		<tr>
			<td class="key"><?php print __('Language'); ?></td>		
			<td class="value">{language_name}</td>
		</tr>
		<tr>
			<td class="key"><?php print __('Publisher'); ?></td>		
			<td class="value">{publisher_name}</td>
		</tr>
		<tr>
			<td class="key"><?php print __('Publishing Year'); ?></td>		
			<td class="value">{publish_year}</td>
		</tr>
		<tr>
			<td class="key"><?php print __('Publishing Place'); ?></td>		
			<td class="value">{publish_place}</td>
		</tr>
		<tr>
			<td class="key"><?php print __('Collation'); ?></td>		
			<td class="value">{collation}</td>
		</tr>
		<tr>
			<td class="key"><?php print __('Specific Detail Info'); ?></td>		
			<td class="value">{spec_detail_info}</td>
		</tr>
		<tr>
			<td class="key"><?php print __('File Attachment'); ?></td>		
			<td class="value">{file_att}</td>
		</tr>
		<tr>
			<td class="key"><?php print __('Availability'); ?></td>		
			<td class="value">{availability}</td>
		</tr>
</table>
</div>
<?php
// put the buffer to template var
$detail_template = ob_get_clean();
?>
