<?php
    require_once 'model/Student.php';
    require_once 'dao/StudentDao.php';
    
    $studentDao = StudentDao::getInstance();
    $students = $studentDao->liste();
    $tcbr = array();
    $mpl = array();
    $msi = array();
    $mri = array();
    $lib = array();
    foreach ($students as $student) {
        switch($student->getFiliere()) {
            case "?" :
                $tcbr[] = $student;
                break;
            case "MPL" :
                $mpl[] = $student;
                break;
            case "MSI" :
                $msi[] = $student;
                break;
            case "MRI" :
                $mri[] = $student;
                break;
            case "LIB" :
                $lib[] = $student;
                break;
        }
    }