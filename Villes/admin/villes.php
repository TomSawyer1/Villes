<?php

include("../inc/init.inc.php");
// include("../inc/functions.inc.php");

$title = "Liste des Villes";



// On fait la requete en base de donnée

$requete = "SELECT * FROM town LIMIT 100";


$requetePreparee = $bdd->prepare($requete);

$reponse = $requetePreparee->execute();

if (!$reponse)
{
	$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
			  Quelque chose ne s'est pas déroulé correctement pendant la requete
		</div>";

}

if ($reponse)
{
	$allUsers = $requetePreparee->fetchAll(PDO::FETCH_ASSOC);
	// echo "<pre>";
	// print_r($allUsers);
	// echo "</pre>";

}


include("../inc/head.inc.php");
include("../inc/header.inc.php");

// echo "<pre>";
// print_r($allUsers);
// echo "</pre>";



?>


<h1 class="text-center my-5">Liste utilisateur</h1>
<?= isset($_SESSION["message"]) ? $_SESSION["message"] : ""; 
			$_SESSION["message"] = "";
		?>
<table class="table table-striped container">
	  <thead>
		    <tr>
				  <th scope="col">Nom</th>
			      <th scope="col">Pays</th>
			      <th scope="col">Capital</th>
		    </tr>
	  </thead>
	  <tbody class="table-striped">

	  		<?php
	  			foreach ($allUsers as $user)
	  			{
	  				?>
	  				<tr>
	  					<td><?=$user["nom"]?></td>
	  					<td><?=$user["pays"]?></td>
	  					<td><?=$user["capital"]?></td>
	  					<td>
	  						 
	  							
	  							
	  						
	  								<a href="<?=URL?>admin/gestion-admin.php?action=delete&id=<?=$user["id_user"]?>" class="btn btn-danger">Supprimer</a>
	  								
	  							
								
	  							
	  					</td>
	  				</tr>
	  				<?php
	  			}

	  			?>
	  	</tbody>
</table>


<?php 



// include("../inc/footer.inc.php")