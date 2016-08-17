<?php

class ModelCliente extends ModelUtente {
    
    function ModelCliente($username, $email, $nome, $cognome, $password) {
        return parent::ModelUtente($username, $email, $nome, $cognome, $password, 0);
    }
    
    
    
}

?>
