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
	<p class="blue">&#60;html&#62;</p>
	
	<p class="blue">&#60;head&#62;</p>
	
	<p class="blue">&#60;/head&#62;</p>
	
	<p class="blue">&#60;body&#62;</p> 
	
	<p class="blue">&#60;form&#62;</p>	
	
	<p class="blue">&#60;input type="text" name="name"/&#62</p>
	
	<p class="blue">&#60;input type="submit" name="submit"/&#62</p>
	
	<p class="blue">&#60;/form&#62;</p>	
	
	<p class="blue">&#60;/body&#62;</p>
	
	<p class="blue">&#60;html&#62;</p>	
	
</div>
<div id="right" class="display">
  <p class="blue">Click to toggle</p>
  <p class="blue highlight">highlight</p>
  <p class="blue">on these</p>
  <p class="blue">paragraphs</p>
</div>
<script>
    $("p").click(function () {
      $(this).toggleClass("highlight");
    });
</script>

</body>
</html>