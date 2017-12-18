<?php
    require_once './verification.php';
?>﻿
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Management d'étudiants</title>
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
                    <div class="col-md-12">
                     <h2>AJOUTER UN ETUDIANT </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <hr />
                
                <form method='post' action='./action/studentAction.php?action=add'>
                    <div class='row'>
                        <div class='form-group'>
                            <div class='col-md-2'>
                                <label for="NoCarte">Numéro d'étudiant :</label>
                            </div>
                            <div class='col-md-4'>
                                <input type="text" class="form-control" id="NoCarte" name='noCarte' placeholder="Numéro d'étudiant">
                            </div>
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='form-group'>
                            <div class='col-md-2'>
                                <label for="Nom">Nom :</label>
                            </div>
                            <div class='col-md-4'>
                                <input type="text" class="form-control" id="Nom" name='nom' placeholder="Nom">
                            </div>
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='form-group'>
                            <div class='col-md-2'>
                                <label for="Prenom">Prénom :</label>
                            </div>
                            <div class='col-md-4'>
                                <input type="text" class="form-control" id="Prenom" name='prenom' placeholder="Prénom">
                            </div>
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='form-group'>
                            <div class='col-md-2'>
                                <label for="Admission">Admission :</label>
                            </div>
                            <div class='col-md-4'>
                                <select class="form-control" id="Admission" name="admission">
                                    <option value="TC">TC</option>
                                    <option value="BR">BR</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='form-group'>
                            <div class='col-md-2'>
                                <label for="Filiere">Filière :</label>
                            </div>
                            <div class='col-md-4'>
                                <select class="form-control" id="Filiere" name="filiere">
                                    <option value="?">?</option>
                                    <option value="MPL">MPL</option>
                                    <option value="MSI">MSI</option>
                                    <option value="MRI">MRI</option>
                                    <option value="LIB">LIB</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='col-md-offset-2'>
                            <input type="reset" value="annuler">
                            <input type="submit" value="ajouter">
                        </div>
                    </div>
                </form>
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
