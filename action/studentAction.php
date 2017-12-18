<?php
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
        $student = setStudent();
        $studentDao = StudentDao::getInstance();
        $studentDao->save($student);
        header("Location: ../student_action_success.php?action=add");
    }
    
    function edit() {
        $student = setStudent();
        $studentDao = StudentDao::getInstance();
        $studentDao->update($student);
        header("Location: ../student_action_success.php?action=edit");
    }
    
    function delete() {
        if(isset($_GET['noCarte'])) {
            $noCarte = $_GET['noCarte'];
        }
        $studentDao = StudentDao::getInstance();
        $studentDao->deleteById($noCarte);
        header("Location: ../student_action_success.php?action=delete");
    }
    
    function setStudent() {
        if(isset($_POST['noCarte'])) {
            $noCarte = $_POST['noCarte'];
        }
        if(isset($_POST['nom'])) {
            $nom = $_POST['nom'];
        }
        if(isset($_POST['prenom'])) {
            $prenom = $_POST['prenom'];
        }
        if(isset($_POST['admission'])) {
            $admission = $_POST['admission'];
        }
        if(isset($_POST['filiere'])) {
            $filiere = $_POST['filiere'];
        }
        $student = new Student($noCarte, $nom, $prenom, $admission, $filiere);
        return $student;
    }