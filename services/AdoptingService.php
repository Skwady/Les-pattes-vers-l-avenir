<?php

namespace App\services;

use App\Models\AdoptionModel;
use App\repository\AdoptingRepository;

class AdoptingService
{
    public function adopting($idAnimal, $data)
    {
        $data = [
            'fullName' => $data['fullName'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'housingType' => $data['housingType'],
            'garden' => $data['garden'],
            'otherPets' => $data['otherPets'],
            'petsDetails' => $data['petsDetails'],
            'adoptingReason' => $data['adoptingReason'],
            'experience' => $data['experience'],
            'availability' => $data['availability'],
            'idAnimal' => $idAnimal,
            'idUser' => $_SESSION['id']
        ];

        $adoptingModel = new AdoptionModel();
        $adoptingModel->hydrate($data);

        $adoptingRepository = new AdoptingRepository();
        $result = $adoptingRepository->create($data);

        if($result) {
            echo json_encode(['status' => 'success', 'message' => 'Votre demande d\'adoption a bien été envoyée']);
            exit();
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Une erreur est survenue lors de l\'envoi de votre demande d\'adoption']);
            exit();
        }
    }
}