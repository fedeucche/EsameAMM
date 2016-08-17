<?php

$vd = new ViewDescriptor();

class BaseController {
    public function handleInput(&$request) {
        
        if (!isset($request["cmd"])) {
            $request["cmd"] = "none";
        }

        switch ($request["cmd"]) {
            case "orario":
                $this->mostraOrario($vd);
                break;
        }
    }
    
    private function mostraOrario($vd){
        $vd->setContentFile('../view/contentOrari.php');
    }
}

?>