<?php

namespace App\models;

class UsersModel extends Model
{
    private $id;
    private $name;
    private $firstname;
    private $email;
    private $password;
    private $createdAt;
    private $isVerified;
    private $token;
    private $idRole;

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
     * Get the value of firstname
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     */
    public function setFirstname($firstname): self {
        $this->firstname = $firstname;
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
     * Get the value of password
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password): self {
        $this->password = $password;
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
     * Get the value of isVerified
     */
    public function getIsVerified() {
        return $this->isVerified;
    }

    /**
     * Set the value of isVerified
     */
    public function setIsVerified($isVerified): self {
        $this->isVerified = $isVerified;
        return $this;
    }

    /**
     * Get the value of token
     */
    public function getToken() {
        return $this->token;
    }

    /**
     * Set the value of token
     */
    public function setToken($token): self {
        $this->token = $token;
        return $this;
    }

    /**
     * Get the value of idRole
     */
    public function getIdRole() {
        return $this->idRole;
    }

    /**
     * Set the value of idRole
     */
    public function setIdRole($idRole): self {
        $this->idRole = $idRole;
        return $this;
    }
}