<!DOCTYPE html>
<html lang="fr">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Print3R</title>

    <link href="./bootstrap/css/bootstrap.css" rel="stylesheet">    <!-- Bootstrap core CSS -->
	<link href="./bootstrap/css/parallax.css" rel="stylesheet">
	<script type="text/javascript" src="chrome-extension://bfbmjmiodbnnpllbbbfblcplfjjepjdn/js/injected.js"></script>
 <!-- custom styles -->
    
	<style id="holderjs-style" type="text/css"></style>
	
<body screen_capture_injected="true" style="">
    <div class="navbar-wrapper">
      <div class="container" style="fixed">
      
        <div class="navbar navbar-inverse navbar-static-top" role="navigation"  style="position : fixed;">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="./">Print3R</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="./">Accueil</a></li>
                <li><a href="page_faq.php">FAQ</a></li>
                <li class="active"><a href="page_a-propos.php">A propos</a></li>
				<li><a href="page_contactez-nous.php">Contactez-nous</a></li>
                <li><a href="page_connexion.php">Connectez-vous</a></li>      
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mod&egrave;les <b class="caret"></b></a>
                 
                  <ul class="dropdown-menu">
                    <li class="dropdown-header">Type de modele 1</li>
                    <li><a href="#">Action</a href="page_contenu.php"></li>
                    <li><a href="#">Another action</a href="page_contenu.php"></li>
                    <li><a href="#">Something else here</a href="page_contenu.php"></li>

                    <li class="divider"></li>                    
                    <li class="dropdown-header">Type de modele 2</li>
                    <li><a href="#">Separated link</a href="page_contenu.php"></li>
                    <li><a href="#">One more separated link</a href="page_contenu.php"></li>

                    <li class="divider"></li>                    
                    <li class="dropdown-header">Type de modele 2</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a href="page_contenu.php"></li>
                    <li><a href="#">One more separated link</a href="page_contenu.php"></li>
                    <li><a href="#">One more separated link</a href="page_contenu.php"></li>

                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
	

</head>

<!-- NAVBAR
================================================== -->
  
	
	
	<div id="slide1" style="background-position: 50% -110px; padding-top:-50px;">
	
		<div class="slide_inside">					
			
			<figure>
				<img src="bootstrap/img/p3R.png" alt="logo Print3R">
			</figure>
			
		</div> <!--.slide_inside-->	 
						
	</div> <!--#slide1-->
	
	
	<div id="slide2" style="background-position: 50% -70px;">
		
		<div class="slide_inside">
		
			<h2>Un titre de niveau 2</h2>

			<p>Lorem Salu bissame ! Wie geht's les samis ? Hans apporte moi une Wurschtsalad avec un picon bitte, s'il te plaît.Voss ? Une Carola et du Melfor ? Yo dû, espèce de Knäckes, ch'ai dit un picon !</p>
  
			<p>Hopla vous savez que la mamsell Huguette, la miss Miss Dahlias du messti de Bischheim était au Christkindelsmärik en compagnie de Richard Schirmeck (celui qui a un blottkopf), le mari de Chulia Roberstau, qui lui trempait sa Nüdle dans sa Schneck ! Yo dû, Pfourtz ! Ch'espère qu'ils avaient du Kabinetpapier, Gal !</p>
			
			<p>Yoo ch'ai lu dans les DNA que le Racing a encore perdu contre Oberschaeffolsheim. Verdammi et moi ch'avais donc parié deux knacks et une flammekueche. Ah so ? T'inquiète, ch'ai ramené du schpeck, du chambon, un kuglopf et du schnaps dans mon rucksack. Allez, s'guelt ! Wotch a kofee avec ton bibalaekaess et ta wurscht ? Yeuh non che suis au réchime, je ne mange plus que des Grumbeere light et che fais de la chym avec Chulien. Tiens, un rottznoz sur le comptoir.</p>

			<p>Tu restes pour le lotto-owe ce soir, y'a baeckeoffe ? Yeuh non, merci vielmols mais che dois partir à la Coopé de Truchtersheim acheter des mänele et des rossbolla pour les gamins. Hopla tchao bissame ! Consectetur adipiscing elit</p>
			
		</div> <!--.slide_inside-->	     	
	    
	</div> <!--#slide2-->
	
	
	<div id="slide3" style="background-position: 50% 20px;">
	
		<div class="slide_inside" >

			<h2>Crédits</h2>		
			
				<ul>
					<li>Page de démonstration de l'article <a href="/astuce/lire/1417-effet-parallaxe.html">Zoom sur l'effet parallaxe</a> sur <a href="http://www.alsacreations.com">Alsacréations.com</a></li>
					<li>Photos : <a href="http://www.flickr.com/photos/legofenris/">leg0fenris</a></li>
					<li>Utilisation du script : <a href="https://github.com/IanLunn/jQuery-Parallax">jQuery-Parallax</a></li>
				</ul>
			
		</div> <!--.slide_inside-->	    
		
	</div> <!--#slide3-->
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/jquery.jparallax-1.1.js"></script>

	<script type="text/javascript">
	
		$(document).ready(function(){
		
		//.parallax(xPosition, adjuster, inertia, outerHeight) 
		//xPosition - Position horizontale de l'élément (css)
		//adjuster - La position Y de départ
		//inertia - Vitesse en fonction du Scroll. Exemple: 0.1 est 1/10 ème de la vitesse du scroll. 2 = deux fois la vitesse du scroll.
		//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
			$('#slide1').parallax("center", 0, 0.1, true);
			$('#slide2').parallax("center", 900, 0.1, true);
			$('#slide3').parallax("center", 2900, 0.1, true);
		})
	</script>


</body></html>