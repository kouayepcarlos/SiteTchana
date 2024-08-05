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
  <h3>Précepte 10 : L’avis du
doctorant ne compte
pas</h3>
  <i><p>“Un jeune qui a beaucoup voyagé est plus âgé qu’un
vieux qui est toujours resté au village.”
Adage africain</p></i>
  <hr>

  <p>L’avis du doctorant dans son encadrement ne doit
pas toujours être pris en compte. Pour dire vrai, il doit
être rarement pris en compte. Oublions l’approche
qui consiste à composer avec l’avis de l’apprenant
(le doctorant ici). Les résultats du système éducatif
français où cette approche a appliquée à outrance
ne sont pas flatteurs. Compte tenu de votre expérience, vous savez plus que votre doctorant ce qui contribuerait le plus à sa réussite. En guise d’exemple, j’ai
souvent entendu des collègues demander à leurs doctorants s’ils souhaiteraient bien soumettre un travail
à la conférence nationale de notre domaine. Conséquence, nous nous retrouvons avec une conférence
où la majorité des participants sont des chercheurs
permanents, alors que le but premier de cette conférence est de permettre aux doctorants: de présenter leur travaux dans un contexte national moins
stressant que le contexte international, de rencontrer
d’autres doctorants ainsi que les chercheurs confirmés de la communauté national (ce qui est important
pour élargir son réseau national). Pour ce qui me concerne, l’approche est la suivante: "Untel et untel, préparer des papiers pour la conférence xxx". Aucun de mes doctorants ne m’a un jour opposé un
refus car il ne sait pas que le refus est envisageable.
Il sait qu’il est en formation et que toutes mes injonctions se situent dans le cadre de sa formation.
Bien évidemment, chaque injonction est argumentée. L’objectif de l’argumentation ici n’est pas de
convaincre le doctorant, car ce dernier peut ne pas
comprendre les arguments dans un premier temps.
Les arguments sont donnés à titre pédagogique. Vous
ne vous justifiez aucunement pas. Vous n’êtes pas
dans une négociation ou marchandage. N’oubliez pas que vos doctorants sont sous vos ordres et vous devez
leur faire savoir cela dès le début de la collaboration.
Vous êtes le boss.</p>

<p>De toutes les façons, le doctorant vous suivra
d’autant plus qu’il verra la recommandation du
Chapitre 11 avancée. Suivre l’avis du doctorant peut
vous conduire à l’échec, sauf si le doctorant est un
génie (ce qui est très rare).</p>

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