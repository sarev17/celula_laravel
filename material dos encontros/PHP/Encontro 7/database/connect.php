<?php
    class DB{
        public $host = 'localhost';
        public $user = 'root';
        public $password = '12345678';
        public $bd = 'celula_laravel';

        
        public function connect(){
            $conn = mysqli_connect($this->host,$this->user,$this->password,$this->bd);
            return $conn;
        }
    }
?>