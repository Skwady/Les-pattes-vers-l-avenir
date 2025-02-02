<?php

namespace App\services;

use App\models\UsersModel;
use App\repository\UsersRepository;

class ConfirmService
{
    public function confirm($token)
    {
        $userRepository = new UsersRepository();
        
        // Récupérer l'utilisateur à partir du token
        $user = $userRepository->findOneBy(['token' => $token]);
        
        if ($user) {
            
            $data = [
                'token' => '',
                'isVerified' => 1
            ];
            
            $userModel = new UsersModel();
            $userModel->hydrate($data);

            // Sauvegarder les modifications en base de données
            $userRepository->update($user->id, $data);

            header('Location: /log');
            exit();
        } else {
            // Réponse JSON en cas d'erreur
            echo json_encode([
                "status" => "error",
                "message" => "Une erreur est survenue. Token invalide ou utilisateur introuvable."
            ]);
            exit();
        }
    }
}
