<?php

namespace App\repository;

class AnimalsRepository extends BaseRepository
{
    public function __construct()
    {
        $this->table = 'Animals';       
    }
}