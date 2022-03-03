<?php

class Product
{
    public $name;
    public $price;
    public $description;
    public $category;
    public $rating;


    public function __construct($name,$price,$description,$category,$rating)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
        $this->rating = $rating;
    }
}