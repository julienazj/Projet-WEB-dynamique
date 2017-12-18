<?php
    require_once './verification.php';
    if(isset($_GET['noCarte'])) {
        $noCarte = $_GET['noCarte'];
    }
?>﻿
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Management de cursus</title>
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
                     <h2>AJOUTER UN CURSUS </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <hr />
        
         
        <p>Choisir votre ficher csv：</p>
        <form id="addcsvcursus" action="./action/CsvCursusAction.php?action=import" method="post" enctype="multipart/form-data">
        <input type="file" name="file" type="submit" value="import" />
        <input type="submit" value="import">
            </form>
         
            </div>
        </div>
    </div></body></html>
       



