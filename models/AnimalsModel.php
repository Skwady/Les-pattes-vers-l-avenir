<?php

namespace App\models;

class AnimalsModel extends Model
{
    private $id;
    private $name;
    private $age;
    private $img;
    private $vaccinated;
    private $neutered;
    private $dewormed;
    private $description;
    private $children;
    private $cat;
    private $dog;
    private $created_at;
    private $race;
    private $isAdopted;
    private $idRace;
    private $idSexe;

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
     * Get the value of name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self {
        $this->name = $name;
        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge() {
        return $this->age;
    }

    /**
     * Set the value of age
     */
    public function setAge($age): self {
        $this->age = $age;
        return $this;
    }

    /**
     * Get the value of img
     */
    public function getImg() {
        return $this->img;
    }

    /**
     * Set the value of img
     */
    public function setImg($img): self {
        $this->img = $img;
        return $this;
    }

    /**
     * Get the value of vaccinated
     */
    public function getVaccinated() {
        return $this->vaccinated;
    }

    /**
     * Set the value of vaccinated
     */
    public function setVaccinated($vaccinated): self {
        $this->vaccinated = $vaccinated;
        return $this;
    }

    /**
     * Get the value of neutered
     */
    public function getNeutered() {
        return $this->neutered;
    }

    /**
     * Set the value of neutered
     */
    public function setNeutered($neutered): self {
        $this->neutered = $neutered;
        return $this;
    }

    /**
     * Get the value of dewormed
     */
    public function getDewormed() {
        return $this->dewormed;
    }

    /**
     * Set the value of dewormed
     */
    public function setDewormed($dewormed): self {
        $this->dewormed = $dewormed;
        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self {
        $this->description = $description;
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

    /**
     * Get the value of created_at
     */
    public function getCreatedAt() {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     */
    public function setCreatedAt($created_at): self {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * Get the value of race
     */
    public function getRace() {
        return $this->race;
    }

    /**
     * Set the value of race
     */
    public function setRace($race): self {
        $this->race = $race;
        return $this;
    }

    /**
     * Get the value of isAdopted
     */
    public function getIsAdopted() {
        return $this->isAdopted;
    }

    /**
     * Set the value of isAdopted
     */
    public function setIsAdopted($isAdopted): self {
        $this->isAdopted = $isAdopted;
        return $this;
    }

    /**
     * Get the value of idRace
     */
    public function getIdRace() {
        return $this->idRace;
    }

    /**
     * Set the value of idRace
     */
    public function setIdRace($idRace): self {
        $this->idRace = $idRace;
        return $this;
    }

    /**
     * Get the value of idSexe
     */
    public function getIdSexe() {
        return $this->idSexe;
    }

    /**
     * Set the value of idSexe
     */
    public function setIdSexe($idSexe): self {
        $this->idSexe = $idSexe;
        return $this;
    }
}    