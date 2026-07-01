# Lakay

<?php
include_once "Etudiant.php";
$e = new Etudiant();
$list_etud = $e->GetEtudiant();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <thead>
            <tr>
                <th>id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Sexe</th>
                <th>Tel</th>
                <th>Filliere</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($list_etud as $c) {
                  echo"<tr>";
                  echo"<td>".$c['code_etud']."</td>";
                  echo"<td>".$c['nom']."</td>";
                  //echo"<td>".$c['prenom']."</td>";
                  echo"<td>".$c['sexe']."</td>";
                  echo"<td>".$c['tel']."</td>";
                  //echo"<td>".$c['filliere']."</td>";
                  echo"<td>
                  <a href=edit_etud.php?id=".$c['code_etud'].">Edit</a>|
                  <a href=''>Delete</a>
                  </td>";
                  echo"</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
