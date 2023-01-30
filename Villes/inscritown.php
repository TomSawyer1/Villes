<?php

include("inc/init.inc.php");

$title = "Inscription de ta Ville";

if(!empty($_POST)){ //On appelle les portiers que si le formulaire est validé
	
	if (!isset($_POST["nom"]) || empty($_POST["nom"]))
	{
		$_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
			  SVP, veuillez remplir le champs Nom !
		</div>";
	
	}

	if (!isset($_POST["pays"]) || empty($_POST["pays"]))
	{
		$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
			  SVP, veuillez remplir le champs Prénom !
		</div>";
	}

	if (!isset($_POST["capital"]) || empty($_POST["capital"]))
	{
	$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
			  SVP, veuillez remplir le champs Login !
		</div>";

	}

	if (!isset($_POST["pop"]) || empty($_POST["pop"]))
		{
			$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
				  SVP, veuillez remplir le champs Email !
			</div>";
		}

	// S'il n'y a pas de messages d'erreurs...
	if (empty($_SESSION["message"]))
	{

		// $town = strtolower(htmlspecialchars($_POST["town"]));
		$nom = strtolower(htmlspecialchars($_POST["nom"]));
        $pays = strtolower(htmlspecialchars($_POST["pays"]), /*PASSWORD_DEFAULT)*/);
		$capital = strtolower(htmlspecialchars($_POST["capital"]));
		$pop = strtolower(htmlspecialchars($_POST["pop"]));
		

		// Enregistrement en bdd

		$requete = "INSERT INTO `town`(`nom`, `pays`, `capital`, `pop`) VALUES (?, ?, ?, ?)";

		$requetePrepare = $bdd->prepare($requete);

		$reponse = $requetePrepare->execute([

			$nom, 
			$pays,
			$capital,
			$pop
		]);

		if ($reponse)
		{
			$_SESSION["message"] = "<div class=\"alert alert-success w-50 mx-auto\" role=\"alert\">
  				Bravo vous zetes bien inscrit, il est temps de vous connecter !
			</div>";
			header("Location:inscritown.php");
			exit;
		}else
		{
			$_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
  				Il y a eu une erreur lors de l'ajout en base de donnée
			</div>";
		}



	}
}



include("inc/head.inc.php");
include("inc/header.inc.php");

?>
<h1 class="text-center my-5">Inscription de ta Ville</h1>

<?= isset($_SESSION["message"]) ? $_SESSION["message"] : ""; 
			$_SESSION["message"] = "";
	?>

    <form method="POST" action="inscritown.php" class="w-50 mx-auto">

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nom" placeholder="admin" name="nom">
                <label for="nom">Nom</label>
            </div>

            <div class="form-floating mb-3">
                <input type="pays" class="form-control" id="pays" placeholder="pays" name="pays">
                <label for="pays">Pays</label>
            </div>

            <div class="form-floating mb-3">
                <input type="capital" class="form-control" id="capital" placeholder="capital" name="capital">
                <label for="capital">Capital</label>
            </div>

            <div class="form-floating mb-3">
                <input type="pop" class="form-control" id="number" placeholder="population" name="pop">
                <label for="pop">Population</label>
            </div>
            <input type="submit" class="btn btn-primary mt-3" value="Submit" name="submit">
    </form>