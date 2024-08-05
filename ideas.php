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
<body class="about">
    <?php
        include "menu/menu_ideas.php";
    ?>

<div class="black-box remzi-research my-5" style="width: 50%;">
  
  
  <h1 style="color:  #077ea3;"> Ideas </h1>
  <hr>

  <p>Get inspired by the best operating system ideas every week on this page. To find out more about each topic, please contact me.</p>

  <p>The idea of the week is : </p>

  <b><p id="elementAleatoire"></p></b>


</div>

<script>
    // Tableau d'éléments
    const elements = ["élément1", "élément2", "élément3", "élément4", "élément5"];

    // Fonction pour générer un nombre aléatoire
    function getRandomNumber(min, max) {
      return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    // Fonction pour sélectionner un élément aléatoire dans le tableau
    function getElementAleatoire() {
      const index = getRandomNumber(0, elements.length - 1);
      return elements[index];
    }

    // Fonction pour vérifier si une nouvelle semaine a commencé
    function isNewWeek() {
      const currentDate = new Date();
      const currentWeek = currentDate.getFullYear() + "-" + ("0" + (currentDate.getMonth() + 1)).toString().slice(-2) + "-" + ("0" + currentDate.getDate()).toString().slice(-2);
      const lastWeek = localStorage.getItem("lastWeek");

      if (!lastWeek) {
        localStorage.setItem("lastWeek", currentWeek);
        return true;
      }

      if (lastWeek !== currentWeek) {
        localStorage.setItem("lastWeek", currentWeek);
        return true;
      }

      return false;
    }

    // Vérifier si une nouvelle semaine a commencé et sélectionner un nouvel élément aléatoire
    if (isNewWeek()) {
      const elementAleatoire = getElementAleatoire();
      localStorage.setItem("elementAleatoire", elementAleatoire);
    }

    // Afficher l'élément aléatoire de la semaine
    document.getElementById("elementAleatoire").innerText = localStorage.getItem("elementAleatoire");
  </script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>