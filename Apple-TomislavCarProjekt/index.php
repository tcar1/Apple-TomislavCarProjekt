<?php 
	
	define('__APP__', TRUE);
	
	
    session_start();
	

	include ("dbconn.php");
	

    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	

    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
	
	
    include_once("functions.php");
	
print '
<!DOCTYPE html>
<html>
	<head>
		
		
		<link rel="stylesheet" href="style.css">
		
		
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="some description">
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		
		<meta itemprop="name" content="Hello Example">
		<meta itemprop="description" content="Some description">
		<meta itemprop="image" content="Your URL"> 
		
		
		<meta property="og:title" content="Hello Example">
		<meta property="og:type" content="article">
		<meta property="og:url" content="Your URL">
		<meta property="og:image" content="Your URL">
		<meta property="og:description" content="Some description">
		<meta property="article:tag" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		
		<meta name="twitter:title" content="Hello Example">
		<meta name="twitter:description" content="Some description">
		
        <meta name="author" content="car.tomislav@yahoo.com">
		
		<link rel="icon" href="Apple.ico" type="image/.ico"/>
		<link rel="shortcut icon" href="Apple.ico" type="image/.ico"/>
		
		
		
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		
		<title>Apple</title>
	</head>
<body>
	<header>
		<div'; if ($menu > 1) { print ' class="hero-subimage"'; } else { print ' class="hero-image"'; }  print '></div>
		<nav>';
			include("menu.php");
		print '</nav>
	</header>
	<main>';
		if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}
	
	
	if (!isset($menu) || $menu == 1) { include("home.php"); }
	
	
	else if ($menu == 2) { include("news.php"); }
	
	
	else if ($menu == 3) { include("contact.php"); }
	
	
	else if ($menu == 4) { include("about-us.php"); }
	
	
	else if ($menu == 5) { include("register.php"); }
	
	
	else if ($menu == 6) { include("signin.php"); }
	
	
	else if ($menu == 7) { include("admin.php"); }
	
	print '
	</main>
	<footer>
		<p>Copyright &copy; ' . date("Y") . ' Tomislav Car</p>
	</footer>
</body>
</html>';
?>
