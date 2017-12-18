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
                
                <form method='post' action='./action/cursusAction.php?action=add'>
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
                                <input type="text" class="form-control" id="sem_seq" name='sem_seq' placeholder="sem_seq">
                            </div>
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='form-group'>
                            <div class='col-md-2'>
                                <label for="sem_label">sem_label :</label>
                            </div>
                            <div class='col-md-4'>
                                <input type="text" class="form-control" id="sem_label" name='sem_label' placeholder="sem_label">
                            </div>
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='form-group'>
                            <div class='col-md-2'>
                                <label for="sigle">sigle :</label>
                            </div>
                            <div class='col-md-4'>
                                <input type="text" class="form-control" id="sigle" name='sigle' placeholder="sigle">
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
                                    <option value="CS">CS</option>
                                    <option value="TM">TM</option>
                                    <option value="EC">EC</option>
                                    <option value="CT">CT</option>
                                    <option value="ME">ME</option>
                                    <option value="ST">ST</option>
                                    <option value="SE">SE</option>
                                    <option value="HP">HP</option>
                                    <option value="NPML">NPML</option>
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
                                    <option value="TC">TC</option>
                                    <option value="BR">BR</option>
                                    <option value="TCBR">TCBR</option>
                                    <option value="FCBR">FCBR</option>
                                    <option value="UTT">UTT</option>
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
                                <input type="radio" name="utt" value="Y"> Y
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="utt" value="N"> N
                            </label>
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='col-md-2'>
                            <label>profil :</label>
                        </div>
                        <div class="col-md-4">
                            <label class="radio-inline">
                                <input type="radio" name="profil" value="Y"> Y
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="profil" value="N"> N
                            </label>
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='form-group'>
                            <div class='col-md-2'>
                                <label for="credit">crédit :</label>
                            </div>
                            <div class='col-md-4'>
                                <input type="text" class="form-control" id="credit" name='credit' placeholder="crédit">
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
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="F">F</option>
                                    <option value="ABS">ABS</option>
                                    <option value="RES">RES</option>
                                    <option value="ADM">ADM</option>
                                    <option value="ADM">EQU</option>
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
