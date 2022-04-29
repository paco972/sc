<?php
    // Connexion à la BDD
    include("db_connect.php");
    $method = $_SERVER["REQUEST_METHOD"];

    function getEntrees() {
        global $conn;
        // Accès aux données
        $requete = "SELECT `etudiant`.`nom`, `etudiant`.`prenom`, `entrees`.`datation` 
        FROM `etudiant`, `entrees` 
        WHERE `etudiant`.`codeBadge` = `entrees`.`codeBadge`
        ORDER BY `entrees`.`datation` DESC";
        $result = mysqli_query($conn, $requete);
        $entrees = array();
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)) {
                $entree = array();
                $entree['nom'] = $row['nom'];
                $entree['prenom'] = $row['prenom'];
                $entree['datation'] = $row['datation'];
                array_push($entrees, $entree);
            }
            echo json_encode($entrees);
        }
    }
    switch($method) {
        case 'GET' :
            getEntrees();
            break;
    }
?>