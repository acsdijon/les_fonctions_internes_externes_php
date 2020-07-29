<!DOCTYPE html>
<html>
<head>
	<title>Les fonctions en php</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<section class="container">
		<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
			<div class="col-md-6 px-0">
				<h1 class="display-4 font-italic">Les Fonctions en php</h1>
				<p class="lead my-3">Ce sont des fonctions prêtes à l’emploi définies par PHP. Il suffit ensuite de savoir comment les utiliser.
				</p>
				<p class="lead mb-0"><a href="https://view.genial.ly/5f202deea07dc10d6f801447/presentation-les-fonctions-en-php" class="text-white font-weight-bold" target="_blank">Accéder à la présentation sur genially</a></p>
			</div>
		</div>
	</section>

	<section class="container pt-4 bg-light">
		<h2 class="text-uppercase text-center">Les fonctions internes</h2>
		<p><a href="info.php" target="blank">Lire les informations de php</a> avec <em>phpinfo();</em></p>
		<div class="container">
			<h3 class="text-center text-secondary mt-4">Quelques exemples</h3>
			<div class="container bg-secondary text-white font-weight-bold text-center pt-2 pb-2 border">
				<?php
				$fruits = array("Bananes", "Pommes", "Poires", "Pêches");
				echo "Bonjour toi !" . "<br>"; // Fonctions de chaînes de caractères
				print_r($fruits); // Fonctions de variables

				 ?>
			</div>
		</div>
		<div class="container text-center mt-4">
			<h3 class="text-secondary">Les arguments : le type &amp; le nombre</h3>
			<div class="row pt-3">
				<div class="col-lg-6">
					<h4>Le type</h4>
					<p>C'est la catégorie de la valeur prise par la fonction.<br/> Exemple : integer <small>(nombre entier)</small>, float <small>(nombre décimal)</small>, string <small>(chaîne de caractères)</small>, boolean <small>(vrai ou faux)</small> ...
					</p>
					<?php

					$number = 2;
					//is_int = fonctions de variables, prend en argument une variable
					var_dump(is_int($number)); // renvoie un boolean true car la réponse est vraie
					echo "<br>";
					echo $number  . "<br>";
					echo(is_int($number)) . "<br>"; // renvoie 1 pour true car c'est une fonction de chaîne de caractère
					//scandir($number); // renvoie une erreur car scandir ne prend que les arrays
					 ?>
				</div>
				<div class="col-lg-6">
					<h4>Le nombre</h4>
					<p>C'est tout simplement le nombre d'arguments que prend la fonction</p>
					<?php
					$hello = "Hello wolrd";
					$checkIfString = is_string($hello); // la fonction ne prend qu'une variable en argument
					var_dump($checkIfString); // renvoie true car la question est vraie
					echo "<br/>";
					var_dump(filter_var('prenom@example.com', FILTER_VALIDATE_EMAIL)); // renvoie le nombre de caractères si c'est un email
					echo "<br/>";
					var_dump(filter_var('4567888', FILTER_VALIDATE_EMAIL)); // renvoie un boolean false si ce n'est pas un email

					 ?>

				</div>
			</div>
		</div>
	</section>

	<section class="container pt-4 pb-4 bg-light">
		<h2 class="text-uppercase text-center">Les fonctions externes</h2>
		<h3 class="text-center text-secondary mt-4">Quelques exemples</h3>
		<div class="container  mt-4">
			<div class="row pt-3">
				<div class="col-lg-6">
					<h4 class="text-center">Déclaration</h4>
					<h5>1. Le mot clé <em>"function"</em></h5>
						<p class="pl-4">Ecrire ce mot pour dire à php que l'on va créer une fonction</p>
					<h5>2. Lui définir un nom qui fait référence à ce que fait la fonction</h5>
					<h5>3. Appeller la fonction pour qu'elle s'éxécute</h5>
					<?php
					// Fonction sans argument qui dit bonjour
					echo "Une fonction qui dit bonjour : <br>";
					function Bonjour(){
						echo "Salut !<br><br>";
					}
					Bonjour(); // On appelle ici la fonction pour qu'elle s'exécute

					 ?>
				</div>
				<div class="col-lg-6">
					<h4 class="text-center">Utilisation</h4>
					<h5>Fonctions à un argument</h5>
					<?php
					// Fonction avec un argument
					echo "Une fonction qui vérifie le mail avec un return : <br>";
					$email = "prenom@mail.com";

					function ifEmail($checkEmail){
						return filter_var($checkEmail, FILTER_VALIDATE_EMAIL);
						// le return permet de renvoyer directement le résultat
					}

					if(ifEmail($email)){
						echo "Email valide<br>";
					}else{
						echo "Email invalide<br>";
					}

					// Function sans le return
					echo "Une fonction qui vérifie le mail sans le return : <br>";

					function InputEmail($checkEmail){
						if(filter_var($checkEmail, FILTER_VALIDATE_EMAIL)){
							echo "email correct<br>";
						}else{
							echo "email incorrect<br>";
						}
					}
					InputEmail($email);

					 ?>
					 <h5 class="pt-4">Fonctions à deux arguments</h5>
					 <?php

					 	// Function avec deux arguments

					 function multiplication($number1, $number2){
					 	echo "Le résultat est : " . $number1 * $number2 . "<br>";
					 }
					 multiplication(2, 7);

					 function multiplicationReturn($number1, $number2){
					 	return $number1 * $number2;
					 }

					 echo "Le résultat est : " . multiplicationReturn(1,3); //ligne appellante de la fonction avec un echo pour afficher le résultat

					  ?>
				</div>
			</div>
		</div>
	</section>

	<footer class="bg-dark pt-5 pb-5">
		<div class="container">
			<div class="row">
				<p class="text-white font-weight-bold">Les fonctions en php</p>
			</div>
		</div>
	</footer>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
