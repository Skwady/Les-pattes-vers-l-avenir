<?php

namespace App\Models;

class AdoptionModel extends Model
{
    private $id;
    private $createdAt;
    private $idAnimal;
    private $idUser;

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
     * Get the value of createdAt
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     */
    public function setCreatedAt($createdAt): self {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * Get the value of idAnimal
     */
    public function getIdAnimal() {
        return $this->idAnimal;
    }

    /**
     * Set the value of idAnimal
     */
    public function setIdAnimal($idAnimal): self {
        $this->idAnimal = $idAnimal;
        return $this;
    }

    /**
     * Get the value of idUser
     */
    public function getIdUser() {
        return $this->idUser;
    }

    /**
     * Set the value of idUser
     */
    public function setIdUser($idUser): self {
        $this->idUser = $idUser;
        return $this;
    }
}