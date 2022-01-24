<?php

// récupération de la variable $_POST
var_dump($_POST);



//Création des variables à récupérer dans la variable $_POST
$civilite=$_POST["civilite"]; //Civilité du contact
$prenom=$_POST["prenom"]; //Prénom du contact
$nom=$_POST["nom"]; //Nom du contact
$adresse1=$_POST["adresse_1"]; //Adresse 1 du contact
$adresse2=$_POST["adresse_2"]; //Adresse 2 du contact
$codepostal=$_POST["code_postal"]; //Code Postal du contact
$ville=$_POST["ville"]; //Ville du contact
$telephone=$_POST["telephone"]; //Téléphone du contact
$portable=$_POST["portable"]; //Portable du contact
$mail="info@migliore06.fr"; // mail de destination
$objet="Formulaire de contact"; // Objet du mail
$expediteur=$_POST["mail"];//mail expéditeur
$message=$_post["message"];// message du contact

//On rempli la fonction mail avec les variables récupérer dans $_POST
mail($mail, $objet,$message,$expediteur);

