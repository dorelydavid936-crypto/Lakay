<?php
include_once("Connexion.php");

class Etudiant{
    private $nom,$prenom,$sexe,$tel,$filliere;

    public function Insert_etud($nom,$prenom,$sexe,$tel,$filliere)
    {
        //requete SQL INSERT
        $sql ="INSERT INTO `etudiant`(`nom`, `prenom`, `sexe`, `tel`, `filliere`) VALUES ('$nom','$prenom','$sexe','$tel','$filliere')";
        //recuperation de la connexion
        $c = new Connexion();
        $con = $c->Getconnexion("localhost","root","","Gest_note");
        //Execution de la requete
        $con->query($sql);
    }

    public function GetEtudiant(){
        
        //requete SQL INSERT
        $sql ="SELECT * FROM `etudiant`";
        //recuperation de la connexion
        $c = new Connexion();
        $con = $c->Getconnexion("localhost","root","","Gest_note");
        //Execution de la requete
        $result = $con->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function GetEtudiantWith($code){
        
        //requete SQL INSERT
        $sql ="SELECT * FROM `etudiant` WHERE `code_etud`=$code";
        //recuperation de la connexion
        $c = new Connexion();
        $con = $c->Getconnexion("localhost","root","","Gest_note");
        //Execution de la requete
        $result = $con->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

     public function Update_etud($code_etud,$nom,$prenom,$sexe,$tel,$filliere)
    {
        //requete SQL INSERT
        $sql ="UPDATE `etudiant` SET `nom`='$nom',`prenom`='$prenom',`sexe`='$sexe',`tel`='$tel',`filliere`='$filliere' WHERE `code_etud`='$code_etud'";
        //recuperation de la connexion
        $c = new Connexion();
        $con = $c->Getconnexion("localhost","root","","Gest_note");
        //Execution de la requete
        $con->query($sql);
    }
     public function Delete_etud($code_etud)
    {
        //requete SQL INSERT
        $sql ="DELETE FROM `etudiant` WHERE `code_etud`='$code_etud'";
        //recuperation de la connexion
        $c = new Connexion();
        $con = $c->Getconnexion("localhost","root","","Gest_note");
        //Execution de la requete
        $con->query($sql);
    }
}






?>