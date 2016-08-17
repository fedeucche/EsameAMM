<?php
        class Conf{
            protected $DB_HOST   =  'localhost';
            protected $DB_USER   =  'ucchesuFederico';
            protected $DB_PASS   =  'lucertola4957';
            protected $DB_NAME   =  'amm15_ucchesuFederico';
            
            static function debug($item){  //Funzione di Debug
                
                echo '<pre>';
                print_r($item);
                echo '</pre>';
            }
            static function showerror(){
                die("Errore".mysql_errno()." : ".mysql_error());
            }
           
        }

