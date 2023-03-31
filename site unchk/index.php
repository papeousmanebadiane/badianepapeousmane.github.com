<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
<link rel="stylesheet"  href="css/style.css">

<?php include("config/connection.php")?>

</head>
<body>

	<!-- header -->
	<header>
		
		<img src="images/log.png" height="150px" width="200px">
		<img src="images/log unchk.jpg" height="150px" width="780px">
		
		Universit&eacute; Numérique CHEIKH HAMIDOU KANE du SENEGAL
	</header>
		<nav>

			<ul class="menuHorizontal">
				<li><a href="accueil.html">Accueil</a></li>
				<li><a href= "images/MAI.jpg">MAI</a></li>
				<li><a href="images/mic.jpg">MIC</a></li>
				<li><a href="images/cd.jpg">CD</a></li>
				<li><a href="images/agn.jpg">AGN</a></li>
				<li><a href="images/ida.jpg">IDA</a></li>				
				<li><!--a href="images/dil.png">DIL</a--></li>
			</ul>
		</nav>

		<section>
			<aside>
				<div class="titre">ESPACE INSCRIPTION</div>
				<?php
				    include("views/creeretudiant.php");
				?>
			</aside>
			<article>
				<div class="titre">MOT DU COORDONNATEUR</div>
				   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				   proident, sunt in culpa qui officia deserunt mollit anim id est 
				laborum.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				   proident, sunt in culpa qui officia deserunt mollit anim id est laborum
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				   proident, sunt in culpa qui officia deserunt mollit anim id est laborum
				Duis aute irure dolor in reprehenderit in voluptate velit esse
				   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				   proident, sunt in culpa qui officia deserunt mollit.
				</p>
			</article>
	    </section>
	    <footer>
	    	 <!--pied de page-->
	    	 <p style="font-family: arial; font-style: italic; background-color:red; color: #fff">Projet_tutor&eacute;-Copyright.sn-universit&eacute;-Numérique CHEIKH HAMIDOU KANE-du-s&eacute;n&eacute;gal</p>
	    </footer>
	

</body>
</html>