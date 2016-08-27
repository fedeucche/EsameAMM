<?php

class Cart{
    
    var $books;
    
    public function addBook(Book $book) {
        $this->books[] = $book;
    }
    
    public function emptyCart() {
        $this->books = null;
    }
}