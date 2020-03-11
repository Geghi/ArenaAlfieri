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
						<a href="Camere.php" class="nav-link"><?php echo $lang['rooms'] ?></a>
					</li>
					<li>
						<a href="Posizione.php" class="nav-link active"><?php echo $lang['position'] ?></a>
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
						echo '<button class="languageButton" onclick="window.location.href = \'./Posizione.php?lang=it\';">'.$lang["lang"].'</button>';
					} else {
						echo '<button class="languageButton" onclick="window.location.href = \'./Posizione.php?lang=en\';">'.$lang["lang"].'</button>';
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
			<div class="container"  data-aos="zoom-in">
				<div class="description">
                    <h2><?php echo $lang['find us']?></h2>
                    <p>Via dell'Arena Alfieri, 11 Livorno - Italy.</p>
                </div>
				<div class="box-item"> 
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2891.4565847707777!2d10.32070276492017!3d43.55536831623282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d5ebdf3b609c03%3A0xc89763c7463d717f!2sArena%20Alfieri!5e0!3m2!1sit!2sit!4v1583848776772!5m2!1sit!2sit" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div> 
			</div>
       
			<div class="container"  data-aos="zoom-in">
				<div class="description">
					<h2><?php echo $lang['airport']?></h2>
					<p><?php echo $lang['airport description']?></p>
                </div>
				<div class="box-item"> 
					<img class="box-image aereoporto" src="./css/image/aereoporto.jpg" alt=""/>
				</div> 
            </div>
            
            <div class="container"  data-aos="zoom-in">
				<div class="description">
					<h2><?php echo $lang['station']?></h2>
                </div>
				<div class="box-item"> 
					<img class="box-image" src="./css/image/stazione.jpg" alt=""/>
				</div> 
            </div>

            <div class="container"  data-aos="zoom-in">
				<div class="description">
					<h2><?php echo $lang['hospital']?></h2>
                </div>
				<div class="box-item"> 
					<img class="box-image" src="./css/image/ospedale.png" alt=""/>
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
    