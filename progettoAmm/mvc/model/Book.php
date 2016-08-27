<?php

//Classe che rappresenta un libro
class Book {
    
    var $id;
    var $title;
    var $price;
    
    public function setId($id) {
        $this->id = $id;
        return true;
    }
    
    public function setTitle($title) {
        $this->title = $title;
        return true;
    }
    
    public function setPrice($price) {
        $this->price = $price;
        return true;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function getPrice() {
        return $this->price;
    }
}