<?php
require_once 'conf.php';

class Db extends Conf{
    
    private $connectionResource; //variabile che conterrà id della connessione
    
    private function dbConnection(){ //Stabilisce connessione al DB
        $this->connectionResource =@ mysql_connect($this->DB_HOST,$this->DB_USER,$this->DB_PASS) or 
                Conf::showerror();
        $dbSelect =@ mysql_select_db($this->DB_NAME,$this->connectionResource) or Conf::showerror();
    }
    
        public function query($query){  //esegue le interrogazioni al DB
     $this->result =@ mysql_query($query) or Conf::showerror();
     return $this->result;
        }
    
        public function getresult($result) {
            $row = mysql_fetch_row($result);            
            return $row;
        }
                
    function __construct() {
        $this->dbConnection();
    } 
}

$open = new Db();



