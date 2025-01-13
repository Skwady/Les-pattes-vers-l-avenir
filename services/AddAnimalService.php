<?php

namespace App\services;

use App\Models\AnimalsModel;
use App\repository\AnimalsRepository;

class AddAnimalService
{
    public function addAnimal($data)
    {

        $images = new CloudinaryService();
        $image = $images->validateAndUploadImage($_FILES['image']);

        $data = [
            'name' => $data['name'],
            'race' => $data['race'],
            'age' => $data['age'],
            'img' => $image,
            'idRace' => $data['idRace'],
            'idSexe' => $data['idSexe'],
            'children' => isset($data['children']) ? 1 : 0,
            'cat' => isset($data['cat']) ? 1 : 0,
            'dog' => isset($data['dog']) ? 1 : 0,
            'dewormed' => isset($data['dewormed']) ? 1 : 0,
            'vaccinated' => isset($data['vaccinated']) ? 1 : 0,
            'neutered' => isset($data['neutered']) ? 1 : 0,
            'description' => $data['description'],
            'isAdopted' => 0
        ];

        $AnimalsModel= new AnimalsModel();
        $AnimalsModel->hydrate($data);

        $animalRepository = new AnimalsRepository();
        $animalRepository->create($data);
    }
}