<?php

namespace App\Models;

class SexeModel extends Model
{
    private $id;
    private $man;
    private $woman;

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
     * Get the value of man
     */
    public function getMan() {
        return $this->man;
    }

    /**
     * Set the value of man
     */
    public function setMan($man): self {
        $this->man = $man;
        return $this;
    }

    /**
     * Get the value of woman
     */
    public function getWoman() {
        return $this->woman;
    }

    /**
     * Set the value of woman
     */
    public function setWoman($woman): self {
        $this->woman = $woman;
        return $this;
    }
}