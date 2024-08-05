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
        include "menu/menu_leaving.php";
    ?>

<div class = "black-box remzi-welcome my-5" style="width: 55%;">
  <h1 style="color:  #077ea3;"> 1759 Leaving </h1>
  <br/>


  <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      Soccer match
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
            <p style="color: black;">Soccer match with the team's students, a relaxing moment to relieve some of the pressure. </p>

            <img src="img/team.jpg" alt="rien pour l'instant">
      </div>
    </div>
  </div>
  <div class="accordion-item" style="margin-top: 15px;">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        After-work
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
            <p style="color: black;"> After-work cocktail party </p>
            <img src="img/partir.jpg" alt="rien pour l'instant" >
      </div>
    </div>
  </div>
</div>


<div class="accordion-item" style="margin-top: 15px;">
        <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    Bike Outing
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body accordion justify" >
                    <p style="color: black;">
                        The bike outing was conceived as a relaxing, team-building activity. Maxime Collette, the organizer, wanted to offer his colleagues a unique opportunity to reconnect with nature and enjoy a well-deserved break away from the office. The initiative also aimed to strengthen bonds between team members by creating shared memories in a different, pleasant setting.
                    </p>
                    
                    <img src="img/sortie.jpeg" alt=""/>
                  </div>
                </div>           
</div>
 

</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>