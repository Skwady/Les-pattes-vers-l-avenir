<?php

namespace App\services;

use App\models\AnimalsModel;
use App\repository\AnimalsRepository;

class AnimalService
{
    public function addAnimal($data)
    {
        $images = new CloudinaryService();
        $image = $images->validateAndUploadImage($_FILES['image']);
        if(!$image){
            echo json_encode(["status" => "error", "message" => "Error lors de l'upload de l'image"]);
            exit;
        }

        $data = [
            'name' => $data['name'],
            'age' => $data['age'],
            'img' => $image,
            'vaccinated' => isset($data['vaccinated']) ? 1 : 0,
            'dewormed' => isset($data['dewormed']) ? 1 : 0,
            'neutered' => isset($data['neutered']) ? 1 : 0,
            'description' => $data['description'],
            'children' => isset($data['children']) ? 1 : 0,
            'cat' => isset($data['cat']) ? 1 : 0,
            'dog' => isset($data['dog']) ? 1 : 0,
            'race' => $data['race'],
            'isAdopted' => 0,
            'idRace' => $data['idRace'],
            'idSexe' => $data['idSexe']
        ];

        $AnimalsModel= new AnimalsModel();
        $AnimalsModel->hydrate($data);

        $animalRepository = new AnimalsRepository();
        $result = $animalRepository->create($data);
        if($result){
            echo json_encode(["status" => "success", "message" => "Animal ajouté avec succès"]);
            exit;
        }else{
            echo json_encode(["status" => "error", "message" => "Error lors de l'ajout de l'animal"]);
            exit;
        }
    }

    public function UpdateAnimal($id, $data)
    {
        $animalRepository = new AnimalsRepository();
        $animal = $animalRepository->find($id);
        if(!$animal){
            echo json_encode(["status" => "error", "message" => "Animal non trouvé"]);
            exit;
        }
        $url = $animal->img;

        $images = new CloudinaryService();
        $image = $images->deleteFile($url);
        $image = $images->validateAndUploadImage($_FILES['image']);
        if(!$image){
            echo json_encode(["status" => "error", "message" => "Error lors de l'upload de l'image"]);
            exit;
        }

        $data = [
            'name' => $data['name'],
            'age' => $data['age'],
            'img' => $image,
            'vaccinated' => isset($data['vaccinated']) ? 1 : 0,
            'dewormed' => isset($data['dewormed']) ? 1 : 0,
            'neutered' => isset($data['neutered']) ? 1 : 0,
            'description' => $data['description'],
            'children' => isset($data['children']) ? 1 : 0,
            'cat' => isset($data['cat']) ? 1 : 0,
            'dog' => isset($data['dog']) ? 1 : 0,
            'race' => $data['race'],
            'isAdopted' => 0,
            'idRace' => $data['idRace'],
            'idSexe' => $data['idSexe']
        ];

        $AnimalsModel= new AnimalsModel();
        $AnimalsModel->hydrate($data);

        $animalRepository = new AnimalsRepository();
        $result = $animalRepository->update($id, $data);
        if($result){
            echo json_encode(["status" => "success", "message" => "Animal modifié avec succès"]);
            exit;
        }else{
            echo json_encode(["status" => "error", "message" => "Error lors de la modification de l'animal"]);
            exit;
        }
    }

    public function deleteAnimal() 
    {
        $id = $_GET['id'];
        $animalRepository = new AnimalsRepository();
        $animal = $animalRepository->find($id);
        if(!$animal){
            echo json_encode(["status" => "error", "message" => "Animal non trouvé"]);
            exit;
        }
        $url = $animal->img;

        $images = new CloudinaryService();
        $image = $images->deleteFile($url);
        if(!$image){
            echo json_encode(["status" => "error", "message" => "Error lors de la suppression de l'image"]);
            exit;
        }

        $result = $animalRepository->delete($id);
        if($result){
            echo json_encode(["status" => "success", "message" => "Animal supprimé avec succès"]);
            exit;
        }else{
            echo json_encode(["status" => "error", "message" => "Error lors de la suppression de l'animal"]);
            exit;
        }    
    }
}