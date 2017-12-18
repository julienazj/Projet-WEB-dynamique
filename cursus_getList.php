<?php
    require_once 'model/Cursus.php';
    require_once 'dao/CursusDao.php';
    
    if(isset($_GET['noCarte'])) {
        $noCarte = $_GET['noCarte'];
    }
    $cursusDao = CursusDao::getInstance();
    $cursuss = $cursusDao->liste($noCarte);