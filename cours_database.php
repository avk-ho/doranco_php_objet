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
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "demo";

    // try{
    //     $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
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

        // Suppression d'un objet dans la table
        // $req = $conn->prepare("DELETE FROM clients WHERE id = 2");
        // $req->execute();
        // echo "Ligne supprimée";

        // Modifier une ligne dans la table
        // $req = $conn->prepare("UPDATE clients SET Adresse = '12 rue Modifiee' WHERE id = 1");
        // $req->execute();
        // echo "Ligne modifiée";

        // Affichage dans le php du contenu de la table
        // $req = $conn->prepare("SELECT * FROM clients");
        // $req->execute();
        // $result = $req->fetchAll(PDO::FETCH_ASSOC);
        // //var_dump($result);
        // echo "<pre>";
        // print_r($result);
        // echo "<pre>";

    // }
    // catch(PDOException $e){
    //     echo "Erreur".$e->getMessage();
    // }

    // Exercice 1
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "shop";

    // try{
    //     $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //     echo "Connexion réussie<br>";

        // $sql = "CREATE DATABASE shop";
        // $conn->exec($sql);

        // $sql = "CREATE TABLE products (
        //     id int(11) AUTO_INCREMENT PRIMARY KEY,
        //     nom VARCHAR(255),
        //     description VARCHAR(255),
        //     prix int(255),
        //     date_creation TIMESTAMP,
        //     quantity int(255)
        // )";
        // $conn->exec($sql);
        // echo "Table créée";

        // $sql = "INSERT INTO products (nom, description, prix, date_creation, quantity) 
        // VALUES ('Shampoing', 'Lave les cheveux', '7', NOW(), '15')
        // ";
        // $conn->exec($sql);
        // echo "Entrée ajoutée.";

        // $sql = "INSERT INTO products (nom, description, prix, date_creation, quantity) 
        // VALUES ('Soupe', 'Se mange/boît(?)', '4', NOW(), '25')
        // ";
        // $conn->exec($sql);
        // echo "Entrée ajoutée.";

        // $sql = "INSERT INTO products (nom, description, prix, date_creation, quantity) 
        // VALUES ('Ecran TV', '4K', '700', NOW(), '7')
        // ";
        // $conn->exec($sql);
        // echo "Entrée ajoutée.";

        // $req = $conn->prepare("UPDATE products SET description = 'Se mange/boit(?)' WHERE id = 2");
        // $req->execute();
        // echo "Ligne modifiée";

        // $sql = "INSERT INTO products (nom, description, prix, date_creation, quantity) 
        // VALUES ('Chaise', '4 pieds et un dossier', '39', NOW(), '16')
        // ";
        // $conn->exec($sql);
        // echo "Entrée ajoutée.";

        // $sql = "INSERT INTO products (nom, description, prix, date_creation, quantity) 
        // VALUES ('Ecouteurs sans fil', 'Autonomie de 8h', '30', NOW(), '20')
        // ";
        // $conn->exec($sql);
        // echo "Entrée ajoutée.";

        // $req = $conn->prepare("UPDATE products SET nom = CONCAT('ps_nom ', nom)");
        // $req->execute();
        // echo "Ligne modifiée";

        // $req = $conn->prepare("SELECT * FROM products WHERE prix < 100 AND prix > 20");
        // $req->execute();
        // $result = $req->fetchAll(PDO::FETCH_ASSOC);
        // echo "<pre>";
        // print_r($result);
        // echo "<pre>";

        // test fonction count
        // $req = $conn->prepare("SELECT COUNT(id) as nb FROM products WHERE quantity > 15");
        // $req->execute();
        // $result = $req->fetchAll(PDO::FETCH_ASSOC);
        // echo "<pre>";
        // print_r($result);
        // echo "<pre>";

        // test fonction sum
        // $req = $conn->prepare("SELECT sum(quantity) as total_quantity FROM products");
        // $req->execute();
        // $result = $req->fetchAll(PDO::FETCH_ASSOC);
        // echo "<pre>";
        // print_r($result);
        // echo "<pre>";

        // test fonction max
        // $req = $conn->prepare("SELECT max(prix) as max_prix FROM products");
        // $req->execute();
        // $result = $req->fetchAll(PDO::FETCH_ASSOC);
        // echo "<pre>";
        // print_r($result);
        // echo "<pre>";

        // test fonction min
        // $req = $conn->prepare("SELECT min(quantity) as min_quantity FROM products");
        // $req->execute();
        // $result = $req->fetchAll(PDO::FETCH_ASSOC);
        // echo "<pre>";
        // print_r($result);
        // echo "<pre>";

    // }
    // catch(PDOException $e){
    //     echo "Erreur".$e->getMessage();
    // }

    // Exercice 2
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "demo";

    // try{
    //     $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //     echo "Connexion réussie<br>";

        // $sql = "CREATE TABLE etudiants (
        //     id int(10) AUTO_INCREMENT PRIMARY KEY,
        //     nom VARCHAR(255),
        //     note float
        //     )";
        // $conn->exec($sql);
        // echo "Table créée";

        // $sql = "INSERT INTO etudiants (nom, note) VALUES
        // ('MARTIN', 14.5)";
        // $conn->exec($sql);
        // echo "Entrée ajoutée";
        // $sql = "INSERT INTO etudiants (nom, note) VALUES
        // ('DUFRENE', 8)";
        // $conn->exec($sql);
        // echo "Entrée ajoutée";
        // $sql = "INSERT INTO etudiants (nom, note) VALUES
        // ('STONE', 17.8)";
        // $conn->exec($sql);
        // echo "Entrée ajoutée";
        // $sql = "INSERT INTO etudiants (nom, note) VALUES
        // ('BENOIT', 11.2)";
        // $conn->exec($sql);
        // echo "Entrée ajoutée";
        // $sql = "INSERT INTO etudiants (nom, note) VALUES
        // ('ARTOIS', 4.9)";
        // $conn->exec($sql);
        // echo "Entrée ajoutée";
        // $sql = "INSERT INTO etudiants (nom, note) VALUES
        // ('DUPONT', 10.5)";
        // $conn->exec($sql);
        // echo "Entrée ajoutée";
        

    //     $req = $conn->prepare("SELECT AVG(note) as moyenne FROM etudiants");
    //     $req->execute();
    //     $result = $req->fetchAll(PDO::FETCH_ASSOC);
    //     echo "<pre>";
    //     print_r($result);
    //     echo "<pre>";

    // alternative SELECT nom, MAX(note)
    //     $req = $conn->prepare("SELECT * FROM etudiants ORDER BY note DESC LIMIT 1");
    //     $req->execute();
    //     $result = $req->fetchAll(PDO::FETCH_ASSOC);
    //     echo "<pre>";
    //     print_r($result);
    //     echo "<pre>";

    // alternative SELECT nom, MIN(note)
    //     $req = $conn->prepare("SELECT * FROM etudiants ORDER BY note LIMIT 1");
    //     $req->execute();
    //     $result = $req->fetchAll(PDO::FETCH_ASSOC);
    //     echo "<pre>";
    //     print_r($result);
    //     echo "<pre>";

    // }
    // catch(PDOException $e){
    //     echo "Erreur".$e->getMessage();
    // }

    //Exercice 3
    

?>