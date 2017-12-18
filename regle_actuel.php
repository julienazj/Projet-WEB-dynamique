<?php
    require_once './verification.php';
    require_once './regle_getStudent.php';
?>﻿
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Règlement</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
   <style>
       .grey {
           background-color : #EEE;
       }
   </style>
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
                     <h2>REGLEMENT ACTUEL </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <hr />
                <div class="alert alert-info">
                    Le parcours de <?php echo "$prenom $nom" ?> :
                </div>
                <div style="float : right;"><a href="regle_futur.php?noCarte=<?php echo $noCarte ?>">Voir sa conformité de règles future</a></div>
                
                <table class='table table-bordered table-striped'>
                    <thead>
                        <tr style="font-weight : bold;">
                            <th width="10%">PARCOURS</th>
                            <th width="10%">CS</th>
                            <th width="10%">TM</th>
                            <th width="10%">ST</th>
                            <th width="10%">EC</th>
                            <th width="10%">ME</th>
                            <th width="10%">CT</th>
                            <th width="10%">HP</th>
                            <th width="10%">NPML</th>
                            <th width="10%">SE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach ($isi as $key=>$sem) {
                                if(count($sem) > 0) {
                                    $credit_cs = 0;
                                    $credit_tm = 0;
                                    $credit_st = 0;
                                    $credit_ec = 0;
                                    $credit_me = 0;
                                    $credit_ct = 0;
                                    
                                    
                                    echo "<tr>";
                                    echo "<td>$key</td>";

                                    echo "<td>";
                                    foreach($sem as $cursus) {
                                        if($cursus->getCategorie() === "CS") {
                                            $sigle = $cursus->getSigle();
                                            $resultat = $cursus->getResultat();
                                            $credit = $cursus->getCredit();
                                            $credit_cs += $credit;
                                            echo "$sigle $resultat $credit<br>";
                                        }
                                    }
                                    echo "</td>";

                                    echo "<td>";
                                    foreach($sem as $cursus) {
                                        if($cursus->getCategorie() === "TM") {
                                            $sigle = $cursus->getSigle();
                                            $resultat = $cursus->getResultat();
                                            $credit = $cursus->getCredit();
                                            $credit_tm += $credit;
                                            echo "$sigle $resultat $credit<br>";
                                        }
                                    }
                                    echo "</td>";

                                    echo "<td>";
                                    foreach($sem as $cursus) {
                                        if($cursus->getCategorie() === "ST") {
                                            $sigle = $cursus->getSigle();
                                            $resultat = $cursus->getResultat();
                                            $credit = $cursus->getCredit();
                                            $credit_st += $credit;
                                            echo "$sigle $resultat $credit<br>";
                                        }
                                    }
                                    echo "</td>";

                                    echo "<td>";
                                    foreach($sem as $cursus) {
                                        if($cursus->getCategorie() === "EC") {
                                            $sigle = $cursus->getSigle();
                                            $resultat = $cursus->getResultat();
                                            $credit = $cursus->getCredit();
                                            $credit_ec += $credit;
                                            echo "$sigle $resultat $credit<br>";
                                        }
                                    }
                                    echo "</td>";

                                    echo "<td>";
                                    foreach($sem as $cursus) {
                                        if($cursus->getCategorie() === "ME") {
                                            $sigle = $cursus->getSigle();
                                            $resultat = $cursus->getResultat();
                                            $credit = $cursus->getCredit();
                                            $credit_me += $credit;
                                            echo "$sigle $resultat $credit<br>";
                                        }
                                    }
                                    echo "</td>";

                                    echo "<td>";
                                    foreach($sem as $cursus) {
                                        if($cursus->getCategorie() === "CT") {
                                            $sigle = $cursus->getSigle();
                                            $resultat = $cursus->getResultat();
                                            $credit = $cursus->getCredit();
                                            $credit_ct += $credit;
                                            echo "$sigle $resultat $credit<br>";
                                        }
                                    }
                                    echo "</td>";

                                    echo "<td>";
                                    foreach($sem as $cursus) {
                                        if($cursus->getCategorie() === "HP") {
                                            $sigle = $cursus->getSigle();
                                            $resultat = $cursus->getResultat();
                                            echo "$sigle $resultat<br>";
                                        }
                                    }
                                    echo "</td>";

                                    echo "<td>";
                                    foreach($sem as $cursus) {
                                        if($cursus->getCategorie() === "NPML") {
                                            $sigle = $cursus->getSigle();
                                            $resultat = $cursus->getResultat();
                                            echo "$sigle $resultat<br>";
                                        }
                                    }
                                    echo "</td>";

                                    echo "<td>";
                                    foreach($sem as $cursus) {
                                        if($cursus->getCategorie() === "SE") {
                                            $sigle = $cursus->getSigle();
                                            $resultat = $cursus->getResultat();
                                            echo "$sigle $resultat<br>";
                                        }
                                    }
                                    echo "</td>";
                                    echo "</tr>";
                            
                                    echo "<tr>";
                                    echo "<td  style='font-weight : bold;'>Total semestre</td>";
                                    
                                    echo "<td>";
                                    if($credit_cs > 0) {
                                        echo $credit_cs;
                                    }
                                    echo "</td>";
                                    
                                    echo "<td>";
                                    if($credit_tm > 0) {
                                        echo $credit_tm;
                                    }
                                    echo "</td>";
                                    
                                    echo "<td>";
                                    if($credit_st > 0) {
                                        echo $credit_st;
                                    }
                                    echo "</td>";
                                    
                                    echo "<td>";
                                    if($credit_ec > 0) {
                                        echo $credit_ec;
                                    }
                                    echo "</td>";
                                    
                                    echo "<td>";
                                    if($credit_me > 0) {
                                        echo $credit_me;
                                    }
                                    echo "</td>";
                                    
                                    echo "<td>";
                                    if($credit_ct > 0) {
                                        echo $credit_ct;
                                    }
                                    echo "</td>";
                                    
                                    echo "<td></td><td></td><td></td>";
                                    echo "</tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
                    
                    
                    
                <table class='table table-bordered' style="font-weight : bold; border-left : 0px; border-bottom : 0px">
                    <thead>
                        <tr class="grey">
                            <th width="10%">TOTAUX</th>
                            <th width="10%">CS</th>
                            <th width="10%">TM</th>
                            <th width="10%">ST</th>
                            <th width="10%">EC</th>
                            <th width="10%">ME</th>
                            <th width="10%">CT</th>
                            <th width="10%">HP</th>
                            <th width="10%">NPML</th>
                            <th width="10%">SE</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td class="grey">TCBR</td>
                            <td colspan="2" align="center">
                                <?php
                                    $credit_tcbr = 0;
                                    foreach ($cstm_tcbr as $cursus) {
                                        $credit_tcbr += $cursus->getCredit();
                                    }
                                    echo "$credit_tcbr/54 <span style='color : blue;'>(R01)</span>";
                                    if($credit_tcbr >= 54) {
                                        echo "<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color : #0D0;'></span>";
                                    } else {
                                        echo "<span class='glyphicon glyphicon-remove' aria-hidden='true' style='color : #D00;'></span>";
                                    }
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="grey">FIL</td>
                            <td colspan="2" align="center">
                                <?php
                                    $credit_fcbr = 0;
                                    foreach ($cstm_fcbr as $cursus) {
                                        $credit_fcbr += $cursus->getCredit();
                                    }
                                    echo "$credit_fcbr/30 <span style='color : blue;'>(R02)</span>";
                                    if($credit_fcbr >= 30) {
                                        echo "<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color : #0D0;'></span>";
                                    } else {
                                        echo "<span class='glyphicon glyphicon-remove' aria-hidden='true' style='color : #D00;'></span>";
                                    }
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="grey">TCBR+FIL</td>
                            <td align="center">
                                <?php
                                    $credit_cs = 0;
                                    foreach ($cs as $cursus) {
                                        $credit_cs += $cursus->getCredit();
                                    }
                                    echo "$credit_cs/30 <span style='color : blue;'>(R03)</span>";
                                    if($credit_cs >= 30) {
                                        echo "<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color : #0D0;'></span>";
                                    } else {
                                        echo "<span class='glyphicon glyphicon-remove' aria-hidden='true' style='color : #D00;'></span>";
                                    }
                                ?>
                            </td>
                            <td align="center">
                                <?php
                                    $credit_tm = 0;
                                    foreach ($tm as $cursus) {
                                        $credit_tm += $cursus->getCredit();
                                    }
                                    echo "$credit_tm/30 <span style='color : blue;'>(R04)</span>";
                                    if($credit_tm >= 30) {
                                        echo "<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color : #0D0;'></span>";
                                    } else {
                                        echo "<span class='glyphicon glyphicon-remove' aria-hidden='true' style='color : #D00;'></span>";
                                    }
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="grey">GLOBAL</td>
                            <td align="center">
                                <?php
                                    echo $credit_cs;
                                ?>
                            </td>
                            <td align="center">
                                <?php
                                    echo $credit_tm;
                                ?>
                            </td>
                            <td align="center">
                                <?php
                                    $credit_st = 0;
                                    foreach($st as $cursus) {
                                        $credit_st += $cursus->getCredit();
                                    }
                                    echo "$credit_st/60 <span style='color : blue;'>(R05+R06)</span>";
                                    if($credit_st >= 60) {
                                        echo "<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color : #0D0;'></span>";
                                    } else {
                                        echo "<span class='glyphicon glyphicon-remove' aria-hidden='true' style='color : #D00;'></span>";
                                    }
                                ?>
                            </td>
                            <td align="center">
                                <?php
                                    $credit_ec = 0;
                                    foreach($ec as $cursus) {
                                        $credit_ec += $cursus->getCredit();
                                    }
                                    echo "$credit_ec/12 <span style='color : blue;'>(R07)</span>";
                                    if($credit_ec >= 12) {
                                        echo "<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color : #0D0;'></span>";
                                    } else {
                                        echo "<span class='glyphicon glyphicon-remove' aria-hidden='true' style='color : #D00;'></span>";
                                    }
                                ?>
                            </td>
                            <td align="center">
                                <?php
                                    $credit_me = 0;
                                    foreach($me as $cursus) {
                                        $credit_me += $cursus->getCredit();
                                    }
                                    echo "$credit_me/4 <span style='color : blue;'>(R08)</span>";
                                    if($credit_me >= 4) {
                                        echo "<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color : #0D0;'></span>";
                                    } else {
                                        echo "<span class='glyphicon glyphicon-remove' aria-hidden='true' style='color : #D00;'></span>";
                                    }
                                ?>
                            </td>
                            <td align="center">
                                <?php
                                    $credit_ct = 0;
                                    foreach($ct as $cursus) {
                                        $credit_ct += $cursus->getCredit();
                                    }
                                    echo "$credit_ct/4 <span style='color : blue;'>(R09)</span>";
                                    if($credit_ct >= 4) {
                                        echo "<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color : #0D0;'></span>";
                                    } else {
                                        echo "<span class='glyphicon glyphicon-remove' aria-hidden='true' style='color : #D00;'></span>";
                                    }
                                ?>
                            </td>
                            <td align="center">
                                <?php
                                    $credit_hp = 0;
                                    foreach($hp as $cursus) {
                                        $credit_hp += $cursus->getCredit();
                                    }
                                    echo $credit_hp;
                                ?>
                            </td>
                            <td align="center">
                                <?php
                                    echo "<span style='color : blue;'>(R13)</span>";
                                    $flagN = false;
                                    foreach($npml as $cursus) {
                                        if($cursus->getResultat === "ADM") {
                                            echo "<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color : #0D0;'></span>";
                                            $flagN = true;
                                            break;
                                        }
                                    }
                                    if(!$flagN) {
                                        echo "<span class='glyphicon glyphicon-remove' aria-hidden='true' style='color : #D00;'></span>";
                                    }
                                ?>
                            </td>
                            <td align="center">
                                <?php
                                    echo "<span style='color : blue;'>(R12)</span>";
                                    $flagS = false;
                                    foreach($se as $cursus) {
                                        if($cursus->getResultat === "ADM") {
                                            echo "<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color : #0D0;'></span>";
                                            $flagS = true;
                                            break;
                                        }
                                    }
                                    if(!$flagS) {
                                        echo "<span class='glyphicon glyphicon-remove' aria-hidden='true' style='color : #D00;'></span>";
                                    }
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td style="border-left : 0px; border-bottom : 0px;"></td>
                            <td colspan="2" align="center">
                                UTT
                                <?php
                                    $credit_utt = 0;
                                    foreach ($utt as $cursus) {
                                        $credit_utt += $cursus->getCredit();
                                    }
                                    echo " $credit_utt/60 <span style='color : blue;'>(R11)</span>";
                                    if($credit_utt >= 60) {
                                        echo "<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color : #0D0;'></span>";
                                    } else {
                                        echo "<span class='glyphicon glyphicon-remove' aria-hidden='true' style='color : #D00;'></span>";
                                    }
                                ?>
                            </td>
                            <td colspan="2"></td>
                            <td colspan="2" align="center">
                                <?php
                                    $credit_mect = 0;
                                    foreach ($mect as $cursus) {
                                        $credit_mect += $cursus->getCreidt();
                                    }
                                    echo " $credit_mect/16 <span style='color : blue;'>(R10)</span>";
                                    if($credit_mect >= 16) {
                                        echo "<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color : #0D0;'></span>";
                                    } else {
                                        echo "<span class='glyphicon glyphicon-remove' aria-hidden='true' style='color : #D00;'></span>";
                                    }
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td style="border-top : 0px; border-left : 0px; border-bottom : 0px"></td>
                            <td colspan="9" align="center">
                                <?php
                                    $credit_br = 0;
                                    foreach ($br as $cursus) {
                                        $credit_br += $cursus->getCredit();
                                    }
                                    echo " $credit_br/180 <span style='color : blue;'>(R14)</span>";
                                    if($credit_br >= 180) {
                                        echo "<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color : #0D0;'></span>";
                                    } else {
                                        echo "<span class='glyphicon glyphicon-remove' aria-hidden='true' style='color : #D00;'></span>";
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
