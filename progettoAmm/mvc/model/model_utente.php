<?php

class ModelUtente{          
    private $username;            
    private $email;
    private $nome;
    private $cognome;
    private $password;
    public $ruolo;
    
    function ModelUtente($username, $email, $nome, $cognome, $password, $ruolo){
        $this->username = $username;
        $this->email = $email;
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->password = $password;
        $this->ruolo = $ruolo;
    }
    
    function checkPassword($pass) {
        return ($this->password == $pass);
    }
    
    function get_username(){
        return $this->username;
    }
    function set_username($username){
        $this->username = $username;
    }
    
    
}

require_once 'ModelCliente.php';
require_once 'ModelProprietario.php';


