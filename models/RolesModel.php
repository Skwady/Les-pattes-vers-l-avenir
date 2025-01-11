<?php

namespace App\Models;

class RolesModel extends Model
{
    private $id;
    private $role;

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
     * Get the value of role
     */
    public function getRole() {
        return $this->role;
    }

    /**
     * Set the value of role
     */
    public function setRole($role): self {
        $this->role = $role;
        return $this;
    }
}