<?php
    // Connexion à la BDD
    include("db_connect.php");

    $code = $_POST['code'];

    if (getEtudiant($code) == true) {
        stockeEntree($code);
        ouvrePorte();
    }
    else {
        echo "Code inconnu";
    }

    function getEtudiant($code) {
        global $conn;
        // Accès aux données
        $requete = "SELECT * FROM etudiant WHERE codeBadge='".$code."'";
        // echo $requete;
        $result = mysqli_query($conn, $requete);
        $etudiant = array();
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)) {
                $etudiant = array();
                $etudiant['id'] = $row['idEtudiant'];
                $etudiant['nom'] = $row['nom'];
                $etudiant['prenom'] = $row['prenom'];
                $etudiant['codeBadge'] = $row['codeBadge'];
            }
            // echo json_encode($etudiant);
            echo "Accès autorisé : ".$etudiant['nom']." ".$etudiant['prenom'];
            return true;
        }
        else return false;
    }

    function stockeEntree($code) {
        global $conn;
        // Enregistrement de la nouvelle entrée en base
        $requete = "INSERT INTO `entrees` (`codeBadge`) 
            VALUES ('".$code."');";
        // echo $requete;
        $result = mysqli_query($conn, $requete);
    }

    function ouvrePorte() {
        $urlPorte = 'http://10.10.15.13/index.html?p3=3000';
        $result = file_get_contents($urlPorte);
        if ($result !== false) {
            // echo "porte ouverte";
        }    
    }
?>
