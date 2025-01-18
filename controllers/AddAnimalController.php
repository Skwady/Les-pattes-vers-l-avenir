<?php

namespace App\controllers;

use App\repository\AnimalsRepository;
use App\repository\RacesRepository;
use App\repository\SexeRepository;
use App\services\AddAnimalService;

class AddAnimalController extends Controller
{
    public function viewCat()
    {
        $animalsRepository = new AnimalsRepository();
        $animals = $animalsRepository->findAllBy(['idRace' => 2]);
        $this->render('addAnimals/viewCat', [
            'animals' => $animals
        ]);
    }
    
    public function viewDog()
    {
        $animalsRepository = new AnimalsRepository();
        $animals = $animalsRepository->findAllBy(['idRace' => 1]);
        $this->render('addAnimals/viewDog', [
            'animals' => $animals
        ]);
    }

    public function addAnimal()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_POST;
            $addAnimal = new AddAnimalService();
            $addAnimal->addAnimal($data);
        }else {
            json_encode(["status" => "error", "message" => "Method not allowed"]);
        }

        $racesRepository = new RacesRepository();
        $races = $racesRepository->findAll();

        $sexeRepository = new SexeRepository();
        $sexes = $sexeRepository->findAll();

        $this->render('addAnimals/addAnimal', [
            'races' => $races,
            'sexes' => $sexes
        ]);
    }
}