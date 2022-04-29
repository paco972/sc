<?php
    // Connexion à la BDD
    include("db_connect.php");

    // Connexion au lecteur RFID
	$address = "10.10.15.13";
	$port = "2300";
	/* Cree une socket TCP/IP. */
	$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
	if ($socket == false) {
	    // echo "socket_create() a échoué : raison :  " . socket_strerror(socket_last_error()) . "<br />";
	} 
	else {
	    // echo "Creation Socket OK.<br />";
        $result = socket_connect($socket, $address, $port);
        if ($socket == false) {
            // echo "socket_connect() a échoué : raison : ($result) " . socket_strerror(socket_last_error($socket)) . "<br />";
        } 
        else {
            // echo "Connection Socket OK.<br />";
            // echo "Lecture de la trame : <br />";
            sleep(1);
            $trame = socket_read($socket, 12);
            //echo $trame."<br />";
            $lgTrame = strlen($trame);
            //echo "Longueur de la trame : ".$lgTrame."<br />";
            if ($lgTrame >= 10) {
                $code = substr($trame, 1, 8);
                //echo "Code badge : ".$code;    
            }
            socket_close($socket);
            if (getEtudiant($code) == true) {
                stockeEntree($code);
                ouvrePorte();
            }
            else {
                echo "Code inconnu";
            }
        }
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
