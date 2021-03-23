<?php
    function afficher($array){
        $arrayLen = count($array);
        $x = "";
        for($i=0;$i<$arrayLen;$i++){
            $x = $x." ".$array[$i];
        }
        echo $x;
    }

    function somme($array){
        $arrayLen = count($array);
        $x = 0;
        for($i=0;$i<$arrayLen;$i++){
            $x = $x + $array[$i];
        }
        echo $x;
    }

    function afficherPositif($array){
        $arrayLen = count($array);
        $x = "";
        for($i=0;$i<$arrayLen;$i++){
            if($array[$i] > 0){
                $x = $x." ".$array[$i];
            }
            
        }
        echo $x;
    }

    $array = [0, 1, -2, 3, -4, 5, -6, 7];
    afficher($array);
    echo "<br>";
    somme($array);
    echo "<br>";
    afficherPositif($array);

    class utilisateur{
        //ici des variables
        public $nom;
        public $prenom;

        function __construct($n, $p){
            $this->nom = $n;
            $this->prenom = $p;
        }

        //ici des fonctions (méthodes)
        function getName(){
            return $this->nom;
        }
    }
    // new instance de l'objet
    $user1 = new utilisateur('formation', 'doranco');
    // $user2 = new utilisateur();
    
    echo "<br>";
    echo ($user1->nom);
    echo ($user1->getName()); // ?????
    echo "<br>";

    class city{
        public $nom;
        public $departement;

        function __construct($n, $d){
            $this->nom = $n;
            $this->departement = $d;
        }

        function getInfo(){
            echo "La ville ".$this->nom." est dans le département ".$this->departement.".<br>";
        }
    }
    $paris = new city("Paris", "Seine");
    $marseille = new city("Marseille", "Bouches-du-Rhône");
    $lille = new city("Lille", "Nord");
    $paris->getInfo();
    $marseille->getInfo();
    $lille->getInfo();

    echo "<br>";

    class person{
        public $nom;
        public $prenom;
        public $adresse;

        function __construct($n, $p, $ad){
            $this->nom = $n;
            $this->prenom = $p;
            $this->adresse = $ad;
        }

        function getPersonne(){
            echo $this->prenom." ".$this->nom." habite ".$this->adresse.".<br>";
        }
        function setAdresse($ad){
            $this->adresse = $ad;
        }

        function __destruct(){

        }
    }
    $pierre = new person("Dupont", "Pierre", "15 rue des Lilas");
    $pierre->getPersonne();
    $pierre->setAdresse("33 rue Martin");
    $pierre->getPersonne();
    echo "<br>";

    // tests sur les constantes
    // class test{
    //     public $nom;
    //     public const x = "x";

    //     function __construct($nom){
    //         $this->nom = $nom;
    //     }
    //     function test(){
    //         $this->nom = self::x;
    //     }
        
    // }

    // $a = new test("aaa");
    // echo($a->nom);
    // $a->test();
    // echo($a->nom);

    class facture{
        public $nb1;
        public $nb2;
        public const taux = 50;

        function __construct($n1, $n2){
            $this->nb1 = $n1;
            $this->nb2 = $n2;
        }

        function addition(){
            $x = $this->nb1 + $this->nb2;
            return $x;
        }
    }
    class chFacture extends facture{
        function moyenne(){
            $y = ($this->addition())/2;
            return $y;
        }
        function remise(){
            if($this->moyenne() >= self::taux){
                return ($this->addition())*0.9;
            }
            else{
                echo "Pas éligible.";
            }
        }
    }
    $test = new facture(45, 17);
    echo ($test->addition());
    echo "<br>";
    $test2 = new chFacture(45, 55);
    echo ($test2->moyenne());
    echo "<br>";
    echo ($test2->remise());
    echo "<br>";
    // pour l'affichage de la constante hors de l'objet
    echo $test::taux."<br><br>";





?>