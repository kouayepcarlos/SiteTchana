<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Title -->
    <title>About Me - Alain T.</title>
		
	<!-- Favicon -->
    <link rel="icon" href="img/favicon.png">

    <!-- Include Font Awesome library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
		
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
	
	<!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Jquery  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<body class="teaching">
    <?php
        include "menu/menu_precept.php";
    ?>

<div class="black-box remzi-research my-5" style="width: 60%;">
  
  
  <h1 style="color:  #077ea3;"> My Precepts </h1>
  <hr>

  <div class="item">
  <h3> Précepte 4 : Ne vous
prenez pas uniquement
pour un boss </h3>
  <i><p>“Le vrai leader n’a besoin de rien pour diriger, il est tout
simplement censé montrer la voie.”
Adage africain</p></i>
  <hr>

  <p>Il arrive que lorsqu’on a des personnes (doctorants
ici) sous ses ordres, l’on se prenne très rapidement
pour un donneur d’ordres, exclusivement. Très souvent, le chercheur attribue un sujet au doctorant et
l’abandonne à son sort, attendant que le doctorant
mène la recherche tout seul. Cette approche produit
rarement des résultats de qualité (car les génies sont
rares). N’oubliez pas que votre objectif n’est pas de
remplir votre curriculum vitae d’une liste de doctorants encadrés, mais plutôt une liste de productions
scientifiques reconnues (voir le Chapitre 3).</p>

<p>La direction du doctorant ne se limite pas uniquement à des rencontres une fois par mois. En tant
que jeune chercheur permanent, je vous conseille de
vous considérer comme un super doctorant ou postdoctorant. La relation que vous entretenez avec votre
doctorant doit être comparable à celle qu’un doctorant entretien avec un stagiaire recruté pour l’assister
dans son travail. Autrement dit, mettez vous à chaque
fois dans la situation de celui qui réalise une seconde
thèse, avec le doctorant comme un super stagiaire à
votre disposition. Vous devez passer du temps avec le doctorant, mettre la main dans le cambouis: participation à l’élaboration la solution, participation à
la réalisation des expérimentations, résolution des
erreurs (en cas de résultats incohérents), leader sur
la rédaction des articles, nuits blanches, etc.</p>

<p>Le respect de ce précepte permet entre autre de
rassurer le doctorant, il sait qu’il peut compter sur
vous.</p>


  </div>


</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>











<script>
$(document).ready(function () {
  // Nombre d'éléments "accordion-item publication" à afficher par page
  const itemsPerPage = 3;

  // Calculer le nombre total de pages
  const totalItems = $(".item ").length;
  const totalPages = Math.ceil(totalItems / itemsPerPage);

  // Cacher tous les éléments "accordion-item publication" sauf ceux de la première page
  $(".item ").slice(itemsPerPage).hide();

  // Générer les liens de pagination dynamiquement
  for (let i = 1; i <= totalPages; i++) {
    $(".pagination").append(`<li class="page-item"><a class="page-link" href="#" data-page="${i}">${i}</a></li>`);
  }

  // Ajouter un gestionnaire d'événements pour les liens de pagination
  $(".pagination").on("click", ".page-link", function (event) {
    event.preventDefault();
    const pageNumber = $(this).data("page");

    // Retirer la classe 'active' de tous les liens de pagination
    $(".pagination .page-link").removeClass("active");

    // Ajouter la classe 'active' au lien de pagination cliqué
    $(this).addClass("active");

    // Masquer tous les éléments "accordion-item publication"
    $(".item").hide();

    // Afficher les éléments "accordion-item publication" de la page sélectionnée
    $(".item")
      .slice((pageNumber - 1) * itemsPerPage, pageNumber * itemsPerPage)
      .show();
  });

  // Ajouter la classe 'active' au premier lien de pagination
  $(".pagination .page-link:first").addClass("active");
});

</script>

</body>
</html>