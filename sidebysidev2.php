<!DOCTYPE html>
<html>
<head>
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
	width:400px;
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



<div id="left" class="display">
<?php
$codes=array('<html>', 
			 '<head>',
			 '</head>',
			 '<body/>', 
		     '<form>',	
			 '<input type="text" name="name"/>',
			 '<input type="submit" name="submit"/>',
			 '</form>',	
			 '</body>',
			 '<html>'
			);
$htmlencoded = array();
	
foreach($codes as  $code)
{
	$htmlencoded=htmlentities($code);
	echo '<p class="blue">' . $htmlencoded . '</p>';
}
?>	
	
</div>
<div id="right" class="display">
  <img src="images/textbox.jpg"/>
  <img src="images/submit.jpg"/>
</div>
<script>
    $("p").click(function () {
      $(this).siblings().removeClass("highlight");
      $(this).toggleClass("highlight");
    });
</script>

</body>
</html>