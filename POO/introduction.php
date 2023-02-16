<?php

abstract class Humain
{
    public $nom;
    public $prenom;
    protected $age;

    public function __construct($prenom, $nom, $age)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->setAge($age);
    }

    abstract public function travailler();

    public function setAge($age)
    {
        if (is_int($age) && $age > 1 && $age <= 120) {
            $this->age = $age;
        } else {
            throw new Exception("L'âge d'un employé devrait être un entier entre 1 et 120");
        }
    }

    public function getAge()
    {
        return $this->age;
    }
}

class Employe extends Humain
{

    public function travailler()
    {
        return "Je suis en un employé et je travaille.";
    }

    public function presentation()
    {

        var_dump("Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans.");
    }
}

class Patron extends Employe
{
    public $voiture;

    public function __construct($prenom, $nom, $age, $voiture)
    {
        parent::__construct($prenom, $nom, $age);
        $this->voiture = $voiture;
    }

    public function presentation()
    {
        var_dump("Bonjour, je suis Monsieur $this->nom, j'ai $this->age ans et j'ai une voiture !");
    }

    public function travailler()
    {
        var_dump("Je suis le patron et je bosse aussi !");
    }

    public function rouler()
    {
        var_dump("Bonjour, je roule avec ma $this->voiture.");
    }
}

class Etudiant extends Humain
{

    public function travailler()
    {
        return "Je suis un étudiant et je révise";
    }
}

$employe1 = new Employe("Lior", "Chamla", 32);

$patron = new Patron("Joseph", "Durand", 55, "Mercédes");

$etudiant = new Etudiant("Bob", "Zigler", 24);


$patron->presentation();
$patron->rouler();

faireTravailler($employe1);
faireTravailler($patron);
faireTravailler($etudiant);

function faireTravailler(Humain $objet)
{
    var_dump("Travail en cours : {$objet->travailler()}");
}

// 500 lignes de code 

// $employe1->setAge(50);

// 500 lignes de code 
