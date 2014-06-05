<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Maps Library</title>
<link rel="stylesheet" type="text/css" href="css/css.css"/>
</head>

<body>

<? include("includes/header.php");?>

<? include("includes/menu.php");?>




<div id="content">
	
    <? 
		
		$p = @$_GET["s"];
		
		switch ( $p ) { 
			
			case "1" : 
				$s = "map.php";
			break;
			
			
			case "2" : 
				$s = "markers.php";
			break;
						
			
			case "3" : 
				$s = "fences.php";
			break;
			
			case "5" :
				$s = "kml.php";
				break;
					
					
			default : 
				$s = "intro.php";
		}
		
		
	?> 
	<div style="width:800px">
	<?
        include($s);
	?>
	</div>
</div>

<? #include("includes/footer.php"); ?>
</body>
</html>