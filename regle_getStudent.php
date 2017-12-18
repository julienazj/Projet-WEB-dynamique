<?php
    require_once 'model/Student.php';
    require_once 'model/Cursus.php';
    require_once 'dao/StudentDao.php';
    require_once 'dao/CursusDao.php';
    
    if(isset($_GET['noCarte'])) {
        $noCarte = $_GET['noCarte'];
    }
    $studentDao = StudentDao::getInstance();
    $student = $studentDao->getStudentById($noCarte);
    
    $cursusDao = CursusDao::getInstance();
    $cursuss = $cursusDao->liste($noCarte);
    
    $filiere = $student->getFiliere();
    $nom = $student->getNom();
    $prenom = $student->getPrenom();
    
    $isi1 = array();
    $isi2 = array();
    $isi3 = array();
    $isi4 = array();
    $isi5 = array();
    $isi6 = array();
    $isi7 = array();
    $isi8 = array();
    
    $br = array();
    $cs = array();
    $tm = array();
    $st = array();
    $ec = array();
    $me = array();
    $ct = array();
    $mect = array();
    $npml = array();
    $se = array();
    $hp = array();
    $cstm_tcbr = array();
    $cstm_fcbr = array();
    $utt = array();
    
    foreach ($cursuss as $cursus) {
        switch($cursus->getSem_label()) {
            case "ISI1" :
                $isi1[] = $cursus;
                break;
            case "ISI2" :
                $isi2[] = $cursus;
                break;
            case "ISI3" :
                $isi3[] = $cursus;
                break;
            case "ISI4" :
                $isi4[] = $cursus;
                break;
            case "ISI5" :
                $isi5[] = $cursus;
                break;
            case "ISI6" :
                $isi6[] = $cursus;
                break;
            case "ISI7" :
                $isi7[] = $cursus;
                break;
            case "ISI8" :
                $isi8[] = $cursus;
                break;
        }
        
        if($cursus->getProfil() === "Y") {
            $br[] = $cursus;
            switch($cursus->getCategorie()) {
                case "CS" :
                    $cs[] = $cursus;
                    break;
                case "TM" :
                    $tm[] = $cursus;
                    break;
                case "ST" :
                    $st[] = $cursus;
                    break;
                case "EC" :
                    $ec[] = $cursus;
                    break;
                case "ME" :
                    $me[] = $cursus;
                    $mect[] = $cursus;
                    break;
                case "CT" :
                    $ct[] = $cursus;
                    $mect[] = $cursus;
                    break;
                case "NPML" :
                    $npml[] = $cursus;
                    break;
                case "SE" :
                    $se[] = $cursus;
                    break;
                case "HP" :
                    $hp[] = $cursus;
                    break;
            }
        }
        
        switch($cursus->getAffectation()) {
            case "TCBR" :
                if($cursus->getCategorie() === "CS" || $cursus->getCategorie() === "TM") {
                    $cstm_tcbr[] = $cursus;
                }
                break;
            case "FCBR" :
                if($cursus->getCategorie() === "CS" || $cursus->getCategorie() === "TM") {
                    $cstm_fcbr[] = $cursus;
                }
                break;
        }
        
        if($cursus->getUtt() === "Y" && $cursus->getProfil() === "Y" && ($cursus->getCategorie() === "CS" || $cursus->getCategorie() === "TM")) {
            $utt[] = $cursus;
        }
    }
    
    $isi = array("ISI1"=>$isi1, "ISI2"=>$isi2, "ISI3"=>$isi3, "ISI4"=>$isi4, "ISI5"=>$isi5, "ISI6"=>$isi6, "ISI7"=>$isi7, "ISI8"=>$isi8);