<?php

namespace App\repository;

class AdoptingRepository extends BaseRepository
{
    public function __construct()
    {
        $this->table = 'Adoption';   
    }

    public function findAdoptingWithAnimals($id)
    {
        // Préparer la requête SQL
        $sql = '
            SELECT * 
            FROM ' . $this->table . ' ad
            JOIN Animals an 
            ON ad.idAnimal = an.id
            WHERE ad.id = :id
        ';

        // Exécuter la requête avec le paramètre
        $query = $this->req($sql, ['id' => $id]);

        // Retourner un tableau associatif
        return $query->fetch();
    }

    public function countAdoptionsByAnimal()
    {
        $query = $this->req('
            SELECT idAnimal, COUNT(*) as total 
            FROM ' . $this->table . ' 
            GROUP BY idAnimal 
            HAVING total > 0
        ');
        return $query->fetchAll();
    }
}