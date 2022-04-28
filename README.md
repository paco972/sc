# sc
Fichiers pour le projet Serrure Connectée
__________________________________________

Documentation :
- https://www.hitools.fr/produit/promag-mf7-mf7-20-lecteur-rfid-mifare-hitools/ : Lecteur de badges RFID MF7
- https://www.eztcp.com/en/download/pds_files/cieh14en.pdf : Passerelle RS232 + E/S vers Ethernet

Exercices : 
- sc1.php : lecture de la trame renvoyée par le lecteur de badge
- sc2.php : lecture de la trame et extraction du code du badge
- sc3.php : lecture de la trame, extraction du code du badge, recherche du nom et du prénom de l'étudiant
- sc4.php : enregistrement du code du badge dans la table entrees

Ouverture de la porte : 
- 

Consultation des données en base :
- sc.sql : Sauvegarde des tables etudiant et entree
- etudiants.php : API REST (Back-end)
- SN1.html : Affichage de la liste des étudiants (Front-end)
- createEtudiant.html : Formulaire pour ajouter un nouvel étudiant
- updateEtudiant.html : Formulaire pour modifier les données d'un étudiant existant
- entrees.php : Renvoie la liste au format JSON des entrées avec nom, prénom et datation (Back-end)
- entrees.html : Afiche un tableau contenant la liste des entrées (Front-end)
