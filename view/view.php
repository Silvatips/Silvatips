<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="theme-color" content="#800000">
		<title> <?php echo $pagetitle;?></title>
		<link rel="stylesheet" type="text/css" href="../CSS/CSSgeneral.css?v=refreshauto">
	</head>
	<header>
		<div class="burger">
			<img src="../Images/burger.png" alt="Menu">
			<div id="menu2">
				<div><a href="./index.php">Générateur</a>
					<div class="submenu">
						<a href="./index.php"><div>TellRaw</div></a>
						<a href="./index.php"><div>Mobs</div></a>
						<a href="./index.php"><div>Travelling</div></a>
					</div>
				</div>
				<div><a href="./index.php">Vidéos</a>
					<div class="submenu">
						<a href="https://www.youtube.com/channel/UCe_nGFDs5_r1hRbL5l3JcfQ"><div>Chaîne du Silvathor</div></a>
					</div>
				</div>
				<div><a href="./index.php">À propos</a>
				
				</div>
			</div>
		</div>
		<nav>
			<div><a href="./index.php">Générateur</a>
				<div class="submenu">
					<a href="./index.php"><div>Tellraw</div></a>
					<a href="./index.php"><div>Mobs</div></a>
					<a href="./index.php"><div>Travelling</div></a>
				</div>
			</div>
			<div><a href="./index.php">Vidéos</a>
				<div class="submenu">
					<a href="https://www.youtube.com/channel/UCe_nGFDs5_r1hRbL5l3JcfQ"><div>Chaîne du Silvathor</div></a>
				</div>
			</div>
			<div><a href="./index.php">À propos</a>
				
			</div>
		</nav>
	</header>
	<body class="Site">
		<main class="Site-content">
			<aside class="gauche">
				<div class="pub">
					<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<script>
					  (adsbygoogle = window.adsbygoogle || []).push({
					    google_ad_client: "ca-pub-1940243599416711",
					    enable_page_level_ads: true
					  });
					</script>
				</div>
			</aside>
			<article>
				<?php
					//Si $controller='news' et $views='list',
					//alors $filepath="/chemin_du_site/view/news/list.php"
					$filepath = File::build_path(array("view", self::$object, "$view.php"));
					require_once $filepath;
				?>
			</article>
			<article>
				<div class="pub">
					<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<script>
					  (adsbygoogle = window.adsbygoogle || []).push({
					    google_ad_client: "ca-pub-1940243599416711",
					    enable_page_level_ads: true
					  });
					</script>
				</div>
			</article>
			<aside class="droite">
				<div class="pub">
					<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<script>
					  (adsbygoogle = window.adsbygoogle || []).push({
					    google_ad_client: "ca-pub-1940243599416711",
					    enable_page_level_ads: true
					  });
					</script>
				</div>
			</aside>
		</main>
	</body>
	<footer>
		<p>Site de Silvathor</p>
	</footer>
</html>
