<?php

require_once('testbed.php');

/*$leftHandSideCodes=array('<html>', 
			 '<head>',
			 '</head>',
			 '<body>', 
		     '<form>',	
			 '#1' => 'Name:<input type="text" name="name"/>',
			 '#2' => '<input type="submit" name="submit"/>',
			 '</form>',	
			 '</body>',
			 '</html>'
			);
*/
			
$rightHandSideCodes=array(
			'#1' => '<img src="images/textbox.jpg"/>', 
			'#2' => '<img src="images/submit.jpg"/>',
			);
$htmlencoded = array();

?>
<!DOCTYPE html>
<html>
<head>
		<title>
			Prototype
		</title>
  <style>

  p { margin: 4px; font-size:16px; font-weight:bolder;
      cursor:pointer; }
  .blue { color:blue; }
  .highlight { background:yellow; }
  .display{border-style:solid; border-width:3px;}
#left
{
	position:absolute;
	left:0px;
	width:600px;
}

#right
{
	position:absolute;
	right:0px;
	width:400px;
}
  </style>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>



<div id="left" class="display"><pre>
<?php
	
foreach($leftHandSideCodes as $key => $code)
{
	$prefixElement = '<p class="blue">';
	$suffixElement = '</p>';
	
	if (!is_numeric($key)) {
		$prefixElement = '<p class="blue" title="'.$key.'">';
	}
	echo $prefixElement . $code . $suffixElement;
}
?>	
	
</pre></div>
<div id="right" class="display">
<?php
	
foreach($rightHandSideCodes as $key =>  $code)
{
	$prefixElement = '<p>';
	$suffixElement = '</p>';
	
	if (!is_numeric($key)) {
		$prefixElement = '<p title="'.$key.'">';
	}

	echo $prefixElement . $code . $suffixElement;
}
?>	
</div>
<script>


	
	function highlightThis(element) {
		element.siblings().removeClass("highlight");
		element.toggleClass("highlight");
	}
	


	$("div#left p").click(function () {
		highlightThis($(this));
		
		parent
	
		if($(this).attr('title') == null) {
		
			$('div#right p').removeClass("highlight");
		
		} else {
	  
			var title = $(this).attr('title');
		
			highlightThis($('div#right p[title ="' + title + '"]'));
		
	  } 
	});
	
	$("div#right p").click(function () {
		highlightThis($(this));
		
		// get the parent
		var idOfParent = $(this).parent().attr('id');
		var idOfNeighborParent = '';
		
		if (idOfParent == 'left') {
			idOfNeighborParent = 'right';
		} else {
			idOfNeighborParent = 'left';
		}
		
		var neighborKids = 'div#' + idOfNeighborParent + ' p';
	
		if($(this).attr('title') == null) {
		
			$(neighborKids).removeClass("highlight");
		
		} else {
	  
			var title = $(this).attr('title');
		
			highlightThis($(neighborKids + '[title ="' + title + '"]'));
		
	  } 
	});
		
		
		

    
    
</script>

</body>
</html>