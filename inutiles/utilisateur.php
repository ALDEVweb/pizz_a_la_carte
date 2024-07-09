<?php

namespace Aldev\Modeles;

/*

gestion de la classe composition

Utilisation :
    define() : définition des champs de la classe -> addField($name, $type = NULL, $libelle = NULL, $link = NULL);
    
*/

class utilisateur extends \Aldev\Utils\_user{

    protected $table = "utilisateur";

    const LOGIN = "mail";
    const PWD = "mdp";

    protected function define(){
        // création des champs de la class
        $this->addField("nom");
        $this->addField("prenom");
        $this->addField("mail");
        $this->addField("mdp");
    }
}