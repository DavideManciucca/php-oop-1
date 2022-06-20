<?php
  class Movie {
    public $title;
    public $author;
    private $categories

    public function __construct($_title, $_author){
      $this->title = $_title;
      $this->author = $_author;
    }

    public function getCategories(){
      return $this->categories
    }

    public function setCategories(){
      $this->categories = $_categories;
    }

  }
?>