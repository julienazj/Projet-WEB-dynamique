<?php

    class CursusDao {
        private static $cursusDao;
        private $host = "127.0.0.1";
        private $username = "root"; //your mysql username
        private $passwd = "515239aaa"; //your mysql password
        private $dbname = "lo07_projet";
        private $port = 3306;
        
        /**
         * pattern singleton
         */
        private function __construct(){
            
        }
        
        public static function getInstance(){
            if(self::$cursusDao === null){
                self::$cursusDao = new CursusDao();
            }
            return self::$cursusDao;
        }
        
        private function connect() {
            $mysqli = new mysqli($this->host, $this->username, $this->passwd, $this->dbname, $this->port);
            if ($mysqli->connect_errno) {
                echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                exit();
            }
            $mysqli->set_charset('utf8');
            return $mysqli;
        }
        
        public function save($cursus) {
            $mysqli = $this->connect();
            $stmt = $mysqli->prepare("INSERT INTO formation VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            
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
            
            $stmt->bind_param('iissssssis', $noCarte, $sem_seq, $sem_label, $sigle, $categorie, $affectation, $utt, $profil, $credit, $resultat);
            
            $stmt->execute();
            
            $stmt->close();
            $mysqli->close();
        }
        
        /**
         * get the cursus list for the student of $noCarte
         */
        public function liste($noCarte) {
            $mysqli = $this->connect();
            $result = $mysqli->query("select * from formation where noCarte=$noCarte");
            $arr = $result->fetch_all(MYSQLI_ASSOC);
            $cursuss = array();
            foreach ($arr as $key => $value) {
                $cursus = new Cursus($value['NoCarte'], $value['sem_seq'], $value['sem_label'], $value['sigle'], $value['categorie'], $value['affectation'], $value['UTT'], $value['profil'], $value['credit'], $value['resultat']);
                $cursuss[$key] = $cursus;
            }
            
            $result->free();
            $mysqli->close();
            return $cursuss;
        }
        
        public function update($oldCursus, $newCursus) {
            $mysqli = $this->connect();
            $stmt = $mysqli->prepare("update formation set noCarte=?,sem_seq=?,sem_label=?,sigle=?,categorie=?,affectation=?,utt=?,profil=?,credit=?,resultat=? "
                    . "where noCarte=? and sem_seq=? and sem_label=? and sigle=? and categorie=? and affectation=? and utt=? and profil=? and credit=? and resultat=?");
            
            $noCarte1 = $oldCursus->getNoCarte();
            $sem_seq1 = $oldCursus->getSem_seq();
            $sem_label1 = $oldCursus->getSem_label();
            $sigle1 = $oldCursus->getSigle();
            $categorie1 = $oldCursus->getCategorie();
            $affectation1 = $oldCursus->getAffectation();
            $utt1 = $oldCursus->getUtt();
            $profil1 = $oldCursus->getProfil();
            $credit1 = $oldCursus->getCredit();
            $resultat1 = $oldCursus->getResultat();
            
            $noCarte2 = $newCursus->getNoCarte();
            $sem_seq2 = $newCursus->getSem_seq();
            $sem_label2 = $newCursus->getSem_label();
            $sigle2 = $newCursus->getSigle();
            $categorie2 = $newCursus->getCategorie();
            $affectation2 = $newCursus->getAffectation();
            $utt2 = $newCursus->getUtt();
            $profil2 = $newCursus->getProfil();
            $credit2 = $newCursus->getCredit();
            $resultat2 = $newCursus->getResultat();
            
            $stmt->bind_param('iissssssisiissssssis', $noCarte2, $sem_seq2, $sem_label2, $sigle2, $categorie2, $affectation2, $utt2, $profil2, $credit2, $resultat2, 
                    $noCarte1, $sem_seq1, $sem_label1, $sigle1, $categorie1, $affectation1, $utt1, $profil1, $credit1, $resultat1);
            
            $stmt->execute();
            
            $stmt->close();
            $mysqli->close();
        }
        
        public function delete($cursus) {
            $mysqli = $this->connect();
            $stmt = $mysqli->prepare("delete from formation where noCarte=? and sem_seq=? and sem_label=? and sigle=? and categorie=? and affectation=? and utt=? and profil=? and credit=? and resultat=?");
            
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
            
            $stmt->bind_param('iissssssis', $noCarte, $sem_seq, $sem_label, $sigle, $categorie, $affectation, $utt, $profil, $credit, $resultat);
            
            $stmt->execute();
            
            $stmt->close();
            $mysqli->close();
        }
        
        
       
    }
    
