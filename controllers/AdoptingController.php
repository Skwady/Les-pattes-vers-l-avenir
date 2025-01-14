<?php

namespace App\controllers;

use App\repository\AnimalsRepository;
use App\services\AdoptingService;

class AdoptingController extends Controller
{
    public function index($idAnimal)
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_POST;
            $adoptingService = new AdoptingService();
            $adoptingService->adopting($idAnimal, $data);
        }

        if(isset($_SESSION['id'])) {
            $animalsRepository = new AnimalsRepository();
            $animal = $animalsRepository->find($idAnimal);
            $this->render('adopting/index', [
                'animal' => $animal
            ]);
        } else {
            header('Location: /log');
        }
    }
}