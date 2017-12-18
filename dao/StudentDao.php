<?php

    class StudentDao {
        private static $studentDao;
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
            if(self::$studentDao === null){
                self::$studentDao = new StudentDao();
            }
            return self::$studentDao;
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
        
        public function save($student) {
            $mysqli = $this->connect();
            $stmt = $mysqli->prepare("INSERT INTO etu VALUES (?, ?, ?, ?, ?)");
            
            $noCarte = $student->getNoCarte();
            $nom = $student->getNom();
            $prenom = $student->getPrenom();
            $admission = $student->getAdmission();
            $filiere = $student->getFiliere();
            
            $stmt->bind_param('issss', $noCarte, $nom, $prenom, $admission, $filiere);
            
            $stmt->execute();
            
            $stmt->close();
            $mysqli->close();
        }
        
        public function liste() {
            $mysqli = $this->connect();
            $result = $mysqli->query("select * from etu");
            $arr = $result->fetch_all(MYSQLI_ASSOC);
            $students = array();
            foreach ($arr as $key => $value) {
                $student = new Student($value['NoCarte'], $value['Nom'], $value['Prenom'], $value['Admission'], $value['Filiere']);
                $students[$key] = $student;
            }
            
            $result->free();
            $mysqli->close();
            return $students;
        }
        
        public function update($student) {
            $mysqli = $this->connect();
            $stmt = $mysqli->prepare("update etu set nom=?,prenom=?,admission=?,filiere=? where noCarte=?");
            
            $noCarte = $student->getNoCarte();
            $nom = $student->getNom();
            $prenom = $student->getPrenom();
            $admission = $student->getAdmission();
            $filiere = $student->getFiliere();
            
            $stmt->bind_param('ssssi', $nom, $prenom, $admission, $filiere, $noCarte);
            
            $stmt->execute();
            
            $stmt->close();
            $mysqli->close();
        }
        
        public function deleteById($noCarte) {
            $mysqli = $this->connect();
            $stmt = $mysqli->prepare("delete from etu where noCarte=?");
            
            $stmt->bind_param('i', $noCarte);
            
            $stmt->execute();
            
            $stmt->close();
            $mysqli->close();
        }
        
        public function getStudentById($noCarte) {
            $mysqli = $this->connect();
            $result = $mysqli->query("select * from etu where noCarte=$noCarte");
            $arr = $result->fetch_array(MYSQLI_NUM);
            $student = new Student($arr[0], $arr[1], $arr[2], $arr[3], $arr[4]);
            return $student;
        }
    }

   