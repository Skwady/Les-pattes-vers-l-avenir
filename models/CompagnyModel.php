<?php

namespace App\Models;

class CompagnyModel extends Model
{
    private $id;
    private $children;
    private $cat;
    private $dog;

    /**
     * Get the value of id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self {
        $this->id = $id;
        return $this;
    }

    /**
     * Get the value of children
     */
    public function getChildren() {
        return $this->children;
    }

    /**
     * Set the value of children
     */
    public function setChildren($children): self {
        $this->children = $children;
        return $this;
    }

    /**
     * Get the value of cat
     */
    public function getCat() {
        return $this->cat;
    }

    /**
     * Set the value of cat
     */
    public function setCat($cat): self {
        $this->cat = $cat;
        return $this;
    }

    /**
     * Get the value of dog
     */
    public function getDog() {
        return $this->dog;
    }

    /**
     * Set the value of dog
     */
    public function setDog($dog): self {
        $this->dog = $dog;
        return $this;
    }
}