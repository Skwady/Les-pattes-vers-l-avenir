<?php

namespace App\repository;

class RacesRepository extends BaseRepository
{
    public function __construct()
    {
        $this->table = 'Races';       
    }
}