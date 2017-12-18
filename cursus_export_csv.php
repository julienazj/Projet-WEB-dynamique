
<?php
    require_once './verification.php';
    require_once './cursus_getList.php';
    
    if(isset($_GET['noCarte'])) {
        $noCarte = $_GET['noCarte'];
    }

    if(isset($_GET['nom'])) {
        $nom = $_GET['nom'];
    }
    if(isset($_GET['prenom'])) {
        $prenom = $_GET['prenom'];
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
                        <h2>EXPORTER LA LISTE DE <?php echo "$noCarte"?></h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <hr />
                
                <form method='post' action='./action/CsvCursusAction.php?action=export&noCarte=<?php echo $noCarte; ?>'>
                    <div>
                    <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th width="10%">sem_seq</th>
                            <th width="10%">sem_label</th>
                            <th width="10%">sigle</th>
                            <th width="10%">catégorie</th>
                            <th width="10%">affectation</th>
                            <th width="10%">UTT</th>
                            <th width="10%">profil</th>
                            <th width="10%">crédit</th>
                            <th width="10%">résultat</th>
                            <th width="10%" style="color:blue;">OPERATION</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <?php
                                foreach($cursuss as $cursus) {
                                    echo "<tr>";
                                    $noCarte = $cursus->getNoCarte();
                                    $sem_seq = $cursus->getSem_seq();
                                    $sem_label = $cursus->getSem_label();
                                    $sigle = $cursus->getSigle();
                                    $categorie = $cursus->getCategorie();
                                    $affectation = $cursus->getAffectation();
                                    $utt = $cursus->getUtt();
                                    $profil = $cursus->getProfil();
                                    $credit = $cursus->getCredit();
                                    $resultat = $cursus->getResultat();
                                    echo "<td>$sem_seq</td>";
                                    echo "<td>$sem_label</td>";
                                    echo "<td>$sigle</td>";
                                    echo "<td>$categorie</td>";
                                    echo "<td>$affectation</td>";
                                    echo "<td>$utt</td>";
                                    echo "<td>$profil</td>";
                                    echo "<td>$credit</td>";
                                    echo "<td>$resultat</td>";
                                    echo "<td><a href='cursus_edit.php?noCarte=$noCarte&sem_seq=$sem_seq&sem_label=$sem_label&sigle=$sigle&categorie=$categorie&affectation=$affectation&utt=$utt&profil=$profil&credit=$credit&resultat=$resultat'>"
                                         ."<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>"
                                         ."<a href='action/cursusAction.php?action=delete&noCarte=$noCarte&sem_seq=$sem_seq&sem_label=$sem_label&sigle=$sigle&categorie=$categorie&affectation=$affectation&utt=$utt&profil=$profil&credit=$credit&resultat=$resultat' onclick=\"return confirm('Vous voulez vraiment supprimer ce cursus?')\">"
                                         ."<span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a></td>";
                                    echo "</tr>";
                                } 
                            ?>
                    </tbody>
                </table>
                        </div>

                    
                    <div class='row'>
                        <div class='col-md-offset-2'>
                            <input type="button" name="Submit" onclick="javascript:history.back(-1);" value="retourner">
                            <input type="submit" value="exporter">
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