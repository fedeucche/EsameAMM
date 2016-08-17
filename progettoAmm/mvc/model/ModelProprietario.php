<?php

class ModelProprietario extends ModelUtente {
    
    function ModelProprietario($username, $email, $nome, $cognome, $password) {
        return parent::ModelUtente($username, $email, $nome, $cognome, $password, 1);
    }
    
    
    
}

?>

