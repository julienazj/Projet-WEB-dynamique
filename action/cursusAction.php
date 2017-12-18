<?php
    require_once '../dao/CursusDao.php';
    require_once '../model/Cursus.php';
    require_once '../dao/StudentDao.php';
    require_once '../model/Student.php';
    
    action();
    
    function action() {
        if(isset($_REQUEST['action'])) {
            switch($_REQUEST['action']) {
                case "add" :
                    add();
                    break;
                case "edit" :
                    edit();
                    break;
                case "delete" :
                    delete();
                    break;
            }
        }
    }
    
    function add() {
        $cursus = setCursusByPost();
        $noCarte = $cursus->getNoCarte();
        
        $studentDao = StudentDao::getInstance();
        $student = $studentDao->getStudentById($noCarte);
        $nom = $student->getNom();
        $prenom = $student->getPrenom();
        
        $cursusDao = CursusDao::getInstance();
        $cursusDao->save($cursus);
        header("Location: ../cursus_action_success.php?action=add&noCarte=$noCarte&nom=$nom&prenom=$prenom");
    }
    
    function edit() {
        $cursus = setCursusByPost();
        $noCarte = $cursus->getNoCarte();
        
        $studentDao = StudentDao::getInstance();
        $student = $studentDao->getStudentById($noCarte);
        $nom = $student->getNom();
        $prenom = $student->getPrenom();
        
        session_start();
        if(isset($_SESSION['oldCursus'])) {
            $oldCursus = unserialize($_SESSION['oldCursus']);
            unset($_SESSION['oldCursus']);
        }
        
        $cursusDao = CursusDao::getInstance();
        $cursusDao->update($oldCursus, $cursus);
        header("Location: ../cursus_action_success.php?action=edit&noCarte=$noCarte&nom=$nom&prenom=$prenom");
    }
    
    function delete() {
        $cursus = setCursusByGet();
        $noCarte = $cursus->getNoCarte();
        
        $studentDao = StudentDao::getInstance();
        $student = $studentDao->getStudentById($noCarte);
        $nom = $student->getNom();
        $prenom = $student->getPrenom();
        
        $cursusDao = CursusDao::getInstance();
        $cursusDao->delete($cursus);
        header("Location: ../cursus_action_success.php?action=delete&noCarte=$noCarte&nom=$nom&prenom=$prenom");
    }
    
    function setCursusByPost() {
        if(isset($_POST['noCarte'])) {
            $noCarte = $_POST['noCarte'];
        }
        if(isset($_POST['sem_seq'])) {
            $sem_seq = $_POST['sem_seq'];
        }
        if(isset($_POST['sem_label'])) {
            $sem_label = $_POST['sem_label'];
        }
        if(isset($_POST['sigle'])) {
            $sigle = $_POST['sigle'];
        }
        if(isset($_POST['categorie'])) {
            $categorie = $_POST['categorie'];
        }
        if(isset($_POST['affectation'])) {
            $affectation = $_POST['affectation'];
        }
        if(isset($_POST['utt'])) {
            $utt = $_POST['utt'];
        }
        if(isset($_POST['profil'])) {
            $profil = $_POST['profil'];
        }
        if(isset($_POST['credit'])) {
            $credit = $_POST['credit'];
        }
        if(isset($_POST['resultat'])) {
            $resultat = $_POST['resultat'];
        }
        $cursus = new Cursus($noCarte, $sem_seq, $sem_label, $sigle, $categorie, $affectation, $utt, $profil, $credit, $resultat);
        return $cursus;
    }
    
    function setCursusByGet() {
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
        return $cursus;
    }