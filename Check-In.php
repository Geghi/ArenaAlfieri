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
						<a href="Posizione.php" class="nav-link"><?php echo $lang['position'] ?></a>
					</li>
					<li>
						<a href="Check-In.php" class="nav-link active">Check-In</a>
					</li>
					<li>
						<a href="Contattaci.php" class="nav-link"><?php echo $lang['contact'] ?></a>
					</li>
				</ul>
			</div>
			<div>
				<?php
					if($_SESSION['lang'] == $en) {
						echo '<button class="languageButton" onclick="window.location.href = \'./Check-In.php?lang=it\';">'.$lang["lang"].'</button>';
					} else {
						echo '<button class="languageButton" onclick="window.location.href = \'./Check-In.php?lang=en\';">'.$lang["lang"].'</button>';
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
            <div class="services check-in"  data-aos="zoom-in">
				<div class="description">
                    <h2>Check-In</h2>
                    <p><?php echo $lang['check-in description'] ?></p>
                    <button class="contattaciBtn" onclick="window.location.href = './Contattaci.php';"><?php echo $lang['contact'] ?></button>
                </div>
            </div>

            <div class="title"  data-aos="zoom-in">
                <h2><?php echo $lang['rules'] ?></h2>
                <p><?php echo $lang['rules description'] ?></p>
             </div>
            
			<div class="container rule-list"  data-aos="zoom-in">
				<div class="description">
                    <p><?php echo $lang['rule_one'] ?></p>
					<p><?php echo $lang['rule_two'] ?><a href="https://www.booking.com/hotel/it/arena-alfieri.it.html">Booking</a>.</p>
                    <p><?php echo $lang['rule_three'] ?></p>                   
                </div>
				<div class="description"> 
					<p><?php echo $lang['rule_four'] ?></p>
                    <p><?php echo $lang['rule_five'] ?></p>
                    <p><?php echo $lang['rule_six'] ?></p>
                    <p><?php echo $lang['rule_seven'] ?></p>
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
    