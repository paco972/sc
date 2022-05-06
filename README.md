# sc
Fichiers pour le projet Serrure Connectée
__________________________________________

Documentation :
- https://www.idp.co.il/sysvault/docsfiles1/cd5bf2b1f7-db6b-4c43-ab23-660c9e5ff273.pdf : Lecteur de badges RFID MF7
- https://www.eztcp.com/en/download/pds_files/cieh14en.pdf : Passerelle RS232 + E/S vers Ethernet CIE-H14

Exercices : 
- sc1.php : lecture de la trame renvoyée par le lecteur de badge
- sc2.php : lecture de la trame et extraction du code du badge
- sc3.php : lecture de la trame, extraction du code du badge, recherche du nom et du prénom de l'étudiant
- sc4.php : enregistrement du code du badge dans la table entrees

Ouverture de la porte : 
- ouverture.php : Envoi de la requête HTTP au CIE-H14

Consultation des données en base :
- sc.sql : Sauvegarde des tables etudiant et entrees
- etudiants.php : API REST (Back-end)
- SN1.html : Affichage de la liste des étudiants (Front-end)
- createEtudiant.html : Formulaire pour ajouter un nouvel étudiant
- updateEtudiant.html : Formulaire pour modifier les données d'un étudiant existant
- entrees.php : Renvoie la liste au format JSON des entrées avec nom, prénom et datation (Back-end)
- entrees.html : Affiche un tableau contenant la liste des entrées (Front-end)

Applications finales :
- sc.php : Programme final qui lit les badges et ouvre la porte si le code est trouvé dans la table étudiant
- sc_navig.php : Programme final qui reçoit un code et ouvre la porte si ce code est trouvé dans la table étudiant (Back-end)
- sc_navig.html : Interface finale pour saisir le code et l'envoyer au serveur (Front-end)
