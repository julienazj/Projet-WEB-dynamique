<?php
    require_once './verification.php';
?>﻿
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>    
    
    <div id="wrapper">
        <?php
            include './navbar_top.php';
            include './navbar_side.php';
        ?>
        
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>Index</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Bienvenue <?php echo $username; ?> ! </strong>Vous êtes dans le système de gestion des étudiants et des cursus.
                        </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
                <div class="panel panel-primary">
                    <div class="panel-heading">A propos des auteurs</div>
                    <div class="panel-body">
                        Auteurs : Zijie AN & Xianglong LI
                        <p>
                            Dans le cadre de l’UE LO07 « Technologies du web », nous avons effectué un projet de site web dynamique en utilisant le langage PHP, 
                            durant lequel nous avons bien mis nos connaissances sur les technologies du web en pratique, par exemple, 
                            html la base d’une page web, css les styles enrichissant une page web, 
                            javascript le langage permettant d’effectuer un site web dynamique, PHP un langage de back-end qui règle les transactions, etc.
                        </p>
                        <p>
                            Ce projet a pour objet de progresser le règlement actuel des cursus des étudiants du programme ISI de l’UTT pour qu’il soit plus compréhensible et clair pour les étudiants et les jurys. 
                            Pour ce faire, nous avons réalisé plusieurs fonctionnalités. Les fonctionnalités principales que nous avons réalisées sont : 
                            la gestion des étudiants – l’ajout, la suppression, la modification et la lecture des étudiants ; 
                            la gestion des cursus – l’ajout, la suppression, la modification et la visualisation des cursus ; 
                            l’importation et l’exportation d’un fichier d’extension csv pour les cursus d’un étudiant ; 
                            la confirmation de la conformité du règlement actuel et futur.
                        </p>
                    </div>
                </div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
