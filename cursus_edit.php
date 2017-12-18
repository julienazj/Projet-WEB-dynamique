<?php
    require_once './verification.php';
    require_once 'model/Cursus.php';
    
    if(isset($_GET['noCarte'])) {
            $noCarte = $_GET['noCarte'];
        }
        if(isset($_GET['sem_seq'])) {
            $sem_seq = $_GET['sem_seq'];
        }
        if(isset($_GET['sem_label'])) {
            $sem_label = $_GET['sem_label'];
        }
        if(isset($_GET['sigle'])) {
            $sigle = $_GET['sigle'];
        }
        if(isset($_GET['categorie'])) {
            $categorie = $_GET['categorie'];
        }
        if(isset($_GET['affectation'])) {
            $affectation = $_GET['affectation'];
        }
        if(isset($_GET['utt'])) {
            $utt = $_GET['utt'];
        }
        if(isset($_GET['profil'])) {
            $profil = $_GET['profil'];
        }
        if(isset($_GET['credit'])) {
            $credit = $_GET['credit'];
        }
        if(isset($_GET['resultat'])) {
            $resultat = $_GET['resultat'];
        }
        $cursus = new Cursus($noCarte, $sem_seq, $sem_label, $sigle, $categorie, $affectation, $utt, $profil, $credit, $resultat);
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
   
   <script>
       function saveOldCursus() {
           <?php
                session_start();
                $_SESSION['oldCursus'] = serialize($cursus);
           ?>
           return true;
       }
   </script>
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
                     <h2>MODIFIER UN CURSUS </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <hr />
                
                <form method='post' action='./action/cursusAction.php?action=edit' onsubmit="saveOldCursus()">
                    <div class='row'>
                        <div class='form-group'>
                            <div class='col-md-2'>
                                <label for="NoCarte">Numéro d'étudiant :</label>
                            </div>
                            <div class='col-md-4'>
                                <input type="text" class="form-control" id="NoCarte" name='noCarte' value="<?php echo $noCarte ?>" readonly="readonly">
                            </div>
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='form-group'>
                            <div class='col-md-2'>
                                <label for="sem_seq">sem_seq :</label>
                            </div>
                            <div class='col-md-4'>
                                <input type="text" class="form-control" id="sem_seq" name='sem_seq' value="<?php echo $sem_seq ?>">
                            </div>
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='form-group'>
                            <div class='col-md-2'>
                                <label for="sem_label">sem_label :</label>
                            </div>
                            <div class='col-md-4'>
                                <input type="text" class="form-control" id="sem_label" name='sem_label' value="<?php echo $sem_label ?>">
                            </div>
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='form-group'>
                            <div class='col-md-2'>
                                <label for="sigle">sigle :</label>
                            </div>
                            <div class='col-md-4'>
                                <input type="text" class="form-control" id="sigle" name='sigle' value="<?php echo $sigle ?>">
                            </div>
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='form-group'>
                            <div class='col-md-2'>
                                <label for="categorie">catégorie :</label>
                            </div>
                            <div class='col-md-4'>
                                <select class="form-control" id="categorie" name="categorie">
                                    <option value="CS" <?php if($categorie === "CS") {echo "selected";} ?>>CS</option>
                                    <option value="TM" <?php if($categorie === "TM") {echo "selected";} ?>>TM</option>
                                    <option value="EC" <?php if($categorie === "EC") {echo "selected";} ?>>EC</option>
                                    <option value="CT" <?php if($categorie === "CT") {echo "selected";} ?>>CT</option>
                                    <option value="ME" <?php if($categorie === "ME") {echo "selected";} ?>>ME</option>
                                    <option value="ST" <?php if($categorie === "ST") {echo "selected";} ?>>ST</option>
                                    <option value="SE" <?php if($categorie === "SE") {echo "selected";} ?>>SE</option>
                                    <option value="HP" <?php if($categorie === "HP") {echo "selected";} ?>>HP</option>
                                    <option value="NPML" <?php if($categorie === "NPML") {echo "selected";} ?>>NPML</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='form-group'>
                            <div class='col-md-2'>
                                <label for="affectation">affectation :</label>
                            </div>
                            <div class='col-md-4'>
                                <select class="form-control" id="affectation" name="affectation">
                                    <option value="TC" <?php if($affectation === "TC") {echo "selected";} ?>>TC</option>
                                    <option value="BR" <?php if($affectation === "BR") {echo "selected";} ?>>BR</option>
                                    <option value="TCBR" <?php if($affectation === "TCBR") {echo "selected";} ?>>TCBR</option>
                                    <option value="FCBR" <?php if($affectation === "FCBR") {echo "selected";} ?>>FCBR</option>
                                    <option value="UTT" <?php if($affectation === "UTT") {echo "selected";} ?>>UTT</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='col-md-2'>
                            <label>utt :</label>
                        </div>
                        <div class="col-md-4">
                            <label class="radio-inline">
                                <input type="radio" name="utt" value="Y" <?php if($utt === "Y") {echo "checked";} ?>> Y
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="utt" value="N" <?php if($utt === "N") {echo "checked";} ?>> N
                            </label>
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='col-md-2'>
                            <label>profil :</label>
                        </div>
                        <div class="col-md-4">
                            <label class="radio-inline">
                                <input type="radio" name="profil" value="Y" <?php if($profil === "Y") {echo "checked";} ?>> Y
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="profil" value="N" <?php if($profil === "N") {echo "checked";} ?>> N
                            </label>
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='form-group'>
                            <div class='col-md-2'>
                                <label for="credit">crédit :</label>
                            </div>
                            <div class='col-md-4'>
                                <input type="text" class="form-control" id="credit" name='credit' value="<?php echo $credit ?>">
                            </div>
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='form-group'>
                            <div class='col-md-2'>
                                <label for="resultat">résultat :</label>
                            </div>
                            <div class='col-md-4'>
                                <select class="form-control" id="resultat" name="resultat">
                                    <option value="A" <?php if($resultat === "A") {echo "selected";} ?>>A</option>
                                    <option value="B" <?php if($resultat === "B") {echo "selected";} ?>>B</option>
                                    <option value="C" <?php if($resultat === "C") {echo "selected";} ?>>C</option>
                                    <option value="D" <?php if($resultat === "D") {echo "selected";} ?>>D</option>
                                    <option value="E" <?php if($resultat === "E") {echo "selected";} ?>>E</option>
                                    <option value="F" <?php if($resultat === "F") {echo "selected";} ?>>F</option>
                                    <option value="ABS" <?php if($resultat === "ABS") {echo "selected";} ?>>ABS</option>
                                    <option value="RES" <?php if($resultat === "RES") {echo "selected";} ?>>RES</option>
                                    <option value="ADM" <?php if($resultat === "ADM") {echo "selected";} ?>>ADM</option>
                                    <option value="EQU" <?php if($resultat === "EQU") {echo "selected";} ?>>EQU</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='col-md-offset-2'>
                            <input type="reset" value="annuler">
                            <input type="submit" value="modifier">
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
