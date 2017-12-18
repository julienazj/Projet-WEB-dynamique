<?php
    require_once '../dao/CursusDao.php';
    require_once '../model/Cursus.php';
    require_once '../dao/StudentDao.php';
    require_once '../model/Student.php';
   // require_once '../cursus_getList.php';

    
    if(isset($_GET['noCarte'])) {
        $noCarte = $_GET['noCarte'];
    }
    
   //$noCarte="40610";
    action_add();
    action_export($noCarte);
   // function action_add(){
    function action_add(){
    if (isset($_REQUEST['action'])){
            switch($_REQUEST['action']){
            case "import" :
                import_cursus();
                break;    
        }
    }
    }
    
    
        function action_export($noCarte){
        if (isset($_REQUEST['action'])){
            switch($_REQUEST['action']){
            case "export" :
                export($noCarte);
                break;    
        }
    }
    }
  

    
    
    function import_cursus() {
        
        $con = mysqli_connect('localhost','root','515239aaa','lo07_projet');
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL:" . mysqli_connect_error();
        }
        
        $filename = $_FILES['file']['tmp_name'];
        if (empty($filename)){
            echo 'Choisir votre ficher csv';
            exit;
        }
        //$csv = file_get_contents($filename);
       // $csv_lines = preg_split('/\\r\\n|\\r|\\n/', $csv);
        //print_r ($csv_lines);
        $handle = fopen($filename, 'r');
        fgetcsv($handle);
        while(($line = fgetcsv($handle)) !==FALSE){
            $con->query("insert into formation (NoCarte,sem_seq,sem_label,sigle,categorie,affectation,UTT,profil,credit,resultat) values ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."','".$line[7]."','".$line[8]."','".$line[9]."')");
        }
        fclose($handle);
        mysqli_close($con);
        
        header("Location: ../import_success.php");
       // header("Location: ../cursus_action_success.php?action=add&noCarte=$noCarte&nom=$nom&prenom=$prenom");
    }
    
   function export(&$noCarte)
    {
        $con = mysqli_connect('localhost','root','515239aaa','lo07_projet');
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL:" . mysqli_connect_error();
        }
        
        $str = '';
        $n = "\n";
        $name = "Liste de Cursus de $noCarte";
        $header = 'sem_seq,sem_label,sigle,categorie,affectation,UTT,profil,credit,resultat';
        $sql = "SELECT sem_seq,sem_label,sigle,categorie,affectation,UTT,profil,credit,resultat FROM `formation` where NoCarte=$noCarte";
        $result = $con->query($sql);
        while ($row = mysqli_fetch_array($result)) {
            $sem_seq = $row['sem_seq'];
            $sem_label = $row['sem_label'];
            $sigle = $row['sigle'];
            $categorie = $row['categorie'];
            $affectation = $row['affectation'];
            $UTT = $row['UTT'];
            $profil = $row['profil'];
            $credit = $row['credit'];
            $resultat = $row['resultat'];
            $str .= "\n".$sem_seq.",".$sem_label.",".$sigle.",".$categorie.",".$affectation.",".$UTT.",".$profil.",".$credit.",".$resultat;
        }
        $data = $name.$n.$header.$str;
        $filename = 'formation_'.time().'.csv';
        export_csv($filename, $data);//将数据导出
    }
    
    

    


    function export_csv($filename,$data) { 
    header("Content-type:text/csv"); 
    header("Content-Disposition:attachment;filename=".$filename); 
    header('Cache-Control:must-revalidate,post-check=0,pre-check=0'); 
    header('Expires:0'); 
    header('Pragma:public'); 
    echo $data; 
} 

    
    ?>



