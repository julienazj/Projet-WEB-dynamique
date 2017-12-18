<?php
    require_once './verification.php';
    require_once './student_getList.php';
?>﻿
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Règlements</title>
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
                     <h2>REGLEMENTS </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <hr />
                <div class="alert alert-info">
                    Cliquer un étudiant pour voir sa conformité de règles.
                </div>
                <br>
                
                <table class='table table-bordered'>
                    <thead>
                        <tr>
                            <th width='10%'>Filière</th>
                            <th width='90%'>Etudiants</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>?(TCBR)</td>
                            <td>
                                <?php
                                    foreach($tcbr as $key=>$student) {
                                        $noCarte = $student->getNoCarte();
                                        $nom = $student->getNom();
                                        $prenom = $student->getPrenom();
                                        echo "<a href='regle_actuel.php?noCarte=$noCarte'>$prenom $nom</a>";
                                        if($key < count($tcbr) - 1) {
                                            echo ", ";
                                        }
                                    } 
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>MPL</td>
                            <td>
                                <?php
                                    foreach($mpl as $key=>$student) {
                                        $noCarte = $student->getNoCarte();
                                        $nom = $student->getNom();
                                        $prenom = $student->getPrenom();
                                        echo "<a href='regle_actuel.php?noCarte=$noCarte'>$prenom $nom</a>";
                                        if($key < count($mpl) - 1) {
                                            echo ", ";
                                        }
                                    } 
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>MSI</td>
                            <td>
                                <?php
                                    foreach($msi as $key=>$student) {
                                        $noCarte = $student->getNoCarte();
                                        $nom = $student->getNom();
                                        $prenom = $student->getPrenom();
                                        echo "<a href='regle_actuel.php?noCarte=$noCarte'>$prenom $nom</a>";
                                        if($key < count($msi) - 1) {
                                            echo ", ";
                                        }
                                    } 
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>MRI</td>
                            <td>
                                <?php
                                    foreach($mri as $key=>$student) {
                                        $noCarte = $student->getNoCarte();
                                        $nom = $student->getNom();
                                        $prenom = $student->getPrenom();
                                        echo "<a href='regle_actuel.php?noCarte=$noCarte'>$prenom $nom</a>";
                                        if($key < count($mri) - 1) {
                                            echo ", ";
                                        }
                                    } 
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>LIB</td>
                            <td>
                                <?php
                                    foreach($lib as $key=>$student) {
                                        $noCarte = $student->getNoCarte();
                                        $nom = $student->getNom();
                                        $prenom = $student->getPrenom();
                                        echo "<a href='regle_actuel.php?noCarte=$noCarte'>$prenom $nom</a>";
                                        if($key < count($lib) - 1) {
                                            echo ", ";
                                        }
                                    } 
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
