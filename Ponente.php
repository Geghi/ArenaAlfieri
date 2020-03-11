<?php
	include "./php/config.php";
?>

<!DOCTYPE html>
<html lang="it">
	<body>
        <head>         
            <title>B&B Arena Alfieri</title>	
            <meta charset="utf-8"> 
            <meta name = "author" content = "Mantovani Giacomo">
            <meta name="viewport" content="width=device-width">
            <link rel="shortcut icon" href="http://www.arenaalfieri.netlify/favicon.ico"/>
			<link href="./css/main.css" rel="stylesheet" type="text/css"/>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        </head>
		
		<div class="menu-toggler-container">
			<a class="menu-toggler">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		<header id="nav-menu">
			<div class="Logo">
				<a href="index.php"><img src="./css/image/BlackLogo.png" alt=""/></a>
			</div>
			<div class="nav-list">
				<ul>
					<li>
						<a href="index.php" class="nav-link">Home</a>
					</li>
					<li>
						<a href="Chi-siamo.php" class="nav-link"><?php echo $lang['about'] ?></a>
					</li>
					<li>
						<a href="Camere.php" class="nav-link active"><?php echo $lang['rooms'] ?></a>
					</li>
					<li>
						<a href="Posizione.php" class="nav-link"><?php echo $lang['position'] ?></a>
					</li>
					<li>
						<a href="Check-In.php" class="nav-link">Check-In</a>
					</li>
					<li>
						<a href="Contattaci.php" class="nav-link"><?php echo $lang['contact'] ?></a>
					</li>
				</ul>
			</div>
			<div>
				<?php
					if($_SESSION['lang'] == $en) {
						echo '<button class="languageButton" onclick="window.location.href = \'./Ponente.php?lang=it\';">'.$lang["lang"].'</button>';
					} else {
						echo '<button class="languageButton" onclick="window.location.href = \'./Ponente.php?lang=en\';">'.$lang["lang"].'</button>';
					}
				?>
			</div>
		</header>

        <section class="landing-section">
            <div class="landing-image"></div>
            <img class="landing-logo" src="./css/image/Logo.png" alt=""/>
            <div class="landing-text">
                <h2>Arena Alfieri</h2>
            </div>
        </section>

        <section id="start" class="description-section"  data-aos="fade-in">
            <div class="title">
                <h2>Ponente</h2>
            </div>
			<div class="container">
				<div class="box-item room-image"> 
					<img class="box-image" src="./css/image/ponente1.jpg" alt=""/>
				</div> 
				<div class="box-item"> 
					<img class="box-image" src="./css/image/ponente2.jpg" alt=""/>
				</div> 
            </div>
            
            <div class="container">
				<div class="box-item"> 
					<img class="box-image" src="./css/image/ponente3.jpg" alt=""/>
				</div> 
				<div class="box-item"> 
                    <img class="box-image" src="./css/image/ponente4.jpg" alt=""/>
					
				</div> 
            </div>         
        </section>
        
        <footer class="copyright">
			<p>&copy; <a href="https://mantovanigiacomo.netlify.com/">2020 Mantovani Giacomo</a></p>
		</footer>

        <script src="./js/main.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    </body>
</html>
    