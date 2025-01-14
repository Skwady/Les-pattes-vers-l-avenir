<?php

namespace App\repository;

class AdoptingRepository extends BaseRepository
{
    public function __construct()
    {
        $this->table = 'Adoption';   
    }
}