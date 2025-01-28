<?php

namespace App\controllers;

use App\repository\AnimalsRepository;
use App\repository\RacesRepository;
use App\repository\SexeRepository;
use App\services\AnimalService;
use App\repository\AdoptingRepository;

class AnimalController extends Controller
{   
    public function view($id)
    {
        $animalsRepository = new AnimalsRepository();
        $animals = $animalsRepository->findAllBy(['idRace' => $id]);

        $adoptingRepository = new AdoptingRepository();
        $adoptionCounts = $adoptingRepository->countAdoptionsByAnimal();

        // Transformer les résultats en tableau associatif [idAnimal => total]
        $adoptionCountsMap = [];
        foreach ($adoptionCounts as $adoption) {
            $adoptionCountsMap[$adoption->idAnimal] = $adoption->total;
        }

        $this->render('addAnimals/view', [
            'animals' => $animals,
            'adoptionCounts' => $adoptionCountsMap
        ]);
    }

    public function addAnimal()
    {
        $racesRepository = new RacesRepository();
        $races = $racesRepository->findAll();

        $sexeRepository = new SexeRepository();
        $sexes = $sexeRepository->findAll();

        $this->render('addAnimals/addAnimal', [
            'sexes' => $sexes,
            'races' => $races
        ]);
    }

    public function updateAnimal($id)
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_POST;
            $addAnimal = new AnimalService();
            $addAnimal->updateAnimal($id, $data);
        }else {
            json_encode(["status" => "error", "message" => "Method not allowed"]);
        }

        $animalsRepository = new AnimalsRepository();
        $animal = $animalsRepository->find($id);

        $racesRepository = new RacesRepository();
        $races = $racesRepository->findAll();

        $sexeRepository = new SexeRepository();
        $sexes = $sexeRepository->findAll();

        $this->render('addAnimals/updateAnimal', [
            'animal' => $animal,
            'races' => $races,
            'sexes' => $sexes
        ]);
    }

    public function deleteAnimal($id)
    {
        $addAnimal = new AnimalService();
        $addAnimal->deleteAnimal($id);
    }
}