<?php
    class Connexion
    { 
        public function Getconnexion($host,$user,$pswd,$db){
            $con = new mysqli($host, $user,$pswd,$db);
            if($con)
               return $con;
        }
    }   
?>