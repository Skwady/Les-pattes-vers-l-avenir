<?php

namespace App\controllers;

use App\services\AddAnimalService;

class AddAnimalController extends Controller
{
    public function addAnimal()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_POST;
            $addAnimal = new AddAnimalService();
            $addAnimal->addAnimal($data);
        }else {
            json_encode(["status" => "error", "message" => "Method not allowed"]);
        }
        $this->render('addAnimals/index');
    }
}