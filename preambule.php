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
  <h3>Préambule</h3>
  <i><p>“Si l’homme a deux oreilles et une bouche, c’est pour
écouter deux fois plus qu’il ne parle.”
Confucius</p></i>
  <hr>

  <p>- ViQ : Bonjour Tchana. Tu es grand, beau et fort!<br/><br/>
- Moi : Bonjour professeur.<br/><br/>
- ViQ : Qu’est ce que tu lis?<br/><br/>
- Moi : Un article qui traite de la gestion de ressources
dans le cloud.<br/><br/>
- ViQ : Fais voir.... Il a été publié dans quelle conférence? <br/><br/>
- Moi : International Conference of Computer.... (je
n’ai pas eu le temps de donner le complet de la
conférence.)<br/><br/>
- ViQ : Ne le lis plus, cet article. Il ne t’apportera rien.<br/><br/>
- Moi : Pourquoi?<br/><br/>
les articles qui y sont publiés ne valent rien non plus.<br/><br/>

- Moi : Comment ça elle ne vaut rien? Se sont bien des
chercheurs qui y publient, non?<br/><br/>
- ViQ : Certainement. Se sont bien des chercheurs. Mais
cela n’empêche pas que les travaux publiés dans cette
conférence ne valent pas grand chose. Ne lis plus les
articles de cette conférence. De façon générale, ne lis
que des articles publiés dans les conférences classées A*
et A. Et encore, certaines conférences classées A ne le méritent même pas. Mais bon, pour toi c’est déjà un
bon début.<br/><br/>
- Moi : C’est quoi ce classement des conférences? C’est
quoi A* et A? Pourquoi ce mépris pour les travaux des
autres chercheurs?<br/><br/>
- ViQ : Non. Il ne s’agit pas de mépris. Il existe des
classements, reconnus, des conférences en fonction de
leur réputation. Dans ces classements, A* et A sont
les rangs les plus élevés. Les articles publiés dans les
conférences en dessous de ces rangs ne valent pas la
peine d’être lu. Ils ne t’aiderons pas à progresser.<br/><br/>
- Moi : Cela signifie-t-il que toutes les publications que
j’ai réalisées durant ma thèse ne comptent pas? De
même que celles de mes collègues de thèse? J’imagine
qu’il en est de même de celles que je m’apprête à réaliser durant mon post-doctorat ici?<br/><br/>
- ViQ : Oui, si tous ces travaux ont été publiés dans des
conférences non réputées.<br/><br/>
- Moi : Je ne pense pas. Je pense que tous les travaux se
valent. Ce n’est pas à un petit groupe de chercheurs de
décider de ce qui est pertinent ou non pertinent pour le
futur. <br/><br/>
- ViQ : C’est comme tu veux. Je t’informe tout simplement de ce qui est considéré par les meilleurs
scientifiques et grands groupes industriels. Si tu
souhaites que tes travaux soient connus, reconnus et
avoir une chance d’être repris, alors ne lis plus ce genre
d’articles. Dans tous les cas, tu es grand, beau et fort
Tchana!

</p>


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