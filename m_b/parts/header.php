
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Между булок</title>
		
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<header>
			<div class = 'container'>
				<div class = "row">
					<div class="logo-section col-xl-5 col-md-4 col-8">
						<a href = "#"><img id="logo_image" src="images/logo_header.png" alt="logo"></a>
					</div>
					
					<div class="menu-section col-xl-7 col-md-8 col-4">
						<ul class="menu" id = "header_menu">
							<li><a href="/<?php echo explode('/', $_SERVER['REQUEST_URI'])[1]?>">Головна</a></li>
							<li><a href="#">Про нас</a></li>
							<li><a href="#">Акції</a></li>
							<li><a href="/<?php echo explode('/', $_SERVER['REQUEST_URI'])[1]?>?page=menu">Меню</a></li>
							<li><a href="/<?php echo explode('/', $_SERVER['REQUEST_URI'])[1]?>?page=contact">Контакти</a></li>
						</ul>
						<img id="btn_menu" src ='images/hamburger.png'>
					</div>
				</div>
			</div>
		</header>