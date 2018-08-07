<?php

if($_POST["submit"]) {
    $recipient="contact@domaenevincendeau.com";
    $subject=$_POST["subject"];
    $subjectMail="Contact-Site Web : ".$subject;
    $subjectMailConfirmation="[Domäne Vincendeau] Votre message: [".$subject."] a bien été envoyé";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $headersConfirmation =  "From: Domäne Vincendeau<$recipient>" . "\r\n";
    $headersConfirmation .= "Reply-to: ".$recipient. "\r\n";;
    $headersConfirmation .= "MIME-Version: 1.0\r\n";
    $headersConfirmation .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headersConfirmation .= "Content-Type: image/jpeg; \r\n";

	$mailBody="Nom: $sender\nEmail: $senderEmail\nObjet: $subject\n\n$message";

    $mailBodyConfirmation ="
		<html>
		<head>
		<meta charset=\"ISO-8859-1\">
		<title>Domäne Vincendeau - Vins fins de Loire : Confirmation envoi message</title>

		</head>

		<body style=\"font-family: Open sans, monOpenSans; font-weight: normal; background-color: white; color:#009cac;\">
			<br/><br/>
			<table style=\" width: 710px;\">
						<tr style=\"vertical-align: baseline;\">
							<td style=\"padding: 10px;vertical-align: bottom;\">
								<div >
										Bonjour,<br/>
										Merci de votre message. <br/>
		    							Le Domäne Vincendeau vous apportera une réponse dans les meilleurs délais.<br/>
		    							Sincères salutations,

								</div>
							</td>
						</tr>
						<tr>
							<td style=\"padding: 10px;vertical-align: bottom;\">
								<div>
								<a href=\"http://www.domaenevincendeau.com\" style=\"bottom: 10px;text-decoration: none;\">
									<img src=\"http://www.domaenevincendeau.com/images/logo-mail.png\"
									alt=\"Domäne Vincendeau\" title=\"Domäne Vincendeau\"
									style=\"height: 107px; border:none;\" />
								</a>
								</div>
							</td>
						</tr>
					</table>
		</body>
		</html>
    ";

	mail($senderEmail, $subjectMailConfirmation, $mailBodyConfirmation, $headersConfirmation);

    mail($recipient, $subjectMail, $mailBody, "From: $sender<$senderEmail>");


    $thankYou="<p class='sectionCentreeFondBleu' style='left: -104px; width: 525px; font-size: 14px; position: relative;'>Votre demande a bien &eacute;t&eacute; prise en compte et un email de confirmation vient de vous &ecirc;tre adress&eacute; &agrave; : ".$senderEmail."<br/>Le Dom&auml;ne Vincendeau vous apportera une r&eacute;ponse dans les meilleurs d&eacute;lais.<br/>Merci de votre confiance ! </p>";
}

?>

<!doctype html>
<html class="no-js" lang="fr-FR">
  <head>
      <meta charset="utf-8">
      <title>Contacter le Dom&auml;ne Vincendeau</title>
      <meta http-equiv="keywords" content="Domaene, Domaine, Domane, Vincendeau, Vins, Cr&eacute;mant, Bulle, Blanc, Ros&eacute;, Jus de raisin, Loire, Anjou, fins, qualit&eacute;s, agriculture, biologique, bio, vigne, ballade, B&eacute;huard, Lombardières, Maine-et-Loire, France, Angers" />
      <meta name="author" content="Julien Vincendeau" />
      <meta name="copyright" content="&copy; Dom&auml;ne Vincendeau" />
      <meta http-equiv="Content-Language" content="fr-FR" />
      <meta name="viewport" content="width=device-width">

      <!-- Schema.org markup for Google+ -->
      <meta itemprop="name" content="#Crémants et #Vins fins de #Loire depuis 2014 ">
      <meta itemprop="description" content="Entre coteaux et bords de Loire nous &eacute;laborons des vins fins de Loire en Anjou, certifi&eacute;s ecocert, sur la commune de Rochefort-sur-Loire. ">
      <meta itemprop="image" content="http://www.domaenevincendeau.com/images/logo-mail.jpg">

      <!-- Twitter Card data -->
      <meta name="twitter:card" content="summary">
      <meta name="twitter:site" content="@DomaeVincendeau">
      <meta name="twitter:title" content="#Crémants et #Vins fins de #Loire depuis 2014 ">
      <meta name="twitter:description" content="Entre coteaux et bords de Loire nous &eacute;laborons des vins fins de Loire en Anjou, certifi&eacute;s ecocert, sur la commune de Rochefort-sur-Loire. ">
      <meta name="twitter:creator" content="@julienv1cendeau">
      <meta name="twitter:image" content="http://www.domaenevincendeau.com/images/logo-mail.jpg">

      <!-- Open Graph data -->
      <meta property="og:title" content="#Crémants et #Vins fins de #Loire depuis 2014 " />
      <meta property="og:type" content="website" />
      <meta property="og:url" content="http://www.domaenevincendeau.com" />
      <meta property="og:image" content="http://www.domaenevincendeau.com/images/logo-mail.jpg" />
      <meta property="og:description" content="Entre coteaux et bords de Loire nous &eacute;laborons des vins fins de Loire en Anjou, certifi&eacute;s ecocert, sur la commune de Rochefort-sur-Loire. " />
      <meta property="og:site_name" content="Dom&auml;ne Vincendeau" />


      <meta name="description" content="Envie de d&eacute;guster nos vins, nous rencontrer, visiter le dom&auml;ne ? Nous vous accueillons avec plaisir &amp; sur rendez-vous." />

      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <!--Effet du menu -->
      <link rel="stylesheet" type="text/css" href="frameworks\CreativeLinkEffects\css\component.css" />
      <!--Definition des couleurs des barres qui vont tourner autour du lien -->
      <link rel="stylesheet" type="text/css" href="styles\myCreativeLinkEffects.css" />
      <!--Déclaration de notre barre de menu bootstrap-->
      <link rel="stylesheet" type="text/css" href="styles\myBootstrapMenu.bs4.css" />
      <link rel="stylesheet" type="text/css" href="styles\footer.css" />

      <!-- fa -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

      <!--Mon identité-->
      <link rel="stylesheet" type="text/css" href="styles\domaenevincendeau.css" />

      <link rel="shortcut icon" href="images/favicon.ico" />


      <style type="text/css">
      figure
      {
        float: left;
        margin: 0 0px 0 0;
        background: transparent;
        border: 0px solid white;
        /*-webkit-box-shadow: 0 3px 10px #ccc;
        -moz-box-shadow: 0 3px 10px #ccc;
        -o-box-shadow: 0 3px 10px #ccc;*/

        -webkit-transform: rotate(5deg); /* Saf3.1 , Chrome */
        -moz-transform: rotate(5deg); /* FF3.5 */
        -o-transform: rotate(5deg); /* Opera 10.5 */
        -ms-transform: rotate(5deg);   /* Internet Explorer */

        -webkit-transition: all 0.7s ease;
        -moz-transition: all 1s ease;
        -o-transition: all 1s ease;
        -ms-transition: all 1s ease;
         transition: all 1s ease;
              max-width: 100%;

        position: relative;
      }

      figcaption
      {
        text-align: center;
        display: block;
        font-size: 12px;
        font-style: italic;
      }
      figure:hover
      {
        -webkit-transform: rotate(-1deg); -moz-transform: rotate(1deg);
        -o-transform: rotate(1deg); -ms-transform: rotate(1deg);

        webkit-transform:scale(1.50); /* Safari and Chrome */
          -moz-transform:scale(1.50); /* Firefox */
          -ms-transform:scale(1.50); /* IE 9 */
          -o-transform:scale(1.50); /* Opera */
           transform:scale(1.50);
             z-index: 99;

       /* -webkit-box-shadow: 0 3px 10px #666; -moz-box-shadow: 0 3px 10px #666;
        -o-box-shadow: 0 3px 10px #666; -ms-box-shadow: 0 3px 10px #666;*/
      }

      </style>




    </head>
  <body>
    <!--[if lte IE 8]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <header>
    <div id="navbar-full">
       <div id="navbar">
         <nav class="navbar navbar-expand-lg navbar-light bg-white cl-effect-14"  role="navigation">
           <div class="container  col-xs-1 col-sm-1 col-md-1"></div>
           <div class="container  col-xs-10 col-sm-10 col-md-10 ">
             <a class="navbar-brand navbar-brand-logo" href="http://www.domaenevincendeau.com" style="height: 121px; padding: 0 0 0 0; margin-left: 0px">
                <div class="logo" >
                   <img src="images\logo-mail.png" class="imgBrand"  id='Logo'>
                </div>
                <div class="brand">  </div>
             </a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse"  id="navbarNavAltMarkup">
                <div class="navbar-nav   ml-auto">
                  <a href="index.html" class="nav-item navbar-link lang " key="linkHome">Dom&auml;ne</a>
                  <a href="valeurs.html" class="nav-item navbar-link lang" key="linkValeurs">Valeurs</a>
                  <a href="qualitaet.html" class="nav-item navbar-link lang " key="linkQualitaet">Qualit&auml;t</a>
                  <a href="vins-fins-de-loire.html" class="nav-item navbar-link lang" key="linkVins">Vins</a>
                  <a href="presse.html" class="nav-item navbar-link lang" key="linkPresse">Echo</a>
                  <a href="event.html" class="nav-item  nav-item navbar-link lang " key="linkEvents">Events</a>
                  <a href="contact.php" class="nav-item navbar-link lang active" key="linkContact">Contact</a>
               </div>
              </div>
            </div><!-- /.container-fluid -->
            <div class="container  col-xs-1 col-sm-1 col-md-1"></div>
          </nav>
       </div><!--  end navbar -->
     </div> <!-- end menu-dropdown -->
   </header>

   <main>
     <div class="main container-fluid ">
       <row class="bandeau-container  container-fluid" >
         <div class="img-src" style="background-image: url('images/watching_haut.jpeg'); background-position:center bottom;"></div>
       </row>
       <div class="row">
         <div class="col col-xl-2 col-lg-2 col-sm-12  col-md-12  col-12" style="min-height: 23vh; display: flex;align-items: center; text-align:center;">
         </div>
         <div class="col col-xl-8 col-lg-8  col-sm-12 col-md-12  col-12" style="text-align: justify; vertical-align:top;  border: none; word-wrap: break-word; min-height: 23vh;">

           <article class="container   col-xs-12 col-sm-10 col-md-8" style="position: relative; z-index: 99; top: -24px;">
             	<table style="width: 102%;margin-top: 35px;"><tr>
             	<td>
           	    <div style="text-align: justify; vertical-align:top;  border: none; word-wrap: break-word; float:left;">
           		  <p >
           			Envie de d&eacute;guster nos vins, nous rencontrer, visiter le dom&auml;ne ?<br/>
           			Nous vous accueillons avec plaisir &amp; sur rendez-vous.<br/>
           			Pour nous joindre, voici nos coordonn&eacute;es.
           		  </p>
           		  <p><b>Dom&auml;ne Vincendeau</b></p>
           		  <p>
           			      L'Enclos &bull; Route de Port Godard<br/>
           			       Les Lombardières 49190 Rochefort sur Loire &bull; France
           		  </p>

           		<p style="font-weight: bolder;" >
           			<div style="font-size:large; color:#009cac;" ><b>fon &bull; fax 02 41 57 21 15</b></div>
           			<div>mail : contact@domaenevincendeau.com </div><br>
                <div >
                    <a href="https://twitter.com/DomaeVincendeau" target="_blank"> <i class="fab fa-twitter fa-2x" style="color:#009cac"></i> </a> &nbsp;
                    <a href="https://www.facebook.com/DomaeVincendeau/" target="_blank"> <i class="fab fa-facebook fa-2x" style="color:#009cac"></i> </a> &nbsp;
                    <a href="https://www.instagram.com/liv_vincendeau/" target="_blank"> <i class="fab fa-instagram fa-2x" style="color:#009cac"></i> </a> &nbsp;
                    <a href="https://goo.gl/maps/1ZzjXZ1QBiL2" target="_blank"> <i class="fas fa-map-marker-alt fa-2x" style="color:#009cac"></i> </a>
                </div>
           		</p>

           		<p>
           			A bient&ocirc;t / Bis bald !
           		</p>
               </div>
           	</td>
           	<td style="text-align: center; ">
           		<div >
           		<figure  contenteditable="false" style="height: auto;">
           		<img src="images/plan-domaene-vincendeauV3-HD-trans.png" alt="Plan d\'accès au Domäne Vincendeau"  contenteditable="false" style="height: 350px; float: left;"/>
           		<!-- <figcaption contenteditable="false" style="visibility: hidden;">Plan d'acc�s au Dom�ne Vincendeau</figcaption>-->
           		</figure>
           		</div>
           	</td>
           	</tr>	</table>
         	</article>


          <section id="thankyou" style="position: relative; z-index: 5; top: 0px;">
                <?=$thankYou ?>
          </section>
          <br/>
          <section >
          <article class="sectionCentree" style="position: relative; z-index: 5; top: 0px;">
                  <form method="post" action="contact.php#thankyou">
                    <fieldset  style="width:70%; border: none; float:left;">
                      <input type="text" required id="nom" name="sender" style="width: 100%;" placeholder="nom" /><br/>
                      <input type="email" required id="nom" name="senderEmail" style="width: 100%;" placeholder="Adresse email" /><br/>
                      <input type="text" required id="sujet" name="subject" style="width: 100%;" placeholder="sujet" /><br/>
                      <textarea rows="" cols="" required id="message"   name="message" placeholder="message" ></textarea><br/>
                      <input type="submit" name="submit" value="envoyer" />
                    </fieldset>
                  </form>
          </article>

         </div>
         <div class="col col-xl-2 col-lg-2  col-sm-12  col-md-12  col-12" >
         </div>
       </div>
     </div>
   </main>

   <!-- Footer -->
   <footer >
     <div class="container-fluid ">
      <section id="footer"  style="background-image: url('images/watching_bas.jpeg') !important; background-position:center top !important; background-repeat: no-repeat !important;background-size: cover !important;" >
        <div class="container">
          <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-12 col-md-12 col-12">
              <h5>Plan du site</h5>
              <ul class="list-unstyled quick-links">
                <li><a href="index.html"><i class="fa fa-angle-double-right"></i>Dom&auml;ne</a></li>
                <li><a href="valeurs.html"><i class="fa fa-angle-double-right"></i>Valeurs</a></li>
                <li><a href="qualitaet.html"><i class="fa fa-angle-double-right"></i>Qualit&auml;t</a></li>
                <li><a href="vins-fins-de-loire.html"><i class="fa fa-angle-double-right"></i>Vins</a></li>
                <li><a href="presse.html"><i class="fa fa-angle-double-right"></i>Echo</a></li>
                <li><a href="event.html"><i class="fa fa-angle-double-right"></i>Events</a></li>
                <li><a href="contact.php"><i class="fa fa-angle-double-right"></i>Contact</a></li>
                <li><a href="mentions-legales.html"><i class="fa fa-angle-double-right"></i>Mentions l&eacute;gales</a></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5" style="margin-top: 0px !important; margin-bottom: 0px !important;">
              <ul class="list-unstyled list-inline social text-center" style="margin-top: 0px !important; margin-bottom: 0px !important;">
                <li class="list-inline-item"><a href="https://www.facebook.com/DomaeVincendeau/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href="https://twitter.com/DomaeVincendeau" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="https://www.instagram.com/domaene_vincendeau/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="https://goo.gl/maps/1ZzjXZ1QBiL2" target="_blank"><i class="fas fa-map-marker-alt"></i></a></li>
                <li class="list-inline-item"><a href="mailto:contact@domaenevincendeau.com" target="_blank"><i class="fas fa-envelope"></i></a></li>
              </ul>
            </div>
            </hr>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
               <p>Dom&auml;ne Vincendeau <b style="font-weight: bolder;">&nbsp;fon &bull; fax <a href="tel:+33241572115" style="text-decoration: none; color: inherit;" >02 41 57 21 15</a>&nbsp;</b> <a href="mailto:contact@domaenevincendeau.com" style="text-decoration: none; color: inherit;" >contact@domaenevincendeau.com</a></p>
               <p>L'Enclos &bull; Route de Port Godard &bull; Les Lombardi&egrave;res 49190 Rochefort sur Loire &bull; France</p>
               <p>L'abus d'alcool est dangereux pour la sant&eacute;, sachez le consommer avec mod&eacute;ration</p>
               <p><a href="mentions-legales.html" style="text-decoration: none; color: inherit;" class="navbar-link lang" key="linkMentions">Mentions l&eacute;gales</a> - @2014 Designed by<a href="http://zougraphiste.com/" target="_blank" style="text-decoration: none; color: inherit;"> zOugraphiste.com </a>&bull; Created with <i class="fas fa-heart"></i> by <a href="https://fr.linkedin.com/in/julienvincendeau" target="_blank" style="text-decoration: none; color: inherit;" >Julien Vincendeau</a></p>
               <p class="h6">&copy All right Reversed. Domäne Vincendeau</p>
            </div>
            </hr>
          </div>
        </div>
      </section>
     </div>
   </footer>
   <!-- ./Footer -->

      <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
      <!--
       <script>
         !function(A,n,g,u,l,a,r){A.GoogleAnalyticsObject=l,A[l]=A[l]||function(){
         (A[l].q=A[l].q||[]).push(arguments)},A[l].l=+new Date,a=n.createElement(g),
         r=n.getElementsByTagName(g)[0],a.src=u,r.parentNode.insertBefore(a,r)
         }(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

         ga('create', 'UA-XXXXX-X');
         ga('send', 'pageview');
      </script>
  -->


<!--
  <div class="container  col-md-12    col-xs-12 col-sm-12">
      <button class="translate" id="en">English</button>
      <button class="translate" id="fr">Français</button>
      <button class="translate" id="de">Deutsch</button>

  </div>
-->
  </body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="js\mytranslate.js"></script>
<script src="js\translate.menu.js"></script>
<script src="js\detectBrowserLang.js"></script>

<script>
window.onscroll = function() {
  growShrinkLogo()
};

function growShrinkLogo() {
  var Logo = document.getElementById("Logo")
  if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
    Logo.className="imgBrandScrolled"
  } else {
    Logo.className = "imgBrand";
  }
}
</script>
