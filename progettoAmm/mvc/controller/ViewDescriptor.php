<?php

/**
 * Struttura dati per popolare la vista generica master.php
 *
 * @author amm
 */
class ViewDescriptor {
     /**
     * Imposta il file che include la definizione HTML del contenuto principale
     * @return string
     */
    public function setContentFile($contentFile) {
        $this->content_file = $contentFile;
    }

    /**
     * Restituisce il path al file che contiene il contenuto principale
     * @return string
     */
    public function getContentFile() {
        return $this->content_file;
//        return "contentDescrizione.php";
    }
}

?>