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
						echo '<button class="languageButton" onclick="window.location.href = \'./Camere.php?lang=it\';">'.$lang["lang"].'</button>';
					} else {
						echo '<button class="languageButton" onclick="window.location.href = \'./Camere.php?lang=en\';">'.$lang["lang"].'</button>';
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

        <section id="start" class="description-section">
            <div class="services" data-aos="zoom-in">
				<div class="description">
                    <h2><?php echo $lang['services']?></h2>
                    <ul class="services-list fa-ul">
                        <li><p><i class="fas fa-caret-right"></i>&emsp; <?php echo $lang['air']?></p></li>
                        <li><p><i class="fas fa-caret-right"></i>&emsp; <?php echo $lang['tv']?></p></li>
                        <li><p><i class="fas fa-caret-right"></i>&emsp; <?php echo $lang['electric kettle']?></p></li>
                        <li><p><i class="fas fa-caret-right"></i>&emsp; <?php echo $lang['towels']?></p></li>
                        <li><p><i class="fas fa-caret-right"></i>&emsp; <?php echo $lang['shower towel']?></p></li>
                        <li><p><i class="fas fa-caret-right"></i>&emsp; Wi-fi.</p></li>
						<li><p><i class="fas fa-caret-right"></i>&emsp; <?php echo $lang['bikes']?></p></li>
						<li><p><i class="fas fa-caret-right"></i>&emsp; <?php echo $lang['parking']?></p></li>
                    </ul>
                </div>
            </div>

			<div class="container" data-aos="fade-in">
				<div class="description">
					<h2>Maestrale</h2>
					<p><?php echo $lang['maestrale description']?></p>
                    <button onclick="window.location.href = './Maestrale.php';">Maestrale</button>
                </div>
				<div class="box-item"> 
					<img class="box-image" src="./css/image/meastrale.jpg" alt=""/>
				</div> 
			</div>
       
			<div class="container" data-aos="fade-in">
				<div class="box-item"> 
					<img class="box-image" src="./css/image/scirocco.jpg" alt=""/>
                </div> 
                <div class="description">
					<h2>Scirocco</h2>
					<p><?php echo $lang['scirocco description']?></p>
                        <button onclick="window.location.href = './Scirocco.php';">Scirocco</button>
                </div>
            </div>
            
            <div class="container" data-aos="fade-in">
				<div class="description">
					<h2>Libeccio</h2>
					<p><?php echo $lang['libeccio description']?></p>
                    <button onclick="window.location.href = './Libeccio.php';">Libeccio</button>
                </div>
				<div class="box-item"> 
					<img class="box-image" src="./css/image/libeccio.jpg" alt=""/>
				</div> 
            </div>

            <div class="container" data-aos="fade-in">
				<div class="box-item"> 
					<img class="box-image" src="./css/image/ponente.jpg" alt=""/>
                </div>
                <div class="description">
					<h2>Ponente</h2>
					<p><?php echo $lang['ponente description']?></p>
                    <button onclick="window.location.href = './Ponente.php';">Ponente</button>
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
    