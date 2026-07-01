<?php
    include_once "Etudiant.php";
    if(isset($_GET['id'])){
        $id =$_GET['id'];
        $e = new Etudiant();
        $etud = $e->GetEtudiantWith($id);
    }
    if(isset($_POST['bt_save'])){
        $code = $_POST['id'];
        $nom = $_POST['txt_nom'];
        $prenom = $_POST['txt_prenom'];
        $sexe = $_POST['rd_sexe'];
        $tel = $_POST['txt_tel'];
        $filliere = $_POST['txt_filliere'];
        $e->Update_etud($code,$nom,$prenom,$sexe,$tel,$filliere);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <input type="hidden" name="id" value="<?php echo $id ;?>">
        </div>
        <div>
            <label for="">Nom</label>
            <input type="text" name="txt_nom" value="<?php echo $etud[0]['nom']; ?>">
        </div>
        <div>
            <label for="">Prenom</label>
            <input type="text" name="txt_prenom" value="<?php echo $etud[0]['prenom']; ?>">
        </div>
        <div>
            <label for="">Sexe</label>
            <?php
                if($etud[0]['sexe']=="Masculin"){
            ?>
            <input type="radio" name="rd_sexe" value="Masculin">
            <input type="radio" name="rd_sexe" value="Feminin">
            <?php } ?>
            <?php
                if($etud[0]['sexe']=="Feminin"){
            ?>
            <input type="radio" name="rd_sexe" value="Masculin" >
            <input type="radio" name="rd_sexe" value="Feminin" checked>
            <?php } ?>
        </div>
        <div>
            <label for="">Tel</label>
            <input type="text" name="txt_tel" value="<?php echo $etud[0]['tel']; ?>">
        </div>
        <div>
            <label for="">Filliere</label>
            <input type="text" name="txt_filliere" value="<?php echo $etud[0]['filliere']; ?>">
        </div>
        <input type="submit" value="Save" name="bt_save">
    </form>

</body>
</html>