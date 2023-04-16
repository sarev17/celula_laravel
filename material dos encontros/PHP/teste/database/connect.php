<?php
    class DB{
        public $hostname = 'localhost';
        public $user = 'root';
        public $password = '12345678';
        public $bd = 'celula_laravel';

        
        public function connect(){
            $conn = mysqli_connect($this->hostname,$this->user,$this->password,$this->bd);
            return $conn;
        }
    }
?>