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
						<a href="Check-In.php" class="nav-link">Check-In</a>
					</li>
					<li>
						<a href="Contattaci.php" class="nav-link active"><?php echo $lang['contact'] ?></a>
					</li>
				</ul>
			</div>
			<div>
				<?php
					if($_SESSION['lang'] == $en) {
						echo '<button class="languageButton" onclick="window.location.href = \'./Contattaci.php?lang=it\';">'.$lang["lang"].'</button>';
					} else {
						echo '<button class="languageButton" onclick="window.location.href = \'./Contattaci.php?lang=en\';">'.$lang["lang"].'</button>';
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
			<div class="container" data-aos="zoom-in">
				<div class="description">
					<h2><?php echo $lang['contact'] ?></h2>
					<p>Via dell'Arena Alfieri, 11 Livorno (LI) Italy
                        <br>Email: guia.cionini@gmail.com
                        <br>Cell: +39 334 1491929
						<br>Tel: +39 0586 402374  
					</p>
				</div>
            </div>
            
            <form method="post" action="./php/send_form_email.php" data-aos="zoom-in">
                <label for="nome"><?php echo $lang['name'] ?>:</label>
                <input type="text" id="nome" name="nome" placeholder="<?php echo $lang['insert name'] ?>" required>
                <label for="cognome"><?php echo $lang['surname'] ?>:</label>
                <input type="text" id="cognome" name="cognome" placeholder="<?php echo $lang['insert surname'] ?>" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="<?php echo $lang['insert email'] ?>" required>
                <label for="messaggio"><?php echo $lang['message'] ?>:</label>
                <textarea name="messaggio" id="messaggio" cols="10" rows="10" placeholder="<?php echo $lang['insert message'] ?>" required></textarea>
                <input type="submit" value="<?php echo $lang['confirm'] ?>">
            </form>
        </section>
        
        <footer class="copyright">
			<p>&copy; <a href="https://mantovanigiacomo.netlify.com/">2020 Mantovani Giacomo</a></p>
		</footer>

        <script src="./js/main.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    </body>
</html>
    