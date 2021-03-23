<?php
    // connexion via mysqli
    // $servername = "localhost";
    // $username = "root";
    // $password = "";

    // $conn = new mysqli($servername, $username, $password);
    // if($conn->connect_error){
    //     die('Erreur');
    // }
    // echo 'Connexion réussie';

    // connexion via pdo
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demo";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // echo "Connexion réussie";

        // Créer la database
        // $sql = "CREATE DATABASE nom_database";
        // $conn->exec($sql);

        // Créer une table
        // $sql = "CREATE TABLE clients(id int(11) AUTO_INCREMENT PRIMARY KEY, 
        // Nom VARCHAR(255), 
        // Prenom VARCHAR(255),
        // Adresse VARCHAR(255),
        // Code_postal int(10),
        // Pays VARCHAR(255),
        // Numero_telephone int(25),
        // Date_inscription TIMESTAMP
        // )";
        // $conn->exec($sql);

        // Ajouter dans la table
        // Ne mettre des '' uniquement que dans les values
        // $sql = "INSERT INTO clients (Nom, Prenom, Adresse, Code_postal, Pays, Numero_telephone, Date_inscription) 
        // VALUES ('Dupont', 'Vanessa', '14 rue Labas', '00001', 'France', '0198765432', '2021-03-23 10:25:05'); 
        // "; 
        // $conn->exec($sql);
        // echo "Entrée ajoutée.";

        // Affichage dans le php du contenu de la table
        $req = $conn->prepare("SELECT * FROM clients");
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($result);
        echo "<pre>";
        print_r($result);
        echo "<pre>";



    }
    catch(PDOException $e){
        echo "Erreur".$e->getMessage();
    }


?>