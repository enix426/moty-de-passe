<?php

$mdp = $_GET["password"];

    $obPass = new vadiation();


   $obPass->contructor($mdp);
    

class vadiation{
   
    function contructor($mdp){
        $this->get_longueure($mdp);
        $this->get_validationChiffre($mdp);
        $this->get_validationMaj($mdp);
        
    }


    public function get_longueure ($longueure){
        $valeurRetour = " ";

    
        if(strlen($longueure)<6){
            $valeurRetour =  "votre mot de passe est trop court";
        }

        if(strlen($longueure)>20){
            $valeurRetour =  "votre mot de passe est trop long";
        }

        echo  $valeurRetour;
    }

    public function get_validationChiffre($chiffre){

        
        if(!preg_match('/[0-9]/',$chiffre)){
            echo "il vous faux un chiffre";
        }

    }

    public function get_validationMaj($maj){
        ;

        if(!preg_match('/[A-Z]/', $maj,)){
            echo "vous devez avoir une lettre majuscule";
        }
    }


}




?>