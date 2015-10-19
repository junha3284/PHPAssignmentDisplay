<?php
  $type = $_GET['type'];
  $id = $_GET['id'];

  
  //If cannot get anything type from URL, jump to error page
  if (empty($type)) {
    header("Location: /error.html");
	exit;
  }
  
  $fname = $type.$id.".cpp";
  //Generate a readable name for echo
  if ($type == 'asn')
	$type_eng = "Assignment";
  else if ($type == 'ex')
	$type_eng = "Exercise";
  else
    $type_eng = $type.'.cpp';
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<?php echo "<title>",$type, $id, "</title>"; ?>
	<link rel="stylesheet" type="text/css" href="/static/main.css">
</head>

<header>
	<?php echo "<h1>CMPT128<br>",
		  $type_eng,' ', $id, "</h1>"; ?>
	<h2>Peter Tan</h2>
</header>
	
<body>

<!-- Syntax Highlighter -->
<!-- Copyright 2004-2011 Alex Gorbatchev -->

<link href="http://alexgorbatchev.com/pub/sh/current/styles/shThemeDefault.css" rel="stylesheet" type="text/css" />
<script src="http://alexgorbatchev.com/pub/sh/current/scripts/shCore.js" type="text/javascript"></script>
<script src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushCpp.js" type="text/javascript"></script>


<?php echo '<pre class="brush: cpp">',readfile('http://www.sfu.ca/~junyuant/'.$fname),'</pre>'; ?>


<script type="text/javascript">
     SyntaxHighlighter.all()
</script>


</body>

<footer>Assignment Center | Copyright &copy; 2014 Peter Tan</footer>