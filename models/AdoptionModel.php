<?php

namespace App\Models;

class AdoptionModel extends Model
{
    private $id;
    private $fullName;
    private $email;
    private $phone;
    private $address;
    private $housingType;
    private $garden;
    private $otherPets;
    private $petsDetails;
    private $adoptingReason;
    private $experience;
    private $availability;
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
     * Get the value of fullName
     */
    public function getFullName() {
        return $this->fullName;
    }

    /**
     * Set the value of fullName
     */
    public function setFullName($fullName): self {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self {
        $this->email = $email;
        return $this;
    }

    /**
     * Get the value of phone
     */
    public function getPhone() {
        return $this->phone;
    }

    /**
     * Set the value of phone
     */
    public function setPhone($phone): self {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get the value of address
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * Set the value of address
     */
    public function setAddress($address): self {
        $this->address = $address;
        return $this;
    }

    /**
     * Get the value of housingType
     */
    public function getHousingType() {
        return $this->housingType;
    }

    /**
     * Set the value of housingType
     */
    public function setHousingType($housingType): self {
        $this->housingType = $housingType;
        return $this;
    }

    /**
     * Get the value of garden
     */
    public function getGarden() {
        return $this->garden;
    }

    /**
     * Set the value of garden
     */
    public function setGarden($garden): self {
        $this->garden = $garden;
        return $this;
    }

    /**
     * Get the value of otherPets
     */
    public function getOtherPets() {
        return $this->otherPets;
    }

    /**
     * Set the value of otherPets
     */
    public function setOtherPets($otherPets): self {
        $this->otherPets = $otherPets;
        return $this;
    }

    /**
     * Get the value of petsDetails
     */
    public function getPetsDetails() {
        return $this->petsDetails;
    }

    /**
     * Set the value of petsDetails
     */
    public function setPetsDetails($petsDetails): self {
        $this->petsDetails = $petsDetails;
        return $this;
    }

    /**
     * Get the value of adoptingReason
     */
    public function getAdoptingReason() {
        return $this->adoptingReason;
    }

    /**
     * Set the value of adoptingReason
     */
    public function setAdoptingReason($adoptingReason): self {
        $this->adoptingReason = $adoptingReason;
        return $this;
    }

    /**
     * Get the value of experience
     */
    public function getExperience() {
        return $this->experience;
    }

    /**
     * Set the value of experience
     */
    public function setExperience($experience): self {
        $this->experience = $experience;
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

    /**
     * Get the value of availability
     */
    public function getAvailability() {
        return $this->availability;
    }

    /**
     * Set the value of availability
     */
    public function setAvailability($availability): self {
        $this->availability = $availability;
        return $this;
    }
}